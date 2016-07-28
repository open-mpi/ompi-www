#include <mpi.h>
#include <stdio.h>

/* test zero size segment.
 run on at least 3 cpus
 mpirun -np 4 a.out */

int main(int argc, char** argv)
{
    MPI_Init(NULL, NULL);

    int wsize, wrank;
    MPI_Comm_size(MPI_COMM_WORLD, &wsize);
    MPI_Comm_rank(MPI_COMM_WORLD, &wrank);

    MPI_Comm ncomm = MPI_COMM_NULL;
    MPI_Comm_split_type(MPI_COMM_WORLD, MPI_COMM_TYPE_SHARED, 0, MPI_INFO_NULL, &ncomm);

    MPI_Aint size = (wrank==0) ? 0 : sizeof(int);
    MPI_Win win = MPI_WIN_NULL;
    int * ptr = NULL;
    MPI_Win_allocate_shared(size, 1, MPI_INFO_NULL, MPI_COMM_WORLD, &ptr, &win);

    int nsize, nrank;
    MPI_Comm_size(MPI_COMM_WORLD, &nsize);
    MPI_Comm_rank(MPI_COMM_WORLD, &nrank);

    for (int r=0; r<nsize; r++) {
        MPI_Aint qsize = 0;
        int qdisp = 0;
        void * qbase = NULL;
        MPI_Win_shared_query(win, r, &qsize, &qdisp, &qbase);
        printf("query: me=%d, them=%d, size=%zu, disp=%d, base=%p\n", nrank, r, qsize, qdisp, qbase);
    }
    fflush(stdout);
    MPI_Barrier(MPI_COMM_WORLD);
    {
        MPI_Aint qsize = 0;
        int qdisp = 0;
        void * qbase = NULL;
        MPI_Win_shared_query(win, MPI_PROC_NULL, &qsize, &qdisp, &qbase);
        printf("query: me=%d, them=PROC_NULL, size=%zu, disp=%d, base=%p\n", nrank, qsize, qdisp, qbase);
    }
    fflush(stdout);

    MPI_Win_free(&win);

    MPI_Comm_free(&ncomm);

    MPI_Finalize();
}
