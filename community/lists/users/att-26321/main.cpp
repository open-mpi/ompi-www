// Version: $Id$
// 
// 

// Commentary: 
// 
// 

// Change Log:
// 
// 

// Code:

#include "mpi.h"
#include <iostream>

int main(int argc, char **argv)
{
    MPI_Init(&argc, &argv);

    int cap = 101;
    int objectSize = sizeof(int);
    int buffer_size = cap * objectSize;
    int *array = NULL;

    MPI_Win win;

    MPI_Win_allocate_shared(buffer_size, objectSize, MPI_INFO_NULL, MPI_COMM_WORLD, &array, &win);

    int size;
    MPI_Comm_size(MPI_COMM_WORLD, &size);
    int rank;
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    MPI_Barrier(MPI_COMM_WORLD);
    if (rank == 0) {

        char version[MPI_MAX_LIBRARY_VERSION_STRING];
        int len;
        MPI_Get_library_version(version, &len);
        std::cout << version << std::endl;

        for (int i = 0; i < cap * size; ++i) {
            int wid = i / cap;
            std::cout << std::endl;
            std::cout << "iteration " << i << " locking window"  << std::endl;
            MPI_Win_lock(MPI_LOCK_EXCLUSIVE, wid, MPI_MODE_NOCHECK, win);
            MPI_Put(&i, buffer_size, MPI_BYTE, wid, i%size, buffer_size, MPI_BYTE, win);
            std::cout << "unlocking " << std::endl;
            MPI_Win_unlock(wid, win);
        }
    }
    MPI_Finalize();

    return 0;
}

// 
// main.cpp ends here
