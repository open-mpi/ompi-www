#include <stdint.h>
#include <stdio.h>
#include <mpi.h>

int main(int argc, char *argv[])
{
    MPI_Win win;
    MPI_Datatype dt;
    int obuf[1], tbuf[1];

    obuf[0] = 77;
    tbuf[0] = 88;

    MPI_Init(&argc, &argv);

    MPI_Type_dup(MPI_INT, &dt);
    MPI_Type_commit(&dt);

    MPI_Win_create(tbuf, sizeof(int), 1, MPI_INFO_NULL, MPI_COMM_SELF, &win);
    MPI_Win_fence(0, win);
    MPI_Put(obuf, 1, MPI_INT, 0, 0, 1, dt, win);
    MPI_Win_fence(0, win);

    MPI_Type_free(&dt);
    MPI_Win_free(&win);
    MPI_Finalize();

    if (tbuf[0] == 77) {
        printf("OK\n");
    } else {
        printf("NG\n");
    }
    fflush(stdout);

    return 0;
}

