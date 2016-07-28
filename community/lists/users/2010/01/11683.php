<?
$subject_val = "Re: [OMPI users] openib btl slows down application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 14:00:40 2010" -->
<!-- isoreceived="20100104190040" -->
<!-- sent="Mon, 04 Jan 2010 11:02:17 -0800" -->
<!-- isosent="20100104190217" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib btl slows down application" -->
<!-- id="4B423B39.4070507_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5711d991001040127h74cc166u6bf8f1b80225198c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib btl slows down application<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 14:02:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11684.php">Matthew MacManes: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11682.php">Dong Li: "[OMPI users] Question about senting short MPI messages using RDMA"</a>
<li><strong>In reply to:</strong> <a href="11676.php">G&#246;tz Waschk: "[OMPI users] openib btl slows down application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11697.php">Jeff Squyres: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Reply:</strong> <a href="11697.php">Jeff Squyres: "Re: [OMPI users] openib btl slows down application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
First, a small comment:&nbsp; use the MPI standard timer MPI_Wtime() instead
of gettimeofday.<br>
<br>
I think the problem is that MPI_Sendrecv_replace needs a temporary
buffer.&nbsp; Unless the message is very small, the function uses
MPI_Alloc_mem and MPI_Free_mem to allocate and free this temporary
buffer.&nbsp; When openib is available, I guess it uses mca_mpool_rdma_alloc
and mca_mpool_rdma_register, which are relatively expensive.<br>
<br>
Here is an experiment you can try.&nbsp; Write a PMPI wrapper for
MPI_Sendrecv_replace().&nbsp; That is, provide your own function that's
called MPI_Sendrecv_replace() and inside it call
PMPI_Sendrecv_replace().&nbsp; Then, play with alternative implementations
of MPI_Sendrecv_replace.&nbsp; E.g., allocate your own memory for the
temporary buffer and then call PMPI_Sendrecv().&nbsp; Try allocating your
temporary memory with MPI_Alloc_mem/MPI_Free_mem and also try with
malloc/free.&nbsp; I expect you'll see the timings you're seeing now.<br>
<br>
Maybe the experts on this list can comment on what *should* be
happening inside OMPI.<br>
<br>
Meanwhile, you should probably avoid MPI_Sendrecv_replace if you care
about performance.&nbsp; The function is mostly a convenience function and
if you care about performance you'd be safest, if you're going to run
with different MPIs, to use MPI_Sendrecv instead.&nbsp; That means you need
a send buffer and a receive buffer.&nbsp; A little more hassle, perhaps, but
it means you have better control over the performance characteristics.&nbsp;
E.g., you won't have all those extra allocs/frees, which is what you
almost surely have with most MPI implementations.<br>
<br>
G&ouml;tz Waschk wrote:
<blockquote
 cite="mid5711d991001040127h74cc166u6bf8f1b80225198c@mail.gmail.com"
 type="cite">
  <pre wrap="">Hi everyone,

I'm seeing a very strange effect with the openib btl. It seems to slow
down my application even if not used at all. For my test, I am running
a simple application with 8 processes on a single node, so openib
should not be used at all. Still, the result with the btl enabled is
much worse:

% /usr/lib64/openmpi/1.3.2-gcc/bin/mpirun -np 8 --mca btl
self,sm,openib ./a.out
11 tests with 2 x 2 x 2 processes: L0 = 32, L1xL2 = 256 DP spinors
Overlap over 8 processes: 271769.0 usec
Overlap over 8 processes: 298237.0 usec
Overlap over 8 processes: 261648.0 usec
Overlap over 8 processes: 369170.0 usec
Overlap over 8 processes: 383065.0 usec
Overlap over 8 processes: 280675.0 usec
Overlap over 8 processes: 270912.0 usec
Overlap over 8 processes: 198789.0 usec
Overlap over 8 processes: 339857.0 usec
Overlap over 8 processes: 192087.0 usec
Overlap over 8 processes: 209025.0 usec
Average of 10 measurements (skipped first) on 8 processes: 280.3 msec

% /usr/lib64/openmpi/1.3.2-gcc/bin/mpirun -np 8 --mca btl self,sm ./a.out
11 tests with 2 x 2 x 2 processes: L0 = 32, L1xL2 = 256 DP spinors
Overlap over 8 processes: 7445.0 usec
Overlap over 8 processes: 7355.0 usec
Overlap over 8 processes: 7311.0 usec
Overlap over 8 processes: 7473.0 usec
Overlap over 8 processes: 7409.0 usec
Overlap over 8 processes: 7449.0 usec
Overlap over 8 processes: 7261.0 usec
Overlap over 8 processes: 7451.0 usec
Overlap over 8 processes: 7430.0 usec
Overlap over 8 processes: 7320.0 usec
Overlap over 8 processes: 7384.0 usec
Average of 10 measurements (skipped first) on 8 processes: 7384.3 usec

This is the default openmpi as shipped with SL5.4 (based on RHEL5.4).
I have also tested openmpi 1.4, same result. The other mpi shipped by
Red Hat (mvapich2) does not show this problem. Any idea?

Regards, G&ouml;tz Waschk

  </pre>
  <pre wrap="">
<hr size="4" width="90%">
/*
   Benchmark of MPI_Sendrecv_replace as in get_overlaps_spinor_tslice of ddhqet

   hs 15.12.2009
*/

#include &lt;stdio.h&gt;
#include &lt;stdlib.h&gt;
#include &lt;time.h&gt;
#include &lt;mpi.h&gt;

#define NMEAS 11
#define L0    32
#define L1    16
#define L2    16

int nproc1, nproc2, nproc3;

int nrank(int n1, int n2, int n3) {
  while( n1 &lt; 0 ) n1 += nproc1;
  while( n2 &lt; 0 ) n2 += nproc2;
  while( n3 &lt; 0 ) n3 += nproc3;
  while( n1 &gt;= nproc1) n1 -= nproc1;
  while( n2 &gt;= nproc2) n2 -= nproc2;
  while( n3 &gt;= nproc3) n3 -= nproc3;
  return n1*nproc2*nproc3 + n2*nproc3 + n3;
}
/********************************************************************/
int main(int argc ,char **argv){
  int rank, nproc, err, i, x0;
  MPI_Status status;
  struct timeval time;
  double t0, t1, tsum=0;
  double buffer[L1*L2*24];
  int tcnt=0;
  int n1, n2, n3;
  int nup[3];
  int ndn[3];

  err=MPI_Init(&amp;argc, &amp;argv);
  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
  MPI_Comm_size(MPI_COMM_WORLD, &amp;nproc);

  /* Choose process grid */
  i = nproc;
  nproc1 = nproc2 = nproc3 = 1;
  while ( i%2 == 0 ) {
    if ( i%2 == 0 ) { nproc1 *=2; i/=2; }
    if ( i%2 == 0 ) { nproc2 *=2; i/=2; }
    if ( i%2 == 0 ) { nproc3 *=2; i/=2; }
  }
  nproc3 *= i;

  /* Initialize lookup table for process grid */
  for(n1=0; n1 &lt; nproc1; n1++ ) {
    for(n2=0; n2 &lt; nproc2; n2++ ) {
      for(n3=0; n3 &lt; nproc3; n3++ ) {
	if ( rank == nrank(n1,n2,n3) ) {
	  nup[0] = nrank(n1+1,n2,n3);
	  nup[1] = nrank(n1,n2+1,n3);
	  nup[2] = nrank(n1,n2,n3+1);
	  ndn[0] = nrank(n1-1,n2,n3);
	  ndn[1] = nrank(n1,n2-1,n3);
	  ndn[2] = nrank(n1,n2,n3-1);
#ifdef DEBUG
	  printf("Rank %3d: nup = %3d %3d %3d   ndn = %3d %3d %3d\n", rank,
		 nup[0], nup[1], nup[2], 
		 ndn[0], ndn[1], ndn[2]);
#endif
	}
      }
    }
  }

  if( rank == 0 ) 
    printf("%d tests with %d x %d x %d processes: L0 = %d, L1xL2 = %d DP spinors\n", 
	   NMEAS, nproc1, nproc2, nproc3, L0, L1*L2);

  MPI_Barrier(MPI_COMM_WORLD);

  for(i=0; i&lt;NMEAS; i++) {
   
    gettimeofday(&amp;time,NULL);
    t0=time.tv_sec*1e6+time.tv_usec;

    for(x0=0; x0&lt;L0; x0++) {
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, nup[0], 81, ndn[0], 81, MPI_COMM_WORLD, &amp;status);
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, ndn[0], 82, nup[0], 82, MPI_COMM_WORLD, &amp;status);
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, nup[1], 83, ndn[1], 83, MPI_COMM_WORLD, &amp;status);
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, ndn[1], 84, nup[1], 84, MPI_COMM_WORLD, &amp;status);
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, nup[2], 85, ndn[2], 85, MPI_COMM_WORLD, &amp;status);
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, ndn[2], 86, nup[2], 86, MPI_COMM_WORLD, &amp;status);
    }
    gettimeofday(&amp;time,NULL);
    t1=time.tv_sec*1e6+time.tv_usec;

    if ( rank == 0 ) {
      // if ( t1-t0 &gt; 10000 ) {
      if ( 0 ) {
	printf("Overlap over %d processes: %.1f msec\n", nproc,  (t1-t0)/1000);
      }
      else {
	printf("Overlap over %d processes: %.1f usec\n", nproc,  (t1-t0));
      }

      if ( i&gt;0 ) {
	tcnt++;
	tsum += (t1-t0);
      }
    }
  }
  if ( rank == 0 &amp;&amp; tcnt &gt; 0 ) {
    tsum = tsum/tcnt;
    if ( tsum &gt; 10000 ) 
      printf("Average of %d measurements (skipped first) on %d processes: %.1f msec\n", 
	     tcnt, nproc, tsum/1000);
    else
      printf("Average of %d measurements (skipped first) on %d processes: %.1f usec\n", 
	     tcnt, nproc, tsum);
  }

  MPI_Finalize();
  return 0;
}
  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11684.php">Matthew MacManes: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<li><strong>Previous message:</strong> <a href="11682.php">Dong Li: "[OMPI users] Question about senting short MPI messages using RDMA"</a>
<li><strong>In reply to:</strong> <a href="11676.php">G&#246;tz Waschk: "[OMPI users] openib btl slows down application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11697.php">Jeff Squyres: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Reply:</strong> <a href="11697.php">Jeff Squyres: "Re: [OMPI users] openib btl slows down application"</a>
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
