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
<a href="#nested-classes">Data Structures</a> &#124;
<a href="#typedef-members">Typedefs</a>  </div>
  <div class="headertitle"><div class="title">Object Structure and Attributes</div></div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="nested-classes" name="nested-classes"></a>
Data Structures</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00196.php">hwloc_obj</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">union &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00200.php">hwloc_obj_attr_u</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">struct &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00244.php">hwloc_info_s</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a id="typedef-members" name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:ga79b8ab56877ef99ac59b833203391c7d" id="r_ga79b8ab56877ef99ac59b833203391c7d"><td class="memItemLeft" align="right" valign="top">typedef struct <a class="el" href="a00196.php">hwloc_obj</a> *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a></td></tr>
<tr class="separator:ga79b8ab56877ef99ac59b833203391c7d"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<h2 class="groupheader">Typedef Documentation</h2>
<a id="ga79b8ab56877ef99ac59b833203391c7d" name="ga79b8ab56877ef99ac59b833203391c7d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ga79b8ab56877ef99ac59b833203391c7d">&#9670;&#160;</a></span>hwloc_obj_t</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">typedef struct <a class="el" href="a00196.php">hwloc_obj</a>* <a class="el" href="a00141.php#ga79b8ab56877ef99ac59b833203391c7d">hwloc_obj_t</a></td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Convenience typedef; a pointer to a struct <a class="el" href="a00196.php" title="Structure of a topology object.">hwloc_obj</a>. </p>

</div>
</div>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
