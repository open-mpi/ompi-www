<?
$subject_val = "Re: [OMPI devel] SM initialization race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 09:32:49 2008" -->
<!-- isoreceived="20080821133249" -->
<!-- sent="Thu, 21 Aug 2008 06:32:29 -0700" -->
<!-- isosent="20080821133229" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM initialization race condition" -->
<!-- id="CCC94F0E-53C7-4CD9-B02E-543CD6027F9B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="803D3CC9-C0E4-41E0-B69D-8D3B8EC180D9_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-21 09:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4597.php">Brian W. Barrett: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>In reply to:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4597.php">Brian W. Barrett: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Reply:</strong> <a href="4597.php">Brian W. Barrett: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Reply:</strong> <a href="4598.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Reply:</strong> <a href="4599.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IIRC, bzero is a gnu-ism.  We should probably use memset instead.
<br>
<p><p>On Aug 21, 2008, at 5:40 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use the feature defined by POSIX mmap where the area should be  
</span><br>
<span class="quotelev1">&gt; zero-filled when the file length is extended. What OS you're using  
</span><br>
<span class="quotelev1">&gt; when you see such problems ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just in case, here is a patch that set the beginning of the mmaped  
</span><br>
<span class="quotelev1">&gt; region to zero, in case this is not done automatically. As in most  
</span><br>
<span class="quotelev1">&gt; cases this is an unnecessary overhead, we should find the cases  
</span><br>
<span class="quotelev1">&gt; where we really need this, and possibly conditionally compile it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/common/sm/common_sm_mmap.c	(revision 19377)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/common/sm/common_sm_mmap.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -163,6 +163,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 /* initialize the segment - only the first process
</span><br>
<span class="quotelev1">&gt;                    to open the file */
</span><br>
<span class="quotelev1">&gt; +                bzero( map-&gt;data_addr, size );
</span><br>
<span class="quotelev1">&gt;                 mem_offset = map-&gt;data_addr - (unsigned char *)map- 
</span><br>
<span class="quotelev2">&gt; &gt;map_seg;
</span><br>
<span class="quotelev1">&gt;                 map-&gt;map_seg-&gt;seg_offset = mem_offset;
</span><br>
<span class="quotelev1">&gt;                 map-&gt;map_seg-&gt;seg_size = size - mem_offset;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 21, 2008, at 1:22 PM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been seeing an intermittent (once every 4 hours looping on a  
</span><br>
<span class="quotelev2">&gt;&gt; quick initialization program) segv with the following stack trace.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =&gt;[1] mca_btl_sm_add_procs(btl = 0xfffffd7ffdb67ef0, nprocs = 2U,  
</span><br>
<span class="quotelev2">&gt;&gt; procs = 0x591560, peers = 0x591580, reachability =  
</span><br>
<span class="quotelev2">&gt;&gt; 0xfffffd7fffdff000), line 519 in &quot;btl_sm.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [2] mca_bml_r2_add_procs(nprocs = 2U, procs = 0x591560,  
</span><br>
<span class="quotelev2">&gt;&gt; bml_endpoints = 0x591500, reachable = 0xfffffd7fffdff000), line 222  
</span><br>
<span class="quotelev2">&gt;&gt; in &quot;bml_r2.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [3] mca_pml_ob1_add_procs(procs = 0x5914c0, nprocs = 2U), line 248  
</span><br>
<span class="quotelev2">&gt;&gt; in &quot;pml_ob1.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [4] ompi_mpi_init(argc = 1, argv = 0xfffffd7fffdff318, requested =  
</span><br>
<span class="quotelev2">&gt;&gt; 0, provided = 0xfffffd7fffdff234), line 651 in &quot;ompi_mpi_init.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [5] PMPI_Init(argc = 0xfffffd7fffdff2ec, argv =  
</span><br>
<span class="quotelev2">&gt;&gt; 0xfffffd7fffdff2e0), line 90 in &quot;pinit.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [6] main(argc = 1, argv = 0xfffffd7fffdff318), line 82 in &quot;buffer.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe the problem is that mca_btl_sm_component.shm_fifo[j]  
</span><br>
<span class="quotelev2">&gt;&gt; contains uninitialized data causes the loop on line 504 in btl_sm.c  
</span><br>
<span class="quotelev2">&gt;&gt; to think that a remote rank has set its fifo address.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone else seen the above happening?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4597.php">Brian W. Barrett: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>In reply to:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4597.php">Brian W. Barrett: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Reply:</strong> <a href="4597.php">Brian W. Barrett: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Reply:</strong> <a href="4598.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Reply:</strong> <a href="4599.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
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
