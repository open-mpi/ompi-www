
/*
 *
 * PROGRAM TEST for MPI_COMM_SPAWN_MULTIPLE
 *
 * prototype program that simulate the spawn process needed for the SJI MT Domain Manager
 * the manager must be executed with the exec command of the worker as first input parameter
 *
 * updated to the OpenMPI-1.4.0
 *
 *
 * program MASTER
 *
 * Author:  Federico Golfre' Andreasi
 * Created: 28/01/2010
 *
 */


#include "mpi.h"
#include <iostream>

using namespace std;


int main ( int argc, char* argv[] ) {


	int			rank,size;
	char		local_host[MPI_MAX_PROCESSOR_NAME];
	int			local_host_len;
	MPI_Comm	intercomm;



	// *** MPI SESSION ***

	//  Initialization of MPI session
	MPI_Init(&argc,&argv);



	// *** GET INFORMATION ABOUT THE WORLD COMMUNICATOR ***

	// Get the size and the rank within the Comm
	MPI_Comm_rank(MPI_COMM_WORLD,&rank);
	MPI_Comm_size(MPI_COMM_WORLD,&size);
	if (rank==0) cout<<"\n***** MASTER (SPAWNING) ****\n";
	MPI_Barrier(MPI_COMM_WORLD);
	// Get the name of the host
	MPI_Get_processor_name(local_host,&local_host_len);
	cout<<" Rank "<<rank<<" runs on host: "<<local_host<<"\n";
	MPI_Barrier(MPI_COMM_WORLD);


	// *** DEFINITION OF VARIABLES ***

	char 	*commands[size];
	int 	procs[size];
	MPI_Info infos[size];
	char	hosts[size][MPI_MAX_PROCESSOR_NAME];
	// Gather to All
//	MPI_Allgather(local_host,MPI_MAX_PROCESSOR_NAME,MPI_CHAR,hosts,MPI_MAX_PROCESSOR_NAME,MPI_CHAR,MPI_COMM_WORLD);
	MPI_Gather (local_host,MPI_MAX_PROCESSOR_NAME,MPI_CHAR,hosts,MPI_MAX_PROCESSOR_NAME,MPI_CHAR,0,MPI_COMM_WORLD);
	if (rank==0) {
		for (int i=0;i<size;i++) {
			commands[i]=argv[1]; procs[i]=1;
			MPI_Info_create(&infos[i]);
			MPI_Info_set(infos[i],"host",hosts[i]);
			cout<<" child "<<i<<" will go on host "<<hosts[i]<<endl;
		}
	}


	// *** EXECUTING THE SLAVE PROGRAM ***

	// Barrier
	MPI_Barrier(MPI_COMM_WORLD);
	if ( rank==0 ) cout<<"\t spawning the slave program "<<argv[1]<<" ...\n";
	// Launching the slave and check for some errors
	int		spawn_errors[size];
	MPI_Comm_spawn_multiple(size,commands,MPI_ARGVS_NULL,procs,infos,0,MPI_COMM_WORLD,&intercomm,spawn_errors);
	if (rank==0) {
		for ( int i=0;i<size;i++ ) {
			if ( spawn_errors[i]!=MPI_SUCCESS ) cout<<"ERROR with spawning process number "<<i<<endl;
		}
	}
	// Destroy all the Infos object
	if (rank==0) {
	 for (int i=0;i<size;i++) MPI_Info_free(&infos[i]);
	}

	// Inform that the spawning process is completed
	if (rank==0) cout<<"\t spawning process complete;\n";


	// *** END OF THE PROGRAM AND PETSC SESSION ***

	if (rank==0) cout<<"**** THE MASTER END ****\n\n";
	MPI_Finalize();
	return EXIT_SUCCESS;



}
