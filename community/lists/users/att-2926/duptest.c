#include <mpi.h>
#include <stdio.h>
int main(int argc, char *argv[])
{
MPI_Comm comm;

int size,rank;
MPI_Init(&argc,&argv);
MPI_Comm_size(MPI_COMM_WORLD,&size);
MPI_Comm_rank(MPI_COMM_WORLD,&rank);
int n;

if (argc > 1)
  n=atoi(argv[1]);
else
  n=10000;

if (rank == 0)
{
   printf("Running with %d processes\n",size);
   printf("will do %d dups and frees\n",n);
}

int i;
for (i=0; i<n; i++)
  {
    if (i%100 == 0)
      if (rank == 0)
	printf(".");
    if (i%10000 == 0)
      if (rank == 0)
	printf("\n");

    MPI_Comm_dup(MPI_COMM_WORLD, &comm);
    MPI_Comm_free(&comm);
  }
  if (rank == 0)
    printf("\nStill alive!\n");
  MPI_Finalize();
}

