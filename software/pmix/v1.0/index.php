<?php
$topdir = "../../..";

include_once("$topdir/software/pmix/v1.0/version.inc");
$title = "PMIx: Version $ver_v1_0";

include_once("$topdir/projects/pmix/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$md5 = read_checksums("downloads/md5sums.txt");
$sha1 = read_checksums("downloads/sha1sums.txt");

$notes = "<a href=\"srpm.php\">SRPM notes</a>";

#############################################################################
#
# Current stable release
#
#############################################################################

$t_stable = new downloadTable("./downloads", "./downloads", dirname($_SERVER["PHP_SELF"]));

if (isset($t_stable)) {
    $src = "Version $ver_v1_0<br>$notes";

    $n[] = "pmix-$ver_v1_0.tar.bz2";
    $n[] = "pmix-$ver_v1_0.tar.gz";
    $n[] = "pmix-$ver_v1_0-1.src.rpm";

    foreach ($n as $name) {
        if (file_exists("downloads/$name")) {
            $t_stable->addFile($src, $name, $md5[$name], $sha1[$name]);
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
if (strlen($v) > 0) {
    $v = substr($v, 0, strlen($v) - 1);
}

if (preg_match("/[a-z]/i", $v) &&
    (file_exists("downloads/pmix-$v.tar.bz2") ||
     file_exists("downloads/pmix-$v.tar.gz") ||
     file_exists("downloads/pmix-$v-1.src.rpm"))) {
    $t_prerelease = new downloadTable("./downloads", "./downloads", 
                                      dirname($_SERVER["PHP_SELF"]));

    $s = "$v (pre-release)<br>$notes";

    $n = array();
    $n[] = "pmix-$v.tar.bz2";
    $n[] = "pmix-$v.tar.gz";
    $n[] = "pmix-$v-1.src.rpm";

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

    foreach ($versions as $v) {
        $n = array();
        $n[] = "pmix-$v.tar.bz2";
        $n[] = "pmix-$v.tar.gz";
        $n[] = "pmix-$v-1.src.rpm";

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

$project = "PMIx";
$list_name = "announce";
$prev_describe = "the v$ver_v1_0 download page";
include_once("$topdir/includes/subscribe-announce.inc");
?>

<p><hr>

<p>See the <a href="<?php print($topdir);
?>/software/pmix/versions/timeline.php">version timeline</a> for
information on the chronology of PMIx releases.</p>

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
