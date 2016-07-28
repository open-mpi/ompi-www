#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <string.h>
#include <mpi.h>

void randv(double *, long);

int main(int argc, char *argv[]) {
long l, i;
int mpierr, myid, numprocs, id, ialg, init;
MPI_Status *status;
double wt0, wt1, wt;
double *sarr, *rarr;

   MPI_Init(NULL, NULL);
   MPI_Comm_rank(MPI_COMM_WORLD, &myid);
   MPI_Comm_size(MPI_COMM_WORLD, &numprocs);

   pseeds(myid, numprocs, -1);
   if (myid == 0) {
      fprintf(stderr, "choose algorithm: enter 1 for MPI_Allreduce\n");
      fprintf(stderr, "                  enter 2 for MPI_Send/Recv and MPI_Bcast\n");
      scanf("%i", &ialg);
      if (ialg != 1 && ialg != 2) {
         MPI_Abort(MPI_COMM_WORLD, -1);
         fprintf(stderr, "must enter 1 or 2\n");
         exit(-1);
      }
      if (ialg == 2) ialg = 0;
   }
   MPI_Bcast(&ialg, 1, MPI_INT, 0, MPI_COMM_WORLD);
   for (;;) {
      if (myid == 0) {
         fprintf(stderr, "enter array size (integer; negative to stop): \n");
         scanf("%li", &l);
      }
      MPI_Bcast(&l, 1, MPI_LONG, 0, MPI_COMM_WORLD);
      if (l < 0) break;
      sarr = (double *)malloc(l*sizeof(double));
      rarr = (double *)malloc(l*sizeof(double));
      randv(sarr, l);
      if (ialg) {
         if (myid == 0) wt0 = MPI_Wtime();
         MPI_Allreduce(sarr, rarr, l, MPI_DOUBLE, MPI_SUM, MPI_COMM_WORLD);
         if (myid == 0) {
            wt = MPI_Wtime();
            fprintf(stderr, "allreduce completed %f\n", wt - wt0);
         }
      } else {
         if (myid == 0) {
            for (i = 0; i < l; i++) { rarr[i] = sarr[i]; }
            wt0 = MPI_Wtime();
            for (id = 1; id <= numprocs - 1; id++) {
               wt1 = MPI_Wtime();
               MPI_Recv(sarr, l, MPI_DOUBLE, id, id, MPI_COMM_WORLD, status);
               wt = MPI_Wtime();
               fprintf(stderr, "id=0 received data from id=%i in %f\n", id, wt - wt1);
            }
            for (i = 0; i < l; i++) { rarr[i] += sarr[i]; }
            wt1 = MPI_Wtime();
         } else {
            MPI_Send(sarr, l, MPI_DOUBLE, 0, myid, MPI_COMM_WORLD);
         }
         MPI_Bcast(rarr, l, MPI_DOUBLE, 0, MPI_COMM_WORLD);
         if (myid == 0) {
            wt = MPI_Wtime();
            fprintf(stderr, "bcast completed in %f\n", wt - wt1);
            fprintf(stderr, "allreduce completed in %f\n", wt - wt0);
         }
      }
      free(sarr);
      free(rarr);
   }
   MPI_Finalize();
}

unsigned int i__RNG;

unsigned int lcg1664525(unsigned int *iseed){
/* linear congruential random number generator
      i(n+1) = [a * i(n) + c] mod m
      with a=1664525, c=1013904223, and m=2^32
      (see Numerical Recipes, ch 7.1)           */

static unsigned int ia = 1664525, ic = 1013904223;

  *iseed = (*iseed)*ia + ic;
  return *iseed;
}

#include <sys/time.h>
#include <unistd.h>
#include <limits.h>

int seeds(int iseed){
int init;
struct timeval tv;
struct timezone tz;

  if (iseed <= 0) {
    gettimeofday(&tv,&tz);
    iseed = tv.tv_usec * (INT_MAX/1000000);   
  }/*end if*/
  init = iseed;
  i__RNG = iseed;
  return init;
}

int pseeds(int id, int numprocs, int iseed){
/*  this routine can be used in MPI programs to initialize the random number
    generator randv so that depending on the id of the processor different
    seeds are generated. Otherwise the functionality is the same as explained
    above for the seeds routine, only the id (as obtained from MPI_COMM_RANK)
    and the # of processors (as returnd from MPI_COMM_SIZE) must be provided
    additionally. */

int init;
struct timeval tv;
struct timezone tz;

  if (iseed <= 0) {
    gettimeofday(&tv,&tz);
    iseed = (id + 1) * tv.tv_usec * (INT_MAX/(numprocs*1000000));   
  }/*end if*/
  init = iseed;
  i__RNG = iseed;
  return init;
}

void randv(double *r, long n){
long i;
const double rmax=0.5/((double)INT_MAX+1.);   /* 2^(-32) */

   for (i = 0; i < n; i++) {
      r[i] = lcg1664525(&i__RNG)*rmax;
   }
}

