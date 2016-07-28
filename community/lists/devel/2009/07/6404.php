<?
$subject_val = "Re: [OMPI devel] possible bug in 1.3.2 sm transport";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 17:28:55 2009" -->
<!-- isoreceived="20090714212855" -->
<!-- sent="Tue, 14 Jul 2009 15:28:50 -0600" -->
<!-- isosent="20090714212850" -->
<!-- name="Bryan Lally" -->
<!-- email="lally_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bug in 1.3.2 sm transport" -->
<!-- id="4A5CF892.4000206_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A08B388.6000008_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] possible bug in 1.3.2 sm transport<br>
<strong>From:</strong> Bryan Lally (<em>lally_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 17:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6405.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6403.php">Ralph Castain: "[OMPI devel] Fwd: Open MPI v1.3.3 released"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5998.php">Bryan Lally: "[OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Developers,
<br>
<p>I was about to test 1.3.3rc2, then I saw that 1.3.3 had also escaped.  I 
<br>
tried it, and voila!  It solves the issue I reported in May, below.
<br>
<p>Thanks for all the work that went into this.
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
Bryan Lally wrote:
&gt; Developers,
&gt; 
&gt; This is my first post to the openmpi developers list.  I think I've run 
&gt; across a race condition in your latest release.  Since my demonstrator 
&gt; is somewhat large and cumbersome, I'd like to know if you already know 
&gt; about this issue before we start the process of providing code and details.
&gt; 
&gt; Basics: openmpi 1.3.2, Fedora 9, 2 x86_64 quad-core cpus in one machine.
&gt; 
&gt; Symptoms: our code hangs, always in the same vicinity, usually at the 
&gt; same place, 10-25% of the time.  Sometimes more often, sometimes less.
&gt; 
&gt; Our code has run reliably with many MPI implementations for years.  We 
&gt; haven't added anything recently that is a likely culprit.  While we have 
&gt; our own issues, this doesn't feel like one of ours.
&gt; 
&gt; We see that there is new code in the shared memory transport between 
&gt; 1.3.1 and 1.3.2.  Our code doesn't hang with 1.3.1 (nor 1.2.9).  Only 
&gt; with 1.3.2.
&gt; 
&gt; If we switch to tcp for transport (with mpirun --mca btl tcp,self ...) 
&gt; we don't see any hangs.  Running using --mca btl sm,self results in hangs.
&gt; 
&gt; If we sprinkle a few calls (3) to MPI_Barrier in the vicinity of the 
&gt; problem, we no longer see hangs.
&gt; 
&gt; We demonstrate this with 4 processes.  When we attach a debugger to the 
&gt; hung processes, we see that the hang results from an MPI_Allreduce.  All 
&gt; processes have made the same call to MPI_Allreduce.  The processes are 
&gt; all in opal_progress, called (with intervening calls) by MPI_Allreduce.
&gt; 
&gt; My question is, have you seen anything like this before?  If not, what 
&gt; do we do next?
&gt; 
&gt; Thanks.
&gt; 
&gt;     - Bryan
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6405.php">Eugene Loh: "Re: [OMPI devel] [OMPI users] where can i get a tracing tool"</a>
<li><strong>Previous message:</strong> <a href="6403.php">Ralph Castain: "[OMPI devel] Fwd: Open MPI v1.3.3 released"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/05/5998.php">Bryan Lally: "[OMPI devel] possible bug in 1.3.2 sm transport"</a>
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
