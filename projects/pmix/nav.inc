<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "pmix";
$this_nav[] = new Nav("Download v1.1", "$topdir/software/pmix/v1.1/");
$this_nav[] = new Nav("Download v1.0 (retired)", "$topdir/software/pmix/v1.0/");
$this_nav[] = new Nav("Documentation", "http://pmix.github.io/master/master/man");
$this_nav[] = new Nav("License", "$topdir/projects/pmix/license.php");
$this_nav[] = new Nav("Mailing list", "https://groups.google.com/d/forum/pmix");
$this_nav[] = new Nav("Bug tracking", "https://github.com/pmix/master/issues");
$this_nav[] = new Nav("Git access", "https://github.com/pmix/master");
$this_nav[] = new Nav("Nightly snapshots", "$topdir/software/pmix/nightly/");
