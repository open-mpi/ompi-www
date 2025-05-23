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
<!-- Generated by Doxygen 1.8.4 -->
  <div id="navrow1" class="tabs">
    <ul class="tablist">
      <li><a href="index.php"><span>Main&#160;Page</span></a></li>
      <li><a href="pages.php"><span>Related&#160;Pages</span></a></li>
      <li><a href="modules.php"><span>Modules</span></a></li>
      <li class="current"><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
    </ul>
  </div>
  <div id="navrow2" class="tabs2">
    <ul class="tablist">
      <li><a href="annotated.php"><span>Data&#160;Structures</span></a></li>
      <li><a href="functions.php"><span>Data&#160;Fields</span></a></li>
    </ul>
  </div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="a00023.php">hwloc_obj_attr_u</a></li><li class="navelem"><a class="el" href="a00028.php">hwloc_pcidev_attr_s</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_obj_attr_u::hwloc_pcidev_attr_s Struct Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00040_source.php">hwloc.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:a8fba44988deb98613c1505a4019a34dc"><td class="memItemLeft" align="right" valign="top">unsigned short&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#a8fba44988deb98613c1505a4019a34dc">domain</a></td></tr>
<tr class="separator:a8fba44988deb98613c1505a4019a34dc"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aae99e035e8d1387d7b8768aaa8eceb0a"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#aae99e035e8d1387d7b8768aaa8eceb0a">bus</a></td></tr>
<tr class="separator:aae99e035e8d1387d7b8768aaa8eceb0a"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3d70c84a12f7e93d14c8d47bf4fd9dc5"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#a3d70c84a12f7e93d14c8d47bf4fd9dc5">dev</a></td></tr>
<tr class="separator:a3d70c84a12f7e93d14c8d47bf4fd9dc5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a695f32df53f4ef728670bfcf31b74e0f"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#a695f32df53f4ef728670bfcf31b74e0f">func</a></td></tr>
<tr class="separator:a695f32df53f4ef728670bfcf31b74e0f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aee735352d9f1686fd290fc6d6397c334"><td class="memItemLeft" align="right" valign="top">unsigned short&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#aee735352d9f1686fd290fc6d6397c334">class_id</a></td></tr>
<tr class="separator:aee735352d9f1686fd290fc6d6397c334"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aad970ad19b62eb2d5df30e4802da4f4c"><td class="memItemLeft" align="right" valign="top">unsigned short&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#aad970ad19b62eb2d5df30e4802da4f4c">vendor_id</a></td></tr>
<tr class="separator:aad970ad19b62eb2d5df30e4802da4f4c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a35b66064ab7d768caf7154e410caf0fa"><td class="memItemLeft" align="right" valign="top">unsigned short&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#a35b66064ab7d768caf7154e410caf0fa">device_id</a></td></tr>
<tr class="separator:a35b66064ab7d768caf7154e410caf0fa"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a499db3d8cc89eaba04fcaef3df1cba97"><td class="memItemLeft" align="right" valign="top">unsigned short&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#a499db3d8cc89eaba04fcaef3df1cba97">subvendor_id</a></td></tr>
<tr class="separator:a499db3d8cc89eaba04fcaef3df1cba97"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:acac741aecd7a6db64f33409427e3971f"><td class="memItemLeft" align="right" valign="top">unsigned short&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#acac741aecd7a6db64f33409427e3971f">subdevice_id</a></td></tr>
<tr class="separator:acac741aecd7a6db64f33409427e3971f"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a13ad54c93d08d8ac808e4de9674c5ee7"><td class="memItemLeft" align="right" valign="top">unsigned char&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#a13ad54c93d08d8ac808e4de9674c5ee7">revision</a></td></tr>
<tr class="separator:a13ad54c93d08d8ac808e4de9674c5ee7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a59b2fce35f7cbde86c4fd305d0ccda5f"><td class="memItemLeft" align="right" valign="top">float&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00028.php#a59b2fce35f7cbde86c4fd305d0ccda5f">linkspeed</a></td></tr>
<tr class="separator:a59b2fce35f7cbde86c4fd305d0ccda5f"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>PCI Device specific Object Attributes. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="aae99e035e8d1387d7b8768aaa8eceb0a"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_obj_attr_u::hwloc_pcidev_attr_s::bus</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="aee735352d9f1686fd290fc6d6397c334"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned short hwloc_obj_attr_u::hwloc_pcidev_attr_s::class_id</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a3d70c84a12f7e93d14c8d47bf4fd9dc5"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_obj_attr_u::hwloc_pcidev_attr_s::dev</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a35b66064ab7d768caf7154e410caf0fa"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned short hwloc_obj_attr_u::hwloc_pcidev_attr_s::device_id</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a8fba44988deb98613c1505a4019a34dc"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned short hwloc_obj_attr_u::hwloc_pcidev_attr_s::domain</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a695f32df53f4ef728670bfcf31b74e0f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_obj_attr_u::hwloc_pcidev_attr_s::func</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a59b2fce35f7cbde86c4fd305d0ccda5f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">float hwloc_obj_attr_u::hwloc_pcidev_attr_s::linkspeed</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a13ad54c93d08d8ac808e4de9674c5ee7"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned char hwloc_obj_attr_u::hwloc_pcidev_attr_s::revision</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="acac741aecd7a6db64f33409427e3971f"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned short hwloc_obj_attr_u::hwloc_pcidev_attr_s::subdevice_id</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="a499db3d8cc89eaba04fcaef3df1cba97"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned short hwloc_obj_attr_u::hwloc_pcidev_attr_s::subvendor_id</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<a class="anchor" id="aad970ad19b62eb2d5df30e4802da4f4c"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned short hwloc_obj_attr_u::hwloc_pcidev_attr_s::vendor_id</td>
        </tr>
      </table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00040_source.php">hwloc.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
