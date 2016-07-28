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
    int r, s, rs;

    MPI_Init(&ac, &av);
    MPI_Comm_size(MPI_COMM_WORLD, &s);
    MPI_Comm_rank(MPI_COMM_WORLD, &r);

    MPI_Comm_get_parent(&inter);

    while (true) {
        MPI_Barrier(inter);

        MPI_Comm_split(inter, 0, 0, &inter2);

        MPI_Barrier(inter);

        MPI_Comm_remote_size(inter2, &rs);
        printf("c:%d: remote size %d\n", r, rs);
        MPI_Barrier(inter2);
        MPI_Comm_free(&inter2);

        MPI_Barrier(inter);
    }
    MPI_Barrier(inter);

    MPI_Comm_free(&inter);
    MPI_Finalize();
    return 0;
}

