#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(int argc, char **argv)
{
  MPI_Info info;
  char port_name[MPI_MAX_PORT_NAME];
  MPI_Comm intercomm;

  MPI_Init(&argc, &argv);
  MPI_Info_create(&info);
  MPI_Open_port(info, port_name);
  printf("port name: %s\n", port_name);

  /* write port name to file */   
  {
    FILE *fd;
    fd = fopen("port.txt", "w+");
    fprintf(fd, "%s", port_name);
    fclose(fd);
  }

  /* accept connections */
  while(1){
    unsigned long data;

    /* accept connection */
    MPI_Comm_accept(port_name, info, 0, MPI_COMM_WORLD, &intercomm);
    
    /* receive comm size from the sender */
    MPI_Recv(&data, 1, MPI_UNSIGNED_LONG, 0, 1, intercomm, MPI_STATUS_IGNORE);
    printf("received data: %lx\n", data);

    MPI_Barrier(intercomm);
    MPI_Comm_disconnect(&intercomm);
    printf("client disconnected\n");   
  }
}

