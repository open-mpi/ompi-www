#include <cstdio>
#include <mpi.h>

int main(int argc, char **argv)
{
 MPI_Init(&argc, &argv);
 int rank;
 MPI_Comm_rank(MPI_COMM_WORLD, &rank);
 int size;
 MPI_Comm_size(MPI_COMM_WORLD, &size);
 printf("size = %d\n", size);
 printf("rank = %d\n", rank);
 system("env | grep SLURM");
 system("env | grep JMS");
 MPI_Finalize();
}

