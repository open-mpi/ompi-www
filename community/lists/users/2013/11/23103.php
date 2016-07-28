<?
$subject_val = "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 16:03:03 2013" -->
<!-- isoreceived="20131127210303" -->
<!-- sent="Wed, 27 Nov 2013 14:02:59 -0700" -->
<!-- isosent="20131127210259" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?" -->
<!-- id="0EA09E9E-23FB-4813-AC8C-CD6F949A97D1_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="529640C6.6000203_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 16:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23104.php">Ralph Castain: "[OMPI users] OMPI Performance Metrics"</a>
<li><strong>Previous message:</strong> <a href="23102.php">Jeff Hammond: "Re: [OMPI users] Multi-threading support for openib"</a>
<li><strong>In reply to:</strong> <a href="23098.php">Gus Correa: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23105.php">George Markomanolis: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Reply:</strong> <a href="23105.php">George Markomanolis: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid the two solvers would be in the same comm_world if launched that way
<br>
<p>Sent from my iPhone
<br>
<p><span class="quotelev1">&gt; On Nov 27, 2013, at 11:58 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ola, Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I may be wrong, but I'd guess launching the two solvers
</span><br>
<span class="quotelev1">&gt; in MPMD/MIMD mode would work smoothly with the torque PBS_NODEFILE,
</span><br>
<span class="quotelev1">&gt; in a *single* Torque job.
</span><br>
<span class="quotelev1">&gt; If I understood Ola right, that is what he wants.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Say, something like this (for one 32-core node):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=1:ppn=32
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; mpiexec -np 8 ./solver1 : -np 24 ./solver2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am assuming the two executables never talk to each other, right?
</span><br>
<span class="quotelev1">&gt; They solve the same problem with different methods, in a completely
</span><br>
<span class="quotelev1">&gt; independent and &quot;embarrassingly parallel&quot; fashion, and could run
</span><br>
<span class="quotelev1">&gt; concurrently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that right?
</span><br>
<span class="quotelev1">&gt; Or did I misunderstand Ola's description, and they work in a staggered sequence to each other?
</span><br>
<span class="quotelev1">&gt; [first s1, then s2, then s1 again, then s2 once more...]
</span><br>
<span class="quotelev1">&gt; I am a bit confused by Ola's use of the words &quot;loosely coupled&quot; in his description, which might indicate cooperation to solve the same problem,
</span><br>
<span class="quotelev1">&gt; rather than independent work on two instances of the same problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph: Does the MPI model assume that MPMD/MIMD executables
</span><br>
<span class="quotelev1">&gt; have to necessarily communicate with each other,
</span><br>
<span class="quotelev1">&gt; or perhaps share a common MPI_COMM_WORLD?
</span><br>
<span class="quotelev1">&gt; [I guess not.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, just a guess,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/27/2013 10:23 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Are you wanting to run the solvers on different nodes within the
</span><br>
<span class="quotelev2">&gt;&gt; allocation? Or on different cores across all nodes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For different nodes, you can just use -host to specify which nodes you
</span><br>
<span class="quotelev2">&gt;&gt; want that specific mpirun to use, or a hostfile should also be fine. The
</span><br>
<span class="quotelev2">&gt;&gt; FAQ's comment was aimed at people who were giving us the PBS_NODEFILE as
</span><br>
<span class="quotelev2">&gt;&gt; the hostfile - which could confuse older versions of OMPI into using the
</span><br>
<span class="quotelev2">&gt;&gt; rsh launcher instead of Torque. Remember that we have the relative node
</span><br>
<span class="quotelev2">&gt;&gt; syntax so you don't actually have to name the nodes - helps if you want
</span><br>
<span class="quotelev2">&gt;&gt; to execute batch scripts and won't know the node names in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For different cores across all nodes, you would need to use some binding
</span><br>
<span class="quotelev2">&gt;&gt; trickery that may not be in the 1.4 series, so you might need to update
</span><br>
<span class="quotelev2">&gt;&gt; to the 1.6 series. You have two options: (a) have Torque bind your
</span><br>
<span class="quotelev2">&gt;&gt; mpirun to specific cores (I believe it can do that), or (b) use
</span><br>
<span class="quotelev2">&gt;&gt; --slot-list to specify which cores that particular mpirun is to use. You
</span><br>
<span class="quotelev2">&gt;&gt; can then separate the two solvers but still run on all the nodes, if
</span><br>
<span class="quotelev2">&gt;&gt; that is of concern.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov 27, 2013 at 6:10 AM, &lt;Ola.Widlund_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Ola.Widlund_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    We have an in-house application where we run two solvers in a
</span><br>
<span class="quotelev2">&gt;&gt;    loosely coupled manner: The first solver runs a timestep, then the
</span><br>
<span class="quotelev2">&gt;&gt;    second solver does work on the same timestep, etc. As the two
</span><br>
<span class="quotelev2">&gt;&gt;    solvers never execute at the same time, we would like to run the two
</span><br>
<span class="quotelev2">&gt;&gt;    solvers in the same allocation (launching mpirun once for each of
</span><br>
<span class="quotelev2">&gt;&gt;    them). RAM is not an issue, so there should not be any risk of
</span><br>
<span class="quotelev2">&gt;&gt;    excessive swapping degrading performance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    We use openmpi-1.4.5 compiled with torque integration. The torque
</span><br>
<span class="quotelev2">&gt;&gt;    integration means we do not give a hostfile to mpirun, it will
</span><br>
<span class="quotelev2">&gt;&gt;    itself query torque for the allocation info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Question:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Can we force one of the solvers to run in a *subset* of the full
</span><br>
<span class="quotelev2">&gt;&gt;    allocation? How do we do that? I read in the FAQ that providing a
</span><br>
<span class="quotelev2">&gt;&gt;    hostfile to mpirun in this case (when it's not needed due to torque
</span><br>
<span class="quotelev2">&gt;&gt;    integration) would cause a lot of problems...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    Ola
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="23104.php">Ralph Castain: "[OMPI users] OMPI Performance Metrics"</a>
<li><strong>Previous message:</strong> <a href="23102.php">Jeff Hammond: "Re: [OMPI users] Multi-threading support for openib"</a>
<li><strong>In reply to:</strong> <a href="23098.php">Gus Correa: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23105.php">George Markomanolis: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Reply:</strong> <a href="23105.php">George Markomanolis: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
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
