<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "lists";

// For the moment, the archives links point to the frozen archives.
// Once mail-archive.com gets the old archives loaded, we'll shift the
// links to point out there.
$base = $topdir;

include_once("ompi.inc");
include_once("hwloc.inc");
include_once("mtt.inc");
