// Compile with: mpicc test.c -pthread -o test
#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <pthread.h>


static void * ProgressThread(void * ptRank)
{
	int buffer = 0xCDEFCDEF;
	int rank = *((int *)ptRank);
	int error;

	printf("[%d] progress thread...\n", rank);
	MPI_Recv(&buffer, 1, MPI_INT, rank, 999, MPI_COMM_WORLD, MPI_STATUS_IGNORE);

	return NULL;
}


int main(int argc, char * argv[])
{
	int rank = -1;
	int size = -1;
	int bufferSend = 0;
	int bufferRecv = 0;
	int requested = MPI_THREAD_MULTIPLE;
	int provided = -1;
	int error;
	pthread_t thread;
	MPI_Request requests[2];

	MPI_Init_thread(&argc, &argv, requested, &provided);

	if (requested != provided) {
		printf("error: requested %d != provided %d\n", requested, provided);
		exit(1);
	}

	MPI_Comm_rank(MPI_COMM_WORLD, &rank);
	MPI_Comm_size(MPI_COMM_WORLD, &size);

	error = pthread_create(&thread, NULL, &ProgressThread, &rank);

	if (error != 0) {
		fprintf(stderr, "pthread_create failed (%d): %s\n", error, strerror(error));
	}


	printf("[%d] isend/irecv.\n", rank);
	MPI_Isend(&bufferSend, 1, MPI_INT, (rank + 1) % size, 0, MPI_COMM_WORLD, &requests[0]);
	MPI_Irecv(&bufferRecv, 1, MPI_INT, (rank - 1 + size) % size, 0, MPI_COMM_WORLD, &requests[1]);

	printf("[%d] waitall.\n", rank);
	MPI_Waitall(2, requests, MPI_STATUS_IGNORE);

	printf("[%d] send.\n", rank);
	MPI_Send(&bufferSend, 1, MPI_INT, rank, 999, MPI_COMM_WORLD);

	error = pthread_join(thread, NULL);

	if (error != 0) {
		fprintf(stderr, "pthread_join failed (%d): %s\n", error, strerror(error));
	}

	printf("[%d] done.\n", rank);

	MPI_Finalize();

	return 0;
}

