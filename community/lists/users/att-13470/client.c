#include <stdio.h>
#include <stdlib.h>
#include "mpi.h"
#include <string.h>

int main(int argc, char** argv){
	MPI_Init(&argc, &argv);
	MPI_Comm server;
	MPI_Comm current_intracomm, current_intercomm, final_intracomm;
	int tag = 13;
	int i;
	MPI_Status status;

	printf("hi\n");

	// connect to the existing grid (get port from parameter)
	MPI_Comm_connect(argv[1], MPI_INFO_NULL, 0, MPI_COMM_WORLD, &server);
 
	int rank = -1;

	// make intracomm with the existing grid
	MPI_Intercomm_merge(server, 1, &current_intracomm);
	MPI_Comm_rank(current_intracomm, &rank);

	int clients_count = -1;
	
	// get total number of expected processes from the server
	MPI_Recv(&clients_count, 1, MPI_INT, 0, tag, current_intracomm, &status);
	int clients_left = clients_count - rank;	

	printf("waiting for %d clients more\n", clients_left);

	// accept all the processes left
	for(i = 0; i < clients_left; i++) {
		MPI_Comm_accept(NULL, MPI_INFO_NULL, 0, current_intracomm, &current_intercomm);
		MPI_Comm_free(&current_intracomm);

		MPI_Intercomm_merge(current_intercomm, 0, &current_intracomm);
		MPI_Comm_free(&current_intercomm);
	}
		
	MPI_Comm_rank(current_intracomm, &rank);
		
	// detach server process from the grid
	MPI_Comm_split(current_intracomm, 0, rank - 1, &final_intracomm);

	MPI_Comm_rank(final_intracomm, &rank);
	printf("my rank in final grid: %d\n", rank);
	
	char text[20];
	int len;
	int receiver = (rank + 1) % clients_count;

	sprintf(text, "Hello from %d", rank);
	len = strlen(text);

	// send the message to the next process
	MPI_Bsend(text, len, MPI_CHAR, receiver, tag, final_intracomm);
	printf("Message send\n");
	
	// get the message from the previous process
	MPI_Recv(text, 20, MPI_CHAR, MPI_ANY_SOURCE, tag, final_intracomm, &status);
	printf("Someone says: %s\n", text);

	MPI_Barrier(current_intracomm);
	MPI_Comm_free(&current_intracomm);	
	MPI_Comm_free(&final_intracomm);
	MPI_Finalize();

	return 0; 
}
