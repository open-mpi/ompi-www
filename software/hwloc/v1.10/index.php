<?php
$topdir = "../../..";

include_once("$topdir/software/hwloc/v1.10/version.inc");
$title = "Portable Hardware Locality (hwloc): Version $ver_v1_10";

include_once("$topdir/projects/hwloc/nav.inc");
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
    $src = "Version $ver_v1_10";
    $names = array("hwloc-$ver_v1_10.tar.gz", "hwloc-$ver_v1_10.tar.bz2",
		   "hwloc-win32-build-$ver_v1_10.zip", "hwloc-win64-build-$ver_v1_10.zip");
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
    $names = array("hwloc-$v.tar.gz", "hwloc-$v.tar.bz2",
                   "hwloc-win32-build-$v.zip", "hwloc-win64-build-$v.zip");

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

$t_older = new downloadTable("./downloads", "./downloads",
			     dirname($_SERVER["PHP_SELF"]));

if (isset($t_older)) {
    $versions = array("1.10.0");

    foreach ($versions as $key => $ver) {
        $src = "Version $ver";
        $names = array("hwloc-$ver.tar.gz", "hwloc-$ver.tar.bz2",
                       "hwloc-win32-build-$ver.zip", "hwloc-win64-build-$ver.zip");

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

$project = "hwloc";
$list_name = "hwloc-announce";
$prev_describe = "the v$ver_v1_10 download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p>hwloc is distributed under the <a href="<?php print $topdir ?>/projects/hwloc/license.php">BSD license</a>.
</p>

<P><?php print("<a href=\"https://raw.github.com/open-mpi/hwloc/$ver_v1_10_dir/NEWS\">"); ?>This
file</a> contains a list of changes between the releases in the hwloc
releases in the <?php print($ver_v1_10_dir); ?> series</p>

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
    print("<p><strong>No hwloc releases yet -- come back soon!</strong></p>\n");
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
