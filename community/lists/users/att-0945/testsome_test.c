#include "mpi.h"
#include <stdio.h>

int main( int argc, char *argv[])
{
    int myid, numprocs;

    MPI_Init(&argc,&argv);
    MPI_Comm_size(MPI_COMM_WORLD,&numprocs);
    MPI_Comm_rank(MPI_COMM_WORLD,&myid);

    printf("Hello from processor %i of %i\n", myid, numprocs);

    int size = 0;
    int num_done = 0;
    MPI_Status* stat = 0;
    MPI_Request* req = 0;
    int* done_indices = 0;

    MPI_Testsome( size, req, &num_done, done_indices, stat);

    printf("Finalizing on processor %i of %i\n", myid, numprocs);

    MPI_Finalize();

    return 0;
}

            
