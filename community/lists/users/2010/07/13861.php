<?
$subject_val = "[OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 19:47:58 2010" -->
<!-- isoreceived="20100728234758" -->
<!-- sent="Wed, 28 Jul 2010 18:47:28 -0500" -->
<!-- isosent="20100728234728" -->
<!-- name="David Akin" -->
<!-- email="nospamou_at_[hidden]" -->
<!-- subject="[OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core" -->
<!-- id="AANLkTikRmhmsA=RPhHTOPfNnNt3sdiLR9hHc4MtU59yt_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core<br>
<strong>From:</strong> David Akin (<em>nospamou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 19:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13862.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13860.php">David Akin: "[OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13862.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13862.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
I'm trying to get the OpenMP portion of the code below to run
<br>
multicore on a couple of 8 core nodes.
<br>
<p>Good news: multiple threads are being spawned on each node in the run.
<br>
Bad news: each of the threads only runs on a single core, leaving 7
<br>
cores basically idle.
<br>
Sorta good news: if I provide a rank file I get the threads running on
<br>
different cores within each node (PITA.
<br>
<p>Here's the first lines of output.
<br>
<p>&nbsp;/usr/mpi/gcc/openmpi-1.4-qlc/bin/mpirun -host c005,c006 -np 2 -rf
<br>
rank.file -x OMP_NUM_THREADS=4 hybrid4.gcc
<br>
<p>Hello from thread 2 out of 4 from process 1 out of 2 on c006.local
<br>
another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=2
<br>
Hello from thread 3 out of 4 from process 1 out of 2 on c006.local
<br>
another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=3
<br>
Hello from thread 1 out of 4 from process 1 out of 2 on c006.local
<br>
another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=1
<br>
Hello from thread 1 out of 4 from process 0 out of 2 on c005.local
<br>
another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=1
<br>
Hello from thread 3 out of 4 from process 0 out of 2 on c005.local
<br>
Hello from thread 2 out of 4 from process 0 out of 2 on c005.local
<br>
another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
<br>
another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
<br>
Hello from thread 0 out of 4 from process 0 out of 2 on c005.local
<br>
another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=0
<br>
Hello from thread 0 out of 4 from process 1 out of 2 on c006.local
<br>
another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=0
<br>
another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
<br>
another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
<br>
another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=0
<br>
another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=3
<br>
another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=3
<br>
another parallel region:       name:c005.local MPI_RANK_ID=0 OMP_THREAD_ID=2
<br>
another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=0
<br>
another parallel region:       name:c006.local MPI_RANK_ID=1 OMP_THREAD_ID=1
<br>
.
<br>
.
<br>
.
<br>
<p>Here's the simple code:
<br>
#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;omp.h&gt;
<br>
<p>int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;int numprocs, rank, namelen;
<br>
&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;&nbsp;int iam = 0, np = 1;
<br>
&nbsp;&nbsp;char name[MPI_MAX_PROCESSOR_NAME];   /* MPI_MAX_PROCESSOR_NAME ==
<br>
128         */
<br>
&nbsp;&nbsp;int O_ID;                            /* OpenMP thread ID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;int M_ID;                            /* MPI rank ID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
&nbsp;&nbsp;int rtn_val;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numprocs);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
<p>&nbsp;&nbsp;#pragma omp parallel default(shared) private(iam, np,O_ID)
<br>
&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;np = omp_get_num_threads();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;iam = omp_get_thread_num();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello from thread %d out of %d from process %d out of %d on %s\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iam, np, rank, numprocs, processor_name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int j=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double counter=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for(i =0;i&lt;99999999;i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;O_ID = omp_get_thread_num();          /* get OpenMP
<br>
thread ID                 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(name,&amp;namelen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rtn_val = MPI_Comm_rank(MPI_COMM_WORLD,&amp;M_ID);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;another parallel region:       name:%s
<br>
MPI_RANK_ID=%d OMP_THREAD_ID=%d\n&quot;, name,M_ID,O_ID);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j = 0;j&lt;999999999;j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counter=counter+i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
<p>}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13862.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13860.php">David Akin: "[OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13862.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Reply:</strong> <a href="13862.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
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
