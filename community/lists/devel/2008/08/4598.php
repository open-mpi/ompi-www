<?
$subject_val = "Re: [OMPI devel] SM initialization race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 09:38:24 2008" -->
<!-- isoreceived="20080821133824" -->
<!-- sent="Thu, 21 Aug 2008 15:38:11 +0200" -->
<!-- isosent="20080821133811" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM initialization race condition" -->
<!-- id="74755651-3F0E-402B-8CA4-E08075270EAE_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-21 09:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4599.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4597.php">Brian W. Barrett: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>In reply to:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4599.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bzero() function conforms to IEEE Std 1003.1-2001 (``POSIX.1'')
<br>
<p>memset() function conforms to ISO/IEC 9899:1990 (``ISO C90'')
<br>
<p>Both functions are in the libc, so it's definitively difficult to see  
<br>
which one is better.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 21, 2008, at 3:32 PM, Jeff Squyres wrote:
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
<span class="quotelev2">&gt;&gt; zero-filled when the file length is extended. What OS you're using  
</span><br>
<span class="quotelev2">&gt;&gt; when you see such problems ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just in case, here is a patch that set the beginning of the mmaped  
</span><br>
<span class="quotelev2">&gt;&gt; region to zero, in case this is not done automatically. As in most  
</span><br>
<span class="quotelev2">&gt;&gt; cases this is an unnecessary overhead, we should find the cases  
</span><br>
<span class="quotelev2">&gt;&gt; where we really need this, and possibly conditionally compile it.
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
<span class="quotelev2">&gt;&gt;                mem_offset = map-&gt;data_addr - (unsigned char *)map- 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;map_seg;
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
<span class="quotelev3">&gt;&gt;&gt; I've been seeing an intermittent (once every 4 hours looping on a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quick initialization program) segv with the following stack trace.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =&gt;[1] mca_btl_sm_add_procs(btl = 0xfffffd7ffdb67ef0, nprocs = 2U,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; procs = 0x591560, peers = 0x591580, reachability =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xfffffd7fffdff000), line 519 in &quot;btl_sm.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [2] mca_bml_r2_add_procs(nprocs = 2U, procs = 0x591560,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bml_endpoints = 0x591500, reachable = 0xfffffd7fffdff000), line  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 222 in &quot;bml_r2.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [3] mca_pml_ob1_add_procs(procs = 0x5914c0, nprocs = 2U), line 248  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in &quot;pml_ob1.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [4] ompi_mpi_init(argc = 1, argv = 0xfffffd7fffdff318, requested =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0, provided = 0xfffffd7fffdff234), line 651 in &quot;ompi_mpi_init.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [5] PMPI_Init(argc = 0xfffffd7fffdff2ec, argv =  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0xfffffd7fffdff2e0), line 90 in &quot;pinit.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [6] main(argc = 1, argv = 0xfffffd7fffdff318), line 82 in &quot;buffer.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe the problem is that mca_btl_sm_component.shm_fifo[j]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contains uninitialized data causes the loop on line 504 in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_sm.c to think that a remote rank has set its fifo address.
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4598/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4599.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4597.php">Brian W. Barrett: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>In reply to:</strong> <a href="4596.php">Jeff Squyres: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4599.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
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
