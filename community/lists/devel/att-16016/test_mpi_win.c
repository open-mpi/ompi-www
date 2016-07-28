#include "mpi.h"
#include "stdio.h"
#include "unistd.h"
 
/* Tests MPI_Win_put with post+start+complete+wait.
 * It puts to one rank count backward and receives from one rank count forward,
 * rank 0 sends to rank nranks-1 (note: issue not affect by cyclic setup).
 *
 * With OpenMPI 1.8.3, Linux, gcc 4.7.2 on a single Intel i7-2600
 * thousands of transfer errors appear with 3 or more ranks.
 * I would expect this issue is present (at least) any shared memory setup.
 *
 * Up till now the problem has not been reproduced with OpenMPI 1.7.2/4
 * and MPICH 3.1.2.
 */
 
#define SIZE     5000

#define NSTEPS 100000
 
int main(int argc, char *argv[])
{
    int rank, rank_bw, rank_fw, nranks, *a, *b, prev, i, step;
    MPI_Group comm_group, group_bw, group_fw;
    MPI_Win win;
    int nerrors = 0;
 
    MPI_Init(&argc,&argv);
    MPI_Comm_size(MPI_COMM_WORLD, &nranks);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
 
    i = MPI_Alloc_mem(SIZE*sizeof(int), MPI_INFO_NULL, &a);
    if (i) {
        printf("Can't allocate memory in test program\n");fflush(stdout);
        MPI_Abort(MPI_COMM_WORLD, 1);
    }
    MPI_Alloc_mem(SIZE*sizeof(int), MPI_INFO_NULL, &b);

    MPI_Comm_group(MPI_COMM_WORLD, &comm_group);

    rank_bw = (rank - 1 + nranks) % nranks;
    MPI_Group_incl(comm_group, 1, &rank_bw, &group_bw);

    rank_fw = (rank + 1) % nranks;
    MPI_Group_incl(comm_group, 1, &rank_fw, &group_fw);

    MPI_Win_create(b, SIZE*sizeof(int), sizeof(int), MPI_INFO_NULL,
                   MPI_COMM_WORLD, &win);

    for (step = 0; step < NSTEPS; step++) {
        if (rank == 0 && step % 1000 == 0)
            printf("step %d\n",step);

        for (i = 0; i < SIZE; i++) {
            a[i] = step + 1;
        }

        MPI_Win_post(group_fw, 0,win);

        MPI_Win_start(group_bw, 0, win);

        MPI_Put(a, SIZE, MPI_INT, rank_bw, 0, SIZE, MPI_INT, win);
 
        MPI_Win_complete(win);
 
        MPI_Win_wait(win);

        /* Check if the last element is not transferred/updated yet */
        if (b[SIZE-1] != step + 1) {
            printf("step %d, rank %d last element not updated\n",
                   step, rank);
            nerrors++;
#if 0
            /* Test if data arrived after one second (is never the case) */
            sleep(1);
            printf("step %d, rank %d last element updated after 1 second: %d\n",
                   step, rank, (b[SIZE-1] == step + 1));
#endif
        }
    }

    printf("There were %d transfer errors\n", nerrors);
 
    MPI_Group_free(&group_bw);
    MPI_Group_free(&group_fw);
    MPI_Group_free(&comm_group);
    MPI_Win_free(&win);
    MPI_Free_mem(a);
    MPI_Free_mem(b);

 
    MPI_Finalize();

    return nerrors;
}
