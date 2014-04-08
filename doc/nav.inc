<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "doc";
$this_nav[] = new Nav("Current");
$this_nav[] = new Nav("v1.8 (stable)", "$topdir/doc/v1.8/");
$this_nav[] = new Nav("Older versions");
$this_nav[] = new Nav("v1.7 (prior feature)", "$topdir/doc/v1.7/");
$this_nav[] = new Nav("v1.6 (prior stable)", "$topdir/doc/current/");
$this_nav[] = new Nav("v1.5 (retired)", "$topdir/doc/v1.5/");
$this_nav[] = new Nav("v1.4 (retired)", "$topdir/doc/v1.4/");
$this_nav[] = new Nav("v1.3 (ancient)", "$topdir/doc/v1.3/");
$this_nav[] = new Nav("v1.2 (ancient)", "$topdir/doc/v1.2/");
$this_nav[] = new Nav("v1.1 (ancient)", "$topdir/doc/v1.1/");
