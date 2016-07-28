<?
$subject_val = "[OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 12 10:03:14 2009" -->
<!-- isoreceived="20091212150314" -->
<!-- sent="Sat, 12 Dec 2009 07:03:10 -0800 (PST)" -->
<!-- isosent="20091212150310" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application" -->
<!-- id="440048.7228.qm_at_web31004.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application<br>
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-12 10:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11524.php">Gijsbert Wiesenekker: "[OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11522.php">David Turner: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11731.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11731.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11732.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am trying to checkpoint am MPI application which has two processes each running on two seperate hosts.
<br>
<p>I run the application as follows:
<br>
<p>raj_at_sun32:~$ mpirun -am ft-enable-cr -np 2 --hostfile sunhost -mca btl ^openib -mca snapc_base_global_snapshot_dir /tmp m.
<br>
<p>and I trigger the checkpoint as follows:
<br>
<p>raj_at_sun32:~$ ompi-checkpoint -v 30010
<br>
<p><p>The following happens displaying two errors which checkpointng the application:
<br>
<p><p>##############################################
<br>
I am processor no 0 of a total of 2 procs on host sun32
<br>
I am processor no 1 of a total of 2 procs on host sun06
<br>
I am processorrrrrrrr no 0 of a total of 2 procs on host sun32 
<br>
I am processorrrrrrrr no 1 of a total of 2 procs on host sun06 
<br>
<p>[sun32:30010] Error: expected_component: PID information unavailable!
<br>
[sun32:30010] Error: expected_component: Component Name information unavailable!
<br>
<p>I am processssssssssssor no 1 of a total of 2 procs on host sun06
<br>
I am processssssssssssor no 0 of a total of 2 procs on host sun32
<br>
bye 
<br>
bye 
<br>
############################################
<br>
<p><p><p><p>when I try to restart the application from the checkpointed file, I get the following:
<br>
<p>raj_at_sun32:~$ ompi-restart ompi_global_snapshot_30010.ckpt
<br>
--------------------------------------------------------------------------
<br>
Error: The filename (opal_snapshot_1.ckpt) is invalid because either you have not provided a filename
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or provided an invalid filename.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please see --help for usage.
<br>
<p>--------------------------------------------------------------------------
<br>
I am processssssssssssor no 0 of a total of 2 procs on host sun32
<br>
bye 
<br>
<p><p>I would very appreciate if you could give me some ideas on how to checkpoint and restart MPI application running on multiple hosts.
<br>
<p>Thank you
<br>
<p>Regards,
<br>
<p>Raj
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11524.php">Gijsbert Wiesenekker: "[OMPI users] OpenMPI problem on Fedora Core 12"</a>
<li><strong>Previous message:</strong> <a href="11522.php">David Turner: "Re: [OMPI users] Problem building OpenMPI with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11731.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11731.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11732.php">Josh Hursey: "Re: [OMPI users] Problem with checkpointing multihosts, multiprocesses MPI application"</a>
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
