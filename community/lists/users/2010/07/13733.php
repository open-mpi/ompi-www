<?
$subject_val = "Re: [OMPI users] Do MPI calls ever sleep?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 15:52:44 2010" -->
<!-- isoreceived="20100721195244" -->
<!-- sent="Wed, 21 Jul 2010 21:54:52 +0200" -->
<!-- isosent="20100721195452" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Do MPI calls ever sleep?" -->
<!-- id="874ofslier.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1279740024.4130.27.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Do MPI calls ever sleep?<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 15:54:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13734.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13732.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13732.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13735.php">Dave Goodell: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13735.php">Dave Goodell: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 21 Jul 2010 15:20:24 -0400, David Ronis &lt;David.Ronis_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Jed,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply and suggestion.  I tried adding -mca
</span><br>
<span class="quotelev1">&gt; yield_when_idle 1 (and later mpi_yield_when_idle 1 which is what
</span><br>
<span class="quotelev1">&gt; ompi_info reports the variable as) but it seems to have had 0 effect.
</span><br>
<span class="quotelev1">&gt; My master goes into fftw planning routines for a minute or so (I see the
</span><br>
<span class="quotelev1">&gt; threads being created), but the overall usage of the slaves remains
</span><br>
<span class="quotelev1">&gt; close to 100% during this time.  Just to be sure, I put the slaves into
</span><br>
<span class="quotelev1">&gt; a MPI_Barrier(MPI_COMM_WORLD) while they were waiting for the fftw
</span><br>
<span class="quotelev1">&gt; planner to finish.   It also didn't help.
</span><br>
<p>They still spin (instead of using e.g. select()), but call sched_yield()
<br>
so should only be actively spinning when nothing else is trying to run.
<br>
Are you sure that the planner is always running in parallel?  What OS
<br>
and OMPI version are you using?
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13734.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13732.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13732.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13735.php">Dave Goodell: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13735.php">Dave Goodell: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
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
