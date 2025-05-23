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
<!-- Generated by Doxygen 1.9.8 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:d3d9a9a6595521f9666a5e94cc830dab83b65699&amp;dn=expat.txt MIT */
$(function() {
  initMenu('',false,false,'search.php','Search');
});
/* @license-end */
</script>
<div id="main-nav"></div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle"><div class="title">Looking at Ancestor and Child Objects</div></div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="func-members" name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:ga92df7facf12aa88034188c8cdaa8cbb2" id="r_ga92df7facf12aa88034188c8cdaa8cbb2"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00154.php#ga92df7facf12aa88034188c8cdaa8cbb2">hwloc_get_ancestor_obj_by_depth</a> (<a class="el" href="a00142.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, int depth, <a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj)</td></tr>
<tr class="separator:ga92df7facf12aa88034188c8cdaa8cbb2"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga83b74cd28eea89492a69990d99b8eac7" id="r_ga83b74cd28eea89492a69990d99b8eac7"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00154.php#ga83b74cd28eea89492a69990d99b8eac7">hwloc_get_ancestor_obj_by_type</a> (<a class="el" href="a00142.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00140.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a> type, <a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj)</td></tr>
<tr class="separator:ga83b74cd28eea89492a69990d99b8eac7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:gab41b927d770fe2bd6517956a941e67b9" id="r_gab41b927d770fe2bd6517956a941e67b9"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00154.php#gab41b927d770fe2bd6517956a941e67b9">hwloc_get_common_ancestor_obj</a> (<a class="el" href="a00142.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj1, <a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj2)</td></tr>
<tr class="separator:gab41b927d770fe2bd6517956a941e67b9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga73b13ad130668db552ae2aadac80cd3c" id="r_ga73b13ad130668db552ae2aadac80cd3c"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00154.php#ga73b13ad130668db552ae2aadac80cd3c">hwloc_obj_is_in_subtree</a> (<a class="el" href="a00142.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> obj, <a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> subtree_root)</td></tr>
<tr class="separator:ga73b13ad130668db552ae2aadac80cd3c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga761c8e824b0ffaa8ea416c761fd70bdc" id="r_ga761c8e824b0ffaa8ea416c761fd70bdc"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00154.php#ga761c8e824b0ffaa8ea416c761fd70bdc">hwloc_get_next_child</a> (<a class="el" href="a00142.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> parent, <a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> prev)</td></tr>
<tr class="separator:ga761c8e824b0ffaa8ea416c761fd70bdc"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<p>Be sure to see the figure in <a class="el" href="a00343.php">Terms and Definitions</a> that shows a complete topology tree, including depths, child/sibling/cousin relationships, and an example of an asymmetric topology where one package has fewer caches than its peers. </p>
<h2 class="groupheader">Function Documentation</h2>
<a id="ga92df7facf12aa88034188c8cdaa8cbb2" name="ga92df7facf12aa88034188c8cdaa8cbb2"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga92df7facf12aa88034188c8cdaa8cbb2">&#9670;&#160;</a></span>hwloc_get_ancestor_obj_by_depth()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_ancestor_obj_by_depth </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00142.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>depth</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the ancestor object of <code>obj</code> at depth <code>depth</code>. </p>
<dl class="section return"><dt>Returns</dt><dd>the ancestor if any. </dd>
<dd>
<code>NULL</code> if no such ancestor exists.</dd></dl>
<dl class="section note"><dt>Note</dt><dd><code>depth</code> should not be the depth of PU or NUMA objects since they are ancestors of no objects (except Misc or I/O). This function rather expects an intermediate level depth, such as the depth of Packages, Cores, or Caches. </dd></dl>

</div>
</div>
<a id="ga83b74cd28eea89492a69990d99b8eac7" name="ga83b74cd28eea89492a69990d99b8eac7"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga83b74cd28eea89492a69990d99b8eac7">&#9670;&#160;</a></span>hwloc_get_ancestor_obj_by_type()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_ancestor_obj_by_type </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00142.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00140.php#gacd37bb612667dc437d66bfb175a8dc55">hwloc_obj_type_t</a>&#160;</td>
          <td class="paramname"><em>type</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the ancestor object of <code>obj</code> with type <code>type</code>. </p>
<dl class="section return"><dt>Returns</dt><dd>the ancestor if any. </dd>
<dd>
<code>NULL</code> if no such ancestor exists.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>if multiple matching ancestors exist (e.g. multiple levels of <a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55a5269ef95be72f88465559d35c9b7ad56" title="Group objects. Objects which do not fit in the above but are detected by hwloc and are useful to take...">HWLOC_OBJ_GROUP</a>) the lowest one is returned.</dd>
<dd>
<code>type</code> should not be <a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55abca6887e80cb291353b0a0c1da83f661" title="Processing Unit, or (Logical) Processor. An execution unit (may share a core with some other logical ...">HWLOC_OBJ_PU</a> or <a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55a9d917a3e5497950c6d8948b8e183db5a" title="NUMA node. An object that contains memory that is directly and byte-accessible to the host processors...">HWLOC_OBJ_NUMANODE</a> since these objects are ancestors of no objects (except Misc or I/O). This function rather expects an intermediate object type, such as <a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55ab16ab8c0dbffc234921d86f3dfb63129" title="Physical package. The physical package that usually gets inserted into a socket on the motherboard....">HWLOC_OBJ_PACKAGE</a>, <a class="el" href="a00140.php#ggacd37bb612667dc437d66bfb175a8dc55ac793958f330bca371aa1535de8aff45f" title="Core. A computation unit (may be shared by several PUs, aka logical processors).">HWLOC_OBJ_CORE</a>, etc. </dd></dl>

</div>
</div>
<a id="gab41b927d770fe2bd6517956a941e67b9" name="gab41b927d770fe2bd6517956a941e67b9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#gab41b927d770fe2bd6517956a941e67b9">&#9670;&#160;</a></span>hwloc_get_common_ancestor_obj()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_common_ancestor_obj </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00142.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj1</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj2</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns the common parent object to objects <code>obj1</code> and <code>obj2</code>. </p>
<dl class="section return"><dt>Returns</dt><dd>the common ancestor.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>This function cannot return <code>NULL</code>. </dd></dl>

</div>
</div>
<a id="ga761c8e824b0ffaa8ea416c761fd70bdc" name="ga761c8e824b0ffaa8ea416c761fd70bdc"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga761c8e824b0ffaa8ea416c761fd70bdc">&#9670;&#160;</a></span>hwloc_get_next_child()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> hwloc_get_next_child </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00142.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>parent</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
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
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Return the next child. </p>
<p>Return the next child among the normal children list, then among the memory children list, then among the I/O children list, then among the Misc children list.</p>
<dl class="section return"><dt>Returns</dt><dd>the first child if <code>prev</code> is <code>NULL</code>. </dd>
<dd>
the next child if <code>prev</code> is not <code>NULL</code>. </dd>
<dd>
<code>NULL</code> when there is no next child. </dd></dl>

</div>
</div>
<a id="ga73b13ad130668db552ae2aadac80cd3c" name="ga73b13ad130668db552ae2aadac80cd3c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga73b13ad130668db552ae2aadac80cd3c">&#9670;&#160;</a></span>hwloc_obj_is_in_subtree()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">int hwloc_obj_is_in_subtree </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00142.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>obj</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>subtree_root</em>&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">inline</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Returns true if <code>obj</code> is inside the subtree beginning with ancestor object <code>subtree_root</code>. </p>
<dl class="section return"><dt>Returns</dt><dd>1 is the object is in the subtree, 0 otherwise.</dd></dl>
<dl class="section note"><dt>Note</dt><dd>This function cannot work if <code>obj</code> and <code>subtree_root</code> objects do not have CPU sets (I/O or Misc objects). </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
