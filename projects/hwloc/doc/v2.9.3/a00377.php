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
<!-- Generated by Doxygen 1.9.4 -->
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
<div><div class="header">
  <div class="headertitle"><div class="title">Netloc with Scotch </div></div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p > 
<div class="section">
</p>
<p >Scotch is a toolbox for graph partitioning [XXX], that can do mapping between a communication graph and an architecture. Netloc interfaces with Scotch, by getting the topology of the machine and building the Scotch architecture. It is also possible to directly build a mapping file that can be given to <code>mpirun</code>.</p>
<p > 
</div><div class="section" id="scotch_intro">
 </p>
<h1><a class="anchor" id="scotch_intro"></a>
Introduction</h1>
<p >Scotch is able to deal architectures to represent the topology of a complete machine. Scotch handles several types of topologies: complete graphs, hypercubes, fat trees, meshes, torus, and random graphs. Moreover, Scotch is able to manage parts of architectures that are called sub-architectures. Thus, from a complete architecture, we can create a sub-architecture that will represent the available resources of the complete machine.</p>
<p > 
</div><div class="section" id="scotch_setup">
 </p>
<h1><a class="anchor" id="scotch_setup"></a>
Setup</h1>
<p >The first step in order to use Netloc tools is to discover the network. For this task, we provide tools called netloc_gather that are wrappers to the dedicated tools provided by the manufacturer of the network, that generate the raw data given by the devices. This task needs privileges to access to the network devices. Once, this task is completed, the raw data is converted in a generic format independent to the fabric by extract_dats. Figure 1 shows how the different modules of Netloc are linked, and what are the tools provided by Netloc.</p>
<p > 
</div><div class="section" id="scotch_tools_api">
 </p>
<h1><a class="anchor" id="scotch_tools_api"></a>
Tools and API</h1>
<p >When the machine is discovered and all the needed files are generated as seen previously, a user can call the netlocscotch functions from the API and interact with Scotch.</p>
<h2><a class="anchor" id="netlocscotch_arch"></a>
Build Scotch architectures</h2>
<p >Netloc provides a function to export the built topology into the Scotch format. That will give the possibility to the user to play with the topology in Scotch. Since Netloc matches the discovered topology with known topologies, the Scotch architecture won’t be random graphs but known topologies also in Scotch that will lead to optimized graph algorithms. This function is called netlocscotch_build_arch.</p>
<p >When the network topology is a tree, the topology converted by netlocscotch is the complete topology of the machine containing intranode topologies from hwloc. In this case, merging the two levels results in a bigger tree. For other network topologies, the global graph created for Scotch is a generic graph since it is not (at this moment) possible to create nested known architectures.</p>
<h2><a class="anchor" id="netlocscotch_subarch"></a>
Build Scotch sub-architectures</h2>
<p >Most of the time, the user does not have access to the complete machine. He uses a resource manager to run his application and he will gain access only to a set of nodes. In this case getting the Scotch architecture of the complete machine is not relevant. Fortunately, Netloc is also able to build a Scotch sub-architecture that will contain only the available nodes. For this operation the user needs to run a specific program, netloc_get_resources, that will record in a file, the lists of available nodes and available cores by using MPI and hwloc. From this file, the function netlocscotch_build_subarch will build the Scotch sub-architecture.</p>
<h2><a class="anchor" id="netlocscotch_mapping"></a>
Mapping of processes</h2>
<p >A main goal in having all these data about the network topology, especially in Scotch structures, is to help the process placement. For that, we use the mapping of a process graph to the architecture provided by Scotch. As we have seen previously, Netloc is able to detect the structure of the topology and will build the adapted Scotch architecture that will be more efficient than a random structure.</p>
<p >In case, the network topology is not a tree, netlocscotch converts the complete topology into a generic graph. The drawback in that is the Scotch graph algorithms are less efficient. To overcome that, netlocscotch does two steps of mapping: first it maps the processes to the nodes, and then for each node maps the processes to the cores. We have to conduct tests to check if the method gives better results than using a generic graph directly.</p>
<p >The other input needed in Scotch is the process graph. Since we want to optimize the placement to decrease the communication time, a good metric for building the application graph is the amount of communications between all pairs of processes. Studies still have to be done to choose, in the most efficient way, what we take into account to define the amount of communications between the number of messages, the size of messages... This information will be transformed into a process graph.</p>
<p >Once we have a good mapping computed by Scotch, we can give it to the user, or Netloc can even generate the corresponding rank file useful to MPI. </p>
</div></div><!-- contents -->
</div><!-- PageDoc -->
<?php
include_once("$topdir/includes/footer.inc");
