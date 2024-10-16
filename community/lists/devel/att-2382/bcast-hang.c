#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{
    long count = 0;
    int i = 8;
    int self;
    int do_barrier = 0;
    
    if (getenv("DO_BARRIER")) {
        do_barrier = 1;
    }
    
    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &self);
    while (1) {
        MPI_Bcast(&i, 1, MPI_INT, 0, MPI_COMM_WORLD);
        if (do_barrier) {
            MPI_Barrier(MPI_COMM_WORLD);
        }
        if (0 == (++count % 10000)) {
            fprintf(stderr, "%ld still going at %d\n", self, count);
        }
    }
    MPI_Finalize();

    return 0;
}

