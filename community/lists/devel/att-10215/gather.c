#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "mpi.h"


int main (int argc, char **argv)
{
	int sbuf[30000];
	int rbuf[30000];
	int myproc, nprocs;
	MPI_Datatype * itype;

	int n = 751;
	MPI_Init(&argc, &argv);
	MPI_Comm_size(MPI_COMM_WORLD, &nprocs);
	MPI_Comm_rank(MPI_COMM_WORLD, &myproc);

	if ( 0 == myproc)
	{
		printf ("msg size:%lu\n",2*n*sizeof(int));
	}
	
	MPI_Type_vector(2,n,2*n, MPI_INT,itype);
	MPI_Type_commit(itype);

	memset((void *)sbuf, myproc+1 , sizeof(int)*n);
	
	MPI_Gather(sbuf, 2*n, MPI_INT, rbuf,1,*itype, 0, MPI_COMM_WORLD);
	
	MPI_Finalize();
	return 0;
}
