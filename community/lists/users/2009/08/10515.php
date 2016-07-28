<?
$subject_val = "[OMPI users] Very different speed of collective tuned algorithms for alltoallv";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 29 08:59:14 2009" -->
<!-- isoreceived="20090829125914" -->
<!-- sent="Sat, 29 Aug 2009 14:59:08 +0200" -->
<!-- isosent="20090829125908" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="[OMPI users] Very different speed of collective tuned algorithms for alltoallv" -->
<!-- id="op.uzfc0uq9hvmlko_at_girasole.cluster.mkem.uu.se" -->
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
<strong>Subject:</strong> [OMPI users] Very different speed of collective tuned algorithms for alltoallv<br>
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-29 08:59:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10516.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10514.php">James Gao: "[OMPI users] Heterogeneous SLURM cluster segfaults on large transfers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI list,
<br>
<p>I noticed a performance problem when increasing the number of CPU's used  
<br>
to solve my problem. I traced the problem to the MPI_Alltoallv calls. I  
<br>
turns out the default basic linear algorithm is very sensitive to the  
<br>
number of CPU's, but the pairwise routine behaves appropriately in my  
<br>
case. I have performed tests on 16 processes and 24 processes. I have  
<br>
three 8 core nodes (dual intel quadcore 2.5 GHz), connected with GBE for  
<br>
these tests. The test sends data (about 12k from each node to every other  
<br>
node.) I know alltoallv is not the best choice if the data sizes are the  
<br>
same, but this way it reproduces the situation in my original code.
<br>
<p>I have set &quot;coll_tuned_use_dynamic_rules=1&quot; in  
<br>
$HOME/.openmpi/mca-params.conf
<br>
<p>For default runs I used:
<br>
time mpirun -np 16 -machinefile hostfile ./testalltoallv
<br>
For the basic linear algorithm I used:
<br>
time mpirun -np 16 -machinefile hostfile -mca  
<br>
coll_tuned_alltoallv_algorithm 1 ./testalltoallv
<br>
For the pairwise algorithm I used:
<br>
time mpirun -np 16 -machinefile hostfile -mca  
<br>
coll_tuned_alltoallv_algorithm 2 ./testalltoallv
<br>
<p>For 24 processes I replaced -np 16 with -np 24. The results (runtime in  
<br>
seconds):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-np 16           -np 24
<br>
default               2.1              15.6
<br>
basic linear          2.1              15.6
<br>
pairwise              2.1               2.8
<br>
<p>*******************************************
<br>
A speed difference of almost a factor 6 !!!
<br>
*******************************************
<br>
<p>The test code:
<br>
<p>#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;const int data_size=3000;
<br>
&nbsp;&nbsp;&nbsp;int repeat=100;
<br>
&nbsp;&nbsp;&nbsp;int rank,size;
<br>
&nbsp;&nbsp;&nbsp;int i,j;
<br>
&nbsp;&nbsp;&nbsp;int *sendbuf, *sendcount, *senddispl;
<br>
&nbsp;&nbsp;&nbsp;int *recvbuf, *recvcount, *recvdispl;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
<p>&nbsp;&nbsp;&nbsp;sendbuf=malloc(size * data_size * sizeof *sendbuf);
<br>
&nbsp;&nbsp;&nbsp;recvbuf=malloc(size * data_size * sizeof *recvbuf);
<br>
&nbsp;&nbsp;&nbsp;sendcount=malloc(size * sizeof *sendcount);
<br>
&nbsp;&nbsp;&nbsp;senddispl=malloc(size * sizeof *senddispl);
<br>
&nbsp;&nbsp;&nbsp;recvcount=malloc(size * sizeof *recvcount);
<br>
&nbsp;&nbsp;&nbsp;recvdispl=malloc(size * sizeof *recvdispl);
<br>
<p><p>&nbsp;&nbsp;&nbsp;/* Set up maximum receive lenghts
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(*sizeof(int) because MPI_BYTE is used later on) */
<br>
&nbsp;&nbsp;&nbsp;for (i=0; i&lt;size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvcount[i]=data_size*sizeof(int);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvdispl[i]=i*data_size*sizeof(int);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;/* Set up number of data items to send */
<br>
<p>&nbsp;&nbsp;&nbsp;for (i=0; i&lt;size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendcount[i]=data_size*sizeof(int);
<br>
&nbsp;&nbsp;&nbsp;for (i=0; i&lt;size; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;senddispl[i]=i*data_size*sizeof(int);
<br>
<p>&nbsp;&nbsp;&nbsp;/* Do a repetitive test. */
<br>
&nbsp;&nbsp;&nbsp;for (j=0; j&lt;repeat; j++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Alltoallv(sendbuf,sendcount,senddispl,MPI_BYTE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvbuf,recvcount,recvdispl,MPI_BYTE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>The hostfile:
<br>
arthur
<br>
arthur
<br>
arthur
<br>
arthur
<br>
arthur
<br>
arthur
<br>
arthur
<br>
arthur
<br>
trillian
<br>
trillian
<br>
trillian
<br>
trillian
<br>
trillian
<br>
trillian
<br>
trillian
<br>
trillian
<br>
zaphod
<br>
zaphod
<br>
zaphod
<br>
zaphod
<br>
zaphod
<br>
zaphod
<br>
zaphod
<br>
zaphod
<br>
<p>I am using openmpi 1.3.2.
<br>
<p>For me the problem is essentially solved, since I can now change the  
<br>
algorithm and get reasonable speed for my problem, but I was somewhat  
<br>
surprised about the very large difference in speed, so I wanted to report  
<br>
it here, if other users find themselves in a similar situation.
<br>
<p><pre>
-- 
Daniel Sp&#229;ngberg
Materialkemi
Uppsala Universitet
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10516.php">Ralph Castain: "Re: [OMPI users] Bug? openMPI interpretation of SLURM environment variables"</a>
<li><strong>Previous message:</strong> <a href="10514.php">James Gao: "[OMPI users] Heterogeneous SLURM cluster segfaults on large transfers"</a>
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
