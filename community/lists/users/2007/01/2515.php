<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 14:35:16 2007" -->
<!-- isoreceived="20070119193516" -->
<!-- sent="Fri, 19 Jan 2007 14:35:02 -0500" -->
<!-- isosent="20070119193502" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Slurm and Openmpi" -->
<!-- id="CDE46CC3-6F4B-4A98-BDFE-7578C0F6EADE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d5c795dc0701191050v4abc152fj791511308b1238b5_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 14:35:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2516.php">Evan Smyth: "[OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>Previous message:</strong> <a href="2514.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>In reply to:</strong> <a href="2514.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2518.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>Reply:</strong> <a href="2518.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the SLURM code in Open MPI is making an assumption that is  
<br>
failing in your case: we assume that your nodes will have a specific  
<br>
naming convention:
<br>
<p>mycluster.example.com --&gt; head node
<br>
mycluster01.example.com --&gt; cluster node 1
<br>
mycluster02.example.com --&gt; cluster node 2
<br>
...etc.
<br>
<p>OMPI is therefore parsing the SLURM environment and not correctly  
<br>
groking the &quot;master,wolf1&quot; string because, to be honest, I didn't  
<br>
even know that SLURM supported that scenario.  I.e., I thought SLURM  
<br>
required the naming convention I listed above.  In hindsight, that's  
<br>
a pretty silly assumption, but to be fair, you're the first user that  
<br>
ever came to us with this problem (i.e., we use pretty much the same  
<br>
string parsing in LAM/MPI, which has had SLURM support for several  
<br>
years).  Oops!
<br>
<p>We can fix this, but I don't know if it'll make the v1.2 cutoff or  
<br>
not.  :-\
<br>
<p>Thanks for bringing this to our attention!
<br>
<p><p><p>On Jan 19, 2007, at 1:50 PM, Robert Bicknell wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your response. The program that I have been using for  
</span><br>
<span class="quotelev1">&gt; testing purposes is a simple hello:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/resource.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; main(int argc, char *argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   char name[BUFSIZ];
</span><br>
<span class="quotelev1">&gt;   int length;
</span><br>
<span class="quotelev1">&gt;   int rank;
</span><br>
<span class="quotelev1">&gt;   struct rlimit rlim;
</span><br>
<span class="quotelev1">&gt;   FILE *output;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Get_processor_name(name, &amp;length);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;   rank = 0;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // while(1) {
</span><br>
<span class="quotelev1">&gt;   printf(&quot;%s: hello world from rank %d\n&quot;, name, rank);
</span><br>
<span class="quotelev1">&gt;   sleep(1);
</span><br>
<span class="quotelev1">&gt; // }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run this program not in a slurm environment I get the following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -mca btl tcp,self -host wolf1,master ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; master: hello world from rank 1
</span><br>
<span class="quotelev1">&gt; wolf1: hello world from rank 0
</span><br>
<span class="quotelev1">&gt; wolf1: hello world from rank 2
</span><br>
<span class="quotelev1">&gt; master: hello world from rank 3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is  exactly what I expect. Now if I create a slurm environment  
</span><br>
<span class="quotelev1">&gt; using the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; srun -n 4 -A
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of printenv|grep SLRUM gives me:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=master,wolf1
</span><br>
<span class="quotelev1">&gt; SLURM_SRUN_COMM_PORT=58929
</span><br>
<span class="quotelev1">&gt; SLURM_MEM_BIND_TYPE=
</span><br>
<span class="quotelev1">&gt; SLURM_CPU_BIND_VERBOSE=quiet
</span><br>
<span class="quotelev1">&gt; SLURM_MEM_BIND_LIST=
</span><br>
<span class="quotelev1">&gt; SLURM_CPU_BIND_LIST=
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=66135
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev1">&gt; SLURM_SRUN_COMM_HOST=master
</span><br>
<span class="quotelev1">&gt; SLURM_CPU_BIND_TYPE=
</span><br>
<span class="quotelev1">&gt; SLURM_MEM_BIND_VERBOSE=quiet
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to indicate that both master and wolf1 have been  
</span><br>
<span class="quotelev1">&gt; allocated and that each node should run 2 tasks, which is correct  
</span><br>
<span class="quotelev1">&gt; since both master and wolf1 are dual processor machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now if I run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -mca btl tcp,self ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; master: hello world from rank 1
</span><br>
<span class="quotelev1">&gt; master: hello world from rank 2
</span><br>
<span class="quotelev1">&gt; master: hello world from rank 3
</span><br>
<span class="quotelev1">&gt; master: hello world from rank 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All four processes are running on master and none on wolf1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I try the following and specify the hosts. I get the following  
</span><br>
<span class="quotelev1">&gt; error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -host wolf1,master -mca btl tcp,self ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Some of the requested hosts are not included in the current  
</span><br>
<span class="quotelev1">&gt; allocation for the
</span><br>
<span class="quotelev1">&gt; application:
</span><br>
<span class="quotelev1">&gt;   ./hello
</span><br>
<span class="quotelev1">&gt; The requested hosts were:
</span><br>
<span class="quotelev1">&gt;   wolf1,master
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host specification.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; [master:28022] [0,0,0] ORTE_ERROR_LOG: Out of resource in file  
</span><br>
<span class="quotelev1">&gt; rmgr_urm.c at line 377
</span><br>
<span class="quotelev1">&gt; [master:28022] mpirun: spawn failed with errno=-2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm at a loss to figure out how to get this working correctly. Any  
</span><br>
<span class="quotelev1">&gt; help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/19/07, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: Open MPI and SLURM  
</span><br>
<span class="quotelev1">&gt; should work together just fine right out-of-the-box. The
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
<span class="quotelev1">&gt; If you are doing those commands and still see everything running on  
</span><br>
<span class="quotelev1">&gt; the head
</span><br>
<span class="quotelev1">&gt; node, then two things could be happening:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) you really aren't getting an allocation from slurm. Perhaps you  
</span><br>
<span class="quotelev1">&gt; don't
</span><br>
<span class="quotelev1">&gt; have slurm setup correctly and aren't actually seeing the  
</span><br>
<span class="quotelev1">&gt; allocation in your
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
<span class="quotelev1">&gt; running enough mpi processes to need more nodes (i.e., the number  
</span><br>
<span class="quotelev1">&gt; of slots
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
<span class="quotelev1">&gt; Of course, if the master node is the only thing on the nodelist,  
</span><br>
<span class="quotelev1">&gt; this will
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
<span class="quotelev2">&gt; &gt; I'm trying to get slurm and openmpi to work together on a debian,  
</span><br>
<span class="quotelev1">&gt; two
</span><br>
<span class="quotelev2">&gt; &gt; node cluster.  Slurm and openmpi seem to work fine seperately,  
</span><br>
<span class="quotelev1">&gt; but when
</span><br>
<span class="quotelev2">&gt; &gt; I try to run a mpi program in a slurm allocation, all the  
</span><br>
<span class="quotelev1">&gt; processes get
</span><br>
<span class="quotelev2">&gt; &gt; run on the master node, and not distributed to the second node.  
</span><br>
<span class="quotelev1">&gt; What am
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2516.php">Evan Smyth: "[OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>Previous message:</strong> <a href="2514.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>In reply to:</strong> <a href="2514.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2518.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>Reply:</strong> <a href="2518.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
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
