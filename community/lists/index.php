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
<li><a href='mtt.php'>MPI Testing Tool (MTT)-related lists</a></li>
</ul>
</p>

<?php
  include_once("$topdir/includes/footer.inc");
