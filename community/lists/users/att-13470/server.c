#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <string.h>
#include "mpi.h"

int main(int argc, char** argv){
	MPI_Init(&argc, &argv);

	char myport[MPI_MAX_PORT_NAME];
	int clients_count = 60;
	int i;
	int tag = 13;

	MPI_Open_port(MPI_INFO_NULL, myport);

	// print out the port and use that as a parameter of client
	printf("%s\n", myport);

	MPI_Comm current_intracomm, current_intercomm;
	while(1) {
		current_intracomm = MPI_COMM_SELF;

		printf("starting creation of a new %d-grid\n", clients_count);
		
		for(i = 0; i < clients_count; i++) {
			// accept next client process
	        MPI_Comm_accept(myport, MPI_INFO_NULL, 0, current_intracomm, &current_intercomm);

			if(i != 0) MPI_Comm_free(&current_intracomm);

			// make intracomm with the current grid
			MPI_Intercomm_merge(current_intercomm, 0, &current_intracomm);
			MPI_Comm_free(&current_intercomm);

			// send the number of expected processes to the new client
			MPI_Send(&clients_count, 1, MPI_INT, i + 1, tag, current_intracomm);

			printf("client accepted\n");
		}

		printf("grid created\n");

		MPI_Comm tmp;

		// detach server process from the grid
		MPI_Comm_split(current_intracomm, 1, 0, &tmp);
	
		// let all the clients go
		MPI_Barrier(current_intracomm);
		MPI_Comm_free(&current_intracomm);
		MPI_Comm_free(&tmp);
	}

	MPI_Finalize();

	return 0;
}
