<?
$subject_val = "Re: [OMPI users] Do MPI calls ever sleep?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 12:03:27 2010" -->
<!-- isoreceived="20100722160327" -->
<!-- sent="Thu, 22 Jul 2010 12:03:23 -0400" -->
<!-- isosent="20100722160323" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Do MPI calls ever sleep?" -->
<!-- id="1279814603.934.3.camel_at_ronispc.chem.mcgill.ca" -->
<!-- charset="ansi_x3.4-1968" -->
<!-- inreplyto="ED2F0EAD-3FD0-46E8-9B74-DA4B496B598F_at_mcs.anl.gov" -->
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
<strong>Date:</strong> 2010-07-22 12:03:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13745.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="13743.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13735.php">Dave Goodell: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13761.php">Jeff Squyres: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13761.php">Jeff Squyres: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That did it.  Thanks.
<br>
<p>David
<br>
<p>On Wed, 2010-07-21 at 15:29 -0500, Dave Goodell wrote:
<br>
<span class="quotelev1">&gt; On Jul 21, 2010, at 2:54 PM CDT, Jed Brown wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 21 Jul 2010 15:20:24 -0400, David Ronis &lt;David.Ronis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Jed,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for the reply and suggestion.  I tried adding -mca
</span><br>
<span class="quotelev3">&gt; &gt;&gt; yield_when_idle 1 (and later mpi_yield_when_idle 1 which is what
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi_info reports the variable as) but it seems to have had 0 effect.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My master goes into fftw planning routines for a minute or so (I see the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; threads being created), but the overall usage of the slaves remains
</span><br>
<span class="quotelev3">&gt; &gt;&gt; close to 100% during this time.  Just to be sure, I put the slaves into
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a MPI_Barrier(MPI_COMM_WORLD) while they were waiting for the fftw
</span><br>
<span class="quotelev3">&gt; &gt;&gt; planner to finish.   It also didn't help.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; They still spin (instead of using e.g. select()), but call sched_yield()
</span><br>
<span class="quotelev2">&gt; &gt; so should only be actively spinning when nothing else is trying to run.
</span><br>
<span class="quotelev2">&gt; &gt; Are you sure that the planner is always running in parallel?  What OS
</span><br>
<span class="quotelev2">&gt; &gt; and OMPI version are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sched_yield doesn't work as expected in late 2.6 Linux kernels: <a href="http://kerneltrap.org/Linux/CFS_and_sched_yield">http://kerneltrap.org/Linux/CFS_and_sched_yield</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If this scheduling behavior change is affecting you, you might be able to fix it with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo &quot;1&quot; &gt;/proc/sys/kernel/sched_compat_yield
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13745.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="13743.php">Philippe: "Re: [OMPI users] MPI process dies with a route error when using dynamic process calls to connect more than 2 clients to a server with InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="13735.php">Dave Goodell: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13761.php">Jeff Squyres: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13761.php">Jeff Squyres: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
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
