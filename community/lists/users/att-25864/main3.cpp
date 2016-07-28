//============================================================================
// Name        : 027_MPI_Neighbor_alltoallw_synthetic.cpp
// Author      : 
// Version     :
// Copyright   : Your copyright notice
// Description : Hello World in C++, Ansi-style
//============================================================================

#include <mpi.h>
#include <stddef.h>
#include <algorithm>
#include <cassert>
#include <iostream>
#include <iterator>
#include <vector>

using namespace std;

static void reorder (int * ranks, int rank) {
	vector<int> tmp(4);
	for (size_t i = 0 ; i < 4 ; i++) {
		assert(ranks[i] != rank);
		if (ranks[i] > rank) {
			ranks[i]--;
		}
		tmp[i] = ranks[i];
	}
	for (size_t i = 0 ; i < 4 ; i++) {
		for (size_t j=0 ; j < 4 ; j++) {
			if (tmp[i] == j) {
				ranks[j] = i;
			}
		}
	}
}

int main(int argc, char *argv[]) {

	const int sendBufferSize = 1;

	///////////////   MPI initialization   ///////////////

	int ierr;
	int nbProc;
	int rank;
	int indegrees, outdegrees, weighted;
	ierr = MPI_Init(&argc, &argv);
	assert(!ierr);
	ierr = MPI_Comm_size(MPI_COMM_WORLD, &nbProc);
	assert(!ierr);
	ierr = MPI_Comm_rank(MPI_COMM_WORLD, &rank);
	assert(!ierr);

	assert(nbProc <= 5);

	///////////////   weighted topology   ///////////////
	//   0  | x |
	//   1  | 2 | x |
	//   2  | 1 | 1 | x |
	//   3  | 3 | 2 | 3 | x |
	//   4  | 5 | 2 | 2 | 2 | x |
	// rank   0   1   2   3   4

	int degrees = nbProc - 1;
	vector<int> targets(4);
	vector<int> weights(4);
	switch (rank) {

		case 0:
		targets[0] = 1; targets[1] = 2; targets[2] = 3; targets[3] = 4;
		weights[0] = 2; weights[1] = 1; weights[2] = 3; weights[3] = 5;
		break;

		case 1:
		targets[0] = 0; targets[1] = 2; targets[2] = 3; targets[3] = 4;
		weights[0] = 2; weights[1] = 1; weights[2] = 2; weights[3] = 2;
		break;

		case 2:
		targets[0] = 0; targets[1] = 1; targets[2] = 3; targets[3] = 4;
		weights[0] = 1; weights[1] = 1; weights[2] = 3; weights[3] = 2;
		break;

		case 3:
		targets[0] = 0; targets[1] = 1; targets[2] = 2; targets[3] = 4;
		weights[0] = 3; weights[1] = 2; weights[2] = 3; weights[3] = 2;
		break;

		case 4:
		targets[0] = 0; targets[1] = 1; targets[2] = 2; targets[3] = 3;
		weights[0] = 5; weights[1] = 2; weights[2] = 2; weights[3] = 2;
		break;

	default:
		break;
	}

	int nbSendBuffers = *max_element(weights.begin(),
			weights.begin() + degrees);

	MPI_Info info = MPI_INFO_NULL;
	int rankReordering = 0;
	MPI_Comm commGraph;
	int n = 1;
	ierr = MPI_Dist_graph_create(MPI_COMM_WORLD, n, &rank, &degrees,
			&targets[0], &weights[0], info, rankReordering, &commGraph);
	assert(!ierr);
	ierr = MPI_Dist_graph_neighbors_count(commGraph, &indegrees, &outdegrees, &weighted);
	assert(!ierr);
	assert(weighted);
	vector<int> sources(4);
	vector<int> sourceWeights(4);
	vector<int> destinations(4);
	vector<int> destinationWeights(4);
	ierr = MPI_Dist_graph_neighbors(commGraph, 4, &sources[0], &sourceWeights[0], 4, &destinations[0], &destinationWeights[0]);
	assert(!ierr);
	reorder(&sources[0], rank);
	reorder(&destinations[0], rank);

	int graphRank;
	ierr = MPI_Comm_rank(commGraph, &graphRank);
	assert(!ierr);

	///////////////   send rcv buffers   ///////////////

	vector<int *> sendBuffers(nbSendBuffers);
	cout << "rank " << rank << ", send buffers : ";
	for (int i = 0; i < nbSendBuffers; ++i) {
		sendBuffers[i] = new int[sendBufferSize];
		for (int j = 0; j < sendBufferSize; ++j) {
			sendBuffers[i][j] = rank;
			cout << sendBuffers[i][j] << " ";
		}
	}
	cout << endl << flush;

	MPI_Datatype mpiSendBufferType;
	ierr = MPI_Type_contiguous(sendBufferSize, MPI_INT, &mpiSendBufferType);
	assert(!ierr);
	ierr = MPI_Type_commit(&mpiSendBufferType);
	assert(!ierr);

	vector<int> mpiSendCounts(degrees, 1);
	vector<MPI_Aint> mpiSendDisplacements(degrees, 0);
	vector<MPI_Datatype> mpiSendBufferTypes(degrees);
	vector<MPI_Aint> mpiRcvBufferDispl(degrees);
	vector<MPI_Datatype> mpiRcvBufferTypes(degrees, mpiSendBufferType);

	MPI_Aint mpiAdressBase;
	ierr = MPI_Get_address(sendBuffers[0], &mpiAdressBase);
	assert(!ierr);

	int nbRcvBuffers = 0;
	for (size_t i = 0; i < degrees; ++i) {
		const int weight = destinationWeights[i];
		mpiRcvBufferDispl[sources[i]] = nbRcvBuffers * sendBufferSize * sizeof(int);
		vector<MPI_Aint> arrayOfDisplacements(weight);
		for (int j = 0; j < weight; ++j) {
			MPI_Aint mpiAdress;
			ierr = MPI_Get_address(sendBuffers[j], &mpiAdress);
			assert(!ierr);
			arrayOfDisplacements[j] = mpiAdress - mpiAdressBase;
		}

		ierr = MPI_Type_create_hindexed_block(weight, 1,
				&arrayOfDisplacements[0], mpiSendBufferType,
				&mpiSendBufferTypes[i]);
		assert(!ierr);
		ierr = MPI_Type_commit(&mpiSendBufferTypes[i]);
		assert(!ierr);

		nbRcvBuffers += weight;
	}

	vector<int> rcvBuffer(nbRcvBuffers * sendBufferSize, -999);

	///////////////   send rcv buffers   ///////////////

	ierr = MPI_Neighbor_alltoallw(sendBuffers[0], &mpiSendCounts[0],
			&mpiSendDisplacements[0], &mpiSendBufferTypes[0], &rcvBuffer[0],
			&sourceWeights[0], &mpiRcvBufferDispl[0], &mpiRcvBufferTypes[0],
			commGraph);
	assert(!ierr);

	///////////////   printing rcv buffer   ///////////////

	cout << "rank " << rank << ", rcv buffers : ";
	for (size_t i = 0; i < rcvBuffer.size(); ++i)
		cout << rcvBuffer[i] << " ";
	cout << endl;

	///////////////   freeing   ///////////////

	for (int i = 0; i < nbSendBuffers; ++i)
		delete[] sendBuffers[i];

	for (int i = 0; i < degrees; ++i) {
		ierr = MPI_Type_free(&mpiSendBufferTypes[i]);
		assert(!ierr);
	}

	ierr = MPI_Type_free(&mpiSendBufferType);
	assert(!ierr);

	ierr = MPI_Barrier(MPI_COMM_WORLD);
	assert(!ierr);
	ierr = MPI_Finalize();
	assert(!ierr);

}

