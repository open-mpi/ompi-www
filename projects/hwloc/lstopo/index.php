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

$files[] = "2XeonSPv2+msc.v2.1.png";
$descriptions[] = "2x Xeon <em>CascadeLake</em> 6230 with DDR as a cache in front of NVDIMMs (from 2019, with hwloc v2.1)."
."<br/>Processors are configured in <em>SubNUMA-Cluster</em> mode which shows 2 NUMA nodes per package."
."<br/>Large sets of cores (10 here) are factorized:";
$sections[] = 1;
$files[] = "2XeonSPv2+2kmem.v2.1.png";
$descriptions[] = "2x Xeon <em>CascadeLake</em> 6230 with NVDIMMs as separate NUMA nodes (from 2019, with hwloc v2.1).";
$sections[] = 1;
$files[] = "2XeonE5300.v1.11.png";
$descriptions[] = "2x Xeon <em>Clovertown</em> E5345 (from 2007, with hwloc v1.11)";
$sections[] = 1;
$files[] = "2XeonE5v3.v1.11.png";
$descriptions[] = "2x Xeon <em>Haswell-EP</em> E5-2683v3 (from 2014, with hwloc v1.11)."
."<br/>Processors are configured in <em>Cluster-on-Die</em> mode which shows 2 NUMA nodes per package";
$sections[] = 1;
$files[] = "4Opteron6200.v1.11.png";
$descriptions[] = "4x Opteron <em>Magny-Cours</em> 6272 (from 2012, with hwloc v1.11)";
$sections[] = 1;
$files[] = "8Opteron8400.v1.11.png";
$descriptions[] = "8x Opteron <em>Istanbul</em> 8439SE (from 2010, with hwloc v1.11)";
$sections[] = 1;

$files[] = "2XeonSPv2+dax+pmem.v2.1.png";
$descriptions[] = "2x Xeon <em>CascadeLake</em> 6230 + 1x NVDIMM exposed as DAX + 1x NVDIMM exposed as a PMEM block device (from 2019, with hwloc v2.1)";
$sections[] = 2;
$files[] = "2XeonE5+1mic+1ib.v1.11.png";
$descriptions[] = "2x Xeon <em>Sandy-Bridge-EP</em> E5-2680 + 1x Xeon Phi + 1x InfiniBand HCA (from 2013, with hwloc v1.11)";
$sections[] = 2;
$files[] = "2XeonE5v2+2usnic+collapse.v1.11.png";
$descriptions[] = "2x Xeon <em>Sandy-Bridge-EP</em> E5-2690 + 2x Cisco usNIC (from 2013, with hwloc v1.11)."
."<br/>Many identical unused usNIC PCI virtual functions are collapsed in the graphical output";
$sections[] = 2;
$files[] = "2XeonE5+2ocl.v1.11.png";
$descriptions[] = "2x Xeon <em>Sandy-Bridge-EP</em> E5-2650 + 2x AMD GPUs (from 2013, with hwloc v1.11)."
."<br/>GPUs are reported as OpenCL devices";
$sections[] = 2;
$files[] = "2XeonE5v2+2cuda+1display_v1.11.png";
$descriptions[] = "2x Xeon <em>Ivy-Bridge-EP</em> E5-2680v2 + 2x NVIDIA GPUs (from 2013, with hwloc v1.11)."
."<br/>GPUs are reported as CUDA devices and X11 display :1.0";
$sections[] = 2;
$files[] = "2XeonX5600+8cuda.v1.11.png";
$descriptions[] = "2x Xeon <em>Westmere-EP</em> X5650 + 8x NVIDIA GPUs appearing as CUDA devices (Tyan S7015 from 2010, with hwloc v1.11)";
$sections[] = 2;
$files[] = "4XeonE7+iogroup.v1.11.png";
$descriptions[] = "4x Xeon <em>Westmere-EX</em> E7-4870 (Dell PowerEdge R910 from 2012, with hwloc v1.11)."
."<br/>A <em>Group</em> of two packages is used to better report the I/O-affinity of the PCI bus";
$sections[] = 2;
$files[] = "2Power8.v1.11.png";
$descriptions[] = "2x Power8 with 2 NUMA node each + 1x InfiniBand HCA (IBM Power S822L from 2015, with hwloc v1.11)."
."<br/>20 cores and 160 hardware threads total";
$sections[] = 2;

$files[] = "AMD-Trento+8GPU+4HSN.v2.0.png";
$descriptions[] = "AMD Trento CPU with 4 dual MI250 GPUs."
."<br/>Each half GPU is connected to half a NUMA node through Infinity Fabric."
."<br/>There is also a Cray network interface in each dual-GPU module."
."<br/>This node is used in supercomputers such as Frontier and Adastra.";
$sections[] = 3;
$files[] = "KNL.SNC4.H50.v2.0.png";
$descriptions[] = "Intel Knights Landing Xeon Phi."
."<br/>MCDRAM is configured in <em>Hybrid</em> mode (half as a memory-side cache, half as an additional high-bandwidth NUMA node)."
."<br/>SubNUMA clustering (SNC-4) is also enabled, for a total of 8 NUMA nodes."
."<br/>72 cores and 288 threads (from 2017, with hwloc 2.0, which represents DDR and MCDRAM locality properly).";
$sections[] = 3;
$files[] = "KNL.SNC4.H50.v1.11.png";
$descriptions[] = "Intel Knights Landing Xeon Phi."
."<br/>Same SNC-4 Hybrid configuration as above (from 2017, with hwloc 1.11, which could not expose the memory hierarchy perfectly).";
$sections[] = 3;
$files[] = "SPARC-T7.v1.11.png";
$descriptions[] = "Dual-socket Oracle SPARC T7 (from 2016, with hwloc v1.11)."."<br/>32 cores in each socket, with 8 hardware threads each";
$sections[] = 3;
$files[] = "SPARC-T8.v1.11.png";
$descriptions[] = "Oracle SPARC T8 (from 2017, with hwloc 1.11)."."<br/>32 cores with 8 hardware threads each";
$sections[] = 3;
$files[] = "16XeonX7400.v1.11.png";
$descriptions[] = "16x Xeon <em>Dunnington</em> X7460 with IBM custom NUMA interconnect (IBM x3950 M2 from 2009, with hwloc v1.11)."
."<br/>96 cores total";
$sections[] = 3;
$files[] = "20XeonE7+groups.v1.11.png";
$descriptions[] = "20x Xeon <em>Westmere-EX</em> E7-8837 (SGI Altix UV 100 from 2012, with hwloc v1.11)."
."<br/>160 cores total."
."<br/>The matrix of distances between NUMA nodes is used to improve the topology by creating <em>Groups</em> of two processors, which actually correspond to physical <em>Blades</em>";
$sections[] = 3;
$files[] = "64Itanium9100+1NUMA.v1.11.png";
$descriptions[] = "64x Itanium-2 <em>Montvale</em> 9140N (HP Superdome SX2000 from 2009, with hwloc v1.11)."
."<br/>128 cores total, and one additional CPU-less NUMA node."
."<br/>This old Linux kernel does not report cache information";
$sections[] = 3;
$files[] = "128Itanium+groups.v1.11.png";
$descriptions[] = "128x Itanium-2 <em>Montvale</em> 9150M (SGI Altix 4700 from 2008, with hwloc v1.11)."
."<br/>256 cores total."
."<br/>Two levels of <em>Groups</em> are created based on the NUMA distance matrix. They corresponds to SGI racks of 4 <em>IRUs</em> containing 4 <em>Blades</em> each."
."<br/>This old Linux kernel does not report cache information";
$sections[] = 3;
$files[] = "48XeonX7500+groups.v1.11.png";
$descriptions[] = "48x Xeon <em>Nehalem-EX</em> X7560 with distance-based groups (SGI Altix UV1000 from 2010, with hwloc v1.11)."
."<br/>384 cores and 768 hyperthreads total";
$sections[] = 3;
$files[] = "56XeonE5+2mic+2cuda+cgroup.v1.11.png";
$descriptions[] = "56x Xeon <em>Sandy-Bridge-EP</em> E5-4640 + 2x NVIDIA GPUs + 2x Xeon Phi (SGI Altix UV2000 from 2014, with hwloc v1.11)."
."<br/>448 cores and 896 hyperthreads total."
."<br/>The machine is made of 26 blades of 2 processors (appearing as <em>Group0</em> white boxes),"
."2 blades with 1 processor and 1 NVIDIA GPU (blue boxes),"
."and 2 blades with 1 processor and 1 Xeon Phi (pink boxes)."
."<br/>Red hyperthreads are unavailable to the current user due to Linux cgroups."
."<br/>Blue and pink blades were colored using the <em>lstopoStyle</em> custom attribute";
$sections[] = 3;
$files[] = "16Power7+bugs.v1.11.png";
$descriptions[] = "16x Power7 (IBM Power 780 from 2011, with hwloc v1.11)."
."<br/>64 cores and 256 hardware threads total."
."<br/>The buggy hardware <em>Device-Tree</em> reports 8 single-core packages instead of each octo-core package";
$sections[] = 3;

$files[] = "BlueGeneQ.v1.11.png";
$descriptions[] = "BlueGene/Q node (from 2013, with hwloc v1.11)";
$sections[] = 4;
$files[] = "KNC.v1.11.png";
$descriptions[] = "Xeon Phi <em>Knights Corner</em> 7120 (from 2014, with hwloc v1.11)";
$sections[] = 4;
$files[] = "PlayStation3.v1.11.png";
$descriptions[] = "PlayStation 3 (from 2008, with hwloc v1.11)."
."<br/>The old Linux kernel does not report cache information";
$sections[] = 4;
$files[] = "ARMv7.v1.11.png";
$descriptions[] = "ARMv7 (from 2015, with hwloc v1.11)";
$sections[] = 4;
$files[] = "IBM-S390+books.v1.11.png";
$descriptions[] = "IBM/S390 (from 2010, with hwloc v1.11)"
."<br/>Packages are grouped within <em>Books</em> (name of IBM mainframe modular cards)";
$sections[] = 4;

$files[] = "laptop.ascii.v1.11.png";
$descriptions[] = "ASCII Art output in case you don't have X11 available."
."<br/>Generated with <tt>lstopo -.ascii</tt> with hwloc v1.11, or with <tt>lstopo -.txt</tt> in older releases";
$sections[] = 5;

if (count($files) != count($descriptions) or count($files) != count($sections)) {
  echo "Error: ".count($files)." files, ".count($descriptions)." descriptions and ".count($sections)." sections.\n";
  die();
}

function show_by_section($section) {
  global $sections, $files, $descriptions;
  for ($i = 0; $i < count($files) && $i < count($descriptions) && $i < count($sections); $i++) {
    if ($sections[$i] == $section) {
      echo " <p id=\"".$files[$i]."\">\n";
      echo "  <table width=\"100%\"><tbody><tr><td>\n";
      echo "   <h3>".$descriptions[$i].":</h3>\n";
      echo "  </td><td align=\"right\">\n";
      echo "   <a href=\"#".$files[$i]."\">(link to here)</a>\n";
      echo "  </td></tr></tbody></table>\n";
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
<?php show_by_section(1); ?>
<h2>Servers with I/O devices</h2>
<?php show_by_section(2); ?>
<h2>Big platforms (make sure you have a giant screen)</h2>
<?php show_by_section(3); ?>
<h2>Unusual platforms (you won't often run hwloc there)</h2>
<?php show_by_section(4); ?>
<h2>Miscellaneous</h2>
<?php show_by_section(5); ?>

<?php
//}

include_once("$topdir/includes/footer.inc");
