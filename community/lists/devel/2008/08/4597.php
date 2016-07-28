<?
$subject_val = "Re: [OMPI devel] SM initialization race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 09:36:19 2008" -->
<!-- isoreceived="20080821133619" -->
<!-- sent="Thu, 21 Aug 2008 09:36:11 -0400 (EDT)" -->
<!-- isosent="20080821133611" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM initialization race condition" -->
<!-- id="alpine.DEB.1.10.0808210934430.1991_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CCC94F0E-53C7-4CD9-B02E-543CD6027F9B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM initialization race condition<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-21 09:36:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4598.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>In reply to:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4598.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bzero is not a gnu-ism -- it's in POSIX.1.  Either bzero or memset is 
<br>
correct and used throughout OMPI.
<br>
<p>Brian
<br>
<p>On Thu, 21 Aug 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; IIRC, bzero is a gnu-ism.  We should probably use memset instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2008, at 5:40 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We use the feature defined by POSIX mmap where the area should be 
</span><br>
<span class="quotelev2">&gt;&gt; zero-filled when the file length is extended. What OS you're using when you 
</span><br>
<span class="quotelev2">&gt;&gt; see such problems ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Just in case, here is a patch that set the beginning of the mmaped region 
</span><br>
<span class="quotelev2">&gt;&gt; to zero, in case this is not done automatically. As in most cases this is 
</span><br>
<span class="quotelev2">&gt;&gt; an unnecessary overhead, we should find the cases where we really need 
</span><br>
<span class="quotelev2">&gt;&gt; this, and possibly conditionally compile it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/common/sm/common_sm_mmap.c	(revision 19377)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/common/sm/common_sm_mmap.c	(working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -163,6 +163,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                /* initialize the segment - only the first process
</span><br>
<span class="quotelev2">&gt;&gt;                   to open the file */
</span><br>
<span class="quotelev2">&gt;&gt; +                bzero( map-&gt;data_addr, size );
</span><br>
<span class="quotelev2">&gt;&gt;                mem_offset = map-&gt;data_addr - (unsigned char *)map-&gt;map_seg;
</span><br>
<span class="quotelev2">&gt;&gt;                map-&gt;map_seg-&gt;seg_offset = mem_offset;
</span><br>
<span class="quotelev2">&gt;&gt;                map-&gt;map_seg-&gt;seg_size = size - mem_offset;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 21, 2008, at 1:22 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been seeing an intermittent (once every 4 hours looping on a quick 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initialization program) segv with the following stack trace.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =&gt;[1] mca_btl_sm_add_procs(btl = 0xfffffd7ffdb67ef0, nprocs = 2U, procs = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x591560, peers = 0x591580, reachability = 0xfffffd7fffdff000), line 519 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in &quot;btl_sm.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2] mca_bml_r2_add_procs(nprocs = 2U, procs = 0x591560, bml_endpoints = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x591500, reachable = 0xfffffd7fffdff000), line 222 in &quot;bml_r2.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3] mca_pml_ob1_add_procs(procs = 0x5914c0, nprocs = 2U), line 248 in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;pml_ob1.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4] ompi_mpi_init(argc = 1, argv = 0xfffffd7fffdff318, requested = 0, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provided = 0xfffffd7fffdff234), line 651 in &quot;ompi_mpi_init.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [5] PMPI_Init(argc = 0xfffffd7fffdff2ec, argv = 0xfffffd7fffdff2e0), line 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 90 in &quot;pinit.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [6] main(argc = 1, argv = 0xfffffd7fffdff318), line 82 in &quot;buffer.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe the problem is that mca_btl_sm_component.shm_fifo[j] contains 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uninitialized data causes the loop on line 504 in btl_sm.c to think that a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remote rank has set its fifo address.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone else seen the above happening?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4598.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>In reply to:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4598.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
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
