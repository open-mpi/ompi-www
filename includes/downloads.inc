<?php

// Turn off error reporting (stat errors are ugly)
//error_reporting(0);

require "$topdir/includes/aws/aws-autoloader.php";
use Aws\Credentials\CredentialProvider;
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$download_base = "$topdir/download";

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

function prettyprint_filesize($s) {
    if ($s > 1048576) {
        $s = ((int) (($s / 1048576) * 100)) / 100 . "MB";
    } else {
        $s = (int) ($s / 1024) . "KB";
    }
    return $s;
}

//
// Utility function to read in a file of checksums (i.e., the output
// of md5sum or sha1sum)
//
function read_checksums($file) {
    if (file_exists($file) && is_readable($file)) {
        // Read the file
        $f = fopen($file, "r");
        $str = fread($f, filesize($file));
        fclose($f);

        // Split it into an array
        $a = preg_split("/\n/", $str);
        foreach ($a as $line) {
            $both = preg_split("/[ \t]+/", $line);
            $files[$both[1]] = $both[0];
        }

        return $files;
    }
}


//
// Class for holding both headers and file info
//
class downloadFileInfo {
    var $section, $filename, $base_url, $size, $mdsum, $shasum;
    var $link, $a_modifier;
    var $headerText;

    //
    // Set the file info
    //
    function setFile($section, $filename, $base_url, $download_dir,
                     $mdsum = "", $shasum = "") {

        // Save almost everything
        $this->section = $section;
        $this->filename = $filename;
        $this->mdsum = $mdsum;
        $this->shasum = $shasum;
        $this->link = "";
        $this->base_url = $base_url;
        $this->a_modifier = "";

        // Compute a print-friendly size
        $file = $download_dir . "/" . $filename;
        $st = stat($file);
        $this->size = prettyprint_filesize($st[size]);
        $this->mtime = $st[mtime];
        $this->mtime_str = date("M j, Y", $st[mtime]);
    }

    function setLink($section, $filename, $date, $link, $a_modifier) {

        // Save almost everything
        $this->section = $section;
        $this->filename = $filename;
        $this->base_url = $base_url;
        $this->mdsum = "";
        $this->shasum = "";
        $this->link = $link;
        $this->size = "";
        $this->mtime_str = $date;
        $this->a_modifier = $a_modifier;
    }

    //
    // Output this instance
    //
    function printMe($rowspan, $download_url) {
        print("<TR>\n");
        if ($rowspan > 0)
            print("<TD ROWSPAN=$rowspan>$this->section</TD>\n");

        // Is it a link or a file?
        if (!empty($this->link)) {
            print("<TD><A HREF=\"$this->link\"");
        if (!empty($this->a_modifier)) {
        print(" $this->a_modifier");
        }
        print("$this->filename</A></TD>
<TD>&nbsp;</TD>
<TD>$this->mtime_str</TD>
<TD ALIGN=CENTER>(external link)</TD>
</TR>\n");
        } else {
            if (!empty($this->mdsum)) {
        print("<TD><A HREF=\"$download_url/$this->filename\"");
        if (!empty($this->a_modifier)) {
            print(" $this->a_modifier");
        }
        print(">$this->filename</A></TD>\n");
            } else {
                print("<TD>$this->filename</TD>\n");
            }
            print("<TD ALIGN=RIGHT>$this->size</TD>\n");
            print("<TD ALIGN=RIGHT>$this->mtime_str</TD>\n");

            print("<TD><TABLE BORDER=0>\n");
            if ($this->mdsum) {
                print("<TR>\n<TD ALIGN=RIGHT>MD5:</TD>\n<TD>$this->mdsum</TD></TR>");
            }
            if ($this->shasum) {
                print("<TR>\n<TD ALIGN=RIGHT>SHA1:</TD>\n<TD>$this->shasum</TD></TR>");
            }
            print("</TABLE></TD></TR>\n\n");
        }
    }
}

//
// Base class to hold info for download files
//
class downloadTable {
    var $files;
    var $download_url, $download_dir;
    var $title;

    //
    // Constructor
    //
    function downloadTable($download_url, $download_dir, $base_url,
                           $sort_by_date = true) {
        global $download_base;

        $this->download_url = $download_url;
        $this->download_dir = $download_dir;
        $this->base_url = $base_url;
        $this->title = "";
        $this->sort_by_date = $sort_by_date;
    }

    //
    // Add a heading to the table
    //
    function setHeader($title) {
        $this->title= $title;
    }

    //
    // Add a file to the table
    //
    function addFile($section, $file, $mdsum = "", $shasum = "") {
        $foo = new downloadFileInfo;
        $foo->setFile($section, $file, $this->base_url, $this->download_url, $mdsum, $shasum);
        $this->files[] = $foo;
    }

    //
    // Add an external link to the table
    //
    function addLink($section, $text, $date, $link, $a_modifier = "") {
        $foo = new downloadFileInfo;
        if (empty($a_modifier)) {
            $a_modifier = "<a href=\"$link\">";
        }
        $foo->setLink($section, $text, $date, $link, $a_modifier);
        $this->files[] = $foo;
    }

    //
    // Function to cache / print out an entry in the table
    //
    function printMe() {
        $next_section = 0;

        if (sizeof($this->files) == 0) {
            return;
        }

        print("<TABLE BORDER=1 CELLPADDING=5>\n");
        if ($this->title) {
            print("<TR>\n<TH COLSPAN=4>". $this->title . "</TH>\n</TR>\n\n");
        }
        print("<TR>
<TH>Contents</TH>
<TH>File names</TH>
<TH>Size</TH>
<TH>Date</TH>
<TH>Checksums (GNU md5sum and sha1sum v5.2.1)</TH>
</TR>\n\n");

        if ($this->sort_by_date) {
            usort($this->files, "downloadFileInfo_sort_by_date");
        }

        $next_section = 0;
        for ($i = 0; $i < sizeof($this->files); $i++) {
            $f = $this->files[$i];
            if ($next_section == $i) {
                $s = $f->section;
                for ($next_section = $j = $i + 1; $j < sizeof($this->files);
                     $next_section++, $j++) {
                    $f2 = $this->files[$j];
                    if ($f2->section != $s) {
                        break;
                    }
                }

                $rowspan = $next_section - $i;
            } else {
                $rowspan = 0;
            }
            $f->printMe($rowspan, $this->download_url);
        }
        print("</TABLE>\n\n");
    }
}

# Reverse sort the filenames by date (i.e., newest first)
function downloadFileInfo_sort_by_date($a, $b)
{
    if ($a->mtime == $b->mtime) {
        return 0;
    }
    return ($a->mtime > $b->mtime) ? -1 : 1;
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

// For a given bucket and prefix, grab the contents of the
// latest_snapshot.txt file.
function get_latest_snapshot($bucket, $prefix) {
    $latest_key = $prefix . "latest_snapshot.txt";

    try {
        global $provider;

        $s3_client = new S3Client(['region' => 'us-west-2',
                                   'version' => '2006-03-01',
                                   'credentials' => $provider]);
        $data = $s3_client->getObject(['Bucket' => $bucket,
                                       'Key' => $latest_key]);
    } catch (Exception $e) {
        return "";
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
