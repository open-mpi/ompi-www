<?php
$topdir = "../../..";

include_once("$topdir/software/netloc/v0.5/version.inc");
$title = "Portable Network Locality (netloc): Version $ver_v0_5";

include_once("$topdir/projects/netloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$md5 = read_checksums("downloads/md5sums.txt");
$sha1 = read_checksums("downloads/sha1sums.txt");

#############################################################################
#
# Current stable release
#
#############################################################################

$t_stable = new downloadTable("./downloads", "./downloads",
			      dirname($_SERVER["PHP_SELF"]));

if (isset($t_stable)) {
    $src = "Version $ver_v0_5";
    $names = array("netloc-$ver_v0_5.tar.gz", "netloc-$ver_v0_5.tar.bz2",
		   "netloc-win32-build-$ver_v0_5.zip", "netloc-win64-build-$ver_v0_5.zip");
    foreach ($names as $key => $n) {
        if (file_exists("downloads/$n")) {
            $t_stable->addFile($src, $n, $md5[$n], $sha1[$n]);
        }
    }
}

#############################################################################
#
# Prereleases
#
#############################################################################

# See if there's a snapshot file that does not have any letters in its
# version number (i.e., is not a stable release) and has a
# corresponding .tar.bz2 file or .tar.gz here in the downloads
# directory.

$fp = fopen("downloads/latest_snapshot.txt", "r");
$v = fgets($fp);
fclose($fp);
$v = substr($v, 0, strlen($v) - 1);

if (preg_match("/[a-z]/i", $v)) {
    $t_prerelease = new downloadTable("./downloads", "./downloads",
                                      dirname($_SERVER["PHP_SELF"]));

    $s = "<div align=\"center\">$v<br />(pre-release)</div>";
    $names = array("netloc-$v.tar.gz", "netloc-$v.tar.bz2",
                   "netloc-win32-build-$v.zip", "netloc-win64-build-$v.zip");

    $found = 0;
    foreach ($names as $key => $n) {
        if (file_exists("downloads/$n")) {
            $t_prerelease->addFile($s, $n, $md5[$n], $sha1[$n]);
            $found = 1;
        }
    }
    if (!$found) {
        unset($t_prerelease);
    }
}

#############################################################################
#
# Older releases
#
#############################################################################

#$t_older = new downloadTable("./downloads", "./downloads",
#			     dirname($_SERVER["PHP_SELF"]));

if (isset($t_older)) {
    $versions = array();

    foreach ($versions as $key => $ver) {
        $src = "Version $ver";
        $names = array("netloc-$ver.tar.gz", "netloc-$ver.tar.bz2",
                       "netloc-win32-build-$ver.zip", "netloc-win64-build-$ver.zip");

        foreach ($names as $key => $n) {
            if (file_exists("downloads/$n")) {
                $t_older->addFile($src, $n, $md5[$n], $sha1[$n]);
            }
        }
    }
}

#############################################################################
#
# Main display part of the page
#
#############################################################################

$project = "netloc";
$list_name = "netloc-announce";
$prev_describe = "the v$ver_v0_5 download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p style="font-size: 16px; color: #ff0000;">
 <b>v0.5 is the only standalone netloc release series.</b>
 Next netloc releases will be included in hwloc (starting with hwloc 2.0).
</p>

<p>netloc is distributed under the <a href="<?php print $topdir ?>/projects/netloc/license.php">BSD license</a>.
</p>

<P><?php print("<a href=\"https://raw.github.com/open-mpi/netloc/$ver_v0_5_dir/NEWS\">"); ?>This
file</a> contains a list of changes between the releases in the netloc
releases in the <?php print($ver_v0_5_dir); ?> series</p>

<?php
$found = 0;
if (isset($t_stable)) {
    print("<p>Current stable release:</p>\n\n<p>\n<div align=center>\n\n");
    $t_stable->printMe();
    $found = 1;
    print("</div>\n\n");
}
if (isset($t_prerelease)) {
    print("<p>Prerelease:</p>\n\n<p>\n<div align=center>\n\n");
     $t_prerelease->printMe();
    $found = 1;
    print("</div>\n\n");
}

if (0 == $found) {
    print("<p><strong>No netloc releases yet -- come back soon!</strong></p>\n");
}

if (isset($t_older)) {
    print("<p>Previous releases:</p>\n\n<p>\n<div align=center>\n\n");
    $t_older->printMe();
    print("</div>\n\n");
}

?>
</div>
</p>

<?php 
  include_once("$topdir/includes/footer.inc");
