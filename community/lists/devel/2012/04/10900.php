<?
$subject_val = "Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 22 08:08:42 2012" -->
<!-- isoreceived="20120422120842" -->
<!-- sent="Sun, 22 Apr 2012 06:08:35 -0600" -->
<!-- isosent="20120422120835" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks" -->
<!-- id="1335096515.522.17.camel_at_devhost.localdomain" -->
<!-- charset="utf-8" -->
<!-- inreplyto="53B4921E-FD9F-470E-8848-8FD3A8086D6A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: removing maffinity, paffinity, carto frameworks<br>
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-22 08:08:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10901.php">Eugene Loh: "[OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Previous message:</strong> <a href="10899.php">Eugene Loh: "[OMPI devel] configure check for Fortran and threads"</a>
<li><strong>In reply to:</strong> <a href="10898.php">Jeffrey Squyres: "[OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good start!  Looking forward to interactions between hwloc and
<br>
MPI_Graph_dist (and extending /extending these down to device IO,
<br>
memories and processors on the PCIe bus), does anyone envision
<br>
completeness of this intersection within MPI (esp. OpenMPI) to the
<br>
computational network graph structure?  Currently, this info is a
<br>
hodge-podge between the kernel(s), device queries, and lookups (ugh).
<br>
<p>On Sat, 2012-04-21 at 08:13 -0400, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Remove 3 outdated frameworks: maffinity, paffinity, carto
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: Their functionality is wholly replaced by hwloc.  Removing these frameworks has actually been a to-do item since we made hwloc a 1st-class citizen in OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: rm -rf opal/mca/[maffinity, paffinity, carto], and update various places around the tree that use these frameworks to use hwloc instead
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Tuesday teleconference, 1 May 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The maffinity (memory affinity), paffinity (processor affinity), and carto (cartography) frameworks are now outdated.  All of their functionality (and much more) can be effected with hwloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, all three frameworks had significant limitations in one way or another -- hwloc is a much more general solution to all three (no more needing to specify carto files -- woo hoo!).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that this officially opens the door for more hwloc usage within Open MPI.  The opal_hwloc_topology global variable will filled in after orte_init() completes (which is pretty early in ompi_mpi_init()).  There's also a bunch of hwloc helper functions in opal/mca/hwloc/base/base.h (e.g., use opal_hwloc_base_get_level_and_index() to get a simple enum back indicating the locality of where this process has been bound).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===================================
</span><br>
<span class="quotelev1">&gt; ==&gt;&gt; Let the hwlocness begin!! &lt;&lt;==
</span><br>
<span class="quotelev1">&gt; ===================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph and I have a bitbucket where we have removed all 3 of these frameworks:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://bitbucket.org/jsquyres/ompi-remove-paff-maff">https://bitbucket.org/jsquyres/ompi-remove-paff-maff</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Notable items that came out of the implementation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The sm BTL used to (potentially) make multiple mpools if a carto file was supplied.  It now only makes 1 mpool.  However, based on UTK's Euro MPI 2010 paper, the optimization of creating multiple mpools based on NUMA information may be re-added in the future.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Ditto for the smcuda BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Nathan tells me that he's going to do the same for the vader BTL; I have therefore not done so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The openib BTL will shortly have its use of carto (to find nearby IBV devices) re-implemented using hwloc distances.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Ditto for wv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The &quot;affinity&quot; mpiext was effectively completely re-implemented.  It now shows hyperthread information, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - New ORTE-level global variables:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - orte_proc_is_bound: a boolean that is set after orte_init that indicates whether this process is bound or not (regardless of who bound the process).
</span><br>
<span class="quotelev1">&gt;  - orte_proc_applied_binding: if OMPI bound this process, this hwloc_cpuset_t will contain the *physical* PUs where it was bound
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** IMPORTANT hwloc CONSIDERATIONS TO REMEMBER (because getting this wrong screwed us up more than once):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The cpusets hanging off hwloc objects represent PHYSICAL indices
</span><br>
<span class="quotelev1">&gt; - The objects in the hwloc tree are in LOGICAL order
</span><br>
<span class="quotelev1">&gt; ==&gt;&gt; BE SURE TO USE obj-&gt;physical_index OR obj-&gt;logical_index AS APPROPRIATE!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>==============
<br>
Kenneth A. Lloyd, Jr.
<br>
CEO - Director of Systems Science
<br>
Watt Systems Technologies Inc.
<br>
Albuquerque, NM US
<br>
<p>This e-mail is covered by the Electronic Communications Privacy Act, 18
<br>
U.S.C. 2510-2521 and is intended only for the addressee named above. It
<br>
may contain privileged or confidential information. If you are not the
<br>
addressee you must not copy, distribute, disclose or use any of the
<br>
information in it. If you have received it in error please delete it and
<br>
immediately notify the sender.
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10900/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10901.php">Eugene Loh: "[OMPI devel] Fortran linking problem: libraries have changed"</a>
<li><strong>Previous message:</strong> <a href="10899.php">Eugene Loh: "[OMPI devel] configure check for Fortran and threads"</a>
<li><strong>In reply to:</strong> <a href="10898.php">Jeffrey Squyres: "[OMPI devel] RFC: removing maffinity, paffinity, carto frameworks"</a>
<!-- nextthread="start" -->
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
