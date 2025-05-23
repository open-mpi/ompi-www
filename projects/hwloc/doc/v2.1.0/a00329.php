<?php
$topdir = "../../../..";
# Note that we must use the PHP "$$" indirection to assign to the
# "title" variable, because if we list "$ title" (without the space)
# in this file, Doxygen will replace it with a string title.
$ver = basename(getcwd());
$thwarting_doxygen_preprocessor = "title";
$$thwarting_doxygen_preprocessor = "Portable Hardware Locality (hwloc) Documentation: $ver";
$header_include_file = "$topdir/projects/hwloc/doc/$ver/www.open-mpi.org-css.inc";
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/code.inc");
?>
<!-- Generated by Doxygen 1.8.13 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
$(function() {
  initMenu('',false,false,'search.php','Search');
});
</script>
<div id="main-nav"></div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">Terms and Definitions </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p> 
<div class="section" id="termsanddefs_objects">
 </p>
<h1><a class="anchor" id="termsanddefs_objects"></a>
Objects</h1>
<dl>
<dt>Object </dt>
<dd><p class="startdd">Interesting kind of part of the system, such as a Core, a L2Cache, a NUMA memory node, etc. The different types detected by hwloc are detailed in the <a class="el" href="a00148.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> enumeration.</p>
<p>There are four kinds of Objects: Memory (NUMA nodes and Memory-side caches), I/O (Bridges, PCI and OS devices), Misc, and Normal (everything else, including Machine, Package, Die, Core, PU, CPU Caches, etc.). Normal and Memory objects have (non-NULL) CPU sets and nodesets, while I/O and Misc don't.</p>
<p>Objects are topologically sorted by locality (CPU and node sets) into a tree (see <a class="el" href="a00329.php#termsanddefs_tree">Hierarchy, Tree and Levels</a>). </p>
<p class="enddd"></p>
</dd>
<dt>Processing Unit (or Logical Processor) </dt>
<dd><p class="startdd">The smallest processing element that can be represented by a hwloc object. It may be a single-core processor, a core of a multicore processor, or a single thread in a SMT processor. hwloc's PU acronym stands for Processing Unit.</p>
<p>"Logical processor" should not be confused with "Logical index of a
  processor". </p>
<p class="enddd"></p>
</dd>
<dt>Package </dt>
<dd><p class="startdd">A processor Package is the physical package that usually gets inserted into a socket on the motherboard. It is also often called a physical processor or a CPU even if these names bring confusion with respect to cores and processing units. A processor package usually contains multiple cores (and may also be composed of multiple dies). hwloc Package objects were called Sockets up to hwloc 1.10. </p>
<p class="enddd"></p>
</dd>
<dt>NUMA Node </dt>
<dd><p class="startdd">An object that contains memory that is directly and byte-accessible to the host processors. It is usually close to some cores as specified by its CPU set. Hence it is attached as a memory child of the object that groups those cores together, for instance a Package objects with 4 Core children (see <a class="el" href="a00329.php#termsanddefs_tree">Hierarchy, Tree and Levels</a>). </p>
<p class="enddd"></p>
</dd>
<dt>Memory-side Cache </dt>
<dd><p class="startdd">A cache in front of a specific memory region (e.g. a range of physical addresses). It caches all accesses to that region without caring about which core issued the request. This is the opposite of usual CPU caches where only accesses from the local cores are cached, without caring about the target memory.</p>
<p class="enddd">In hwloc, memory-side caches are memory objects placed between their local CPU objects (parent) and the target NUMA node memory (child).  </p>
</dd>
</dl>
<p> 
</div><div class="section" id="termsanddefs_indexes">
 </p>
<h1><a class="anchor" id="termsanddefs_indexes"></a>
Indexes and Sets</h1>
<dl>
<dt>OS or physical index </dt>
<dd><p class="startdd">The index that the operating system (OS) uses to identify the object. This may be completely arbitrary, non-unique, non-contiguous, not representative of logical proximity, and may depend on the BIOS configuration. That is why hwloc almost never uses them, only in the default lstopo output (<code>P#x</code>) and cpuset masks. See also <a class="el" href="a00342.php#faq_indexes">Should I use logical or physical/OS indexes? and how?</a>.</p>
<p class="enddd"></p>
</dd>
<dt>Logical index </dt>
<dd><p class="startdd">Index to uniquely identify objects of the same type and depth, automatically computed by hwloc according to the topology. It expresses logical proximity in a generic way, i.e. objects which have adjacent logical indexes are adjacent in the topology. That is why hwloc almost always uses it in its API, since it expresses logical proximity. They can be shown (as <code>L#x</code>) by <code>lstopo</code> thanks to the <code>-l</code> option. This index is always linear and in the range [0, num_objs_same_type_same_level-1]. Think of it as ``cousin rank.'' The ordering is based on topology first, and then on OS CPU numbers, so it is stable across everything except firmware CPU renumbering. "Logical index" should not be confused with "Logical processor". A "Logical
  processor" (which in hwloc we rather call "processing unit" to avoid the confusion) has both a physical index (as chosen arbitrarily by BIOS/OS) and a logical index (as computed according to logical proximity by hwloc). See also <a class="el" href="a00342.php#faq_indexes">Should I use logical or physical/OS indexes? and how?</a>.</p>
<p class="enddd"></p>
</dd>
<dt>CPU set </dt>
<dd><p class="startdd">The set of logical processors (or processing units) logically included in an object (if it makes sense). They are always expressed using physical logical processor numbers (as announced by the OS). They are implemented as the <a class="el" href="a00169.php#gaa3c2bf4c776d603dcebbb61b0c923d84" title="Set of bits represented as an opaque pointer to an internal bitmap. ">hwloc_bitmap_t</a> opaque structure. hwloc CPU sets are just masks, they do <em>not</em> have any relation with an operating system actual binding notion like Linux' cpusets. I/O and Misc objects do not have CPU sets while all Normal and Memory objects have non-NULL CPU sets.</p>
<p class="enddd"></p>
</dd>
<dt>Node set </dt>
<dd><p class="startdd">The set of NUMA memory nodes logically included in an object (if it makes sense). They are always expressed using physical node numbers (as announced by the OS). They are implemented with the <a class="el" href="a00169.php#gaa3c2bf4c776d603dcebbb61b0c923d84" title="Set of bits represented as an opaque pointer to an internal bitmap. ">hwloc_bitmap_t</a> opaque structure. as bitmaps. I/O and Misc objects do not have Node sets while all Normal and Memory objects have non-NULL nodesets.</p>
<p class="enddd"></p>
</dd>
<dt>Bitmap </dt>
<dd><p class="startdd">A possibly-infinite set of bits used for describing sets of objects such as CPUs (CPU sets) or memory nodes (Node sets). They are implemented with the <a class="el" href="a00169.php#gaa3c2bf4c776d603dcebbb61b0c923d84" title="Set of bits represented as an opaque pointer to an internal bitmap. ">hwloc_bitmap_t</a> opaque structure. </p>
<p class="enddd"></p>
</dd>
</dl>
<p> 
</div><div class="section" id="termsanddefs_tree">
 </p>
<h1><a class="anchor" id="termsanddefs_tree"></a>
Hierarchy, Tree and Levels</h1>
<dl>
<dt>Parent object </dt>
<dd><p class="startdd">The object logically containing the current object, for example because its CPU set includes the CPU set of the current object. All objects have a non-NULL parent, except the root of the topology (Machine object). </p>
<p class="enddd"></p>
</dd>
<dt>Ancestor object </dt>
<dd><p class="startdd">The parent object, or its own parent, and so on.</p>
<p class="enddd"></p>
</dd>
<dt>Children object(s) </dt>
<dd><p class="startdd">The object (or objects) contained in the current object because their CPU set is included in the CPU set of the current object. Each object may also contain separated lists for Memory, I/O and Misc object children. </p>
<p class="enddd"></p>
</dd>
<dt>Arity </dt>
<dd><p class="startdd">The number of normal children of an object. There are also specific arities for Memory, I/O and Misc children. </p>
<p class="enddd"></p>
</dd>
<dt>Sibling objects </dt>
<dd><p class="startdd">Objects in the same children list, which all of them are normal children of the same parent, or all of them are Memory children of the same parent, or I/O children, or Misc. They usually have the same type (and hence are cousins, as well). But they may not if the topology is asymmetric. </p>
<p class="enddd"></p>
</dd>
<dt>Sibling rank </dt>
<dd><p class="startdd">Index to uniquely identify objects which have the same parent, and is always in the range [0, arity-1] (respectively memory_arity, io_arity or misc_arity for Memory, I/O and Misc children of a parent).</p>
<p class="enddd"></p>
</dd>
<dt>Cousin objects </dt>
<dd><p class="startdd">Objects of the same type (and depth) as the current object, even if they do not have the same parent.</p>
<p class="enddd"></p>
</dd>
<dt>Level </dt>
<dd><p class="startdd">Set of objects of the same type and depth. All these objects are cousins.</p>
<p>Memory, I/O and Misc objects also have their own specific levels and (virtual) depth. </p>
<p class="enddd"></p>
</dd>
<dt>Depth </dt>
<dd><p class="startdd">Nesting level in the object tree, starting from the root object. If the topology is symmetric, the depth of a child is equal to the parent depth plus one, and an object depth is also equal to the number of parent/child links between the root object and the given object. If the topology is asymmetric, the difference between some parent and child depths may be larger than one when some intermediate levels (for instance groups) are missing in only some parts of the machine.</p>
<p>The depth of the Machine object is always 0 since it is always the root of the topology. The depth of PU objects is equal to the number of levels in the topology minus one.</p>
<p>Memory, I/O and Misc objects also have their own specific levels and depth. </p>
<p class="enddd"></p>
</dd>
</dl>
<p>The following diagram can help to understand the vocabulary of the relationships by showing the example of a machine with two dual core packages (with no hardware threads); thus, a topology with 5 levels. Each box with rounded corner corresponds to one <a class="el" href="a00149.php#ga79b8ab56877ef99ac59b833203391c7d" title="Convenience typedef; a pointer to a struct hwloc_obj. ">hwloc_obj_t</a>, containing the values of the different integer fields (depth, logical_index, etc.), and arrows show to which other <a class="el" href="a00149.php#ga79b8ab56877ef99ac59b833203391c7d" title="Convenience typedef; a pointer to a struct hwloc_obj. ">hwloc_obj_t</a> pointers point to (first_child, parent, etc.).</p>
<p>The topology always starts with a Machine object as root (depth 0) and ends with PU objects at the bottom (depth 4 here).</p>
<p>Objects of the same level (cousins) are listed in red boxes and linked with red arrows. Children of the same parent (siblings) are linked with blue arrows.</p>
<p>The L2 cache of the last core is intentionally missing to show how asymmetric topologies are handled. See <a class="el" href="a00342.php#faq_asymmetric">What happens if my topology is asymmetric?</a> for more information about such strange topologies.</p>
<div class="image">
<img src="diagram.png" alt="diagram.png"/>
</div>
 <p>It should be noted that for PU objects, the logical index &ndash; as computed linearly by hwloc &ndash; is not the same as the OS index.</p>
<p>The NUMA node is on the side because it is not part of the main tree but rather attached to the object that corresponds to its locality (the entire machine here, hence the root object). It is attached as a <em>Memory</em> child (in green) and has a virtual depth (negative). It could also have siblings if there were multiple local NUMA nodes, or cousins if other NUMA nodes were attached somewhere else in the machine.</p>
<p>I/O or Misc object could be attached in a similar manner. </p>
</div></div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
