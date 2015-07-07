<?php
$topdir = "../..";

$title = "Open MPI Mailing Lists";

include_once("nav.inc");
include_once("functions.inc");
include_once("$topdir/includes/header.inc");
?>

<P>Lists for multiple projects are available:

<p>
<ul>
<li><a href="ompi.php">Open MPI-related lists</a></li>
<li><a href="hwloc.php">Portable Hardware Locality (hwloc)-related
    lists</a></li>
<li><a href='netloc.php'>Network Locality-related lists</a></li>
<li><a href='mtt.php'>MPI Testing Tool (MTT)-related lists</a></li>
<li><a href="otpo.php">Open Tool for Parameter Optimization (OTPO)-related
    lists</a></li>
<li><a href="orcm.php">Open Resillient Cluster Manager (ORCM)-related
    lists</a></li>
<li><a href="pmix.php">PMI Exascale (PMIx)-related lists</a></li>
<li><a href="pmix.php">GlassBottom-related lists</a></li>
</ul>
</p>

<?php
  include_once("$topdir/includes/footer.inc");
