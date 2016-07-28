<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 08:47:22 2007" -->
<!-- isoreceived="20070119134722" -->
<!-- sent="Fri, 19 Jan 2007 06:47:12 -0700" -->
<!-- isosent="20070119134712" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Slurm and Openmpi" -->
<!-- id="C1D619F0.138A%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45B05F29.2010806_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 08:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2509.php">Galen Shipman: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2507.php">Barry Evans: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2505.php">Robert Bicknell: "[OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2514.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>Reply:</strong> <a href="2514.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI and SLURM should work together just fine right out-of-the-box. The
<br>
typical command progression is:
<br>
<p>srun -n x -A
<br>
mpirun -n y .....
<br>
<p><p>If you are doing those commands and still see everything running on the head
<br>
node, then two things could be happening:
<br>
<p>(a) you really aren't getting an allocation from slurm. Perhaps you don't
<br>
have slurm setup correctly and aren't actually seeing the allocation in your
<br>
environment. Do a &quot;printenv | grep SLURM&quot; and see if you find the following
<br>
variables:
<br>
SLURM_NPROCS=8
<br>
SLURM_CPU_BIND_VERBOSE=quiet
<br>
SLURM_CPU_BIND_TYPE=
<br>
SLURM_CPU_BIND_LIST=
<br>
SLURM_MEM_BIND_VERBOSE=quiet
<br>
SLURM_MEM_BIND_TYPE=
<br>
SLURM_MEM_BIND_LIST=
<br>
SLURM_JOBID=47225
<br>
SLURM_NNODES=2
<br>
SLURM_NODELIST=odin[013-014]
<br>
SLURM_TASKS_PER_NODE=4(x2)
<br>
SLURM_SRUN_COMM_PORT=43206
<br>
SLURM_SRUN_COMM_HOST=odin
<br>
<p>Obviously, the values will be different, but we really need the
<br>
TASKS_PER_NODE and NODELIST ones to be there
<br>
<p>(b) the master node is being included in your nodelist and you aren't
<br>
running enough mpi processes to need more nodes (i.e., the number of slots
<br>
on the master node is greater than or equal to the num procs you requested).
<br>
You can force Open MPI to not run on your master node by including
<br>
&quot;--nolocal&quot; on your command line.
<br>
<p>Of course, if the master node is the only thing on the nodelist, this will
<br>
cause mpirun to abort as there is nothing else for us to use.
<br>
<p>Hope that helps
<br>
Ralph
<br>
<p><p>On 1/18/07 11:03 PM, &quot;Robert Bicknell&quot; &lt;robbicknell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to get slurm and openmpi to work together on a debian, two
</span><br>
<span class="quotelev1">&gt; node cluster.  Slurm and openmpi seem to work fine seperately, but when
</span><br>
<span class="quotelev1">&gt; I try to run a mpi program in a slurm allocation, all the processes get
</span><br>
<span class="quotelev1">&gt; run on the master node, and not distributed to the second node. What am
</span><br>
<span class="quotelev1">&gt; I doing wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bob
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
<li><strong>Next message:</strong> <a href="2509.php">Galen Shipman: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>Previous message:</strong> <a href="2507.php">Barry Evans: "Re: [OMPI users] Problems with ompi1.2b2, SGE and DLPOLY[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2505.php">Robert Bicknell: "[OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2514.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>Reply:</strong> <a href="2514.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
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
