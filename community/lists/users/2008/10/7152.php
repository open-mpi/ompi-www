<?
$subject_val = "[OMPI users] ompi-checkpoint is hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 08:19:09 2008" -->
<!-- isoreceived="20081031121909" -->
<!-- sent="Fri, 31 Oct 2008 13:18:58 +0100" -->
<!-- isosent="20081031121858" -->
<!-- name="Matthias Hovestadt" -->
<!-- email="maho_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-checkpoint is hanging" -->
<!-- id="490AF7B2.8050702_at_cs.tu-berlin.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] ompi-checkpoint is hanging<br>
<strong>From:</strong> Matthias Hovestadt (<em>maho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 08:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7153.php">Bertrand P. S. Russell: "[OMPI users] unsubscibe"</a>
<li><strong>Previous message:</strong> <a href="7151.php">Jeff Squyres: "Re: [OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7154.php">Tim Mattox: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Reply:</strong> <a href="7154.php">Tim Mattox: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I'm using the development version of OMPI from SVN (rev. 19857)
<br>
for executing MPI jobs on my cluster system. I'm particularly using
<br>
the checkpoint and restart feature, basing on the currentmost version
<br>
of BLCR.
<br>
<p>The checkpointing is working pretty fine as long as I only execute
<br>
a single job on a node. If more than one MPI application is executing
<br>
on a system, ompi-checkpoint sometimes does not return, hanging forever.
<br>
<p><p>Example: checkpointing with a single running application
<br>
<p>I'm using the MPI-enabled flavor of Povray as demo application. So I'm
<br>
starting it on a node using the following command.
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 4 mpi-x-povray +I planet.pov -w1200 -h1000 +SP1 \
<br>
&nbsp;&nbsp;&nbsp;+O planet.tga
<br>
<p>This gives me 4 MPI processes, all running on the local node.
<br>
checkpointing it with
<br>
<p>&nbsp;&nbsp;&nbsp;ompi-checkpoint -v --term 7022
<br>
<p>(where 7022 is the PID of the mpirun process) gives me a checkpoint
<br>
dataset ompi_global_snapshot_7022.ckpt, that can be used for restarting
<br>
the job.
<br>
<p>The ompi-checkpoint command gives the following output:
<br>
<p>-------------------------------------------------------
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: Checkpointing...
<br>
[grid-demo-1.cit.tu-berlin.de:07480]     PID 7022
<br>
[grid-demo-1.cit.tu-berlin.de:07480]     Connected to Mpirun [[2899,0],0]
<br>
[grid-demo-1.cit.tu-berlin.de:07480]     Terminating after checkpoint
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: notify_hnp: 
<br>
Contact Head Node Process PID 7022
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: notify_hnp: 
<br>
Requested a checkpoint of jobid [INVALID]
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:07480]                 Requested - Global 
<br>
Snapshot Reference: (null)
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:07480]     Pending (Termination) - Global 
<br>
Snapshot Reference: (null)
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:07480]                   Running - Global 
<br>
Snapshot Reference: (null)
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:07480]             File Transfer - Global 
<br>
Snapshot Reference: (null)
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:07480] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:07480]                  Finished - Global 
<br>
Snapshot Reference: ompi_global_snapshot_7022.ckpt
<br>
Snapshot Ref.:   0 ompi_global_snapshot_7022.ckpt
<br>
-------------------------------------------------------
<br>
<p><p><p>Example: checkpointing with two running applications
<br>
<p>Similar to the first example, I'm again using the MPI-enabled flavor
<br>
of Povray as demo application. But now, I'm not only starting a single
<br>
Povray computation, but a second one in parallel. This gives me 8 MPI
<br>
processes (4 processes for each MPI job), so that the 8 cores of my
<br>
system are fully utilized
<br>
<p>Without checkpointing, these two processes are executing without any
<br>
problem, each job resulting in a Povray image. However, if I'm using
<br>
the ompi-checkpoint command for checkpointing one of these two jobs,
<br>
this ompi-checkpoint is in danger of not returning.
<br>
<p>Again I'm executing
<br>
<p>&nbsp;&nbsp;&nbsp;ompi-checkpoint -v --term 13572
<br>
<p>(where 13752 is the PID of the mpirun process). This command gives
<br>
the following output, not returning back to the user:
<br>
<p>-------------------------------------------------------
<br>
[grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: Checkpointing...
<br>
[grid-demo-1.cit.tu-berlin.de:14252]     PID 13572
<br>
[grid-demo-1.cit.tu-berlin.de:14252]     Connected to Mpirun [[9529,0],0]
<br>
[grid-demo-1.cit.tu-berlin.de:14252]     Terminating after checkpoint
<br>
[grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: notify_hnp: 
<br>
Contact Head Node Process PID 13572
<br>
[grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: notify_hnp: 
<br>
Requested a checkpoint of jobid [INVALID]
<br>
[grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:14252]                 Requested - Global 
<br>
Snapshot Reference: (null)
<br>
[grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:14252]     Pending (Termination) - Global 
<br>
Snapshot Reference: (null)
<br>
[grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: 
<br>
Receive a command message.
<br>
[grid-demo-1.cit.tu-berlin.de:14252] orte_checkpoint: hnp_receiver: 
<br>
Status Update.
<br>
[grid-demo-1.cit.tu-berlin.de:14252]                   Running - Global 
<br>
Snapshot Reference: (null)
<br>
-------------------------------------------------------
<br>
<p>I want to underline that ompi-checkpoint is not hanging each
<br>
time I execute it while more than one job is running, but in
<br>
approx. 50% of all cases. I don't see any difference between
<br>
successful and failing calls...
<br>
<p><p>Is there perhaps a way of increasing the debug output?
<br>
<p><p>Best,
<br>
Matthias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7153.php">Bertrand P. S. Russell: "[OMPI users] unsubscibe"</a>
<li><strong>Previous message:</strong> <a href="7151.php">Jeff Squyres: "Re: [OMPI users] Equivalent .h files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7154.php">Tim Mattox: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<li><strong>Reply:</strong> <a href="7154.php">Tim Mattox: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
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
