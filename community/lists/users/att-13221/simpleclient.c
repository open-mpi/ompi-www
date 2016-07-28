#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>

#include <mpi.h>

int main(int argc, char **argv)
{
   int      comm_rank;
   int      ok_flag;
   MPI_Comm intercomm;

   MPI_Init(&argc, &argv);

   MPI_Comm_rank(MPI_COMM_WORLD, &comm_rank);

   ok_flag = (comm_rank != 0)  || ((argc == 2)  &&  argv[1]  &&  (*argv[1] != '\0'));
   MPI_Bcast(&ok_flag, 1, MPI_INT, 0, MPI_COMM_WORLD);

   if (!ok_flag) {
      if (comm_rank == 0) {
         fprintf(stderr,"Usage: %s mpi_port\n", argv[0]);
      }
      MPI_Abort(MPI_COMM_WORLD, 1);
   }

   while (MPI_Comm_connect((comm_rank == 0) ? argv[1] : 0, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &intercomm) != MPI_SUCCESS) {
      if (comm_rank == 0) {
         printf("MPI_Comm_connect() failled, sleeping and retrying...\n");
      }
      sleep(1);
   }
   if (comm_rank == 0) {
      printf("MPI_Comm_connect() sucessful...\n");
   }

   MPI_Comm_disconnect(&intercomm);

   MPI_Finalize();

   return EXIT_SUCCESS;
}
