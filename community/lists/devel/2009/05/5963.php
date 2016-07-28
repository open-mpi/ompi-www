<?
$subject_val = "Re: [OMPI devel] MTT tests: segv's with sm on large messages";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 18:01:44 2009" -->
<!-- isoreceived="20090505220144" -->
<!-- sent="Tue, 05 May 2009 15:01:36 -0700" -->
<!-- isosent="20090505220136" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT tests: segv's with sm on large messages" -->
<!-- id="4A00B740.2060507_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3A612941-D7DD-4BA5-BC8B-AE87A097D682_at_cisco.com" -->
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
<strong>Date:</strong> 2009-05-05 18:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5964.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5962.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>In reply to:</strong> <a href="5962.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5964.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5964.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Different from what?
<br>
<p>You and Terry saw something that was occurring about 0.01% of the time 
<br>
during MPI_Init during add_procs.  That does not seem to be what we are 
<br>
seeing here.
<br>
<p>But we have seen failures in 1.3.1 and 1.3.2 that look like the one 
<br>
here.  They occur more like 1% of the time and can occur during MPI_Init 
<br>
*OR* later during a collective call.  What we're looking at here seems 
<br>
to be related.  E.g., see 
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2009/03/5768.php">http://www.open-mpi.org/community/lists/devel/2009/03/5768.php</a>
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Hmm -- this looks like a different error to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &lt;1% error rate sm error we were seeing was in MPI_INIT.  This  
</span><br>
<span class="quotelev1">&gt; looks like it is beyond MPI_INIT and in the sending path...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 4, 2009, at 11:00 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In reviewing last night's MTT tests for the 1.3 branch, I am seeing
</span><br>
<span class="quotelev3">&gt;&gt; &gt; several segfault failures in the shared memory BTL when using large
</span><br>
<span class="quotelev3">&gt;&gt; &gt; messages. This occurred on both IU's sif machine and on Sun's tests.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Here is a typical stack from MTT:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPITEST info  (0): Starting MPI_Sendrecv: Root to all model test
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] Signal code:  (128)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] [ 0] /lib64/tls/libpthread.so.0  
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a960bc720]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] [ 1] 
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/.../lib/lib64/openmpi/mca_btl_sm.so(mca_btl_sm_send+0x7b) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a9786a7d3]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] [ 2] 
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/.../lib/lib64/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_request_start_copy+0x5b2) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a97453942]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] [ 3] 
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/.../lib/lib64/openmpi/mca_pml_ob1.so(mca_pml_ob1_isend+0x4f2) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a9744b446]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] [ 4] 
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/.../lib/lib64/openmpi/mca_coll_tuned.so(ompi_coll_tuned_sendrecv_actual+0x7e) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x2a98120bca]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] [ 5] 
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/.../lib/lib64/openmpi/mca_coll_tuned.so(ompi_coll_tuned_barrier_intra_recursivedoubling 
</span><br>
<span class="quotelev2">&gt;&gt; +0x119) [0x2a9812b111]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] [ 6] 
</span><br>
<span class="quotelev2">&gt;&gt; /workspace/.../lib/lib64/libmpi.so.0(PMPI_Barrier +0x8e) [0x2a9584ca42]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] [ 7] src/MPI_Sendrecv_rtoa_c [0x403009]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] [ 8] 
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/tls/libc.so.6(__libc_start_main+0xea) [0x2a961e0aaa]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] [ 9] src/MPI_Sendrecv_rtoa_c(strtok+0x66) 
</span><br>
<span class="quotelev2">&gt;&gt; [0x4019f2]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [burl-ct-v20z-13:14699] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Seems like this is something we need to address before release -  yes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if this needs to be addressed before release, but it  
</span><br>
<span class="quotelev2">&gt;&gt; was my
</span><br>
<span class="quotelev2">&gt;&gt; impression that we've been living with these errors for a long time.
</span><br>
<span class="quotelev2">&gt;&gt; They're intermittent (1% incidence rate????) and stacks come through
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned or coll_hierarch or something and end up in the sm BTL.  We
</span><br>
<span class="quotelev2">&gt;&gt; discussed them not too long ago on this list.  They predate 1.3.2.  I
</span><br>
<span class="quotelev2">&gt;&gt; think Terry said they seem hard to reproduce outside of MTT.  (Terry  is
</span><br>
<span class="quotelev2">&gt;&gt; out this week.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, my impression was that these were not new with this release.
</span><br>
<span class="quotelev2">&gt;&gt; Would be nice to get off the books in any case.  Need to figure out  how
</span><br>
<span class="quotelev2">&gt;&gt; to improve reproducibility and then dive into coll/sm stuff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5964.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Previous message:</strong> <a href="5962.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>In reply to:</strong> <a href="5962.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5964.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
<li><strong>Reply:</strong> <a href="5964.php">Jeff Squyres: "Re: [OMPI devel] MTT tests: segv's with sm on large messages"</a>
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
