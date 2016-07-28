<?
$subject_val = "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 05:44:09 2015" -->
<!-- isoreceived="20151003094409" -->
<!-- sent="Sat, 3 Oct 2015 11:43:57 +0200" -->
<!-- isosent="20151003094357" -->
<!-- name="marcin.krotkiewski" -->
<!-- email="marcin.krotkiewski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes" -->
<!-- id="560FA35D.2000600_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="F329011F-BF38-471E-A166-F02FB9DA8395_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes<br>
<strong>From:</strong> marcin.krotkiewski (<em>marcin.krotkiewski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-03 05:43:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27777.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI v1.10.1rc1 release"</a>
<li><strong>Previous message:</strong> <a href="27775.php">Ralph Castain: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>In reply to:</strong> <a href="27774.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27778.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27778.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Ralph,
<br>
<p>I submit my slurm job as follows
<br>
<p>salloc --ntasks=64 --mem-per-cpu=2G --time=1:0:0
<br>
<p>Effectively, the allocated CPU cores are spread amount many cluster 
<br>
nodes. SLURM uses cgroups to limit the CPU cores available for mpi 
<br>
processes running on a given cluster node. Compute nodes are 2-socket, 
<br>
8-core E5-2670 systems with HyperThreading on
<br>
<p>node 0 cpus: 0 1 2 3 4 5 6 7 16 17 18 19 20 21 22 23
<br>
node 1 cpus: 8 9 10 11 12 13 14 15 24 25 26 27 28 29 30 31
<br>
node distances:
<br>
node   0   1
<br>
&nbsp;&nbsp;&nbsp;0:  10  21
<br>
&nbsp;&nbsp;&nbsp;1:  21  10
<br>
<p>I run MPI program with command
<br>
<p>mpirun  --report-bindings --bind-to core -np 64 ./affinity
<br>
<p>The program simply runs sched_getaffinity for each process and prints 
<br>
out the result.
<br>
<p>-----------
<br>
TEST RUN 1
<br>
-----------
<br>
For this particular job the problem is more severe: openmpi fails to run 
<br>
at all with error
<br>
<p>--------------------------------------------------------------------------
<br>
Open MPI tried to bind a new process, but something went wrong.  The
<br>
process was killed without launching the target application.  Your job
<br>
will now abort.
<br>
<p>&nbsp;&nbsp;&nbsp;Local host:        c6-6
<br>
&nbsp;&nbsp;&nbsp;Application name:  ./affinity
<br>
&nbsp;&nbsp;&nbsp;Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;8,24&quot;
<br>
&nbsp;&nbsp;&nbsp;Location:          odls_default_module.c:551
<br>
--------------------------------------------------------------------------
<br>
<p>This is SLURM environment variables:
<br>
<p>SLURM_JOBID=12712225
<br>
SLURM_JOB_CPUS_PER_NODE='3(x2),2,1(x3),2(x2),1,3(x3),5,1,4,1,3,2,3,7,1,5,6,1'
<br>
SLURM_JOB_ID=12712225
<br>
SLURM_JOB_NODELIST='c6-[3,6-8,12,14,17,22-23],c8-[4,7,9,17,20,28],c15-[5,10,18,20,22-24,28],c16-11'
<br>
SLURM_JOB_NUM_NODES=24
<br>
SLURM_JOB_PARTITION=normal
<br>
SLURM_MEM_PER_CPU=2048
<br>
SLURM_NNODES=24
<br>
SLURM_NODELIST='c6-[3,6-8,12,14,17,22-23],c8-[4,7,9,17,20,28],c15-[5,10,18,20,22-24,28],c16-11'
<br>
SLURM_NODE_ALIASES='(null)'
<br>
SLURM_NPROCS=64
<br>
SLURM_NTASKS=64
<br>
SLURM_SUBMIT_DIR=/cluster/home/marcink
<br>
SLURM_SUBMIT_HOST=login-0-2.local
<br>
SLURM_TASKS_PER_NODE='3(x2),2,1(x3),2(x2),1,3(x3),5,1,4,1,3,2,3,7,1,5,6,1'
<br>
<p>There is also a lot of warnings like
<br>
<p>[compute-6-6.local:20158] MCW rank 4 is not bound (or bound to all 
<br>
available processors)
<br>
<p><p>-----------
<br>
TEST RUN 2
<br>
-----------
<br>
<p>In another allocation I got a different error
<br>
<p>--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Node:        c6-19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
<p>and the allocation was the following
<br>
<p>SLURM_JOBID=12712250
<br>
SLURM_JOB_CPUS_PER_NODE='3(x2),2,1,15,1,3,16,2,1,3(x2),2,5,4'
<br>
SLURM_JOB_ID=12712250
<br>
SLURM_JOB_NODELIST='c6-[3,6-8,12,14,17,19,22-23],c8-[4,7,9,17,28]'
<br>
SLURM_JOB_NUM_NODES=15
<br>
SLURM_JOB_PARTITION=normal
<br>
SLURM_MEM_PER_CPU=2048
<br>
SLURM_NNODES=15
<br>
SLURM_NODELIST='c6-[3,6-8,12,14,17,19,22-23],c8-[4,7,9,17,28]'
<br>
SLURM_NODE_ALIASES='(null)'
<br>
SLURM_NPROCS=64
<br>
SLURM_NTASKS=64
<br>
SLURM_SUBMIT_DIR=/cluster/home/marcink
<br>
SLURM_SUBMIT_HOST=login-0-2.local
<br>
SLURM_TASKS_PER_NODE='3(x2),2,1,15,1,3,16,2,1,3(x2),2,5,4'
<br>
<p><p>If in this case I run on only 32 cores
<br>
<p>mpirun  --report-bindings --bind-to core -np 32 ./affinity
<br>
<p>the process starts, but I get the original binding problem:
<br>
<p>[compute-6-8.local:31414] MCW rank 8 is not bound (or bound to all 
<br>
available processors)
<br>
<p>Running with --hetero-nodes yields exactly the same results
<br>
<p><p><p><p><p>Hope the above is useful. The problem with binding under SLURM with CPU 
<br>
cores spread over nodes seems to be very reproducible. It is actually 
<br>
very often that OpenMPI dies with some error like above. These tests 
<br>
were run with openmpi-1.8.8 and 1.10.0, both giving same results.
<br>
<p>One more suggestion. The warning message (MCW rank 8 is not bound...) is 
<br>
ONLY displayed when I use --report-bindings. It is never shown if I 
<br>
leave out this option, and although the binding is wrong the user is not 
<br>
notified. I think it would be better to show this warning in all cases 
<br>
binding fails.
<br>
<p>Let me know if you need more information. I can help to debug this - it 
<br>
is a rather crucial issue.
<br>
<p>Thanks!
<br>
<p>Marcin
<br>
<p><p><p><p><p><p>On 10/02/2015 11:49 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Can you please send me the allocation request you made (so I can see what you specified on the cmd line), and the mpirun cmd line?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 2, 2015, at 8:25 AM, Marcin Krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I fail to make OpenMPI bind to cores correctly when running from within SLURM-allocated CPU resources spread over a range of compute nodes in an otherwise homogeneous cluster. I have found this thread
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/06/24682.php">http://www.open-mpi.org/community/lists/users/2014/06/24682.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and did try to use what Ralph suggested there (--hetero-nodes), but it does not work (v. 1.10.0). When running with --report-bindings I get messages like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [compute-9-11.local:27571] MCW rank 10 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for all ranks outside of my first physical compute node. Moreover, everything works as expected if I ask SLURM to assign entire compute nodes. So it does look like Ralph's diagnose presented in that thread is correct, just the --hetero-nodes switch does not work for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have written a short code that uses sched_getaffinity to print the effective bindings: all MPI ranks except of those on the first node are bound to all CPU cores allocated by SLURM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I have to do something except of --hetero-nodes, or is this a problem that needs further investigation?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marcin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27770.php">http://www.open-mpi.org/community/lists/users/2015/10/27770.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27774.php">http://www.open-mpi.org/community/lists/users/2015/10/27774.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27777.php">Jeff Squyres (jsquyres): "[OMPI users] Open MPI v1.10.1rc1 release"</a>
<li><strong>Previous message:</strong> <a href="27775.php">Ralph Castain: "Re: [OMPI users] Need some help to track problem using openmpi"</a>
<li><strong>In reply to:</strong> <a href="27774.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27778.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Reply:</strong> <a href="27778.php">Ralph Castain: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
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
