// `phello.c' MPI C file
//
// last major modification 2003/01/05
// last minor modification 2009/03/27
// 

// mpicc -o phello phello.c
// mpirun -np 5 phello

#include <unistd.h>
#include <stdio.h>
#include <mpi.h>

int main(int narg, char *args[]){
  int rank,size;
	char ProcessorName[MPI_MAX_PROCESSOR_NAME];
	int ProcessorNameLength;

  MPI_Init(&narg,&args);

  MPI_Comm_rank(MPI_COMM_WORLD,&rank);
  MPI_Comm_size(MPI_COMM_WORLD,&size);

	MPI_Get_processor_name(ProcessorName,&ProcessorNameLength);
	sleep(11);
	fprintf(stdout,
			"Hello world! I am %d of %d and my name is `%s'\n",
		rank,size,
		ProcessorName);

  MPI_Finalize();

  return 0; }

//
// End of file `phello.c'.


