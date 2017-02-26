<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "software";
$this_nav[] = new Nav("Current");
$this_nav[] = new Nav("Version 2.0 ", "$topdir/software/ompi/v2.0/");
$this_nav[] = new Nav("Upcoming");
$this_nav[] = new Nav("Version 2.1 ", "$topdir/software/ompi/v2.1/");
$this_nav[] = new Nav("Still supported");
$this_nav[] = new Nav("Version 1.10", "$topdir/software/ompi/v1.10/");
$this_nav[] = new Nav("Older versions");
$this_nav[] = new Nav("Version 1.8 (prior stable)", "$topdir/software/ompi/v1.8/");
$this_nav[] = new Nav("Version 1.7 (prior feature)", "$topdir/software/ompi/v1.7/");
$this_nav[] = new Nav("Version 1.6 (prior stable)", "$topdir/software/ompi/v1.6/");
$this_nav[] = new Nav("Version 1.5 (retired)", "$topdir/software/ompi/v1.5/");
$this_nav[] = new Nav("Version 1.4 (retired)", "$topdir/software/ompi/v1.4/");
$this_nav[] = new Nav("Version 1.3 (retired)", "$topdir/software/ompi/v1.3/");
$this_nav[] = new Nav("Version 1.2 (ancient)", "$topdir/software/ompi/v1.2/");
$this_nav[] = new Nav("Version 1.1 (ancient)", "$topdir/software/ompi/v1.1/");
$this_nav[] = new Nav("Version 1.0 (ancient)", "$topdir/software/ompi/v1.0/");
$this_nav[] = new Nav("Nightly snapshots", "$topdir/nightly/");
