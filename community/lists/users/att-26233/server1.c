#include "mpi.h"
#include <unistd.h>
#include <stdio.h>
#include <string.h>
#include <errno.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{
	MPI_Comm client, client2, newcomm, newcomm2;
	MPI_Status status;
        FILE *fp ;
	char port_name[MPI_MAX_PORT_NAME];
	char port_name2[MPI_MAX_PORT_NAME];
	int size, again, rank, myrank;

	MPI_Init(&argc, &argv);
	MPI_Comm_rank(MPI_COMM_WORLD,&myrank);

	MPI_Open_port(MPI_INFO_NULL, port_name);
	printf("At server %d, port_name is %s\n\n",myrank, port_name);
	
	/* store the port name */
	fp = fopen("port_name.txt", "w") ;
	if(fp == NULL)
	{
		fprintf(stderr, "fopen failed: %s\n", strerror(errno)) ;
		exit(1) ;
	}
	fprintf(fp, "%s", port_name) ;
	fclose(fp) ;	
	
	MPI_Comm_accept(port_name, MPI_INFO_NULL, 0, MPI_COMM_WORLD,&client);
	
	MPI_Intercomm_merge(client,11,&newcomm);
	MPI_Comm_rank(newcomm, &rank);
	MPI_Comm_size(newcomm, &size);
	printf("At server %d, newcomm_size=%d\n",rank,size);

    sleep(10);    
    	MPI_Barrier(newcomm);	
	
	fp = fopen("port_name.txt", "r") ;
	if(fp == NULL)
	{
		fprintf(stderr, "fopen failed: %s\n", strerror(errno)) ;
		exit(1) ;
	}
	fscanf(fp, "%s", port_name2) ;
	fclose(fp) ;	
	
	printf("At server %d, port_name is %s\n\n",rank, port_name2);
	
	MPI_Comm_connect(port_name2, MPI_INFO_NULL, 0, newcomm,&client2);//Error happenned !!!

	MPI_Intercomm_merge(client2,12,&newcomm2);
	MPI_Comm_rank(newcomm2, &rank);
	MPI_Comm_size(newcomm2, &size);
	printf("At server %d, newcomm_size=%d\n",rank,size);
	
    	MPI_Barrier(newcomm2);

    	MPI_Close_port(port_name);
	MPI_Comm_disconnect(&client);
    	MPI_Close_port(port_name2);
	MPI_Comm_disconnect(&client2);

	MPI_Finalize();
	return 0;
}
