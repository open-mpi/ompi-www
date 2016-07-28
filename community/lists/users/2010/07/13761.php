<?
$subject_val = "Re: [OMPI users] Do MPI calls ever sleep?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 23 07:26:54 2010" -->
<!-- isoreceived="20100723112654" -->
<!-- sent="Fri, 23 Jul 2010 07:27:33 -0400" -->
<!-- isosent="20100723112733" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Do MPI calls ever sleep?" -->
<!-- id="955D4811-DD1F-492E-B94E-22E351CE8070_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1279814603.934.3.camel_at_ronispc.chem.mcgill.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-23 07:27:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13762.php">Alexandru Blidaru: "[OMPI users] Communication between objects on different nodes"</a>
<li><strong>Previous message:</strong> <a href="13760.php">Jeff Squyres: "Re: [OMPI users] OpenMPI killed by signal 9"</a>
<li><strong>In reply to:</strong> <a href="13744.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13804.php">Barrett, Brian W: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13804.php">Barrett, Brian W: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should we replace OMPI's use of sched_yield() with usleep()?
<br>
<p>David -- could you try replacing the call to sched_yield() in opal/runtime/opal_progress.c (somewhere around line 220) to usleep(1) and see if that gives the behavior that you want (without twonking a /proc value)?  You might also have to add &quot;#include &lt;unistd.h&gt;&quot; at the top of the file.
<br>
<p><p><p>On Jul 22, 2010, at 12:03 PM, David Ronis wrote:
<br>
<p><span class="quotelev1">&gt; That did it.  Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 2010-07-21 at 15:29 -0500, Dave Goodell wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 21, 2010, at 2:54 PM CDT, Jed Brown wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, 21 Jul 2010 15:20:24 -0400, David Ronis &lt;David.Ronis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi Jed,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks for the reply and suggestion.  I tried adding -mca
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; yield_when_idle 1 (and later mpi_yield_when_idle 1 which is what
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ompi_info reports the variable as) but it seems to have had 0 effect.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; My master goes into fftw planning routines for a minute or so (I see the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; threads being created), but the overall usage of the slaves remains
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; close to 100% during this time.  Just to be sure, I put the slaves into
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; a MPI_Barrier(MPI_COMM_WORLD) while they were waiting for the fftw
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; planner to finish.   It also didn't help.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; They still spin (instead of using e.g. select()), but call sched_yield()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; so should only be actively spinning when nothing else is trying to run.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Are you sure that the planner is always running in parallel?  What OS
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and OMPI version are you using?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; sched_yield doesn't work as expected in late 2.6 Linux kernels: <a href="http://kerneltrap.org/Linux/CFS_and_sched_yield">http://kerneltrap.org/Linux/CFS_and_sched_yield</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If this scheduling behavior change is affecting you, you might be able to fix it with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; echo &quot;1&quot; &gt;/proc/sys/kernel/sched_compat_yield
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Dave
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="13762.php">Alexandru Blidaru: "[OMPI users] Communication between objects on different nodes"</a>
<li><strong>Previous message:</strong> <a href="13760.php">Jeff Squyres: "Re: [OMPI users] OpenMPI killed by signal 9"</a>
<li><strong>In reply to:</strong> <a href="13744.php">David Ronis: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13804.php">Barrett, Brian W: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<li><strong>Reply:</strong> <a href="13804.php">Barrett, Brian W: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
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
