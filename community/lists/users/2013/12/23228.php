<?
$subject_val = "[OMPI users] Problem with memory in mpi program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 15:41:11 2013" -->
<!-- isoreceived="20131218204111" -->
<!-- sent="Wed, 18 Dec 2013 14:37:59 -0500" -->
<!-- isosent="20131218193759" -->
<!-- name="Yeni Lora" -->
<!-- email="yenisleidi.lora_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with memory in mpi program" -->
<!-- id="CACoAt3q05Shg09hcbNSMopw=AegDmh3sNMfFOSa9c465PK-+0Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with memory in mpi program<br>
<strong>From:</strong> Yeni Lora (<em>yenisleidi.lora_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 14:37:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23229.php">Ake Sandgren: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23227.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My program it is with MPI and OpenMP, and is a sample program take
<br>
much memory, I don't know the memory RAM consume for a mpi program and
<br>
I want to know if mpi consume a lot of memory when if used together
<br>
openmp or I doing something wrong, for take memory Ram of mi program I
<br>
used a file /proc/id_proc/stat, where id_proc if the id of my process.
<br>
This is my example program:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;omp.h&gt;
<br>
#include &lt;vector&gt;
<br>
#include &lt;algorithm&gt;
<br>
<p>int main(int argc, char** argv){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int  my_rank; /* rank of process */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int  p;       /* number of processes */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init_thread(&amp;argc, &amp;argv, MPI::THREAD_MULTIPLE,&amp;argc);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* find out process rank */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* find out number of processes */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;p);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char cad[4];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>omp_set_num_threads(2);
<br>
#pragma omp parallel
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int h =  omp_get_thread_num();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(h==0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;cad, 1, MPI::CHAR, my_rank, 11,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::vector&lt;bool&gt; all(2,0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;cad, 2, MPI::CHAR, MPI::ANY_SOURCE,
<br>
MPI::ANY_TAG,MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* shut down MPI */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Compile:
<br>
mpic++ -fopenmp -fno-threadsafe-statics -o sample_program sample_program.c
<br>
<p>Run
<br>
mpirun  sample_program
<br>
<p>and the memory consume: 190MB
<br>
<p>Please I need help is very important to me get a low memory consume
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23229.php">Ake Sandgren: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23227.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
