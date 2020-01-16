<?php
include_once("$topdir/includes/nav.inc");

$meta_keywords="hwloc, Hardware Locality, topology, locality, hierarchy, NUMA, NUMAnode, processor, package, cache, core, PU, Open MPI, HPC, Linux";

if (preg_match("/\/doc\/v([0-9]+).([0-9]+)/", $_SERVER['REQUEST_URI'], $matches) == 1) {
    if ($matches[1] == 1 and $matches[2] < 11) {
        $noindex = 1;
    }
}

$this_dir = "hwloc";
$this_nav[] = new Nav("Download v2.1 (new)", "$topdir/software/hwloc/v2.1/");
$this_nav[] = new Nav("Download v2.0 (stable)", "$topdir/software/hwloc/v2.0/");
$this_nav[] = new Nav("Download v1.11 (ultrastable)", "$topdir/software/hwloc/v1.11/");
$this_nav[] = new Nav("Download ancient", "$topdir/software/hwloc/ancient/");
$this_nav[] = new Nav("Documentation", "$topdir/projects/hwloc/doc/");
$this_nav[] = new Nav("Tutorials", "$topdir/projects/hwloc/tutorials/");
$this_nav[] = new Nav("Best of lstopo", "$topdir/projects/hwloc/lstopo/");
$this_nav[] = new Nav("XML topology database", "https://hwloc.gitlabpages.inria.fr/xmls/");
$this_nav[] = new Nav("License", "$topdir/projects/hwloc/license.php");
$this_nav[] = new Nav("Mailing lists", "$topdir/community/lists/hwloc.php");
$this_nav[] = new Nav("Bug tracking", "https://github.com/open-mpi/hwloc/issues");
$this_nav[] = new Nav("Git access", "$topdir/projects/hwloc/git.php");
$this_nav[] = new Nav("Nightly snapshots", "$topdir/software/hwloc/nightly/");
