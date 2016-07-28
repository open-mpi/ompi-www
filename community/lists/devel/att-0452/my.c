#include "mpi.h"
#include <stdio.h>
#include <stdlib.h>

#define MB (1024*1024)

char buf[5*MB];

int main( int argc, char *argv[])
{
    int myid, numprocs;
    int  namelen;
    char processor_name[MPI_MAX_PROCESSOR_NAME], *b;

    MPI_Init(&argc,&argv);
    MPI_Comm_size(MPI_COMM_WORLD,&numprocs);
    MPI_Comm_rank(MPI_COMM_WORLD,&myid);
    MPI_Get_processor_name(processor_name,&namelen);

    fprintf(stderr,"Process %d on %s\n",
	    myid, processor_name);

    if (myid == 0)
    {
	MPI_Request req[4];
	MPI_Status stat[4];
	MPI_Send (buf, 4*MB, MPI_BYTE, 1, 0, MPI_COMM_WORLD);
	MPI_Isend (buf, MB, MPI_BYTE, 1, 0, MPI_COMM_WORLD, &req[0]);
	MPI_Isend (buf + MB, MB, MPI_BYTE, 1, 0, MPI_COMM_WORLD, &req[1]);
	MPI_Isend (buf + 2*MB, MB, MPI_BYTE, 1, 0, MPI_COMM_WORLD, &req[2]);
	MPI_Isend (buf + 3*MB, 2*MB, MPI_BYTE, 1, 0, MPI_COMM_WORLD, &req[3]);
	MPI_Waitall (4, req, stat);
    }
    else
    {
        MPI_Status stat;
	MPI_Recv (buf, 4*MB, MPI_BYTE, 0, 0, MPI_COMM_WORLD, &stat);
	MPI_Recv (buf, MB, MPI_BYTE, 0, 0, MPI_COMM_WORLD, &stat);
	MPI_Recv (buf + MB, MB, MPI_BYTE, 0, 0, MPI_COMM_WORLD, &stat);
	MPI_Recv (buf + 2*MB, MB, MPI_BYTE, 0, 0, MPI_COMM_WORLD, &stat);
	MPI_Recv (buf + 3*MB, 2*MB, MPI_BYTE, 0, 0, MPI_COMM_WORLD, &stat);
    }

    fprintf(stderr,"Process %d on %s end\n",
	    myid, processor_name);
    MPI_Finalize();

    return 0;
}

            

