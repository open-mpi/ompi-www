
/*
 *
 * TEST PROGRAM
 * for MPI_COMM_SPAWN_MULTIPLE
 *
 * program SLAVE
 *
 * Author:  Federico Golfrè Andreasi
 * Created: 18/08/2009
 *
 */


#include <iostream>
#include "mpi.h"

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
	if (worker_rank==0) cout<<"\n***** WORKER PROGRAM ****\n";
	// Get the name of the host
	MPI_Get_processor_name(local_host,&local_host_len);
	cout<<" Rank "<<worker_rank<<" runs on host: "<<local_host<<" (argc="<<argc<<")\n";
	MPI_Barrier(MPI_COMM_WORLD);


	// *** END OF PETSC SESSION ***

	if (worker_rank==0) cout<<"**** WORKER PROGRAM EXITS ****\n\n";
	MPI_Finalize();
	return EXIT_SUCCESS;

}
