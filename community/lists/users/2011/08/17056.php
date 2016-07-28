<?
$subject_val = "[OMPI users] MPI_Spawn and process allocation policy";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 05:18:52 2011" -->
<!-- isoreceived="20110816091852" -->
<!-- sent="Tue, 16 Aug 2011 11:19:34 +0200" -->
<!-- isosent="20110816091934" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Spawn and process allocation policy" -->
<!-- id="4E4A3626.8000409_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Spawn and process allocation policy<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 05:19:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17057.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17055.php">Hoot Thompson: "[OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17057.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="17057.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
I am developing a system to manage MPI tasks on top of MPI. The 
<br>
architecture is rather simple, I have a set of scheduler processes which 
<br>
takes care to manage the resources of a node. The idea is to have 1 (or 
<br>
more) of those scheduler allocated on each node of a cluster and then 
<br>
create new MPI processes (on demand) as computation is needed. 
<br>
Allocation of processes is done using MPI_Spawn.
<br>
<p>The system now works fine on a single node by allocating the main 
<br>
scheduler using the following mpi command:
<br>
mpirun --np 1 ./scheduler ...
<br>
<p>Now when I scale to multiple nodes problems with default MPI behaviour 
<br>
starts. For example lets assume I have 2 nodes with 8 cpu cores each. I 
<br>
therefore set up a machine file in the following way:
<br>
<p>s01 slots=1
<br>
s02 slots=1
<br>
<p>and start the node schedulers in the following way:
<br>
mpirun --np 2 --machinefile machinefile ./scheduler ...
<br>
<p>This allocates the processes correctly, now the problem starts when I 
<br>
invoke MPI_Spawn. basically MPI spawn also uses the informations from 
<br>
the machinefile and if 4 MPI processes are spawned 2 are allocated in 
<br>
s01 and 2 on s02. What I want is to allocate the processes always in the 
<br>
same node.
<br>
<p>I tried to do this by specifying an MPI_Info object which is then passed 
<br>
to the MPI_Spawn routine. I tried to set the &quot;host&quot; property to the 
<br>
hostname of the machine where the scheduler is running but this didn't 
<br>
help.
<br>
<p>Unfortunately there is very little documentation on this.
<br>
<p>Thanks for the help,
<br>
Simone
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17057.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17055.php">Hoot Thompson: "[OMPI users] MPI_WAITALL error when running between two virtual machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17057.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="17057.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
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
