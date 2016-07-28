#define _GNU_SOURCE
#include <unistd.h>
#include <stdlib.h>
#include <stdio.h>
#include <string.h>
#include <stdint.h>
#include <stdbool.h>
#include <math.h>
#include <getopt.h>

#include <mpi.h>

int
main(int ac, char *av[])
{
    MPI_Comm split;
    int r, s, i, r2, s2;
    int send;

    MPI_Init(&ac, &av);
    MPI_Comm_size(MPI_COMM_WORLD, &s);
    MPI_Comm_rank(MPI_COMM_WORLD, &r);

    send = 1;
    for (i = 1; i <= s; i++) {
        MPI_Barrier(MPI_COMM_WORLD);

        printf(
            "%d:%d: split color %d, key %d\n",
            i, r, (r < i) ? 0 : MPI_UNDEFINED, 0
        );
        MPI_Comm_split(
            MPI_COMM_WORLD, (r < i) ? 0 : MPI_UNDEFINED, 0, &split
        );
        if (r < i) {
            MPI_Comm_size(split, &s2);
            MPI_Comm_rank(split, &r2);
            printf(
                "%d:%d: new rank %d, new size %d\n", i, r, r2, s2
            );
            MPI_Barrier(split);
            MPI_Comm_free(&split);
        }
        MPI_Barrier(MPI_COMM_WORLD);
    }

    MPI_Finalize();
    return 0;
}

