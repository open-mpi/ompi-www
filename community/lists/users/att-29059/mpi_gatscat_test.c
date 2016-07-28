#include "mpi.h"
#include <stdlib.h>
#include <stdio.h>

#define NSIZE 1000            /* size of array */

/*
 * To run this test program using the lock/unlock protocol, comment out both
 * defines for USE_MPI_REQUESTS and USE_MPI_FLUSH_LOCAL
 *
 * To run this test program using the request-based protocol with Rput, Rget,
 * uncomment the definition USE_MPI_REQUESTS and comment out the definition
 * USE_MPI_FLUSH_LOCAL
 *
 * To run this test program using the flush_local protocol, uncomment the
 * definitions for both USE_MPI_FLUSH_LOCAL and USE_MPI_REQUESTS
 *
 * The program can be converted to used MPI_Datatypes set up using the command
 * MPI_Type_create_subarray commenting out the definition USE_STRUCTS
 */

/*
#define USE_MPI_REQUESTS
#define USE_MPI_FLUSH_LOCAL
*/

#ifdef USE_MPI_FLUSH_LOCAL
#define USE_MPI_REQUESTS
#endif

/*
 * To run this program using the MPI_Type_create_subarray instead of the
 * MPI_Type_create_struct routine, comment out the USE_STRUCTS definition
 */

#define USE_STRUCTS

void do_work(MPI_Comm comm, int offset)
{
  int one = 1;
  int me, nproc, wme;
  int i, j, iproc;
  int dims = NSIZE;
  int lo, hi, mysize;
  int nval, icnt, jcnt;
  int *values;
  int **index;
  int *ival;
  int sok, ok;
  int *local_buf;
  MPI_Win win;

  MPI_Comm_size(comm, &nproc);
  MPI_Comm_rank(comm, &me);
  MPI_Comm_rank(MPI_COMM_WORLD, &wme);

  /* Print out which protocol is being used */
  if (me==0) {
#ifdef USE_MPI_REQUESTS
#ifdef USE_MPI_FLUSH_LOCAL
    printf("\nUsing flush local protocol\n");
#else
    printf("\nUsing request-based protocol\n");
#endif
#else
    printf("\nUsing lock/unlock protocol\n");
#endif
#ifdef USE_STRUCTS
    printf("\nBuilding data types using stuct command\n");
#else
    printf("\nBuilding data types using subarray command\n");
#endif
  }

  /* this processor will assign every nproc'th value starting at me */
  nval = (dims-1-me)/nproc+1;

  values = (int*)malloc(nval*sizeof(int));
  ival = (int*)malloc(nval*sizeof(int));

  icnt=0;
  for (i=me; i<dims; i += nproc) {
    values[icnt] = i+offset;
    ival[icnt] = i;
    icnt++;
  }

  if (me==0) printf("\nCompleted assigning values to local arrays\n");

  /* figure out partitioning */
  lo = (dims*me)/nproc;
  hi = (dims*(me+1))/nproc-1;
  mysize = hi-lo+1;

  /* allocate memroy and create window */
  MPI_Alloc_mem(mysize*sizeof(int),MPI_INFO_NULL,&local_buf);
  MPI_Win_create(local_buf,mysize*sizeof(int),1,MPI_INFO_NULL,comm,&win);

#ifdef USE_MPI_REQUESTS
  MPI_Win_lock_all(0,win);
#endif

  /* This is probably unecessary */
#ifdef USE_MPI_REQUESTS
  MPI_Win_flush_all(win);
#else
  MPI_Win_fence(0,win);
#endif
  MPI_Barrier(comm);

  /* zero all values in array */
  for (i=0; i<mysize; i++) {
    local_buf[i] = 0;
  }

  if (me==0) printf("\nCreated window-based global array\n");

  /* Scatter values to global array. Start by setting up loop to all
     destination arrays */
  icnt = me;
  for (j = 0; j < nproc; j++) {
    int nvals = 0;
    int isave;
#ifdef USE_STRUCTS
    int *blocklengths;
    MPI_Aint *src_displacements;
    MPI_Aint *dst_displacements;
    MPI_Datatype *types;
#else
    int array_of_sizes[2];
    int array_of_starts[2];
    int array_of_subsizes[2];
    MPI_Datatype base_type = MPI_INT;
    int two = 2;
#endif
    MPI_Datatype src_type, dst_type;
    MPI_Request request;
    MPI_Status status;

    iproc = (j+me)%nproc;
    /* send data to process iproc */
    lo = (dims*iproc)/nproc;
    hi = (dims*(iproc+1))/nproc-1;
    while (icnt < lo) icnt += nproc;
    isave = icnt;
    while (icnt <= hi) {
      nvals++;
      icnt += nproc;
    }
    icnt = isave;
    jcnt = 0;
#ifdef USE_STRUCTS
    blocklengths = (int*)malloc(nvals*sizeof(int));
    src_displacements = (MPI_Aint*)malloc(nvals*sizeof(MPI_Aint));
    dst_displacements = (MPI_Aint*)malloc(nvals*sizeof(MPI_Aint));
    types = (MPI_Datatype*)malloc(nvals*sizeof(MPI_Datatype));
    while (icnt <= hi) {
      /* evaluate value and global index for value in global array */
      values[jcnt] = icnt + offset;
      ival[jcnt] = icnt;
      /* convert global index to displacement */
      src_displacements[jcnt] = sizeof(int)*jcnt;
      dst_displacements[jcnt] = sizeof(int)*(ival[jcnt]-lo);
      blocklengths[jcnt] = sizeof(int);
      types[jcnt] = MPI_BYTE;
      jcnt++;
      icnt += nproc;
    }
    /*
    for (i=0; i<jcnt; i++) {
      printf("p[%d] src_disp[%d]: %d dst_disp[%d]: %d val[%d]: %d ival[%d]: %d\n",me,i,src_displacements[i],i,dst_displacements[i],i,values[i],i,ival[i]);
    }
    */
    /* reset icnt if it has gone past end of array */
    if (icnt >= dims) icnt = me;
    /* create src data type */
    MPI_Type_create_struct(jcnt,blocklengths,src_displacements,types,&src_type);
    /* create destination data type */
    MPI_Type_create_struct(jcnt,blocklengths,dst_displacements,types,&dst_type);
    free(blocklengths);
    free(dst_displacements);
    free(types);
#else
    while (icnt <= hi) {
      /* evaluate value and global index for value in global array */
      values[jcnt] = icnt + offset;
      /* convert global index to displacement */
      jcnt++;
      icnt += nproc;
    }
    if (icnt >= dims) icnt = me;
    /* create src_data type */
    array_of_sizes[0] = 1;
    array_of_sizes[1] = jcnt;
    array_of_subsizes[0] = 1;
    array_of_subsizes[1] = jcnt;
    array_of_starts[0] = 0;
    array_of_starts[1] = 0;
    base_type = MPI_INT;
    MPI_Type_create_subarray(two, array_of_sizes,array_of_subsizes,
        array_of_starts,MPI_ORDER_FORTRAN,base_type,&src_type);
    /* create dst_data type */
    array_of_sizes[0] = nproc;
    array_of_sizes[1] = jcnt;
    array_of_subsizes[0] = 1;
    array_of_subsizes[1] = jcnt;
    array_of_starts[0] = (isave-lo)%nproc;
    array_of_starts[1] = 0;
    MPI_Type_create_subarray(two, array_of_sizes,array_of_subsizes,
        array_of_starts,MPI_ORDER_FORTRAN,base_type,&dst_type);
#endif

    /* commit data types and put data on remote processor */
    MPI_Type_commit(&src_type);
    MPI_Type_commit(&dst_type);

#ifdef USE_MPI_REQUESTS
#ifdef USE_MPI_FLUSH_LOCAL
    MPI_Put(values, 1, src_type, iproc, 0, 1, dst_type, win);
    MPI_Win_flush_local(iproc, win);
#else
    MPI_Rput(values, 1, src_type, iproc, 0, 1, dst_type,
        win, &request);
    MPI_Wait(&request, &status);
#endif
#else
    MPI_Win_lock(MPI_LOCK_SHARED,iproc,0,win);
    MPI_Put(values, 1, src_type, iproc, 0, 1, dst_type, win);
    MPI_Win_unlock(iproc,win);
#endif
    MPI_Type_free(&src_type);
    MPI_Type_free(&dst_type);
  }
  if (me==0) printf("\nCompleted scatter operation\n");

  /* synchronize communication across all processors */
#ifdef USE_MPI_REQUESTS
  MPI_Win_flush_all(win);
#else
  MPI_Win_fence(0,win);
#endif
  MPI_Barrier(comm);
  /* print values in distributed array */
  /*
  for (i=0; i<mysize; i++) {
    printf("p[%d] local_buf[%d]: %d\n",me,i,local_buf[i]);
  }
  */

  /* Check to see of scattered values are correct */
  lo = (dims*me)/nproc;
  sok = 1;
  for (i=0; i<mysize; i++) {
    if (local_buf[i] != i+lo+offset) sok=0;
  }
  MPI_Allreduce(&sok, &ok, 1, MPI_INT, MPI_PROD, comm);
  if (ok && me == 0) {
    printf("\nScattered values are correct\n");
  } else if (!ok) {
    printf("\nScattered values are incorrect\n");
  }

  free(values);
  free(ival);

  /* Gather values set by next highest processor. The last processor gets the
     values set by the first processor */
  if (me<nproc-1) {
    nval = (dims-me-2)/nproc+1;
    values = (int*)malloc(nval*sizeof(int));
    ival = (int*)malloc(nval*sizeof(int));
    icnt=0;
    for (i=me+1; i<dims; i += nproc) {
      ival[icnt] = i;
      icnt++;
    }
  } else {
    nval = (dims-1)/nproc+1;
    values = (int*)malloc(nval*sizeof(int));
    ival = (int*)malloc(nval*sizeof(int));
    icnt=0;
    for (i=0; i<dims; i += nproc) {
      ival[icnt] = i;
      icnt++;
    }
  }
  /* initialize values array to zero */
  for (i=0; i<nval; i++) values[i] = 0;
  if (me==0) printf("\nAssigned indices for values to be retrieved\n");
  icnt = (me+1)%nproc;
  for (j = 0; j < nproc; j++) {
    int nvals = 0;
    int isave;
#ifdef USE_STRUCTS
    int *blocklengths;
    MPI_Aint *src_displacements;
    MPI_Aint *dst_displacements;
    MPI_Datatype *types;
#else
    int array_of_sizes[2];
    int array_of_starts[2];
    int array_of_subsizes[2];
    MPI_Datatype base_type = MPI_INT;
    int two = 2;
#endif
    MPI_Datatype src_type, dst_type;
    MPI_Request request;
    MPI_Status status;

    iproc = (j+me)%nproc;
    /* get data from process iproc */
    lo = (dims*iproc)/nproc;
    hi = (dims*(iproc+1))/nproc-1;
    while (icnt < lo) icnt += nproc;
    isave = icnt;
    int jlo =  isave/nproc;
    while (icnt <= hi) {
      nvals++;
      icnt += nproc;
    }
    icnt = isave;
    jcnt = 0;
#ifdef USE_STRUCTS
    blocklengths = (int*)malloc(nvals*sizeof(int));
    src_displacements = (MPI_Aint*)malloc(nvals*sizeof(MPI_Aint));
    dst_displacements = (MPI_Aint*)malloc(nvals*sizeof(MPI_Aint));
    types = (MPI_Datatype*)malloc(nvals*sizeof(MPI_Datatype));
    while (icnt <= hi) {
      /* evaluate global index for value in global array */
      ival[jcnt] = icnt;
      /* convert global index to displacement */
      src_displacements[jcnt] = sizeof(int)*(ival[jcnt]-lo);
      dst_displacements[jcnt] = sizeof(int)*(jcnt+jlo);
      blocklengths[jcnt] = sizeof(int);
      types[jcnt] = MPI_BYTE;
      jcnt++;
      icnt += nproc;
    }
    /* reset icnt if it has gone past end of array */
    if (icnt >= dims) icnt = (me+1)%nproc;
    /* create src data type */
    MPI_Type_create_struct(jcnt,blocklengths,src_displacements,types,&src_type);
    /* create destination data type */
    MPI_Type_create_struct(jcnt,blocklengths,dst_displacements,types,&dst_type);
    free(blocklengths);
    free(dst_displacements);
    free(src_displacements);
    free(types);
#else
    while (icnt <= hi) {
      /* evaluate value and global index for value in global array */
      /* convert global index to displacement */
      jcnt++;
      icnt += nproc;
    }
    if (icnt >= dims) icnt = (me+1)%nproc;
    /* create src_data type */
    array_of_sizes[0] = nproc;
    array_of_sizes[1] = jcnt;
    array_of_subsizes[0] = 1;
    array_of_subsizes[1] = jcnt;
    array_of_starts[0] = (isave-lo)%nproc;
    array_of_starts[1] = 0;
    base_type = MPI_INT;
    MPI_Type_create_subarray(two, array_of_sizes,array_of_subsizes,
        array_of_starts,MPI_ORDER_FORTRAN,base_type,&src_type);
    /* create dst_data type */
    array_of_sizes[0] = 1;
    array_of_sizes[1] = nval;
    array_of_subsizes[0] = 1;
    array_of_subsizes[1] = jcnt;
    array_of_starts[0] = 0;
    array_of_starts[1] = jlo;
    MPI_Type_create_subarray(two, array_of_sizes,array_of_subsizes,
        array_of_starts,MPI_ORDER_FORTRAN,base_type,&dst_type);
#endif

    /* commit data types and put data on remote processor */
    MPI_Type_commit(&src_type);
    MPI_Type_commit(&dst_type);

#ifdef USE_MPI_REQUESTS
#ifdef USE_MPI_FLUSH_LOCAL
    MPI_Get(values, 1, dst_type, iproc, 0, 1, src_type, win);
    MPI_Win_flush_local(iproc, win);
#else
    MPI_Rget(values, 1, dst_type, iproc, 0, 1, src_type,
        win, &request);
    MPI_Wait(&request, &status);
#endif
#else
    MPI_Win_lock(MPI_LOCK_SHARED,iproc,0,win);
    MPI_Get(values, 1, dst_type, iproc, 0, 1, src_type, win);
    MPI_Win_unlock(iproc,win);
#endif
    MPI_Type_free(&src_type);
    MPI_Type_free(&dst_type);
  }
  if (me==0) printf("\nCompleted gather operation\n");
  /*
  for (i=0; i<nval; i++) {
    printf("p[%d] values[%d]: %d\n",me,i,values[i]);
  }
  */

  /* Check values for correctness */
  sok = 1;
  if (me<nproc-1) {
    icnt=0;
    for (i=me+1; i<dims; i += nproc) {
      if (values[icnt] != i+offset) {
        sok = 0;
      }
      icnt++;
    }
  } else {
    icnt = 0;
    for (i=0; i<dims; i += nproc) {
      if (values[icnt] != i+offset) {
        sok = 0;
      }
      icnt++;
    }
  }
  MPI_Allreduce(&sok, &ok, 1, MPI_INT, MPI_PROD, comm);
  if (ok && me == 0) {
    printf("\nCorrect values found, test passes\n");
  } else if (!ok) {
    printf("\nIncorrect values found process %d, test FAILED\n",me);
  }

  free(values);
  free(ival);
}
     


int main(argc, argv)
  int argc;
  char **argv;
{
  int me, nproc;

  MPI_Init(&argc,&argv);

  MPI_Comm_size(MPI_COMM_WORLD, &nproc);
  MPI_Comm_rank(MPI_COMM_WORLD, &me);

  if(me==0) {
    printf("Using %ld processes\n",(long)nproc);
  }

  do_work(MPI_COMM_WORLD,0);

  if(me==0)printf("\nTerminating ..\n");

  MPI_Finalize();

  return 0;
}

