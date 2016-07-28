
/*
 *
 * TEST PROGRAM
 * for MPI_COMM_SPAWN_MULTIPLE
 *
 * The first argument of the master program in the exec filename of the slave
 *
 * program MASTER
 * not working version: the only change is in lines 60-65 which are put inside an if block
 *
 * Author:  Federico Golfrè Andreasi
 * Created: 18/08/2009
 *
 */


#include <iostream>
#include "mpi.h"
#define   MAX_HOST_NAME 255

using namespace std;


int main ( int argc, char* argv[] ) {


	int			manager_rank,manager_size;
	char		local_host[MAX_HOST_NAME];
	int			local_host_len;
	MPI_Comm	intercomm;


	// *** MPI SESSION ***

	//  Initialization of MPI session
	MPI_Init(&argc,&argv);


	// *** GET INFORMATION ABOUT THE WORLD COMMUNICATOR ***

	// Get the size and the rank within the comm
	MPI_Comm_rank(MPI_COMM_WORLD,&manager_rank);
	MPI_Comm_size(MPI_COMM_WORLD,&manager_size);
	if (manager_rank==0) cout<<"\n***** STARTING THE SPAWN TEST PROGRAM ****\n";
	// Get the name of the host
	MPI_Get_processor_name(local_host,&local_host_len);
	cout<<" Rank "<<manager_rank<<" runs on host: "<<local_host<<"\n";


	// *** EXECUTING THE SLAVE PROGRAM ***

	// Setting the executable to launch and the number of process for each slave program, and the argv
	char 	*commands[manager_size];
	int 	procs[manager_size];
	char	**argvs[manager_size];
	// Creating the array of Info objects as MPI_INFO_NULL
	MPI_Info infos[manager_size];
	if (manager_rank==0) {
		for (int i=0;i<manager_size;i++) {
			commands[i]=argv[1];
			procs[i]=1;
			argvs[i]=argv;
			infos[i]=MPI_INFO_NULL;
		}
	}
	// Array with the errors
	int		spawn_errors[manager_size];
	// Launching the slaves
	MPI_Barrier(MPI_COMM_WORLD);
	if (manager_rank==0) cout<<"\t***\n Now we are executing: "<<argv[1]<<" program (argc="<<argc<<")\n";
	MPI_Comm_spawn_multiple(manager_size,commands,MPI_ARGVS_NULL,procs,infos,0,MPI_COMM_WORLD,&intercomm,spawn_errors);
	// Check for some errors
	for ( int i=0;i<manager_size;i++ ) {
		if ( spawn_errors[i]!=MPI_SUCCESS ) { cout<<" Error with spawning process "<<i<<"\n"; return EXIT_FAILURE; }
	}

	// *** END OF THE PROGRAM AND PETSC SESSION ***

	if (manager_rank==0) cout<<"**** THE MASTER PROGRAM IS EXITING ****\n";
	MPI_Finalize();
	return EXIT_SUCCESS;

}
