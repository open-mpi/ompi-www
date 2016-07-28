<?
$subject_val = "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 16:02:52 2009" -->
<!-- isoreceived="20090824200252" -->
<!-- sent="Mon, 24 Aug 2009 14:02:46 -0600" -->
<!-- isosent="20090824200246" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables" -->
<!-- id="71d2d8cc0908241302m3c497180g5f5c0bc6424f640e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8db9f54a9b2895b84cdb5fa6a8ac85ef.squirrel_at_webmail.ndsu.nodak.edu" -->
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
<strong>Date:</strong> 2009-08-24 16:02:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10472.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="10470.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>In reply to:</strong> <a href="10470.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10473.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Reply:</strong> <a href="10473.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very interesting! I see the problem - we have never encountered the
<br>
SLURM_TASKS_PER_NODE in that format, while the SLURM_JOB_CPUS_PER_NODE
<br>
indicates that we have indeed been allocated two processors on each of the
<br>
nodes! So when you just do mpirun without specifying the number of
<br>
processes, we will launch 4 processes (2 on each node) since that is what
<br>
SLURM told us we have been given.
<br>
<p>Interesting configuration you have there.
<br>
<p>I can add some logic that tests for internal consistency between the two and
<br>
compensates for the discrepancy. Can you get a slightly bigger allocation,
<br>
one that covers several nodes? For example, &quot;salloc -n7&quot;? And then send the
<br>
output again from &quot;printenv | grep SLURM&quot;?
<br>
<p>I need to see if your configuration use a regex to describe the
<br>
SLURM_TASKS_PER_NODE, and what it looks like.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On Mon, Aug 24, 2009 at 1:55 PM, &lt;matthew.piehl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully the below information will be helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLURM Version: 1.3.15
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node64-test ~&gt;salloc -n3
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 826
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node64-test ~&gt;srun hostname
</span><br>
<span class="quotelev1">&gt; node64-24.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-25.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-24.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node64-test ~&gt;printenv | grep SLURM
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=node64-[24-25]
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=2
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=826
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=2,1
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=826
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=3
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=node64-[24-25]
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=2(x2)
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node64-test ~&gt;mpirun --display-allocation hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node64-test.xxxx.xxxx.xxxx.xxxx   Num slots: 0
</span><br>
<span class="quotelev1">&gt; Max slots: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node64-24 Num slots: 2    Max slots: 0
</span><br>
<span class="quotelev1">&gt;  Data for node: Name: node64-25 Num slots: 2    Max slots: 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; node64-24.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-24.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-25.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-25.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Haven't seen that before on any of our machines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you do &quot;printenv | grep SLURM&quot; after the salloc and send the
</span><br>
<span class="quotelev2">&gt; &gt; results?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What version of SLURM is this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please run &quot;mpirun --display-allocation hostname&quot; and send the results.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Aug 24, 2009 at 11:30 AM, &lt;matthew.piehl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've seem to run into an interesting problem with openMPI. After
</span><br>
<span class="quotelev3">&gt; &gt;&gt; allocating 3 processors and confirming that the 3 processors are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; allocated. mpirun on a simple mpitest program seems to run on 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processors. We have 2 processors per node. I can repeat this case with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; any
</span><br>
<span class="quotelev3">&gt; &gt;&gt; odd number of nodes, openMPI seems to take any remaining processors on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; box. We are running openMPI v1.3.3. Here is an example of what happens:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node64-test ~&gt;salloc -n3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; salloc: Granted job allocation 825
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node64-test ~&gt;srun hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node64-test ~&gt;MX_RCACHE=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; LD_LIBRARY_PATH=&quot;/hurd/mpi/openmpi/lib:/usr/local/mx/lib&quot; mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpi_pgms/mpitest
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI domain size: 4
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am rank 000 - node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am rank 003 - node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am rank 001 - node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am rank 002 - node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For those who may be curious here is the program:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; extern int main(int argc, char *argv[]);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; extern int main(int argc, char *argv[])
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        auto int rank,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 size,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                 namelen;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        MPI_Status status;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        static char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       if ( rank == 0 )
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                fprintf(stdout,&quot;My name is: %s\n&quot;,processor_name);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                fprintf(stdout,&quot;Cluster size is: %d\n&quot;, size);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        else
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                fprintf(stdout,&quot;My name is: %s\n&quot;,processor_name);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        MPI_Finalize();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;        return(0);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm curious if this is a bug in the way openMPI interprets SLURM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; environment variables. If you have any ideas or need any more
</span><br>
<span class="quotelev3">&gt; &gt;&gt; information
</span><br>
<span class="quotelev3">&gt; &gt;&gt; let me know.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Matt
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10471/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10472.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="10470.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>In reply to:</strong> <a href="10470.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10473.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Reply:</strong> <a href="10473.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
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
