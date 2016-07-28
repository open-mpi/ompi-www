#include <stdio.h>
#include <stdlib.h>

#include <mpi.h>

int main(int argc, char **argv)
{
   int       comm_rank;
   char      port_name[MPI_MAX_PORT_NAME];
   MPI_Comm intercomm;
   int      ok_flag;

   MPI_Init(&argc, &argv);

   MPI_Comm_rank(MPI_COMM_WORLD, &comm_rank);

   ok_flag = (comm_rank != 0) || (argc == 1);
   MPI_Bcast(&ok_flag, 1, MPI_INT, 0, MPI_COMM_WORLD);

   if (!ok_flag) {
      if (comm_rank == 0) {
         fprintf(stderr,"Usage: %s\n",argv[0]);
      }
      MPI_Abort(MPI_COMM_WORLD, 1);
   }

   MPI_Open_port(MPI_INFO_NULL, port_name);

   if (comm_rank == 0) {
      printf("Server port = '%s'\n", port_name);
   }
   MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD, &intercomm);

   MPI_Close_port(port_name);

   if (comm_rank == 0) {
      printf("MPI_Comm_accept() sucessful...\n");
   }

   MPI_Comm_disconnect(&intercomm);

   MPI_Finalize();

   return EXIT_SUCCESS;
}
