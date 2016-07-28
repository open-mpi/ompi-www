<?
$subject_val = "Re: [OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 06:59:47 2008" -->
<!-- isoreceived="20080723105947" -->
<!-- sent="Wed, 23 Jul 2008 06:59:38 -0400" -->
<!-- isosent="20080723105938" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O with MPI-1" -->
<!-- id="4FC5A352-01DC-4E31-BFC8-7EAE92BF40D5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0807230335i1b41ba0x12d0d5ab9e73916f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Parallel I/O with MPI-1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 06:59:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6106.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6106.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6110.php">Neil Storer: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2008, at 6:35 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev2">&gt; &gt;There is a whole chapter in the MPI standard about file I/O  
</span><br>
<span class="quotelev1">&gt; operations. I'm quite confident you will find whatever you're  
</span><br>
<span class="quotelev1">&gt; looking for there :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi George, i know this chapter :) But i'm using MPI-1, not MPI-2. I  
</span><br>
<span class="quotelev1">&gt; would like to know methods for I/O with MPI-1.
</span><br>
<p>Open MPI builds ROMIO by default; there's no real distinction between  
<br>
MPI-1 features and MPI-2 features in the Open MPI code base.
<br>
<p>You could always effect your own parallel IO (e.g., use MPI sends and  
<br>
receives to coordinate parallel reads and writes), but why?  It's  
<br>
already done in the MPI-IO implementation.
<br>
<p>FWIW: I do not believe that flock() is guaranteed to be safe across  
<br>
network filesystems such as NFS.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6106.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>In reply to:</strong> <a href="6106.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6110.php">Neil Storer: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
