
#include <unistd.h>
#include <stdio.h>
#include <string.h>
#include <errno.h>
#include <stdlib.h>
#include "mpi.h"

int main( int argc, char **argv )
{
	MPI_Comm server,server2,newcomm,newcomm2,client2;
	FILE *fp ;
	char port_name[MPI_MAX_PORT_NAME];
	char port_name2[MPI_MAX_PORT_NAME];
	int size,rank;

	MPI_Init( &argc, &argv );
	
	fp = fopen("port_name.txt", "r") ;
	if(fp == NULL)
	{
	fprintf(stderr, "fopen failed: %s\n", strerror(errno)) ;
	exit(1) ;
	}
	fscanf(fp, "%s", port_name) ;
	fclose(fp) ;	
	
	printf("server port name:%s\n",port_name);
	
	MPI_Comm_connect( port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD,&server );

	MPI_Intercomm_merge(server,11,&newcomm);
	MPI_Comm_rank(newcomm, &rank);
	MPI_Comm_size(newcomm, &size);
	printf("At client %d, newcomm_size=%d\n",rank,size);

	MPI_Barrier(newcomm);
	
	fp = fopen("port_name.txt", "r") ;
	if(fp == NULL)
	{
	fprintf(stderr, "fopen failed: %s\n", strerror(errno)) ;
	exit(1) ;
	}
	fscanf(fp, "%s", port_name2) ;
	fclose(fp) ;	
	
	printf("server port name:%s\n",port_name2);
	
	MPI_Comm_connect( port_name2, MPI_INFO_NULL, 0, newcomm,&server2 );//BLOCK here!!!

	MPI_Intercomm_merge(server2,12,&newcomm2);
	MPI_Comm_rank(newcomm2, &rank);
	MPI_Comm_size(newcomm2, &size);
	printf("At client %d, newcomm_size=%d\n",rank,size);

sleep(10);
	MPI_Comm_disconnect( &server );
	MPI_Finalize();
	return 0;
}


