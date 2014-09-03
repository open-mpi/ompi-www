<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "pmix";
$this_nav[] = new Nav("Documentation", "$topdir/projects/pmix/doc/");
$this_nav[] = new Nav("License", "$topdir/projects/pmix/license.php");
$this_nav[] = new Nav("Mailing lists", "$topdir/community/lists/pmix.php");
$this_nav[] = new Nav("Bug tracking", "https://svn.open-mpi.org/trac/pmix/report");
$this_nav[] = new Nav("SVN access", "$topdir/projects/pmix/pmix.php");
$this_nav[] = new Nav("Nightly snapshots", "$topdir/software/pmix/nightly/");
