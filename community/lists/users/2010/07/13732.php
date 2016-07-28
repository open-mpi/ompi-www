<?
$subject_val = "Re: [OMPI users] Do MPI calls ever sleep?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 15:20:29 2010" -->
<!-- isoreceived="20100721192029" -->
<!-- sent="Wed, 21 Jul 2010 15:20:24 -0400" -->
<!-- isosent="20100721192024" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Do MPI calls ever sleep?" -->
<!-- id="1279740024.4130.27.camel_at_ronispc.chem.mcgill.ca" -->
<!-- charset="ansi_x3.4-1968" -->
<!-- inreplyto="877hkolmku.fsf_at_59A2.org" -->
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
<strong>From:</strong> David Ronis (<em>David.Ronis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 15:20:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13733.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13731.php">Douglas Guptill: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13730.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13733.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13733.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jed,
<br>
<p>Thanks for the reply and suggestion.  I tried adding -mca
<br>
yield_when_idle 1 (and later mpi_yield_when_idle 1 which is what
<br>
ompi_info reports the variable as) but it seems to have had 0 effect.
<br>
My master goes into fftw planning routines for a minute or so (I see the
<br>
threads being created), but the overall usage of the slaves remains
<br>
close to 100% during this time.  Just to be sure, I put the slaves into
<br>
a MPI_Barrier(MPI_COMM_WORLD) while they were waiting for the fftw
<br>
planner to finish.   It also didn't help.
<br>
<p>Do you know where is yield_when_idle documented?
<br>
<p>David
<br>
<p><p><p>On Wed, 2010-07-21 at 20:24 +0200, Jed Brown wrote:
<br>
<span class="quotelev1">&gt; On Wed, 21 Jul 2010 14:10:53 -0400, David Ronis &lt;David.Ronis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Is there another MPI routine that polls for data and then gives up its
</span><br>
<span class="quotelev2">&gt; &gt; time-slice?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You're probably looking for the runtime option -mca yield_when_idle 1.
</span><br>
<span class="quotelev1">&gt; This will slightly increase latency, but allows other threads to run
</span><br>
<span class="quotelev1">&gt; without competing with the spinning MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13733.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13731.php">Douglas Guptill: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13730.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13733.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13733.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
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
