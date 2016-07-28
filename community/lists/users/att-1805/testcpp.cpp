// testcpp.cpp
// mpic++ testcpp.cpp -o testcpp 
// mpiexec -np 2 ./testcpp

#include "mpi.h"
#include <iostream>

using namespace std;

int main(int argc, char *argv[])
{
    int process_id;   // rank of process
    int process_num;  // total number of processes
    
    MPI::Init ( argc, argv );
    process_id = MPI::COMM_WORLD.Get_rank ();
    process_num = MPI::COMM_WORLD.Get_size ();

    cout << process_id+1 << "/" << process_num << endl;
    MPI::Finalize();   
}

