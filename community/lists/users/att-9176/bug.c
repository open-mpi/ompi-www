/*
 * bug.c
 *
 *  Created on: May 4, 2009
 *      Author: motonacciu
 */

#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void create_matrix(float*** m, int N, int M){
	int i;
	float* matrix = malloc(sizeof(float) * N * M); // create the main matrix
	*m = (float**) malloc(sizeof(float*) * N); // create and indexes vector
	for(i=0; i<N; i++)
		(*m)[i] = &matrix[i*M]; // make the intex vector to point to the matrix rows
}

int main(int argc, char** argv){

	int N = atoi(argv[1]);
	int ntasks, rank;

	float **A;
	create_matrix(&A, N, N);

	MPI_Init(&argc, &argv);
	MPI_Comm_size(MPI_COMM_WORLD, &ntasks);
	MPI_Comm_rank(MPI_COMM_WORLD, &rank);

	MPI_Comm cart;
	int bottom, top;
	int periodic = 1;
	MPI_Cart_create(MPI_COMM_WORLD, 1, &ntasks, &periodic, 0, &cart);
	MPI_Cart_shift(cart, 0, 1, &bottom, &top);

	int i, k;
	MPI_Status status;
	double  total = 0.0;
	float *row = (float*) malloc(sizeof(float) * N);
	memset(row, 0, N);

	MPI_Barrier(MPI_COMM_WORLD);
	total = MPI_Wtime();
	for(i=0; i<N-1; i++){
		printf("%d\n", i);
		if(i>0)
			MPI_Sendrecv(A[i-1], N, MPI_FLOAT, top, 0, row, N, MPI_FLOAT, bottom, 0, MPI_COMM_WORLD, &status);
	}
	MPI_Barrier(MPI_COMM_WORLD);
	total = MPI_Wtime() - total;

	if(rank==0)
		printf("%d, %d, %0.3f\n", ntasks, N, total);

	MPI_Finalize();
	free(*A);
	free(A);
	return 0;
}

