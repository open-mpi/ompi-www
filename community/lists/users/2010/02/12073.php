<?
$subject_val = "[OMPI users] orte-checkpoint hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 12:45:21 2010" -->
<!-- isoreceived="20100210174521" -->
<!-- sent="Wed, 10 Feb 2010 11:45:11 -0600" -->
<!-- isosent="20100210174511" -->
<!-- name="Addepalli, Srirangam V" -->
<!-- email="srirangam.v.addepalli_at_[hidden]" -->
<!-- subject="[OMPI users] orte-checkpoint hangs" -->
<!-- id="15F71B097D330B42AA606A4AD8CA9640D0AE0B837A_at_CRATUS.ttu.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] orte-checkpoint hangs<br>
<strong>From:</strong> Addepalli, Srirangam V (<em>srirangam.v.addepalli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 12:45:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12074.php">Brock Palen: "[OMPI users] parameters for newer IB card on older OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12072.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12159.php">Josh Hursey: "Re: [OMPI users] orte-checkpoint hangs"</a>
<li><strong>Reply:</strong> <a href="12159.php">Josh Hursey: "Re: [OMPI users] orte-checkpoint hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to test orte-checkpoint with a MPI JOB. It how ever hangs for all jobs.  This is how i submit the job is started
<br>
mpirun -np 8 -mca ft-enable cr /apps/nwchem-5.1.1/bin/LINUX64/nwchem siosi6.nw 
<br>
<span class="quotelev1">&gt;From another terminal i try the orte-checkpoint
</span><br>
<p>ompi-checkpoint -v --term 9338
<br>
[compute-19-12.local:09377] orte_checkpoint: Checkpointing...
<br>
[compute-19-12.local:09377]      PID 9338
<br>
[compute-19-12.local:09377]      Connected to Mpirun [[5009,0],0]
<br>
[compute-19-12.local:09377]      Terminating after checkpoint
<br>
[compute-19-12.local:09377] orte_checkpoint: notify_hnp: Contact Head Node Process PID 9338
<br>
[compute-19-12.local:09377] orte_checkpoint: notify_hnp: Requested a checkpoint of jobid [INVALID]
<br>
[compute-19-12.local:09377] orte_checkpoint: hnp_receiver: Receive a command message.
<br>
[compute-19-12.local:09377] orte_checkpoint: hnp_receiver: Status Update.
<br>
<p><p>Is there any way to debug the issue to get more information or log messages.
<br>
<p>Rangam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12074.php">Brock Palen: "[OMPI users] parameters for newer IB card on older OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12072.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12159.php">Josh Hursey: "Re: [OMPI users] orte-checkpoint hangs"</a>
<li><strong>Reply:</strong> <a href="12159.php">Josh Hursey: "Re: [OMPI users] orte-checkpoint hangs"</a>
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
