<?php
$topdir = "../../..";

include_once("version.inc");
$title = "Portable Linux Processor Affinity (PLPA): Version $release_series";

include_once("$topdir/projects/plpa/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

$project = "PLPA";
include_once("$topdir/projects/plpa/deprecated.inc");

print_release_section("plpa", "open-mpi-release", $s3_prefix, $download_prefix,
                      $releases, $prereleases, FALSE);

include_once("$topdir/includes/footer.inc");
