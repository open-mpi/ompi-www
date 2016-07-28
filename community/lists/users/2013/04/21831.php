<?
$subject_val = "Re: [OMPI users] multithreaded jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 10:52:57 2013" -->
<!-- isoreceived="20130430145257" -->
<!-- sent="Tue, 30 Apr 2013 15:52:52 +0100" -->
<!-- isosent="20130430145252" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multithreaded jobs" -->
<!-- id="87ppxcrry3.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9607D8F6-B5B6-4BE5-9F42-B46BFC16CB51_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] multithreaded jobs<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 10:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21832.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21830.php">Dave Love: "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>In reply to:</strong> <a href="21801.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21832.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Reply:</strong> <a href="21832.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On Apr 25, 2013, at 5:33 PM, Vladimir Yamshchikov &lt;yaximik_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $NSLOTS is what requested by -pe openmpi &lt;ARG&gt; in the script, my understanding that by default it is threads.
</span><br>
<p>Is there something in the documentation
<br>
&lt;<a href="http://arc.liv.ac.uk/SGE/htmlman/manuals.html">http://arc.liv.ac.uk/SGE/htmlman/manuals.html</a>&gt; that suggests that?  [It
<br>
currently incorrectly says processes, rather than slots, in at least one
<br>
place I'll fix.]
<br>
<p><span class="quotelev1">&gt; What you want to do is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. request a number of slots = the number of application processes * the number of threads each process will run
</span><br>
<p>[If really necessary, maybe use a job submission verifier to fiddle what
<br>
the user supplies.]
<br>
<p><span class="quotelev1">&gt; 2. execute mpirun with the --cpus-per-proc N option, where N = the number of threads each process will run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will ensure you have one core for each thread. Note, however,
</span><br>
<span class="quotelev1">&gt; that we don't actually bind a thread to the core - so having more
</span><br>
<span class="quotelev1">&gt; threads than there are cores on a socket can cause a thread to bounce
</span><br>
<span class="quotelev1">&gt; across sockets and (therefore) potentially across NUMA regions.
</span><br>
<p>Does that mean that binding is suppressed in that case, as opposed to
<br>
binding N cores per process, which is what I thought it did?  (I can't
<br>
immediately test it.)
<br>
<p>I don't understand the problem in this specific case which causes
<br>
over-subscription.  However, if the program's runtime needs instruction,
<br>
you can do things like setting OMP_NUM_THREADS with an SGE JSV; see
<br>
archives of the gridengine list.  (The SGE_BINDING variable that recent
<br>
SGE provides to the job can be converted to GOMP_CPU_AFFINITY etc., but
<br>
that's probably only useful for single-process jobs.)
<br>
<p>There may be a case for OMPI to support this sort of thing for DRMs like
<br>
SGE which don't start the MPI processes themselves; you potentially need
<br>
to export the binding information per-process.
<br>
<p><pre>
-- 
Community Grid Engine:  <a href="http://arc.liv.ac.uk/SGE/">http://arc.liv.ac.uk/SGE/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21832.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Previous message:</strong> <a href="21830.php">Dave Love: "Re: [OMPI users] Problem with Openmpi-1.4.0 and qlogic-ofed-1.5.4.1"</a>
<li><strong>In reply to:</strong> <a href="21801.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21832.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>Reply:</strong> <a href="21832.php">Ralph Castain: "Re: [OMPI users] multithreaded jobs"</a>
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
