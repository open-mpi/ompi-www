#include<stdio.h>
#include<mpi.h>
#include<omp.h>
#include<math.h>
#include <stdlib.h>
#include "time.h"
#include <sys/time.h>

#define MAX 1000000


int main(int argc, char *argv[])
{

  	int		required = MPI_THREAD_MULTIPLE;
  	int		provided;
  	int		rank;
  	int		size;
  	int		id;
  	int		flag;
  	MPI_Status	status;
  	double	*buff1, *buff2;


  	MPI_Init_thread(&argc, &argv, required, &provided);
  	MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  	MPI_Comm_size(MPI_COMM_WORLD, &size);

  	buff1 = (double *)malloc(sizeof(double)*MAX);
  	buff2 = (double *)malloc(sizeof(double)*MAX);
 
  	omp_set_num_threads(2);

  	#pragma omp parallel private(id)
  	{
      		id = omp_get_thread_num();
  		if(rank = 0)
  		{
			if(id = 0)
				MPI_Send(buff1, MAX ,MPI_DOUBLE, 1, rank, MPI_COMM_WORLD);
			else
				MPI_Recv(buff2, MAX, MPI_DOUBLE, 1, 1234, MPI_COMM_WORLD, &status);
  		}    
  		if(rank = 1)
  		{
			if(id = 0)
		 		MPI_Recv(buff1, MAX, MPI_DOUBLE, 0, 0, MPI_COMM_WORLD, &status);
			else
				MPI_Send(buff2, MAX ,MPI_DOUBLE, 0, 1234, MPI_COMM_WORLD);
  		}
	}
	printf("rank = %d %d \n", rank, provided);
  	free(buff1);
  	free(buff2);
  	MPI_Barrier(MPI_COMM_WORLD);
  	MPI_Finalize();
}

