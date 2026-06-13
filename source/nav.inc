<?php
include_once("$topdir/includes/nav.inc");
include_once("$topdir/software/ompi/current/version.inc");

$ompi_docs_release_branch = isset($release_branch) ? $release_branch : "$ver_current_dir.x";

$this_dir = "source";
$this_nav[] = new Nav("What's new?", "https://docs.open-mpi.org/en/$ompi_docs_release_branch/news/news-$ompi_docs_release_branch.html");
$this_nav[] = new Nav("Git clone", "git.php");
$this_nav[] = new Nav("Building from Git", "building.php");
$this_nav[] = new Nav("OpenHub stats", "http://www.openhub.net/p/openmpi");
