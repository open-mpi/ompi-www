<?php
$topdir = "../../..";

include_once("$topdir/software/ompi/v1.3/version.inc");
$title = "Open MPI: Version $ver_v1_3";

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
    $src = "Version $ver_v1_3<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver_v1_3.tar";
    $t_stable->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_stable->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver_v1_3-1.src.rpm";
    $t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);

#    $src = "v$ver_v1_3 Mac OS X Package<BR> (Tiger/10.4, <a href=\"macosx.php\">Package notes</a>)";
#    $name = "openmpi-$ver_v1_3.dmg.gz";
#    $t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);

    $t_stable->addLink("Sun HPC ClusterTools<br />(powered by Open MPI)", 
               "Link to Sun HPC ClusterTools web site<br />Linux (x86/x64) and Solaris (SPARC,x86/x64) tarballs available",
               "Nov 14, 2008",
               "http://www.sun.com/software/products/clustertools/"
               );
}

#############################################################################
#
# Prereleases
#
#############################################################################

#$t_prerelease = new downloadTable("./downloads", "./downloads", dirname($_SERVER["PHP_SELF"]));

if (isset($t_prerelease)) {
    $s = "v1.3 pre-release";
    $fp = fopen("downloads/latest_snapshot.txt", "r");
    $v = fgets($fp);
    fclose($fp);
    $v = substr($v, 0, strlen($v) - 1);

    $name = "openmpi-$v.tar";
    $t_prerelease->addFile($s, "$name.bz2", $md5["$name.bz2"], 
			   $sha1["$name.bz2"]);
    $t_prerelease->addFile($s, "$name.gz", $md5["$name.gz"], 
			   $sha1["$name.gz"]);
    $name = "openmpi-$v-1.src.rpm";
    $t_prerelease->addFile($src, $name, $md5[$name], $sha1[$name]);
}

#############################################################################
#
# Older releases
#
#############################################################################

$t_older = new downloadTable("./downloads", "./downloads", dirname($_SERVER["PHP_SELF"]));

if (isset($t_older)) {
    $ver = "1.3.3";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

    $ver = "1.3.2";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

    $ver = "1.3.1";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);

    $ver = "1.3";
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
$prev_describe = "the v$ver_v1_3 download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p><strong><font color=red>PLEASE NOTE:</font></strong> According to
<a href="<?php print($topdir); ?>/software/ompi/versions/">Open MPI's
release methodology</a>, the Open MPI v1.3 ("feature release") series
is finished: <strong>v<?php print($ver_v1_3);?> is the final v1.3
series release</strong>.  All bug fixes are being applied to the v1.4
("bug fix") series.  All new features are being applied to the v1.5
("feature release") series.</p>

<p><dv align=center><hr width=50%></div></p>

<P><?php $dir = "https://github.com/open-mpi/ompi/raw/v1.3/NEWS";
      print("<a href=\"$dir\">"); ?>This
file</a> contains a list of changes between the releases in the Open
MPI releases in the v1.3 series</p>

<p>See the <a href="<?php print($topdir);
?>/software/ompi/versions/timeline.php">version timeline</a> for
information on the chronology of Open MPI releases.</p>

<p>
<div align="center">

<?php
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
