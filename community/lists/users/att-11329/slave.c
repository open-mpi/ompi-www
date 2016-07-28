#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <mpi.h>

#define SLEEP_TIME 2

int
main (int argc, char **argv)
{
  int rank;
  int size;
  MPI_Comm spawn;

  MPI_Init(&argc, &argv);

  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  MPI_Comm_size(MPI_COMM_WORLD, &size);

  printf("[slave %i] sleeping for %i seconds\n", rank, SLEEP_TIME);
  sleep(SLEEP_TIME);
  printf("[slave %i] waiting at barrier\n", rank);
  MPI_Comm_get_parent(&spawn);
  MPI_Barrier(spawn);

  MPI_Finalize();
}
