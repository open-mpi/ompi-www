/*
   Benchmark of MPI_Sendrecv_replace as in get_overlaps_spinor_tslice of ddhqet

   hs 15.12.2009
*/

#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <mpi.h>

#define NMEAS 11
#define L0    32
#define L1    16
#define L2    16

int nproc1, nproc2, nproc3;

int nrank(int n1, int n2, int n3) {
  while( n1 < 0 ) n1 += nproc1;
  while( n2 < 0 ) n2 += nproc2;
  while( n3 < 0 ) n3 += nproc3;
  while( n1 >= nproc1) n1 -= nproc1;
  while( n2 >= nproc2) n2 -= nproc2;
  while( n3 >= nproc3) n3 -= nproc3;
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

  err=MPI_Init(&argc, &argv);
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  MPI_Comm_size(MPI_COMM_WORLD, &nproc);

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
  for(n1=0; n1 < nproc1; n1++ ) {
    for(n2=0; n2 < nproc2; n2++ ) {
      for(n3=0; n3 < nproc3; n3++ ) {
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

  for(i=0; i<NMEAS; i++) {
   
    gettimeofday(&time,NULL);
    t0=time.tv_sec*1e6+time.tv_usec;

    for(x0=0; x0<L0; x0++) {
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, nup[0], 81, ndn[0], 81, MPI_COMM_WORLD, &status);
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, ndn[0], 82, nup[0], 82, MPI_COMM_WORLD, &status);
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, nup[1], 83, ndn[1], 83, MPI_COMM_WORLD, &status);
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, ndn[1], 84, nup[1], 84, MPI_COMM_WORLD, &status);
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, nup[2], 85, ndn[2], 85, MPI_COMM_WORLD, &status);
      MPI_Sendrecv_replace(buffer, L1*L2*24, MPI_DOUBLE, ndn[2], 86, nup[2], 86, MPI_COMM_WORLD, &status);
    }
    gettimeofday(&time,NULL);
    t1=time.tv_sec*1e6+time.tv_usec;

    if ( rank == 0 ) {
      // if ( t1-t0 > 10000 ) {
      if ( 0 ) {
	printf("Overlap over %d processes: %.1f msec\n", nproc,  (t1-t0)/1000);
      }
      else {
	printf("Overlap over %d processes: %.1f usec\n", nproc,  (t1-t0));
      }

      if ( i>0 ) {
	tcnt++;
	tsum += (t1-t0);
      }
    }
  }
  if ( rank == 0 && tcnt > 0 ) {
    tsum = tsum/tcnt;
    if ( tsum > 10000 ) 
      printf("Average of %d measurements (skipped first) on %d processes: %.1f msec\n", 
	     tcnt, nproc, tsum/1000);
    else
      printf("Average of %d measurements (skipped first) on %d processes: %.1f usec\n", 
	     tcnt, nproc, tsum);
  }

  MPI_Finalize();
  return 0;
}




