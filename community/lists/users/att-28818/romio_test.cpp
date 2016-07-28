#include <mpi.h>
#include <cassert>
#include <unistd.h>
#include <pthread.h>

static int rank;
static int size;

MPI_Comm comm2;

static void* thread2(void *p)
{
	// Wait everywhere but rank 0
	if (rank != 0)
		sleep(5);
	
	MPI_File fh;
	MPI_File_open(comm2, "test2.dat", MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL, &fh);
	
	// Write collective
	MPI_File_set_view(fh, rank*sizeof(int), MPI_INT, MPI_INT, "native", MPI_INFO_NULL);
	MPI_File_write_all(fh, &rank, 1, MPI_INT, MPI_STATUS_IGNORE);
	
	MPI_File_close(&fh);
	
	return 0L;
}

int main(int argc, char** argv)
{
	int threadSupport;
	MPI_Init_thread(&argc, &argv, MPI_THREAD_MULTIPLE, &threadSupport);
	assert(threadSupport >= MPI_THREAD_MULTIPLE);
	
	MPI_Comm_rank(MPI_COMM_WORLD, &rank);
	MPI_Comm_size(MPI_COMM_WORLD, &size);
	
	// Create 2. communicator
	MPI_Comm_dup(MPI_COMM_WORLD, &comm2);
	
	pthread_t thread;
	pthread_create(&thread, 0L, thread2, 0L);
	
	// Wait 2 sec on rank 0
	if (rank == 0)
		sleep(5);
	
	// Create a file
	MPI_File fh;
	MPI_File_open(MPI_COMM_WORLD, "test1.dat", MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL, &fh);
	
	// Write collective
	MPI_File_set_view(fh, rank*sizeof(int), MPI_INT, MPI_INT, "native", MPI_INFO_NULL);
	MPI_File_write_all(fh, &rank, 1, MPI_INT, MPI_STATUS_IGNORE);
	
	MPI_File_close(&fh);
	
	pthread_join(thread, 0L);
	
	MPI_Comm_free(&comm2);
	
	MPI_Finalize();
	
	return 0;
}

