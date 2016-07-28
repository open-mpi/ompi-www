<?
$subject_val = "Re: [OMPI users] Do MPI calls ever sleep?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 15:26:52 2010" -->
<!-- isoreceived="20100727192652" -->
<!-- sent="Tue, 27 Jul 2010 13:26:38 -0600" -->
<!-- isosent="20100727192638" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Do MPI calls ever sleep?" -->
<!-- id="CE17F0E6-E639-4C2B-95B9-6924E34FE0AB_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="955D4811-DD1F-492E-B94E-22E351CE8070_at_cisco.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 15:26:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13805.php">Edgar Gabriel: "Re: [OMPI users] Dynamic processes connection and segfault on	MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13803.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13761.php">Jeff Squyres: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13731.php">Douglas Guptill: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, we really shouldn't.  Having just fought with a program using usleep(1) which was behaving even worse, working around this particular inability of the Linux kernel development team to do something sane will only lead to more pain.  There are no good options, so the best option is to not try to work around a (hopefully temporary) stupidity in the Linux kernel.
<br>
<p>Brian
<br>
<p>On Jul 23, 2010, at 5:27 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Should we replace OMPI's use of sched_yield() with usleep()?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David -- could you try replacing the call to sched_yield() in opal/runtime/opal_progress.c (somewhere around line 220) to usleep(1) and see if that gives the behavior that you want (without twonking a /proc value)?  You might also have to add &quot;#include &lt;unistd.h&gt;&quot; at the top of the file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 22, 2010, at 12:03 PM, David Ronis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That did it.  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 2010-07-21 at 15:29 -0500, Dave Goodell wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 21, 2010, at 2:54 PM CDT, Jed Brown wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, 21 Jul 2010 15:20:24 -0400, David Ronis &lt;David.Ronis_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Jed,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for the reply and suggestion.  I tried adding -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; yield_when_idle 1 (and later mpi_yield_when_idle 1 which is what
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_info reports the variable as) but it seems to have had 0 effect.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My master goes into fftw planning routines for a minute or so (I see the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; threads being created), but the overall usage of the slaves remains
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; close to 100% during this time.  Just to be sure, I put the slaves into
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a MPI_Barrier(MPI_COMM_WORLD) while they were waiting for the fftw
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; planner to finish.   It also didn't help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; They still spin (instead of using e.g. select()), but call sched_yield()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so should only be actively spinning when nothing else is trying to run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you sure that the planner is always running in parallel?  What OS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and OMPI version are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sched_yield doesn't work as expected in late 2.6 Linux kernels: <a href="http://kerneltrap.org/Linux/CFS_and_sched_yield">http://kerneltrap.org/Linux/CFS_and_sched_yield</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If this scheduling behavior change is affecting you, you might be able to fix it with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo &quot;1&quot; &gt;/proc/sys/kernel/sched_compat_yield
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Dave
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><pre>
--
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13805.php">Edgar Gabriel: "Re: [OMPI users] Dynamic processes connection and segfault on	MPI_Comm_accept"</a>
<li><strong>Previous message:</strong> <a href="13803.php">Ralph Castain: "Re: [OMPI users] Dynamic processes connection and segfault on MPI_Comm_accept"</a>
<li><strong>In reply to:</strong> <a href="13761.php">Jeff Squyres: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13731.php">Douglas Guptill: "Re: [OMPI users] Do MPI calls ever sleep?"</a>
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
