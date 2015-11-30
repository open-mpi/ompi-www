<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "pmix";
$this_nav[] = new Nav("Download v1.1", "https://raw.githubusercontent.com/pmix/tarballs/master/pmix-1.1.1.tar.bz2");
$this_nav[] = new Nav("Download v1.0 (retired)", "https://raw.githubusercontent.com/pmix/tarballs/master/pmix-1.0.0.tar.bz2");
$this_nav[] = new Nav("Documentation", "http://pmix.github.io/master/master/man");
$this_nav[] = new Nav("License", "$topdir/projects/pmix/license.php");
$this_nav[] = new Nav("Mailing list", "https://groups.google.com/d/forum/pmix");
$this_nav[] = new Nav("Bug tracking", "https://github.com/pmix/master/issues");
$this_nav[] = new Nav("Git access", "https://github.com/pmix/master");
$this_nav[] = new Nav("Nightly snapshots", "$topdir/software/pmix/nightly/");
