#include "mpi.h"
#include <unistd.h>
#include <stdio.h>
#include <vector>
#include <time.h>

int main(int argc, char* argv[])
{
  MPI_Init(&argc, &argv);

  int rank;
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);

  int n = 999999;
  const int m = 1;
  std::vector<std::vector<int> > vec(m);
  for (int i = 0; i < m; i++)
  {
    vec[i].resize(n);
  }
  MPI_Request mpiRequest[m];
  MPI_Status mpiStatus[m];
  char tt[99] = {0};

  MPI_Barrier(MPI_COMM_WORLD);

  if (rank == 0)
  {
    for (int i = 0; i < m; i++)
    {
      MPI_Isend(&vec[i][0], n, MPI_INT, 1, i, MPI_COMM_WORLD, &mpiRequest[i]);
      time_t t = time(0);
      strftime(tt, 9, "%H:%M:%S", localtime(&t));
      printf("MPI %d: Isend of %d started at %s.\n", rank, i, tt);
    }

    for (int i = 0; i < m; i++)
    {
      int done = 0;
      while (done == 0)
      {
        usleep(100000);
        time_t t = time(0);
        strftime(tt, 9, "%H:%M:%S", localtime(&t));
        printf("MPI %d: MPI_Test of %d at %s.\n", rank, i, tt);
        MPI_Test(&mpiRequest[i], &done, &mpiStatus[i]);
//        printf("MPI %d: MPI_Wait of %d at %s.\n", rank, i, tt);
//        MPI_Wait(&mpiRequest[i], &mpiStatus[i]);
      }

      time_t t = time(0);
      strftime(tt, 9, "%H:%M:%S", localtime(&t));
      printf("MPI %d: Isend of %d finished at %s.\n", rank, i, tt);
    }
  }
  else
  {
    for (int i = 0; i < m; i++)
    {
      time_t t = time(0);
      strftime(tt, 9, "%H:%M:%S", localtime(&t));
      printf("MPI %d: Recv of %d started at %s.\n", rank, i, tt);

      MPI_Recv(&vec[i][0], n, MPI_INT, 0, i, MPI_COMM_WORLD, &mpiStatus[i]);

      t = time(0);
      strftime(tt, 9, "%H:%M:%S", localtime(&t));
      printf("MPI %d: Recv of %d finished at %s.\n", rank, i, tt);
    }
  }

  MPI_Finalize();

  return 0;
}

