#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

__global__ void MPI_Warmup(){};
__global__ void MPI_Isend() {};
__global__ void MPI_Irecv() {};
__global__ void MPI_Wait() {};

int main(int argc, char** argv) {
  cudaFree(0);  
  const int size=100000000;
  MPI_Init(&argc,&argv);

  int rank, procs;
  MPI_Status status;
  MPI_Request srequest, rrequest;

  MPI_Comm_size(MPI_COMM_WORLD,&procs);
  MPI_Comm_rank(MPI_COMM_WORLD,&rank);

  int *d_buf1, *d_buf2;
  cudaMalloc((void**)&d_buf1,size*procs*sizeof(int));
  cudaMalloc((void**)&d_buf2,size*procs*sizeof(int));

  int sleeptime=500;

  int neighbor=rank;

  //warm up mpi
  printf("Warmup\n");
  MPI_Warmup<<<1,1>>>();
  MPI_Allgather(d_buf1,size,MPI_INT,d_buf2,size,MPI_INT,MPI_COMM_WORLD);
  MPI_Warmup<<<1,1>>>();

  usleep(sleeptime);

  printf("Send/Receive Async\n");
  MPI_Isend<<<1,1>>>();
  MPI_Isend(d_buf1,size,MPI_INT,neighbor,0,MPI_COMM_WORLD,&srequest);
  MPI_Isend<<<1,1>>>();

  MPI_Irecv<<<1,1>>>();
  MPI_Irecv(d_buf2,size,MPI_INT,neighbor,0,MPI_COMM_WORLD,&rrequest);
  MPI_Irecv<<<1,1>>>();

  printf("MPI Wait\n");
  MPI_Wait<<<1,1>>>();
  MPI_Wait(&srequest,&status);
  MPI_Wait(&rrequest,&status);
  MPI_Wait<<<1,1>>>();
  usleep(sleeptime);
  
  cudaFree(d_buf1);
  cudaFree(d_buf2);

  MPI_Finalize();
}
