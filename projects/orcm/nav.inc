<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "pmix";
$this_nav[] = new Nav("Documentation", "$topdir/projects/orcm/doc/");
$this_nav[] = new Nav("License", "$topdir/projects/orcm/license.php");
$this_nav[] = new Nav("Mailing lists", "$topdir/community/lists/orcm.php");
$this_nav[] = new Nav("Bug tracking", "https://svn.open-mpi.org/trac/orcm/report");
$this_nav[] = new Nav("GIT access", "$topdir/projects/orcm/orcm.php");
$this_nav[] = new Nav("Nightly snapshots", "$topdir/software/orcm/nightly/");
