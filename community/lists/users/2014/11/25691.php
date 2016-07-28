<?
$subject_val = "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 12:14:02 2014" -->
<!-- isoreceived="20141105171402" -->
<!-- sent="Wed, 05 Nov 2014 17:13:46 +0000" -->
<!-- isosent="20141105171346" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] change in behaviour 1.6 -&amp;gt; 1.8 under sge" -->
<!-- id="87h9ydr2np.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8E71C675-D27F-4DF0-9DDD-C724152E6EEB_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 12:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25692.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25690.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25671.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25661.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I confirmed that things are working as intended.
</span><br>
<p>I could have been more explicit saying so before.
<br>
<p><span class="quotelev1">&gt; If you have 12 cores on a machine, and you do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -map-by socket:PE=2 &lt;foo&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we will execute 6 copies of foo on the node because 12 cores/2pe/core = 6 procs.
</span><br>
<p>For what it's worth, you need to be a bit careful testing.  1.6 works on
<br>
a single node without --loadbalance.
<br>
<p>I'm fairly sure what Mark sees will be the result of messing with the
<br>
SGE internals, possibly combined with SGE core binding/cpuset
<br>
restrictions.  I've always found that confusing, and preferred to let
<br>
mpirun do the work, but there's no accounting for things in Yorkshire.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25692.php">Dave Love: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Previous message:</strong> <a href="25690.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>In reply to:</strong> <a href="25671.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25661.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
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
