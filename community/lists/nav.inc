<?php
include_once("$topdir/includes/nav.inc");

$this_dir = "lists";

// List archives are not mirrored (don't want the same results showing up 
// in Google multiple times, for example)

$base = "http://www.open-mpi.org";

include_once("ompi.inc");
include_once("hwloc.inc");
include_once("netloc.inc");
include_once("mtt.inc");
include_once("pmix.inc");
