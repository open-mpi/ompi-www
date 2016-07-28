#include <iostream>
#include <fstream>
#include <unistd.h>
#include <sstream>
#include <cstdlib>
#include <climits>
#include <cstring>
#include <omp.h>
#include <time.h>
#include "mpi.h"

using namespace std;
static struct timespec start, end, duration;
static int my_rank, nrank;
static int my_mpi_tag_send=0;
void clock_start() {
	clock_gettime(CLOCK_MONOTONIC,&start);
}
double clock_end(const string & op, int rank_print=0) {
	double duration_in_sec;
	clock_gettime(CLOCK_MONOTONIC,&end);
	duration.tv_sec = end.tv_sec - start.tv_sec;
	duration.tv_nsec = end.tv_nsec - start.tv_nsec;
	while (duration.tv_nsec > 1000000000) { duration.tv_sec++; duration.tv_nsec -= 1000000000; }
	while (duration.tv_nsec < 0) { duration.tv_sec--; duration.tv_nsec += 1000000000; }
	duration_in_sec = duration.tv_sec + double(duration.tv_nsec)/1000000000.;
	if (my_rank == rank_print)
		cout << "Operation \"" << op << "\" done. Took: " << duration_in_sec << " seconds." << endl;
	return duration_in_sec;
}
int main(int argc, char ** argv) {
	clock_start();
	MPI_Init(&argc, &argv);
	MPI_Comm_rank(MPI_COMM_WORLD,&my_rank);
	MPI_Comm_size(MPI_COMM_WORLD,&nrank);
	clock_end("MPI_Init");
	struct timespec start,end,duration;
	double duration_in_sec;
	double total_duration=0;
	int size=363;
	int size2=1024*1024*50;
	if (my_rank == 0) {
		cout << "We have " << nrank << " MPI ranks." << endl;
		if (size <= 1000)
			cout << "Size of the send buffer :" << size << "." << endl;
		else if (size > 1000)
			cout << "Size of the send buffer :" << size / 1000. << " thousands." << endl;
		else if (size > 1000000)
			cout << "Size of the send buffer :" << size / 1000000. << " millions." << endl;
	}
	char * to_bcast = new char[size2];
	char * to_send = new char[size];

	clock_start();
	for (int j=0; j<10; j++)
	        for (int i=0; i<size2; i++) to_bcast[i] = rand() % CHAR_MAX;
       	clock_end("bcast buffer init"); 

	clock_start();
	MPI_Bcast(to_bcast,size2,MPI_CHAR,0,MPI_COMM_WORLD);
	clock_end("MPI_Bcast");

	MPI_Barrier(MPI_COMM_WORLD);
	if (my_rank != 0) {
		MPI_Recv(to_send,size,MPI_CHAR,0,my_mpi_tag_send,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
		for (int j=0; j<10; j++)
			for (int i=0; i<size2; i++) to_bcast[i] = rand() % CHAR_MAX;
	}
	else {
		for (int r=1; r<nrank; r++) {
			cout << "rank " << r << endl;
			clock_start();
			for (int i=0; i<size; i++) to_send[i] = rand() % CHAR_MAX;
			clock_end("send buffer init");

			clock_start();
			MPI_Ssend(to_send,size,MPI_CHAR,r,my_mpi_tag_send,MPI_COMM_WORLD);
			total_duration += clock_end("send buffer sent");
		}
	}

	if (my_rank == 0) cout << "Average send duration : " << total_duration / (nrank-1) << " seconds." << endl;

	delete[] to_bcast;
	delete[] to_send;
	clock_start();
	MPI_Finalize();
	clock_end("MPI_Finalize");
}


