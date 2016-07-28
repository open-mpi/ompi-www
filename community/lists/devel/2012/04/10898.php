<?
$subject_val = "[OMPI devel] RFC: removing maffinity, paffinity, carto frameworks";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 08:13:16 2012" -->
<!-- isoreceived="20120421121316" -->
<!-- sent="Sat, 21 Apr 2012 08:13:11 -0400" -->
<!-- isosent="20120421121311" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: removing maffinity, paffinity, carto frameworks" -->
<!-- id="53B4921E-FD9F-470E-8848-8FD3A8086D6A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 08:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10899.php">Eugene Loh: "[OMPI devel] configure check for Fortran and threads"</a>
<li><strong>Previous message:</strong> <a href="10897.php">Jeffrey Squyres: "Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10900.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<li><strong>Reply:</strong> <a href="10900.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove 3 outdated frameworks: maffinity, paffinity, carto
<br>
<p>WHY: Their functionality is wholly replaced by hwloc.  Removing these frameworks has actually been a to-do item since we made hwloc a 1st-class citizen in OMPI.
<br>
<p>WHERE: rm -rf opal/mca/[maffinity, paffinity, carto], and update various places around the tree that use these frameworks to use hwloc instead
<br>
<p>TIMEOUT: Tuesday teleconference, 1 May 2012
<br>
<p>-----
<br>
<p>More details:
<br>
<p>The maffinity (memory affinity), paffinity (processor affinity), and carto (cartography) frameworks are now outdated.  All of their functionality (and much more) can be effected with hwloc.
<br>
<p>Indeed, all three frameworks had significant limitations in one way or another -- hwloc is a much more general solution to all three (no more needing to specify carto files -- woo hoo!).
<br>
<p>Note that this officially opens the door for more hwloc usage within Open MPI.  The opal_hwloc_topology global variable will filled in after orte_init() completes (which is pretty early in ompi_mpi_init()).  There's also a bunch of hwloc helper functions in opal/mca/hwloc/base/base.h (e.g., use opal_hwloc_base_get_level_and_index() to get a simple enum back indicating the locality of where this process has been bound).  
<br>
<p>===================================
<br>
==&gt;&gt; Let the hwlocness begin!! &lt;&lt;==
<br>
===================================
<br>
<p>Ralph and I have a bitbucket where we have removed all 3 of these frameworks:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/ompi-remove-paff-maff">https://bitbucket.org/jsquyres/ompi-remove-paff-maff</a>
<br>
<p>*** Notable items that came out of the implementation:
<br>
<p>- The sm BTL used to (potentially) make multiple mpools if a carto file was supplied.  It now only makes 1 mpool.  However, based on UTK's Euro MPI 2010 paper, the optimization of creating multiple mpools based on NUMA information may be re-added in the future.
<br>
<p>- Ditto for the smcuda BTL.
<br>
<p>- Nathan tells me that he's going to do the same for the vader BTL; I have therefore not done so.
<br>
<p>- The openib BTL will shortly have its use of carto (to find nearby IBV devices) re-implemented using hwloc distances.
<br>
<p>- Ditto for wv.
<br>
<p>- The &quot;affinity&quot; mpiext was effectively completely re-implemented.  It now shows hyperthread information, too.
<br>
<p>- New ORTE-level global variables:
<br>
<p>&nbsp;- orte_proc_is_bound: a boolean that is set after orte_init that indicates whether this process is bound or not (regardless of who bound the process).
<br>
&nbsp;- orte_proc_applied_binding: if OMPI bound this process, this hwloc_cpuset_t will contain the *physical* PUs where it was bound
<br>
<p>*** IMPORTANT hwloc CONSIDERATIONS TO REMEMBER (because getting this wrong screwed us up more than once):
<br>
<p>- The cpusets hanging off hwloc objects represent PHYSICAL indices
<br>
- The objects in the hwloc tree are in LOGICAL order
<br>
==&gt;&gt; BE SURE TO USE obj-&gt;physical_index OR obj-&gt;logical_index AS APPROPRIATE!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10899.php">Eugene Loh: "[OMPI devel] configure check for Fortran and threads"</a>
<li><strong>Previous message:</strong> <a href="10897.php">Jeffrey Squyres: "Re: [OMPI devel] testing if Fortran compiler likes the C++ exception flags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10900.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<li><strong>Reply:</strong> <a href="10900.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
