<?
$subject_val = "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  8 17:16:16 2011" -->
<!-- isoreceived="20110208221616" -->
<!-- sent="Tue, 8 Feb 2011 15:16:05 -0700" -->
<!-- isosent="20110208221605" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with SLURM and non-local nodes" -->
<!-- id="183A55AC-AA44-4C32-B729-2501535FDF8E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FACCFEED-30ED-4A11-9998-16711ADAF7AA_at_monash.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-08 17:16:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15532.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15530.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15530.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15532.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15532.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See below
<br>
<p><p>On Feb 8, 2011, at 2:44 PM, Michael Curtis wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 09/02/2011, at 2:17 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Michael,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You may have tried to send some debug information to the list, but it appears to have been blocked.  Compressed text output of the backtrace text is sufficient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Odd, I thought I sent it to you directly.  In any case, here is the backtrace and some information from gdb:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ salloc -n16 gdb -args mpirun mpi
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /mnt/f1/michael/openmpi/bin/mpirun /mnt/f1/michael/home/ServerAdmin/mpi
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00007ffff7b76869 in process_orted_launch_report (fd=-1, opal_event=1, data=0x681170) at base/plm_base_launch_support.c:342
</span><br>
<span class="quotelev1">&gt; 342	    pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007ffff7b76869 in process_orted_launch_report (fd=-1, opal_event=1, data=0x681170) at base/plm_base_launch_support.c:342
</span><br>
<span class="quotelev1">&gt; #1  0x00007ffff78a7338 in event_process_active (base=0x615240) at event.c:651
</span><br>
<span class="quotelev1">&gt; #2  0x00007ffff78a797e in opal_event_base_loop (base=0x615240, flags=1) at event.c:823
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff78a756f in opal_event_loop (flags=1) at event.c:730
</span><br>
<span class="quotelev1">&gt; #4  0x00007ffff789b916 in opal_progress () at runtime/opal_progress.c:189
</span><br>
<span class="quotelev1">&gt; #5  0x00007ffff7b76e20 in orte_plm_base_daemon_callback (num_daemons=2) at base/plm_base_launch_support.c:459
</span><br>
<span class="quotelev1">&gt; #6  0x00007ffff7b7bed7 in plm_slurm_launch_job (jdata=0x610560) at plm_slurm_module.c:360
</span><br>
<span class="quotelev1">&gt; #7  0x0000000000403f46 in orterun (argc=2, argv=0x7fffffffe7d8) at orterun.c:754
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000402fb4 in main (argc=2, argv=0x7fffffffe7d8) at main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb) print pdatorted
</span><br>
<span class="quotelev1">&gt; $1 = (orte_proc_t **) 0x67c610
</span><br>
<span class="quotelev1">&gt; (gdb) print mev
</span><br>
<span class="quotelev1">&gt; $2 = (orte_message_event_t *) 0x681550
</span><br>
<span class="quotelev1">&gt; (gdb) print mev-&gt;sender.vpid
</span><br>
<span class="quotelev1">&gt; $3 = 4294967295
</span><br>
<span class="quotelev1">&gt; (gdb) print mev-&gt;sender
</span><br>
<span class="quotelev1">&gt; $4 = {jobid = 1721696256, vpid = 4294967295}
</span><br>
<span class="quotelev1">&gt; (gdb) print *mev
</span><br>
<span class="quotelev1">&gt; $5 = {super = {obj_magic_id = 16046253926196952813, obj_class = 0x7ffff7dd4f40, obj_reference_count = 1, cls_init_file_name = 0x7ffff7bb9a78 &quot;base/plm_base_launch_support.c&quot;, 
</span><br>
<span class="quotelev1">&gt;   cls_init_lineno = 423}, ev = 0x680850, sender = {jobid = 1721696256, vpid = 4294967295}, buffer = 0x6811b0, tag = 10, file = 0x680640 &quot;rml_oob_component.c&quot;, line = 279}
</span><br>
<p>The jobid and vpid look like the defined INVALID values, indicating that something is quite wrong. This would quite likely lead to the segfault.
<br>
<p><span class="quotelev1">&gt;From this, it would indeed appear that you are getting some kind of library confusion - the most likely cause of such an error is a daemon from a different version trying to respond, and so the returned message isn't correct.
</span><br>
<p>Not sure why else it would be happening...you could try setting -mca plm_base_verbose 5 to get more debug output displayed on your screen, assuming you built OMPI with --enable-debug.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That vpid looks suspiciously like -1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Further debugging:
</span><br>
<span class="quotelev1">&gt; Breakpoint 3, orted_report_launch (status=32767, sender=0x7fffffffe170, buffer=0x7ffff7b1a85f, tag=32767, cbdata=0x612d20) at base/plm_base_launch_support.c:411
</span><br>
<span class="quotelev1">&gt; 411	{
</span><br>
<span class="quotelev1">&gt; (gdb) print sender
</span><br>
<span class="quotelev1">&gt; $2 = (orte_process_name_t *) 0x7fffffffe170
</span><br>
<span class="quotelev1">&gt; (gdb) print *sender
</span><br>
<span class="quotelev1">&gt; $3 = {jobid = 6822016, vpid = 0}
</span><br>
<span class="quotelev1">&gt; (gdb) continue
</span><br>
<span class="quotelev1">&gt; Continuing.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00007ffff7b76869 in process_orted_launch_report (fd=-1, opal_event=1, data=0x681550) at base/plm_base_launch_support.c:342
</span><br>
<span class="quotelev1">&gt; 342	    pdatorted[mev-&gt;sender.vpid]-&gt;state = ORTE_PROC_STATE_RUNNING;
</span><br>
<span class="quotelev1">&gt; (gdb) print mev-&gt;sender
</span><br>
<span class="quotelev1">&gt; $4 = {jobid = 1778450432, vpid = 4294967295}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The daemon probably died as I spent too long thinking about my gdb input ;)
</span><br>
<p>I'm not sure why that would happen - there are no timers in the system, so it won't care how long it takes to initialize. I'm guessing this is another indicator of a library issue.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="15532.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15530.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>In reply to:</strong> <a href="15530.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15532.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Reply:</strong> <a href="15532.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
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
