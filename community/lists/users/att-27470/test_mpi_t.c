#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>


int main(int argc, char* argv[]) {
    int cidx, nvals, err;
    size_t eager_limit;

    int provided;
    MPI_T_cvar_handle chandle;

    MPI_Init(&argc, &argv);

    err =  MPI_T_init_thread(MPI_THREAD_SINGLE, &provided);

    err = MPI_T_cvar_get_index("btl_self_eager_limit", &cidx);

    if (err != MPI_SUCCESS) {
       fprintf(stdout, "Error getting cvar index\n");
       MPI_Abort(MPI_COMM_WORLD, 0);
    }

    err = MPI_T_cvar_handle_alloc(cidx, NULL, &chandle, &nvals);

    err = MPI_T_cvar_read(chandle, &eager_limit);
    fprintf(stdout, "After first read eager_limit = %d\n", eager_limit);

    eager_limit = 141072;
    err = MPI_T_cvar_write(chandle, &eager_limit);
    err = MPI_T_cvar_read(chandle, &eager_limit);

    if (eager_limit!=0)
        fprintf(stdout, "Failed to write eager_limit, it is %d\n", eager_limit);

    MPI_T_cvar_handle_free(&chandle);

    MPI_T_finalize();

    MPI_Finalize();

    return EXIT_SUCCESS;
}


