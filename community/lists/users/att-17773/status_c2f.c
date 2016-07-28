#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <mpi.h>

#define CANARI_SIZE 32
#define SIZE 100
#define TAG 1
#define TAG2 2

int main(int argc, char**argv)
{

  int comm_size, comm_rank;
  MPI_Init(&argc,&argv);

  MPI_Comm_size(MPI_COMM_WORLD, &comm_size);
  MPI_Comm_rank(MPI_COMM_WORLD, &comm_rank);

  if (comm_size != 2) {
    fprintf(stderr, "This program requires 2 MPI processes, aborting...\n");
    goto out;
  }

  char buffer[SIZE];
  MPI_Request req;
  MPI_Status status;
  char canari1[CANARI_SIZE];
  MPI_Fint f_status;
  char canari2[CANARI_SIZE];

  int i;

  if(comm_rank == 0) {
    memset(buffer, 0x11, SIZE);

    MPI_Irecv(buffer, SIZE, MPI_CHAR, 1, TAG, MPI_COMM_WORLD, &req);
    MPI_Wait(&req, &status);

    for(i=0;i<CANARI_SIZE;i++) {
      canari1[i] = i;
      canari2[i] = i;
    }

    printf("Before MPI_Status_f2c:\n");
    for(i=0;i<CANARI_SIZE;i++) {
      printf("%d\t %d\n", canari1[i], canari2[i]);
    }

    MPI_Status_c2f(&status, &f_status);

    printf("After MPI_Status_f2c:\n");
    for(i=0;i<CANARI_SIZE;i++) {
      printf("%d\t %d\n", canari1[i], canari2[i]);
    }


  } else {
    memset(buffer, 0x42, SIZE);
    MPI_Isend(buffer, SIZE, MPI_CHAR, 0, TAG, MPI_COMM_WORLD, &req);
    MPI_Wait(&req, MPI_STATUS_IGNORE);
  }

 out:
  MPI_Finalize();
  return 0;
}

