<?
$subject_val = "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 15:55:38 2009" -->
<!-- isoreceived="20090824195538" -->
<!-- sent="Mon, 24 Aug 2009 14:55:34 -0500" -->
<!-- isosent="20090824195534" -->
<!-- name="matthew.piehl_at_[hidden]" -->
<!-- email="matthew.piehl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables" -->
<!-- id="8db9f54a9b2895b84cdb5fa6a8ac85ef.squirrel_at_webmail.ndsu.nodak.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="71d2d8cc0908241134q3b66d2bas3bd3503c319de09_at_mail.gmail.com" -->
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
<strong>From:</strong> <a href="mailto:matthew.piehl_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Bug?%20openMPI%20interpretation%20of%20SLURM%20environment%20variables"><em>matthew.piehl_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-08-24 15:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10471.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="10468.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10471.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Reply:</strong> <a href="10471.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Hopefully the below information will be helpful.
<br>
<p>SLURM Version: 1.3.15
<br>
<p>node64-test ~&gt;salloc -n3
<br>
salloc: Granted job allocation 826
<br>
<p>node64-test ~&gt;srun hostname
<br>
node64-24.xxxx.xxxx.xxxx.xxxx
<br>
node64-25.xxxx.xxxx.xxxx.xxxx
<br>
node64-24.xxxx.xxxx.xxxx.xxxx
<br>
<p>node64-test ~&gt;printenv | grep SLURM
<br>
SLURM_NODELIST=node64-[24-25]
<br>
SLURM_NNODES=2
<br>
SLURM_JOBID=826
<br>
SLURM_TASKS_PER_NODE=2,1
<br>
SLURM_JOB_ID=826
<br>
SLURM_NPROCS=3
<br>
SLURM_JOB_NODELIST=node64-[24-25]
<br>
SLURM_JOB_CPUS_PER_NODE=2(x2)
<br>
SLURM_JOB_NUM_NODES=2
<br>
<p>node64-test ~&gt;mpirun --display-allocation hostname
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: Name: node64-test.xxxx.xxxx.xxxx.xxxx   Num slots: 0   
<br>
Max slots: 0
<br>
&nbsp;Data for node: Name: node64-24 Num slots: 2    Max slots: 0
<br>
&nbsp;Data for node: Name: node64-25 Num slots: 2    Max slots: 0
<br>
<p>=================================================================
<br>
node64-24.xxxx.xxxx.xxxx.xxxx
<br>
node64-24.xxxx.xxxx.xxxx.xxxx
<br>
node64-25.xxxx.xxxx.xxxx.xxxx
<br>
node64-25.xxxx.xxxx.xxxx.xxxx
<br>
<p><p>Thanks,
<br>
Matt
<br>
<p><span class="quotelev1">&gt; Haven't seen that before on any of our machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you do &quot;printenv | grep SLURM&quot; after the salloc and send the
</span><br>
<span class="quotelev1">&gt; results?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What version of SLURM is this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please run &quot;mpirun --display-allocation hostname&quot; and send the results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Aug 24, 2009 at 11:30 AM, &lt;matthew.piehl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've seem to run into an interesting problem with openMPI. After
</span><br>
<span class="quotelev2">&gt;&gt; allocating 3 processors and confirming that the 3 processors are
</span><br>
<span class="quotelev2">&gt;&gt; allocated. mpirun on a simple mpitest program seems to run on 4
</span><br>
<span class="quotelev2">&gt;&gt; processors. We have 2 processors per node. I can repeat this case with
</span><br>
<span class="quotelev2">&gt;&gt; any
</span><br>
<span class="quotelev2">&gt;&gt; odd number of nodes, openMPI seems to take any remaining processors on
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; box. We are running openMPI v1.3.3. Here is an example of what happens:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node64-test ~&gt;salloc -n3
</span><br>
<span class="quotelev2">&gt;&gt; salloc: Granted job allocation 825
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node64-test ~&gt;srun hostname
</span><br>
<span class="quotelev2">&gt;&gt; node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev2">&gt;&gt; node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev2">&gt;&gt; node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node64-test ~&gt;MX_RCACHE=0
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=&quot;/hurd/mpi/openmpi/lib:/usr/local/mx/lib&quot; mpirun
</span><br>
<span class="quotelev2">&gt;&gt; mpi_pgms/mpitest
</span><br>
<span class="quotelev2">&gt;&gt; MPI domain size: 4
</span><br>
<span class="quotelev2">&gt;&gt; I am rank 000 - node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev2">&gt;&gt; I am rank 003 - node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev2">&gt;&gt; I am rank 001 - node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev2">&gt;&gt; I am rank 002 - node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For those who may be curious here is the program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; extern int main(int argc, char *argv[]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; extern int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;        auto int rank,
</span><br>
<span class="quotelev2">&gt;&gt;                 size,
</span><br>
<span class="quotelev2">&gt;&gt;                 namelen;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        static char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       if ( rank == 0 )
</span><br>
<span class="quotelev2">&gt;&gt;        {
</span><br>
<span class="quotelev2">&gt;&gt;                MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;                fprintf(stdout,&quot;My name is: %s\n&quot;,processor_name);
</span><br>
<span class="quotelev2">&gt;&gt;                fprintf(stdout,&quot;Cluster size is: %d\n&quot;, size);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;        else
</span><br>
<span class="quotelev2">&gt;&gt;        {
</span><br>
<span class="quotelev2">&gt;&gt;                MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;                fprintf(stdout,&quot;My name is: %s\n&quot;,processor_name);
</span><br>
<span class="quotelev2">&gt;&gt;        }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;        return(0);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm curious if this is a bug in the way openMPI interprets SLURM
</span><br>
<span class="quotelev2">&gt;&gt; environment variables. If you have any ideas or need any more
</span><br>
<span class="quotelev2">&gt;&gt; information
</span><br>
<span class="quotelev2">&gt;&gt; let me know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Matt
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="10471.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="10468.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10471.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Reply:</strong> <a href="10471.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
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
