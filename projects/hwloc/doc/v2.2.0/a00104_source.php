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
<!-- Generated by Doxygen 1.8.17 -->
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(function() {
  initMenu('',false,false,'search.php','Search');
});
/* @license-end */</script>
<div id="main-nav"></div>
<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_d44c64559bbebec7f509842c48db8b23.php">include</a></li><li class="navelem"><a class="el" href="dir_5cb306d949c7931a3b6c77517393dd34.php">hwloc</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">linux.h</div>  </div>
</div><!--header-->
<div class="contents">
<div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">/*</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment"> * Copyright © 2009 CNRS</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment"> * Copyright © 2009-2016 Inria.  All rights reserved.</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment"> * Copyright © 2009-2011 Université Bordeaux</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment"> * See COPYING in top-level directory.</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment"> */</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160; </div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;<span class="preprocessor">#ifndef HWLOC_LINUX_H</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#define HWLOC_LINUX_H</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160; </div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor">#include &quot;hwloc.h&quot;</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160; </div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="preprocessor">#include &lt;stdio.h&gt;</span></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160; </div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160; </div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="keyword">extern</span> <span class="stringliteral">&quot;C&quot;</span> {</div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160; </div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160; </div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span> <a class="code" href="a00172.php#ga630e699c56b5f3d2e534b475944c216e">hwloc_linux_set_tid_cpubind</a>(<a class="code" href="a00147.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, pid_t tid, <a class="code" href="a00144.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a> set);</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160; </div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span> <a class="code" href="a00172.php#gaddcb985cb56337a4d6693cee72e7bf94">hwloc_linux_get_tid_cpubind</a>(<a class="code" href="a00147.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, pid_t tid, <a class="code" href="a00144.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a> set);</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160; </div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span> <a class="code" href="a00172.php#gacc7945c2d06c6db1e58f8fd953009134">hwloc_linux_get_tid_last_cpu_location</a>(<a class="code" href="a00147.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a> topology, pid_t tid, <a class="code" href="a00166.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> set);</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160; </div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;HWLOC_DECLSPEC <span class="keywordtype">int</span> <a class="code" href="a00172.php#gaf72d83e273803226ce772973e37b85de">hwloc_linux_read_path_as_cpumask</a>(<span class="keyword">const</span> <span class="keywordtype">char</span> *path, <a class="code" href="a00166.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a> set);</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160; </div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;<span class="preprocessor">#ifdef __cplusplus</span></div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;} <span class="comment">/* extern &quot;C&quot; */</span></div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;<span class="preprocessor">#endif</span></div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160; </div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160; </div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;<span class="preprocessor">#endif </span><span class="comment">/* HWLOC_LINUX_H */</span><span class="preprocessor"></span></div>
</div><!-- fragment --></div><!-- contents -->
<div class="ttc" id="aa00144_php_ga1f784433e9b606261f62d1134f6a3b25"><div class="ttname"><a href="a00144.php#ga1f784433e9b606261f62d1134f6a3b25">hwloc_const_cpuset_t</a></div><div class="ttdeci">hwloc_const_bitmap_t hwloc_const_cpuset_t</div><div class="ttdoc">A non-modifiable hwloc_cpuset_t.</div><div class="ttdef"><b>Definition:</b> hwloc.h:142</div></div>
<div class="ttc" id="aa00147_php_ga9d1e76ee15a7dee158b786c30b6a6e38"><div class="ttname"><a href="a00147.php#ga9d1e76ee15a7dee158b786c30b6a6e38">hwloc_topology_t</a></div><div class="ttdeci">struct hwloc_topology * hwloc_topology_t</div><div class="ttdoc">Topology context.</div><div class="ttdef"><b>Definition:</b> hwloc.h:678</div></div>
<div class="ttc" id="aa00144_php_ga4bbf39b68b6f568fb92739e7c0ea7801"><div class="ttname"><a href="a00144.php#ga4bbf39b68b6f568fb92739e7c0ea7801">hwloc_cpuset_t</a></div><div class="ttdeci">hwloc_bitmap_t hwloc_cpuset_t</div><div class="ttdoc">A CPU set is a bitmap whose bits are set according to CPU physical OS indexes.</div><div class="ttdef"><b>Definition:</b> hwloc.h:140</div></div>
<div class="ttc" id="aa00172_php_gaf72d83e273803226ce772973e37b85de"><div class="ttname"><a href="a00172.php#gaf72d83e273803226ce772973e37b85de">hwloc_linux_read_path_as_cpumask</a></div><div class="ttdeci">int hwloc_linux_read_path_as_cpumask(const char *path, hwloc_bitmap_t set)</div><div class="ttdoc">Convert a linux kernel cpumask file path into a hwloc bitmap set.</div></div>
<div class="ttc" id="aa00166_php_gaa3c2bf4c776d603dcebbb61b0c923d84"><div class="ttname"><a href="a00166.php#gaa3c2bf4c776d603dcebbb61b0c923d84">hwloc_bitmap_t</a></div><div class="ttdeci">struct hwloc_bitmap_s * hwloc_bitmap_t</div><div class="ttdoc">Set of bits represented as an opaque pointer to an internal bitmap.</div><div class="ttdef"><b>Definition:</b> bitmap.h:68</div></div>
<div class="ttc" id="aa00172_php_ga630e699c56b5f3d2e534b475944c216e"><div class="ttname"><a href="a00172.php#ga630e699c56b5f3d2e534b475944c216e">hwloc_linux_set_tid_cpubind</a></div><div class="ttdeci">int hwloc_linux_set_tid_cpubind(hwloc_topology_t topology, pid_t tid, hwloc_const_cpuset_t set)</div><div class="ttdoc">Bind a thread tid on cpus given in cpuset set.</div></div>
<div class="ttc" id="aa00172_php_gaddcb985cb56337a4d6693cee72e7bf94"><div class="ttname"><a href="a00172.php#gaddcb985cb56337a4d6693cee72e7bf94">hwloc_linux_get_tid_cpubind</a></div><div class="ttdeci">int hwloc_linux_get_tid_cpubind(hwloc_topology_t topology, pid_t tid, hwloc_cpuset_t set)</div><div class="ttdoc">Get the current binding of thread tid.</div></div>
<div class="ttc" id="aa00172_php_gacc7945c2d06c6db1e58f8fd953009134"><div class="ttname"><a href="a00172.php#gacc7945c2d06c6db1e58f8fd953009134">hwloc_linux_get_tid_last_cpu_location</a></div><div class="ttdeci">int hwloc_linux_get_tid_last_cpu_location(hwloc_topology_t topology, pid_t tid, hwloc_bitmap_t set)</div><div class="ttdoc">Get the last physical CPU where thread tid ran.</div></div>
<?php
include_once("$topdir/includes/footer.inc");
