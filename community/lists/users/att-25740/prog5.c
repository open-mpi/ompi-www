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

/* This test file illustrates how in certain circumstances, a file-backed
 * mmaped area cannot correctly received data sent from an MPI_Send call.
 *
 * This program wants to run on 2 distinct nodes connected with
 * infiniband.
 *
 * Normal behaviour of the program consists in printing output similar to
 * (order may vary):
per-node buffer has size 12232 bytes
node 0 iteration 0, lead word received from peer is 0x00000401 [ok]
node 0 iteration 1, lead word received from peer is 0x00000801 [ok]
node 0 iteration 2, lead word received from peer is 0x00000c01 [ok]
node 0 iteration 3, lead word received from peer is 0x00001001 [ok]
 *
 * Abnormal behaviour is when the job ends with MPI_Abort after printing
 * a line wuch as:
node 0 iteration 1, lead word received from peer is 0x00000000 [NOK]
 *
 * Each iteration of the main loop does the same thing.
 *  - ranks 0 and 1 both own a local buffer.
 *  - each fills it with (deterministically known) data.
 *  - rank 0 collects the data from rank 1's local buffer
 *    (whose contents should be no mystery), and writes this to a
 *    file-backed mmaped area.
 *  - rank 0 compares what it receives with what it knows it *should
 *  have* received.
 *
 * The final check performed by rank 0 fails if the following conditions
 * are met:
 *
 *  - the openib btl is used among the 2 nodes
 *  - a file-backed mmaped area is used for receiving the data.
 *  - the write is done to a newly created file.
 *  - per-node buffer is large enough.
 * 
 * The first condition is controlled by the btl mca.
 * The second one is controlled by the flag below. Undefining it makes
 * the bug go away.
 */
#define USE_MMAP_FOR_FILE_IO
/* Whether we create a new file for the write is achieved by enabling any
 * of the two flags below. Undefining both makes the bug go away. */
#define WRITE_TO_TEMP_FILE_FIRST
#define xERASE_FILE_AFTER_WRITE
/* The size of the per-node buffer is controlled by the -s command line
 * argument */


/*
 * This is a simplified version of a more complex testcase, which showed
 * erroneous behaviour with openmpi versions 1.7 to 1.8.4rc1
 * (current), but not with older openmpi, nor with
 * mvapich2-2.1a
 *
 * The current file has only been tested with openmpi 1.8.3 and 1.8.4rc1.
 */

/* For compiling, one may do:
     
      MPI=$HOME/Packages/openmpi-1.8.3
      $MPI/bin/mpicc -W -Wall -std=c99 -O0 -g prog5.c
     
 * For running, assuming /tmp/hosts contains the list of 2 nodes, and
 * $SSH is used to connect to these:
     
      SSH_AUTH_SOCK= DISPLAY= $MPI/bin/mpiexec -machinefile /tmp/hosts --mca plm_rsh_agent $SSH --mca rmaps_base_mapping_policy node -n 2  ./a.out -s 2048
     
 * If you pass the argument --mca btl ^openib to the mpiexec command
 * line, no bug.
 */

/*
 * Tested (FAIL means that setting USE_MMAP_FOR_FILE_IO above yields to a
 * program failure, while we succeed if it is unset).
 *
 * IB boards MCX353A-FCBT, fw rev 2.32.5100, MLNX_OFED_LINUX-2.3-1.0.1-debian7.5-x86_64
 * openmpi-1.8.4rc1 FAIL   (ok with --mca btl ^openib)
 * openmpi-1.8.3 FAIL      (ok with --mca btl ^openib)
 *
 * The previous, longer test case also failed with IB boards MHGH29-XTC.
 */


unsigned long * get_file_write_buffer(const char * filename, int * pfd, size_t chunksize, MPI_Comm wr)
{
    int njobs;
    int rank;
    MPI_Comm_size(wr, &njobs);
    MPI_Comm_rank(wr, &rank);

    *pfd = -1;
    if (rank) return NULL;

    size_t siz = njobs * chunksize;
    size_t wsiz = ((siz - 1) | (sysconf (_SC_PAGESIZE)-1)) + 1;

    void * recvbuf = NULL;      // only used by leader
    int fd = -1;                // only used by leader

    int rc;

    char * filename_pre;
    rc = asprintf(&filename_pre, "%s.tmp", filename);
    if (rc < 0) abort();
#ifdef  WRITE_TO_TEMP_FILE_FIRST
    fd = open(filename_pre, O_RDWR | O_CREAT | O_EXCL, 0666);
#else
    fd = open(filename, O_RDWR | O_CREAT, 0666);
#endif
    if (fd < 0) abort();

    rc = ftruncate(fd, wsiz);
    if (rc < 0) abort();

#ifdef USE_MMAP_FOR_FILE_IO
    recvbuf = mmap(NULL, wsiz, PROT_READ | PROT_WRITE, MAP_SHARED, fd, 0);
    if (recvbuf == MAP_FAILED) abort();
#else
    recvbuf = malloc(wsiz);
    if (!recvbuf) abort();
#endif
    *pfd = fd;
    free(filename_pre);

    return recvbuf;
}

#ifndef MAYBE_UNUSED
#ifdef __GNUC__
#define MAYBE_UNUSED __attribute__ ((unused))
#else
#define MAYBE_UNUSED
#endif
#endif

void flush_file_write_buffer(const char * filename MAYBE_UNUSED, void * buf, int fd, size_t chunksize, MPI_Comm wr)
{
    int njobs;
    int rank;
    MPI_Comm_size(wr, &njobs);
    MPI_Comm_rank(wr, &rank);
    if (rank) return;
    size_t siz = njobs * chunksize;
    size_t wsiz = ((siz - 1) | (sysconf (_SC_PAGESIZE)-1)) + 1;

#ifdef USE_MMAP_FOR_FILE_IO
    munmap(buf, wsiz);
#else
    write(fd, buf, wsiz);
    free(buf);
#endif
    int rc = ftruncate(fd, siz);
    close(fd);
    if (rc < 0) abort();

#ifdef  WRITE_TO_TEMP_FILE_FIRST
    char * filename_pre;
    rc = asprintf(&filename_pre, "%s.tmp", filename);
    if (rc < 0) abort();
    /* unlink before rename is necessary under windows */
    unlink(filename);
    rc = rename(filename_pre, filename);
    if (rc < 0) abort();
    free(filename_pre);
#endif

#ifdef  ERASE_FILE_AFTER_WRITE
    unlink(filename);
#endif
}

int main(int argc, char * argv[])
{
    MPI_Init(&argc, &argv);
    int size;
    int rank;
    int eitems = 1530;  /* eitems >= 1530 seem to fail on my cluster */
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    MPI_Comm_size(MPI_COMM_WORLD, &size);

    if (size != 2) abort();

    if (argc >= 3 && strcmp(argv[1], "-s") == 0) {
        eitems = atoi(argv[2]);
    }

    size_t chunksize = eitems * sizeof(unsigned long);
    if (!rank)
        printf("per-node buffer has size %zu bytes\n", chunksize);

    for(int iter = 0 ; iter < 4 ; iter++) {
        unsigned long magic = (1 + iter) << 10;
        unsigned long * localbuf = malloc(chunksize);

        for(int item = 0 ; item < eitems ; item++) {
            localbuf[item] = magic + rank;
        }

        /* rank 0: localbuf has {magic, ... }
         * rank 1: localbuf has {magic+1, ... }
         */

        int ok = 1;

        if (rank == 0) {
            int fd;
            unsigned long * ptr = get_file_write_buffer("/tmp/u", &fd, chunksize, MPI_COMM_WORLD);
            /* fill first half with local data at rank 0 */
            memcpy(ptr, localbuf, chunksize);
            /* fill second half with data from rank 1 */
            MPI_Recv(ptr + eitems, eitems, MPI_UNSIGNED_LONG, !rank, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
            /* we're at rank 0, ptr[0] should be magic, and ptr[eitems]
             * should be magic + 1*/
            ok = (ptr[eitems] == magic + !rank);
            printf("node %d iteration %d, lead word received from peer is 0x%08lx [%s]\n", rank, iter, ptr[eitems], ok?"ok":"NOK");
            flush_file_write_buffer("/tmp/u", ptr, fd, chunksize, MPI_COMM_WORLD);
        } else {
            /* send our local data to rank 0 for feeding the write buffer */
            MPI_Send(localbuf, eitems, MPI_UNSIGNED_LONG, 0, 0, MPI_COMM_WORLD);
        }

        /* only rank 0 has performed a new check */
        MPI_Bcast(&ok, 1, MPI_INT, 0, MPI_COMM_WORLD);
        free(localbuf);

        if (!ok) MPI_Abort(MPI_COMM_WORLD, 1);
    }

    MPI_Finalize();
}
