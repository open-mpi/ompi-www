#include <stdio.h>
#include <mpi.h>
#include <unistd.h>

#define BUFSIZE (1024*1024)

int main(argc, argv)
   int argc;
   char **argv;
{
   int rank = 0;
   int tag = 0;
   MPI_Status recv_status;
   char buffer[BUFSIZE];
   int iteration = 0;

   MPI_Init(&argc, &argv);
   MPI_Comm_rank(MPI_COMM_WORLD, &rank);

   while (1) {
      if (rank == 0) {
         printf("Iteration %d\n", ++iteration);
         fflush(stdout);
         if (MPI_Send(buffer, BUFSIZE, MPI_CHAR, 1, tag, MPI_COMM_WORLD) !=
             MPI_SUCCESS) {
            printf("ERROR: MPI_Send failed\n");
         }
      }
      else {
         if (MPI_Recv(buffer, BUFSIZE, MPI_CHAR, 0, tag, MPI_COMM_WORLD,
                      &recv_status) != MPI_SUCCESS) {
            printf("ERROR: MPI_Recv failed\n");
         }
      }
      MPI_Barrier(MPI_COMM_WORLD);

#if 1
      if (rank == 0) {
         printf("Sleeping...");
         fflush(stdout);
      }

      sleep(5);

      if (rank == 0) {
         printf("Done\n");
         fflush(stdout);
      }
#endif
   }

   MPI_Finalize();

   printf("[%d] Program Completed!\n", rank);
   return 0;
}
