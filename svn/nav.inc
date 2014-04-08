<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "svn";
$this_nav[] = new Nav("What's new?", "new.php");
$this_nav[] = new Nav("Subversion checkout", "obtaining.php");
$this_nav[] = new Nav("Git clone", "git.php");
$this_nav[] = new Nav("Mercurial clone", "mercurial.php");
$this_nav[] = new Nav("Building from SVN/Git/HG", "building.php");
$this_nav[] = new Nav("Searchable source tree", "https://svn.open-mpi.org/source/");
$this_nav[] = new Nav("Ohloh.net stats", "http://www.ohloh.net/p/openmpi");
$this_nav[] = new Nav("CIA.vc stats", "http://cia.vc/stats/project/OMPI");
