<?php
$topdir = "../../..";

include_once("$topdir/software/ompi/v1.4/version.inc");
$title = "Open MPI: Version $ver_v1_4";

include_once("$topdir/software/ompi/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$md5 = read_checksums("downloads/md5sums.txt");
$sha1 = read_checksums("downloads/sha1sums.txt");

#############################################################################
#
# Current stable release
#
#############################################################################

$t_stable = new downloadTable("./downloads", "./downloads", dirname($_SERVER["PHP_SELF"]));

if (isset($t_stable)) {
    $src = "Version $ver_v1_4<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver_v1_4.tar";
    $t_stable->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_stable->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver_v1_4-2.src.rpm";
    $t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);

#    $src = "v$ver_v1_4 Mac OS X Package<BR> (Tiger/10.4, <a href=\"macosx.php\">Package notes</a>)";
#    $name = "openmpi-$ver_v1_4.dmg.gz";
#    $t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);

    $t_stable->addLink("Oracle Message Passing Toolkit<br />(powered by Open MPI)",                "Oracle Message Passing Toolkit<br />Download site for Solaris and Linux",
               "2010",
               "http://www.oracle.com/goto/ompt", "/"
               );
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

if (preg_match("/[a-z]/i", $v) &&
    (file_exists("downloads/openmpi-$v.tar.bz2") ||
     file_exists("downloads/openmpi-$v.tar.gz") ||
     file_exists("downloads/openmpi-$v-1.src.rpm"))) {
    $t_prerelease = new downloadTable("./downloads", "./downloads", 
                                      dirname($_SERVER["PHP_SELF"]));

    $s = "$v (pre-release)";

    $name = "openmpi-$v.tar";
    if (file_exists("downloads/$name.bz2")) {
        $t_prerelease->addFile($s, "$name.bz2", $md5["$name.bz2"], 
                               $sha1["$name.bz2"]);
    }
    if (file_exists("downloads/$name.bz2")) {
        $t_prerelease->addFile($s, "$name.gz", $md5["$name.gz"], 
                               $sha1["$name.gz"]);
    }
    if (file_exists("downloads/openmpi-$v-1.src.rpm")) {
        $name = "openmpi-$v-1.src.rpm";
        $t_prerelease->addFile($s, $name, $md5[$name], $sha1[$name]);
    }
}

#############################################################################
#
# Older releases
#
#############################################################################

$t_older = new downloadTable("./downloads", "./downloads", dirname($_SERVER["PHP_SELF"]));

if (isset($t_older)) {
    $ver = "1.4.4";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

    $ver = "1.4.3";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

    $ver = "1.4.2";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

    $ver = "1.4.1";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

    $ver = "1.4";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
}

#############################################################################
#
# Main display part of the page
#
#############################################################################

$project = "Open MPI";
$list_name = "announce";
$prev_describe = "the v$ver_v1_4 download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<P><? $dir = "https://github.com/open-mpi/ompi-release/blob/v1.4/NEWS";
      print("<a href=\"$dir\">"); ?>This
file</a> contains a list of changes between the releases in the Open
MPI releases in the v1.4 series</p>

<p>See the <a href="<?php print($topdir);
?>/software/ompi/versions/timeline.php">version timeline</a> for
information on the chronology of Open MPI releases.</p>

<p>
<div align="center">

<?
if (isset($t_stable)) {
    print("</div>\n\n<p>Current stable release:</p>\n\n<p>\n<div align=center>\n\n");
    $t_stable->printMe();
}
if (isset($t_prerelease)) {
    print("</div>\n\n<p>Prerelease:</p>\n\n<p>\n<div align=center>\n\n");
    $t_prerelease->printMe();
}
if (isset($t_older)) {
    print("</div>\n\n<p>Previous releases:</p>\n\n<p>\n<div align=center>\n\n");
    $t_older->printMe();
}
?>
</div>
</p>

<?php 
  include_once("$topdir/includes/footer.inc");
