<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "doc";
$this_nav[] = new Nav("Current");
$this_nav[] = new Nav("v4.0 (current stable)", "$topdir/doc/v4.0/");
$this_nav[] = new Nav("Still supported");
$this_nav[] = new Nav("v3.1 (prior stable)", "$topdir/doc/v3.1/");
$this_nav[] = new Nav("v3.0 (prior stable)", "$topdir/doc/v3.0/");
$this_nav[] = new Nav("v2.1 (prior stable)", "$topdir/doc/v2.1/");
$this_nav[] = new Nav("Older versions");
$this_nav[] = new Nav("v2.0 (retired)", "$topdir/doc/v2.0/");
$this_nav[] = new Nav("v1.10 (retired)", "$topdir/doc/v1.10/");
$this_nav[] = new Nav("v1.8 (ancient)", "$topdir/doc/v1.8/");
$this_nav[] = new Nav("v1.7 (ancient)", "$topdir/doc/v1.7/");
$this_nav[] = new Nav("v1.6 (ancient)", "$topdir/doc/v1.6/");
$this_nav[] = new Nav("v1.5 (ancient)", "$topdir/doc/v1.5/");
$this_nav[] = new Nav("v1.4 (ancient)", "$topdir/doc/v1.4/");
$this_nav[] = new Nav("v1.3 (ancient)", "$topdir/doc/v1.3/");
$this_nav[] = new Nav("v1.2 (ancient)", "$topdir/doc/v1.2/");
$this_nav[] = new Nav("v1.1 (ancient)", "$topdir/doc/v1.1/");

if (preg_match("/\/doc\/v1/", $_SERVER['REQUEST_URI']) == 1) {
    $noindex = 1;
}
if (preg_match("/\/doc\/v2/", $_SERVER['REQUEST_URI']) == 1) {
    $noindex = 1;
}
