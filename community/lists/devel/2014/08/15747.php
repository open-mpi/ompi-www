<?
$subject_val = "Re: [OMPI devel] segfault in openib component on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 17:40:05 2014" -->
<!-- isoreceived="20140828214005" -->
<!-- sent="Thu, 28 Aug 2014 16:39:58 -0500" -->
<!-- isosent="20140828213958" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] segfault in openib component on trunk" -->
<!-- id="53FFA1AE.80701_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53FF9CF2.2080409_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] segfault in openib component on trunk<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 17:39:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15748.php">Pritchard Jr., Howard: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15746.php">Edgar Gabriel: "[OMPI devel] segfault in openib component on trunk"</a>
<li><strong>In reply to:</strong> <a href="15746.php">Edgar Gabriel: "[OMPI devel] segfault in openib component on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15748.php">Pritchard Jr., Howard: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Reply:</strong> <a href="15748.php">Pritchard Jr., Howard: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
to add another piece of information that I just found, the segfault only 
<br>
occurs if I have a particular mca parameter set in my mca-params.conf 
<br>
file, namely
<br>
<p>btl_openib_receive_queues = S,12288,128,64,32:S,65536,128,64,3
<br>
<p>Has the syntax for this parameter changed, or should/can I get rid of it?
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 08/28/2014 04:19 PM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; we are having recently problems running trunk with openib component
</span><br>
<span class="quotelev1">&gt; enabled on one of our clusters. The problem occurs right in the
</span><br>
<span class="quotelev1">&gt; initialization part, here is the stack right before the segfault:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---snip---
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  mca_btl_openib_tune_endpoint (openib_btl=0x762a40,
</span><br>
<span class="quotelev1">&gt; endpoint=0x7d9660) at btl_openib.c:470
</span><br>
<span class="quotelev1">&gt; #1  0x00007f1062f105c4 in mca_btl_openib_add_procs (btl=0x762a40,
</span><br>
<span class="quotelev1">&gt; nprocs=2, procs=0x759be0, peers=0x762440, reachable=0x7fff22dd16f0) at
</span><br>
<span class="quotelev1">&gt; btl_openib.c:1093
</span><br>
<span class="quotelev1">&gt; #2  0x00007f106316102c in mca_bml_r2_add_procs (nprocs=2,
</span><br>
<span class="quotelev1">&gt; procs=0x759be0, reachable=0x7fff22dd16f0) at bml_r2.c:201
</span><br>
<span class="quotelev1">&gt; #3  0x00007f10615c0dd5 in mca_pml_ob1_add_procs (procs=0x70dc00,
</span><br>
<span class="quotelev1">&gt; nprocs=2) at pml_ob1.c:334
</span><br>
<span class="quotelev1">&gt; #4  0x00007f106823ed84 in ompi_mpi_init (argc=1, argv=0x7fff22dd1da8,
</span><br>
<span class="quotelev1">&gt; requested=0, provided=0x7fff22dd184c) at runtime/ompi_mpi_init.c:790
</span><br>
<span class="quotelev1">&gt; #5  0x00007f1068273a2c in MPI_Init (argc=0x7fff22dd188c,
</span><br>
<span class="quotelev1">&gt; argv=0x7fff22dd1880) at init.c:84
</span><br>
<span class="quotelev1">&gt; #6  0x00000000004008e7 in main (argc=1, argv=0x7fff22dd1da8) at
</span><br>
<span class="quotelev1">&gt; hello_world.c:13
</span><br>
<span class="quotelev1">&gt; ---snip---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in line 538 of the file containing the mca_btl_openib_tune_endpoint
</span><br>
<span class="quotelev1">&gt; routine, the strcmp operation fails, because  recv_qps is a NULL pointer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---snip---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if(0 != strcmp(mca_btl_openib_component.receive_queues, recv_qps)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---snip---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody have an idea on what might be going wrong and how to
</span><br>
<span class="quotelev1">&gt; resolve it? Just to confirm, everything works perfectly with the 1.8
</span><br>
<span class="quotelev1">&gt; series on that very same  cluster
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15746.php">http://www.open-mpi.org/community/lists/devel/2014/08/15746.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15748.php">Pritchard Jr., Howard: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15746.php">Edgar Gabriel: "[OMPI devel] segfault in openib component on trunk"</a>
<li><strong>In reply to:</strong> <a href="15746.php">Edgar Gabriel: "[OMPI devel] segfault in openib component on trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15748.php">Pritchard Jr., Howard: "Re: [OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Reply:</strong> <a href="15748.php">Pritchard Jr., Howard: "Re: [OMPI devel] segfault in openib component on trunk"</a>
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
