#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

int main(int argc, char *argv[])
{
        char msg[256], name[MPI_MAX_PROCESSOR_NAME];
        int rank, size, src;
	MPI_Status status;

        MPI_Init(&argc, &argv);
        MPI_Get_processor_name(name, &size);
        MPI_Comm_rank(MPI_COMM_WORLD, &rank);
        MPI_Comm_size(MPI_COMM_WORLD, &size);
	sprintf(msg, "Hello world from process %d of %d runing on %s\n", rank, size, name);
	if (rank == 0) {
		printf("%s", msg);
		for (src = 1; src < size; ++src) {
			MPI_Recv(msg, sizeof(msg), MPI_BYTE, src, 1, MPI_COMM_WORLD, &status);
			printf("%s", msg);
		}
	} else {
		MPI_Send(msg, strlen(msg) + 1, MPI_BYTE, 0, 1, MPI_COMM_WORLD);
	}

        MPI_Finalize();

        return EXIT_SUCCESS;
}


