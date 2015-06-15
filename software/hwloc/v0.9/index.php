<?php
$topdir = "../../..";

include_once("$topdir/software/hwloc/v0.9/version.inc");
$title = "Portable Hardware Locality (hwloc): Version $ver_v0_9";

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
    $src = "Version $ver_v0_9";
    $name = "hwloc-$ver_v0_9.tar";
    $t_stable->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_stable->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "hwloc-win32-build-$ver_v0_9.zip";
    $t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);
}

#############################################################################
#
# Prereleases
#
#############################################################################

#$t_prerelease = new downloadTable("./downloads", "./downloads",
#				  dirname($_SERVER["PHP_SELF"]));

if (isset($t_prerelease)) {
    $s = "v0.9 pre-release";
    $fp = fopen("downloads/latest_snapshot.txt", "r");
    $v = fgets($fp);
    fclose($fp);
    $v = substr($v, 0, strlen($v) - 1);

    $name = "hwloc-$v.tar";
    $t_prerelease->addFile($s, "$name.bz2", $md5["$name.bz2"], 
			   $sha1["$name.bz2"]);
    $t_prerelease->addFile($s, "$name.gz", $md5["$name.gz"], 
			   $sha1["$name.gz"]);
}

#############################################################################
#
# Older releases
#
#############################################################################

$t_older = new downloadTable("./downloads", "./downloads",
			     dirname($_SERVER["PHP_SELF"]));

if (isset($t_older)) {
    $ver = "0.9.2";
    $src = "Version $ver";
    $name = "hwloc-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "hwloc-win32-build-$ver.zip";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

    $ver = "0.9.1";
    $src = "Version $ver";
    $name = "hwloc-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);

    $ver = "0.9";
    $src = "Libtopology v$ver";
    $name = "libtopology-$ver.tar";
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "libtopology-win32-build-$ver";
    $t_older->addFile($src, "$name.zip", $md5["$name.zip"], $sha1["$name.zip"]);
}

#############################################################################
#
# Main display part of the page
#
#############################################################################

$project = "hwloc";
$list_name = "hwloc-announce";
$prev_describe = "the v$ver_v0_9 download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p>hwloc is distributed under the <a href="<?php print $topdir ?>/projects/hwloc/license.php">BSD license</a>.
</p>

<P><?php $dir = "svn.open-mpi.org/svn/hwloc/branches/$ver_v0_9_dir/NEWS";
      print("<a href=\"http://$dir\">"); ?>This
file</a> contains a list of changes between the releases in the hwloc
releases in the <?php print($ver_v0_9_dir); ?> series</p>

<?php
$found = 0;
if (isset($t_stable)) {
    print("<p>Current stable release:</p>\n\n<p>\n<div align=center>\n\n");
    $t_stable->printMe();
    $found = 1;
}
if (isset($t_prerelease)) {
    print("</div>\n\n<p>Prerelease:</p>\n\n<p>\n<div align=center>\n\n");
     $t_prerelease->printMe();
    $found = 1;
}

if (0 == $found) {
    print("<p><strong>No hwloc releases yet -- come back soon!</strong></p>\n");
}

if (isset($t_older)) {
    print("</div>\n\n<p>Previous releases (including libtopology; <a href=\"$topdir/software/plpa/\">previous PLPA releases</a> are also available):</p>\n\n<p>\n<div align=center>\n\n");
    $t_older->printMe();
}

?>
</div>
</p>

<?php 
  include_once("$topdir/includes/footer.inc");
