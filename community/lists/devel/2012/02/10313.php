<?
$subject_val = "[OMPI devel] problem running mpirun and orted on same machine";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 13:27:57 2012" -->
<!-- isoreceived="20120203182757" -->
<!-- sent="Fri, 03 Feb 2012 10:27:48 -0800" -->
<!-- isosent="20120203182748" -->
<!-- name="Maurice Feskanich" -->
<!-- email="maurice.feskanich_at_[hidden]" -->
<!-- subject="[OMPI devel] problem running mpirun and orted on same machine" -->
<!-- id="4F2C2724.3030506_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] problem running mpirun and orted on same machine<br>
<strong>From:</strong> Maurice Feskanich (<em>maurice.feskanich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 13:27:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10314.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Previous message:</strong> <a href="10312.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10314.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Reply:</strong> <a href="10314.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I'm having a problem with running mpirun when one of the tasks winds up 
<br>
running on the same machine as mpirun.
<br>
<p>A little background: our system uses a plugin to send tasks to grid 
<br>
engine.  We are currently using version 1.3.4 (we are not able to move 
<br>
to a newer version because of the requirements of the tools that use our 
<br>
system.)  Our code runs on Solaris (both Sparc and X86), and Linux.
<br>
<p>What we are seeing is that sometimes mpirun gets a segmentaion violation 
<br>
at line 342 of plm_base_launch_support.c:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
<br>
<p>Investigation has found that mev-&gt;sender.vpid is a number that is one 
<br>
greater than the number of non-nil elements in the pdatorted array.
<br>
<p>Here is the dbx stacktrace:
<br>
<p>t_at_1 (l_at_1) program terminated by signal SEGV (no mapping at the fault 
<br>
address)
<br>
Current function is process_orted_launch_report (optimized)
<br>
&nbsp;&nbsp;&nbsp;342       pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
<br>
(dbx) where
<br>
current thread: t_at_1
<br>
=&gt;[1] process_orted_launch_report(fd = ???, opal_event = ???, data = 
<br>
???) (optimized), at 0xffffffff7f491e60 (line ~342) in 
<br>
&quot;plm_base_launch_support.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[2] event_process_active(base = ???) (optimized), at 
<br>
0xffffffff7f241d04 (line ~651) in &quot;event.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[3] opal_event_base_loop(base = ???, flags = ???) (optimized), at 
<br>
0xffffffff7f242178 (line ~823) in &quot;event.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[4] opal_event_loop(flags = ???) (optimized), at 0xffffffff7f241f98 
<br>
(line ~730) in &quot;event.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[5] opal_progress() (optimized), at 0xffffffff7f21d484 (line ~189) in 
<br>
&quot;opal_progress.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[6] orte_plm_base_daemon_callback(num_daemons = ???) (optimized), at 
<br>
0xffffffff7f492388 (line ~459) in &quot;plm_base_launch_support.c&quot;  [7] 
<br>
orte_plm_dream_spawn(0x8f0ac, 0x478560, 0x47868c, 0x12c, 
<br>
0xffffffff7d305198, 0x8a8c0000), at 0xffffffff7d304a5c
<br>
&nbsp;&nbsp;&nbsp;[8] orterun(argc = 11, argv = 0xffffffff7fffede8), line 748 in 
<br>
&quot;orterun.c&quot;
<br>
&nbsp;&nbsp;&nbsp;[9] main(argc = 11, argv = 0xffffffff7fffede8), line 13 in &quot;main.c&quot;
<br>
<p><p>The vpids we use when we start the orteds are 1-based, but the pdatorted 
<br>
array is zero-based.
<br>
<p>Any help anyone can provide would be very appreciated.  Please don't 
<br>
hesitate to ask questions.
<br>
<p>Thanks,
<br>
<p>Maury Feskanich
<br>
&nbsp;&nbsp;&nbsp;Oracle, Inc.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10314.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Previous message:</strong> <a href="10312.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL]  MPI-3: MPI_GET_LIBRARY_VERSION"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10314.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
<li><strong>Reply:</strong> <a href="10314.php">Ralph Castain: "Re: [OMPI devel] problem running mpirun and orted on same machine"</a>
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
