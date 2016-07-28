#include <mpi.h>

#include <iostream>

int main(int argc, char* argv[])
{
	MPI_Init(&argc, &argv);

	int size, rank;
	MPI_Comm_rank(MPI_COMM_WORLD, &rank);

	int s[25];
	for (int i = 0; i < 25; i++)
		s[i] = rank*1000 + i;

	int r[500];
	MPI_Allgather(s, 25, MPI_INT, r, 25, MPI_INT, MPI_COMM_WORLD);

	std::cout << rank << ' ' << r[0] << ' ' << r[1] << ' ' << r[2] << std::endl;

	MPI_Finalize();
}

