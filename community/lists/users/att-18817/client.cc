#include <stdio.h>
#include <stdlib.h>
#include <iostream>
#include <mpi.h>

#include "constants.h"

using namespace std;

void removeRank ( MPI::Intracomm& local_comm, MPI::Intercomm& server_comm, int rank );

int main ( int argc, char *argv[] ) {

	/** Initializes the communicators */
	MPI::Init ( argc, argv );
	MPI::Intracomm local_comm = MPI::COMM_WORLD;
	MPI::Intercomm server_comm = MPI::Comm::Get_parent ( );
	
	MPI::Status status;
	bool shut_notification = false;
	
	/** Waits messages until receiving the shutdown notification message.  */
	do {
		if (server_comm == MPI::COMM_NULL || local_comm == MPI::COMM_NULL) { /** Process was detached from the communicators. */
			shut_notification = true;
		}
		else if (server_comm.Iprobe ( MPI_ANY_SOURCE, MPI_ANY_TAG, status )) {
			int message;
			server_comm.Recv ( &message, sizeof(int), MPI::BYTE, MPI_ANY_SOURCE, MPI_ANY_TAG, status );
			if (status.Get_tag ( ) == OP_SHUT) {
				shut_notification = true;
			}
			else if (status.Get_tag ( ) == OP_REM) {	/** >>>>>>>>>> Calls the function to detach a process. */
				removeRank ( local_comm, server_comm, message );
			}
		}
	} while (!shut_notification);

	/** Only the client that was not removed calls the barrier within the server communicator */
	if (server_comm != MPI::COMM_NULL) {
		cout << "++++++++++++++ Client - before barrier " << endl;
		server_comm.Barrier();
		cout << "++++++++++++++ Client - after barrier " << endl;
	}

	cout << "++++++++++++++ Client terminating" << endl;
	MPI::Finalize ( );
	return 0;
}

void removeRank ( MPI::Intracomm& local_comm, MPI::Intercomm& server_comm, int rank ) {
	/** Removes the process from the server inter-communicator. */
	MPI::Intercomm tmp_inter_comm = server_comm.Create ( server_comm.Get_group ( ).Excl ( 1, &rank ) );
	server_comm.Free ( );
	server_comm = tmp_inter_comm;

	/** Removes the process from the local intra-communicator. */
	MPI::Intracomm tmp_intra_comm = local_comm.Create ( local_comm.Get_group ( ).Excl ( 1, &rank ) );
	local_comm = tmp_intra_comm;
}
