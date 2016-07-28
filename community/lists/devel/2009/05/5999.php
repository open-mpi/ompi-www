<?
$subject_val = "Re: [OMPI devel] possible bug in 1.3.2 sm transport";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 11 20:09:22 2009" -->
<!-- isoreceived="20090512000922" -->
<!-- sent="Mon, 11 May 2009 17:09:01 -0700" -->
<!-- isosent="20090512000901" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] possible bug in 1.3.2 sm transport" -->
<!-- id="4A08BE1D.1030108_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-11 20:09:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6000.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="5998.php">Bryan Lally: "[OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>In reply to:</strong> <a href="5998.php">Bryan Lally: "[OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6000.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="6000.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bryan Lally wrote:
<br>
<p><span class="quotelev1">&gt; I think I've run across a race condition in your latest release.  
</span><br>
<span class="quotelev1">&gt; Since my demonstrator is somewhat large and cumbersome, I'd like to 
</span><br>
<span class="quotelev1">&gt; know if you already know about this issue before we start the process 
</span><br>
<span class="quotelev1">&gt; of providing code and details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basics: openmpi 1.3.2, Fedora 9, 2 x86_64 quad-core cpus in one machine.
</span><br>
<span class="quotelev1">&gt; Symptoms: our code hangs, always in the same vicinity, usually at the 
</span><br>
<span class="quotelev1">&gt; same place, 10-25% of the time.  Sometimes more often, sometimes less.
</span><br>
<span class="quotelev1">&gt; Our code has run reliably with many MPI implementations for years.  We 
</span><br>
<span class="quotelev1">&gt; haven't added anything recently that is a likely culprit.  While we 
</span><br>
<span class="quotelev1">&gt; have our own issues, this doesn't feel like one of ours.
</span><br>
<span class="quotelev1">&gt; We see that there is new code in the shared memory transport between 
</span><br>
<span class="quotelev1">&gt; 1.3.1 and 1.3.2.  Our code doesn't hang with 1.3.1 (nor 1.2.9).  Only 
</span><br>
<span class="quotelev1">&gt; with 1.3.2.
</span><br>
<span class="quotelev1">&gt; If we switch to tcp for transport (with mpirun --mca btl tcp,self ...) 
</span><br>
<span class="quotelev1">&gt; we don't see any hangs.  Running using --mca btl sm,self results in 
</span><br>
<span class="quotelev1">&gt; hangs.
</span><br>
<span class="quotelev1">&gt; If we sprinkle a few calls (3) to MPI_Barrier in the vicinity of the 
</span><br>
<span class="quotelev1">&gt; problem, we no longer see hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We demonstrate this with 4 processes.  When we attach a debugger to 
</span><br>
<span class="quotelev1">&gt; the hung processes, we see that the hang results from an 
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce.  All processes have made the same call to 
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce.  The processes are all in opal_progress, called (with 
</span><br>
<span class="quotelev1">&gt; intervening calls) by MPI_Allreduce.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is, have you seen anything like this before?  If not, what 
</span><br>
<span class="quotelev1">&gt; do we do next?
</span><br>
<p>Another user reports something somewhat similar at 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/04/9154.php">http://www.open-mpi.org/community/lists/users/2009/04/9154.php</a> .  That 
<br>
problem seems to be associated with GCC 4.4.0.  What compiler are you using?
<br>
<p>In some test runs, we see some MPI_Allreduce hangs, but only after about 
<br>
40K trials (rather than 10-25% of the time).
<br>
<p>So, it may be that others have seen what you are seeing, but we don't (I 
<br>
don't) currently understand what's going on.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6000.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Previous message:</strong> <a href="5998.php">Bryan Lally: "[OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>In reply to:</strong> <a href="5998.php">Bryan Lally: "[OMPI devel] possible bug in 1.3.2 sm transport"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6000.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
<li><strong>Reply:</strong> <a href="6000.php">Bryan Lally: "Re: [OMPI devel] possible bug in 1.3.2 sm transport"</a>
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
