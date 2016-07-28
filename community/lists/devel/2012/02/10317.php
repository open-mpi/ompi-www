<?
$subject_val = "Re: [OMPI devel] problem running mpirun and orted on same machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 12:49:32 2012" -->
<!-- isoreceived="20120206174932" -->
<!-- sent="Mon, 6 Feb 2012 10:49:23 -0700" -->
<!-- isosent="20120206174923" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem running mpirun and orted on same machine" -->
<!-- id="A315D6E3-AE11-4C5F-9DDA-6A36A7102ED2_at_openmpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F300F50.2090602_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] problem running mpirun and orted on same machine<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-06 12:49:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10318.php">Jeff Squyres: "[OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10316.php">Maurice Feskanich: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>In reply to:</strong> <a href="10316.php">Maurice Feskanich: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2012, at 10:35 AM, Maurice Feskanich wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it always the case that a proc launched local to mpirun uses mpirun as the daemon?
</span><br>
<p>Yes - mpirun knows which procs are local and launches them. You can, however, tell mpirun -not- to use the local node for MPI procs by adding -no-use-local to the cmd line (or set the equiv mca param). Note that no MPI proc will then be launched on the node where mpirun resides if you set that flag.
<br>
<p><span class="quotelev1">&gt;  Our engine is not local to the host that mpirun is on, it just happens to send the task back to that same host, and the grid engine system handles all the process starting.
</span><br>
<p>Guess I'm confused. If SGE is starting the MPI procs, then why are you starting orteds at all? What purpose can they serve if the orteds aren't starting the procs themselves?
<br>
<p><span class="quotelev1">&gt;  If it is the case, is there any particular flag or option I should be using with the orted on the local host to indicate that it is local?
</span><br>
<p>No orted can be local to mpirun - it will confuse the system.
<br>
<p><span class="quotelev1">&gt;  Should I even be starting an orted in this case, and if not, how would I start the proc?  Also, would it be safe to always decrease by one the maximum vpid used with the orteds for the other tasks?
</span><br>
<p>You just need to accurately compute the number of orteds being launched. There is one per node, minus the node where mpirun is executing.
<br>
<p>I'm willing to chat about this on the phone, if it would help. Contact me off-list if you want to do so.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maury
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/03/12 11:24, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; No brilliant suggestion - it sounds like your plugin isn't accurately computing the number of daemons. When a proc is launched local to mpirun, it uses mpirun as the daemon - it doesn't start another daemon on the same node. If your plugin is doing so, or you are computing an extra daemon vpid that doesn't truly exist, then you will have problems.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 3, 2012, at 11:27 AM, Maurice Feskanich wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having a problem with running mpirun when one of the tasks winds up running on the same machine as mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A little background: our system uses a plugin to send tasks to grid engine.  We are currently using version 1.3.4 (we are not able to move to a newer version because of the requirements of the tools that use our system.)  Our code runs on Solaris (both Sparc and X86), and Linux.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What we are seeing is that sometimes mpirun gets a segmentaion violation at line 342 of plm_base_launch_support.c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Investigation has found that mev-&gt;sender.vpid is a number that is one greater than the number of non-nil elements in the pdatorted array.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the dbx stacktrace:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; t_at_1 (l_at_1) program terminated by signal SEGV (no mapping at the fault address)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Current function is process_orted_launch_report (optimized)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  342       pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (dbx) where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current thread: t_at_1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =&gt;[1] process_orted_launch_report(fd = ???, opal_event = ???, data = ???) (optimized), at 0xffffffff7f491e60 (line ~342) in &quot;plm_base_launch_support.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [2] event_process_active(base = ???) (optimized), at 0xffffffff7f241d04 (line ~651) in &quot;event.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [3] opal_event_base_loop(base = ???, flags = ???) (optimized), at 0xffffffff7f242178 (line ~823) in &quot;event.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [4] opal_event_loop(flags = ???) (optimized), at 0xffffffff7f241f98 (line ~730) in &quot;event.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [5] opal_progress() (optimized), at 0xffffffff7f21d484 (line ~189) in &quot;opal_progress.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [6] orte_plm_base_daemon_callback(num_daemons = ???) (optimized), at 0xffffffff7f492388 (line ~459) in &quot;plm_base_launch_support.c&quot;  [7] orte_plm_dream_spawn(0x8f0ac, 0x478560, 0x47868c, 0x12c, 0xffffffff7d305198, 0x8a8c0000), at 0xffffffff7d304a5c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [8] orterun(argc = 11, argv = 0xffffffff7fffede8), line 748 in &quot;orterun.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  [9] main(argc = 11, argv = 0xffffffff7fffede8), line 13 in &quot;main.c&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The vpids we use when we start the orteds are 1-based, but the pdatorted array is zero-based.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help anyone can provide would be very appreciated.  Please don't hesitate to ask questions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maury Feskanich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Oracle, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10318.php">Jeff Squyres: "[OMPI devel] 1.4.5rc5 has been released"</a>
<li><strong>Previous message:</strong> <a href="10316.php">Maurice Feskanich: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>In reply to:</strong> <a href="10316.php">Maurice Feskanich: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
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
