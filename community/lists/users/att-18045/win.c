#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{
  MPI_Win win;
  int bugnumber,tslots[2][2],oslots[2][2],ranks[2];
  int i,rank,size,*target,*origin,n[2];
  MPI_Datatype ttype[2],otype[2];

  MPI_Init(&argc,&argv);
  MPI_Comm_size(MPI_COMM_WORLD,&size);
  MPI_Comm_rank(MPI_COMM_WORLD,&rank);
  if (size < 2 || argc != 2) {
    if (!rank) fprintf(stderr,"usage: mpiexec -n 2 %s BUG_NUMBER\n",argv[0]);
    MPI_Finalize();
    return 1;
  }
  bugnumber = atoi(argv[1]);

  ranks[0] = rank ? 0 : size-1;
  ranks[1] = (rank+1)%size;

  n[0] = 0;
  tslots[0][n[0]++] = 0;
  if (rank) tslots[0][n[0]++] = 2;
  n[1] = 0;
  tslots[1][n[1]++] = 1;

  oslots[0][0] = 0;
  oslots[0][1] = 1;
  oslots[1][0] = 2;

  for (i=0; i<2; i++) {
    MPI_Type_create_indexed_block(n[i],1,tslots[i],MPI_INT,&ttype[i]);
    MPI_Type_create_indexed_block(n[i],1,oslots[i],MPI_INT,&otype[i]);
    MPI_Type_commit(&ttype[i]);
    MPI_Type_commit(&otype[i]);
  }
  MPI_Alloc_mem(3*sizeof(*target),MPI_INFO_NULL,&target);
  for (i=0; i<3; i++) target[i] = 100*(rank+1) + i;
  origin = malloc(3*sizeof(*origin));
  for (i=0; i<3; i++) origin[i] = -i-1;

  MPI_Win_create(target,(MPI_Aint)3*sizeof(*target),sizeof(*target),MPI_INFO_NULL,MPI_COMM_WORLD,&win);
  MPI_Win_fence(0,win);
  switch (bugnumber) {
  case 1:                       /* OMPI: This operation succeeds, but MPI_Win_free() fails below */
    for (i=0; i<1; i++) MPI_Get(origin,1,otype[i],ranks[i],0,1,ttype[i],win);
    break;
  case 2:                       /* OMPI: Failure in MPI_Win_fence() on rank != 1 */
    for (i=0; i<2; i++) MPI_Get(origin,1,otype[i],ranks[i],0,1,ttype[i],win);
    break;
  default:
    if (!rank) fprintf(stderr,"Unknown bugnumber %d\n",bugnumber);
    MPI_Finalize();
    return 1;
  }
  MPI_Win_fence(0,win);

  printf("[%d] provided [%3d,%3d,%3d]  got [%3d,%3d,%3d]\n",rank,target[0],target[1],target[2],origin[0],origin[1],origin[2]);

  free(origin);
  for (i=0; i<2; i++) {
    MPI_Type_free(&otype[i]);
    MPI_Type_free(&ttype[i]);
  }
  MPI_Win_free(&win);
  MPI_Free_mem(target);
  MPI_Finalize();
  return 0;
}
