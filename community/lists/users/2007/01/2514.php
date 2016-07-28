<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 13:50:27 2007" -->
<!-- isoreceived="20070119185027" -->
<!-- sent="Fri, 19 Jan 2007 10:50:21 -0800" -->
<!-- isosent="20070119185021" -->
<!-- name="Robert Bicknell" -->
<!-- email="robbicknell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Slurm and Openmpi" -->
<!-- id="d5c795dc0701191050v4abc152fj791511308b1238b5_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C1D619F0.138A%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Robert Bicknell (<em>robbicknell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 13:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2515.php">Jeff Squyres: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>Previous message:</strong> <a href="2513.php">Gleb Natapov: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2508.php">Ralph Castain: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2515.php">Jeff Squyres: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>Reply:</strong> <a href="2515.php">Jeff Squyres: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your response. The program that I have been using for testing
<br>
purposes is a simple hello:
<br>
<p><p>#include &lt;stdio.h&gt;
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p><p>#include &lt;sys/time.h&gt;
<br>
#include &lt;sys/resource.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
main(int argc, char *argv)
<br>
{
<br>
&nbsp;&nbsp;char name[BUFSIZ];
<br>
&nbsp;&nbsp;int length;
<br>
&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;struct rlimit rlim;
<br>
&nbsp;&nbsp;FILE *output;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Get_processor_name(name, &amp;length);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;rank = 0;
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>// while(1) {
<br>
&nbsp;&nbsp;printf(&quot;%s: hello world from rank %d\n&quot;, name, rank);
<br>
&nbsp;&nbsp;sleep(1);
<br>
// }
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>If I run this program not in a slurm environment I get the following
<br>
<p>mpirun -np 4 -mca btl tcp,self -host wolf1,master ./hello
<br>
<p>master: hello world from rank 1
<br>
wolf1: hello world from rank 0
<br>
wolf1: hello world from rank 2
<br>
master: hello world from rank 3
<br>
<p>This is  exactly what I expect. Now if I create a slurm environment using
<br>
the following:
<br>
<p>srun -n 4 -A
<br>
<p>The output of printenv|grep SLRUM gives me:
<br>
<p>SLURM_NODELIST=master,wolf1
<br>
SLURM_SRUN_COMM_PORT=58929
<br>
SLURM_MEM_BIND_TYPE=
<br>
SLURM_CPU_BIND_VERBOSE=quiet
<br>
SLURM_MEM_BIND_LIST=
<br>
SLURM_CPU_BIND_LIST=
<br>
SLURM_NNODES=2
<br>
SLURM_JOBID=66135
<br>
SLURM_TASKS_PER_NODE=2(x2)
<br>
SLURM_SRUN_COMM_HOST=master
<br>
SLURM_CPU_BIND_TYPE=
<br>
SLURM_MEM_BIND_VERBOSE=quiet
<br>
SLURM_NPROCS=4
<br>
<p>This seems to indicate that both master and wolf1 have been allocated and
<br>
that each node should run 2 tasks, which is correct since both master and
<br>
wolf1 are dual processor machines.
<br>
<p>Now if I run:
<br>
<p>mpirun -np 4 -mca btl tcp,self ./hello
<br>
<p>The output is:
<br>
<p>master: hello world from rank 1
<br>
master: hello world from rank 2
<br>
master: hello world from rank 3
<br>
master: hello world from rank 0
<br>
<p><p>All four processes are running on master and none on wolf1.
<br>
<p>If I try the following and specify the hosts. I get the following error
<br>
message.
<br>
<p>mpirun -np 4 -host wolf1,master -mca btl tcp,self ./hello
<br>
<p>--------------------------------------------------------------------------
<br>
Some of the requested hosts are not included in the current allocation for
<br>
the
<br>
application:
<br>
&nbsp;&nbsp;./hello
<br>
The requested hosts were:
<br>
&nbsp;&nbsp;wolf1,master
<br>
<p>Verify that you have mapped the allocated resources properly using the
<br>
--host specification.
<br>
--------------------------------------------------------------------------
<br>
[master:28022] [0,0,0] ORTE_ERROR_LOG: Out of resource in file rmgr_urm.c at
<br>
line 377
<br>
[master:28022] mpirun: spawn failed with errno=-2
<br>
<p><p>I'm at a loss to figure out how to get this working correctly. Any help
<br>
would be greatly appreciated.
<br>
<p>Bob
<br>
<p>On 1/19/07, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI and SLURM should work together just fine right out-of-the-box.
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev1">&gt; typical command progression is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; srun -n x -A
</span><br>
<span class="quotelev1">&gt; mpirun -n y .....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are doing those commands and still see everything running on the
</span><br>
<span class="quotelev1">&gt; head
</span><br>
<span class="quotelev1">&gt; node, then two things could be happening:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) you really aren't getting an allocation from slurm. Perhaps you don't
</span><br>
<span class="quotelev1">&gt; have slurm setup correctly and aren't actually seeing the allocation in
</span><br>
<span class="quotelev1">&gt; your
</span><br>
<span class="quotelev1">&gt; environment. Do a &quot;printenv | grep SLURM&quot; and see if you find the
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev1">&gt; variables:
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=8
</span><br>
<span class="quotelev1">&gt; SLURM_CPU_BIND_VERBOSE=quiet
</span><br>
<span class="quotelev1">&gt; SLURM_CPU_BIND_TYPE=
</span><br>
<span class="quotelev1">&gt; SLURM_CPU_BIND_LIST=
</span><br>
<span class="quotelev1">&gt; SLURM_MEM_BIND_VERBOSE=quiet
</span><br>
<span class="quotelev1">&gt; SLURM_MEM_BIND_TYPE=
</span><br>
<span class="quotelev1">&gt; SLURM_MEM_BIND_LIST=
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=47225
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=odin[013-014]
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=4(x2)
</span><br>
<span class="quotelev1">&gt; SLURM_SRUN_COMM_PORT=43206
</span><br>
<span class="quotelev1">&gt; SLURM_SRUN_COMM_HOST=odin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Obviously, the values will be different, but we really need the
</span><br>
<span class="quotelev1">&gt; TASKS_PER_NODE and NODELIST ones to be there
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) the master node is being included in your nodelist and you aren't
</span><br>
<span class="quotelev1">&gt; running enough mpi processes to need more nodes (i.e., the number of slots
</span><br>
<span class="quotelev1">&gt; on the master node is greater than or equal to the num procs you
</span><br>
<span class="quotelev1">&gt; requested).
</span><br>
<span class="quotelev1">&gt; You can force Open MPI to not run on your master node by including
</span><br>
<span class="quotelev1">&gt; &quot;--nolocal&quot; on your command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, if the master node is the only thing on the nodelist, this will
</span><br>
<span class="quotelev1">&gt; cause mpirun to abort as there is nothing else for us to use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/18/07 11:03 PM, &quot;Robert Bicknell&quot; &lt;robbicknell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to get slurm and openmpi to work together on a debian, two
</span><br>
<span class="quotelev2">&gt; &gt; node cluster.  Slurm and openmpi seem to work fine seperately, but when
</span><br>
<span class="quotelev2">&gt; &gt; I try to run a mpi program in a slurm allocation, all the processes get
</span><br>
<span class="quotelev2">&gt; &gt; run on the master node, and not distributed to the second node. What am
</span><br>
<span class="quotelev2">&gt; &gt; I doing wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bob
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2514/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2515.php">Jeff Squyres: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>Previous message:</strong> <a href="2513.php">Gleb Natapov: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2508.php">Ralph Castain: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2515.php">Jeff Squyres: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>Reply:</strong> <a href="2515.php">Jeff Squyres: "Re: [OMPI users] Slurm and Openmpi"</a>
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
