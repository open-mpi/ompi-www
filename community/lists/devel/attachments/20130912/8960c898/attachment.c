#include <stdio.h>
#include <string.h>
#include <unistd.h>
#include <mpi.h>

int main (int argc, char **argv)
{
    MPI_Win win;
    int rank, size;

    MPI_Init(&argc, &argv);
    MPI_Barrier(MPI_COMM_WORLD);

    MPI_Comm_size(MPI_COMM_WORLD, &size);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    if (rank == 0)
    {
       int *array;
       MPI_Alloc_mem(size * sizeof(int), MPI_INFO_NULL, &array);
       memset(array, 0, size * sizeof(int));

       MPI_Win_create(array, size * sizeof(int), sizeof(int), MPI_INFO_NULL,
          MPI_COMM_WORLD, &win);

       int ready, ready1 = -1;
       do
       {
          MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
          for (int i = ready = 0; i < size; ready += array[i++]);
          if (ready != ready1)
          {
             printf("[%.6f] %d workers checked in\n", MPI_Wtime(), ready);
             ready1 = ready;
          }
          MPI_Win_unlock(0, win);
       } while (ready < size-1);

       printf("[%.6f] All workers checked in\n", MPI_Wtime());

       MPI_Win_free(&win);

       MPI_Free_mem(array);

       printf("[%.6f] Master finished\n", MPI_Wtime());
    }
    else
    {
       int one = 1;

       MPI_Win_create(NULL, 0, 1, MPI_INFO_NULL, MPI_COMM_WORLD, &win);

       sleep(rank);

       MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
       printf("[%.6f] Worker %d acquired lock\n", MPI_Wtime(), rank);

       MPI_Put(&one, 1, MPI_INT, 0, rank, 1, MPI_INT, win);
       printf("[%.6f] Worker %d unlocking the window\n", MPI_Wtime(), rank);

       MPI_Win_unlock(0, win);
       printf("[%.6f] Worker %d synched\n", MPI_Wtime(), rank);

       MPI_Win_free(&win);
       printf("[%.6f] Worker %d done\n", MPI_Wtime(), rank);
    }

    MPI_Finalize();
    return 0;
}
