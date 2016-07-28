<?
$subject_val = "[OMPI users] MPI_Win_create with size=0 expose memory anyway";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 11 07:35:41 2011" -->
<!-- isoreceived="20110211123541" -->
<!-- sent="Fri, 11 Feb 2011 13:41:03 +0100 (CET)" -->
<!-- isosent="20110211124103" -->
<!-- name="Patrick Le Dot" -->
<!-- email="Patrick.Le-Dot_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Win_create with size=0 expose memory anyway" -->
<!-- id="20110211124103.8F52B2BA2E_at_B015461.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Win_create with size=0 expose memory anyway<br>
<strong>From:</strong> Patrick Le Dot (<em>Patrick.Le-Dot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-11 07:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15571.php">Prentice Bisbal: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>Previous message:</strong> <a href="15569.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15573.php">Barrett, Brian W: "Re: [OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
<li><strong>Reply:</strong> <a href="15573.php">Barrett, Brian W: "Re: [OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I am testing the one-sided message passing (MPI_Put, MPI_Get)
<br>
and it seems to me that the size parameter of MPI_Win_create()
<br>
is definitly not taken into account.
<br>
<p>Then I can put/get messages using a window created with size=0
<br>
(or put/get after any others limits between 0 and the original buffer size).
<br>
<p>I know that size=0 is not an usual practice but the man page say :
<br>
&quot;A process may elect to expose no memory by specifying size = 0.&quot;
<br>
<p>I might still have misunderstood something ?
<br>
<p>Hereafter a simple test to reproduce the  with Open MPI 1.5
<br>
<p>Thx,
<br>
Patrick
<br>
<p><p>/*
<br>
&nbsp;* compilation :
<br>
&nbsp;* mpicc -o a.out a.c
<br>
&nbsp;*
<br>
&nbsp;* execution :
<br>
&nbsp;* srun --resv-ports -n2 -N2 a.out
<br>
&nbsp;*
<br>
&nbsp;*/
<br>
<p>#include &quot;mpi.h&quot;
<br>
<p>#define SIZE_10 10
<br>
#define RANK_1   1
<br>
<p>int main(int argc, char *argv[]) {
<br>
&nbsp;&nbsp;int i, rank, nprocs, A[SIZE_10], B[SIZE_10];
<br>
&nbsp;&nbsp;MPI_Win win;
<br>
&nbsp;&nbsp;int errs = 0;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;if (nprocs != 2) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d is a bad process number : srun -n2 -N2 a.out \n&quot;, nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;for (i=0; i&lt;SIZE_10; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;A[i] = i+1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;B[i] = (-1)*(i+1);
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;printf(&quot;[%d] create a window on A[] with size=0 \n&quot;, rank);
<br>
&nbsp;&nbsp;MPI_Win_create(A, 0, sizeof(int), MPI_INFO_NULL, MPI_COMM_WORLD, &amp;win);
<br>
<p>&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%d] call MPI_Get(B, %d, ...) \n&quot;, rank, SIZE_10);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_lock(MPI_LOCK_SHARED, RANK_1, 0, win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get(B, SIZE_10, MPI_INT, RANK_1, 0, SIZE_10, MPI_INT, win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_unlock(RANK_1, win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i=0; i&lt;SIZE_10; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (B[i] != i+1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%d] MPI_Get error: B[%d]=%d, should be %d \n&quot;,rank, i, B[i], i+1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;errs++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (errs == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;[%d] No Error! \n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Win_free(&amp;win);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15571.php">Prentice Bisbal: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>Previous message:</strong> <a href="15569.php">Terry Dontje: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15573.php">Barrett, Brian W: "Re: [OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
<li><strong>Reply:</strong> <a href="15573.php">Barrett, Brian W: "Re: [OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
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
