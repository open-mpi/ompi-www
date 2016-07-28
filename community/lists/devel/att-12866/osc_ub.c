#include <stdio.h>
#include <mpi.h>

int main(int argc, char *argv[])
{
    int size, rank;
    MPI_Win win;
    MPI_Datatype datatype;
    MPI_Datatype datatypes[] = {MPI_INT, MPI_UB};
    int blengths[] = {1, 1};
    MPI_Aint displs[] = {0, sizeof(int)};
    int buf[] = {0};

    MPI_Init(&argc, &argv);

    MPI_Comm_size(MPI_COMM_WORLD, &size);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    if (size < 2) {
        fprintf(stderr, "Needs at least 2 processes\n");
        MPI_Abort(MPI_COMM_WORLD, 1);
    }

    MPI_Type_create_struct(2, blengths, displs, datatypes, &datatype);
    MPI_Type_commit(&datatype);
    MPI_Win_create(buf, sizeof(int), 1, MPI_INFO_NULL, MPI_COMM_WORLD, &win);

    MPI_Win_fence(0, win);
    if (rank == 0) {
        MPI_Put(buf, 1, datatype, 1, 0, 1, datatype, win);
    }
    MPI_Win_fence(0, win);

    MPI_Win_free(&win);
    MPI_Type_free(&datatype);

    MPI_Finalize();

    return 0;
}
