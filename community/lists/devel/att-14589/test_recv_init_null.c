/*
 *  This test program is an over simplified version of the
 *  MPI_Recv_init_null_c test from the intel test suite.
 *
 *  It can be ran on one task :
 *  mpirun -np 1 -host localhost ./a.out
 *
 *  when ran on the trunk, since r28431, the test will fail :
 *  status.MPI_SOURCE is MPI_ANY_SOURCE instead of MPI_PROC_NULL
 *
 * Copyright (c) 2014      Research Organization for Information Science
 *                         and Technology (RIST). All rights reserved.
 */
#include <stdio.h>
#include <mpi.h>

int main (int argc, char *argv[]) {
    MPI_Status status;
    MPI_Request req;
    int ierr;

    MPI_Init(&argc, &argv);
    
    ierr = MPI_Recv_init(NULL, 0, MPI_INT, MPI_PROC_NULL, MPI_ANY_TAG, MPI_COMM_WORLD, &req);
    if (ierr != MPI_SUCCESS) MPI_Abort(MPI_COMM_WORLD, 1);

    ierr = MPI_Start(&req);
    if (ierr != MPI_SUCCESS) MPI_Abort(MPI_COMM_WORLD, 2);

    ierr = MPI_Wait(&req, &status);
    if (ierr != MPI_SUCCESS) MPI_Abort(MPI_COMM_WORLD, 3);

    if (MPI_PROC_NULL != status.MPI_SOURCE) {
        if (MPI_ANY_SOURCE == status.MPI_SOURCE) {
            printf("got MPI_ANY_SOURCE=%d instead of MPI_PROC_NULL=%d\n", status.MPI_SOURCE, MPI_PROC_NULL);
        } else {
            printf("got %d instead of MPI_PROC_NULL=%d\n", status.MPI_SOURCE, MPI_PROC_NULL);
        }
    } else {
        printf("OK\n");
    }

    MPI_Finalize();
    return 0;
}

