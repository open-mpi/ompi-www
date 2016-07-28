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

    int cap = 11;
    int objectSize = sizeof(int);
    int buffer_size = cap * objectSize;

    // Shared window
    int *array = NULL;
    MPI_Win win_shared;
    MPI_Win_allocate_shared(buffer_size, objectSize, MPI_INFO_NULL, MPI_COMM_WORLD, &array, &win_shared);
    
    // Classic window
    int *buffer = NULL;
    MPI_Alloc_mem(buffer_size, MPI_INFO_NULL, &buffer);
    MPI_Win win;
    MPI_Win_create(buffer, buffer_size, objectSize, MPI_INFO_NULL, MPI_COMM_WORLD, &win);

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

    }

    MPI_Barrier(MPI_COMM_WORLD);

    {
        // Locking shared window
            
        std::cout << "Shared Window: Read locking for rank = " << rank << std::endl;

        MPI_Win_lock(MPI_LOCK_SHARED, rank, 0, win_shared);
        MPI_Win_unlock(rank, win_shared);

        std::cout << "Shared Window: Write locking for rank = " << rank << std::endl;
            
        MPI_Win_lock(MPI_LOCK_EXCLUSIVE, rank, 0, win_shared);
        MPI_Win_unlock(rank, win_shared);
    }

    std::cout << "Rank " << rank << " has done for shared window"<< std::endl;

    {
        // Locking classic window
        
        std::cout << "Classic Window: Read locking for rank = " << rank << std::endl;
        
        MPI_Win_lock(MPI_LOCK_SHARED, rank, 0, win);
        MPI_Win_unlock(rank, win);

        std::cout << "Classic Window: Write locking for rank = " << rank << std::endl;
        
        MPI_Win_lock(MPI_LOCK_EXCLUSIVE, rank, 0, win);
        MPI_Win_unlock(rank, win);
    }

    std::cout << "Rank " << rank << " has done for classic window."<< std::endl;

    
    MPI_Win_free(&win);
    MPI_Free_mem(buffer);
    
    MPI_Win_free(&win_shared);

    MPI_Finalize();

    return 0;
}

// 
// main.cpp ends here
