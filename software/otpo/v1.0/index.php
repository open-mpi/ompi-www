<?php
$topdir = "../../..";

include_once("version.inc");
$title = "Open Tool for Parameter Optimization: Version $release_series";

include_once("$topdir/projects/otpo/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");
?>

<?php
print_release_section("otpo", "open-mpi-release", $s3_prefix, $download_prefix,
                      $releases, $prereleases, FALSE);
?>

<?php
  include_once("$topdir/includes/footer.inc");
