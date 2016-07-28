<?
$subject_val = "Re: [OMPI users] Do MPI calls ever sleep?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 16:05:34 2010" -->
<!-- isoreceived="20100721200534" -->
<!-- sent="Wed, 21 Jul 2010 16:05:29 -0400" -->
<!-- isosent="20100721200529" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Do MPI calls ever sleep?" -->
<!-- id="1279742729.12278.7.camel_at_ronispc.chem.mcgill.ca" -->
<!-- charset="ansi_x3.4-1968" -->
<!-- inreplyto="20100721195328.5374BBA0084_at_asmx5.McGill.CA" -->
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
<strong>Date:</strong> 2010-07-21 16:05:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13735.php">Dave Goodell: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13733.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Maybe in reply to:</strong> <a href="13729.php">David Ronis: "[OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running linux (slackware 12.2), openmpi 1.4.2 and fftw3 3.2.4.
<br>
<p>As to the planner always running in parallel, I suspect it isn't.   It's
<br>
trying to optimize the split up the fft computation between different
<br>
codelets and different numbers of threads (including none).  It tries
<br>
something and measures the result.   In fact, if it determines that
<br>
threads don't provide any advantage (irrespective of MPI) then it won't
<br>
use them, and indeed this might be the case here.  Unfortunately, fftw
<br>
doesn't seem to return or provide a way to get the acutal number of
<br>
threads it plans to use.
<br>
<p>David
<br>
<p><p><p>On Wed, 2010-07-21 at 21:54 +0200, Jed Brown wrote:
<br>
<span class="quotelev1">&gt; On Wed, 21 Jul 2010 15:20:24 -0400, David Ronis &lt;David.Ronis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jed,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the reply and suggestion.  I tried adding -mca
</span><br>
<span class="quotelev2">&gt; &gt; yield_when_idle 1 (and later mpi_yield_when_idle 1 which is what
</span><br>
<span class="quotelev2">&gt; &gt; ompi_info reports the variable as) but it seems to have had 0 effect.
</span><br>
<span class="quotelev2">&gt; &gt; My master goes into fftw planning routines for a minute or so (I see the
</span><br>
<span class="quotelev2">&gt; &gt; threads being created), but the overall usage of the slaves remains
</span><br>
<span class="quotelev2">&gt; &gt; close to 100% during this time.  Just to be sure, I put the slaves into
</span><br>
<span class="quotelev2">&gt; &gt; a MPI_Barrier(MPI_COMM_WORLD) while they were waiting for the fftw
</span><br>
<span class="quotelev2">&gt; &gt; planner to finish.   It also didn't help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They still spin (instead of using e.g. select()), but call sched_yield()
</span><br>
<span class="quotelev1">&gt; so should only be actively spinning when nothing else is trying to run.
</span><br>
<span class="quotelev1">&gt; Are you sure that the planner is always running in parallel?  What OS
</span><br>
<span class="quotelev1">&gt; and OMPI version are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jed
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13735.php">Dave Goodell: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Previous message:</strong> <a href="13733.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Maybe in reply to:</strong> <a href="13729.php">David Ronis: "[OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
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
