#include <stdio.h>
#include <mpi.h>

int main(int argc, char *argv[])
{
    int buf;
    int counts[] = {1};
    int displs[] = {0};
    MPI_Datatype types[] = {MPI_INT};

    MPI_Init(&argc, &argv);

    buf = 1;
    MPI_Alltoall(MPI_IN_PLACE, 1, MPI_INT, &buf, 1, MPI_INT, MPI_COMM_SELF);
    if (buf != 1) {
        fprintf(stderr, "buf is not 1.\n");
    }

    buf = 1;
    MPI_Alltoallv(MPI_IN_PLACE, counts, displs, MPI_INT,
                  &buf, counts, displs, MPI_INT, MPI_COMM_SELF);
    if (buf != 1) {
        fprintf(stderr, "buf is not 1.\n");
    }

    buf = 1;
    MPI_Alltoallw(MPI_IN_PLACE, counts, displs, types,
                  &buf, counts, displs, types, MPI_COMM_SELF);
    if (buf != 1) {
        fprintf(stderr, "buf is not 1.\n");
    }

    MPI_Finalize();

    return 0;
}
