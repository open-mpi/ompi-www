#include "mpi.h" 
int main( int argc, char **argv ) 
{ 
    MPI_Comm server; 
    double buf[100]; 
    char port_name[MPI_MAX_PORT_NAME]; 
 
    MPI_Init( &argc, &argv ); 
    strcpy(port_name, argv[1] );/* assume server's name is cmd-line arg */ 
 
    MPI_Comm_connect( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD,  
                      &server ); 

	bool done = false;
 
    while (!done) { 
        int tag = 2; /* Action to perform */ 
        MPI_Send( buf, 100, MPI_DOUBLE, 0, tag, server ); 
        /* etc */ 
        } 
    MPI_Send( buf, 0, MPI_DOUBLE, 0, 1, server ); 
    MPI_Comm_disconnect( &server ); 
    MPI_Finalize(); 
    return 0; 
} 

