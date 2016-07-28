<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 25 18:26:35 2005" -->
<!-- isoreceived="20050325232635" -->
<!-- sent="Fri, 25 Mar 2005 15:26:28 -0800" -->
<!-- isosent="20050325232628" -->
<!-- name="Greg Lindahl" -->
<!-- email="lindahl_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI" -->
<!-- id="20050325232628.GA3781_at_greglaptop.internal.keyresearch.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b4d7d18296574300fd7b71187a80470f_at_open-mpi.org" -->
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
<strong>From:</strong> Greg Lindahl (<em>lindahl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-03-25 18:26:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0038.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0036.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0034.php">Jeff Squyres: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0040.php">Patrick Geoffray: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0040.php">Patrick Geoffray: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0043.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 25, 2005 at 05:49:13PM -0500, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; MorphMPI (or, as Patrick suggests, we need a cooler name -- PatrickMPI? 
</span><br>
<span class="quotelev1">&gt; ;-) ) is the work of 1 grad clever student (or anyone else industrious 
</span><br>
<span class="quotelev1">&gt; enough).  Elapsed time: a few months.
</span><br>
<p>Right.
<br>
<p><span class="quotelev1">&gt; Making even 2 MPI implementations agree on an ABI is an enormous amount 
</span><br>
<span class="quotelev1">&gt; of work.  Given that two major MPI implementations take opposite sides 
</span><br>
<span class="quotelev1">&gt; on the pointers-vs.integers for MPI handles debate (and I suspect that 
</span><br>
<span class="quotelev1">&gt; neither is willing to change), just getting them to agree on one of 
</span><br>
<span class="quotelev1">&gt; them will be a major amount of work.  Then changing the internals of 
</span><br>
<span class="quotelev1">&gt; one of those MPIs to match the other is another enormous amount of work 
</span><br>
<span class="quotelev1">&gt; (death by a million cuts).
</span><br>
<p>You yourself said how MPI implementers would actually implement this
<br>
without needing to change any internals: Make the C interface routines
<br>
do the same thing that F77 does today. Elapsed time: a few months,
<br>
same as MorphMPI. No internals need to be changed.
<br>
<p>I suppose the good news is that if this is your main objection,
<br>
then it's gone.
<br>
<p><span class="quotelev1">&gt; Also, as I pointed out in my original alternate proposal, with 
</span><br>
<span class="quotelev1">&gt; PatrickMPI, only those who want to use an ABI will use it.  Those who 
</span><br>
<span class="quotelev1">&gt; do *not* want an ABI do not have to have it forced upon them.
</span><br>
<p>I missed where anyone was being forced to do anything. MPI
<br>
implementers can support the ABI alongside their current interface or
<br>
not, it's their choice.
<br>
<p>-- greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0038.php">Patrick Geoffray: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Previous message:</strong> <a href="0036.php">Greg Lindahl: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>In reply to:</strong> <a href="0034.php">Jeff Squyres: "[O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0040.php">Patrick Geoffray: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0040.php">Patrick Geoffray: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
<li><strong>Reply:</strong> <a href="0043.php">Jeff Squyres: "Re: [O-MPI users] Re: [Beowulf] Alternative to MPI ABI"</a>
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
