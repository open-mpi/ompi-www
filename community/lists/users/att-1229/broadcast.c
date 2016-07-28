/* this file is from lam-mpi.org website */
#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

int main(int argc, char *argv[]) {
	int rank, size, myn, i, N;
	double *vector, *myvec, sum, mysum, total;


	MPI_Init(&argc, &argv);
	
	MPI_Comm_rank(MPI_COMM_WORLD, &rank);
	MPI_Comm_size(MPI_COMM_WORLD, &size);

	/* the root process reads the vector size and stuff */
	if (rank == 0) {
		printf("Enter the vector length: ");
		scanf("%d", &N);
		vector = (double *)malloc(sizeof(double) * N );
		for ( i=0,sum=0; i<N; i++ ) {
			vector[i] = 1.0;
		}
		myn = N / size;
	}

	/* printf ("rank: %d, size: %d \n", rank, size); */
	/* broadcast the vector size that's local to each process */
	MPI_Bcast(&myn, 1, MPI_INT, 0, MPI_COMM_WORLD);
	/* allocate local vector size in each process */
	myvec = (double *)malloc(sizeof(double)*myn);
	/* Scatter the vector to all processes */
	MPI_Scatter(vector, myn, MPI_DOUBLE, myvec, myn, MPI_DOUBLE, 0, MPI_COMM_WORLD);

	printf("i am: %d , and i have %d vector elements\n", rank, myn);
	/* the sum of all elements of the local vector in each process */
	for ( i=0,mysum=0; i < myn; i++ ){
		mysum += myvec[i];
	}

	/* reduce all to one to get the global sum */
	MPI_Allreduce(&mysum, &total, 1, MPI_DOUBLE, MPI_SUM, MPI_COMM_WORLD);

	/* global sum * local vector */
	for (i=0; i<myn; i++) {
		myvec[i] *= total;
	}

	/* Gather the local vector in the root proc. */
	MPI_Gather(myvec, myn, MPI_DOUBLE, vector, myn, MPI_DOUBLE, 0, MPI_COMM_WORLD);

	if ( rank == 0 ) {
		for (i=0;i<N;i++) {
			printf("[%d] %f\n", rank, vector[i]);
		}
	}

	MPI_Finalize();
	return 0;
}		


