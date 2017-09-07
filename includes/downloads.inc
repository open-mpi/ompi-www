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
            print("<TD>MD5: " . $filedata["md5"] . "<BR>SHA1: " . $filedata["sha1"] . "</TD>\n");
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

        print("</div>\n\n<p>Current stable release:</p>\n\n<p>\n<div align=center>\n\n");
        print_release_table($project, array_slice($releases, 0, 1), $s3_bucket,
                            $s3_prefix, $download_prefix, $extra_rows);
    }

    if (count($prereleases) > 0) {
        print("</div>\n\n<p>Prerelease:</p>\n\n<p>\n<div align=center>\n\n");
        print_release_table($project, $prereleases, $s3_bucket, $s3_prefix,
                            $download_prefix);
    }

    if (count($releases) > 1) {
        print("</div>\n\n<p>Previous releases:</p>\n\n<p>\n<div align=center>\n\n");
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
    try {
        global $provider;

        $s3_client = new S3Client(['region' => 'us-west-2',
                                   'version' => '2006-03-01',
                                   'credentials' => $provider]);
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

function latest_snapshot_output($s3_prefix, $prereleases, $releases) {
    if (count($prereleases) > 0) {
        $latest = $prereleases[0];
    } else if (count($releases) > 0) {
        $latest = $releases[0];
    } else {
        $latest = NULL;
    }

    if ($latest != NULL) {
        $filename = $s3_prefix . "build-openmpi-" . $latest . ".json";
        $blob = get_download_file("open-mpi-release", $filename);
    } else {
        $blob = NULL;
    }
    if ($blob === NULL) {
        header("HTTP/1.0 404 Not Found");
        return;
    }
    $info = json_decode($blob, true);

    header("Last-Modified: " . gmdate("D, d M Y H:i:s", $info["build_unix_time"]) . " GMT");
    print($latest);
}
