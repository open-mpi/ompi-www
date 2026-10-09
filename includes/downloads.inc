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

    try {
        global $provider;

        $s3_client = new S3Client(['region' => 'us-west-2',
                                   'version' => '2006-03-01',
                                   'credentials' => $provider]);
    } catch (Exception $e) {
        error_log("s3_client connect failed: " . $e);
        return;
    }

    foreach($releases as &$release) {
        try {
            $keyname = $s3_prefix . "build-" . $project . "-" . $release . ".json";
            $data = $s3_client->getObject(['Bucket' => $bucket,
                                           'Key' => $keyname]);
            $info = json_decode($data['Body'], true);
        } catch (Exception $e) {
            // not much we can do, so just skip this entry
            error_log("Release download failed: " . $e);
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

function get_download_file($bucket, $key) {
    // Reuse one client for all lookups in a request; callers such as
    // releases.json fetch many files.
    static $s3_client = NULL;

    try {
        global $provider;

        if ($s3_client === NULL) {
            $s3_client = new S3Client(['region' => 'us-west-2',
                                       'version' => '2006-03-01',
                                       'credentials' => $provider]);
        }
        $data = $s3_client->getObject(['Bucket' => $bucket,
                                       'Key' => $key]);
    } catch (Exception $e) {
        error_log("get_download_file failed: " . $e);
        return NULL;
    }

    return $data['Body'];
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
        $blob = get_download_file("open-mpi-release", $filename);
    } else {
        $blob = NULL;
    }
    if ($blob === NULL) {
        header("HTTP/1.0 404 Not Found");
        return;
    }
    $info = json_decode($blob, true);

    header("Content-Type: text/plain; charset=UTF-8");
    header("Last-Modified: " . gmdate("D, d M Y H:i:s", $info["build_unix_time"]) . " GMT");
    print($latest);
}

// Machine-readable release information (releases.json).
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

// Summary of a release series, built only from its version.inc data
// (i.e., no S3 lookups).  $web_prefix is the URL of the project's
// software tree (e.g., https://www.open-mpi.org/software/ompi/).
function series_summary($series_info, $web_prefix)
{
    $releases = $series_info['releases'];
    $prereleases = $series_info['prereleases'];
    $series_url = $web_prefix . "v" . $series_info['release_series'] . "/";

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

// Details of a single release (date and downloadable files), from
// its build JSON in S3.  Returns NULL if the build JSON could not be
// retrieved.
function release_details($project, $series_info, $version, $prerelease)
{
    $filename = $series_info['s3_prefix'] . "build-" . $project . "-" . $version . ".json";
    $blob = get_download_file("open-mpi-release", $filename);
    if ($blob === NULL) {
        return NULL;
    }
    $info = json_decode($blob, true);
    if (!is_array($info) || !isset($info['build_unix_time']) ||
        !isset($info['files'])) {
        error_log("Malformed build info: " . $filename);
        return NULL;
    }

    $filenames = array_keys($info['files']);
    sort($filenames);
    $files = [];
    foreach ($filenames as $name) {
        $filedata = $info['files'][$name];
        $file = ['name' => $name,
                 'url' => $series_info['download_prefix'] . $name,
                 'size' => $filedata['size']];
        foreach (['sha256', 'sha1', 'md5'] as $hash) {
            if (isset($filedata[$hash])) {
                $file[$hash] = $filedata[$hash];
            }
        }
        $files[] = $file;
    }

    return ['version' => $version,
            'prerelease' => $prerelease,
            'release_date' => gmdate("Y-m-d\TH:i:s\Z", $info['build_unix_time']),
            'release_unix_time' => $info['build_unix_time'],
            'files' => $files];
}

// Emit a release information document as JSON, honoring
// If-None-Match so that well-behaved pollers can avoid re-downloading
// an unchanged document.
function release_info_json_output($doc, $last_modified = NULL)
{
    $body = json_encode($doc, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    if ($body === false) {
        error_log("release info JSON encoding failed: " . json_last_error_msg());
        header("HTTP/1.0 503 Service Unavailable");
        header("Retry-After: 300");
        return;
    }
    $body .= "\n";
    $etag = '"' . md5($body) . '"';

    header("Content-Type: application/json");
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

// Top-level releases.json: one summary entry per release series,
// newest series first.  $project_dir is the project's software tree
// relative to $topdir (e.g., "software/ompi"); it contains current/
// and the vX.Y/ series directories.  This only reads version.inc
// files, so it is cheap.
function release_index_json_output($project_name, $topdir, $project_dir, $web_prefix)
{
    global $release_info_schema_version;

    // current/version.inc uses $topdir to find the current series
    $project_dir = $topdir . "/" . $project_dir;
    include($project_dir . "/current/version.inc");
    $current_series = preg_replace("/^v/", "", $ver_current_dir);

    $series = [];
    foreach (glob($project_dir . "/v*/version.inc") as $filename) {
        $series_info = read_series_version_inc($filename);
        if (release_info_covers_series($series_info)) {
            $series[] = series_summary($series_info, $web_prefix);
        }
    }
    usort($series, function ($a, $b) {
        return version_compare($b['series'], $a['series']);
    });

    $latest_release = NULL;
    foreach ($series as $s) {
        if ($s['series'] === $current_series) {
            $latest_release = $s['latest_release'];
        }
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
    $doc = ['schema_version' => $release_info_schema_version] +
        series_summary($series_info, $web_prefix);

    $details = [];
    $last_modified = NULL;
    $versions = [];
    foreach ($series_info['prereleases'] as $version) {
        $versions[] = [$version, true];
    }
    foreach ($series_info['releases'] as $version) {
        $versions[] = [$version, false];
    }
    foreach ($versions as $v) {
        $entry = release_details($project, $series_info, $v[0], $v[1]);
        if ($entry === NULL) {
            header("HTTP/1.0 503 Service Unavailable");
            header("Retry-After: 300");
            return;
        }
        if ($last_modified === NULL || $entry['release_unix_time'] > $last_modified) {
            $last_modified = $entry['release_unix_time'];
        }
        $details[] = $entry;
    }
    $doc['release_details'] = $details;

    release_info_json_output($doc, $last_modified);
}
