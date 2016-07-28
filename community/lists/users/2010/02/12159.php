<?
$subject_val = "Re: [OMPI users] orte-checkpoint hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 15:04:18 2010" -->
<!-- isoreceived="20100225200418" -->
<!-- sent="Thu, 25 Feb 2010 12:04:15 -0800" -->
<!-- isosent="20100225200415" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte-checkpoint hangs" -->
<!-- id="EC08BFC0-901B-428D-A9D1-316DEA5E61F5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="15F71B097D330B42AA606A4AD8CA9640D0AE0B837A_at_CRATUS.ttu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte-checkpoint hangs<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-25 15:04:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12160.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12158.php">Josh Hursey: "Re: [OMPI users] Torque+BCLR+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12073.php">Addepalli, Srirangam V: "[OMPI users] orte-checkpoint hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2010, at 9:45 AM, Addepalli, Srirangam V wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to test orte-checkpoint with a MPI JOB. It how ever hangs for all jobs.  This is how i submit the job is started
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -mca ft-enable cr /apps/nwchem-5.1.1/bin/LINUX64/nwchem siosi6.nw 
</span><br>
<p>This might be the problem, if it wasn't a typo. The command line flag is &quot;-am ft-enable-cr&quot; not &quot;-mca ft-enable cr&quot;. The former activates a set of MCA parameters (in the AMCA file 'ft-enable-cr'). The latter should be ignored by the MCA system.
<br>
<p>Give that a try and let us know if the behavior changes.
<br>
<p>-- Josh
<br>
<p><span class="quotelev2">&gt;&gt; From another terminal i try the orte-checkpoint
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint -v --term 9338
</span><br>
<span class="quotelev1">&gt; [compute-19-12.local:09377] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [compute-19-12.local:09377]      PID 9338
</span><br>
<span class="quotelev1">&gt; [compute-19-12.local:09377]      Connected to Mpirun [[5009,0],0]
</span><br>
<span class="quotelev1">&gt; [compute-19-12.local:09377]      Terminating after checkpoint
</span><br>
<span class="quotelev1">&gt; [compute-19-12.local:09377] orte_checkpoint: notify_hnp: Contact Head Node Process PID 9338
</span><br>
<span class="quotelev1">&gt; [compute-19-12.local:09377] orte_checkpoint: notify_hnp: Requested a checkpoint of jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; [compute-19-12.local:09377] orte_checkpoint: hnp_receiver: Receive a command message.
</span><br>
<span class="quotelev1">&gt; [compute-19-12.local:09377] orte_checkpoint: hnp_receiver: Status Update.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way to debug the issue to get more information or log messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rangam
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
<li><strong>Next message:</strong> <a href="12160.php">Prentice Bisbal: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12158.php">Josh Hursey: "Re: [OMPI users] Torque+BCLR+OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="12073.php">Addepalli, Srirangam V: "[OMPI users] orte-checkpoint hangs"</a>
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
