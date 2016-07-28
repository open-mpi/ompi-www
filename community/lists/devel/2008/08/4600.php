<?
$subject_val = "Re: [OMPI devel] SM initialization race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 10:04:58 2008" -->
<!-- isoreceived="20080821140458" -->
<!-- sent="Thu, 21 Aug 2008 10:04:51 -0400" -->
<!-- isosent="20080821140451" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM initialization race condition" -->
<!-- id="48AD7603.9040608_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-21 10:04:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4601.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4599.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>In reply to:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Terry,
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
So far I've only tested this on Solaris.  We'll try out the bzero to see 
<br>
if this goes away.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Just in case, here is a patch that set the beginning of the mmaped 
</span><br>
<span class="quotelev1">&gt; region to zero, in case this is not done automatically. As in most 
</span><br>
<span class="quotelev1">&gt; cases this is an unnecessary overhead, we should find the cases where 
</span><br>
<span class="quotelev1">&gt; we really need this, and possibly conditionally compile it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/common/sm/common_sm_mmap.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/common/sm/common_sm_mmap.c    (revision 19377)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/common/sm/common_sm_mmap.c    (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -163,6 +163,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  /* initialize the segment - only the first process
</span><br>
<span class="quotelev1">&gt;                     to open the file */
</span><br>
<span class="quotelev1">&gt; +                bzero( map-&gt;data_addr, size );
</span><br>
<span class="quotelev1">&gt;                  mem_offset = map-&gt;data_addr - (unsigned char 
</span><br>
<span class="quotelev1">&gt; *)map-&gt;map_seg;
</span><br>
<span class="quotelev1">&gt;                  map-&gt;map_seg-&gt;seg_offset = mem_offset;
</span><br>
<span class="quotelev1">&gt;                  map-&gt;map_seg-&gt;seg_size = size - mem_offset;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
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
<span class="quotelev2">&gt;&gt; [2] mca_bml_r2_add_procs(nprocs = 2U, procs = 0x591560, bml_endpoints 
</span><br>
<span class="quotelev2">&gt;&gt; = 0x591500, reachable = 0xfffffd7fffdff000), line 222 in &quot;bml_r2.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [3] mca_pml_ob1_add_procs(procs = 0x5914c0, nprocs = 2U), line 248 in 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;pml_ob1.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [4] ompi_mpi_init(argc = 1, argv = 0xfffffd7fffdff318, requested = 0, 
</span><br>
<span class="quotelev2">&gt;&gt; provided = 0xfffffd7fffdff234), line 651 in &quot;ompi_mpi_init.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; [5] PMPI_Init(argc = 0xfffffd7fffdff2ec, argv = 0xfffffd7fffdff2e0), 
</span><br>
<span class="quotelev2">&gt;&gt; line 90 in &quot;pinit.c&quot;
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4601.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>Previous message:</strong> <a href="4599.php">Tim Mattox: "Re: [OMPI devel] SM initialization race condition"</a>
<li><strong>In reply to:</strong> <a href="4595.php">George Bosilca: "Re: [OMPI devel] SM initialization race condition"</a>
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
