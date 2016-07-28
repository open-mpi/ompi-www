#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <mpi.h>
#include <unistd.h>


int main(int argc, char **argv)
{
        char hostname[MPI_MAX_PROCESSOR_NAME];
        int rank, size, provided, laenge;

        MPI_Init_thread( &argc, &argv, MPI_THREAD_MULTIPLE, &provided );

	MPI_Comm_size(MPI_COMM_WORLD, &size);
	MPI_Comm_rank(MPI_COMM_WORLD, &rank);
	MPI_Get_processor_name(hostname,&laenge);
	
	
	
	
        if (provided != MPI_THREAD_MULTIPLE) {
                MPI_Finalize();
                errx(1, "MPI_Init_thread expected, MPI_THREAD_MULTIPLE (%d), "
                         "got %d \n", MPI_THREAD_MULTIPLE, provided);
        }

        printf("%s(%d) of %d provided=(%d)\n", hostname, rank, size, provided);

	MPI_Barrier(MPI_COMM_WORLD);

        MPI_Finalize();
}