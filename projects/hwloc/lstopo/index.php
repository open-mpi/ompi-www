<?php
$topdir = "../../..";
$title = "Portable Hardware Locality (hwloc)";
include_once("$topdir/software/hwloc/current/version.inc");
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/news.inc");
include_once("$topdir/includes/code.inc");

$files = array();
$descriptions = array();
$sections = array();

$files[] = "2XeonE5300.v1.11.png";
$descriptions[] = "2x Xeon <em>Clovertown</em> E5345 (from 2007), with hwloc v1.11";
$sections[] = 1;
$files[] = "2XeonE5v3.v1.11.png";
$descriptions[] = "2x Xeon <em>Haswell-EP</em> E5-2683v3 in Cluster-on-Die mode which shows 2 NUMA nodes per package (from 2014), with hwloc v1.11";
$sections[] = 1;
$files[] = "4Opteron6200.v1.11.png";
$descriptions[] = "4x Opteron <em>Magny-Cours</em> 6272 (from 2012), with hwloc v1.11";
$sections[] = 1;
$files[] = "8Opteron8400.v1.11.png";
$descriptions[] = "8x Opteron <em>Istanbul</em> 8439SE (from 2010), with hwloc v1.11";
$sections[] = 1;

$files[] = "2XeonE5+1mic+1ib.v1.11.png";
$descriptions[] = "2x Xeon <em>Sandy-Bridge-EP</em> E5-2680 + 1x Xeon Phi + 1x InfiniBand HCA (from 2013), with hwloc v1.11";
$sections[] = 2;
$files[] = "2XeonE5v2+2usnic+collapse.v1.11.png";
$descriptions[] = "2x Xeon <em>Sandy-Bridge-EP</em> E5-2690 + 2x Cisco USNIC with many PCI virtual functions collapsed (from 2013), with hwloc v1.11";
$sections[] = 2;
$files[] = "2XeonE5+2ocl.v1.11.png";
$descriptions[] = "2x Xeon <em>Sandy-Bridge-EP</em> E5-2650 + 2x AMD GPUs appearing as OpenCL devices (from 2013), with hwloc v1.11";
$sections[] = 2;
$files[] = "2XeonE5v2+2cuda+1display_v1.11.png";
$descriptions[] = "2x Xeon <em>Ivy-Bridge-EP</em> E5-2680v2 + 2x NVIDIA GPUs appearing as CUDA devices and display device :1.0 (from 2013), with hwloc v1.11";
$sections[] = 2;
$files[] = "2XeonX5600+8cuda.v1.11.png";
$descriptions[] = "2x Xeon <em>Westmere-EP</em> X5650 + 8x NVIDIA GPUs appearing as CUDA devices (from 2010), with hwloc v1.11";
$sections[] = 2;
$files[] = "4XeonE7+iogroup.v1.11.png";
$descriptions[] = "4x Xeon <em>Westmere-EX</em> E7-4870, with a group for better I/O-affinity (from 2012), with hwloc v1.11";
$sections[] = 2;
$files[] = "2Power8.v1.11.png";
$descriptions[] = "2x Power8 with 2 NUMA node each + 1x InfiniBand HCA, 20 cores and 160 cores total (from 2015), with hwloc v1.11";
$sections[] = 2;

$files[] = "16XeonX7400.v1.11.png";
$descriptions[] = "16x Xeon <em>Dunnington</em> X7460 with IBM NUMA interconnect, 96 cores total (from 2009), with hwloc v1.11";
$sections[] = 3;
$files[] = "20XeonE7+groups.v1.11.png";
$descriptions[] = "20x Xeon <em>Westmere-EX</em> E7-8837 with distance-based groups, 160 cores total (from 2012), with hwloc v1.11";
$sections[] = 3;
$files[] = "64Itanium9100+1NUMA.v1.11.png";
$descriptions[] = "64x Itanium-2 <em>Montvale</em> 9140N with one additional CPU-less NUMA node, 128 cores total (from 2009, with an old Linux kernel that does not report cache information), with hwloc v1.11";
$sections[] = 3;
$files[] = "128Itanium+groups.v1.11.png";
$descriptions[] = "128x Itanium-2 <em>Montecito</em> 9150M with 2 levels of distance-based groups, 256 cores total (from 2008, with an old Linux kernel that does not report cache information), with hwloc v1.11";
$sections[] = 3;
$files[] = "48XeonX7500+groups.v1.11.png";
$descriptions[] = "48x Xeon <em>Nehalem-EX</em> X7560 with distance-based groups, 384 cores and 768 hyperthreads total (from 2010), with hwloc v1.11";
$sections[] = 3;
$files[] = "16Power7+bugs.v1.11.png";
$descriptions[] = "16x Power7, 64 cores and 256 hardware threads total (from 2011, with buggy device-tree reporting 8 single-core packages instead of each octo-core package), with hwloc v1.11";
$sections[] = 3;

$files[] = "BlueGeneQ.v1.11.png";
$descriptions[] = "BlueGene/Q node (from 2013), with hwloc v1.11";
$sections[] = 4;
$files[] = "KNC.v1.11.png";
$descriptions[] = "Xeon Phi <em>Knights Corner</em> 7120 (from 2014), with hwloc v1.11";
$sections[] = 4;
$files[] = "PlayStation3.v1.11.png";
$descriptions[] = "PlayStation 3 (from 2008, with an old Linux kernel that does not report cache information), with hwloc v1.11";
$sections[] = 4;
$files[] = "ARMv7.v1.11.png";
$descriptions[] = "ARMv7 (from 2015), with hwloc v1.11";
$sections[] = 4;
$files[] = "IBM-S390+books.v1.11.png";
$descriptions[] = "IBM/S390 with packages assembled as \"Books\" (from 2010), with hwloc v1.11";
$sections[] = 4;

$files[] = "laptop.ascii.v1.11.png";
$descriptions[] = "ASCII Art output in case you don't have X11 available (generated with <tt>lstopo -.ascii</tt> with hwloc v1.11, or with <tt>lstopo -.txt</tt> in older releases)";
$sections[] = 5;

if (count($files) != count($descriptions) or count($files) != count($sections)) {
  echo "Error: ".count($files)." files, ".count($descriptions)." descriptions and ".count($sections)." sections.\n";
  die();
}

function show_by_section($section) {
  global $sections, $files, $descriptions;
  for ($i = 0; $i < count($files) && $i < count($descriptions) && $i < count($sections); $i++) {
    if ($sections[$i] == $section) {
      echo " <p>\n";
      echo "  <h3>".$descriptions[$i].":</h3>\n";
      echo "  <a href=\"images/".$files[$i]."\"><img src=\"images/thumb.".$files[$i]."\"/></a>\n";
//      echo "  <a href=\"?index=$i\"><img src=\"images/thumb.".$files[$i]."\"/></a><br/>\n";
      echo " <br/><br/></p>\n";
    }
  }
}

/*
$index = $_GET["index"];
if ($index != "") {
  if ($index < 0 or $index >= count($descriptions)) {
    echo "Error: Invalid index $index.\n";
    die();
  }
  if ($index > 0) {
    echo "<a href=\"?index=".($index-1)."\">Previous</a> &nbsp; ";
  } else {
    echo "Previous &nbsp; ";
  }
  echo "<a href=\"?\">Index</a> &nbsp; ";
  if ($index < count($descriptions)-1) {
    echo "<a href=\"?index=".($index+1)."\">Next</a>";
  } else {
    echo "Next";
  }
  echo "<br/>\n";
  echo "<h3>".$descriptions[$index].":</h3>\n";
  echo "<br/>\n";
  echo "<em>Click on the image to open it.</em>\n";
  echo "<br/>\n";
  echo "<a href=\"images/".$files[$index]."\"><img src=\"images/".$files[$index]."\"/></a>\n";
} else {
*/

?>

<h1>The Best of lstopo</h1>

<p>
Here are lstopo graphical outputs on miscellaneous platforms, from common servers to huge many-core platforms
and strange machines.
If your output is even nicer, please send it together with the XML!
</p>

<p>
  <em>Click on images to open them.</em>
</p>

<h2>Common Servers</h2>
<? show_by_section(1); ?>
<h2>Servers with I/O devices</h2>
<? show_by_section(2); ?>
<h2>Big platforms (make sure you have a giant screen)</h2>
<? show_by_section(3); ?>
<h2>Unusual platforms (you won't often run hwloc there)</h2>
<? show_by_section(4); ?>
<h2>Miscellaneous</h2>
<? show_by_section(5); ?>

<?php
//}

include_once("$topdir/includes/footer.inc");
