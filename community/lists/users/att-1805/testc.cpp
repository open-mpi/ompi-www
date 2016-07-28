// testc.cpp
// mpic++ testc.cpp -o testc
// mpiexec -np 2 ./testc

#include "mpi.h"
#include <iostream>

using namespace std;

int main(int argc, char *argv[])
{
    int process_id;   // rank of process
    int process_num;  // total number of processes
  
    MPI_Init(&argc,&argv);
    MPI_Comm_size(MPI_COMM_WORLD,&process_num);
    MPI_Comm_rank(MPI_COMM_WORLD,&process_id);  

    cout << process_id+1 << "/" << process_num << endl;
    MPI_Finalize();    
}

