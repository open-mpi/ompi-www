#include <stdio.h>
#include <mpi.h>

int main(int argc, char *argv[]) {
	int rank, size, rc;
        char host[] = "pe830-02";


	rc = MPI_Init(&argc, &argv);
	if ( rc != MPI_SUCCESS ) {
		printf("an error occurred in mpi_init\n");
	}
	MPI_Comm_size(MPI_COMM_WORLD, &size);
	MPI_Comm_rank(MPI_COMM_WORLD, &rank);
	printf("Hello, world, I am %d of %d and this is on : %s.\n", rank, size, host);
	MPI_Finalize();
	return 0;
}


