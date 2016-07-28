#include "mpi.h"
#include <stdio.h>
#include <stdlib.h>


void send(int msg_len, int partner) {
    // initialize buffer
    unsigned char *buffer =
        (unsigned char *)malloc(msg_len * sizeof(unsigned char));
    for(int i = 0; i < msg_len; ++i) {
        buffer[i] = i % 256;
    }

    // time bounce
    double start_t = MPI_Wtime();
    MPI_Send(buffer, msg_len, MPI_UNSIGNED_CHAR, partner, msg_len,
            MPI_COMM_WORLD);
    MPI_Recv(buffer, msg_len, MPI_UNSIGNED_CHAR, partner, msg_len,
            MPI_COMM_WORLD, MPI_STATUS_IGNORE);
    double end_t = MPI_Wtime();

    free(buffer);
    double time_taken = end_t - start_t;
    printf("%d: %e\n", msg_len, time_taken);
}

void bounce(int msg_len, int partner) {
    unsigned char *buffer = (unsigned char *) malloc(msg_len);
    MPI_Recv(buffer, msg_len, MPI_UNSIGNED_CHAR, partner, msg_len,
            MPI_COMM_WORLD, MPI_STATUS_IGNORE);
    MPI_Send(buffer, msg_len, MPI_UNSIGNED_CHAR, partner, msg_len,
            MPI_COMM_WORLD);
    free(buffer);
}


int main(int argc, char *argv[]) {
    int rank;

    MPI_Init(&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    MPI_Finalize();
}
