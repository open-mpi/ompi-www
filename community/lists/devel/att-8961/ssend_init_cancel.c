/**
 * @file ssend_init_cancel.c
 * Causes me trouble with OpenMPI, I am not a fan of MPI_Cancel, but its in the standard ...
 *
 * @author Tobias Hilbrich
 *
 */

#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>

int main (int argc, char** argv)
{
    int rank,size, buf;
    MPI_Status status;
    MPI_Request r = MPI_REQUEST_NULL;
	
    MPI_Init(&argc,&argv);
    MPI_Comm_rank (MPI_COMM_WORLD, &rank);
    MPI_Comm_size (MPI_COMM_WORLD, &size);
	
    printf ("Ready: %d of %d tasks.\n", rank, size);
	
    //Create persistent send,recv
	if (rank == 0 || rank == 1)
	{
		if (rank == 0)
			MPI_Ssend_init (&buf, 1, MPI_INT, 1, 666, MPI_COMM_WORLD, &r);
		if (rank == 1)
			MPI_Recv_init (&buf, 1, MPI_INT, 0, 666, MPI_COMM_WORLD, &r);
	
		//Start
		MPI_Start (&r);
	
		//Cancel
		MPI_Cancel (&r);
	
		//Wait
		MPI_Wait (&r, &status);
	
		//Free
		MPI_Request_free (&r);
	}
	
    printf ("Signing off: %d of %d tasks.\n", rank, size);
    MPI_Finalize ();
    return 0;
}

