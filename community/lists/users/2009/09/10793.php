<?
$subject_val = "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 11:28:36 2009" -->
<!-- isoreceived="20090928152836" -->
<!-- sent="Mon, 28 Sep 2009 11:28:31 -0400" -->
<!-- isosent="20090928152831" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?" -->
<!-- id="B2CB69E4-81B6-427C-832E-860D2305239B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="COL102-W53595083E63C66A1D18823A8D70_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 11:28:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10794.php">Jeff Squyres: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Previous message:</strong> <a href="10792.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10795.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10795.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2009, at 1:45 PM, guosong wrote:
<br>
<p><span class="quotelev1">&gt; Hi Loh,
</span><br>
<span class="quotelev1">&gt; I used MPI_Init_thread(&amp;argc,&amp;argv, MPI_THREAD_MULTIPLE, &amp;provided);  
</span><br>
<span class="quotelev1">&gt; in my program and got provided = 0 which turns out to be the  
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE. Does this mean that I can not use  
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE model?
</span><br>
<p>Correct.
<br>
<p>To get Open MPI to support MPI_THREAD_MULTIPLE, you need to configure  
<br>
and build it with the --enable-mpi-threads switch to OMPI's ./ 
<br>
configure script.  We don't build MPI_THREAD_MULTIPLE support by  
<br>
default because it does add some performance overhead.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10794.php">Jeff Squyres: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Previous message:</strong> <a href="10792.php">Everette Clemmer: "Re: [OMPI users] MPI_Irecv segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="10787.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10795.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10795.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
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
