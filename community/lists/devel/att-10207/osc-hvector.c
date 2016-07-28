#include <stdlib.h>
#include <stdio.h>
#include <mpi.h>

#define BUF_SIZE 1024
#define DT_COUNT 2

int main(int argc, char *argv[])
{
    int size, mask = 0xffffffff;
    MPI_Win win;
    MPI_Datatype dt0 = MPI_SIGNED_CHAR, dt1, dt2;
    unsigned char obuf[BUF_SIZE], tbuf[BUF_SIZE];

    if (argc >= 2) {
        mask = atoi(argv[1]);
    }

    MPI_Init(&argc, &argv);
    MPI_Win_create(tbuf, BUF_SIZE, 1, MPI_INFO_NULL, MPI_COMM_SELF, &win);

    /* [### ###] */
    MPI_Type_create_hvector(2, 3, 4, dt0, &dt1);
    /* [### ###### ###  ### ###### ###  ### ###### ###] */
    MPI_Type_create_hvector(3, 2, 16, dt1, &dt2);

    MPI_Type_commit(&dt2);
    MPI_Type_size(dt2, &size);

    MPI_Win_fence(0, win);

    if (mask & (1 << 0)) {
        MPI_Put(obuf, DT_COUNT, dt2, 0, 0, size * DT_COUNT, dt0, win);
        MPI_Win_fence(0, win);
        printf("Put#Origin: OK!\n");
    }

    if (mask & (1 << 1)) {
        MPI_Put(obuf, size * DT_COUNT, dt0, 0, 0, DT_COUNT, dt2, win);
        MPI_Win_fence(0, win);
        printf("Put#Target: OK!\n");
    }

    if (mask & (1 << 2)) {
        MPI_Put(obuf, DT_COUNT, dt2, 0, 0, DT_COUNT, dt2, win);
        MPI_Win_fence(0, win);
        printf("Put#Both:   OK!\n");
    }

    if (mask & (1 << 3)) {
        MPI_Get(obuf, DT_COUNT, dt2, 0, 0, size * DT_COUNT, dt0, win);
        MPI_Win_fence(0, win);
        printf("Get#Origin: OK!\n");
    }

    if (mask & (1 << 4)) {
        MPI_Get(obuf, size * DT_COUNT, dt0, 0, 0, DT_COUNT, dt2, win);
        MPI_Win_fence(0, win);
        printf("Get#Target: OK!\n");
    }

    if (mask & (1 << 5)) {
        MPI_Get(obuf, DT_COUNT, dt2, 0, 0, DT_COUNT, dt2, win);
        MPI_Win_fence(0, win);
        printf("Get#Both:   OK!\n");
    }

    if (mask & (1 << 6)) {
        MPI_Accumulate(obuf, DT_COUNT, dt2, 0, 0, size * DT_COUNT, dt0,
                       MPI_SUM, win);
        MPI_Win_fence(0, win);
        printf("Acc#Origin: OK!\n");
    }

    if (mask & (1 << 7)) {
        MPI_Accumulate(obuf, size * DT_COUNT, dt0, 0, 0, DT_COUNT, dt2,
                       MPI_SUM, win);
        MPI_Win_fence(0, win);
        printf("Acc#Target: OK!\n");
    }

    if (mask & (1 << 8)) {
        MPI_Accumulate(obuf, DT_COUNT, dt2, 0, 0, DT_COUNT, dt2,
                       MPI_SUM, win);
        MPI_Win_fence(0, win);
        printf("Acc#Both:   OK!\n");
    }

    MPI_Type_free(&dt1);
    MPI_Type_free(&dt2);
    MPI_Win_free(&win);
    MPI_Finalize();

    printf("done.\n");

    return 0;
}
