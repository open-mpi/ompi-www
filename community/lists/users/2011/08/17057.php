<?
$subject_val = "Re: [OMPI users] MPI_Spawn and process allocation policy";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 06:31:09 2011" -->
<!-- isoreceived="20110816103109" -->
<!-- sent="Tue, 16 Aug 2011 04:30:59 -0600" -->
<!-- isosent="20110816103059" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn and process allocation policy" -->
<!-- id="BC9BBEFD-52D0-43A8-B587-603F53BE4EE2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E4A3626.8000409_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Spawn and process allocation policy<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 06:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17058.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17056.php">Simone Pellegrini: "[OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="17056.php">Simone Pellegrini: "[OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17058.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="17058.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version are you using?
<br>
<p><p>On Aug 16, 2011, at 3:19 AM, Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; I am developing a system to manage MPI tasks on top of MPI. The architecture is rather simple, I have a set of scheduler processes which takes care to manage the resources of a node. The idea is to have 1 (or more) of those scheduler allocated on each node of a cluster and then create new MPI processes (on demand) as computation is needed. Allocation of processes is done using MPI_Spawn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The system now works fine on a single node by allocating the main scheduler using the following mpi command:
</span><br>
<span class="quotelev1">&gt; mpirun --np 1 ./scheduler ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now when I scale to multiple nodes problems with default MPI behaviour starts. For example lets assume I have 2 nodes with 8 cpu cores each. I therefore set up a machine file in the following way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; s01 slots=1
</span><br>
<span class="quotelev1">&gt; s02 slots=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and start the node schedulers in the following way:
</span><br>
<span class="quotelev1">&gt; mpirun --np 2 --machinefile machinefile ./scheduler ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This allocates the processes correctly, now the problem starts when I invoke MPI_Spawn. basically MPI spawn also uses the informations from the machinefile and if 4 MPI processes are spawned 2 are allocated in s01 and 2 on s02. What I want is to allocate the processes always in the same node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to do this by specifying an MPI_Info object which is then passed to the MPI_Spawn routine. I tried to set the &quot;host&quot; property to the hostname of the machine where the scheduler is running but this didn't help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately there is very little documentation on this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the help,
</span><br>
<span class="quotelev1">&gt; Simone
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
<li><strong>Next message:</strong> <a href="17058.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17056.php">Simone Pellegrini: "[OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="17056.php">Simone Pellegrini: "[OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17058.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="17058.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
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
