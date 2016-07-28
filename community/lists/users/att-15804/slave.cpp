
/*
 *
 * PROGRAM TEST for MPI_COMM_SPAWN_MULTIPLE
 *
 * prototype program that simulate the spawn process needed for the SJI MT Domain Manager
 *
 * updated to the OpenMPI-1.4.0
 *
 *
 * program SLAVE
 *
 * Author:  Federico Golfre' Andreasi
 * Created: 28/01/2010
 *
 */


#include "mpi.h"
#include <iostream>


using namespace std;
#define   MAX_PROCESSOR_NAME 255


int main (int argc, char *argv[]) {


	int			worker_rank,worker_size;
	char		local_host[MAX_PROCESSOR_NAME];
	int			local_host_len;


	// *** MPI SESSION ***

	//  Initialization of MPI session
	MPI_Init(&argc,&argv);


	// *** GET INFORMATION ABOUT THE WORKER WORLD COMMUNICATOR ***

	// Get the size and the rank within the worker comm
	MPI_Comm_rank(MPI_COMM_WORLD,&worker_rank);
	MPI_Comm_size(MPI_COMM_WORLD,&worker_size);
	if (worker_rank==0) cout<<"\n***** SLAVE (SPAWNED) ****\n";
	MPI_Barrier(MPI_COMM_WORLD);
	// Get the name of the host
	MPI_Get_processor_name(local_host,&local_host_len);
	cout<<" Rank "<<worker_rank<<" runs on host: "<<local_host<<" (argc="<<argc<<")\n";
	MPI_Barrier(MPI_COMM_WORLD);


	// *** END OF PETSC SESSION ***

	if (worker_rank==0) cout<<"**** THE SLAVE END ****\n\n";
	MPI_Finalize();
	return EXIT_SUCCESS;

}
