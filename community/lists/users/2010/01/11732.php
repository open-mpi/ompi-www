<?
$subject_val = "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 16:20:07 2010" -->
<!-- isoreceived="20100111212007" -->
<!-- sent="Mon, 11 Jan 2010 16:06:00 -0500" -->
<!-- isosent="20100111210600" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application" -->
<!-- id="1263244811.0000_at_hypermail.dummy" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="440048.7228.qm_at_web31004.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 16:06:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11733.php">Josh Hursey: "Re: [OMPI users] problem restarting multiprocess mpi application"</a>
<li><strong>Previous message:</strong> <a href="11731.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11523.php">Kritiraj Sajadah: "[OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2009, at 10:03 AM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;         I am trying to checkpoint am MPI application which has two  
</span><br>
<span class="quotelev1">&gt; processes each running on two seperate hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I run the application as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; raj_at_sun32:~$ mpirun -am ft-enable-cr -np 2 --hostfile sunhost -mca  
</span><br>
<span class="quotelev1">&gt; btl ^openib -mca snapc_base_global_snapshot_dir /tmp m.
</span><br>
<p>Try setting the 'snapc_base_global_snapshot_dir' in your  
<br>
$HOME/.openmpi/mca-params.conf file instead of on the command line.  
<br>
This way it will be properly picked up by the ompi-restart commands.
<br>
<p>See the link below for how to do this:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-global">http://www.osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-global</a>
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I trigger the checkpoint as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; raj_at_sun32:~$ ompi-checkpoint -v 30010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following happens displaying two errors which checkpointng the  
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ##############################################
</span><br>
<span class="quotelev1">&gt; I am processor no 0 of a total of 2 procs on host sun32
</span><br>
<span class="quotelev1">&gt; I am processor no 1 of a total of 2 procs on host sun06
</span><br>
<span class="quotelev1">&gt; I am processorrrrrrrr no 0 of a total of 2 procs on host sun32
</span><br>
<span class="quotelev1">&gt; I am processorrrrrrrr no 1 of a total of 2 procs on host sun06
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sun32:30010] Error: expected_component: PID information unavailable!
</span><br>
<span class="quotelev1">&gt; [sun32:30010] Error: expected_component: Component Name information  
</span><br>
<span class="quotelev1">&gt; unavailable!
</span><br>
<p>The only way this error could be generated when checkpointing (versus  
<br>
restarting) is if the Snapshot Coordinator failed to propagate the CRS  
<br>
component used so that it could be stored in the metadata. If this  
<br>
continues to happen try enabling debugging in the snapshot coordinator:
<br>
&nbsp;&nbsp;mpirun -mca snapc_full_verbose 20 ...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am processssssssssssor no 1 of a total of 2 procs on host sun06
</span><br>
<span class="quotelev1">&gt; I am processssssssssssor no 0 of a total of 2 procs on host sun32
</span><br>
<span class="quotelev1">&gt; bye
</span><br>
<span class="quotelev1">&gt; bye
</span><br>
<span class="quotelev1">&gt; ############################################
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; when I try to restart the application from the checkpointed file, I  
</span><br>
<span class="quotelev1">&gt; get the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; raj_at_sun32:~$ ompi-restart ompi_global_snapshot_30010.ckpt
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (opal_snapshot_1.ckpt) is invalid because either  
</span><br>
<span class="quotelev1">&gt; you have not provided a filename
</span><br>
<span class="quotelev1">&gt;       or provided an invalid filename.
</span><br>
<span class="quotelev1">&gt;       Please see --help for usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; I am processssssssssssor no 0 of a total of 2 procs on host sun32
</span><br>
<span class="quotelev1">&gt; bye
</span><br>
<p>This usually indicates that either:
<br>
&nbsp;&nbsp;1) The local checkpoint directory (opal_snapshot_1.ckpt) is missing.  
<br>
So the global checkpoint is either corrupted, or the node where rank 1  
<br>
resided was not able to access the storage location (/tmp in your  
<br>
example).
<br>
&nbsp;&nbsp;2) You moved the ompi_global_snapshot_30010.ckpt directory from /tmp  
<br>
to somewhere else. Currently, manually moving the global checkpoint  
<br>
directory is not supported.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would very appreciate if you could give me some ideas on how to  
</span><br>
<span class="quotelev1">&gt; checkpoint and restart MPI application running on multiple hosts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Raj
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11733.php">Josh Hursey: "Re: [OMPI users] problem restarting multiprocess mpi application"</a>
<li><strong>Previous message:</strong> <a href="11731.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11523.php">Kritiraj Sajadah: "[OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
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
