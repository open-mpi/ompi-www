<?php
include_once("$topdir/includes/nav.inc");

$logo = "images/mtt-logo.png";
$logo_url = "$topdir/projects/mtt";
$project = "MPI Testing Tool";

$this_absdir = "/projects/mtt";
$this_nav[] = new Nav("Download v3.0 (prerelease)", "$topdir/software/mtt/v3.0/");
$this_nav[] = new Nav("License", "$topdir/projects/mtt/license.php");
$this_nav[] = new Nav("Mailing lists", "$topdir/community/lists/mtt.php");
$this_nav[] = new Nav("Subversion checkout", "$topdir/projects/mtt/svn.php");
