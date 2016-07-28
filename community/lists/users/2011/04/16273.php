<?
$subject_val = "Re: [OMPI users] g95 + open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 08:49:34 2011" -->
<!-- isoreceived="20110419124934" -->
<!-- sent="Tue, 19 Apr 2011 12:49:26 +0000" -->
<!-- isosent="20110419124926" -->
<!-- name="nicolas.cordier_at_[hidden]" -->
<!-- email="nicolas.cordier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] g95 + open-mpi" -->
<!-- id="20110419124927.314280_at_gmx.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] g95 + open-mpi" -->
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
<strong>Subject:</strong> Re: [OMPI users] g95 + open-mpi<br>
<strong>From:</strong> <a href="mailto:nicolas.cordier_at_[hidden]?Subject=Re:%20[OMPI%20users]%20g95%20%2B%20open-mpi"><em>nicolas.cordier_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-04-19 08:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16274.php">Eloi Gaudry: "[OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="16272.php">Reuti: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="16150.php">nicolas cordier: "[OMPI users] g95 + open-mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
all work now with this configure options to compile openmpi with g95 under x86_64:
<br>
CC=gcc
<br>
FC='/usr/local/bin/g95'
<br>
F77='/usr/local/bin/g95'
<br>
FFLAGS='-O3 -fPIC'
<br>
CXX=g++
<br>
./configure --enable-static --with-devel-headers 
<br>
<p>you can close this call.
<br>
:-)
<br>
nicolas.
<br>
<p><p><span class="quotelev1">&gt; ----- Message d'origine -----
</span><br>
<span class="quotelev1">&gt; De : nicolas cordier
</span><br>
<span class="quotelev1">&gt; Envoy&#195;&#169;s : 06.04.11 13:52
</span><br>
<span class="quotelev1">&gt; &#195;&#128; : users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Objet : [OMPI users] g95 + open-mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  i need use open-mpi with g95 on debian linux lenny 5.0 - x86_64
</span><br>
<span class="quotelev1">&gt;  i compile it with FC=g95 F77=g95 and test on my example.c file
</span><br>
<span class="quotelev1">&gt;  but with g95 mpirun dont use process1 just process 0.
</span><br>
<span class="quotelev1">&gt;  perhaps my compile option are wrong ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  i want that mpirun use process 0 and 1 both.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  hostname paola12
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mpicc example.c
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 a.out
</span><br>
<span class="quotelev1">&gt;  C Process 0 on paola12
</span><br>
<span class="quotelev1">&gt;  0 [1 3 ]
</span><br>
<span class="quotelev1">&gt;  0 [1.000000 3.000000 ]
</span><br>
<span class="quotelev1">&gt;  C Process 0 on paola12
</span><br>
<span class="quotelev1">&gt;  0 [1 3 ]
</span><br>
<span class="quotelev1">&gt;  0 [1.000000 3.000000 ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  with gfortran ( 4.3.2 ) + openmpi 
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 a.out
</span><br>
<span class="quotelev1">&gt;  C Process 0 on paola12 C Process 1 on paola12 0 [2 9 ] 1 [2 9 ] 0 [3.000000 6.000000 ] 1 [3.000000 6.000000 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; example.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  int rank;
</span><br>
<span class="quotelev1">&gt;  int namelen;
</span><br>
<span class="quotelev1">&gt;  char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Get_processor_name(processor_name, &amp;namelen);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;C Process %d on %s \n&quot;, rank, processor_name);
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  int size = 2;
</span><br>
<span class="quotelev1">&gt;  int *array, *reducedValues;
</span><br>
<span class="quotelev1">&gt;  array = (int *) malloc((size) * sizeof (int));
</span><br>
<span class="quotelev1">&gt;  reducedValues = (int *) malloc((size) * sizeof (int));
</span><br>
<span class="quotelev1">&gt;  array[0] = rank+1;
</span><br>
<span class="quotelev1">&gt;  array[1] = 3;
</span><br>
<span class="quotelev1">&gt;  MPI_Allreduce(array, reducedValues, size, MPI_INTEGER, MPI_PROD, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  int i;
</span><br>
<span class="quotelev1">&gt;  printf(&quot;%d [&quot;, rank);
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; size; i++) {
</span><br>
<span class="quotelev1">&gt;  printf(&quot;%d &quot;, reducedValues[i]);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  printf(&quot;]\n&quot;);
</span><br>
<span class="quotelev1">&gt;  free(reducedValues);
</span><br>
<span class="quotelev1">&gt;  free(array);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* Verif triviale pour un seul entier (OK)
</span><br>
<span class="quotelev1">&gt;  size=1;
</span><br>
<span class="quotelev1">&gt;  int *array1, *reducedValues1;
</span><br>
<span class="quotelev1">&gt;  array1 = (int *) malloc((size) * sizeof (int));
</span><br>
<span class="quotelev1">&gt;  reducedValues1 = (int *) malloc((size) * sizeof (int));
</span><br>
<span class="quotelev1">&gt;  array[0] = rank+1;
</span><br>
<span class="quotelev1">&gt;  MPI_Allreduce(array1, reducedValues1, size, MPI_INTEGER, MPI_PROD, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  printf(&quot; C scalaire %d \n&quot;, reducedValues1[0]);
</span><br>
<span class="quotelev1">&gt;  free(reducedValues1);
</span><br>
<span class="quotelev1">&gt;  free(array1);
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  /* Verif pour les doubles */
</span><br>
<span class="quotelev1">&gt;  size=2;
</span><br>
<span class="quotelev1">&gt;  double *Darray, *DreducedValues;
</span><br>
<span class="quotelev1">&gt;  Darray = (double *) malloc((size) * sizeof (double));
</span><br>
<span class="quotelev1">&gt;  DreducedValues = (double *) malloc((size) * sizeof (double));
</span><br>
<span class="quotelev1">&gt;  Darray[0] = (rank+1)*1.0;
</span><br>
<span class="quotelev1">&gt;  Darray[1] = 3.0;
</span><br>
<span class="quotelev1">&gt;  MPI_Allreduce(Darray, DreducedValues, size, MPI_DOUBLE, MPI_SUM, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  printf(&quot;%d [&quot;, rank);
</span><br>
<span class="quotelev1">&gt;  for (i = 0; i &lt; size; i++) {
</span><br>
<span class="quotelev1">&gt;  printf(&quot;%f &quot;, DreducedValues[i]);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  printf(&quot;]\n&quot;);
</span><br>
<span class="quotelev1">&gt;  free(DreducedValues);
</span><br>
<span class="quotelev1">&gt;  free(Darray);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  greetings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  nicolas cordier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16274.php">Eloi Gaudry: "[OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="16272.php">Reuti: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Maybe in reply to:</strong> <a href="16150.php">nicolas cordier: "[OMPI users] g95 + open-mpi"</a>
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
