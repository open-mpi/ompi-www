<?
$subject_val = "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 18:38:06 2010" -->
<!-- isoreceived="20101122233806" -->
<!-- sent="Mon, 22 Nov 2010 18:38:01 -0500" -->
<!-- isosent="20101122233801" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?" -->
<!-- id="9F954E75-A92D-464A-A711-E15D8A32352B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimjKifd_SnPifX1c16dbKO7z6qvCyu6bx6pQfQd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 18:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14871.php">James Overfelt: "[OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>Previous message:</strong> <a href="14869.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>In reply to:</strong> <a href="14852.php">Riccardo Murri: "[OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14873.php">Riccardo Murri: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>Reply:</strong> <a href="14873.php">Riccardo Murri: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 21, 2010, at 1:46 PM, Riccardo Murri wrote:
<br>
<p><span class="quotelev1">&gt; I'm using code like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Iprobe(MPI_ANY_SOURCE, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;flag, &amp;status);
</span><br>
<span class="quotelev1">&gt;  if(flag) {
</span><br>
<span class="quotelev1">&gt;    int size;
</span><br>
<span class="quotelev1">&gt;    MPI_Get_count(&amp;status, MPI_BYTE, &amp;size);
</span><br>
<span class="quotelev1">&gt;    void* row = xmalloc(size);
</span><br>
<span class="quotelev1">&gt;    /* ... */
</span><br>
<span class="quotelev1">&gt;    MPI_Recv(row, size, MPI_BYTE,
</span><br>
<span class="quotelev1">&gt;             status.MPI_SOURCE, status.MPI_TAG, MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;             &amp;status);
</span><br>
<span class="quotelev1">&gt;  /* ... */
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question: is it possible that, in the time my program progresses from
</span><br>
<span class="quotelev1">&gt; MPI_Iprobe() to MPI_Recv(), another message has arrived, that matches
</span><br>
<span class="quotelev1">&gt; the MPI_Recv(), but is not the one originally matched from
</span><br>
<span class="quotelev1">&gt; MPI_Iprobe()?  (e.g. a shorter one)
</span><br>
<p>No.  MPI guarantees matching order.  Given that you're receiving on a very specific signature (i.e., the source and tag from the successful probe), messages will be received in order.
<br>
<p>As long as there's no other possible MPI_RECV on that signature between your MPI_IPROBE-that-returns-flag==true and the MPI_RECV shown above, then your MPI_RECV should be receiving the message that MPI_IPROBE returned flag==true for.
<br>
<p><span class="quotelev1">&gt; In particular, could it be that the size of the message actually
</span><br>
<span class="quotelev1">&gt; received by MPI_Recv() does not match `size` (the variable)?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt; In case a shorter message (different from the one initially matched)
</span><br>
<span class="quotelev1">&gt; was received, can I get the actual message size via a new call to
</span><br>
<span class="quotelev1">&gt; MPI_Get_count(&amp;mpi_recv_status ...)?
</span><br>
<p>You certainly can, but you should not need to -- they should be the same size.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14871.php">James Overfelt: "[OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>Previous message:</strong> <a href="14869.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>In reply to:</strong> <a href="14852.php">Riccardo Murri: "[OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14873.php">Riccardo Murri: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>Reply:</strong> <a href="14873.php">Riccardo Murri: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
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
