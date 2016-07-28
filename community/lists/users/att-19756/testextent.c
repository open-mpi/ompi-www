// example of parallel MPI read from single file, in C++ 
#include <stdio.h>
#include <mpi.h>
 
int main(int argc, char *argv[]) 
{ 
  int i; 

  int rank, size;

  MPI_Datatype darray;

  int distrib[2] = { MPI_DISTRIBUTE_CYCLIC, MPI_DISTRIBUTE_CYCLIC };
  int bsize[2] = { 3, 3 };
  int gsize[2] = { 10, 10 };
  int psize[2] = { 2, 2 };

  int tsize;
  MPI_Aint lb, extent;
 
  MPI_Init(&argc, &argv); 

  MPI_Comm_size(MPI_COMM_WORLD, &size);
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);

  MPI_Type_create_darray(size, rank, 2, gsize, distrib,
			 bsize, psize, MPI_ORDER_C, MPI_DOUBLE, &darray);

  MPI_Type_size(darray, &tsize);
  MPI_Type_get_extent(darray, &lb, &extent);

  for(i = 0; i < size; i++) {
    MPI_Barrier(MPI_COMM_WORLD);
    if(rank == i) {
      printf("Rank %i, size=%i, extent=%i, lb=%i\n", rank, tsize, (int)extent, (int)lb);
    }
  }

  MPI_Finalize();

  return 0;

} 
