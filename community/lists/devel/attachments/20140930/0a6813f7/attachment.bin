#include <stdio.h>
#include <stdlib.h>
#include "mpi.h"
/*
 $ mpiexec -n 2 a.out

 MPI Error in MPI_Testall() (18)
 MPI Error in MPI_Testall() (18)
 MPI Error in MPI_Testall() (18)
        :
        :
*/

int main(int argc, char **argv)
{
    MPI_Comm inter_comm, local_comm;
    int rank, color, rsize, i;
    int *buf;
    MPI_Request  rq;

    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    color = rank%2;
    MPI_Comm_split(MPI_COMM_WORLD, color, rank, &local_comm);
    MPI_Intercomm_create(local_comm, 0, MPI_COMM_WORLD,
                         (color+1)%2, 0, &inter_comm);
    MPI_Comm_remote_size(inter_comm, &rsize);
    
    buf = malloc(sizeof(int)*rsize);
    for (i=0;i<rsize;i++) {
        buf[i] = -1;
    }

    if (0==color) {
        MPI_Iallgather(&rank, 1, MPI_INT, 
                       buf,   0, MPI_INT, inter_comm, &rq);
    } else {
        MPI_Iallgather(&rank, 0, MPI_INT, 
                       buf,   1, MPI_INT, inter_comm, &rq);
    }
    MPI_Wait(&rq, MPI_STATUS_IGNORE);

    for (i=0;i<rsize;i++) {
        printf("[rank %d] buf[%d]=%d\n", rank, i, buf[i]);
    }
    fflush(stdout);

    MPI_Comm_free(&inter_comm);
    MPI_Comm_free(&local_comm);
    MPI_Finalize();
    free(buf);
    
    return 0;
}
