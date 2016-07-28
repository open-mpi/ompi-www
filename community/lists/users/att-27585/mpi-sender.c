#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(int argc, char *argv[])
{        
  char port_name[MPI_MAX_PORT_NAME+1];
  MPI_Info info;
  MPI_Comm intercomm;
  unsigned long data = 0x12345678;

  /* initialize MPI */
  MPI_Init(&argc, &argv);
  MPI_Info_create(&info);

  /* connect to receiver ranks - port is a string parameter */
  strcpy(port_name, argv[1]);

  /* connect to server - intercomm is the remote communicator */
  MPI_Comm_connect(port_name, info, 0, MPI_COMM_WORLD, &intercomm);
  printf("** connected\n");

  /* send data */
  MPI_Send(&data, 1, MPI_UNSIGNED_LONG, 0, 1, intercomm);
  MPI_Barrier(intercomm);

  /* disconnect */
  MPI_Comm_disconnect(&intercomm);
  MPI_Finalize();
  printf("** disconnected\n");

  return 0;
}

