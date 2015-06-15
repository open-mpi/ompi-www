<?php
$topdir = "../../..";

include_once("$topdir/software/mtt/v3.0/version.inc");
$title = "MPI Testing Tool (MTT): Version $ver_v3_0";

include_once("$topdir/projects/mtt/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$md5 = read_checksums("downloads/md5sums.txt");
$sha1 = read_checksums("downloads/sha1sums.txt");


#############################################################################
#
# Current stable release
#
#############################################################################

#$t_stable = new downloadTable("./downloads", "./downloads", 
#			      dirname($_SERVER["PHP_SELF"]));

if (isset($t_stable)) {
    $src = "Version $ver_v3_0";
    $name = "mtt-$ver_v3_0.tar";
    $t_stable->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_stable->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
}

#############################################################################
#
# Prereleases
#
#############################################################################

$t_prerelease = new downloadTable("./downloads", "./downloads",
				  dirname($_SERVER["PHP_SELF"]));

if (isset($t_prerelease)) {
    $s = "v3.0 pre-release";
    $fp = fopen("downloads/latest_snapshot.txt", "r");
    $v = fgets($fp);
    fclose($fp);
    $v = substr($v, 0, strlen($v) - 1);

    $name = "mtt-$v.tar";
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

#$t_older = new downloadTable("./downloads", "./downloads",
#			     dirname($_SERVER["PHP_SELF"]));

if (isset($t_older)) {
    $ver = "3.0.2";
    $src = "Version $ver";
    $name = "mtt-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);

###

    $ver = "3.0.1";
    $src = "Version $ver";
    $name = "mtt-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
    
###

    $ver = "3.0";
    $src = "Version $ver";
    $name = "mtt-$ver.tar";
    $t_older->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
    $t_older->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
}

#############################################################################
#
# Main display part of the page
#
#############################################################################

$project = "MTT";
$list_name = "mtt-announce";
$prev_describe = "the v$ver_v3_0 download page";
include_once("$topdir/includes/subscribe-announce.inc");

print("<p><hr></p>\n\n");
print("<p>MTT is currently only downloadable <a href=\"https://github.com/open-mpi/mtt\">via Git</a>.\n");
  include_once("$topdir/includes/footer.inc");
exit(0);

?>

<p><hr>

<!-- <P><?php $dir = "svn.open-mpi.org/svn/mtt/branches/v3.0/NEWS";
      print("<a href=\"http://$dir\">"); ?>This
file</a> contains a list of changes between the releases in the MTT
releases in the v3.0 series</p> -->

<?php
if (isset($t_stable)) {
    print("<p>Current stable release:</p>\n\n<p>\n<div align=center>\n\n");
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
