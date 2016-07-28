#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>

int
main (int argc, char **argv)
{
  int rank;
  int error_codes[1];
  char buffer[1];
  MPI_Comm intercomm;
  MPI_Status status;

  MPI_Init(&argc, &argv);

  MPI_Comm_rank(MPI_COMM_WORLD, &rank);

  if (rank == 0)
  {
    printf("[master] spawning process\n");
    MPI_Comm_spawn("./other", argv, 1, MPI_INFO_NULL, 0, MPI_COMM_SELF, &intercomm, error_codes);

    /* Wait for children to finish. */
    MPI_Recv(buffer, 1, MPI_CHAR, MPI_ANY_SOURCE, 1, intercomm, &status);
  }

  printf("[master (%i)] waiting at barrier\n", rank);
  MPI_Barrier(MPI_COMM_WORLD);
  printf("[master (%i)] done\n", rank);

  MPI_Finalize();
}
