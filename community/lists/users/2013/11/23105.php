<?
$subject_val = "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 28 05:08:01 2013" -->
<!-- isoreceived="20131128100801" -->
<!-- sent="Thu, 28 Nov 2013 11:07:36 +0100" -->
<!-- isosent="20131128100736" -->
<!-- name="George Markomanolis" -->
<!-- email="george_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?" -->
<!-- id="529715E8.6010100_at_markomanolis.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0EA09E9E-23FB-4813-AC8C-CD6F949A97D1_at_gmail.com" -->
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
<strong>From:</strong> George Markomanolis (<em>george_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-28 05:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23106.php">Jean-Francois St-Pierre: "[OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>Previous message:</strong> <a href="23104.php">Ralph Castain: "[OMPI users] OMPI Performance Metrics"</a>
<li><strong>In reply to:</strong> <a href="23103.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23165.php">Ola.Widlund_at_[hidden]: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Here is what I do to execute 20 mpirun calls using LSF and one job but 
<br>
it is similar for your case I assume.
<br>
<p>I use $LSB_HOSTS to extract the hosts from the job. I know how many 
<br>
cores I want per job so I create machine files. For our application, 
<br>
each execution has its own nodes but the last MPI processes are in 
<br>
shared node. For example if I have two mpirun calls I need 40 cores (20 
<br>
cores each one). I use three nodes (16 cores per node). First mpirun 
<br>
call: first node + 0-3 core on the second node. Second mpirun call: 
<br>
third node + 4-7 core on the second node. I do this in order not to 
<br>
waste resources as I will need to execute ~20 mpirun calls not just two 
<br>
and also the last 4 MPI processes do different task from the first 16 ones.
<br>
<p>So I create machine files like that:
<br>
rank 0=s15r1b45 slot=0
<br>
rank 1=s15r1b45 slot=1
<br>
rank 2=s15r1b45 slot=2
<br>
rank 3=s15r1b45 slot=3
<br>
....
<br>
<p><p>Now from the root node execute multiple mpirun calls like:
<br>
<p>mpirun ....   &amp;
<br>
<p>and after them use the command wait.
<br>
<p>So you start many mpirun calls on the background and with the wait you 
<br>
are sure that the job will not be killed before the executions are finished.
<br>
<p>Just be careful that the machine files do not include common resources 
<br>
(cores in my case).
<br>
<p>Best regards,
<br>
George Markomanolis
<br>
<p>On 11/27/2013 10:02 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I'm afraid the two solvers would be in the same comm_world if launched that way
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 27, 2013, at 11:58 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ola, Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I may be wrong, but I'd guess launching the two solvers
</span><br>
<span class="quotelev2">&gt;&gt; in MPMD/MIMD mode would work smoothly with the torque PBS_NODEFILE,
</span><br>
<span class="quotelev2">&gt;&gt; in a *single* Torque job.
</span><br>
<span class="quotelev2">&gt;&gt; If I understood Ola right, that is what he wants.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Say, something like this (for one 32-core node):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=1:ppn=32
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -np 8 ./solver1 : -np 24 ./solver2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am assuming the two executables never talk to each other, right?
</span><br>
<span class="quotelev2">&gt;&gt; They solve the same problem with different methods, in a completely
</span><br>
<span class="quotelev2">&gt;&gt; independent and &quot;embarrassingly parallel&quot; fashion, and could run
</span><br>
<span class="quotelev2">&gt;&gt; concurrently.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that right?
</span><br>
<span class="quotelev2">&gt;&gt; Or did I misunderstand Ola's description, and they work in a staggered sequence to each other?
</span><br>
<span class="quotelev2">&gt;&gt; [first s1, then s2, then s1 again, then s2 once more...]
</span><br>
<span class="quotelev2">&gt;&gt; I am a bit confused by Ola's use of the words &quot;loosely coupled&quot; in his description, which might indicate cooperation to solve the same problem,
</span><br>
<span class="quotelev2">&gt;&gt; rather than independent work on two instances of the same problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph: Does the MPI model assume that MPMD/MIMD executables
</span><br>
<span class="quotelev2">&gt;&gt; have to necessarily communicate with each other,
</span><br>
<span class="quotelev2">&gt;&gt; or perhaps share a common MPI_COMM_WORLD?
</span><br>
<span class="quotelev2">&gt;&gt; [I guess not.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, just a guess,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/27/2013 10:23 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you wanting to run the solvers on different nodes within the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocation? Or on different cores across all nodes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For different nodes, you can just use -host to specify which nodes you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want that specific mpirun to use, or a hostfile should also be fine. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAQ's comment was aimed at people who were giving us the PBS_NODEFILE as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the hostfile - which could confuse older versions of OMPI into using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsh launcher instead of Torque. Remember that we have the relative node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; syntax so you don't actually have to name the nodes - helps if you want
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to execute batch scripts and won't know the node names in advance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For different cores across all nodes, you would need to use some binding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trickery that may not be in the 1.4 series, so you might need to update
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the 1.6 series. You have two options: (a) have Torque bind your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun to specific cores (I believe it can do that), or (b) use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --slot-list to specify which cores that particular mpirun is to use. You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can then separate the two solvers but still run on all the nodes, if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that is of concern.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Nov 27, 2013 at 6:10 AM, &lt;Ola.Widlund_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:Ola.Widlund_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     We have an in-house application where we run two solvers in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     loosely coupled manner: The first solver runs a timestep, then the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     second solver does work on the same timestep, etc. As the two
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     solvers never execute at the same time, we would like to run the two
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     solvers in the same allocation (launching mpirun once for each of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     them). RAM is not an issue, so there should not be any risk of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     excessive swapping degrading performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     We use openmpi-1.4.5 compiled with torque integration. The torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     integration means we do not give a hostfile to mpirun, it will
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     itself query torque for the allocation info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Question:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Can we force one of the solvers to run in a *subset* of the full
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     allocation? How do we do that? I read in the FAQ that providing a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     hostfile to mpirun in this case (when it's not needed due to torque
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     integration) would cause a lot of problems...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Ola
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23106.php">Jean-Francois St-Pierre: "[OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>Previous message:</strong> <a href="23104.php">Ralph Castain: "[OMPI users] OMPI Performance Metrics"</a>
<li><strong>In reply to:</strong> <a href="23103.php">Ralph Castain: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23165.php">Ola.Widlund_at_[hidden]: "Re: [OMPI users] openmpi+torque: How run job in a subset of the allocation?"</a>
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
