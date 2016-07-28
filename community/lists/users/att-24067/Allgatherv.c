#include "mpi.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <time.h>


#define NS  8   //  number of segment

struct timeval tv;
#define mytime(time)   do{  \
    gettimeofday(&tv,NULL);  \
    time=(unsigned long)(tv.tv_sec*1000000+tv.tv_usec);    \
}while(0)

int main(int argc, char** argv)
{
    MPI_Init(&argc,&argv);
    
    int size;
    int rank;

    MPI_Comm_size(MPI_COMM_WORLD, &size);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    if(argc<2) {
        printf("Usage: ./allgather m [n]\n");
        printf("        n=1, represent m KB;");
        printf("        n=2, represent m MB;");
        exit(-1);
    }

    int global_size;    // the amount of data to allgather
    int local_size;    // the amount of data that each process holds
    if(argc >= 2) global_size = atoi(argv[1]);
    if(argc >= 3)
    {
        if(atoi(argv[2])==2) global_size = global_size*1024*1024;   // n=2, xxMB
        if(atoi(argv[2])==1) global_size = global_size*1024;        // n=1, xxKB
    }
    local_size = global_size/size;  // each process holds 1/size of the data

    int * global_buf;   // recvbuf
    int * local_buf;    // sendbuf
    global_buf = (int *) malloc(global_size*sizeof(int));
    local_buf = (int *) malloc(local_size*sizeof(int));     
    memset(global_buf,0,global_size*sizeof(int));
    memset(local_buf,0,local_size*sizeof(int));

    int i,j,k;

    int *recvcnts;  // recvcnts of MPI_Allgatherv
    int *displs;    // displs of MPI_Allgatherv
    recvcnts = (int *) malloc(size*sizeof(int));
    displs = (int*) malloc(size*sizeof(int));
    for(i=0; i<size; i++)
        recvcnts[i] = local_size/NS;    // each time perform MPI_Allgatherv on 1/NS of the data


    unsigned long t_begin,t_end,comp_time,comm_time;    // timers
    comp_time = 0;
    comm_time = 0;

    /************** MAIN LOOP ****************/

    for(k=0;k<NS;k++)  // NS iterations
    {  
        // computation 
        mytime(t_begin);    // begin of computation
        for(i=k*local_size/NS;i<(k+1)*local_size/NS;i++)    // initialize the kth part of local data
        {
            local_buf[i] = rank*local_size + i;
            for(j=0;j<40;j++);
        }
        mytime(t_end);      // end of computation
        comp_time += (t_end - t_begin);

        // communication
        t_begin = t_end;    // begin of communication
        for(i=0;i<size;i++)
            displs[i] = i*local_size + k*local_size/NS;     // calculate the displacement of each process in the recvbuf at kth iteration
        int *offset=local_buf + k*local_size/NS;     // the start address of sendbuf
        MPI_Allgatherv(offset, local_size/NS, MPI_INT, global_buf, recvcnts, displs, MPI_INT, MPI_COMM_WORLD);
        mytime(t_end);      // end of communication
        comm_time += (t_end - t_begin);
    }

    /********************************************/

    int err = 0;
    for(i=0;i<global_size;i++)  // check the recvbuf
        if( global_buf[i] != i ) err++;
    if( err )
        printf("rank[%d] failed\n",rank);
    else
        printf("rank[%d] success\n",rank);

    if(rank==0) // print the final result
    {
        printf("Number of processes:    %d\n",size);
        printf("Computation time  :     %d us\n",comp_time);
        printf("Communication time:     %d us\n",comm_time);
    }
    MPI_Finalize();
}
