<?
$subject_val = "Re: [OMPI users] MPI_Spawn and process allocation policy";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 07:08:23 2011" -->
<!-- isoreceived="20110816110823" -->
<!-- sent="Tue, 16 Aug 2011 13:09:04 +0200" -->
<!-- isosent="20110816110904" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Spawn and process allocation policy" -->
<!-- id="4E4A4FD0.9080904_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BC9BBEFD-52D0-43A8-B587-603F53BE4EE2_at_open-mpi.org" -->
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
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 07:09:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17059.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17057.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="17057.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17059.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="17059.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/16/2011 12:30 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; What version are you using?
</span><br>
<p>OpenMPI 1.4.3
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2011, at 3:19 AM, Simone Pellegrini wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; I am developing a system to manage MPI tasks on top of MPI. The architecture is rather simple, I have a set of scheduler processes which takes care to manage the resources of a node. The idea is to have 1 (or more) of those scheduler allocated on each node of a cluster and then create new MPI processes (on demand) as computation is needed. Allocation of processes is done using MPI_Spawn.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The system now works fine on a single node by allocating the main scheduler using the following mpi command:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --np 1 ./scheduler ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now when I scale to multiple nodes problems with default MPI behaviour starts. For example lets assume I have 2 nodes with 8 cpu cores each. I therefore set up a machine file in the following way:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; s01 slots=1
</span><br>
<span class="quotelev2">&gt;&gt; s02 slots=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and start the node schedulers in the following way:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --np 2 --machinefile machinefile ./scheduler ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This allocates the processes correctly, now the problem starts when I invoke MPI_Spawn. basically MPI spawn also uses the informations from the machinefile and if 4 MPI processes are spawned 2 are allocated in s01 and 2 on s02. What I want is to allocate the processes always in the same node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to do this by specifying an MPI_Info object which is then passed to the MPI_Spawn routine. I tried to set the &quot;host&quot; property to the hostname of the machine where the scheduler is running but this didn't help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately there is very little documentation on this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the help,
</span><br>
<span class="quotelev2">&gt;&gt; Simone
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="17059.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17057.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="17057.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17059.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Reply:</strong> <a href="17059.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
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
