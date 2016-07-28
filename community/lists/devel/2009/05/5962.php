<?
$subject_val = "Re: [OMPI devel] MTT tests: segv's with sm on large messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 17:39:47 2009" -->
<!-- isoreceived="20090505213947" -->
<!-- sent="Tue, 5 May 2009 17:39:42 -0400" -->
<!-- isosent="20090505213942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT tests: segv's with sm on large messages" -->
<!-- id="3A612941-D7DD-4BA5-BC8B-AE87A097D682_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49FF0329.6010309_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 17:39:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5963.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5961.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5952.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5963.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5963.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm -- this looks like a different error to me.
<br>
<p>The &lt;1% error rate sm error we were seeing was in MPI_INIT.  This  
<br>
looks like it is beyond MPI_INIT and in the sending path...?
<br>
<p>On May 4, 2009, at 11:00 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In reviewing last night's MTT tests for the 1.3 branch, I am seeing
</span><br>
<span class="quotelev2">&gt; &gt; several segfault failures in the shared memory BTL when using large
</span><br>
<span class="quotelev2">&gt; &gt; messages. This occurred on both IU's sif machine and on Sun's tests.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is a typical stack from MTT:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPITEST info  (0): Starting MPI_Sendrecv: Root to all model test
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] [ 0] /lib64/tls/libpthread.so.0  
</span><br>
<span class="quotelev1">&gt; [0x2a960bc720]
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] [ 1]
</span><br>
<span class="quotelev2">&gt; &gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-
</span><br>
<span class="quotelev2">&gt; &gt; testing/installs/ZCcL/install/lib/lib64/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_btl_sm.so(mca_btl_sm_send+0x7b)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a9786a7d3]
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] [ 2]
</span><br>
<span class="quotelev2">&gt; &gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-
</span><br>
<span class="quotelev2">&gt; &gt; testing/installs/ZCcL/install/lib/lib64/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x5b2)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a97453942]
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] [ 3]
</span><br>
<span class="quotelev2">&gt; &gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-
</span><br>
<span class="quotelev2">&gt; &gt; testing/installs/ZCcL/install/lib/lib64/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_pml_ob1.so(mca_pml_ob1_isend+0x4f2)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a9744b446]
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] [ 4]
</span><br>
<span class="quotelev2">&gt; &gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-
</span><br>
<span class="quotelev2">&gt; &gt; testing/installs/ZCcL/install/lib/lib64/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual+0x7e)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a98120bca]
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] [ 5]
</span><br>
<span class="quotelev2">&gt; &gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-
</span><br>
<span class="quotelev2">&gt; &gt; testing/installs/ZCcL/install/lib/lib64/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_recursivedoubling 
</span><br>
<span class="quotelev1">&gt; +0x119)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a9812b111]
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] [ 6]
</span><br>
<span class="quotelev2">&gt; &gt; /workspace/em162155/hpc/mtt-scratch/burl-ct-v20z-12/ompi-tarball-
</span><br>
<span class="quotelev2">&gt; &gt; testing/installs/ZCcL/install/lib/lib64/libmpi.so.0(PMPI_Barrier 
</span><br>
<span class="quotelev1">&gt; +0x8e)
</span><br>
<span class="quotelev2">&gt; &gt; [0x2a9584ca42]
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] [ 7] src/MPI_Sendrecv_rtoa_c [0x403009]
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] [ 8] /lib64/tls/libc.so.6(__libc_start_main
</span><br>
<span class="quotelev2">&gt; &gt; +0xea) [0x2a961e0aaa]
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] [ 9] src/MPI_Sendrecv_rtoa_c(strtok+0x66)
</span><br>
<span class="quotelev2">&gt; &gt; [0x4019f2]
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-13:14699] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt; [burl-ct-v20z-12][[13280,1],0][btl_tcp_endpoint.c:
</span><br>
<span class="quotelev2">&gt; &gt; 456:mca_btl_tcp_endpoint_recv_blocking] recv(13)
</span><br>
<span class="quotelev2">&gt; &gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that process rank 2 with PID 14699 on node burl-ct-
</span><br>
<span class="quotelev2">&gt; &gt; v20z-13 exited on signal 11
</span><br>
<span class="quotelev2">&gt; &gt; (Segmentation fault).
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Seems like this is something we need to address before release -  
</span><br>
<span class="quotelev1">&gt; yes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if this needs to be addressed before release, but it  
</span><br>
<span class="quotelev1">&gt; was my
</span><br>
<span class="quotelev1">&gt; impression that we've been living with these errors for a long time.
</span><br>
<span class="quotelev1">&gt; They're intermittent (1% incidence rate????) and stacks come through
</span><br>
<span class="quotelev1">&gt; coll_tuned or coll_hierarch or something and end up in the sm BTL.  We
</span><br>
<span class="quotelev1">&gt; discussed them not too long ago on this list.  They predate 1.3.2.  I
</span><br>
<span class="quotelev1">&gt; think Terry said they seem hard to reproduce outside of MTT.  (Terry  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; out this week.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, my impression was that these were not new with this release.
</span><br>
<span class="quotelev1">&gt; Would be nice to get off the books in any case.  Need to figure out  
</span><br>
<span class="quotelev1">&gt; how
</span><br>
<span class="quotelev1">&gt; to improve reproducibility and then dive into coll/sm stuff.
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
<li><strong>Next message:</strong> <a href="5963.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5961.php">Jeff Squyres: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>In reply to:</strong> <a href="5952.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5963.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5963.php">Eugene Loh: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
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
