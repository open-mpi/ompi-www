// this code is organized for running with "-np 4" in mpirun

#include <mpi.h>
#include <iostream>

#define ROOT_NODE 0

using namespace std;

int main(int argc, char *argv[]) {

	int data[20] = {0};
	int data2[50] = {0};

	int data_db[4][20] = {
		{9394287,15910968,38127303,84350675,91341460,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
		{3938568,23514575,30049874,66951201,75970968,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
		{26064364,28684381,43722826,73412832,88193851,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0},
		{27148880,41379192,61636168,67630198,95203523,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0}
	};

	int subpartition_offset_db[4][4] = {
		{0,2,3,3},
		{0,2,3,4},
		{0,1,2,3},
		{0,1,2,4}
	};

	int subpartition_size_db[4][4] = {
		{2,1,0,2},
		{2,1,1,1},
		{1,1,1,2},
		{1,1,2,1}
	};

	int subpartition_offset[4] = {};
	int subpartition_size[4] = {};

	int subpartition_offset2[4] = {0,5,10,15}; 
	int subpartition_size2[4]   = {5,5,5,5};



	MPI::Init(argc, argv);

	int cluster_size = MPI::COMM_WORLD.Get_size();
	int my_rank = MPI::COMM_WORLD.Get_rank();

	// initializing local variables
	for(int i=0;i<4;i++)
	{
		subpartition_size[i] = subpartition_size_db[my_rank][i];
		subpartition_offset[i] = subpartition_offset_db[my_rank][i];
		for(int j=0;j<5;j++)
		{
			data[j] = data_db[my_rank][j];
		}
	}

	MPI::COMM_WORLD.Alltoallv(data, subpartition_size, subpartition_offset, MPI::INT,
						  data2,subpartition_size2,subpartition_offset2,MPI::INT);
	
	//cout << my_rank*100 << endl;
	//print out results
    for(int i=0;i<4;i++){
       if(my_rank == i){
	       cout << endl << "---------- Rank " << my_rank << " of " << cluster_size << " ----------" << endl;
	       cout << "Data Received:" << endl;
	       for(int j=0; j<20 ; j++)
	           cout<< data2[j] << "," ; 
	       cout << endl << "----------" << endl;
       }
       MPI::COMM_WORLD.Barrier();
    }


	MPI::Finalize();
	return 0;

}