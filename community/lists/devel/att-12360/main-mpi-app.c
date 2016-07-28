#include "mpi.h"
#include <stdlib.h>
#include <stdio.h>


struct thread_args
 {
    int thread_number;
    int rank;
};
typedef struct thread_args thread_args;
#define THREADS_NUMBER 8


int main(int argc, char **argv){
    int rank, size, el_rank, el_thread;
    char port[MPI_MAX_PORT_NAME];
    MPI_Comm client;
    char name[MPI_MAX_PORT_NAME];

    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    MPI_Comm_size(MPI_COMM_WORLD, &size);

    el_rank= rank/THREADS_NUMBER;
    el_thread= rank % THREADS_NUMBER;

    snprintf(name, MPI_MAX_PORT_NAME, "radic_eventlog[%d,%d]",el_rank,el_thread);
    printf("Before lookup %s\n ", name);
    int err = MPI_Lookup_name( name, MPI_INFO_NULL,port);

    printf("Found - trying to connect\n ");
    MPI_Comm_connect(port, MPI_INFO_NULL, 0, MPI_COMM_SELF, &client);

    printf("Conexión aceptada\n");
    sleep(5);
	MPI_Comm_disconnect(&client);
    MPI_Finalize();
}
