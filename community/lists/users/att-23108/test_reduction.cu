#include <stdio.h>
#include <stdlib.h>
#include <iostream>
#include <typeinfo>
#include <mpi.h>

//#define USE_GPU

int main(int argc, char* argv[])
{
	int gpu_count;
	int current_gpu;

	MPI_Init(&argc, &argv);

	MPI_Comm_size(MPI_COMM_WORLD, &gpu_count);
	MPI_Comm_rank(MPI_COMM_WORLD, &current_gpu);

	double val = current_gpu;
	double* send_gpu;
	double* recv_gpu;
	cudaMalloc((void**)&send_gpu, sizeof(double)*5);
	cudaMalloc((void**)&recv_gpu, sizeof(double)*5);
	double* send_cpu = (double*)malloc(sizeof(double)*1);
	double* recv_cpu = (double*)malloc(sizeof(double)*1);

#ifdef USE_GPU
	cudaMemcpy(send_gpu, &val, sizeof(double)*1,cudaMemcpyHostToDevice);
	MPI_Reduce(send_gpu, recv_gpu,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);
#else
	memcpy(send_cpu, &val, sizeof(double)*1);
	MPI_Reduce(send_cpu, recv_cpu,1,MPI_DOUBLE,MPI_SUM,0,MPI_COMM_WORLD);
#endif

	if (current_gpu==0)
	{
#ifdef USE_GPU
		cudaMemcpy(&val, recv_gpu, sizeof(double)*1,cudaMemcpyDeviceToHost);
#else
		memcpy(&val, recv_cpu, sizeof(double)*1);
#endif
		printf("Sum of process ranks on GPU %d: %lf\n",current_gpu,val);
	}

	cudaFree(send_gpu);
	cudaFree(recv_gpu);
	free(send_cpu);
	free(recv_cpu);
	MPI_Finalize();
}
