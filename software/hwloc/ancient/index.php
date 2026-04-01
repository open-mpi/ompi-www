<?php
$topdir = "../../..";

$title = "Portable Hardware Locality (hwloc): ancient release series";

include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/downloads.inc");

function one_ancient($ver, $epoch) {
  global $topdir;
  echo "<li><a href=\"$topdir/software/hwloc/v$ver/\">";
  echo "Download v$ver ($epoch)";
  echo "</a></li>\n";
}
?>

<p>
 Only recent release series are listed in the left panel.
 Here are the links to ancient release series archives:
</p>
<ul>
<!--
<?php one_ancient("", ""); ?>
<?php one_ancient("", ""); ?>
<?php one_ancient("", ""); ?>
<?php one_ancient("", ""); ?>
<?php one_ancient("2.14", "Renaissance"); ?>
<?php one_ancient("2.13", "Modern Age"); ?>
<?php one_ancient("2.12", "Middle Age"); ?>
-->
<!-- 2.x from https://en.wikipedia.org/wiki/Geologic_time_scale#Divisions_of_geologic_time -->
<?php one_ancient("2.11", "Antiquity"); ?>
<?php one_ancient("2.10", "Iron Age"); ?>
<?php one_ancient("2.9", "Bronze Age"); ?>
<?php one_ancient("2.8", "Stone Age"); ?>
<?php one_ancient("2.7", "Cenozoic"); ?>
<!-- https://en.wikipedia.org/wiki/Mesozoic -->
<?php one_ancient("2.6", "Cretaceous"); ?>
<?php one_ancient("2.5", "Jurassic"); ?>
<?php one_ancient("2.4", "Triassic"); ?>
<!-- https://en.wikipedia.org/wiki/Paleozoic -->
<?php one_ancient("2.3", "Paleozoic"); ?>
<!-- https://en.wikipedia.org/wiki/Precambrian -->
<?php one_ancient("2.2", "Proterozoic"); ?>
<?php one_ancient("2.1", "Archean"); ?>
<?php one_ancient("2.0", "Hadean"); ?>
<!-- 1.x from https://en.wikipedia.org/wiki/Chronology_of_the_universe -->
<?php one_ancient("1.11", "Theia Impact"); ?>
<?php one_ancient("1.10", "Solar System Formation"); ?>
<?php one_ancient("1.9", "Reionization"); ?>
<?php one_ancient("1.8", "Star and Galaxy Formation"); ?>
<?php one_ancient("1.7", "Earliest Structures"); ?>
<?php one_ancient("1.6", "Dark Ages"); ?>
<?php one_ancient("1.5", "Recombination"); ?>
<?php one_ancient("1.4", "Nucleosynthesis"); ?>
<?php one_ancient("1.3", "Neutrino Decoupling"); ?>
<?php one_ancient("1.2", "Baryogenesis"); ?>
<?php one_ancient("1.1", "Inflation"); ?>
<?php one_ancient("1.0", "Planck Epoch"); ?>
<?php one_ancient("0.9", "Big-Bang"); ?>
</ul>

<?php
  include_once("$topdir/includes/footer.inc");
