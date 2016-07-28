<?
$subject_val = "Re: [OMPI users] ompi-checkpoint is hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 08:48:55 2008" -->
<!-- isoreceived="20081031124855" -->
<!-- sent="Fri, 31 Oct 2008 08:48:50 -0400" -->
<!-- isosent="20081031124850" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-checkpoint is hanging" -->
<!-- id="ea86ce220810310548n3d4f35aapac516e3cc9e253fa_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="490AF7B2.8050702_at_cs.tu-berlin.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-checkpoint is hanging<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 08:48:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7155.php">Antonio Molins: "Re: [OMPI users] Issues with MPI_Type_create_darray"</a>
<li><strong>Previous message:</strong> <a href="7153.php">Bertrand P. S. Russell: "[OMPI users] unsubscibe"</a>
<li><strong>In reply to:</strong> <a href="7152.php">Matthias Hovestadt: "[OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7156.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Reply:</strong> <a href="7156.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Matthias,
<br>
Hopefully Josh will chime in shortly.  But I have one suggestion to
<br>
help diagnose
<br>
this.  Could you try running your two MPI jobs with fewer procs each,
<br>
say 2 or 3 each instead of 4, so that there are a few extra cores available.
<br>
I know that isn't a solution, but it may help us diagnose what is going on.
<br>
(It may not be a true hang, but very very slow progress that you are observing.)
<br>
<p>Also, what happens to the checkpointing of one MPI job if you kill the
<br>
other MPI job
<br>
after the first &quot;hangs&quot;?
<br>
<p>On Fri, Oct 31, 2008 at 8:18 AM, Matthias Hovestadt
<br>
&lt;maho_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using the development version of OMPI from SVN (rev. 19857)
</span><br>
<span class="quotelev1">&gt; for executing MPI jobs on my cluster system. I'm particularly using
</span><br>
<span class="quotelev1">&gt; the checkpoint and restart feature, basing on the currentmost version
</span><br>
<span class="quotelev1">&gt; of BLCR.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The checkpointing is working pretty fine as long as I only execute
</span><br>
<span class="quotelev1">&gt; a single job on a node. If more than one MPI application is executing
</span><br>
<span class="quotelev1">&gt; on a system, ompi-checkpoint sometimes does not return, hanging forever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example: checkpointing with a single running application
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using the MPI-enabled flavor of Povray as demo application. So I'm
</span><br>
<span class="quotelev1">&gt; starting it on a node using the following command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun -np 4 mpi-x-povray +I planet.pov -w1200 -h1000 +SP1 \
</span><br>
<span class="quotelev1">&gt;  +O planet.tga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This gives me 4 MPI processes, all running on the local node.
</span><br>
<span class="quotelev1">&gt; checkpointing it with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi-checkpoint -v --term 7022
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (where 7022 is the PID of the mpirun process) gives me a checkpoint
</span><br>
<span class="quotelev1">&gt; dataset ompi_global_snapshot_7022.ckpt, that can be used for restarting
</span><br>
<span class="quotelev1">&gt; the job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ompi-checkpoint command gives the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480]     PID 7022
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480]     Connected to Mpirun [[2899,0],0]
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480]     Terminating after checkpoint
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: notify_hnp: Contact
</span><br>
<span class="quotelev1">&gt; Head Node Process PID 7022
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: notify_hnp: Requested
</span><br>
<span class="quotelev1">&gt; a checkpoint of jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: Receive
</span><br>
<span class="quotelev1">&gt; a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: Status
</span><br>
<span class="quotelev1">&gt; Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480]                 Requested - Global
</span><br>
<span class="quotelev1">&gt; Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: Receive
</span><br>
<span class="quotelev1">&gt; a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: Status
</span><br>
<span class="quotelev1">&gt; Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480]     Pending (Termination) - Global
</span><br>
<span class="quotelev1">&gt; Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: Receive
</span><br>
<span class="quotelev1">&gt; a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: Status
</span><br>
<span class="quotelev1">&gt; Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480]                   Running - Global
</span><br>
<span class="quotelev1">&gt; Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: Receive
</span><br>
<span class="quotelev1">&gt; a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: Status
</span><br>
<span class="quotelev1">&gt; Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480]             File Transfer - Global
</span><br>
<span class="quotelev1">&gt; Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: Receive
</span><br>
<span class="quotelev1">&gt; a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: Status
</span><br>
<span class="quotelev1">&gt; Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:07480]                  Finished - Global
</span><br>
<span class="quotelev1">&gt; Snapshot Reference: ompi_global_snapshot_7022.ckpt
</span><br>
<span class="quotelev1">&gt; Snapshot Ref.:   0 ompi_global_snapshot_7022.ckpt
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example: checkpointing with two running applications
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Similar to the first example, I'm again using the MPI-enabled flavor
</span><br>
<span class="quotelev1">&gt; of Povray as demo application. But now, I'm not only starting a single
</span><br>
<span class="quotelev1">&gt; Povray computation, but a second one in parallel. This gives me 8 MPI
</span><br>
<span class="quotelev1">&gt; processes (4 processes for each MPI job), so that the 8 cores of my
</span><br>
<span class="quotelev1">&gt; system are fully utilized
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without checkpointing, these two processes are executing without any
</span><br>
<span class="quotelev1">&gt; problem, each job resulting in a Povray image. However, if I'm using
</span><br>
<span class="quotelev1">&gt; the ompi-checkpoint command for checkpointing one of these two jobs,
</span><br>
<span class="quotelev1">&gt; this ompi-checkpoint is in danger of not returning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again I'm executing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ompi-checkpoint -v --term 13572
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (where 13752 is the PID of the mpirun process). This command gives
</span><br>
<span class="quotelev1">&gt; the following output, not returning back to the user:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252]     PID 13572
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252]     Connected to Mpirun [[9529,0],0]
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252]     Terminating after checkpoint
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: notify_hnp: Contact
</span><br>
<span class="quotelev1">&gt; Head Node Process PID 13572
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: notify_hnp: Requested
</span><br>
<span class="quotelev1">&gt; a checkpoint of jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: Receive
</span><br>
<span class="quotelev1">&gt; a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: Status
</span><br>
<span class="quotelev1">&gt; Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252]                 Requested - Global
</span><br>
<span class="quotelev1">&gt; Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: Receive
</span><br>
<span class="quotelev1">&gt; a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: Status
</span><br>
<span class="quotelev1">&gt; Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252]     Pending (Termination) - Global
</span><br>
<span class="quotelev1">&gt; Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: Receive
</span><br>
<span class="quotelev1">&gt; a command message.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: Status
</span><br>
<span class="quotelev1">&gt; Update.
</span><br>
<span class="quotelev1">&gt; [grid-demo-1.cit.tu-berlin.de:14252]                   Running - Global
</span><br>
<span class="quotelev1">&gt; Snapshot Reference: (null)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to underline that ompi-checkpoint is not hanging each
</span><br>
<span class="quotelev1">&gt; time I execute it while more than one job is running, but in
</span><br>
<span class="quotelev1">&gt; approx. 50% of all cases. I don't see any difference between
</span><br>
<span class="quotelev1">&gt; successful and failing calls...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there perhaps a way of increasing the debug output?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; Matthias
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7155.php">Antonio Molins: "Re: [OMPI users] Issues with MPI_Type_create_darray"</a>
<li><strong>Previous message:</strong> <a href="7153.php">Bertrand P. S. Russell: "[OMPI users] unsubscibe"</a>
<li><strong>In reply to:</strong> <a href="7152.php">Matthias Hovestadt: "[OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7156.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Reply:</strong> <a href="7156.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
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
