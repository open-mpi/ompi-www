#include "mpi.h"
#include <stdio.h>
#include <stdlib.h>
#include <sys/time.h>
#include <time.h>
#include <unistd.h>

void busy_sleep(int seconds) {
  struct timeval tv0, tv1;
  struct timezone tz;
  double elapsed_seconds;
  double us0, us1;
  gettimeofday(&tv0, &tz);
  us0 = tv0.tv_sec*1000000+tv0.tv_usec;
  //fprintf(stderr,"busy_sleep(%d)... ",seconds);
  //fflush(stderr);
  do {
    gettimeofday(&tv1, &tz);
    us1 = tv1.tv_sec*1000000+tv1.tv_usec;
    elapsed_seconds = (us1-us0)/1000000.0;
  } while( elapsed_seconds < seconds );
  //fprintf(stderr,"completed after %f microseconds\n",us1-us0);
  //fflush(stderr);
}
 
int main(int argc, char *argv[])
{
    #define hostnameLen 512
    #define bufferLen 10
    char hostname[hostnameLen+1];
    int myid, numprocs, send_to, recv_to, flag=0;
    int i, tag;
    int * buffer_send;
    int * buffer_recv;
    int tsleep = 10;
    MPI_Request request;
    MPI_Status status;
 
    MPI_Init(&argc,&argv);
    MPI_Comm_size(MPI_COMM_WORLD, &numprocs);
    MPI_Comm_rank(MPI_COMM_WORLD, &myid);
 
    buffer_send = (int*)malloc(sizeof(int)*bufferLen);
    buffer_recv = (int*)malloc(sizeof(int)*bufferLen);

    for(i=0;i<bufferLen;++i) {
      buffer_send[i] = myid;
      buffer_recv[i] = -1;
    }

    gethostname(hostname, hostnameLen);

    tag = 1;
    send_to = (myid + 1)%numprocs;
    recv_to = (numprocs + myid - 1)%numprocs;

    MPI_Irecv(buffer_recv, bufferLen, MPI_INT, recv_to, tag, MPI_COMM_WORLD, &request);
    MPI_Send(buffer_send, bufferLen, MPI_INT, send_to, tag, MPI_COMM_WORLD);
    
    sleep(5);
    flag = 0;
    tsleep = 1;
    for(i=0; !flag; i++ ){
      MPI_Test(&request, &flag, &status);
      if(flag) {
        printf("%s: rank %2d : MPI_Test #%2d ok. [%d...%d]\n",hostname,myid,i,buffer_recv[0],buffer_recv[bufferLen-1]);
      } else {
        printf("%s: rank %2d : MPI_Test #%2d KO! [%d...%d] (sleeping %d seconds)\n",hostname,myid,i,buffer_recv[0],buffer_recv[bufferLen-1],tsleep);
      }
      busy_sleep(tsleep);
    }

    MPI_Finalize();
    return 0;
}
