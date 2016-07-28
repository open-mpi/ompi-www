<?
$subject_val = "Re: [OMPI users] MPI_AllGather null terminator character";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 28 06:57:58 2012" -->
<!-- isoreceived="20120128115758" -->
<!-- sent="Sat, 28 Jan 2012 06:57:53 -0500" -->
<!-- isosent="20120128115753" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllGather null terminator character" -->
<!-- id="2DE49A0D-0D05-4E96-BEB9-22FF4D2623D9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJNPZUV2yGqG7=igqhXJpdaDMnCTAJxep_B-pGFrckohj0X=4Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_AllGather null terminator character<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-28 06:57:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18308.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV on MPI_Test"</a>
<li><strong>Previous message:</strong> <a href="18306.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18306.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18328.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18328.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 28, 2012, at 5:22 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; I had the same idea so my simple code I have already done calloc and memset ..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same warning still appear using strncmp that should exclude uninitialized bytes on hostnam_recv_buf :(
</span><br>
<p>Bummer.
<br>
<p><span class="quotelev1">&gt; My apologize for being so insistent, but I would understand if there is some bug in MPI_Allgather, strcmp or Valgrind itself.
</span><br>
<p>Understood.
<br>
<p>I still think that MPI_Allgather will exactly send the bytes starting at the buffer you specify, regardless of whether they include \0 or not.
<br>
<p>I was unable to replicate the valgrind warning on my systems.  A few more things to try:
<br>
<p>1. Are you using the latest version of Valgrind?
<br>
<p>2. (I should have asked this before - sorry!) Are you using InfiniBand to transmit the data across your network?  If so, Valgrind might not have visibility on the receive buffers being filled because IB, by its nature, uses OS bypass to fill in receive buffers.  Meaning: Valgrind won't &quot;see&quot; the receive buffers getting filled, and therefore will think that they are uninitialized.  If you re-run your experiment with TCP and/or shared memory (like I did), you won't see the Valgrind uninitialized warnings.
<br>
<p>To avoid these OS-bypass issues, you might try installing Open MPI with --with-valgrind=DIR (DIR = directory where Valgrind is installed -- we need valgrind.h, IIRC).  What this does is allow Open MPI to use Valgrind's external tools API to say &quot;don't worry Valgrind, the entire contents of this buffer are initialized&quot; in cases exactly like this.
<br>
<p>There is a performance cost to using Valgrind integration, though.  So don't make this your production copy of Open MPI.
<br>
<p>3. Do a for loop accessing each position of the buffer *before* you send it.  Not just up to the \0, but traverse the *entire length* of the buffer and do some meaningless action with each byte.  See if Valgrind complains.  If it doesn't, you know for certain that the entire source buffer is not the origin of the warning.
<br>
<p>4. Similarly, do a loop accessing each position of the received buffer.  You can have Valgrind attach a debugger when it runs into issues; with that, you can see exactly which position Valgrind thinks is uninitialized.  Compare the value that was sent to the value that was received and ensure that they are the same.
<br>
<p>Hope that helps!
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
<li><strong>Next message:</strong> <a href="18308.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV on MPI_Test"</a>
<li><strong>Previous message:</strong> <a href="18306.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18306.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18328.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Reply:</strong> <a href="18328.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
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
