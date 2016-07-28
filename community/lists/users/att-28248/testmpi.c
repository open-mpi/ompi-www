#include <stdio.h>
#include <stdlib.h>
#include <assert.h>
#include <unistd.h>
#include <string.h>
#include <sys/time.h>

#include <mpi.h>

/*
#define MPI_USE_REQUESTS
#define MPI_USE_FLUSH_LOCAL
*/
#define USE_SYNC
#define NDIM 500
#define LOOP 2000
#ifdef MPI_USE_FLUSH_LOCAL
#define MPI_USE_REQUESTS
#endif

int main(int argc, char *argv[])
{
  int nvals = NDIM * NDIM;
  MPI_Win win;
  MPI_Aint displ;
  MPI_Datatype dtype;
  void *buf;
  double *a, *b, *c;
  int tsize, lo[2], hi[2], rlo[2], rhi[2], ldims[2], dims[2], starts[2];
  int i, j, k, me, nproc, rproc, loop;
  MPI_Request request;
  MPI_Status status;

  MPI_Init(&argc,&argv);
  MPI_Comm_rank(MPI_COMM_WORLD, &me);
  MPI_Comm_size(MPI_COMM_WORLD, &nproc);
  /* Allocate window */
  tsize = sizeof(double)*nvals;
#if 1
  MPI_Win_allocate(tsize,1,MPI_INFO_NULL,MPI_COMM_WORLD,&buf,&win);
#else
  MPI_Alloc_mem(tsize,MPI_INFO_NULL,&buf);
  MPI_Win_create(buf,tsize,1,MPI_INFO_NULL,MPI_COMM_WORLD,&win);
#endif
  c = (double*)buf;
#ifdef MPI_USE_REQUESTS
  MPI_Win_lock_all(0,win);
#endif

  /* Create local buffers*/
  a = (double*)malloc(nvals*sizeof(double));
  b = (double*)malloc(nvals*sizeof(double));

  /* set up blocks for local and remote requests */
  lo[0] = 0;
  lo[1] = 0;
  hi[0] = NDIM/2-1;
  hi[1] = NDIM/2-1;

  rlo[0] = NDIM/2;
  rlo[1] = NDIM/2;
  rhi[0] = NDIM-1;
  rhi[1] = NDIM-1;

  /* Evaluate displacement on remote processor */
  displ = rlo[0] + rlo[1]*NDIM;
  displ = displ*sizeof(double);

  /* loop over tests */
  for (loop=0; loop<LOOP; loop++) {

    /* Fill local buffer with unique values */
    for (j=0; j<NDIM; j++) {
      for (i=0; i<NDIM; i++) {
        k = i+j*NDIM;
        a[k] = (double)(k+(me+loop)*nvals);
        b[k] = 0.0;
        c[k] = 0.0;
      }
    }

    /* Construct data type. For this test, we can use the same data type for both
     * local and remote buffers */
    dims[0] = NDIM;
    dims[1] = NDIM;
    ldims[0] = NDIM/2;
    ldims[1] = NDIM/2;
    starts[0] = 0;
    starts[1] = 0;
    MPI_Type_create_subarray(2,dims,ldims,starts,MPI_ORDER_FORTRAN,
        MPI_DOUBLE,&dtype);

    /* Put data in remote buffer */
    rproc = (me+1)%nproc;
    MPI_Type_commit(&dtype);
#ifdef MPI_USE_REQUESTS
#ifdef MPI_USE_FLUSH_LOCAL
    MPI_Put(a,1,dtype,rproc,displ,1,dtype,win); 
    MPI_Win_flush_local(rproc,win);
#else
    MPI_Rput(a,1,dtype,rproc,displ,1,dtype,win,&request); 
    MPI_Wait(&request,&status);
#endif
#else
    MPI_Win_lock(MPI_LOCK_SHARED,rproc,0,win);
    MPI_Put(a,1,dtype,rproc,displ,1,dtype,win); 
    MPI_Win_unlock(rproc,win);
#endif

#ifdef USE_SYNC
#ifdef MPI_USE_REQUESTS
    MPI_Win_flush_all(win);
#else
    MPI_Win_fence(0,win);
#endif
    MPI_Barrier(MPI_COMM_WORLD);
#endif

    /* Get data from remote buffer */
#ifdef MPI_USE_REQUESTS
#ifdef MPI_USE_FLUSH_LOCAL
    MPI_Get(b,1,dtype,rproc,displ,1,dtype,win); 
    MPI_Win_flush_local(rproc,win);
#else
    MPI_Rget(b,1,dtype,rproc,displ,1,dtype,win,&request); 
    MPI_Wait(&request,&status);
#endif
#else
    MPI_Win_lock(MPI_LOCK_SHARED,rproc,0,win);
    MPI_Get(b,1,dtype,rproc,displ,1,dtype,win); 
    MPI_Win_unlock(rproc,win);
#endif

    /* Compare values in a and b */
    for (j=0; j<NDIM/2; j++) {
      for (i=0; i<NDIM/2; i++) {
        k = i+j*NDIM;
        if (a[k] != b[k]) {
          fprintf(stderr,"p[%d] loop: %d value a[%d,%d]: %f actual b[%d,%d]: %f\n",
              me,loop,i,j,a[k],i,j,b[k]);
          assert(0);
        }
      }
    }
    MPI_Type_free(&dtype);
    if (me==0) printf("Test passed for loop %d\n",loop);
  }
  if (me==0) printf("\nAll tests successful");

#ifdef MPI_USE_REQUESTS
  MPI_Win_unlock_all(win);
#endif
#if 0
  MPI_Free_mem(buf);
#endif
  MPI_Win_free(&win);
  MPI_Finalize();
  return (0);
}
