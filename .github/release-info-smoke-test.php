<?php
// Smoke test for the machine-readable release information
// (latest_*.txt, releases.json, and releases.atom; see
// includes/downloads.inc).  Run from the top of the tree, with TMPDIR
// pointing at an empty directory:
//
//     TMPDIR=$(mktemp -d) php .github/release-info-smoke-test.php
//
// It seeds the local release cache with fake build information for
// every release listed in the version.inc files (so no S3 access is
// needed), runs each endpoint with php-cli the way Apache would (from
// the endpoint's own directory), and checks that the output parses and
// has the documented shape.  It does not exercise .htaccess.

$root = getcwd();
$topdir = ".";
require_once("$root/includes/downloads.inc");

$failures = 0;

function check($cond, $msg)
{
    global $failures;
    if (!$cond) {
        fwrite(STDERR, "FAIL: $msg\n");
        $failures++;
    }
}

// Run an endpoint in a separate PHP process (as each web request is),
// from its own directory.
function run_endpoint($path)
{
    global $root;

    $code = 'include(getenv("SMOKE_SCRIPT"));';
    $env = getenv();
    $env['SMOKE_SCRIPT'] = basename($path);
    $proc = proc_open([PHP_BINARY, '-d', 'display_errors=stderr',
                       '-d', 'error_reporting=' . (E_ALL & ~E_DEPRECATED), '-r', $code],
                      [1 => ['pipe', 'w'], 2 => ['pipe', 'w']], $pipes,
                      dirname("$root/$path"), $env);
    $out = stream_get_contents($pipes[1]);
    $err = stream_get_contents($pipes[2]);
    fclose($pipes[1]);
    fclose($pipes[2]);
    $rc = proc_close($proc);
    check($rc === 0 && $err === "", "$path: exit $rc, stderr: $err");
    return $out;
}

if (release_cache_dir() === NULL) {
    fwrite(STDERR, "FAIL: no private release cache directory under TMPDIR\n");
    exit(1);
}

// Seed the cache with fake build information for every covered release
list($current_series, $all_series) = read_all_series($topdir, "software/ompi");
check(count($all_series) > 0, "no release series found");
$time = 1700000000;
$num_versions = 0;
$is_prerelease = [];
foreach ($all_series as $series_info) {
    foreach (series_versions($series_info) as $v) {
        $name = "openmpi-" . $v['version'] . ".tar.bz2";
        $info = ['build_unix_time' => $time++,
                 'files' => [$name => ['size' => 1234,
                                       'sha256' => str_repeat("a", 64),
                                       'sha1' => str_repeat("b", 40),
                                       'md5' => str_repeat("c", 32)]],
                 'revision' => $v['version'],
                 'valid' => true];
        release_cache_put("open-mpi-release",
                          $series_info['s3_prefix'] . "build-openmpi-" . $v['version'] . ".json",
                          json_encode($info));
        $num_versions++;
        $is_prerelease[$v['version']] = $v['prerelease'];
    }
}

function check_feed($path, $expected_entries)
{
    global $is_prerelease;

    $xml = run_endpoint($path);
    $feed = @simplexml_load_string($xml);
    check($feed !== false, "$path: not well-formed XML");
    if ($feed === false) {
        return;
    }
    check($feed->getName() === "feed" &&
          in_array("http://www.w3.org/2005/Atom", $feed->getNamespaces()),
          "$path: not an Atom feed");
    check(count($feed->entry) == $expected_entries,
          "$path: " . count($feed->entry) . " entries, expected $expected_entries");
    $id_prefix = "tag:open-mpi.org,2026:openmpi/release/";
    foreach ($feed->entry as $entry) {
        $id = (string) $entry->id;
        check(strpos($id, $id_prefix) === 0, "$path: bad entry id $id");
        // Feed readers tell prereleases apart by their category and
        // title, so check that both mark exactly the prereleases.
        $version = substr($id, strlen($id_prefix));
        $prerelease = $is_prerelease[$version] ?? NULL;
        check($prerelease !== NULL, "$path: unknown version $version");
        $terms = [];
        foreach ($entry->category as $category) {
            $terms[] = (string) $category['term'];
        }
        $kinds = array_values(array_intersect($terms, ["release", "prerelease"]));
        check($kinds === [$prerelease ? "prerelease" : "release"],
              "$path: $version categories " . implode(",", $terms));
        check((substr((string) $entry->title, -strlen(" (prerelease)")) === " (prerelease)") === $prerelease,
              "$path: $version title " . $entry->title);
    }
}

// Top-level index
$index = json_decode(run_endpoint("software/ompi/releases.json"), true);
check(is_array($index), "releases.json: not JSON");
if (is_array($index)) {
    check($index['schema_version'] === 1, "releases.json: schema_version");
    check($index['current_series'] === $current_series, "releases.json: current_series");
    check(count($index['series']) == count($all_series), "releases.json: series count");
    foreach ($index['series'] as $s) {
        check(release_info_covers_series(['release_series' => $s['series']]),
              "releases.json: lists ancient series " . $s['series']);
        check($s['details_url'] === "https://www.open-mpi.org/software/ompi/v" .
              $s['series'] . "/downloads/releases.json",
              "releases.json: details_url of " . $s['series']);
        if ($s['series'] === $current_series) {
            check($index['latest_release'] === $s['latest_release'],
                  "releases.json: latest_release");
        }
    }
    check(trim(run_endpoint("software/ompi/current/downloads/latest_release.txt")) ===
          $index['latest_release'], "current/downloads/latest_release.txt");
}

// Per-series files
foreach ($all_series as $series_info) {
    $dir = "software/ompi/v" . $series_info['release_series'] . "/downloads";
    $releases = $series_info['releases'];
    $prereleases = $series_info['prereleases'];

    $doc = json_decode(run_endpoint("$dir/releases.json"), true);
    check(is_array($doc), "$dir/releases.json: not JSON");
    if (is_array($doc)) {
        $versions = array_merge($prereleases, $releases);
        check(array_column($doc['release_details'], 'version') === $versions,
              "$dir/releases.json: release_details versions");
        foreach ($doc['release_details'] as $d) {
            check(count($d['files']) == 1 && isset($d['files'][0]['sha256']) &&
                  strpos($d['files'][0]['url'], $series_info['download_prefix']) === 0,
                  "$dir/releases.json: files of " . $d['version']);
            check(preg_match('/^\d{4}-\d\d-\d\dT\d\d:\d\d:\d\dZ$/', $d['release_date']) === 1,
                  "$dir/releases.json: release_date of " . $d['version']);
        }
    }

    $expected = (count($releases) > 0) ? $releases[0] : "";
    check(run_endpoint("$dir/latest_release.txt") === $expected, "$dir/latest_release.txt");
    $expected = (count($prereleases) > 0) ? $prereleases[0] : $expected;
    check(run_endpoint("$dir/latest_snapshot.txt") === $expected, "$dir/latest_snapshot.txt");

    check_feed("$dir/releases.atom", count($prereleases) + count($releases));
}

// Top-level feed
check_feed("software/ompi/releases.atom", min($release_feed_max_entries, $num_versions));

if ($failures > 0) {
    fwrite(STDERR, "$failures failure(s)\n");
    exit(1);
}
print("All release info endpoint checks passed\n");
