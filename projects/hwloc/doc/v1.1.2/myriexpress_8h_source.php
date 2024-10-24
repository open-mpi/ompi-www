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
<!-- Generated by Doxygen 1.7.3 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li class="current"><a href="files.php"><span>Files</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="files.php"><span>File&#160;List</span></a></li>
      <li><a href="globals.php"><span>Globals</span></a></li>
    </ul>
  </div>
<div class="header">
  <div class="headertitle">
<h1>myriexpress.h</h1>  </div>
</div>
<div class="contents">
<a href="myriexpress_8h.php">Go to the documentation of this file.</a><div class="fragment"><pre class="fragment"><a name="l00001"></a>00001 <span class="comment">/*</span>
<a name="l00002"></a>00002 <span class="comment"> * Copyright © 2010 INRIA</span>
<a name="l00003"></a>00003 <span class="comment"> * Copyright © 2011 Cisco Systems, Inc.  All rights reserved.</span>
<a name="l00004"></a>00004 <span class="comment"> * See COPYING in top-level directory.</span>
<a name="l00005"></a>00005 <span class="comment"> */</span>
<a name="l00006"></a>00006 
<a name="l00015"></a>00015 <span class="preprocessor">#ifndef HWLOC_MYRIEXPRESS_H</span>
<a name="l00016"></a>00016 <span class="preprocessor"></span><span class="preprocessor">#define HWLOC_MYRIEXPRESS_H</span>
<a name="l00017"></a>00017 <span class="preprocessor"></span>
<a name="l00018"></a>00018 <span class="preprocessor">#include &lt;hwloc.h&gt;</span>
<a name="l00019"></a>00019 <span class="preprocessor">#include &lt;hwloc/autogen/config.h&gt;</span>
<a name="l00020"></a>00020 <span class="preprocessor">#include &lt;hwloc/linux.h&gt;</span>
<a name="l00021"></a>00021 
<a name="l00022"></a>00022 <span class="preprocessor">#include &lt;<a class="code" href="myriexpress_8h.php" title="Macros to help interaction between hwloc and Myrinet Express.">myriexpress.h</a>&gt;</span>
<a name="l00023"></a>00023 
<a name="l00024"></a>00024 
<a name="l00025"></a>00025 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00026"></a>00026 <span class="preprocessor"></span><span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {
<a name="l00027"></a>00027 <span class="preprocessor">#endif</span>
<a name="l00028"></a>00028 <span class="preprocessor"></span>
<a name="l00029"></a>00029 
<a name="l00040"></a>00040 <span class="keyword">static</span> inline <span class="keywordtype">int</span>
<a name="l00041"></a><a class="code" href="group__hwlocality__myriexpress.php#ga87f4746d0cad579ce4e86b98088f22a1">00041</a> <a class="code" href="group__hwlocality__myriexpress.php#ga87f4746d0cad579ce4e86b98088f22a1" title="Get the CPU set of logical processors that are physically close the MX board id.">hwloc_mx_board_get_device_cpuset</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology,
<a name="l00042"></a>00042                                  <span class="keywordtype">unsigned</span> <span class="keywordtype">id</span>, <a class="code" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes.">hwloc_cpuset_t</a> <span class="keyword">set</span>)
<a name="l00043"></a>00043 {
<a name="l00044"></a>00044   uint32_t in, out;
<a name="l00045"></a>00045 
<a name="l00046"></a>00046   in = id;
<a name="l00047"></a>00047   <span class="keywordflow">if</span> (mx_get_info(NULL, MX_NUMA_NODE, &amp;in, <span class="keyword">sizeof</span>(in), &amp;out, <span class="keyword">sizeof</span>(out)) != MX_SUCCESS) {
<a name="l00048"></a>00048     errno = EINVAL;
<a name="l00049"></a>00049     <span class="keywordflow">return</span> -1;
<a name="l00050"></a>00050   }
<a name="l00051"></a>00051 
<a name="l00052"></a>00052   <span class="keywordflow">if</span> (out != (uint32_t) -1) {
<a name="l00053"></a>00053     <a class="code" href="structhwloc__obj.php" title="Structure of a topology object.">hwloc_obj_t</a> obj = NULL;
<a name="l00054"></a>00054     <span class="keywordflow">while</span> ((obj = <a class="code" href="group__hwlocality__helper__traversal__basic.php#ga5f08ceb69375341e73563cfe2e77534e" title="Returns the next object of type type.">hwloc_get_next_obj_by_type</a>(topology, <a class="code" href="group__hwlocality__types.php#ggacd37bb612667dc437d66bfb175a8dc55aaf0964881117bdedf1a5e9332cd120dd" title="NUMA node. A set of processors around memory which the processors can directly access.">HWLOC_OBJ_NODE</a>, obj)) != NULL)
<a name="l00055"></a>00055       <span class="keywordflow">if</span> (obj-&gt;<a class="code" href="structhwloc__obj.php#a61a7a80a68eaccbaaa28269e678c81a9" title="OS-provided physical index number.">os_index</a> == out) {
<a name="l00056"></a>00056         <a class="code" href="group__hwlocality__bitmap.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(<span class="keyword">set</span>, obj-&gt;<a class="code" href="structhwloc__obj.php#a67925e0f2c47f50408fbdb9bddd0790f" title="CPUs covered by this object.">cpuset</a>);
<a name="l00057"></a>00057         <span class="keywordflow">goto</span> out;
<a name="l00058"></a>00058       }
<a name="l00059"></a>00059   }
<a name="l00060"></a>00060   <span class="comment">/* fallback to the full topology cpuset */</span>
<a name="l00061"></a>00061   <a class="code" href="group__hwlocality__bitmap.php#gab14743355fa03b36cef521cbcd2fbf64" title="Copy the contents of bitmap src into the already allocated bitmap dst.">hwloc_bitmap_copy</a>(<span class="keyword">set</span>, <a class="code" href="group__hwlocality__helper__cpuset.php#ga75f0ac3ac41e9915541c3ae3153a6e26" title="Get complete CPU set.">hwloc_topology_get_complete_cpuset</a>(topology));
<a name="l00062"></a>00062 
<a name="l00063"></a>00063  out:
<a name="l00064"></a>00064   <span class="keywordflow">return</span> 0;
<a name="l00065"></a>00065 }
<a name="l00066"></a>00066 
<a name="l00073"></a>00073 <span class="keyword">static</span> inline <span class="keywordtype">int</span>
<a name="l00074"></a><a class="code" href="group__hwlocality__myriexpress.php#ga2ff7763b9c2c5975f9a2e3d638351535">00074</a> <a class="code" href="group__hwlocality__myriexpress.php#ga2ff7763b9c2c5975f9a2e3d638351535" title="Get the CPU set of logical processors that are physically close to endpoint endpoint.">hwloc_mx_endpoint_get_device_cpuset</a>(<a class="code" href="group__hwlocality__topology.php#ga9d1e76ee15a7dee158b786c30b6a6e38" title="Topology context.">hwloc_topology_t</a> topology,
<a name="l00075"></a>00075                                     mx_endpoint_t endpoint, <a class="code" href="group__hwlocality__sets.php#ga4bbf39b68b6f568fb92739e7c0ea7801" title="A CPU set is a bitmap whose bits are set according to CPU physical OS indexes.">hwloc_cpuset_t</a> <span class="keyword">set</span>)
<a name="l00076"></a>00076 {
<a name="l00077"></a>00077   uint64_t nid;
<a name="l00078"></a>00078   uint32_t nindex, eid;
<a name="l00079"></a>00079   mx_endpoint_addr_t eaddr;
<a name="l00080"></a>00080 
<a name="l00081"></a>00081   <span class="keywordflow">if</span> (mx_get_endpoint_addr(endpoint, &amp;eaddr) != MX_SUCCESS) {
<a name="l00082"></a>00082     errno = EINVAL;
<a name="l00083"></a>00083     <span class="keywordflow">return</span> -1;
<a name="l00084"></a>00084   }
<a name="l00085"></a>00085 
<a name="l00086"></a>00086   <span class="keywordflow">if</span> (mx_decompose_endpoint_addr(eaddr, &amp;nid, &amp;eid) != MX_SUCCESS) {
<a name="l00087"></a>00087     errno = EINVAL;
<a name="l00088"></a>00088     <span class="keywordflow">return</span> -1;
<a name="l00089"></a>00089   }
<a name="l00090"></a>00090 
<a name="l00091"></a>00091   <span class="keywordflow">if</span> (mx_nic_id_to_board_number(nid, &amp;nindex) != MX_SUCCESS) {
<a name="l00092"></a>00092     errno = EINVAL;
<a name="l00093"></a>00093     <span class="keywordflow">return</span> -1;
<a name="l00094"></a>00094   }
<a name="l00095"></a>00095 
<a name="l00096"></a>00096   <span class="keywordflow">return</span> <a class="code" href="group__hwlocality__myriexpress.php#ga87f4746d0cad579ce4e86b98088f22a1" title="Get the CPU set of logical processors that are physically close the MX board id.">hwloc_mx_board_get_device_cpuset</a>(topology, nindex, <span class="keyword">set</span>);
<a name="l00097"></a>00097 }
<a name="l00098"></a>00098 
<a name="l00102"></a>00102 <span class="preprocessor">#ifdef __cplusplus</span>
<a name="l00103"></a>00103 <span class="preprocessor"></span>} <span class="comment">/* extern &quot;C&quot; */</span>
<a name="l00104"></a>00104 <span class="preprocessor">#endif</span>
<a name="l00105"></a>00105 <span class="preprocessor"></span>
<a name="l00106"></a>00106 
<a name="l00107"></a>00107 <span class="preprocessor">#endif </span><span class="comment">/* HWLOC_MYRIEXPRESS_H */</span>
</pre></div></div>
</div>
<?php
include_once("$topdir/includes/footer.inc");
