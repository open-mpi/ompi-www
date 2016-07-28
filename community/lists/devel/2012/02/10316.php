<?
$subject_val = "Re: [OMPI devel] problem running mpirun and orted on same machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 12:35:26 2012" -->
<!-- isoreceived="20120206173526" -->
<!-- sent="Mon, 06 Feb 2012 09:35:12 -0800" -->
<!-- isosent="20120206173512" -->
<!-- name="Maurice Feskanich" -->
<!-- email="maurice.feskanich_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problem running mpirun and orted on same machine" -->
<!-- id="4F300F50.2090602_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D93FB776-5EFD-4E1B-9984-F44791EBE405_at_openmpi.org" -->
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
<strong>From:</strong> Maurice Feskanich (<em>maurice.feskanich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-06 12:35:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10317.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Previous message:</strong> <a href="10315.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10314.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10317.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Reply:</strong> <a href="10317.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Is it always the case that a proc launched local to mpirun uses mpirun 
<br>
as the daemon?  Our engine is not local to the host that mpirun is on, 
<br>
it just happens to send the task back to that same host, and the grid 
<br>
engine system handles all the process starting.  If it is the case, is 
<br>
there any particular flag or option I should be using with the orted on 
<br>
the local host to indicate that it is local?  Should I even be starting 
<br>
an orted in this case, and if not, how would I start the proc?  Also, 
<br>
would it be safe to always decrease by one the maximum vpid used with 
<br>
the orteds for the other tasks?
<br>
<p>Thanks,
<br>
<p>Maury
<br>
<p><p>On 02/03/12 11:24, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; No brilliant suggestion - it sounds like your plugin isn't accurately computing the number of daemons. When a proc is launched local to mpirun, it uses mpirun as the daemon - it doesn't start another daemon on the same node. If your plugin is doing so, or you are computing an extra daemon vpid that doesn't truly exist, then you will have problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 3, 2012, at 11:27 AM, Maurice Feskanich wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having a problem with running mpirun when one of the tasks winds up running on the same machine as mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A little background: our system uses a plugin to send tasks to grid engine.  We are currently using version 1.3.4 (we are not able to move to a newer version because of the requirements of the tools that use our system.)  Our code runs on Solaris (both Sparc and X86), and Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What we are seeing is that sometimes mpirun gets a segmentaion violation at line 342 of plm_base_launch_support.c:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Investigation has found that mev-&gt;sender.vpid is a number that is one greater than the number of non-nil elements in the pdatorted array.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the dbx stacktrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; t_at_1 (l_at_1) program terminated by signal SEGV (no mapping at the fault address)
</span><br>
<span class="quotelev2">&gt;&gt; Current function is process_orted_launch_report (optimized)
</span><br>
<span class="quotelev2">&gt;&gt;   342       pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev2">&gt;&gt; (dbx) where
</span><br>
<span class="quotelev2">&gt;&gt; current thread: t_at_1
</span><br>
<span class="quotelev2">&gt;&gt; =&gt;[1] process_orted_launch_report(fd = ???, opal_event = ???, data = ???) (optimized), at 0xffffffff7f491e60 (line ~342) in &quot;plm_base_launch_support.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [2] event_process_active(base = ???) (optimized), at 0xffffffff7f241d04 (line ~651) in &quot;event.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [3] opal_event_base_loop(base = ???, flags = ???) (optimized), at 0xffffffff7f242178 (line ~823) in &quot;event.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [4] opal_event_loop(flags = ???) (optimized), at 0xffffffff7f241f98 (line ~730) in &quot;event.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [5] opal_progress() (optimized), at 0xffffffff7f21d484 (line ~189) in &quot;opal_progress.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [6] orte_plm_base_daemon_callback(num_daemons = ???) (optimized), at 0xffffffff7f492388 (line ~459) in &quot;plm_base_launch_support.c&quot;  [7] orte_plm_dream_spawn(0x8f0ac, 0x478560, 0x47868c, 0x12c, 0xffffffff7d305198, 0x8a8c0000), at 0xffffffff7d304a5c
</span><br>
<span class="quotelev2">&gt;&gt;   [8] orterun(argc = 11, argv = 0xffffffff7fffede8), line 748 in &quot;orterun.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   [9] main(argc = 11, argv = 0xffffffff7fffede8), line 13 in &quot;main.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The vpids we use when we start the orteds are 1-based, but the pdatorted array is zero-based.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help anyone can provide would be very appreciated.  Please don't hesitate to ask questions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maury Feskanich
</span><br>
<span class="quotelev2">&gt;&gt;   Oracle, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10317.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Previous message:</strong> <a href="10315.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10314.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10317.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Reply:</strong> <a href="10317.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
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
