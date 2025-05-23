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
<!-- Generated by Doxygen 1.8.3.1 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Finding Objects Inside a CPU set</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gabcd5fa81a95fa5335950cae092277d5b"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#gabcd5fa81a95fa5335950cae092277d5b">hwloc_get_first_largest_obj_inside_cpuset</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set)</td></tr>
<tr class="separator:gabcd5fa81a95fa5335950cae092277d5b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaab04c89623662e63a48ed2cd48eb601c"><td class="memItemLeft" align="right" valign="top"> int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#gaab04c89623662e63a48ed2cd48eb601c">hwloc_get_largest_objs_inside_cpuset</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *restrict objs, int max)</td></tr>
<tr class="separator:gaab04c89623662e63a48ed2cd48eb601c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga8af256c2572f16520f95440b884c1bd6"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga8af256c2572f16520f95440b884c1bd6">hwloc_get_next_obj_inside_cpuset_by_depth</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, unsigned depth, <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:ga8af256c2572f16520f95440b884c1bd6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga934e7ecd68b33403e0c0be779d9ed1e6"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga934e7ecd68b33403e0c0be779d9ed1e6">hwloc_get_next_obj_inside_cpuset_by_type</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:ga934e7ecd68b33403e0c0be779d9ed1e6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga57c8a0e227d1b16a31d19aaf755b42c0"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga57c8a0e227d1b16a31d19aaf755b42c0">hwloc_get_obj_inside_cpuset_by_depth</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, unsigned depth, unsigned idx) </td></tr>
<tr class="separator:ga57c8a0e227d1b16a31d19aaf755b42c0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gaa8dcdb85224f7350b90fb0a1ca91e6d6"><td class="memItemLeft" align="right" valign="top">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#gaa8dcdb85224f7350b90fb0a1ca91e6d6">hwloc_get_obj_inside_cpuset_by_type</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, unsigned idx) </td></tr>
<tr class="separator:gaa8dcdb85224f7350b90fb0a1ca91e6d6"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga457604a2dedbf70ba3b480558666b56b"><td class="memItemLeft" align="right" valign="top">static inline unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga457604a2dedbf70ba3b480558666b56b">hwloc_get_nbobjs_inside_cpuset_by_depth</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, unsigned depth) </td></tr>
<tr class="separator:ga457604a2dedbf70ba3b480558666b56b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga63481874c69ed257b1a0c03e7615ff97"><td class="memItemLeft" align="right" valign="top">static inline int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00052.php#ga63481874c69ed257b1a0c03e7615ff97">hwloc_get_nbobjs_inside_cpuset_by_type</a> (<a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set, <a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type) </td></tr>
<tr class="separator:ga63481874c69ed257b1a0c03e7615ff97"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="gabcd5fa81a95fa5335950cae092277d5b"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_first_largest_obj_inside_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Get the first largest object included in the given cpuset <code>set</code>. </p>
<dl class="section return"><dt>Returns</dt><dd>the first object that is included in <code>set</code> and whose parent is not.</dd></dl>
<p>This is convenient for iterating over all largest objects within a CPU set by doing a loop getting the first largest object and clearing its CPU set from the remaining CPU set. </p>

</div>
</div>
<a class="anchor" id="gaab04c89623662e63a48ed2cd48eb601c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"> int hwloc_get_largest_objs_inside_cpuset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *restrict&#160;</td>
          <td class="paramname"><em>objs</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>max</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Get the set of largest objects covering exactly a given cpuset <code>set</code>. </p>
<dl class="section return"><dt>Returns</dt><dd>the number of objects returned in <code>objs</code>. </dd></dl>

</div>
</div>
<a class="anchor" id="ga457604a2dedbf70ba3b480558666b56b"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline unsigned hwloc_get_nbobjs_inside_cpuset_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the number of objects at depth <code>depth</code> included in CPU set <code>set</code>. </p>

</div>
</div>
<a class="anchor" id="ga63481874c69ed257b1a0c03e7615ff97"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline int hwloc_get_nbobjs_inside_cpuset_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the number of objects of type <code>type</code> included in CPU set <code>set</code>. </p>
<p>If no object for that type exists inside CPU set <code>set</code>, 0 is returned. If there are several levels with objects of that type inside CPU set <code>set</code>, -1 is returned. </p>

</div>
</div>
<a class="anchor" id="ga8af256c2572f16520f95440b884c1bd6"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_obj_inside_cpuset_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the next object at depth <code>depth</code> included in CPU set <code>set</code>. </p>
<p>If <code>prev</code> is <code>NULL</code>, return the first object at depth <code>depth</code> included in <code>set</code>. The next invokation should pass the previous return value in <code>prev</code> so as to obtain the next object in <code>set</code>. </p>

</div>
</div>
<a class="anchor" id="ga934e7ecd68b33403e0c0be779d9ed1e6"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_obj_inside_cpuset_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>prev</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the next object of type <code>type</code> included in CPU set <code>set</code>. </p>
<p>If there are multiple or no depth for given type, return <code>NULL</code> and let the caller fallback to <a class="el" href="a00052.php#ga8af256c2572f16520f95440b884c1bd6" title="Return the next object at depth depth included in CPU set set.">hwloc_get_next_obj_inside_cpuset_by_depth()</a>. </p>

</div>
</div>
<a class="anchor" id="ga57c8a0e227d1b16a31d19aaf755b42c0"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_obj_inside_cpuset_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>idx</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the (logically) <code>idx</code> -th object at depth <code>depth</code> included in CPU set <code>set</code>. </p>

</div>
</div>
<a class="anchor" id="gaa8dcdb85224f7350b90fb0a1ca91e6d6"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline <a class="el" href="a00041.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_obj_inside_cpuset_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00038.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00039.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>set</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00040.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>idx</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">static</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the <code>idx</code> -th object of type <code>type</code> included in CPU set <code>set</code>. </p>
<p>If there are multiple or no depth for given type, return <code>NULL</code> and let the caller fallback to <a class="el" href="a00052.php#ga57c8a0e227d1b16a31d19aaf755b42c0" title="Return the (logically) idx -th object at depth depth included in CPU set set.">hwloc_get_obj_inside_cpuset_by_depth()</a>. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
