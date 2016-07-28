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

/* This test file illustrates how in certain circumstances, using a
 * file-backed mmaped area for receiving data via an MPI_Gather call
 * perturbates data flow within MPI_Sendrecv calls in the same program.
 *
 * This program wants to run on 4 distinct nodes.
 *
 * Normal behaviour of the program consists in printing identical pairs
 * of md5 hashes for the files /tmp/u and /tmp/v, e.g. as with the
 * following output:
 * 
b28afcaeb2824fb298dace8da9f5b0f0  /tmp/u
b28afcaeb2824fb298dace8da9f5b0f0  /tmp/v
511e3325d7edf693c19c25dcfd1ce231  /tmp/u
511e3325d7edf693c19c25dcfd1ce231  /tmp/v
(repeated many times ; actual hashes may differ from one execution to another).
 *
 * Abnormal behaviour is when different md5 hashes are obtained, which
 * triggers MPI_Abort().
 *
 * Each iteration of the main loop is supposed to do the same
 * thing twice, once involving reduce_scatter, and once involving a
 * supposedly identical implementation. Both computations are followed by
 * a saving computed data to a file in /tmp/. A divergence is witnessed if the
 * conditions below are met.
 *
 *  - use the openib btl among the 4 nodes
 *  - use file-backed mmaped areas for doing the save.
 * 
 * The former condition is controlled by the btl mca, while the latter is
 * controlled by the flag below. Undefining it makes the bug go away.
 */
#define USE_MMAP_FOR_FILE_IO
/* Upon failure, it seems that the file which gets written ends with an
 * unexpected chunk of zeroes.
 */


/*
 * Instructions to reproduce:
 *
 *  - the bug seems to happen with openmpi versions 1.7 to 1.8.3
 *  (current).
 *  - the bug does not seem to happen with older openmpi, nor with
 *  mvapich2-2.1a
 *  - a setup with 4 distinct IB nodes is mandated to observe the
 *  problem.
 *
 * For compiling, one may do:
     
      MPI=$HOME/Packages/openmpi-1.8.3
      $MPI/bin/mpicc -W -Wall -std=c99 -O0 -g prog2.c
     
 * For running, assuming /tmp/hosts contains the list of 4 nodes, and
 * $SSH is used to connect to these:
     
      SSH_AUTH_SOCK= DISPLAY= $MPI/bin/mpiexec -machinefile /tmp/hosts --mca plm_rsh_agent $SSH --mca rmaps_base_mapping_policy node -n 4  ./a.out
     
 * If you pass the argument --mca btl ^openib to the mpiexec command
 * line, no crash.
 */

/*
 * Tested (FAIL means that setting USE_MMAP_FOR_FILE_IO above yields to a
 * program failure, while we succeed if it is unset).
 *
 * IB boards MCX353A-FCBT, fw rev 2.32.5100, MLNX_OFED_LINUX-2.3-1.0.1-debian7.5-x86_64
 * openmpi-1.8.3 FAIL   (ok with --mca btl ^openib)
 * openmpi-1.8.2 FAIL   (ok with --mca btl ^openib)
 * openmpi-1.8.1 FAIL   (ok with --mca btl ^openib)
 * openmpi-1.7.4 FAIL   (ok with --mca btl ^openib)
 * openmpi-1.7 FAIL     (ok with --mca btl ^openib)
 * openmpi-1.6.5 ok
 * openmpi-1.4.5 ok
 * mvapich2-2.1a ok
 *
 * IB boards MCX353A-FCBT, fw rev 2.30.8000, debian 7.5 stock + kernel 3.13.10-1~bpo70+1
 * openmpi-1.8.2 FAIL   (ok with --mca btl ^openib)
 * mvapich2-2.0 ok
 *
 * IB boards MHGH29-XTC, fw rev 2.8.600, debian 7.6 stock
 * openmpi-1.8.3 FAIL   (ok with --mca btl ^openib)
 * openmpi-1.4.5 ok
 * mvapich2-1.8a2 ok
 */



/* This is an alternative reduce_scatter_block implementation (although
 * it has the interface of reduce_scatter). As far as I can tell, it is
 * correct. */
int my_MPI_Reduce_scatter(void *sendbuf, void *recvbuf, int *recvcounts,
                MPI_Datatype datatype, MPI_Op op, MPI_Comm wr)
{
    int njobs;
    int rank;
    MPI_Comm_size(wr, &njobs);
    MPI_Comm_rank(wr, &rank);

    int tsize;
    MPI_Type_size(datatype, &tsize);

    assert(sendbuf == MPI_IN_PLACE);
    for(int i = 1 ; i < njobs ; i++) {
        assert (recvcounts[i] == recvcounts[0]);
    }
    void * v = recvbuf;
    int eitems = recvcounts[0];
    
    static size_t rsbuf_size = 0;
    static unsigned long * rsbuf[2];

    size_t needed = eitems * tsize;

    if (rsbuf_size < needed) {
        rsbuf[0] = malloc(needed);
        rsbuf[1] = malloc(needed);
        rsbuf_size = needed;
    }

    memset(rsbuf[0], 0, eitems * tsize);

    int srank = (rank + 1) % njobs;
    int drank = (rank + njobs - 1) % njobs;

    for (int i = 0, w = 0; i < njobs; i++, w^=1) {
        int j0 = ((rank + i + 1) % njobs) * eitems;
        void * share = (void*)(((char*)v) + (j0 * tsize));
#if MPI_VERSION >= 3
        MPI_Reduce_local(share, rsbuf[w], eitems, datatype, op);
#else
        {
            assert(datatype == MPI_UNSIGNED_LONG);
            assert(op == MPI_BXOR);
            unsigned long * a = share;
            unsigned long * b = rsbuf[w];
            for(int k = 0 ; k < eitems ; k++) {
                b[k] ^= a[k];
            }
        }
#endif
        if (i == njobs - 1) {
            memcpy(v, rsbuf[w], eitems * tsize);
            break;
        }
        MPI_Sendrecv(rsbuf[w],  eitems, datatype, drank, (i<<16) + rank,
                     rsbuf[!w], eitems, datatype, srank, (i<<16) + srank,
                     wr, MPI_STATUS_IGNORE);
    }
    return 0;
}

/* Save the file contained in the concatenation of the memory areas on
 * all calling nodes */
int save(const char * filename, void * buf, size_t mysize, MPI_Comm wr)
{
    int njobs;
    int rank;
    MPI_Comm_size(wr, &njobs);
    MPI_Comm_rank(wr, &rank);

    size_t siz = njobs * mysize;
    size_t wsiz = ((siz - 1) | (sysconf (_SC_PAGESIZE)-1)) + 1;

    void * recvbuf = NULL;      // only used by leader
    int fd = -1;                // only used by leader
    int err;

    char * filename_pre;
    int rc;

    if (!rank) {
        rc = asprintf(&filename_pre, "%s.tmp", filename);
        if (rc < 0) abort();
        fd = open(filename_pre, O_RDWR | O_CREAT, 0666);
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
    }

    err = MPI_Gather(buf, mysize, MPI_BYTE, recvbuf, mysize, MPI_BYTE, 0, wr);
    if (err) abort();

    if (!rank) {
#ifdef USE_MMAP_FOR_FILE_IO
        munmap(recvbuf, wsiz);
#else
        write(fd, recvbuf, wsiz);
        free(recvbuf);
#endif
        rc = ftruncate(fd, siz);
        close(fd);
        if (rc < 0) abort();
        /* unlink before rename is necessary under windows */
        unlink(filename);
        rc = rename(filename_pre, filename);
        if (rc < 0) abort();
        free(filename_pre);
    }
    return 1;
}

int main(int argc, char * argv[])
{
    MPI_Init(&argc, &argv);
    int size;
    int rank;
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    MPI_Comm_size(MPI_COMM_WORLD, &size);

    if (size != 4) abort();

    /* row comm */
    MPI_Comm rcomm;
    MPI_Comm_split(MPI_COMM_WORLD, rank / 2, rank, &rcomm);

    /* col comm */
    MPI_Comm ccomm;
    MPI_Comm_split(MPI_COMM_WORLD, rank % 2, rank, &ccomm);

    int rowidx; MPI_Comm_rank(ccomm, &rowidx);
    int colidx; MPI_Comm_rank(rcomm, &colidx);

    int eitems = 16384;  /* eitems >= 829 seem to fail on my cluster */
    int rc;

    for(int i = 0 ; i < 10 ; i++) {
        unsigned long * vec = malloc(size * eitems * sizeof(unsigned long));
        unsigned long * vec2 = malloc(size * eitems * sizeof(unsigned long));
        for(int item = 0 ; item < size * eitems ; item++) {
            vec[item] = (i+item) * (1 + rank);
        }
        int recvcounts[2] = { eitems, eitems, };
        memcpy(vec2, vec, size * eitems * sizeof(unsigned long));

        /* Operation done on each iteration:
         *
         * Assume nodes A B C D have data A0,A1 B0,B1 C0,C1 D0,D1
         *
         * The first RS operation leaves (A0+B0) (A1+B1) (C0+D0) (C1+D1)
         * The allgather puts:
         *      (A0+B0,A1+B1) (A0+B0,A1+B1) (C0+D0,C1+D1) (C0+D0,C1+D1)
         * The file saved should then be:
         *      (A0+B0,A1+B1,C0+D0,C1+D1)
         * (where + is binary XOR)
         */

        /* Create a first file */
        MPI_Reduce_scatter(MPI_IN_PLACE, vec, recvcounts, MPI_UNSIGNED_LONG, MPI_BXOR, rcomm);
        memmove(vec + colidx * eitems, vec,  eitems * sizeof(unsigned long));
        MPI_Allgather(MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, vec, eitems, MPI_UNSIGNED_LONG, rcomm);
        if (!colidx)
            save("/tmp/u", vec, 2 * eitems * sizeof(unsigned long), ccomm);

        /* Now create a second file, which should be identical to the
         * other */
        my_MPI_Reduce_scatter(MPI_IN_PLACE, vec2, recvcounts, MPI_UNSIGNED_LONG, MPI_BXOR, rcomm);
        memmove(vec2 + colidx * eitems, vec2,  eitems * sizeof(unsigned long));
        MPI_Allgather(MPI_IN_PLACE, 0, MPI_DATATYPE_NULL, vec2, eitems, MPI_UNSIGNED_LONG, rcomm);
        if (!colidx)
            save("/tmp/v", vec2, 2 * eitems * sizeof(unsigned long), ccomm);

        /* compare memory areas on all nodes */
        int memcheck = memcmp(vec, vec2, 2 * eitems * sizeof(unsigned long)) == 0;
        MPI_Allreduce(MPI_IN_PLACE, &memcheck, 1, MPI_INT, MPI_BAND, MPI_COMM_WORLD);
        /* compare files */
        int filecheck = 0;
        if (!rank) {
            system("md5sum /tmp/u");
            system("md5sum /tmp/v");
            rc = system("diff -q /tmp/u /tmp/v");
            filecheck = rc == 0;
        }
        MPI_Bcast(&filecheck, 1, MPI_INT, 0, MPI_COMM_WORLD);
        
        if (!rank) {
            if (!filecheck || !memcheck) {
                fprintf(stderr, "Iteration %d: mem check %s, file check %s\n",
                        i,
                        memcheck ? "ok" : "NOK",
                        filecheck ? "ok" : "NOK");
            }
        }
        if (!filecheck || !memcheck)
            MPI_Abort(MPI_COMM_WORLD, 1);
        free(vec);
        free(vec2);
    }

    MPI_Finalize();
}
