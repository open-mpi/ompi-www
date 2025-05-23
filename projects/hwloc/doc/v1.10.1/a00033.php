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
<!-- Generated by Doxygen 1.8.8 -->
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
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-attribs">Data Fields</a>  </div>
  <div class="headertitle">
<div class="title">hwloc_disc_component Struct Reference<div class="ingroups"><a class="el" href="a00098.php">Components and Plugins: Discovery components</a></div></div>  </div>
</div><!--header-->
<div class="contents">

<p><code>#include &lt;<a class="el" href="a00071_source.php">plugins.h</a>&gt;</code></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-attribs"></a>
Data Fields</h2></td></tr>
<tr class="memitem:ad070350354cbd665803fc86fe48cdb3d"><td class="memItemLeft" align="right" valign="top"><a class="el" href="a00098.php#ga5c6112c1a7497e5f481b9634059d47b1">hwloc_disc_component_type_t</a>&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00033.php#ad070350354cbd665803fc86fe48cdb3d">type</a></td></tr>
<tr class="separator:ad070350354cbd665803fc86fe48cdb3d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4064c3b5d9213027e87caebef380a840"><td class="memItemLeft" align="right" valign="top">const char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00033.php#a4064c3b5d9213027e87caebef380a840">name</a></td></tr>
<tr class="separator:a4064c3b5d9213027e87caebef380a840"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a34144f4d59bf46524e4875194652412b"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00033.php#a34144f4d59bf46524e4875194652412b">excludes</a></td></tr>
<tr class="separator:a34144f4d59bf46524e4875194652412b"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad724ca2e525851042a70cab48481d048"><td class="memItemLeft" align="right" valign="top">struct <a class="el" href="a00029.php">hwloc_backend</a> *(*&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00033.php#ad724ca2e525851042a70cab48481d048">instantiate</a> )(struct <a class="el" href="a00033.php">hwloc_disc_component</a> *component, const void *data1, const void *data2, const void *data3)</td></tr>
<tr class="separator:ad724ca2e525851042a70cab48481d048"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae86d283c272c5ae24073a235efbf6b59"><td class="memItemLeft" align="right" valign="top">unsigned&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="a00033.php#ae86d283c272c5ae24073a235efbf6b59">priority</a></td></tr>
<tr class="separator:ae86d283c272c5ae24073a235efbf6b59"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Discovery component structure. </p>
<p>This is the major kind of components, taking care of the discovery. They are registered by generic components, either statically-built or as plugins. </p>
</div><h2 class="groupheader">Field Documentation</h2>
<a class="anchor" id="a34144f4d59bf46524e4875194652412b"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_disc_component::excludes</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Component types to exclude, as an OR'ed set of HWLOC_DISC_COMPONENT_TYPE_*. </p>
<p>For a GLOBAL component, this usually includes all other types (~0).</p>
<p>Other components only exclude types that may bring conflicting topology information. MISC components should likely not be excluded since they usually bring non-primary additional information. </p>

</div>
</div>
<a class="anchor" id="ad724ca2e525851042a70cab48481d048"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">struct <a class="el" href="a00029.php">hwloc_backend</a>*(* hwloc_disc_component::instantiate)(struct <a class="el" href="a00033.php">hwloc_disc_component</a> *component, const void *data1, const void *data2, const void *data3)</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Instantiate callback to create a backend from the component. Parameters data1, data2, data3 are NULL except for components that have special enabling routines such as <a class="el" href="a00077.php#ga879439b7ee99407ee911b3ac64e9a25e" title="Enable XML-file based topology. ">hwloc_topology_set_xml()</a>. </p>

</div>
</div>
<a class="anchor" id="a4064c3b5d9213027e87caebef380a840"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">const char* hwloc_disc_component::name</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Name. If this component is built as a plugin, this name does not have to match the plugin filename. </p>

</div>
</div>
<a class="anchor" id="ae86d283c272c5ae24073a235efbf6b59"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">unsigned hwloc_disc_component::priority</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Component priority. Used to sort topology-&gt;components, higher priority first. Also used to decide between two components with the same name. </p>
<p>Usual values are 50 for native OS (or platform) components, 45 for x86, 40 for no-OS fallback, 30 for global components (xml/synthetic/custom), 20 for pci, 10 for other misc components (opencl etc.). </p>

</div>
</div>
<a class="anchor" id="ad070350354cbd665803fc86fe48cdb3d"></a>
<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="a00098.php#ga5c6112c1a7497e5f481b9634059d47b1">hwloc_disc_component_type_t</a> hwloc_disc_component::type</td>
        </tr>
      </table>
</div><div class="memdoc">

<p>Discovery component type. </p>

</div>
</div>
<hr/>The documentation for this struct was generated from the following file:<ul>
<li><a class="el" href="a00071_source.php">plugins.h</a></li>
</ul>
</div><!-- contents -->
<?php
include_once("$topdir/includes/footer.inc");
