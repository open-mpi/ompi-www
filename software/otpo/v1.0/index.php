<?php
$topdir = "../../..";

include_once("$topdir/software/otpo/v1.0/version.inc");
$title = "Open Tool for Parameter Optimization: Version 1.0";

include_once("$topdir/projects/otpo/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$md5 = read_checksums("downloads/md5sums.txt");
$sha1 = read_checksums("downloads/sha1sums.txt");

#############################################################################

$t = new downloadTable("./downloads", "./downloads",
		       dirname($_SERVER["PHP_SELF"]));

$src = "v1.0 source code ";
$name = "otpo-1.0.tar";
$t->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
$t->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);

# No release candidates at the moment
#$s = "v1.0.2 (pending) alpha";
#$fp = fopen("downloads/latest_snapshot.txt", "r");
#$v = fgets($fp);
#fclose($fp);
#$v = substr($v, 0, strlen($v) - 1);
#
#$t->addFile($s, "openmpi-$v.tar.bz2",
#            $md5["openmpi-$v.tar.bz2"],
#            $sha1["openmpi-$v.tar.bz2"]);
#$t->addFile($s, "openmpi-$v.tar.gz",
#            $md5["openmpi-$v.tar.gz"],
#            $sha1["openmpi-$v.tar.gz"]);


#############################################################################
#
# Main display part of the page
#
#############################################################################
?>


<p><dv align=center><hr width=50%></div></p>


<p>The following releases are now available:</p>

<p>
<div align="center">
<?php $t->printMe(); ?>
</div>
</p>

<?php 
  include_once("$topdir/includes/footer.inc");
