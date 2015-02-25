<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "software";
$this_nav[] = new Nav("Preview");
$this_nav[] = new Nav("Version 0", "$topdir/software/orcm/v0/");
$this_nav[] = new Nav("Nightly snapshots", "$topdir/nightly/");
