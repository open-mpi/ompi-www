<?
$subject_val = "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 27 13:58:15 2013" -->
<!-- isoreceived="20131127185815" -->
<!-- sent="Wed, 27 Nov 2013 13:58:14 -0500" -->
<!-- isosent="20131127185814" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?" -->
<!-- id="529640C6.6000203_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57odhxePS5fkrjJAqsqvrs-tfNV+qvn=sNZC0+kTCwBoi3g_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-27 13:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23099.php">George Bosilca: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23097.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23092.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23103.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Reply:</strong> <a href="23103.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ola, Ralph
<br>
<p>I may be wrong, but I'd guess launching the two solvers
<br>
in MPMD/MIMD mode would work smoothly with the torque PBS_NODEFILE,
<br>
in a *single* Torque job.
<br>
If I understood Ola right, that is what he wants.
<br>
<p>Say, something like this (for one 32-core node):
<br>
<p>#PBS -l nodes=1:ppn=32
<br>
...
<br>
mpiexec -np 8 ./solver1 : -np 24 ./solver2
<br>
<p>I am assuming the two executables never talk to each other, right?
<br>
They solve the same problem with different methods, in a completely
<br>
independent and &quot;embarrassingly parallel&quot; fashion, and could run
<br>
concurrently.
<br>
<p>Is that right?
<br>
Or did I misunderstand Ola's description, and they work in a staggered 
<br>
sequence to each other?
<br>
[first s1, then s2, then s1 again, then s2 once more...]
<br>
I am a bit confused by Ola's use of the words &quot;loosely coupled&quot; in his 
<br>
description, which might indicate cooperation to solve the same problem,
<br>
rather than independent work on two instances of the same problem.
<br>
<p>Ralph: Does the MPI model assume that MPMD/MIMD executables
<br>
have to necessarily communicate with each other,
<br>
or perhaps share a common MPI_COMM_WORLD?
<br>
[I guess not.]
<br>
<p>Anyway, just a guess,
<br>
Gus Correa
<br>
<p>On 11/27/2013 10:23 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Are you wanting to run the solvers on different nodes within the
</span><br>
<span class="quotelev1">&gt; allocation? Or on different cores across all nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For different nodes, you can just use -host to specify which nodes you
</span><br>
<span class="quotelev1">&gt; want that specific mpirun to use, or a hostfile should also be fine. The
</span><br>
<span class="quotelev1">&gt; FAQ's comment was aimed at people who were giving us the PBS_NODEFILE as
</span><br>
<span class="quotelev1">&gt; the hostfile - which could confuse older versions of OMPI into using the
</span><br>
<span class="quotelev1">&gt; rsh launcher instead of Torque. Remember that we have the relative node
</span><br>
<span class="quotelev1">&gt; syntax so you don't actually have to name the nodes - helps if you want
</span><br>
<span class="quotelev1">&gt; to execute batch scripts and won't know the node names in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For different cores across all nodes, you would need to use some binding
</span><br>
<span class="quotelev1">&gt; trickery that may not be in the 1.4 series, so you might need to update
</span><br>
<span class="quotelev1">&gt; to the 1.6 series. You have two options: (a) have Torque bind your
</span><br>
<span class="quotelev1">&gt; mpirun to specific cores (I believe it can do that), or (b) use
</span><br>
<span class="quotelev1">&gt; --slot-list to specify which cores that particular mpirun is to use. You
</span><br>
<span class="quotelev1">&gt; can then separate the two solvers but still run on all the nodes, if
</span><br>
<span class="quotelev1">&gt; that is of concern.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 27, 2013 at 6:10 AM, &lt;Ola.Widlund_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Ola.Widlund_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We have an in-house application where we run two solvers in a
</span><br>
<span class="quotelev1">&gt;     loosely coupled manner: The first solver runs a timestep, then the
</span><br>
<span class="quotelev1">&gt;     second solver does work on the same timestep, etc. As the two
</span><br>
<span class="quotelev1">&gt;     solvers never execute at the same time, we would like to run the two
</span><br>
<span class="quotelev1">&gt;     solvers in the same allocation (launching mpirun once for each of
</span><br>
<span class="quotelev1">&gt;     them). RAM is not an issue, so there should not be any risk of
</span><br>
<span class="quotelev1">&gt;     excessive swapping degrading performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We use openmpi-1.4.5 compiled with torque integration. The torque
</span><br>
<span class="quotelev1">&gt;     integration means we do not give a hostfile to mpirun, it will
</span><br>
<span class="quotelev1">&gt;     itself query torque for the allocation info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Can we force one of the solvers to run in a *subset* of the full
</span><br>
<span class="quotelev1">&gt;     allocation? How do we do that? I read in the FAQ that providing a
</span><br>
<span class="quotelev1">&gt;     hostfile to mpirun in this case (when it's not needed due to torque
</span><br>
<span class="quotelev1">&gt;     integration) would cause a lot of problems...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ola
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="23099.php">George Bosilca: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>Previous message:</strong> <a href="23097.php">Meredith, Karl: "Re: [OMPI users] open-mpi on Mac OS 10.9 (Mavericks)"</a>
<li><strong>In reply to:</strong> <a href="23092.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23103.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<li><strong>Reply:</strong> <a href="23103.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
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
