<?
$subject_val = "[OMPI users] Oversubscription of nodes with Torque and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 22 11:32:46 2013" -->
<!-- isoreceived="20131122163246" -->
<!-- sent="Fri, 22 Nov 2013 16:32:44 +0000" -->
<!-- isosent="20131122163244" -->
<!-- name="Gans, Jason D" -->
<!-- email="jgans_at_[hidden]" -->
<!-- subject="[OMPI users] Oversubscription of nodes with Torque and OpenMPI" -->
<!-- id="3AC6D38C07BF6248ACD81166D380DB1C3874BAFC_at_ECS-EXG-P-MB03.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Oversubscription of nodes with Torque and OpenMPI<br>
<strong>From:</strong> Gans, Jason D (<em>jgans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-22 11:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23020.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23018.php">Javier Garcia Blas: "[OMPI users] CFP: 1st International Workshop on Cloud for Bio (C4Bio 2014)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23020.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23020.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,

I would like to run an instance of my application on every *core* of a small cluster. I am using Torque 2.5.12 to run jobs on the cluster. The cluster in question is a heterogeneous collection of machines that are all past their prime. Specifically, the number of cores ranges from 2-8. Here is the Torque &quot;nodes&quot; file:

n0000 np=2
n0001 np=2
n0002 np=8
n0003 np=8
n0004 np=2
n0005 np=2
n0006 np=2
n0007 np=4

When I use openmpi-1.6.3, I can oversubscribe nodes but the tasks are allocated to nodes without regard to the number of cores on each node (specified by the &quot;np=xx&quot; in the nodes file). For example, when I run &quot;mpirun -np 24 hostname&quot;, mpirun places three instances of &quot;hostname&quot; on each node, despite the fact that some nodes only have two processors and some have more.

Is there a way to have OpenMPI &quot;gracefully&quot; oversubscribe nodes by allocating instances based on the &quot;np=xx&quot; information in the Torque nodes file? It this a Torque problem?

p.s. I do get the desired behavior when I run *without* Torque and specify the following machine file to mpirun:

n0000 slots=2
n0001 slots=2
n0002 slots=8
n0003 slots=8
n0004 slots=2
n0005 slots=2
n0006 slots=2
n0007 slots=4

Regards,

Jason



<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23020.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="23018.php">Javier Garcia Blas: "[OMPI users] CFP: 1st International Workshop on Cloud for Bio (C4Bio 2014)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23020.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
<li><strong>Reply:</strong> <a href="23020.php">Reuti: "Re: [OMPI users] Oversubscription of nodes with Torque and OpenMPI"</a>
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
