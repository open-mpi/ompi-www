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
<div class="title">Binding Helpers</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:gaf057d7c5e3cb3df897ce527258537619"><td class="memItemLeft" align="right" valign="top">static inline void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00063.php#gaf057d7c5e3cb3df897ce527258537619">hwloc_distributev</a> (<a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *root, unsigned n_roots, <a class="el" href="a00043.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> *cpuset, unsigned n, unsigned until)</td></tr>
<tr class="separator:gaf057d7c5e3cb3df897ce527258537619"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga6d5c88292ad5aa062c1bebc99369c042"><td class="memItemLeft" align="right" valign="top">static inline void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00063.php#ga6d5c88292ad5aa062c1bebc99369c042">hwloc_distribute</a> (<a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, <a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> root, <a class="el" href="a00043.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> *cpuset, unsigned n, unsigned until)</td></tr>
<tr class="separator:ga6d5c88292ad5aa062c1bebc99369c042"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga3e772fbc4de626ed80f13d332b7d4d03"><td class="memItemLeft" align="right" valign="top">static inline void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00063.php#ga3e772fbc4de626ed80f13d332b7d4d03">hwloc_alloc_membind_policy_nodeset</a> (<a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, size_t len, <a class="el" href="a00043.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a> nodeset, <a class="el" href="a00054.php#gac9764f79505775d06407b40f5e4661e8">hwloc_membind_policy_t</a> policy, int flags)</td></tr>
<tr class="separator:ga3e772fbc4de626ed80f13d332b7d4d03"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ga6178c6a9ec1dd88ec9f6a9fcdcc7d634"><td class="memItemLeft" align="right" valign="top">static inline void *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00063.php#ga6178c6a9ec1dd88ec9f6a9fcdcc7d634">hwloc_alloc_membind_policy</a> (<a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, size_t len, <a class="el" href="a00043.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> cpuset, <a class="el" href="a00054.php#gac9764f79505775d06407b40f5e4661e8">hwloc_membind_policy_t</a> policy, int flags)</td></tr>
<tr class="separator:ga6178c6a9ec1dd88ec9f6a9fcdcc7d634"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Function Documentation</h2>
<a class="anchor" id="ga6178c6a9ec1dd88ec9f6a9fcdcc7d634"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline void* hwloc_alloc_membind_policy </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>len</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00043.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a>&#160;</td>
          <td class="paramname"><em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00054.php#gac9764f79505775d06407b40f5e4661e8">hwloc_membind_policy_t</a>&#160;</td>
          <td class="paramname"><em>policy</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
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

<p>Allocate some memory on the memory nodes near given cpuset <code>cpuset</code>. </p>
<p>This is similar to hwloc_alloc_membind_policy_nodeset, but for a given cpuset. </p>

</div>
</div>
<a class="anchor" id="ga3e772fbc4de626ed80f13d332b7d4d03"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline void* hwloc_alloc_membind_policy_nodeset </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">size_t&#160;</td>
          <td class="paramname"><em>len</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00043.php#ga2f5276235841ad66a79bedad16a5a10c">hwloc_const_nodeset_t</a>&#160;</td>
          <td class="paramname"><em>nodeset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00054.php#gac9764f79505775d06407b40f5e4661e8">hwloc_membind_policy_t</a>&#160;</td>
          <td class="paramname"><em>policy</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int&#160;</td>
          <td class="paramname"><em>flags</em>&#160;</td>
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

<p>Allocate some memory on the given nodeset <code>nodeset</code>. </p>
<p>This is similar to hwloc_alloc_membind except that it is allowed to change the current memory binding policy, thus providing more binding support, at the expense of changing the current state. </p>

</div>
</div>
<a class="anchor" id="ga6d5c88292ad5aa062c1bebc99369c042"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline void hwloc_distribute </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a>&#160;</td>
          <td class="paramname"><em>root</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00043.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> *&#160;</td>
          <td class="paramname"><em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>n</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>until</em>&#160;</td>
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

</div>
</div>
<a class="anchor" id="gaf057d7c5e3cb3df897ce527258537619"></a>
<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">static inline void hwloc_distributev </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="a00042.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a>&#160;</td>
          <td class="paramname"><em>topology</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00045.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a> *&#160;</td>
          <td class="paramname"><em>roots</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>n_roots</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype"><a class="el" href="a00043.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> *&#160;</td>
          <td class="paramname"><em>cpuset</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>n</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">unsigned&#160;</td>
          <td class="paramname"><em>until</em>&#160;</td>
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

<p>Distribute <code>n</code> items over the topology under <code>root</code>. </p>
<p>Distribute <code>n</code> items over the topology under <code>roots</code>.</p>
<p>Array <code>cpuset</code> will be filled with <code>n</code> cpusets recursively distributed linearly over the topology under <code>root</code>, down to depth <code>until</code> (which can be INT_MAX to distribute down to the finest level).</p>
<p>This is typically useful when an application wants to distribute <code>n</code> threads over a machine, giving each of them as much private cache as possible and keeping them locally in number order.</p>
<p>The caller may typically want to also call <a class="el" href="a00069.php#ga4630aa1b7e08eac5b41be126194e84a1" title="Keep a single index among those set in bitmap bitmap.">hwloc_bitmap_singlify()</a> before binding a thread so that it does not move at all.</p>
<dl class="section note"><dt>Note</dt><dd>This function requires the <code>root</code> object to have a CPU set.</dd></dl>
<p>This is the same as hwloc_distribute, but takes an array of roots instead of just one root.</p>
<dl class="section note"><dt>Note</dt><dd>This function requires the <code>roots</code> objects to have a CPU set. </dd></dl>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
