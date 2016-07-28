#include <stdio.h>
#include <mpi.h>
#include <string.h>

#define SUBROUTINE 1

void mysend() {
    const char * s = "Halo";
    MPI_Send(s, strlen(s)+1, MPI_CHAR, 1, 0, MPI_COMM_WORLD);
}

void myreceive() {
    char buf[256];
    MPI_Recv(buf, 256, MPI_CHAR, 0, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
    if ('H' != buf[0]) {
        fprintf(stderr,"not H\n");
    }
}
void mysendrecv() {
    const char * s = "Halo";
    char buf[256];
    MPI_Request request;
    buf[0] = 0;
    if (0 != buf[0]) {
        fprintf(stderr,"not 0\n");
    }
#if 0
    MPI_Sendrecv(s, strlen(s)+1, MPI_CHAR, 0, 0, buf, 256, MPI_CHAR, 0, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
#elif 0
    MPI_Isend(s, strlen(s)+1, MPI_CHAR, 0, 0, MPI_COMM_WORLD, &request);
    MPI_Recv(buf, 256, MPI_CHAR, 0, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
    MPI_Wait(&request, MPI_STATUS_IGNORE);
#else
    MPI_Send(s, strlen(s)+1, MPI_CHAR, 0, 0, MPI_COMM_WORLD);
    MPI_Recv(buf, 256, MPI_CHAR, 0, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
#endif
    if ('H' != buf[0]) {
        fprintf(stderr,"not H\n");
    }
}

int main(int argc, char *argv[]) {
  int rank, size;
  MPI_Init(&argc, &argv);
  MPI_Comm_size(MPI_COMM_WORLD, &size);
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  printf ("rank = %d / %d\n", rank, size);
  if (1 == size) {
    mysendrecv();
  } else if (0 == rank) {
    mysend();
  } else if (1 == rank) {
    myreceive();
  }

  MPI_Finalize();
  return 0;
}

