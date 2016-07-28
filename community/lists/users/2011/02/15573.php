<?
$subject_val = "Re: [OMPI users] MPI_Win_create with size=0 expose memory anyway";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 11 10:21:19 2011" -->
<!-- isoreceived="20110211152119" -->
<!-- sent="Fri, 11 Feb 2011 08:21:02 -0700" -->
<!-- isosent="20110211152102" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Win_create with size=0 expose memory anyway" -->
<!-- id="2EDB84BD-CC6D-4BE1-ADB2-9780A5704BC8_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110211124103.8F52B2BA2E_at_B015461.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Win_create with size=0 expose memory anyway<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-11 10:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15574.php">David Zhang: "Re: [OMPI users] Collective comminucation API"</a>
<li><strong>Previous message:</strong> <a href="15572.php">swagat mishra: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>In reply to:</strong> <a href="15570.php">Patrick Le Dot: "[OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick -
<br>
<p>Your program is erroneous, so the behavior of the MPI is not defined.  The default implementation of RMA with Open MPI uses active-message like semantics to locally deliver the message, and does not do bounds checking, so the error was not caught.
<br>
<p>Brian
<br>
<p><p>On Feb 11, 2011, at 5:41 AM, &lt;Patrick.Le-Dot_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I am testing the one-sided message passing (MPI_Put, MPI_Get)
</span><br>
<span class="quotelev1">&gt; and it seems to me that the size parameter of MPI_Win_create()
</span><br>
<span class="quotelev1">&gt; is definitly not taken into account.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then I can put/get messages using a window created with size=0
</span><br>
<span class="quotelev1">&gt; (or put/get after any others limits between 0 and the original buffer size).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that size=0 is not an usual practice but the man page say :
</span><br>
<span class="quotelev1">&gt; &quot;A process may elect to expose no memory by specifying size = 0.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I might still have misunderstood something ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hereafter a simple test to reproduce the  with Open MPI 1.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thx,
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt; * compilation :
</span><br>
<span class="quotelev1">&gt; * mpicc -o a.out a.c
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * execution :
</span><br>
<span class="quotelev1">&gt; * srun --resv-ports -n2 -N2 a.out
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define SIZE_10 10
</span><br>
<span class="quotelev1">&gt; #define RANK_1   1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;  int i, rank, nprocs, A[SIZE_10], B[SIZE_10];
</span><br>
<span class="quotelev1">&gt;  MPI_Win win;
</span><br>
<span class="quotelev1">&gt;  int errs = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if (nprocs != 2) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;%d is a bad process number : srun -n2 -N2 a.out \n&quot;, nprocs);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return -1;
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  for (i=0; i&lt;SIZE_10; i++) {
</span><br>
<span class="quotelev1">&gt;    A[i] = i+1;
</span><br>
<span class="quotelev1">&gt;    B[i] = (-1)*(i+1);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  printf(&quot;[%d] create a window on A[] with size=0 \n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;  MPI_Win_create(A, 0, sizeof(int), MPI_INFO_NULL, MPI_COMM_WORLD, &amp;win);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;    printf(&quot;[%d] call MPI_Get(B, %d, ...) \n&quot;, rank, SIZE_10);
</span><br>
<span class="quotelev1">&gt;    MPI_Win_lock(MPI_LOCK_SHARED, RANK_1, 0, win);
</span><br>
<span class="quotelev1">&gt;    MPI_Get(B, SIZE_10, MPI_INT, RANK_1, 0, SIZE_10, MPI_INT, win);
</span><br>
<span class="quotelev1">&gt;    MPI_Win_unlock(RANK_1, win);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    for (i=0; i&lt;SIZE_10; i++) {
</span><br>
<span class="quotelev1">&gt;      if (B[i] != i+1) {
</span><br>
<span class="quotelev1">&gt;        printf(&quot;[%d] MPI_Get error: B[%d]=%d, should be %d \n&quot;,rank, i, B[i], i+1);
</span><br>
<span class="quotelev1">&gt;        errs++;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if (errs == 0) {
</span><br>
<span class="quotelev1">&gt;      printf(&quot;[%d] No Error! \n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  MPI_Win_free(&amp;win);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15574.php">David Zhang: "Re: [OMPI users] Collective comminucation API"</a>
<li><strong>Previous message:</strong> <a href="15572.php">swagat mishra: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>In reply to:</strong> <a href="15570.php">Patrick Le Dot: "[OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
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
