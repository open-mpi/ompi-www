#include <stdio.h>
#include <assert.h>
#include <stdlib.h>
#include <string.h>
#include <mpi.h>

char *outfile = "./foo.dat"; // anywhere is fine

int main(int argc, char **argv)
{
	MPI_Init(&argc, &argv);
	int myrank, nranks;
	char *buf;
	double t0, t1, t2, dt;
	
	MPI_Comm_rank(MPI_COMM_WORLD, &myrank);
	MPI_Comm_size(MPI_COMM_WORLD, &nranks);
	
	MPI_File fh;
	MPI_Request request;
	
	puts("MPI_File_open() ...");
	MPI_File_open(
		MPI_COMM_WORLD,
		//MPI_COMM_SELF, // makes no difference
		outfile,
		MPI_MODE_RDWR | MPI_MODE_CREATE,
		MPI_INFO_NULL,
		&fh);

#define BUFSIZE (((long long)1)<<30)

	buf = malloc(BUFSIZE);
	
	t0 = MPI_Wtime();

	puts("MPI_File_iwrite() ...");
	assert(MPI_SUCCESS == MPI_File_iwrite(
		fh,
		buf,
		BUFSIZE,
		MPI_BYTE,
	 	&request
	));

	t1 = MPI_Wtime();
	
	puts("MPI_Wait() ...");
	MPI_Wait(&request, MPI_STATUS_IGNORE);

	t2 = MPI_Wtime();
	
	puts("MPI_File_close() ...");
	MPI_File_close(&fh);
	
	puts("MPI_File_delete() ...");
	MPI_File_delete(outfile, MPI_INFO_NULL);
	
	free(buf);

	puts("");
	
	dt = t1-t0;
	printf("MPI_File_iwrite:  %.3f s\n", dt);
	dt = t2-t1;
	printf("MPI_Wait:         %.3f s\n", dt);
	dt = t2-t0;
	printf("total time:       %.3f s\n", dt);
	printf("throughput:       %.3f MB/s\n", BUFSIZE / dt / 1e6);

	MPI_Finalize();
	
	return 0;
}

