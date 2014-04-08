<?php
$topdir = "../../..";

include_once("$topdir/software/ompi/v1.5/version.inc");
$title = "Open MPI: Version $ver_v1_5";

include_once("$topdir/software/ompi/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$md5 = read_checksums("downloads/md5sums.txt");
$sha1 = read_checksums("downloads/sha1sums.txt");

$notes = "<a href=\"srpm.php\">SRPM notes</a><br><a href=\"ms-windows.php\">MS Windows notes</a>";

#############################################################################
#
# Current stable release
#
#############################################################################

$t_stable = new downloadTable("./downloads", "./downloads", dirname($_SERVER["PHP_SELF"]));

if (isset($t_stable)) {
    $src = "Version $ver_v1_5<br>$notes";

    $n[] = "openmpi-$ver_v1_5.tar.bz2";
    $n[] = "openmpi-$ver_v1_5.tar.gz";
    $n[] = "openmpi-$ver_v1_5-2.src.rpm";
    $n[] = "openmpi-$ver_v1_5-1.dmg.gz";
    $n[] = "openmpi-$ver_v1_5-1.dmg.bz2";
    $n[] = "OpenMPI_v$ver_v1_5-1_win32.exe";
    $n[] = "OpenMPI_v$ver_v1_5-1_win64.exe";
    # Need this for some versions
    $n[] = "OpenMPI_v$ver_v1_5-2_win32.exe";
    $n[] = "OpenMPI_v$ver_v1_5-2_win64.exe";

    foreach ($n as $name) {
        if (file_exists("downloads/$name")) {
            $t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);
        }
    }

    $t_stable->addLink("Oracle Message Passing Toolkit<br />(powered by Open MPI)", 
               "Oracle Message Passing Toolkit<br />for Solaris and Linux",
               "2010",
               "http://www.oracle.com/goto/ompt"
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
if (strlen($v) > 0) {
    $v = substr($v, 0, strlen($v) - 1);
}

if (preg_match("/[a-z]/i", $v) &&
    (file_exists("downloads/openmpi-$v.tar.bz2") ||
     file_exists("downloads/openmpi-$v.tar.gz") ||
     file_exists("downloads/openmpi-$v-1.src.rpm"))) {
    $t_prerelease = new downloadTable("./downloads", "./downloads", 
                                      dirname($_SERVER["PHP_SELF"]));

    $s = "$v (pre-release)<br>$notes";

    $n = array();
    $n[] = "openmpi-$v.tar.bz2";
    $n[] = "openmpi-$v.tar.gz";
    $n[] = "openmpi-$v-1.src.rpm";
    $n[] = "openmpi-$v-1.dmg.gz";
    $n[] = "openmpi-$v-1.dmg.bz2";
    $n[] = "OpenMPI_v$v-1_win32.exe";
    $n[] = "OpenMPI_v$v-1_win64.exe";

    foreach ($n as $name) {
        if (file_exists("downloads/$name")) {
            $t_prerelease->addFile($s, $name, $md5[$name], $sha1[$name]);
        }
    }
}

#############################################################################
#
# Older releases
#
#############################################################################

$t_older = new downloadTable("./downloads", "./downloads", dirname($_SERVER["PHP_SELF"]));

if (isset($t_older)) {
    $versions = array();
    $versions[] = "1.5.4";
    $versions[] = "1.5.3";
    $versions[] = "1.5.2";
    $versions[] = "1.5.1";
    $versions[] = "1.5";

    foreach ($versions as $v) {
        $n = array();
        $n[] = "openmpi-$v.tar.bz2";
        $n[] = "openmpi-$v.tar.gz";
        $n[] = "openmpi-$v-1.dmg.gz";
        $n[] = "openmpi-$v-1.dmg.bz2";
        $n[] = "openmpi-$v-1.src.rpm";
        $n[] = "OpenMPI_v$v-1_win32.exe";
        $n[] = "OpenMPI_v$v-1_win64.exe";
        # Need this for some versions
        $n[] = "OpenMPI_v$v-2_win32.exe";
        $n[] = "OpenMPI_v$v-2_win64.exe";

        $s = "Version $v<br>$notes";

        foreach ($n as $name) {
            if (file_exists("downloads/$name")) {
                $t_older->addFile($s, $name, $md5[$name], $sha1[$name]);
            }
        }
    }
}

#############################################################################
#
# Main display part of the page
#
#############################################################################

$project = "Open MPI";
$list_name = "announce";
$prev_describe = "the v$ver_v1_5 download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p><strong><font color=red>PLEASE NOTE:</font></strong> According to
<a href="<?php print($topdir); ?>/software/ompi/versions/">Open MPI's
release methodology</a>, the v1.5 series is a "feature release"
series.  This means that it has rich new features that we think are
tested and stable, but they are not as mature as the stable "bug fix"
v1.4 series.  If you are looking for ultra stability, you should
probably be using the <a href="<?php print($topdir);
?>/software/ompi/v1.4/">v1.4 series</a>.</p>

<p><dv align=center><hr width=50%></div></p>

<P><? $dir = "svn.open-mpi.org/svn/ompi/branches/v1.5/NEWS";
      print("<a href=\"http://$dir\">"); ?>This
file</a> contains a list of changes between the releases in the Open
MPI releases in the v1.5 series</p>

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
