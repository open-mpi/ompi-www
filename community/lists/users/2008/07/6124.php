<?
$subject_val = "Re: [OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 09:15:30 2008" -->
<!-- isoreceived="20080724131530" -->
<!-- sent="Thu, 24 Jul 2008 08:15:24 -0500" -->
<!-- isosent="20080724131524" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Parallel I/O with MPI-1" -->
<!-- id="20080724131523.GP26677_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3a37617f0807230524y30df1317yc1dc6d257928707_at_mail.gmail.com" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-24 09:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6125.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6123.php">Mostyn Lewis: "[OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<li><strong>In reply to:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6110.php">Neil Storer: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 23, 2008 at 02:24:03PM +0200, Gabriele Fatigati wrote:
<br>
<span class="quotelev2">&gt; &gt;You could always effect your own parallel IO (e.g., use MPI sends and
</span><br>
<span class="quotelev1">&gt; receives to coordinate parallel reads and writes), but &gt;why?  It's already
</span><br>
<span class="quotelev1">&gt; done in the MPI-IO implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just a moment: you're saying that i can do fwrite without any lock? OpenMPI
</span><br>
<span class="quotelev1">&gt; does this?
</span><br>
<p>You use MPI to describe your I/O regions.  In fact, these I/O regions
<br>
can even overlap (something that you can't do efficiently with
<br>
lock-based approaches).  Even better, if you do your I/O
<br>
&quot;collectively&quot; the MPI library will optimize the heck out of your
<br>
accesses.
<br>
<p>When I was learning all this way back when, it took me a long time to
<br>
get all the details straight (memory types, file views, tiling,
<br>
independent vs. collective), but a few readings of the I/O chapter of
<br>
&quot;Using MPI-2&quot; set me straight. 
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6125.php">Robert Latham: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6123.php">Mostyn Lewis: "[OMPI users] Continuous poll/select using btl sm (svn 1.4a1r18899)"</a>
<li><strong>In reply to:</strong> <a href="6108.php">Gabriele Fatigati: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6110.php">Neil Storer: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
