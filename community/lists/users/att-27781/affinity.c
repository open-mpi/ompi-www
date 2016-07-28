#define _GNU_SOURCE
#include <sched.h>
#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>
#include <unistd.h>

int main(int argc, char *argv[])
{
#define NCPUS 128
  cpu_set_t *mask = NULL;
  char hname[256];
  size_t size;
  int mpi_rank, mpi_size;

  MPI_Init(&argc, &argv);
  MPI_Comm_rank(MPI_COMM_WORLD, &mpi_rank);
  MPI_Comm_size(MPI_COMM_WORLD, &mpi_size);

  mask = CPU_ALLOC(NCPUS);
  size = CPU_ALLOC_SIZE(NCPUS);
  CPU_ZERO_S(size, mask);

  if ( sched_getaffinity(0, size, mask) == -1 ) {
    CPU_FREE(mask);
    perror("sched_getaffinity");
    return -1;
  }
  
  for(int r=0; r<mpi_size; r++){
    if(mpi_rank==r){
      gethostname(hname, 255);
      printf("rank %d @ %s ", mpi_rank, hname);
      for (int i = 0; i < NCPUS; i++ ) {
	if ( CPU_ISSET_S(i, size, mask) ) {
	  printf(" %d,", i);
	}
      }
      printf("\n"); fflush(stdout);
    }
    MPI_Barrier(MPI_COMM_WORLD);
  }

  MPI_Barrier(MPI_COMM_WORLD);
  MPI_Finalize();
}

