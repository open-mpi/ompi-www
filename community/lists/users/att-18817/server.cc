#include <mpi.h>
#include <stdio.h>
#include <unistd.h>
#include <stdlib.h>
#include <iostream>
#include <iostream>
#include <vector>
#include <string>

#include "constants.h"

using namespace std;

MPI::Intercomm spawn ( MPI::Intracomm& self_comm, vector<vector<string> > & argv, vector<string>& commands, vector<string>& hosts, int* number_process, string& work_directory );
void removeClient ( MPI::Intercomm& client_comm, int rank );

int main ( int argc, char *argv[] ) {

	MPI::Init ( argc, argv );
	
	/** Initializations */
	MPI::Intracomm self_comm = MPI::COMM_SELF;
	MPI::Intercomm client_comm;

	vector < string > commands;
	vector < vector<string> > arguments;
	vector < string > hosts;
	int number_process[1];
	vector < string > arg;

	commands.push_back ( "client" );
	arg.push_back ( "none" );
	arguments.push_back ( arg );
	hosts.push_back ( "hera" );	/** This is the host where the server will spawn the clients. */
	number_process[0] = 2;
	string server_work_directory = "/home/speed/rsilva/Desktop";	/** This have to be changed. */
	
	cout << "++++++++++++++ Server spawning 2 copies of client" << endl;
	client_comm = spawn ( self_comm, arguments, commands, hosts, number_process, server_work_directory );

	cout << "++++++++++++++ Server removing the client rank 0" << endl;
	removeClient ( client_comm, 0 );
	
	for (int i = 0; i < client_comm.Get_remote_size ( ); ++i) {
		client_comm.Send ( NULL, 0, MPI::BYTE, i, OP_SHUT );
	}

	cout << "++++++++++++++ Server before barrier " << endl;
	client_comm.Barrier();
	cout << "++++++++++++++ Server after barrier " << endl;

	MPI::Finalize ( );
}

void removeClient ( MPI::Intercomm& client_comm, int rank ) {

	MPI::Intercomm tmp_inter_comm;
	int message;
	message = rank;

	for (int i = 0; i < client_comm.Get_remote_size ( ); ++i) {
		client_comm.Send ( (void*) &message, sizeof(int), MPI::BYTE, i, OP_REM );
	}

	tmp_inter_comm = client_comm.Create ( client_comm.Get_group ( ) );
	client_comm.Free ( );
	client_comm = tmp_inter_comm;
}

MPI::Intercomm spawn ( MPI::Intracomm& self_comm, vector<vector<string> > & argv, vector<string>& commands, vector<string>& hosts, int* number_process, string& work_directory ) {

	char* cmd[commands.size ( )];
	char **arguments[argv.size ( )];
	MPI::Info info[hosts.size ( )];
	MPI::Intercomm children_intercomm;
	string err_message;

	/** Creates the data structures required by the mpi spawn_multiple command. */
	for (int i = 0; i < (int) hosts.size ( ); ++i) {
		/** Commands */
		cmd[i] = (char*) malloc ( sizeof(char) * commands[i].length ( ) );
		strcpy ( cmd[i], commands[i].c_str ( ) );

		/** Commands' arguments */
		arguments[i] = (char**) malloc ( sizeof(char*) * (argv[i].size ( ) + 1) );
		for (int j = 0; j < (int) argv[i].size ( ); ++j) {
			arguments[i][j] = (char*) malloc ( sizeof(char) * argv[i][j].length ( ) );
			strcpy ( arguments[i][j], argv[i][j].c_str ( ) );
		}
		arguments[i][argv[i].size ( )] = NULL;

		/** Infos */
		info[i] = MPI::Info::Create ( );
		info[i].Set ( "host", hosts[i].c_str ( ) );
		info[i].Set ( "wdir", work_directory.c_str ( ) );
	}

	/** Tries to spawn the processes. */
	children_intercomm = self_comm.Spawn_multiple ( hosts.size ( ), (const char**) cmd, (const char***) arguments, number_process, info, 0 );

	/** Releases the used memory space. */
	for (int i = 0; i < (int) hosts.size ( ); ++i) {
		info[i].Free ( );
		free ( cmd[i] );
		for (int j = 0; j < (int) argv[i].size ( ); ++j) {
			free ( arguments[i][j] );
		}
		free ( arguments[i] );
	}

	return children_intercomm;
}
