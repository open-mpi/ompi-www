<?php
$topdir = "../../..";

include_once("$topdir/software/ompi/v1.2/version.inc");
$title = "Open MPI: Version $ver_v1_2";

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

$t_stable = new downloadTable("./downloads", "./downloads", 
			      dirname($_SERVER["PHP_SELF"]));

$src = "Version $ver_v1_2<br><a href=\"srpm.php\">SRPM notes</a>";
$name = "openmpi-$ver_v1_2.tar";
$t_stable->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
$t_stable->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
$name = "openmpi-$ver_v1_2-1.src.rpm";
$t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);

#$src = "v$ver_v1_2 Mac OS X Package<BR> (Tiger/10.4, <a href=\"macosx.php\">Package notes</a>)";
#$name = "openmpi-$ver_v1_2.dmg.gz";
#$t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);

$t_stable->addLink("Sun HPC ClusterTools<br />(powered by Open MPI)", 
		   "Link to Sun HPC ClusterTools web site<br />SPARC and x64 tarballs available",
		   "Nov 16, 2007",
		   "http://www.sun.com/software/products/clustertools/",
		   "");
$t_stable->addLink("OpenFabrics Enterprise Distribution (OFED) v1.2<br />(includes Open MPI v1.2.2)",
		   "Link to OpenFabrics web site download page",
		   "July 12, 2007",
		   "https://www.openfabrics.org/resources/ofedrelated-downloads.html",
		   "");

#############################################################################
#
# Prereleases
#
#############################################################################

#$t_prerelease = new downloadTable("./downloads", "./downloads", dirname($_SERVER["PHP_SELF"]));

if (isset($t_prerelease)) {
    $s = "v1.2.9 pre-release";
    $fp = fopen("downloads/latest_snapshot.txt", "r");
    $v = fgets($fp);
    fclose($fp);
    $v = substr($v, 0, strlen($v) - 1);

    $name = "openmpi-$v.tar";
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
    $ver = "1.2.8";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

###
    $ver = "1.2.7";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

###
    $ver = "1.2.6";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

###
    $ver = "1.2.5";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

###
    $ver = "1.2.4";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

    $src = "v$ver Mac OS X Package<BR> (Tiger/10.4, <a href=\"macosx.php\">Package notes</a>)";
    $name = "openmpi-$ver.dmg.gz";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
    
###
    $ver = "1.2.3";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

###
    $ver = "1.2.2";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-3.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

###

    $ver = "1.2.1";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"],
		      $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-3.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
    
    $src = "v$ver Mac OS X Package<BR> (Tiger/10.4, <a href=\"macosx.php\">Package notes</a>)";
    $name = "openmpi-$ver.dmg.gz";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
    
###

    $ver = "1.2";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
#    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a><br><a href=\"macosx.php\">OS X package notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"],
		      $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
#    $name = "openmpi-$ver.dmg.gz";
#    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
}

#############################################################################
#
# Main display part of the page
#
#############################################################################

$project = "Open MPI";
$list_name = "announce";
$prev_describe = "the v$ver_v1_2 download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<P><? $dir = "https://github.com/open-mpi/ompi-release/blob/v1.2/NEWS";
      print("<a href=\"$dir\">"); ?>This
file</a> contains a list of changes between the releases in the Open
MPI releases in the v1.2 series</p>

<p>See the <a href="<?php print($topdir);
?>/software/ompi/versions/timeline.php">version timeline</a> for
information on the chronology of Open MPI releases.</p>

<p>Current stable release:</p>

<p>
<div align="center">

<?
$t_stable->printMe();
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
