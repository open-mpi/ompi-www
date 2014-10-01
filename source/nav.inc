<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "source";
$this_nav[] = new Nav("What's new?", "new.php");
$this_nav[] = new Nav("Git clone", "git.php");
$this_nav[] = new Nav("Building from Git", "building.php");
$this_nav[] = new Nav("Searchable source tree", "https://svn.open-mpi.org/source/");
$this_nav[] = new Nav("OpenHub stats", "http://www.openhub.net/p/openmpi");
