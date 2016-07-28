#include <stdio.h>

#include "mpi.h"

#define CORR_SIZE 1


int main (int argc, char * argv[])
{
  MPI_Comm MPI_COMM_G1, MPI_COMM_G2;
  MPI_Group g0, g1, g2;
  int r_array[4] = {0, 1, 2, 3};
  int size;
  int myrank;
  const int g_size = 2;
  float corrbuf[CORR_SIZE];
  float corrsum[CORR_SIZE];

  MPI_Init (&argc, &argv);

  MPI_Comm_size (MPI_COMM_WORLD, &size);
  MPI_Comm_size (MPI_COMM_WORLD, &myrank);

  if (size != 4)
    {
      fprintf (stderr, "Programm must be run with 4 processes\n");
      return -1;
    }

  MPI_Comm_group (MPI_COMM_WORLD, &g0);
  MPI_Group_incl (g0, g_size, &r_array[0], &g1);
  MPI_Group_incl (g0, g_size, &r_array[2], &g2);
  MPI_Comm_create (MPI_COMM_WORLD, g1, &MPI_COMM_G1);
  MPI_Comm_create (MPI_COMM_WORLD, g2, &MPI_COMM_G2);

  if (myrank == 0 || myrank == 1)
    MPI_Reduce (corrbuf, corrsum, CORR_SIZE, MPI_FLOAT, MPI_SUM, 0, MPI_COMM_G1);

  if (myrank == 2 || myrank == 3)
    MPI_Reduce (corrbuf, corrsum, CORR_SIZE, MPI_FLOAT, MPI_SUM, 0, MPI_COMM_G2);

  MPI_Finalize ();
  return 0;
}

