#define _GNU_SOURCE
#include <sys/types.h>
#include <sys/stat.h>
#include <fcntl.h>
#include <stdio.h>
#include <stdint.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
#include <assert.h>
#include <mpi.h>
#include <sys/mman.h>

/* This test file illustrates how in certain circumstances, an mmap area
 * cannot correctly receive data sent from an MPI_Send call.
 *
 * This program wants to run on 2 distinct nodes connected with
 * infiniband.
 *
 * Normal behaviour of the program consists in printing output similar
 * to:
node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
node 0 iteration 1, lead word received from peer is 0x00000801 [ok]
node 0 iteration 2, lead word received from peer is 0x00000c01 [ok]
node 0 iteration 3, lead word received from peer is 0x00001001 [ok]
 *
 * Abnormal behaviour is when the job ends with MPI_Abort after printing
 * a line such as:
node 0 iteration 1, lead word received from peer is 0x00000000 [NOK]
 *
 * Each iteration of the main loop does the same thing.
 *  - rank 0 allocates a buffer with mmap
 *  - rank 1 sends data there with MPI_Send
 *  - rank 0 verifies that the data has been correctly received.
 *  - rank 0 frees the buffer with munmap
 *
 * The final check performed by rank 0 fails if the following conditions
 * are met:
 *
 *  - the openib btl is used among the 2 nodes
 *  - allocation is done via mmap/munmap (not via malloc/free)
 *  - the send is large enough.
 * 
 * The first condition is controlled by the btl mca.
 * The size of the transfer is controlled by the -s command line
 * argument */

/* For compiling, one may do:
     
      MPI=$HOME/Packages/openmpi-1.8.3
      $MPI/bin/mpicc -W -Wall -std=c99 -O0 -g prog5.c
     
 * For running, assuming /tmp/hosts contains the list of 2 nodes, and
 * $SSH is used to connect to these:
     
      SSH_AUTH_SOCK= DISPLAY= $MPI/bin/mpiexec -machinefile /tmp/hosts --mca plm_rsh_agent $SSH --mca rmaps_base_mapping_policy node -n 2  ./a.out -s 2048
     
 */

/*
 * Tested (FAIL means that setting USE_MMAP_FOR_FILE_IO above yields to a
 * program failure, while we succeed if it is unset).
 *
 * IB boards MCX353A-FCBT, fw rev 2.32.5100, MLNX_OFED_LINUX-2.3-1.0.1-debian7.5-x86_64
 * openmpi-1.8.4rc1 FAIL   (ok with --mca btl ^openib)
 * openmpi-1.8.3 FAIL      (ok with --mca btl ^openib)
 *
 * A previous, longer test case also failed with IB boards MHGH29-XTC.
 */


/* Passing --mca mpi_leave_pinned 0 eliminates the bug */

int main(int argc, char * argv[])
{
    MPI_Init(&argc, &argv);
    int size;
    int rank;
    int eitems = 1530;  /* eitems >= 1530 seem to fail on my cluster */
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    MPI_Comm_size(MPI_COMM_WORLD, &size);

    if (size != 2) abort();

    int use_mmap = 1;

    for(argc--, argv++; argc ; ) {
        if (argc >= 2 && strcmp(argv[0], "-s") == 0) {
            eitems = atoi(argv[1]);
            argc -= 2;
            argv += 2;
            continue;
        }
        if (strcmp(argv[0], "-malloc") == 0) {
            use_mmap = 0;
            argc--, argv++;
            continue;
        }
        fprintf(stderr, "Unexpected: %s\n", argv[0]);
        exit(EXIT_FAILURE);
    }

    size_t chunksize = eitems * sizeof(unsigned long);
    size_t wsiz = ((chunksize - 1) | (sysconf (_SC_PAGESIZE)-1)) + 1;

    unsigned long * localbuf = malloc(chunksize);

    for(int iter = 0 ; iter < 4 ; iter++) {
        unsigned long magic = (1 + iter) << 10;

        int ok = 1;

        if (rank == 1) {
            for(int item = 0 ; item < eitems ; item++) {
                localbuf[item] = magic + rank;
            }
            MPI_Send(localbuf, eitems, MPI_UNSIGNED_LONG, 0, 0, MPI_COMM_WORLD);
        } else {
            unsigned long * recvbuf;
            if (use_mmap) {
                recvbuf = mmap(NULL, wsiz, PROT_READ | PROT_WRITE, MAP_PRIVATE | MAP_ANONYMOUS, -1, 0);
            } else {
                recvbuf = malloc(wsiz);
            }
            MPI_Recv(recvbuf, eitems, MPI_UNSIGNED_LONG, !rank, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
            ok = (*recvbuf == magic + !rank);
            fprintf(stderr, "node %d iteration %d, lead word received from peer is 0x%08lx [%s]\n", rank, iter, *recvbuf, ok?"ok":"NOK");
            if (use_mmap) {
                munmap(recvbuf, wsiz);
            } else {
                free(recvbuf);
            }
        }

        /* only rank 0 has performed a new check */
        MPI_Bcast(&ok, 1, MPI_INT, 0, MPI_COMM_WORLD);

        if (!ok) MPI_Abort(MPI_COMM_WORLD, 1);
    }
    free(localbuf);

    MPI_Finalize();
}
