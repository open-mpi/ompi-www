#include "mpi.h"

int main(int argc, char **argv)
{
    int provided;

    MPI_T_init_thread(MPI_THREAD_SINGLE, &provided);
    MPI_T_finalize();

    MPI_Init(&argc, &argv);

    MPI_Finalize();

    return 0;
}


