<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 19:04:41 2007" -->
<!-- isoreceived="20070120000441" -->
<!-- sent="Fri, 19 Jan 2007 16:04:37 -0800" -->
<!-- isosent="20070120000437" -->
<!-- name="Robert Bicknell" -->
<!-- email="robbicknell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Slurm and Openmpi" -->
<!-- id="d5c795dc0701191604x4bb9c887m4ce469bd060ac844_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CDE46CC3-6F4B-4A98-BDFE-7578C0F6EADE_at_cisco.com" -->
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
<strong>Date:</strong> 2007-01-19 19:04:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2519.php">Axel Schweiger: "[OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Previous message:</strong> <a href="2517.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2515.php">Jeff Squyres: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the help!!!! I renamed the nodes, and now slurm and openmpi seem
<br>
to be playing nicely with each other.
<br>
<p>Bob
<br>
<p>On 1/19/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the SLURM code in Open MPI is making an assumption that is
</span><br>
<span class="quotelev1">&gt; failing in your case: we assume that your nodes will have a specific
</span><br>
<span class="quotelev1">&gt; naming convention:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mycluster.example.com --&gt; head node
</span><br>
<span class="quotelev1">&gt; mycluster01.example.com --&gt; cluster node 1
</span><br>
<span class="quotelev1">&gt; mycluster02.example.com --&gt; cluster node 2
</span><br>
<span class="quotelev1">&gt; ...etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI is therefore parsing the SLURM environment and not correctly
</span><br>
<span class="quotelev1">&gt; groking the &quot;master,wolf1&quot; string because, to be honest, I didn't
</span><br>
<span class="quotelev1">&gt; even know that SLURM supported that scenario.  I.e., I thought SLURM
</span><br>
<span class="quotelev1">&gt; required the naming convention I listed above.  In hindsight, that's
</span><br>
<span class="quotelev1">&gt; a pretty silly assumption, but to be fair, you're the first user that
</span><br>
<span class="quotelev1">&gt; ever came to us with this problem (i.e., we use pretty much the same
</span><br>
<span class="quotelev1">&gt; string parsing in LAM/MPI, which has had SLURM support for several
</span><br>
<span class="quotelev1">&gt; years).  Oops!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can fix this, but I don't know if it'll make the v1.2 cutoff or
</span><br>
<span class="quotelev1">&gt; not.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for bringing this to our attention!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2007, at 1:50 PM, Robert Bicknell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your response. The program that I have been using for
</span><br>
<span class="quotelev2">&gt; &gt; testing purposes is a simple hello:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt; stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;sys/time.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;sys/resource.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; main(int argc, char *argv)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   char name[BUFSIZ];
</span><br>
<span class="quotelev2">&gt; &gt;   int length;
</span><br>
<span class="quotelev2">&gt; &gt;   int rank;
</span><br>
<span class="quotelev2">&gt; &gt;   struct rlimit rlim;
</span><br>
<span class="quotelev2">&gt; &gt;   FILE *output;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Get_processor_name(name, &amp;length);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;   rank = 0;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; // while(1) {
</span><br>
<span class="quotelev2">&gt; &gt;   printf(&quot;%s: hello world from rank %d\n&quot;, name, rank);
</span><br>
<span class="quotelev2">&gt; &gt;   sleep(1);
</span><br>
<span class="quotelev2">&gt; &gt; // }
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I run this program not in a slurm environment I get the following
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 4 -mca btl tcp,self -host wolf1,master ./hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; master: hello world from rank 1
</span><br>
<span class="quotelev2">&gt; &gt; wolf1: hello world from rank 0
</span><br>
<span class="quotelev2">&gt; &gt; wolf1: hello world from rank 2
</span><br>
<span class="quotelev2">&gt; &gt; master: hello world from rank 3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is  exactly what I expect. Now if I create a slurm environment
</span><br>
<span class="quotelev2">&gt; &gt; using the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; srun -n 4 -A
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output of printenv|grep SLRUM gives me:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODELIST=master,wolf1
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_PORT=58929
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_MEM_BIND_TYPE=
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_CPU_BIND_VERBOSE=quiet
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_MEM_BIND_LIST=
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_CPU_BIND_LIST=
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NNODES=2
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOBID=66135
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASKS_PER_NODE=2(x2)
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_HOST=master
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_CPU_BIND_TYPE=
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_MEM_BIND_VERBOSE=quiet
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This seems to indicate that both master and wolf1 have been
</span><br>
<span class="quotelev2">&gt; &gt; allocated and that each node should run 2 tasks, which is correct
</span><br>
<span class="quotelev2">&gt; &gt; since both master and wolf1 are dual processor machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now if I run:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 4 -mca btl tcp,self ./hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The output is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; master: hello world from rank 1
</span><br>
<span class="quotelev2">&gt; &gt; master: hello world from rank 2
</span><br>
<span class="quotelev2">&gt; &gt; master: hello world from rank 3
</span><br>
<span class="quotelev2">&gt; &gt; master: hello world from rank 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All four processes are running on master and none on wolf1.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I try the following and specify the hosts. I get the following
</span><br>
<span class="quotelev2">&gt; &gt; error message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 4 -host wolf1,master -mca btl tcp,self ./hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; Some of the requested hosts are not included in the current
</span><br>
<span class="quotelev2">&gt; &gt; allocation for the
</span><br>
<span class="quotelev2">&gt; &gt; application:
</span><br>
<span class="quotelev2">&gt; &gt;   ./hello
</span><br>
<span class="quotelev2">&gt; &gt; The requested hosts were:
</span><br>
<span class="quotelev2">&gt; &gt;   wolf1,master
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev2">&gt; &gt; --host specification.
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ----
</span><br>
<span class="quotelev2">&gt; &gt; [master:28022] [0,0,0] ORTE_ERROR_LOG: Out of resource in file
</span><br>
<span class="quotelev2">&gt; &gt; rmgr_urm.c at line 377
</span><br>
<span class="quotelev2">&gt; &gt; [master:28022] mpirun: spawn failed with errno=-2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm at a loss to figure out how to get this working correctly. Any
</span><br>
<span class="quotelev2">&gt; &gt; help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bob
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 1/19/07, Ralph Castain &lt; rhc_at_[hidden]&gt; wrote: Open MPI and SLURM
</span><br>
<span class="quotelev2">&gt; &gt; should work together just fine right out-of-the-box. The
</span><br>
<span class="quotelev2">&gt; &gt; typical command progression is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; srun -n x -A
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -n y .....
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you are doing those commands and still see everything running on
</span><br>
<span class="quotelev2">&gt; &gt; the head
</span><br>
<span class="quotelev2">&gt; &gt; node, then two things could be happening:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (a) you really aren't getting an allocation from slurm. Perhaps you
</span><br>
<span class="quotelev2">&gt; &gt; don't
</span><br>
<span class="quotelev2">&gt; &gt; have slurm setup correctly and aren't actually seeing the
</span><br>
<span class="quotelev2">&gt; &gt; allocation in your
</span><br>
<span class="quotelev2">&gt; &gt; environment. Do a &quot;printenv | grep SLURM&quot; and see if you find the
</span><br>
<span class="quotelev2">&gt; &gt; following
</span><br>
<span class="quotelev2">&gt; &gt; variables:
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NPROCS=8
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_CPU_BIND_VERBOSE=quiet
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_CPU_BIND_TYPE=
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_CPU_BIND_LIST=
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_MEM_BIND_VERBOSE=quiet
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_MEM_BIND_TYPE=
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_MEM_BIND_LIST=
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_JOBID=47225
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NNODES=2
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_NODELIST=odin[013-014]
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_TASKS_PER_NODE=4(x2)
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_PORT=43206
</span><br>
<span class="quotelev2">&gt; &gt; SLURM_SRUN_COMM_HOST=odin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Obviously, the values will be different, but we really need the
</span><br>
<span class="quotelev2">&gt; &gt; TASKS_PER_NODE and NODELIST ones to be there
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (b) the master node is being included in your nodelist and you aren't
</span><br>
<span class="quotelev2">&gt; &gt; running enough mpi processes to need more nodes (i.e., the number
</span><br>
<span class="quotelev2">&gt; &gt; of slots
</span><br>
<span class="quotelev2">&gt; &gt; on the master node is greater than or equal to the num procs you
</span><br>
<span class="quotelev2">&gt; &gt; requested).
</span><br>
<span class="quotelev2">&gt; &gt; You can force Open MPI to not run on your master node by including
</span><br>
<span class="quotelev2">&gt; &gt; &quot;--nolocal&quot; on your command line.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Of course, if the master node is the only thing on the nodelist,
</span><br>
<span class="quotelev2">&gt; &gt; this will
</span><br>
<span class="quotelev2">&gt; &gt; cause mpirun to abort as there is nothing else for us to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope that helps
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 1/18/07 11:03 PM, &quot;Robert Bicknell&quot; &lt;robbicknell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm trying to get slurm and openmpi to work together on a debian,
</span><br>
<span class="quotelev2">&gt; &gt; two
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node cluster.  Slurm and openmpi seem to work fine seperately,
</span><br>
<span class="quotelev2">&gt; &gt; but when
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I try to run a mpi program in a slurm allocation, all the
</span><br>
<span class="quotelev2">&gt; &gt; processes get
</span><br>
<span class="quotelev3">&gt; &gt; &gt; run on the master node, and not distributed to the second node.
</span><br>
<span class="quotelev2">&gt; &gt; What am
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I doing wrong?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Bob
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2518/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2519.php">Axel Schweiger: "[OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Previous message:</strong> <a href="2517.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>In reply to:</strong> <a href="2515.php">Jeff Squyres: "Re: [OMPI users] Slurm and Openmpi"</a>
<!-- nextthread="start" -->
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
