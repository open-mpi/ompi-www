<?
$subject_val = "Re: [OMPI users] Do MPI calls ever sleep?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 16:29:51 2010" -->
<!-- isoreceived="20100721202951" -->
<!-- sent="Wed, 21 Jul 2010 15:29:46 -0500" -->
<!-- isosent="20100721202946" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Do MPI calls ever sleep?" -->
<!-- id="ED2F0EAD-3FD0-46E8-9B74-DA4B496B598F_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="874ofslier.fsf_at_59A2.org" -->
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
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 16:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13736.php">Juan Francisco Alvarez Urquijo: "[OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
<li><strong>Previous message:</strong> <a href="13734.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13733.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13744.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13744.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 21, 2010, at 2:54 PM CDT, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 21 Jul 2010 15:20:24 -0400, David Ronis &lt;David.Ronis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jed,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply and suggestion.  I tried adding -mca
</span><br>
<span class="quotelev2">&gt;&gt; yield_when_idle 1 (and later mpi_yield_when_idle 1 which is what
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info reports the variable as) but it seems to have had 0 effect.
</span><br>
<span class="quotelev2">&gt;&gt; My master goes into fftw planning routines for a minute or so (I see the
</span><br>
<span class="quotelev2">&gt;&gt; threads being created), but the overall usage of the slaves remains
</span><br>
<span class="quotelev2">&gt;&gt; close to 100% during this time.  Just to be sure, I put the slaves into
</span><br>
<span class="quotelev2">&gt;&gt; a MPI_Barrier(MPI_COMM_WORLD) while they were waiting for the fftw
</span><br>
<span class="quotelev2">&gt;&gt; planner to finish.   It also didn't help.
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
<p>sched_yield doesn't work as expected in late 2.6 Linux kernels: <a href="http://kerneltrap.org/Linux/CFS_and_sched_yield">http://kerneltrap.org/Linux/CFS_and_sched_yield</a>
<br>
<p>If this scheduling behavior change is affecting you, you might be able to fix it with:
<br>
<p>echo &quot;1&quot; &gt;/proc/sys/kernel/sched_compat_yield
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13736.php">Juan Francisco Alvarez Urquijo: "[OMPI users] How to launch mpirun 1.4.2 with --no-daemonize argument in order to run pvserver, is there an equivalent flag??"</a>
<li><strong>Previous message:</strong> <a href="13734.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>In reply to:</strong> <a href="13733.php">Jed Brown: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13744.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13744.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
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
