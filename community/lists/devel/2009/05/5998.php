<?
$subject_val = "[OMPI devel] possible bug in 1.3.2 sm transport";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 19:23:58 2009" -->
<!-- isoreceived="20090511232358" -->
<!-- sent="Mon, 11 May 2009 17:23:52 -0600" -->
<!-- isosent="20090511232352" -->
<!-- name="Bryan Lally" -->
<!-- email="lally_at_[hidden]" -->
<!-- subject="[OMPI devel] possible bug in 1.3.2 sm transport" -->
<!-- id="4A08B388.6000008_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] possible bug in 1.3.2 sm transport<br>
<strong>From:</strong> Bryan Lally (<em>lally_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-11 19:23:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5999.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="5997.php">Josh Hursey: "[OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5999.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="5999.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6404.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Developers,
<br>
<p>This is my first post to the openmpi developers list.  I think I've run 
<br>
across a race condition in your latest release.  Since my demonstrator 
<br>
is somewhat large and cumbersome, I'd like to know if you already know 
<br>
about this issue before we start the process of providing code and details.
<br>
<p>Basics: openmpi 1.3.2, Fedora 9, 2 x86_64 quad-core cpus in one machine.
<br>
<p>Symptoms: our code hangs, always in the same vicinity, usually at the 
<br>
same place, 10-25% of the time.  Sometimes more often, sometimes less.
<br>
<p>Our code has run reliably with many MPI implementations for years.  We 
<br>
haven't added anything recently that is a likely culprit.  While we have 
<br>
our own issues, this doesn't feel like one of ours.
<br>
<p>We see that there is new code in the shared memory transport between 
<br>
1.3.1 and 1.3.2.  Our code doesn't hang with 1.3.1 (nor 1.2.9).  Only 
<br>
with 1.3.2.
<br>
<p>If we switch to tcp for transport (with mpirun --mca btl tcp,self ...) 
<br>
we don't see any hangs.  Running using --mca btl sm,self results in hangs.
<br>
<p>If we sprinkle a few calls (3) to MPI_Barrier in the vicinity of the 
<br>
problem, we no longer see hangs.
<br>
<p>We demonstrate this with 4 processes.  When we attach a debugger to the 
<br>
hung processes, we see that the hang results from an MPI_Allreduce.  All 
<br>
processes have made the same call to MPI_Allreduce.  The processes are 
<br>
all in opal_progress, called (with intervening calls) by MPI_Allreduce.
<br>
<p>My question is, have you seen anything like this before?  If not, what 
<br>
do we do next?
<br>
<p>Thanks.
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5999.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="5997.php">Josh Hursey: "[OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5999.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="5999.php">Eugene Loh: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/07/6404.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
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
