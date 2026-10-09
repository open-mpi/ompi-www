<?php

// Turn off error reporting (stat errors are ugly)
//error_reporting(0);

require "$topdir/includes/aws/aws-autoloader.php";
use Aws\Credentials\CredentialProvider;
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

# HostGator's apache runs as root, so it looks for creds 
# in the wrong place.  Special case the search path for 
# HostGator and use the default location (or role) on other
# hosts.
if (strpos(gethostname(), 'hostgator.com') !== false) {
    $provider = CredentialProvider::ini("default", "/home2/ompiteam/.aws/credentials");
    $provider = CredentialProvider::memoize($provider);
} else {
    $provider = CredentialProvider::defaultProvider();
}

function prettyprint_filesize($size) {
    $base = log($size, 1024);
    $suffixes = array(' B', ' KiB', ' MiB', ' GiB', ' TiB');

    return round(pow(1024, $base - floor($base)), 2) .' '. $suffixes[floor($base)];
}

// function to print a download table for either releases or nightly
// snapshots.  release_infos is sorted array of releases, which are a
// hash array of structure:
// { [build_unix_time] => <time>,
//   [files] => <files array>,
//   [release_name] => <release name>
// }
//
// where files array is an array of hashed arrays of filename to
// another hashed array with structure:
// { [size] => <file size>
//   [sha1] => <file sha1>
//   [md5] => <file md5>
// }
//
// There may be other fields in the structure, as it will generally be
// populated directly from the json blobs representing releases in S3.
//
// download_prefix is the leading part of the download URL, including
// the resource type.  extra_rows is unformatted text that will be
// displayed below the releases as part of the release table.
function print_download_table($release_infos, $download_prefix, $extra_rows = [])
{
    print("<TABLE BORDER=1 CELLPADDING=5>\n");
    print("<TR>
<TH>Release</TH>
<TH>File names</TH>
<TH>Size</TH>
<TH>Date</TH>
<TH>Checksums (GNU md5sum and sha1sum v5.2.1)</TH>
</TR>\n\n");
    foreach($release_infos as &$release) {
        $found_rpm = 0;
        $found_windows = 0;
        $found_osx_pkg = 0;

        foreach(array_keys($release["files"]) as $filename) {
            if (preg_match("/\.src\.rpm/", $filename)) {
                $found_rpm = 1;
            }
            if (preg_match("/\.exe/", $filename)) {
                $found_windows = 1;
            }
            if (preg_match("/\.dmg\.gz/", $filename)) {
                $found_osx_pkg = 1;
            }
        }
        $blah = 0;
        $count = count($release["files"]);
        $fileinfo = $release["files"];
        ksort($fileinfo);
        $numfiles = count($fileinfo);
        foreach($fileinfo as $file => $filedata) {
            print("<TR>\n");
            if ($blah == 0) {
                print("<TD ROWSPAN=$numfiles>" . $release['release_name']);
                if ($found_rpm) {
                    print("<BR><a href=\"srpm.php\">SRPM notes</a>\n");
                }
                if ($found_windows) {
                    print("<BR><a href=\"ms-windows.php\">MS Windows notes</a>\n");
                }
                if ($found_osx_pkg) {
                    print("<BR><a href=\"macosx.php\">MacOS Package notes</a>\n");
                }
                print("</TD>\n");
                $blah = 1;
            }
            print("<TD><A HREF=\"" . $download_prefix . $file . "\">" . $file . "</A></TD>\n");
            print("<TD>" . prettyprint_filesize($filedata["size"]) . "</TD>\n");
            print("<TD>" . gmdate("M d, Y", $release["build_unix_time"]) . "</TD>\n");
            print("<TD>");
            if (isset($filedata["md5"])) {
                print("MD5:&nbsp;" . $filedata["md5"] . "<BR>");
            }
            if (isset($filedata["sha1"])) {
                print("SHA1:&nbsp;" . $filedata["sha1"] . "<BR>");
            }
            if (isset($filedata["sha256"])) {
                print("SHA256:&nbsp;" . $filedata["sha256"] . "<BR>");
            }
            print("</TD>\n");
            print("</TR>\n");
        }
    }
    foreach ($extra_rows as $row) {
        print("<TR><TD COLSPAN=\"5\">" . $row . "</TD></TR>\n");
    }
    print("</TABLE>\n\n");
}

function print_release_section($project, $s3_bucket, $s3_prefix, $download_prefix,
                               $releases, $prereleases, $cygwin_note)
{
    if (count($releases) > 0) {
        $extra_rows = array();

        if ($cygwin_note) {
            $extra_rows[] = "Cygwin provides <A HREF=\"http://cygwin.com/cgi-bin2/package-grep.cgi?grep=openmpi\">binaries for the $release_series release series</A>.\n";
        }

        print("</div>\n\n<h2>Current stable release downloads:</h2>\n\n<p>\n<div align=center>\n\n");
        print_release_table($project, array_slice($releases, 0, 1), $s3_bucket,
                            $s3_prefix, $download_prefix, $extra_rows);
    }

    if (count($prereleases) > 0) {
        print("</div>\n\n<h2>Prerelease downloads:</h2>\n\n<p>\n<div align=center>\n\n");
        print_release_table($project, $prereleases, $s3_bucket, $s3_prefix,
                            $download_prefix);
    }

    if (count($releases) > 1) {
        print("</div>\n\n<h2>Previous release downloads:</h2>\n\n<p>\n<div align=center>\n\n");
        print_release_table($project, array_slice($releases, 1), $s3_bucket,
                            $s3_prefix, $download_prefix);
    }
}

function print_release_table($project, $releases, $bucket, $s3_prefix,
                             $download_prefix, $extra_rows = [])
{
    $release_infos = [];

    $keys = [];
    foreach($releases as $release) {
        $keys[$release] = $s3_prefix . "build-" . $project . "-" . $release . ".json";
    }
    $infos = get_release_build_infos($bucket, array_values($keys));

    foreach($releases as $release) {
        $info = $infos[$keys[$release]];
        if ($info === NULL) {
            // not much we can do, so just skip this entry
            continue;
        }

        # add a name for display
        $info['release_name'] = $release;
        $release_infos[] = $info;
    }

    print_download_table($release_infos, $download_prefix, $extra_rows);
}

// For a given bucket and prefix, grab the contents of the
// latest_snapshot.txt file.
function get_latest_snapshot($bucket, $prefix) {
    $latest_key = $prefix . "latest_snapshot.txt";

    $data = get_download_file($bucket, $latest_key);
    if ($data == NULL) {
        return "";
    }

    return $data;
}

// Reuse one S3 client for all lookups in a request; callers such as
// releases.json fetch many files.
function get_s3_client() {
    static $s3_client = NULL;
    global $provider;

    if ($s3_client === NULL) {
        $s3_client = new S3Client(['region' => 'us-west-2',
                                   'version' => '2006-03-01',
                                   'credentials' => $provider]);
    }
    return $s3_client;
}

function get_download_file($bucket, $key) {
    try {
        $data = get_s3_client()->getObject(['Bucket' => $bucket,
                                            'Key' => $key]);
    } catch (Exception $e) {
        error_log("get_download_file failed: " . $e);
        return NULL;
    }

    return $data['Body'];
}

// Local cache of release build information.
//
// Every release has a small build-<project>-<version>.json in S3
// with its date, files, sizes, and checksums.  It essentially never
// changes once a release is published, but the download pages,
// latest_*.txt, releases.json, and releases.atom all need it, and
// automated tools poll the latter.  Caching it on local disk keeps
// those requests fast and from turning into a stream of S3 GETs.
// Entries expire after $release_cache_ttl seconds, in case a
// release's files are ever re-uploaded; an expired entry is still
// used if S3 cannot be reached.  Nightly snapshot information
// changes constantly, so it is never cached.
$release_cache_ttl = 24 * 60 * 60;

// The cache directory, or NULL if there is no safe one (in which case
// everything is read from S3).  The cached files hold the checksums
// that the web site publishes, so only use a directory that is
// private to the user PHP runs as: nobody else must be able to plant
// a file in it.
function release_cache_dir() {
    static $dir = false;

    if ($dir !== false) {
        return $dir;
    }
    $dir = NULL;

    $candidate = sys_get_temp_dir() . "/ompi-www-release-cache";
    if (!file_exists($candidate)) {
        @mkdir($candidate, 0700);
    }
    clearstatcache();
    if (is_link($candidate) || !is_dir($candidate)) {
        error_log("release cache: $candidate is not a directory; not caching");
        return $dir;
    }
    if ((fileperms($candidate) & 0077) != 0 ||
        (function_exists('posix_geteuid') && fileowner($candidate) !== posix_geteuid())) {
        error_log("release cache: $candidate is not private; not caching");
        return $dir;
    }

    $dir = $candidate;
    return $dir;
}

function release_cache_filename($bucket, $key) {
    $dir = release_cache_dir();
    if ($dir === NULL) {
        return NULL;
    }
    return $dir . "/" . hash('sha256', $bucket . "/" . $key) . ".json";
}

function release_cache_get($bucket, $key, $allow_expired = false) {
    global $release_cache_ttl;

    $filename = release_cache_filename($bucket, $key);
    if ($filename === NULL || !is_file($filename) ||
        (!$allow_expired && time() - filemtime($filename) > $release_cache_ttl)) {
        return NULL;
    }
    $data = @file_get_contents($filename);
    return ($data === false) ? NULL : $data;
}

// The decoded contents of a cache entry, even if it has expired, for
// use when S3 cannot be reached: build information essentially never
// changes, so an old copy is far better than none.
function release_cache_get_expired($bucket, $key) {
    $data = release_cache_get($bucket, $key, true);
    if ($data === NULL) {
        return NULL;
    }
    $info = json_decode($data, true);
    return is_array($info) ? $info : NULL;
}

function release_cache_put($bucket, $key, $data) {
    $filename = release_cache_filename($bucket, $key);
    if ($filename === NULL) {
        return;
    }
    // Write to a private temporary file and rename it into place so
    // that concurrent requests never read a partially-written file.
    $tmp = @tempnam(dirname($filename), "tmp");
    if ($tmp === false) {
        return;
    }
    if (@file_put_contents($tmp, $data) !== strlen($data) ||
        !@chmod($tmp, 0600) || !@rename($tmp, $filename)) {
        @unlink($tmp);
    }
}

// Return the decoded build information of several releases, as an
// array mapping each of $keys (S3 keys of build-*.json files) to its
// information, or to NULL if it could not be retrieved.  Cache misses
// are fetched from S3 in parallel.
function get_release_build_infos($bucket, $keys) {
    $infos = [];
    $misses = [];
    foreach ($keys as $key) {
        $infos[$key] = NULL;
        $data = release_cache_get($bucket, $key);
        if ($data !== NULL) {
            $infos[$key] = json_decode($data, true);
        }
        if (!is_array($infos[$key])) {
            $misses[] = $key;
        }
    }
    if (count($misses) == 0) {
        return $infos;
    }

    try {
        $s3_client = get_s3_client();
        $promises = [];
        foreach ($misses as $key) {
            $promises[$key] = $s3_client->getObjectAsync(['Bucket' => $bucket,
                                                          'Key' => $key]);
        }
        $results = \GuzzleHttp\Promise\Utils::settle($promises)->wait();
    } catch (Exception $e) {
        error_log("get_release_build_infos failed: " . $e);
        foreach ($misses as $key) {
            $infos[$key] = release_cache_get_expired($bucket, $key);
        }
        return $infos;
    }

    foreach ($misses as $key) {
        if ($results[$key]['state'] !== 'fulfilled') {
            error_log("Release build info lookup failed: " . $key . ": " .
                      $results[$key]['reason']);
            $infos[$key] = release_cache_get_expired($bucket, $key);
            continue;
        }
        $data = (string) $results[$key]['value']['Body'];
        $info = json_decode($data, true);
        if (!is_array($info) || !isset($info['build_unix_time']) ||
            !isset($info['files'])) {
            error_log("Malformed build info: " . $key);
            $infos[$key] = release_cache_get_expired($bucket, $key);
            continue;
        }
        release_cache_put($bucket, $key, $data);
        $infos[$key] = $info;
    }
    return $infos;
}

// Get all the nightly tarballs currently available for a given prefix
// in bucket.  This function is not recursive; it assumes that prefix
// is a pointer into a particular release series nightly tarball
// directory.
function get_nightly_build_info($bucket, $prefix)
{
    $builds = NULL;

    try {
        global $provider;

        $s3_client = new S3Client(['region' => 'us-west-2',
                                   'version' => '2006-03-01',
                                   'credentials' => $provider]);

        $s3_objects = $s3_client->getIterator('ListObjects',
                                              ['Bucket' => $bucket,
                                               'Prefix' => $prefix]);
    } catch (Exception $e) {
        // essentially, return the NULL set; we couldn't get any useful
        // information
        return $builds;
    }

    foreach($s3_objects as $s3_object) {
        $ret = preg_match('/build-.*\.json/', $s3_object['Key']);
        if ($ret == 1) {
            try {
                $data = $s3_client->getObject(['Bucket' => $bucket,
                                               'Key' => $s3_object['Key']]);
                $info = json_decode($data['Body'], true);
            } catch (Exception $e) {
                // not much we can do, so just skip this entry
                error_log("Object lookup failed: " . $e);
                continue;
            }

            // skip builds with the valid bit turned off
            if (! $info['valid']) {
                continue;
            }

            // generate a release name based on the pretty-printed
            // build date
            $info['release_name'] = gmdate("M d, Y", $info["build_unix_time"]) . ' Nightly Tarball';
            $builds[] = $info;
        }
    }

    // sort with most recent first.
    usort($builds, 'build_time_sort_func');

    return $builds;
}

function build_time_sort_func($a, $b)
{
    if ($a['build_unix_time'] < $b['build_unix_time']) {
        return 1;
    } else if ($a['build_unix_time'] == $b['build_unix_time']) {
        return 0;
    } else {
        return -1;
    }
}

// grab all nightly tarballs for a given prefix and print a download
// table.  Assumes that prefix is a release series directory; it will
// not handle recursive directory structure well (it's likely to not
// print any tarballs).
function print_nightly_table($bucket, $prefix, $download_prefix) {
    $builds = get_nightly_build_info($bucket, $prefix);

    if (!$builds) {
        return;
    }

    print_download_table($builds, $download_prefix);
}

function latest_snapshot_output($project, $s3_prefix, $prereleases, $releases) {
    if (count($prereleases) > 0) {
        $latest = $prereleases[0];
    } else if (count($releases) > 0) {
        $latest = $releases[0];
    } else {
        $latest = NULL;
    }

    if ($latest != NULL) {
        $filename = $s3_prefix . "build-" . $project . "-" . $latest . ".json";
        $info = get_release_build_infos("open-mpi-release", [$filename])[$filename];
    } else {
        $info = NULL;
    }
    if ($info === NULL) {
        header("HTTP/1.0 404 Not Found");
        return;
    }

    header("Content-Type: text/plain; charset=UTF-8");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s", $info["build_unix_time"]) . " GMT");
    print($latest);
}

// Machine-readable release information (releases.json and
// releases.atom).
//
// These documents are a public interface: third parties poll them to
// discover new releases.  Their contract is documented in the
// "Downloading Open MPI" section of the Open MPI documentation
// (docs/installing-open-mpi/downloading.rst in the ompi repo).  Only
// add fields; if an existing field must change meaning or go away,
// bump $release_info_schema_version and update that documentation.
$release_info_schema_version = 1;

// Does the request's If-None-Match header match $etag?  Accept a list of
// validators, weak validators, and the suffix that Apache's mod_deflate
// adds to the ETag of a compressed response (e.g., "<etag>-gzip").
function release_info_etag_matches($etag)
{
    if (!isset($_SERVER['HTTP_IF_NONE_MATCH'])) {
        return false;
    }
    $etag = trim($etag, '"');
    foreach (explode(",", $_SERVER['HTTP_IF_NONE_MATCH']) as $candidate) {
        $candidate = trim($candidate);
        if ($candidate === "*") {
            return true;
        }
        $candidate = trim(preg_replace('/^W\//', '', $candidate), '"');
        $candidate = preg_replace('/-(gzip|br|deflate)$/', '', $candidate);
        if ($candidate === $etag) {
            return true;
        }
    }
    return false;
}

// Release series before v4.1 are ancient: the machine-readable release
// information does not cover them, and their download directories do
// not have the per-series files.
function release_info_covers_series($series_info)
{
    return version_compare($series_info['release_series'], "4.1", ">=");
}

// Maximum number of entries in the all-series Atom feed.  Per-series
// feeds list every release in the series.
$release_feed_max_entries = 25;

// Return the variables of interest from a release series'
// version.inc.  The file is included inside this function so that
// several series can be read without clobbering each other's
// variables.
function read_series_version_inc($filename)
{
    include($filename);

    return ['release_series' => $release_series,
            'release_branch' => $release_branch,
            'download_prefix' => $download_prefix,
            's3_prefix' => $s3_prefix,
            'releases' => $releases,
            'prereleases' => $prereleases];
}

// Read every release series of a project.  $project_dir is the
// project's software tree relative to $topdir (e.g., "software/ompi");
// it contains current/ and the vX.Y/ series directories.  Returns the
// current series name and the series, newest first.
function read_all_series($topdir, $project_dir)
{
    // current/version.inc uses $topdir to find the current series
    $project_dir = $topdir . "/" . $project_dir;
    include($project_dir . "/current/version.inc");
    $current_series = preg_replace("/^v/", "", $ver_current_dir);

    $series = [];
    foreach (glob($project_dir . "/v*/version.inc") as $filename) {
        $series_info = read_series_version_inc($filename);
        if (release_info_covers_series($series_info)) {
            $series[] = $series_info;
        }
    }
    usort($series, function ($a, $b) {
        return version_compare($b['release_series'], $a['release_series']);
    });

    return [$current_series, $series];
}

function series_web_page_url($series_info, $web_prefix)
{
    return $web_prefix . "v" . $series_info['release_series'] . "/";
}

// Summary of a release series, built only from its version.inc data
// (i.e., no S3 lookups).  $web_prefix is the URL of the project's
// software tree (e.g., https://www.open-mpi.org/software/ompi/).
function series_summary($series_info, $web_prefix)
{
    $releases = $series_info['releases'];
    $prereleases = $series_info['prereleases'];
    $series_url = series_web_page_url($series_info, $web_prefix);

    return ['series' => $series_info['release_series'],
            'branch' => $series_info['release_branch'],
            'latest_release' => (count($releases) > 0) ? $releases[0] : NULL,
            'latest_prerelease' => (count($prereleases) > 0) ? $prereleases[0] : NULL,
            'releases' => $releases,
            'prereleases' => $prereleases,
            'web_page_url' => $series_url,
            'download_url_prefix' => $series_info['download_prefix'],
            'details_url' => $series_url . "downloads/releases.json"];
}

// The versions of a series, newest first: prereleases, then releases.
function series_versions($series_info)
{
    $versions = [];
    foreach ($series_info['prereleases'] as $version) {
        $versions[] = ['series_info' => $series_info,
                       'version' => $version, 'prerelease' => true];
    }
    foreach ($series_info['releases'] as $version) {
        $versions[] = ['series_info' => $series_info,
                       'version' => $version, 'prerelease' => false];
    }
    return $versions;
}

// Details (date and downloadable files) of each of $versions (as
// returned by series_versions()), from their build information (see
// get_release_build_infos()).  Returns the details in the same order,
// (keyed like $versions), or NULL if any of them could not be
// retrieved -- unless $skip_unavailable, in which case those are left
// out.
function fetch_release_details($project, $versions, $skip_unavailable = false)
{
    $keys = [];
    foreach ($versions as $i => $v) {
        $keys[$i] = $v['series_info']['s3_prefix'] . "build-" . $project . "-" .
            $v['version'] . ".json";
    }
    $infos = get_release_build_infos("open-mpi-release", array_values($keys));

    $details = [];
    foreach ($versions as $i => $v) {
        $info = $infos[$keys[$i]];
        if ($info === NULL) {
            if ($skip_unavailable) {
                continue;
            }
            return NULL;
        }

        $filenames = array_keys($info['files']);
        sort($filenames);
        $files = [];
        foreach ($filenames as $name) {
            $filedata = $info['files'][$name];
            $file = ['name' => $name,
                     'url' => $v['series_info']['download_prefix'] . $name,
                     'size' => $filedata['size']];
            foreach (['sha256', 'sha1', 'md5'] as $hash) {
                if (isset($filedata[$hash])) {
                    $file[$hash] = $filedata[$hash];
                }
            }
            $files[] = $file;
        }

        $details[$i] = ['version' => $v['version'],
                      'prerelease' => $v['prerelease'],
                      'release_date' => gmdate("Y-m-d\TH:i:s\Z", $info['build_unix_time']),
                      'release_unix_time' => $info['build_unix_time'],
                      'files' => $files];
    }
    return $details;
}

// Emit a release information document, honoring If-None-Match so
// that well-behaved pollers can avoid re-downloading an unchanged
// document.
function release_info_output($body, $content_type, $last_modified = NULL)
{
    $etag = '"' . md5($body) . '"';

    header("Content-Type: " . $content_type);
    header("Cache-Control: public, max-age=300");
    header("ETag: " . $etag);
    if ($last_modified !== NULL) {
        header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified) . " GMT");
    }
    if (release_info_etag_matches($etag)) {
        http_response_code(304);
        return;
    }
    print($body);
}

function release_info_json_output($doc, $last_modified = NULL)
{
    $body = json_encode($doc, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    if ($body === false) {
        error_log("release info JSON encoding failed: " . json_last_error_msg());
        release_info_unavailable();
        return;
    }
    release_info_output($body . "\n", "application/json", $last_modified);
}

function release_info_unavailable()
{
    header("HTTP/1.0 503 Service Unavailable");
    header("Retry-After: 300");
}

// Top-level releases.json: one summary entry per release series,
// newest series first.  This only reads version.inc files, so it is
// cheap.
function release_index_json_output($project_name, $topdir, $project_dir, $web_prefix)
{
    global $release_info_schema_version;

    list($current_series, $all_series) = read_all_series($topdir, $project_dir);

    $series = [];
    $latest_release = NULL;
    foreach ($all_series as $series_info) {
        $summary = series_summary($series_info, $web_prefix);
        if ($summary['series'] === $current_series) {
            $latest_release = $summary['latest_release'];
        }
        $series[] = $summary;
    }

    release_info_json_output(['schema_version' => $release_info_schema_version,
                              'project' => $project_name,
                              'current_series' => $current_series,
                              'latest_release' => $latest_release,
                              'series' => $series]);
}

// Per-series releases.json: the series summary plus full details
// (date, file URLs, sizes, checksums) of every release and
// prerelease in the series, newest first.  Responds 503 if any
// release's build information is unavailable rather than serving an
// incomplete document.
function release_series_json_output($project, $series_inc, $web_prefix)
{
    global $release_info_schema_version;

    $series_info = read_series_version_inc($series_inc);
    $details = fetch_release_details($project, series_versions($series_info));
    if ($details === NULL) {
        release_info_unavailable();
        return;
    }

    $last_modified = NULL;
    foreach ($details as $d) {
        if ($last_modified === NULL || $d['release_unix_time'] > $last_modified) {
            $last_modified = $d['release_unix_time'];
        }
    }

    $doc = ['schema_version' => $release_info_schema_version] +
        series_summary($series_info, $web_prefix);
    $doc['release_details'] = $details;
    release_info_json_output($doc, $last_modified);
}

function release_feed_enclosure_type($filename)
{
    $types = ['/\.tar\.bz2$/' => 'application/x-bzip2',
              '/\.gz$/' => 'application/gzip',
              '/\.rpm$/' => 'application/x-rpm',
              '/\.exe$/' => 'application/vnd.microsoft.portable-executable'];
    foreach ($types as $pattern => $type) {
        if (preg_match($pattern, $filename)) {
            return $type;
        }
    }
    return 'application/octet-stream';
}

function xml_escape($str)
{
    return htmlspecialchars($str, ENT_XML1 | ENT_QUOTES, 'UTF-8');
}

// Emit an Atom feed with one entry per release in $details (each of
// which has 'series_info' added), newest first.  $feed has keys
// 'project', 'project_name', 'id_suffix', 'title', 'self_url', and
// 'page_url', and optionally 'max_entries' (the number of newest
// releases to include).  $fallback_updated is used as the feed's updated time
// when there are no entries.
function release_atom_output($feed, $details, $web_prefix, $fallback_updated)
{
    usort($details, function ($a, $b) {
        return $b['release_unix_time'] - $a['release_unix_time'];
    });
    if (isset($feed['max_entries'])) {
        $details = array_slice($details, 0, $feed['max_entries']);
    }

    // Tag URIs (RFC 4151) give entries IDs that never change, even if
    // the web site moves.  Never change this prefix.
    $id_prefix = "tag:open-mpi.org,2026:" . $feed['project'] . "/";

    $updated = (count($details) > 0) ? $details[0]['release_unix_time'] : $fallback_updated;

    $xml = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
    $xml .= "<feed xmlns=\"http://www.w3.org/2005/Atom\">\n";
    $xml .= "  <id>" . xml_escape($id_prefix . $feed['id_suffix']) . "</id>\n";
    $xml .= "  <title>" . xml_escape($feed['title']) . "</title>\n";
    $xml .= "  <updated>" . gmdate("Y-m-d\TH:i:s\Z", $updated) . "</updated>\n";
    $xml .= "  <link rel=\"self\" type=\"application/atom+xml\" href=\"" . xml_escape($feed['self_url']) . "\"/>\n";
    $xml .= "  <link rel=\"alternate\" type=\"text/html\" href=\"" . xml_escape($feed['page_url']) . "\"/>\n";
    $xml .= "  <author><name>The " . xml_escape($feed['project_name']) . " Project</name></author>\n";

    foreach ($details as $d) {
        $series = $d['series_info']['release_series'];
        $name = $feed['project_name'] . " " . $d['version'];
        $date = gmdate("Y-m-d\TH:i:s\Z", $d['release_unix_time']);
        $page_url = series_web_page_url($d['series_info'], $web_prefix);

        $xml .= "  <entry>\n";
        $xml .= "    <id>" . xml_escape($id_prefix . "release/" . $d['version']) . "</id>\n";
        $xml .= "    <title>" . xml_escape($name . ($d['prerelease'] ? " (prerelease)" : "")) . "</title>\n";
        $xml .= "    <published>" . $date . "</published>\n";
        $xml .= "    <updated>" . $date . "</updated>\n";
        $xml .= "    <link rel=\"alternate\" type=\"text/html\" href=\"" . xml_escape($page_url) . "\"/>\n";
        foreach ($d['files'] as $file) {
            $xml .= "    <link rel=\"enclosure\" type=\"" . release_feed_enclosure_type($file['name']) .
                "\" length=\"" . $file['size'] . "\" title=\"" . xml_escape($file['name']) .
                "\" href=\"" . xml_escape($file['url']) . "\"/>\n";
        }
        $xml .= "    <category term=\"" . ($d['prerelease'] ? "prerelease" : "release") . "\"/>\n";
        $xml .= "    <category term=\"v" . xml_escape($series) . "\" label=\"v" . xml_escape($series) . " series\"/>\n";
        $xml .= "    <summary>" . xml_escape($name . ($d['prerelease'] ? " (a prerelease)" : "") .
                                             " is available for download from the v" . $series .
                                             " download page, which lists its files and their checksums.") .
            "</summary>\n";
        $xml .= "  </entry>\n";
    }
    $xml .= "</feed>\n";

    release_info_output($xml, "application/atom+xml; charset=utf-8",
                        (count($details) > 0) ? $updated : NULL);
}

// Add each release's series to its details, for release_atom_output().
function add_series_info($details, $versions)
{
    foreach ($details as $i => $d) {
        $details[$i]['series_info'] = $versions[$i]['series_info'];
    }
    return $details;
}

// Top-level releases.atom: the most recent releases across all
// series.
function release_index_atom_output($project, $project_name, $topdir, $project_dir, $web_prefix)
{
    global $release_feed_max_entries;

    list($current_series, $all_series) = read_all_series($topdir, $project_dir);
    $versions = [];
    foreach ($all_series as $series_info) {
        $versions = array_merge($versions, series_versions($series_info));
    }
    // Leave out any release whose details are unavailable rather than
    // failing the whole feed.
    $details = fetch_release_details($project, $versions, true);
    if ($details === NULL || (count($details) == 0 && count($versions) > 0)) {
        release_info_unavailable();
        return;
    }
    $details = add_series_info($details, $versions);

    release_atom_output(['project' => $project,
                         'project_name' => $project_name,
                         'id_suffix' => "releases",
                         'title' => $project_name . " releases",
                         'self_url' => $web_prefix . "releases.atom",
                         'page_url' => $web_prefix,
                         'max_entries' => $release_feed_max_entries],
                        $details,
                        $web_prefix,
                        filemtime($topdir . "/" . $project_dir . "/current/version.inc"));
}

// Per-series releases.atom: every release in the series.
function release_series_atom_output($project, $project_name, $series_inc, $web_prefix)
{
    $series_info = read_series_version_inc($series_inc);
    $versions = series_versions($series_info);
    // Leave out any release whose details are unavailable rather than
    // failing the whole feed.
    $details = fetch_release_details($project, $versions, true);
    if ($details === NULL || (count($details) == 0 && count($versions) > 0)) {
        release_info_unavailable();
        return;
    }

    $series_url = series_web_page_url($series_info, $web_prefix);
    release_atom_output(['project' => $project,
                         'project_name' => $project_name,
                         'id_suffix' => "releases/v" . $series_info['release_series'],
                         'title' => $project_name . " v" . $series_info['release_series'] . " releases",
                         'self_url' => $series_url . "downloads/releases.atom",
                         'page_url' => $series_url],
                        add_series_info($details, $versions),
                        $web_prefix,
                        filemtime($series_inc));
}

// <link> tags for Atom feed auto-discovery on a series download page
// (printed by header.inc).  Paths are relative to the series page.
function release_feed_head_links($project_name, $release_series)
{
    return [['type' => 'application/atom+xml',
             'title' => $project_name . " v" . $release_series . " releases",
             'href' => "downloads/releases.atom"],
            ['type' => 'application/atom+xml',
             'title' => "All " . $project_name . " releases",
             'href' => "../releases.atom"]];
}

// A short note at the top of a series download page pointing
// automated tools at the machine-readable release information.
function print_release_info_note($project_name, $release_series, $releases, $docs_url)
{
    print("<div style=\"border: 1px solid #c0c0c0; background: #f8f8f8; padding: 8px; margin: 12px 0;\">\n");
    print("<strong>Tracking releases automatically?</strong> Instead of parsing this page, use ");
    print("<a href=\"downloads/releases.json\">releases.json</a>: every v$release_series release ");
    print("with its date, download URLs, and checksums (or <a href=\"../releases.json\">the index ");
    print("of all $project_name release series</a>).  ");
    print("Also available: ");
    if (count($releases) > 0) {
        print("the <a href=\"downloads/latest_release.txt\">latest release</a> as plain text, and ");
    }
    print("Atom feeds for feed readers (<a href=\"downloads/releases.atom\">v$release_series</a>, ");
    print("<a href=\"../releases.atom\">all series</a>).  ");
    print("See <a href=\"$docs_url\">the documentation</a> for details.\n");
    print("</div>\n");
}
