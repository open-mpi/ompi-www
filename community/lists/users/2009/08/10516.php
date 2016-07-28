<?
$subject_val = "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 30 12:04:16 2009" -->
<!-- isoreceived="20090830160416" -->
<!-- sent="Sun, 30 Aug 2009 10:04:02 -0600" -->
<!-- isosent="20090830160402" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables" -->
<!-- id="D1127252-C0B3-41FF-A2FE-4D457EA1F881_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b3b2c75206398f3b110a35ed9d7578e2.squirrel_at_webmail.ndsu.nodak.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-30 12:04:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10517.php">Changsheng Jiang: "[OMPI users] OpenMPI code snippet causes a dead loop"</a>
<li><strong>Previous message:</strong> <a href="10515.php">Daniel Sp&#229;ngberg: "[OMPI users] Very different speed of collective tuned algorithms for alltoallv"</a>
<li><strong>In reply to:</strong> <a href="10473.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After talking with the slurm folks and tracking down the history of  
<br>
how OMPI dealt with this variable, I have made a change to OMPI's use  
<br>
of it. This should now work correctly in the upcoming release.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Aug 24, 2009, at 2:22 PM, matthew.piehl_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hello again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you requested:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node64-test ~&gt;salloc -n7
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 827
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node64-test ~&gt;srun hostname
</span><br>
<span class="quotelev1">&gt; node64-17.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-17.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-20.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-18.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-19.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-18.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-19.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node64-test ~&gt;printenv | grep SLURM
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=node64-[17-20]
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=4
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=827
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=2(x3),1
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=827
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=7
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=node64-[17-20]
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=2(x4)
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again for your time.
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Very interesting! I see the problem - we have never encountered the
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_TASKS_PER_NODE in that format, while the  
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_JOB_CPUS_PER_NODE
</span><br>
<span class="quotelev2">&gt;&gt; indicates that we have indeed been allocated two processors on each  
</span><br>
<span class="quotelev2">&gt;&gt; of the
</span><br>
<span class="quotelev2">&gt;&gt; nodes! So when you just do mpirun without specifying the number of
</span><br>
<span class="quotelev2">&gt;&gt; processes, we will launch 4 processes (2 on each node) since that  
</span><br>
<span class="quotelev2">&gt;&gt; is what
</span><br>
<span class="quotelev2">&gt;&gt; SLURM told us we have been given.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting configuration you have there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can add some logic that tests for internal consistency between  
</span><br>
<span class="quotelev2">&gt;&gt; the two
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; compensates for the discrepancy. Can you get a slightly bigger  
</span><br>
<span class="quotelev2">&gt;&gt; allocation,
</span><br>
<span class="quotelev2">&gt;&gt; one that covers several nodes? For example, &quot;salloc -n7&quot;? And then  
</span><br>
<span class="quotelev2">&gt;&gt; send
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; output again from &quot;printenv | grep SLURM&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need to see if your configuration use a regex to describe the
</span><br>
<span class="quotelev2">&gt;&gt; SLURM_TASKS_PER_NODE, and what it looks like.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 24, 2009 at 1:55 PM, &lt;matthew.piehl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hopefully the below information will be helpful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM Version: 1.3.15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-test ~&gt;salloc -n3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc: Granted job allocation 826
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-test ~&gt;srun hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-24.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-25.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-24.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-test ~&gt;printenv | grep SLURM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_NODELIST=node64-[24-25]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_JOBID=826
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_TASKS_PER_NODE=2,1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_JOB_ID=826
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_NPROCS=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_JOB_NODELIST=node64-[24-25]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE=2(x2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_JOB_NUM_NODES=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-test ~&gt;mpirun --display-allocation hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: node64-test.xxxx.xxxx.xxxx.xxxx   Num slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: node64-24 Num slots: 2    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: Name: node64-25 Num slots: 2    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-24.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-24.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-25.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node64-25.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Haven't seen that before on any of our machines.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you do &quot;printenv | grep SLURM&quot; after the salloc and send the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; results?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What version of SLURM is this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please run &quot;mpirun --display-allocation hostname&quot; and send the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mon, Aug 24, 2009 at 11:30 AM, &lt;matthew.piehl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've seem to run into an interesting problem with openMPI. After
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocating 3 processors and confirming that the 3 processors are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allocated. mpirun on a simple mpitest program seems to run on 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processors. We have 2 processors per node. I can repeat this case
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; odd number of nodes, openMPI seems to take any remaining  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; processors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; box. We are running openMPI v1.3.3. Here is an example of what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; happens:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node64-test ~&gt;salloc -n3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; salloc: Granted job allocation 825
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node64-test ~&gt;srun hostname
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node64-test ~&gt;MX_RCACHE=0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=&quot;/hurd/mpi/openmpi/lib:/usr/local/mx/lib&quot; mpirun
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi_pgms/mpitest
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI domain size: 4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am rank 000 - node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am rank 003 - node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am rank 001 - node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am rank 002 - node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For those who may be curious here is the program:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extern int main(int argc, char *argv[]);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extern int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       auto int rank,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                size,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                namelen;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Status status;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       static char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      if ( rank == 0 )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               fprintf(stdout,&quot;My name is: %s\n&quot;,processor_name);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               fprintf(stdout,&quot;Cluster size is: %d\n&quot;, size);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;               fprintf(stdout,&quot;My name is: %s\n&quot;,processor_name);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       return(0);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm curious if this is a bug in the way openMPI interprets SLURM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment variables. If you have any ideas or need any more
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; information
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; let me know.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10517.php">Changsheng Jiang: "[OMPI users] OpenMPI code snippet causes a dead loop"</a>
<li><strong>Previous message:</strong> <a href="10515.php">Daniel Sp&#229;ngberg: "[OMPI users] Very different speed of collective tuned algorithms for alltoallv"</a>
<li><strong>In reply to:</strong> <a href="10473.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
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
