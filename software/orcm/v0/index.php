<?php
$topdir = "../../..";

include_once("$topdir/software/orcm/v0/version.inc");
$title = "Open RCM: Version 0";

include_once("$topdir/projects/orcm/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$md5 = read_checksums("downloads/md5sums.txt");
$sha1 = read_checksums("downloads/sha1sums.txt");

#############################################################################

$t = new downloadTable("./downloads", "./downloads",
		       dirname($_SERVER["PHP_SELF"]));

$src = "v0.7.0 (preview) source code";
$name = "openrcm-0.7.0.tar";
$t->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
$t->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
$name = "openrcm-0.7.0-1.src.rpm";
$t->addFile($src, $name, $md5[$name], $sha1[$name]);

$src = "v0.5.0 (preview) source code";
$name = "openrcm-0.5.0.tar";
$t->addFile($src, "$name.bz2", $md5["$name.bz2"], $sha1["$name.bz2"]);
$t->addFile($src, "$name.gz", $md5["$name.gz"], $sha1["$name.gz"]);
$name = "openrcm-0.5.0-1.src.rpm";
$t->addFile($src, $name, $md5[$name], $sha1[$name]);

#############################################################################
#
# Main display part of the page
#
#############################################################################

$prev_describe = "the v0 download page";
$psave = $project;
$project = "Open RCM";
include_once("$topdir/includes/subscribe-announce.inc");
$project = $psave;
?>

<p><hr>

<P><?php $dir = "$topdir/software/orcm/v0.5/downloads/orcm-0.5.0-release-notes_user-guide.pdf";
      print("<a href=\"$dir\">"); ?>This
file</a> contains the release notes and user guide for the 0.5.0 release.</p>

<p>See the 
<a href="<?php print($topdir); ?>/software/orcm/versions/timeline.php">version
timeline</a> for information on the chronology of Open RCM releases.</p>

<p>The following releases are now available:</p>

<p>
<div align="center">
<?php $t->printMe(); ?>
</div>
</p>

<?php 
  include_once("$topdir/includes/footer.inc");
