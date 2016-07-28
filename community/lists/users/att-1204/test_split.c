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
    MPI_Comm inter, inter2;
    int r, s, err, i, r2, s2, rs, isinter;

    MPI_Init(&ac, &av);
    MPI_Comm_size(MPI_COMM_WORLD, &s);
    MPI_Comm_rank(MPI_COMM_WORLD, &r);

    MPI_Comm_spawn(
        "./test_split_client", MPI_ARGV_NULL, 1, MPI_INFO_NULL, 0,
        MPI_COMM_WORLD, &inter, &err
    );

    for (i = 1; i <= s; i++) {

        MPI_Barrier(inter);

        MPI_Comm_split(
            inter, (r < i) ? 0 : MPI_UNDEFINED, 0, &inter2
        );
        printf(
            "%d:%d: split color %d, key %d\n",
            i, r, (r < i) ? 0 : MPI_UNDEFINED, 0
        );
        MPI_Barrier(inter);

        if (r < i) {
            err = MPI_Comm_test_inter(inter2, &isinter);
            printf(
                "%d:%d: is inter %s\n",
                i, r, isinter ? "true" : "false"
            );

            err = MPI_Comm_size(inter2, &s2);

            err = MPI_Comm_remote_size(inter2, &rs);

            err = MPI_Comm_rank(inter2, &r2);

            printf(
                "%d:%d: new rank %d, new size %d, remote size %d\n",
                i, r, r2, s2, rs
            );

            MPI_Barrier(inter2);

            err = MPI_Comm_free(&inter2);
        }
        MPI_Barrier(inter);
    }

    MPI_Barrier(inter);

    MPI_Comm_free(&inter);

    MPI_Finalize();
    return 0;
}

