<?
$subject_val = "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  8 16:44:33 2011" -->
<!-- isoreceived="20110208214433" -->
<!-- sent="Wed, 9 Feb 2011 08:44:21 +1100" -->
<!-- isosent="20110208214421" -->
<!-- name="Michael Curtis" -->
<!-- email="michael.curtis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with SLURM and non-local nodes" -->
<!-- id="FACCFEED-30ED-4A11-9998-16711ADAF7AA_at_monash.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B50568F9-8F28-4F48-84B7-68684EFC4065_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with SLURM and non-local nodes<br>
<strong>From:</strong> Michael Curtis (<em>michael.curtis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-08 16:44:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15531.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15529.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15526.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15531.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15531.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/02/2011, at 2:17 AM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi Michael,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You may have tried to send some debug information to the list, but it appears to have been blocked.  Compressed text output of the backtrace text is sufficient.
</span><br>
<p><p>Odd, I thought I sent it to you directly.  In any case, here is the backtrace and some information from gdb:
<br>
<p>$ salloc -n16 gdb -args mpirun mpi
<br>
(gdb) run
<br>
Starting program: /mnt/f1/michael/openmpi/bin/mpirun /mnt/f1/michael/home/ServerAdmin/mpi
<br>
[Thread debugging using libthread_db enabled]
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00007ffff7b76869 in process_orted_launch_report (fd=-1, opal_event=1, data=0x681170) at base/plm_base_launch_support.c:342
<br>
342	    pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
<br>
(gdb) bt
<br>
#0  0x00007ffff7b76869 in process_orted_launch_report (fd=-1, opal_event=1, data=0x681170) at base/plm_base_launch_support.c:342
<br>
#1  0x00007ffff78a7338 in event_process_active (base=0x615240) at event.c:651
<br>
#2  0x00007ffff78a797e in opal_event_base_loop (base=0x615240, flags=1) at event.c:823
<br>
#3  0x00007ffff78a756f in opal_event_loop (flags=1) at event.c:730
<br>
#4  0x00007ffff789b916 in opal_progress () at runtime/opal_progress.c:189
<br>
#5  0x00007ffff7b76e20 in orte_plm_base_daemon_callback (num_daemons=2) at base/plm_base_launch_support.c:459
<br>
#6  0x00007ffff7b7bed7 in plm_slurm_launch_job (jdata=0x610560) at plm_slurm_module.c:360
<br>
#7  0x0000000000403f46 in orterun (argc=2, argv=0x7fffffffe7d8) at orterun.c:754
<br>
#8  0x0000000000402fb4 in main (argc=2, argv=0x7fffffffe7d8) at main.c:13
<br>
(gdb) print pdatorted
<br>
$1 = (orte_proc_t **) 0x67c610
<br>
(gdb) print mev
<br>
$2 = (orte_message_event_t *) 0x681550
<br>
(gdb) print mev-&gt;sender.vpid
<br>
$3 = 4294967295
<br>
(gdb) print mev-&gt;sender
<br>
$4 = {jobid = 1721696256, vpid = 4294967295}
<br>
(gdb) print *mev
<br>
$5 = {super = {obj_magic_id = 16046253926196952813, obj_class = 0x7ffff7dd4f40, obj_reference_count = 1, cls_init_file_name = 0x7ffff7bb9a78 &quot;base/plm_base_launch_support.c&quot;, 
<br>
&nbsp;&nbsp;&nbsp;cls_init_lineno = 423}, ev = 0x680850, sender = {jobid = 1721696256, vpid = 4294967295}, buffer = 0x6811b0, tag = 10, file = 0x680640 &quot;rml_oob_component.c&quot;, line = 279}
<br>
<p>That vpid looks suspiciously like -1.
<br>
<p>Further debugging:
<br>
Breakpoint 3, orted_report_launch (status=32767, sender=0x7fffffffe170, buffer=0x7ffff7b1a85f, tag=32767, cbdata=0x612d20) at base/plm_base_launch_support.c:411
<br>
411	{
<br>
(gdb) print sender
<br>
$2 = (orte_process_name_t *) 0x7fffffffe170
<br>
(gdb) print *sender
<br>
$3 = {jobid = 6822016, vpid = 0}
<br>
(gdb) continue
<br>
Continuing.
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly with status 1 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00007ffff7b76869 in process_orted_launch_report (fd=-1, opal_event=1, data=0x681550) at base/plm_base_launch_support.c:342
<br>
342	    pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
<br>
(gdb) print mev-&gt;sender
<br>
$4 = {jobid = 1778450432, vpid = 4294967295}
<br>
<p>The daemon probably died as I spent too long thinking about my gdb input ;)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15531.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15529.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15526.php">Samuel K. Gutierrez: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15531.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15531.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
