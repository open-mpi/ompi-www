#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

/* rendezvous */
#define BUFSIZE1 (1024*1024)
/* eager */
#define BUFSIZE2 (8)

int main(int argc, char *argv[])
{
    int myrank, cancelled;
    void *buf1, *buf2;
    MPI_Request request;
    MPI_Status status;

    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &myrank);
    buf1 = malloc(BUFSIZE1);
    buf2 = malloc(BUFSIZE2);

    if (myrank == 0) {

        MPI_Isend(buf1, BUFSIZE1, MPI_BYTE, 1, 0, MPI_COMM_WORLD, &request);
        MPI_Send(buf2, BUFSIZE2, MPI_BYTE, 1, 1, MPI_COMM_WORLD);
        MPI_Wait(&request, &status);

    } else if (myrank == 1) {

        MPI_Irecv(buf1, BUFSIZE1, MPI_BYTE, 0, 0, MPI_COMM_WORLD, &request);
        MPI_Recv(buf2, BUFSIZE2, MPI_BYTE, 0, 1, MPI_COMM_WORLD, &status);
        MPI_Cancel(&request);
        MPI_Wait(&request, &status);

        MPI_Test_cancelled(&status, &cancelled);
        printf("MPI_Test_cancelled: %d\n", cancelled);
        fflush(stdout);

        if (cancelled) {
            MPI_Recv(buf1, BUFSIZE1, MPI_BYTE, 0, 0, MPI_COMM_WORLD,
                     &status);
        }

    }

    MPI_Finalize();
    free(buf1);
    free(buf2);

    return 0;
}
