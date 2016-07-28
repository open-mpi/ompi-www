#include "mpi.h"
#include <stdio.h>
#include <stdlib.h>

#define MAXSIZE 1024*1024*2

int main( int argc, char *argv[] )
{
    int myrank, size;
    int *sendbuf,*recvbuf;
    int i;
    int count;
    int block[3];
    MPI_Aint disp[3];

    MPI_Status *stat;
    MPI_Request *request;
    MPI_Datatype newtype;
    MPI_Datatype dtype[3];

    MPI_Init( 0, 0 );
    MPI_Comm_size( MPI_COMM_WORLD, &size );
    MPI_Comm_rank( MPI_COMM_WORLD, &myrank );

    sendbuf = (int*)malloc(MAXSIZE);
    recvbuf = (int*)malloc(MAXSIZE);
    stat = (MPI_Status*)malloc(sizeof(MPI_Status)*size);
    request = (MPI_Request*)malloc(sizeof(MPI_Request)*size);

    for(i=0;i<MAXSIZE/4;i++){
       sendbuf[i] = 1;
       recvbuf[i] = 0;
    }

    count = 2;

    dtype[0] = MPI_LB;
    dtype[1] = MPI_INT;
    dtype[2] = MPI_UB;

    block[0] = 1;
    block[1] = (MAXSIZE/count)/size/sizeof(int);
    block[2] = 1;

    disp[0] = 0;
    disp[1] = (MAXSIZE/count)/size*myrank;
    disp[2] = MAXSIZE/count;

    MPI_Type_struct( 3, block, disp, dtype, &newtype);
    MPI_Type_commit(&newtype);

    if(myrank == 0){
        MPI_Send( sendbuf, count, newtype, 1, 0, MPI_COMM_WORLD);
    }
    if(myrank == 1){
        MPI_Recv( recvbuf, count, newtype, 0, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
    }

    if(myrank == 1){
    for(i=0;i<block[1];i++){
        if((0 != recvbuf[i])){
            printf("MYRANK %d failed 1 recvbuf[%d] %d\n",myrank,i,recvbuf[i]);
            MPI_Finalize();
            exit(0);
        }
    }
    for(i = block[1] ; i<block[1]*2;i++){
        if(1 != recvbuf[i]){
            printf("MYRANK %d failed 2 recvbuf[%d] %d\n",myrank,i,recvbuf[i]);
            MPI_Finalize();
            exit(0);
        }
    }
    for(i = block[1]*2 ; i<block[1]*3;i++){
        if(0 != recvbuf[i]){
            printf("MYRANK %d failed 3 recvbuf[%d] %d\n",myrank,i,recvbuf[i]);
            MPI_Finalize();
            exit(0);
        }
    }
    for(i = block[1]*3 ; i<block[1]*4;i++){
        if(1 != recvbuf[i]){
            printf("MYRANK %d failed 4 recvbuf[%d] %d\n",myrank,i,recvbuf[i]);
            MPI_Finalize();
            exit(0);
        }
    }
    }


    MPI_Finalize();

    return 0;
}
