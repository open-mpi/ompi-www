<?
$subject_val = "Re: [OMPI devel] MTT tests: segv's with sm on large messages";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 11:01:15 2009" -->
<!-- isoreceived="20090504150115" -->
<!-- sent="Mon, 04 May 2009 08:00:57 -0700" -->
<!-- isosent="20090504150057" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT tests: segv's with sm on large messages" -->
<!-- id="49FF0329.6010309_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AD0F4C46-4FAF-4BEF-B6D4-8BC725776E1B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT tests: segv's with sm on large messages<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 11:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5953.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>Previous message:</strong> <a href="5951.php">Jeff Squyres: "Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
<li><strong>In reply to:</strong> <a href="5950.php">Ralph Castain: "[OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5962.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5962.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; In reviewing last night's MTT tests for the 1.3 branch, I am seeing  
</span><br>
<span class="quotelev1">&gt; several segfault failures in the shared memory BTL when using large  
</span><br>
<span class="quotelev1">&gt; messages. This occurred on both IU's sif machine and on Sun's tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a typical stack from MTT:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPITEST info  (0): Starting MPI_Sendrecv: Root to all model test
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] [ 0] /lib64/tls/libpthread.so.0 [0x2a960bc720]
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] [ 1]
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
</span><br>
<span class="quotelev1">&gt; testing/installs/ZCcL/install/lib/lib64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_btl_sm.so(mca_btl_sm_send+0x7b)
</span><br>
<span class="quotelev1">&gt; [0x2a9786a7d3]
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] [ 2]
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
</span><br>
<span class="quotelev1">&gt; testing/installs/ZCcL/install/lib/lib64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x5b2)
</span><br>
<span class="quotelev1">&gt; [0x2a97453942]
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] [ 3]
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
</span><br>
<span class="quotelev1">&gt; testing/installs/ZCcL/install/lib/lib64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1.so(mca_pml_ob1_isend+0x4f2)
</span><br>
<span class="quotelev1">&gt; [0x2a9744b446]
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] [ 4]
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
</span><br>
<span class="quotelev1">&gt; testing/installs/ZCcL/install/lib/lib64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual+0x7e)
</span><br>
<span class="quotelev1">&gt; [0x2a98120bca]
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] [ 5]
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
</span><br>
<span class="quotelev1">&gt; testing/installs/ZCcL/install/lib/lib64/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_recursivedoubling+0x119)
</span><br>
<span class="quotelev1">&gt; [0x2a9812b111]
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] [ 6]
</span><br>
<span class="quotelev1">&gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball- 
</span><br>
<span class="quotelev1">&gt; testing/installs/ZCcL/install/lib/lib64/libmpi.so.0(PMPI_Barrier+0x8e)
</span><br>
<span class="quotelev1">&gt; [0x2a9584ca42]
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] [ 7] src/MPI_Sendrecv_rtoa_c [0x403009]
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] [ 8] /lib64/tls/libc.so.6(__libc_start_main 
</span><br>
<span class="quotelev1">&gt; +0xea) [0x2a961e0aaa]
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] [ 9] src/MPI_Sendrecv_rtoa_c(strtok+0x66)  
</span><br>
<span class="quotelev1">&gt; [0x4019f2]
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-13:14699] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [burl-ct-v20z-12][[13280,1],0][btl_tcp_endpoint.c: 
</span><br>
<span class="quotelev1">&gt; 456:mca_btl_tcp_endpoint_recv_blocking] recv(13)
</span><br>
<span class="quotelev1">&gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 2 with PID 14699 on node burl-ct- 
</span><br>
<span class="quotelev1">&gt; v20z-13 exited on signal 11
</span><br>
<span class="quotelev1">&gt; (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems like this is something we need to address before release - yes?
</span><br>
<p>I don't know if this needs to be addressed before release, but it was my 
<br>
impression that we've been living with these errors for a long time.  
<br>
They're intermittent (1% incidence rate????) and stacks come through 
<br>
coll_tuned or coll_hierarch or something and end up in the sm BTL.  We 
<br>
discussed them not too long ago on this list.  They predate 1.3.2.  I 
<br>
think Terry said they seem hard to reproduce outside of MTT.  (Terry is 
<br>
out this week.)
<br>
<p>Anyhow, my impression was that these were not new with this release.  
<br>
Would be nice to get off the books in any case.  Need to figure out how 
<br>
to improve reproducibility and then dive into coll/sm stuff.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5953.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>Previous message:</strong> <a href="5951.php">Jeff Squyres: "Re: [OMPI devel] size of items in mca_osc_pt2pt_component.p2p_c_buffers"</a>
<li><strong>In reply to:</strong> <a href="5950.php">Ralph Castain: "[OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5962.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5962.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
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
