<?
$subject_val = "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 14:34:11 2009" -->
<!-- isoreceived="20090824183411" -->
<!-- sent="Mon, 24 Aug 2009 12:34:06 -0600" -->
<!-- isosent="20090824183406" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables" -->
<!-- id="71d2d8cc0908241134q3b66d2bas3bd3503c319de09_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="575878d8025ff02072cf379077fc9356.squirrel_at_webmail.ndsu.nodak.edu" -->
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
<strong>Date:</strong> 2009-08-24 14:34:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="10467.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10465.php">matthew.piehl_at_[hidden]: "[OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10470.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Reply:</strong> <a href="10470.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Haven't seen that before on any of our machines.
<br>
<p>Could you do &quot;printenv | grep SLURM&quot; after the salloc and send the results?
<br>
<p>What version of SLURM is this?
<br>
<p>Please run &quot;mpirun --display-allocation hostname&quot; and send the results.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Mon, Aug 24, 2009 at 11:30 AM, &lt;matthew.piehl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've seem to run into an interesting problem with openMPI. After
</span><br>
<span class="quotelev1">&gt; allocating 3 processors and confirming that the 3 processors are
</span><br>
<span class="quotelev1">&gt; allocated. mpirun on a simple mpitest program seems to run on 4
</span><br>
<span class="quotelev1">&gt; processors. We have 2 processors per node. I can repeat this case with any
</span><br>
<span class="quotelev1">&gt; odd number of nodes, openMPI seems to take any remaining processors on the
</span><br>
<span class="quotelev1">&gt; box. We are running openMPI v1.3.3. Here is an example of what happens:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node64-test ~&gt;salloc -n3
</span><br>
<span class="quotelev1">&gt; salloc: Granted job allocation 825
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node64-test ~&gt;srun hostname
</span><br>
<span class="quotelev1">&gt; node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node64-test ~&gt;MX_RCACHE=0
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=&quot;/hurd/mpi/openmpi/lib:/usr/local/mx/lib&quot; mpirun
</span><br>
<span class="quotelev1">&gt; mpi_pgms/mpitest
</span><br>
<span class="quotelev1">&gt; MPI domain size: 4
</span><br>
<span class="quotelev1">&gt; I am rank 000 - node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; I am rank 003 - node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; I am rank 001 - node64-28.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt; I am rank 002 - node64-29.xxxx.xxxx.xxxx.xxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For those who may be curious here is the program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; extern int main(int argc, char *argv[]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; extern int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;        auto int rank,
</span><br>
<span class="quotelev1">&gt;                 size,
</span><br>
<span class="quotelev1">&gt;                 namelen;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        static char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       if ( rank == 0 )
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;                MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;                fprintf(stdout,&quot;My name is: %s\n&quot;,processor_name);
</span><br>
<span class="quotelev1">&gt;                fprintf(stdout,&quot;Cluster size is: %d\n&quot;, size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;        else
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;                MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;                fprintf(stdout,&quot;My name is: %s\n&quot;,processor_name);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;        return(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm curious if this is a bug in the way openMPI interprets SLURM
</span><br>
<span class="quotelev1">&gt; environment variables. If you have any ideas or need any more information
</span><br>
<span class="quotelev1">&gt; let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Matt
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10468/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10469.php">Jeff Squyres: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="10467.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10465.php">matthew.piehl_at_[hidden]: "[OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10470.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Reply:</strong> <a href="10470.php">matthew.piehl_at_[hidden]: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
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
