<?
$subject_val = "Re: [OMPI devel] Hang in collectives involving shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 15:39:33 2009" -->
<!-- isoreceived="20090616193933" -->
<!-- sent="Tue, 16 Jun 2009 13:39:29 -0600" -->
<!-- isosent="20090616193929" -->
<!-- name="Bryan Lally" -->
<!-- email="lally_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Hang in collectives involving shared memory" -->
<!-- id="4A37F4F1.6070902_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1245090577.5220.524.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Hang in collectives involving shared memory<br>
<strong>From:</strong> Bryan Lally (<em>lally_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 15:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6247.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6245.php">Nifty Tom Mitchell: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6240.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6247.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6247.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; Whilst the fact that it appears to only happen on your machine implies
</span><br>
<span class="quotelev1">&gt; it's not a general problem with OpenMPI the fact that it happens in the
</span><br>
<span class="quotelev1">&gt; same location/rep count every time does swing the blame back the other
</span><br>
<span class="quotelev1">&gt; way.
</span><br>
<p>This sounds a _lot_ like the problem I was seeing, my initial message is 
<br>
appended here.  If it's the same thing, then it's not only on the big 
<br>
machines here that Ralph was talking about, but on very vanilla Fedora 7 
<br>
and 9 boxes.
<br>
<p>I was able to hang Ralph's reproducer on an 8 core Dell, Fedora 9, 
<br>
kernel 2.6.27(.4-78.2.53.fc9.x86_64).
<br>
<p>I don't think it's just the one machine and it's configuration.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Bryan
<br>
<p><pre>
-- 
Bryan Lally, lally_at_[hidden]
505.667.9954
CCS-2
Los Alamos National Laboratory
Los Alamos, New Mexico
Developers,
This is my first post to the openmpi developers list.  I think I've run 
across a race condition in your latest release.  Since my demonstrator 
is somewhat large and cumbersome, I'd like to know if you already know 
about this issue before we start the process of providing code and details.
Basics: openmpi 1.3.2, Fedora 9, 2 x86_64 quad-core cpus in one machine.
Symptoms: our code hangs, always in the same vicinity, usually at the 
same place, 10-25% of the time.  Sometimes more often, sometimes less.
Our code has run reliably with many MPI implementations for years.  We 
haven't added anything recently that is a likely culprit.  While we have 
our own issues, this doesn't feel like one of ours.
We see that there is new code in the shared memory transport between 
1.3.1 and 1.3.2.  Our code doesn't hang with 1.3.1 (nor 1.2.9).  Only 
with 1.3.2.
If we switch to tcp for transport (with mpirun --mca btl tcp,self ...) 
we don't see any hangs.  Running using --mca btl sm,self results in hangs.
If we sprinkle a few calls (3) to MPI_Barrier in the vicinity of the 
problem, we no longer see hangs.
We demonstrate this with 4 processes.  When we attach a debugger to the 
hung processes, we see that the hang results from an MPI_Allreduce.  All 
processes have made the same call to MPI_Allreduce.  The processes are 
all in opal_progress, called (with intervening calls) by MPI_Allreduce.
My question is, have you seen anything like this before?  If not, what 
do we do next?
Thanks.
     - Bryan
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6247.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6245.php">Nifty Tom Mitchell: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6240.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6247.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Reply:</strong> <a href="6247.php">Ashley Pittman: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
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
