<?
$subject_val = "[OMPI users] g95 + open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 07:52:28 2011" -->
<!-- isoreceived="20110406115228" -->
<!-- sent="Wed, 06 Apr 2011 11:52:21 +0000" -->
<!-- isosent="20110406115221" -->
<!-- name="nicolas cordier" -->
<!-- email="nicolas.cordier_at_[hidden]" -->
<!-- subject="[OMPI users] g95 + open-mpi" -->
<!-- id="20110406115221.314270_at_gmx.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] g95 + open-mpi<br>
<strong>From:</strong> nicolas cordier (<em>nicolas.cordier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 07:52:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16151.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>Previous message:</strong> <a href="16149.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16189.php">Jeff Squyres: "Re: [OMPI users] g95 + open-mpi"</a>
<li><strong>Reply:</strong> <a href="16189.php">Jeff Squyres: "Re: [OMPI users] g95 + open-mpi"</a>
<li><strong>Maybe reply:</strong> <a href="16273.php">nicolas.cordier_at_[hidden]: "Re: [OMPI users] g95 + open-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>&nbsp;i need use open-mpi with g95 on debian linux lenny 5.0 - x86_64
<br>
&nbsp;i compile it with FC=g95 F77=g95 and test on my example.c file
<br>
&nbsp;but with g95 mpirun dont use process1 just process 0.
<br>
&nbsp;perhaps my compile option are wrong ?
<br>
<p>&nbsp;i want that mpirun use process 0 and 1 both.
<br>
<p>&nbsp;hostname paola12
<br>
<p>&nbsp;mpicc example.c
<br>
&nbsp;mpirun -np 2 a.out
<br>
&nbsp;C Process 0 on paola12
<br>
&nbsp;0 [1 3 ]
<br>
&nbsp;0 [1.000000 3.000000 ]
<br>
&nbsp;C Process 0 on paola12
<br>
&nbsp;0 [1 3 ]
<br>
&nbsp;0 [1.000000 3.000000 ]
<br>
<p><p>&nbsp;with gfortran ( 4.3.2 ) + openmpi 
<br>
&nbsp;mpirun -np 2 a.out
<br>
&nbsp;C Process 0 on paola12 C Process 1 on paola12 0 [2 9 ] 1 [2 9 ] 0 [3.000000 6.000000 ] 1 [3.000000 6.000000 
<br>
<p><p><p>example.c
<br>
<p>&nbsp;#include &lt;stdlib.h&gt;
<br>
&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;#include &lt;math.h&gt;
<br>
&nbsp;#include &lt;mpi.h&gt;
<br>
<p>&nbsp;int main(int argc, char** argv) {
<br>
&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;int rank;
<br>
&nbsp;int namelen;
<br>
&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
&nbsp;printf(&quot;C Process %d on %s \n&quot;, rank, processor_name);
<br>
&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
<p>&nbsp;int size = 2;
<br>
&nbsp;int *array, *reducedValues;
<br>
&nbsp;array = (int *) malloc((size) * sizeof (int));
<br>
&nbsp;reducedValues = (int *) malloc((size) * sizeof (int));
<br>
&nbsp;array[0] = rank+1;
<br>
&nbsp;array[1] = 3;
<br>
&nbsp;MPI_Allreduce(array, reducedValues, size, MPI_INTEGER, MPI_PROD, MPI_COMM_WORLD);
<br>
&nbsp;int i;
<br>
&nbsp;printf(&quot;%d [&quot;, rank);
<br>
&nbsp;for (i = 0; i &lt; size; i++) {
<br>
&nbsp;printf(&quot;%d &quot;, reducedValues[i]);
<br>
&nbsp;}
<br>
&nbsp;printf(&quot;]\n&quot;);
<br>
&nbsp;free(reducedValues);
<br>
&nbsp;free(array);
<br>
<p>&nbsp;/* Verif triviale pour un seul entier (OK)
<br>
&nbsp;size=1;
<br>
&nbsp;int *array1, *reducedValues1;
<br>
&nbsp;array1 = (int *) malloc((size) * sizeof (int));
<br>
&nbsp;reducedValues1 = (int *) malloc((size) * sizeof (int));
<br>
&nbsp;array[0] = rank+1;
<br>
&nbsp;MPI_Allreduce(array1, reducedValues1, size, MPI_INTEGER, MPI_PROD, MPI_COMM_WORLD);
<br>
&nbsp;printf(&quot; C scalaire %d \n&quot;, reducedValues1[0]);
<br>
&nbsp;free(reducedValues1);
<br>
&nbsp;free(array1);
<br>
&nbsp;*/
<br>
<p>&nbsp;/* Verif pour les doubles */
<br>
&nbsp;size=2;
<br>
&nbsp;double *Darray, *DreducedValues;
<br>
&nbsp;Darray = (double *) malloc((size) * sizeof (double));
<br>
&nbsp;DreducedValues = (double *) malloc((size) * sizeof (double));
<br>
&nbsp;Darray[0] = (rank+1)*1.0;
<br>
&nbsp;Darray[1] = 3.0;
<br>
&nbsp;MPI_Allreduce(Darray, DreducedValues, size, MPI_DOUBLE, MPI_SUM, MPI_COMM_WORLD);
<br>
&nbsp;printf(&quot;%d [&quot;, rank);
<br>
&nbsp;for (i = 0; i &lt; size; i++) {
<br>
&nbsp;printf(&quot;%f &quot;, DreducedValues[i]);
<br>
&nbsp;}
<br>
&nbsp;printf(&quot;]\n&quot;);
<br>
&nbsp;free(DreducedValues);
<br>
&nbsp;free(Darray);
<br>
&nbsp;MPI_Finalize();
<br>
&nbsp;}
<br>
<p><p>&nbsp;greetings.
<br>
<p>&nbsp;nicolas cordier
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16150/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16151.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>Previous message:</strong> <a href="16149.php">Nguyen Toan: "Re: [OMPI users] openmpi self checkpointing - error while running example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16189.php">Jeff Squyres: "Re: [OMPI users] g95 + open-mpi"</a>
<li><strong>Reply:</strong> <a href="16189.php">Jeff Squyres: "Re: [OMPI users] g95 + open-mpi"</a>
<li><strong>Maybe reply:</strong> <a href="16273.php">nicolas.cordier_at_[hidden]: "Re: [OMPI users] g95 + open-mpi"</a>
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
