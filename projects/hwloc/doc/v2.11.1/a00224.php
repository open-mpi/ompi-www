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
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="a00200.php">hwloc_obj_attr_u</a></li><li class="navelem"><a class="el" href="a00224.php">hwloc_bridge_attr_s</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle"><div class="title">hwloc_obj_attr_u::hwloc_bridge_attr_s Struct Reference</div></div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00071_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="pub-attribs" name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:a94647ccf58afd32602f584b47a0321ce" id="r_a94647ccf58afd32602f584b47a0321ce"><td class="memItemLeft" >union {&#160;</td><td class="memItemRight" valign="bottom"></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a437d61b901e99118f509472c08705e66" id="r_a437d61b901e99118f509472c08705e66"><td class="memItemLeft" >&#160;&#160;&#160;struct <a class="el" href="a00220.php">hwloc_pcidev_attr_s</a>&#160;&#160;&#160;<a class="el" href="a00224.php#ab5c564e7c95b747dae9eb84ec0a2c31e">pci</a>&#160;</td><td class="memItemRight" valign="bottom"></td></tr>
<tr class="separator:a437d61b901e99118f509472c08705e66"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a94647ccf58afd32602f584b47a0321ce" id="r_a94647ccf58afd32602f584b47a0321ce"><td class="memItemLeft" valign="top">}&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00224.php#a94647ccf58afd32602f584b47a0321ce">upstream</a>&#160;</td><td class="memItemRight" valign="bottom"></td></tr>
<tr class="separator:a94647ccf58afd32602f584b47a0321ce"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a265dd2164aa2df4972e25a029da72125" id="r_a265dd2164aa2df4972e25a029da72125"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00140.php#gab34362c7a23296c3f12c5756747abda3">hwloc_obj_bridge_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00224.php#a265dd2164aa2df4972e25a029da72125">upstream_type</a></td></tr>
<tr class="separator:a265dd2164aa2df4972e25a029da72125"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abe1e38eb5ac8dc59829c8dc045f0d747" id="r_abe1e38eb5ac8dc59829c8dc045f0d747"><td class="memItemLeft" >union {&#160;</td><td class="memItemRight" valign="bottom"></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5fd227dacdc56f819425d2ff14250cdf" id="r_a5fd227dacdc56f819425d2ff14250cdf"><td class="memItemLeft" >&#160;&#160;&#160;struct {&#160;</td><td class="memItemRight" valign="bottom"></td></tr>
<tr class="separator:ac83cbe90209860113e54d86f90b71307"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5f2e1614bc9b3de631ea2dc1dd984b6a" id="r_a5f2e1614bc9b3de631ea2dc1dd984b6a"><td class="memItemLeft" >&#160;&#160;&#160;&#160;&#160;&#160;unsigned short&#160;&#160;&#160;<a class="el" href="a00224.php#a2c31e565a5f0d23d0a0a3dd3ec8f4b17">domain</a>&#160;</td><td class="memItemRight" valign="bottom"></td></tr>
<tr class="separator:a5f2e1614bc9b3de631ea2dc1dd984b6a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aca58baa85ea2ea9db10b4f9b7965ca27" id="r_aca58baa85ea2ea9db10b4f9b7965ca27"><td class="memItemLeft" >&#160;&#160;&#160;&#160;&#160;&#160;unsigned char&#160;&#160;&#160;<a class="el" href="a00224.php#ae2d9dd73ef1d32045c584a8e66d2f83f">secondary_bus</a>&#160;</td><td class="memItemRight" valign="bottom"></td></tr>
<tr class="separator:aca58baa85ea2ea9db10b4f9b7965ca27"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a78500e2a7d47ea9411c992ca63c305de" id="r_a78500e2a7d47ea9411c992ca63c305de"><td class="memItemLeft" >&#160;&#160;&#160;&#160;&#160;&#160;unsigned char&#160;&#160;&#160;<a class="el" href="a00224.php#af3f3f7d76bf03e8d2afa721c2b8d6771">subordinate_bus</a>&#160;</td><td class="memItemRight" valign="bottom"></td></tr>
<tr class="separator:a78500e2a7d47ea9411c992ca63c305de"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5fd227dacdc56f819425d2ff14250cdf" id="r_a5fd227dacdc56f819425d2ff14250cdf"><td class="memItemLeft" valign="top">&#160;&#160;&#160;}&#160;&#160;&#160;<a class="el" href="a00224.php#ac83cbe90209860113e54d86f90b71307">pci</a>&#160;</td><td class="memItemRight" valign="bottom"></td></tr>
<tr class="separator:a5fd227dacdc56f819425d2ff14250cdf"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:abe1e38eb5ac8dc59829c8dc045f0d747" id="r_abe1e38eb5ac8dc59829c8dc045f0d747"><td class="memItemLeft" valign="top">}&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00224.php#abe1e38eb5ac8dc59829c8dc045f0d747">downstream</a>&#160;</td><td class="memItemRight" valign="bottom"></td></tr>
<tr class="separator:abe1e38eb5ac8dc59829c8dc045f0d747"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac6a169b672d0e9f75756fd5665828b93" id="r_ac6a169b672d0e9f75756fd5665828b93"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00140.php#gab34362c7a23296c3f12c5756747abda3">hwloc_obj_bridge_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00224.php#ac6a169b672d0e9f75756fd5665828b93">downstream_type</a></td></tr>
<tr class="separator:ac6a169b672d0e9f75756fd5665828b93"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a336c8b22893d5d734d8c9dfca4066b46" id="r_a336c8b22893d5d734d8c9dfca4066b46"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00224.php#a336c8b22893d5d734d8c9dfca4066b46">depth</a></td></tr>
<tr class="separator:a336c8b22893d5d734d8c9dfca4066b46"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Bridge specific Object Attributes. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a id="a336c8b22893d5d734d8c9dfca4066b46" name="a336c8b22893d5d734d8c9dfca4066b46"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a336c8b22893d5d734d8c9dfca4066b46">&#9670;&#160;</a></span>depth</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_obj_attr_u::hwloc_bridge_attr_s::depth</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a2c31e565a5f0d23d0a0a3dd3ec8f4b17" name="a2c31e565a5f0d23d0a0a3dd3ec8f4b17"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a2c31e565a5f0d23d0a0a3dd3ec8f4b17">&#9670;&#160;</a></span>domain</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned short hwloc_obj_attr_u::hwloc_bridge_attr_s::domain</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Domain number the downstream PCI buses. Only 16bits PCI domains are supported by default. </p>

</div>
</div>
<a id="abe1e38eb5ac8dc59829c8dc045f0d747" name="abe1e38eb5ac8dc59829c8dc045f0d747"></a>
<h2 class="memtitle"><span class="permalink"><a href="#abe1e38eb5ac8dc59829c8dc045f0d747">&#9670;&#160;</a></span>[union]</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">union  { ... }  hwloc_obj_attr_u::hwloc_bridge_attr_s::downstream</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="ac6a169b672d0e9f75756fd5665828b93" name="ac6a169b672d0e9f75756fd5665828b93"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac6a169b672d0e9f75756fd5665828b93">&#9670;&#160;</a></span>downstream_type</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00140.php#gab34362c7a23296c3f12c5756747abda3">hwloc_obj_bridge_type_t</a> hwloc_obj_attr_u::hwloc_bridge_attr_s::downstream_type</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Downstream Bridge type. </p>

</div>
</div>
<a id="ab5c564e7c95b747dae9eb84ec0a2c31e" name="ab5c564e7c95b747dae9eb84ec0a2c31e"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab5c564e7c95b747dae9eb84ec0a2c31e">&#9670;&#160;</a></span>pci <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00220.php">hwloc_pcidev_attr_s</a> hwloc_obj_attr_u::hwloc_bridge_attr_s::pci</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>PCI attribute of the upstream part as a PCI device. </p>

</div>
</div>
<a id="ac83cbe90209860113e54d86f90b71307" name="ac83cbe90209860113e54d86f90b71307"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ac83cbe90209860113e54d86f90b71307">&#9670;&#160;</a></span>[struct] <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct  { ... }  hwloc_obj_attr_u::hwloc_bridge_attr_s::pci</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="ae2d9dd73ef1d32045c584a8e66d2f83f" name="ae2d9dd73ef1d32045c584a8e66d2f83f"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae2d9dd73ef1d32045c584a8e66d2f83f">&#9670;&#160;</a></span>secondary_bus</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_obj_attr_u::hwloc_bridge_attr_s::secondary_bus</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>First PCI bus number below the bridge. </p>

</div>
</div>
<a id="af3f3f7d76bf03e8d2afa721c2b8d6771" name="af3f3f7d76bf03e8d2afa721c2b8d6771"></a>
<h2 class="memtitle"><span class="permalink"><a href="#af3f3f7d76bf03e8d2afa721c2b8d6771">&#9670;&#160;</a></span>subordinate_bus</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_obj_attr_u::hwloc_bridge_attr_s::subordinate_bus</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Highest PCI bus number below the bridge. </p>

</div>
</div>
<a id="a94647ccf58afd32602f584b47a0321ce" name="a94647ccf58afd32602f584b47a0321ce"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a94647ccf58afd32602f584b47a0321ce">&#9670;&#160;</a></span>[union]</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">union  { ... }  hwloc_obj_attr_u::hwloc_bridge_attr_s::upstream</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a id="a265dd2164aa2df4972e25a029da72125" name="a265dd2164aa2df4972e25a029da72125"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a265dd2164aa2df4972e25a029da72125">&#9670;&#160;</a></span>upstream_type</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00140.php#gab34362c7a23296c3f12c5756747abda3">hwloc_obj_bridge_type_t</a> hwloc_obj_attr_u::hwloc_bridge_attr_s::upstream_type</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Upstream Bridge type. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00071_source.php">hwloc.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
