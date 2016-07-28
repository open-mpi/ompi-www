#include <mpi.h>
#include <unistd.h>
#include <iostream>

int main(int argc, char* argv[]) {
	int provided;
	MPI_Init(&argc, &argv);

	int rank;
	MPI_Comm_rank(MPI_COMM_WORLD, &rank);

	MPI_Win window;
	int* data;
	MPI_Alloc_mem(sizeof(int), MPI_INFO_NULL, &data);
	data[0] = 0;

	MPI_Win_create(data,
		sizeof(int),
		sizeof(int),
		MPI_INFO_NULL,
		MPI_COMM_WORLD, &window);

	int remoteRank = 0;

	if (rank == 0) {
		MPI_Win_lock(MPI_LOCK_EXCLUSIVE, remoteRank, MPI_MODE_NOCHECK, window);
		//MPI_Win_lock(MPI_LOCK_SHARED, 1, 0, window);
		int mydata;
		MPI_Get(&mydata, 1, MPI_INT, remoteRank, 0, 1, MPI_INT, window);
		MPI_Win_unlock(remoteRank, window);
	}

	MPI_Win_free(&window);
	MPI_Free_mem(data);

	MPI_Finalize();

	return 0;
}

