<?
$subject_val = "[OMPI users] Bug? openMPI interpretation of SLURM environment variables";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 13:30:28 2009" -->
<!-- isoreceived="20090824173028" -->
<!-- sent="Mon, 24 Aug 2009 12:30:23 -0500" -->
<!-- isosent="20090824173023" -->
<!-- name="matthew.piehl_at_[hidden]" -->
<!-- email="matthew.piehl_at_[hidden]" -->
<!-- subject="[OMPI users] Bug? openMPI interpretation of SLURM environment variables" -->
<!-- id="575878d8025ff02072cf379077fc9356.squirrel_at_webmail.ndsu.nodak.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Bug? openMPI interpretation of SLURM environment variables<br>
<strong>From:</strong> <a href="mailto:matthew.piehl_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Bug?%20openMPI%20interpretation%20of%20SLURM%20environment%20variables"><em>matthew.piehl_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-08-24 13:30:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10466.php">Shaun Jackman: "[OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10464.php">Eugene Loh: "Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10468.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Reply:</strong> <a href="10468.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I've seem to run into an interesting problem with openMPI. After
<br>
allocating 3 processors and confirming that the 3 processors are
<br>
allocated. mpirun on a simple mpitest program seems to run on 4
<br>
processors. We have 2 processors per node. I can repeat this case with any
<br>
odd number of nodes, openMPI seems to take any remaining processors on the
<br>
box. We are running openMPI v1.3.3. Here is an example of what happens:
<br>
<p>node64-test ~&gt;salloc -n3
<br>
salloc: Granted job allocation 825
<br>
<p>node64-test ~&gt;srun hostname
<br>
node64-28.xxxx.xxxx.xxxx.xxxx
<br>
node64-28.xxxx.xxxx.xxxx.xxxx
<br>
node64-29.xxxx.xxxx.xxxx.xxxx
<br>
<p>node64-test ~&gt;MX_RCACHE=0
<br>
LD_LIBRARY_PATH=&quot;/hurd/mpi/openmpi/lib:/usr/local/mx/lib&quot; mpirun
<br>
mpi_pgms/mpitest
<br>
MPI domain size: 4
<br>
I am rank 000 - node64-28.xxxx.xxxx.xxxx.xxxx
<br>
I am rank 003 - node64-29.xxxx.xxxx.xxxx.xxxx
<br>
I am rank 001 - node64-28.xxxx.xxxx.xxxx.xxxx
<br>
I am rank 002 - node64-29.xxxx.xxxx.xxxx.xxxx
<br>
<p><p><p>For those who may be curious here is the program:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>extern int main(int argc, char *argv[]);
<br>
<p>extern int main(int argc, char *argv[])
<br>
<p>{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;auto int rank,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;namelen;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;static char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout,&quot;My name is: %s\n&quot;,processor_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout,&quot;Cluster size is: %d\n&quot;, size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout,&quot;My name is: %s\n&quot;,processor_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return(0);
<br>
}
<br>
<p><p>I'm curious if this is a bug in the way openMPI interprets SLURM
<br>
environment variables. If you have any ideas or need any more information
<br>
let me know.
<br>
<p><p>Thanks.
<br>
Matt
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10466.php">Shaun Jackman: "[OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10464.php">Eugene Loh: "Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10468.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Reply:</strong> <a href="10468.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
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
