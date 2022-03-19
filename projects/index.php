<?php
$topdir = "..";

$title = "Open MPI Sub Projects";

include_once("$topdir/includes/header.inc");
?>

<P>The Open MPI Project has spawned multiple sub-projects that
are not directly part of MPI, but are related to HPC issues and
are therefore of interested to the general HPC / open-source
community.</p>

<h3>Current projects</h3>

<p>
<ul>
<li><a href="hwloc/">Portable Hardware Locality (hwloc)</a></li>
<li><a href="netloc/">Portable Network Locality (netloc)</a></li>
<li>The <a href="mtt/">MPI Testing Tool (MTT)</a></li>
<li><a href="otpo">Open Tool for Parameter Optimization (OTPO)</a></li>
</ul>
</p>

<h3>Deprecated / inactive sub-projects</h3>

<p>
<ul>
<li><a href="plpa/">Portable Linux Processor Affinity (PLPA)</a> (now
     deprecated by <a href="hwloc/">hwloc</a>)</li>
</ul>
</p>

<?php
  include_once("$topdir/includes/footer.inc"); 
