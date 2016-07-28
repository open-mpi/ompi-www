<?
$subject_val = "Re: [OMPI users] multithreaded jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 30 12:45:47 2013" -->
<!-- isoreceived="20130430164547" -->
<!-- sent="Tue, 30 Apr 2013 09:45:40 -0700" -->
<!-- isosent="20130430164540" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multithreaded jobs" -->
<!-- id="338264F6-D3EB-4806-BA11-DDD93FF7D834_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87ppxcrry3.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-30 12:45:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21833.php">Vladimir Yamshchikov: "[OMPI users] job termination on grid"</a>
<li><strong>Previous message:</strong> <a href="21831.php">Dave Love: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>In reply to:</strong> <a href="21831.php">Dave Love: "Re: [OMPI users] multithreaded jobs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2013, at 7:52 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2013, at 5:33 PM, Vladimir Yamshchikov &lt;yaximik_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $NSLOTS is what requested by -pe openmpi &lt;ARG&gt; in the script, my understanding that by default it is threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there something in the documentation
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://arc.liv.ac.uk/SGE/htmlman/manuals.html">http://arc.liv.ac.uk/SGE/htmlman/manuals.html</a>&gt; that suggests that?  [It
</span><br>
<span class="quotelev1">&gt; currently incorrectly says processes, rather than slots, in at least one
</span><br>
<span class="quotelev1">&gt; place I'll fix.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What you want to do is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. request a number of slots = the number of application processes * the number of threads each process will run
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [If really necessary, maybe use a job submission verifier to fiddle what
</span><br>
<span class="quotelev1">&gt; the user supplies.]
</span><br>
<p>?? We have no way of knowing how many threads a process will start, so the user has to take that responsibility
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. execute mpirun with the --cpus-per-proc N option, where N = the number of threads each process will run.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will ensure you have one core for each thread. Note, however,
</span><br>
<span class="quotelev2">&gt;&gt; that we don't actually bind a thread to the core - so having more
</span><br>
<span class="quotelev2">&gt;&gt; threads than there are cores on a socket can cause a thread to bounce
</span><br>
<span class="quotelev2">&gt;&gt; across sockets and (therefore) potentially across NUMA regions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that mean that binding is suppressed in that case, as opposed to
</span><br>
<span class="quotelev1">&gt; binding N cores per process, which is what I thought it did?  (I can't
</span><br>
<span class="quotelev1">&gt; immediately test it.)
</span><br>
<p>No, we do what the user requests. We will bind the process to the N cores - if those cores span sockets, that is the responsibility of the user. We try to keep it all together, but if you ask for too many...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand the problem in this specific case which causes
</span><br>
<span class="quotelev1">&gt; over-subscription.  However, if the program's runtime needs instruction,
</span><br>
<span class="quotelev1">&gt; you can do things like setting OMP_NUM_THREADS with an SGE JSV; see
</span><br>
<span class="quotelev1">&gt; archives of the gridengine list.  (The SGE_BINDING variable that recent
</span><br>
<span class="quotelev1">&gt; SGE provides to the job can be converted to GOMP_CPU_AFFINITY etc., but
</span><br>
<span class="quotelev1">&gt; that's probably only useful for single-process jobs.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be a case for OMPI to support this sort of thing for DRMs like
</span><br>
<span class="quotelev1">&gt; SGE which don't start the MPI processes themselves; you potentially need
</span><br>
<span class="quotelev1">&gt; to export the binding information per-process.
</span><br>
<p>I'm unaware of any OS that currently binds at the process thread level. Can you refer us to something?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Community Grid Engine:  <a href="http://arc.liv.ac.uk/SGE/">http://arc.liv.ac.uk/SGE/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21833.php">Vladimir Yamshchikov: "[OMPI users] job termination on grid"</a>
<li><strong>Previous message:</strong> <a href="21831.php">Dave Love: "Re: [OMPI users] multithreaded jobs"</a>
<li><strong>In reply to:</strong> <a href="21831.php">Dave Love: "Re: [OMPI users] multithreaded jobs"</a>
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
