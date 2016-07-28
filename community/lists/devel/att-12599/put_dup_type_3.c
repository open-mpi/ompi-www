#include <stdint.h>
#include <stdio.h>
#include <string.h>
#include <mpi.h>

static MPI_Win win;
static int obuf[1], tbuf[100];

static void do_put(MPI_Datatype dt)
{
    memset(tbuf, 0, sizeof(tbuf));
    MPI_Win_fence(0, win);
    MPI_Put(obuf, 1, MPI_INT, 0, 0, 1, dt, win);
    MPI_Win_fence(0, win);
}

static void check_value(int expected, int actual)
{
    if (expected != actual) {
        printf("NG (expected: %d, actual: %d)\n", expected, actual);
    } else {
        printf("OK\n");
    }
}

int main(int argc, char *argv[])
{
    MPI_Datatype dt, dt1, dt2;

    obuf[0] = 77;

    MPI_Init(&argc, &argv);
    MPI_Win_create(tbuf, sizeof(int), 1, MPI_INFO_NULL, MPI_COMM_SELF, &win);

    do_put(MPI_INT);
    check_value(77, tbuf[0]);

    MPI_Type_contiguous(1, MPI_INT, &dt);
    MPI_Type_commit(&dt);
    do_put(dt);
    MPI_Type_free(&dt);
    check_value(77, tbuf[0]);

    MPI_Type_dup(MPI_INT, &dt);
    MPI_Type_commit(&dt);
    do_put(dt);
    MPI_Type_free(&dt);
    check_value(77, tbuf[0]);

    MPI_Type_contiguous(1, MPI_INT, &dt1);
    MPI_Type_dup(dt1, &dt);
    MPI_Type_commit(&dt);
    do_put(dt);
    MPI_Type_free(&dt);
    MPI_Type_free(&dt1);
    check_value(77, tbuf[0]);

    MPI_Type_dup(MPI_INT, &dt1);
    MPI_Type_contiguous(1, dt1, &dt);
    MPI_Type_commit(&dt);
    do_put(dt);
    MPI_Type_free(&dt);
    MPI_Type_free(&dt1);
    check_value(77, tbuf[0]);

    MPI_Type_contiguous(1, MPI_INT, &dt1);
    MPI_Type_dup(dt1, &dt2);
    MPI_Type_contiguous(1, dt2, &dt);
    MPI_Type_commit(&dt);
    do_put(dt);
    MPI_Type_free(&dt);
    MPI_Type_free(&dt2);
    MPI_Type_free(&dt1);
    check_value(77, tbuf[0]);

    MPI_Type_dup(MPI_INT, &dt1);
    MPI_Type_contiguous(1, dt1, &dt2);
    MPI_Type_dup(dt2, &dt);
    MPI_Type_commit(&dt);
    do_put(dt);
    MPI_Type_free(&dt);
    MPI_Type_free(&dt2);
    MPI_Type_free(&dt1);
    check_value(77, tbuf[0]);

    MPI_Win_free(&win);
    MPI_Finalize();

    printf("finished\n");

    return 0;
}

