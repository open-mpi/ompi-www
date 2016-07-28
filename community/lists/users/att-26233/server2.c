
#include <unistd.h>
#include <stdio.h>
#include <string.h>
#include <errno.h>
#include <stdlib.h>
#include "mpi.h"

int main( int argc, char **argv )
{
	MPI_Comm client,newcomm;
	FILE *fp;
	char port_name[MPI_MAX_PORT_NAME];
	int size,rank,myrank;
	int e;

	MPI_Init( &argc, &argv );
	MPI_Comm_rank(MPI_COMM_WORLD,&myrank);
	
	e=MPI_Open_port(MPI_INFO_NULL, port_name);
	printf("At server2 %d, MPI_MAX_PORT_NAME=%d, port_name is %s\n\n",myrank,MPI_MAX_PORT_NAME, port_name);
		
	/* store the port name */
	fp = fopen("port_name.txt", "w") ;
	if(fp == NULL)
	{
		fprintf(stderr, "fopen failed: %s\n", strerror(errno)) ;
		exit(1) ;
	}
	fprintf(fp, "%s", port_name) ;
	fclose(fp) ;	
		
	
	MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD,&client);//BLOCK here!!!

	MPI_Intercomm_merge(client,12,&newcomm);

sleep(10);
	MPI_Barrier(newcomm);
	
	MPI_Close_port(port_name);
	MPI_Comm_disconnect( &client );
	MPI_Finalize();
	return 0;
}


