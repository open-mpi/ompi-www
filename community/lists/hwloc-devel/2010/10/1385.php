<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2649";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 28 04:13:53 2010" -->
<!-- isoreceived="20101028081353" -->
<!-- sent="Thu, 28 Oct 2010 10:13:48 +0200" -->
<!-- isosent="20101028081348" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2649" -->
<!-- id="4CC930BC.9020409_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201010280809.o9S89ajD027740_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2649<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-28 04:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1386.php">Jeff Squyres: "Re: [hwloc-devel] merge membind and do 1.1rc1 ?"</a>
<li><strong>Previous message:</strong> <a href="1384.php">Brice Goglin: "[hwloc-devel] merge membind and do 1.1rc1 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1387.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2649"</a>
<li><strong>Maybe reply:</strong> <a href="1387.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2649"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This raises again a question that got no answer in previous emails.
<br>
Having NULL nodeset pointers in obj-&gt;*nodeset when the machine isn't
<br>
NUMA is annoying in many places. I think I will change to a full
<br>
nodeset instead. It will simplify many things.
<br>
<p>Brice
<br>
<p><p><p><p><p>Le 28/10/2010 10:09, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-10-28 04:09:35 EDT (Thu, 28 Oct 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2649
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2649">https://svn.open-mpi.org/trac/hwloc/changeset/2649</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix Linux get_thisthread_membind on non-numa machine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_topology_get*_nodeset return NULL there, so return a full nodeset instead
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    branches/membind/src/topology-linux.c |     6 +++++-                                  
</span><br>
<span class="quotelev1">&gt;    1 files changed, 5 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/membind/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/membind/src/topology-linux.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/membind/src/topology-linux.c	2010-10-28 04:09:35 EDT (Thu, 28 Oct 2010)
</span><br>
<span class="quotelev1">&gt; @@ -1057,7 +1057,11 @@
</span><br>
<span class="quotelev1">&gt;      goto out_with_mask;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    if (linuxpolicy == MPOL_DEFAULT) {
</span><br>
<span class="quotelev1">&gt; -    hwloc_bitmap_copy(nodeset, hwloc_topology_get_topology_nodeset(topology));
</span><br>
<span class="quotelev1">&gt; +    hwloc_const_nodeset_t topology_nodeset = hwloc_topology_get_topology_nodeset(topology);
</span><br>
<span class="quotelev1">&gt; +    if (topology_nodeset)
</span><br>
<span class="quotelev1">&gt; +      hwloc_bitmap_copy(nodeset, topology_nodeset);
</span><br>
<span class="quotelev1">&gt; +    else
</span><br>
<span class="quotelev1">&gt; +      hwloc_bitmap_fill(nodeset);
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;      hwloc_linux_membind_mask_to_nodeset(topology, nodeset, max_os_index, linuxmask);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1386.php">Jeff Squyres: "Re: [hwloc-devel] merge membind and do 1.1rc1 ?"</a>
<li><strong>Previous message:</strong> <a href="1384.php">Brice Goglin: "[hwloc-devel] merge membind and do 1.1rc1 ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1387.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2649"</a>
<li><strong>Maybe reply:</strong> <a href="1387.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2649"</a>
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
