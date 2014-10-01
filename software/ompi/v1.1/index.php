<?php
$topdir = "../../..";

include_once("$topdir/software/ompi/v1.1/version.inc");
$title = "Open MPI: Version $ver_v1_1";

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

$src = "Version $ver_v1_1<br><a href=\"srpm.php\">SRPM notes</a>";
$name = "openmpi-$ver_v1_1.tar";
$t_stable->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
$t_stable->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
$name = "openmpi-$ver_v1_1-1.src.rpm";
$t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);

# Comment out until Brian has a chance to make the OSX package
#$src = "v$ver_v1_1 (stable) OS X Package<BR> (Tiger/10.4, <a href=\"macosx.php\">Package notes</a>)";
#$name = "openmpi-$ver_v1_1.dmg.gz";
#$t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);

#############################################################################
#
# Prereleases
#
#############################################################################

#$t_prerelease = new downloadTable("./downloads", "./downloads",
#				  dirname($_SERVER["PHP_SELF"]));

if (isset($t_prerelease)) {
    $fp = fopen("downloads/latest_snapshot.txt", "r");
    $v = fgets($fp);
    fclose($fp);
    $v = substr($v, 0, strlen($v) - 1);
    $s = "$v pre-release";

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
    $ver = "1.1.4";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"],
		      $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
    
    $ver = "1.1.3";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"],
		      $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
    
    $ver = "1.1.2";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"],
		      $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
    
    $ver = "1.1.1";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"],
		      $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
    
    $ver = "1.1";
    $src = "Version $ver<br><a href=\"srpm.php\">SRPM notes</a><br><a href=\"macosx.php\">OS X package notes</a>";
    $name = "openmpi-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], 
		      $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    $name = "openmpi-$ver-1.src.rpm";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
    $name = "openmpi-$ver.dmg.gz";
    $t_older->addFile($src, $name, $md5[$name], $sha1[$name]);
}

#############################################################################
#
# Main display part of the page
#
#############################################################################

$prev_describe = "the v$ver_v1_1 download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p><strong><font color=red>PLEASE NOTE:</font></strong> The 1.1 series
of Open MPI is effectively dead.  As such, there are known bugs and
problems with the v1.1 series that have been addressed in later
versions of Open MPI.  <strong>The OMPI Team strongly recommends that
users move to a more recent version of Open MPI, if
possible.</strong></p>

<p><dv align=center><hr width=50%></div></p>

<P><? $dir = "https://github.com/open-mpi/ompi-release/blob/v1.1/NEWS";
      print("<a href=\"$dir\">"); ?>This
file</a> contains a list of changes between the releases in the Open
MPI v1.1 series.</p>

<p>See the 
<a href="<?php print($topdir); ?>/software/ompi/versions/timeline.php">version
timeline</a> for information on the chronology of Open MPI releases.</p>

<p>Current stable release:</p>

<p>
<div align="center">

<?php
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
