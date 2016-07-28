#include "mpi.h"
#include <stdio.h>
#include <stdlib.h>

typedef struct {
    long long *offsets;
    int *lens;
    MPI_Aint *mem_ptrs;
    int count;
} ADIOI_Access;

#define STRIDE	190
#define NB	129
#define NPROCS	4
#define SIZE	(STRIDE*NB*NPROCS)
char buf1[SIZE], buf2[SIZE], my_procname[MPI_MAX_PROCESSOR_NAME];

int main(int argc, char **argv) {
    int myrank, nprocs, i, j, k, my_procname_len, value, buf_idx = 0, nprocs_recv, nprocs_send;
    ADIOI_Access *others_req;
    MPI_Datatype *recv_types;
    MPI_Request *requests;
    MPI_Status *statuses;

    MPI_Init(&argc,&argv);
    MPI_Comm_size(MPI_COMM_WORLD, &nprocs);
    MPI_Comm_rank(MPI_COMM_WORLD, &myrank);
    if (nprocs != NPROCS) {
        printf("This program must be run with exactly 4 processes\n");
        goto exit;
    }

    MPI_Get_processor_name(my_procname, &my_procname_len);
    printf("Process %d running on %s\n", myrank, my_procname);
    MPI_Barrier(MPI_COMM_WORLD);

    for (i=0; i<SIZE; i++) buf1[i] = (char) myrank;

    nprocs_recv = 0;
    nprocs_send = 1;
    if (myrank == 0) nprocs_recv = nprocs;

    recv_types = (MPI_Datatype *) malloc((nprocs_recv) * sizeof(MPI_Datatype));
    requests = (MPI_Request *) malloc((nprocs_send + nprocs_recv)* sizeof(MPI_Request));
    statuses = (MPI_Status *) malloc((nprocs_send + nprocs_recv) * sizeof(MPI_Status));

    /* Main exchange function
       for STRIDE = 200 :
       Proc 0 owns     0-  199,   400-  599,   800-  999 .... 25600-25799
       Proc 1 owns   200-  399,   600-  799,  1000- 1199 .... 25800-25999
       Proc 2 owns 26000-26199, 26400-26599, 26800-26999 .... 51600-51799
       Proc 3 owns 26200-26399, 26600-26799, 27000-27199 .... 51800-51999
       Proc 0 makes 4 Irecv to receive all data through hindexed datatypes. */

    k = 0;
    if (myrank == 0) {
        others_req = (ADIOI_Access *) malloc(nprocs*sizeof(ADIOI_Access)); 
        for (i = 0; i < nprocs; i++) {
            others_req[i].count = NB;
            others_req[i].offsets = (long long *) malloc(NB*sizeof(long long));
            others_req[i].lens = (int *) malloc(NB*sizeof(int)); 
            others_req[i].mem_ptrs = (MPI_Aint *) malloc(NB*sizeof(MPI_Aint)); 
            for (j = 0; j < NB; j++) {
                if (i==0) others_req[i].offsets[j] = j * 2 * STRIDE;
                if (i==1) others_req[i].offsets[j] = j * 2 * STRIDE + STRIDE;
                if (i==2) others_req[i].offsets[j] = j * 2 * STRIDE + 2 * NB * STRIDE;
                if (i==3) others_req[i].offsets[j] = j * 2 * STRIDE + 2 * NB * STRIDE + STRIDE;

                others_req[i].lens[j] = STRIDE;
                MPI_Address(buf2 + others_req[i].offsets[j], &(others_req[i].mem_ptrs[j]));
            }
            MPI_Type_hindexed(NB, &(others_req[i].lens[0]), &(others_req[i].mem_ptrs[0]), MPI_BYTE, recv_types + k);
            MPI_Type_commit(recv_types + k);
            MPI_Irecv(MPI_BOTTOM, 1, recv_types[k], i, myrank + i + 100 * 0, MPI_COMM_WORLD, requests + k);
            k++;
        }
    }

    printf("%d: MPI_Isend buf1=%lx size=%x to rank=%d (data=%x)\n", myrank, buf1,  STRIDE * NB, 0,  *buf1);
    MPI_Isend(buf1, STRIDE * NB, MPI_BYTE, 0, myrank + 0 + 100 * 0, MPI_COMM_WORLD, requests + k);
    k++;

    printf("%d: Before MPI_Waitall nprocs_send=%d nprocs_recv=%d\n", myrank, nprocs_send, nprocs_recv);
    MPI_Waitall(nprocs_send + nprocs_recv, requests, statuses);
    printf("%d: After MPI_Waitall\n", myrank);

    /* End of main exchange function */

    for (i = 0; i < nprocs_recv; i++) MPI_Type_free(recv_types + i);
    free(recv_types);

    if (myrank == 0) {
        for (i=0; i<SIZE; i++) {  // Verify received data in buf2
            j = (i/STRIDE) % 2;	  // j=0 for proc 0 and 2, j=1 for proc 1 and 3
            k = i/(STRIDE*NB*2);  // k=0 for proc 0 and 1, k=1 for proc=2 and 3
            if ((j == 0) && (k == 0)) value =0;
            if ((j == 1) && (k == 0)) value =1;
            if ((j == 0) && (k == 1)) value =2;
            if ((j == 1) && (k == 1)) value =3;
            if (buf2[i] != value) printf("Error: buf2[%d] != %d (%d)\n", i, value, buf2[i]);
        }
        for (i = 0; i < nprocs; i++) {
            long long *pOffset=&(others_req[i].offsets[0]);
            int *pint=&(others_req[i].lens[0]);
            MPI_Aint *pMPI_Aint=&(others_req[i].mem_ptrs[0]);
#ifdef DUMP_RECEIVED
            printf("%d: Irecv from %d (%d)\n", myrank, i, NB);
#endif
            for (k = 0; k < NB; k++) {
#ifdef DUMP_RECEIVED
                printf("  (%d)  %2.2d---> length=%d --- offsets=%ld, mem_ptrs=%lx (data=%x)\n", myrank, k, *pint, *pOffset, *pMPI_Aint, *(char*)*pMPI_Aint);
#endif
                pOffset++;
                pint++;
                pMPI_Aint++;
            }

            if (others_req[i].count) {
                free(others_req[i].offsets);
                free(others_req[i].lens);
                free(others_req[i].mem_ptrs);
            }
        }
        free(others_req);
    }
    free(statuses);
    free(requests);

    printf("%d: Waiting in Finalize\n", myrank);
    MPI_Barrier(MPI_COMM_WORLD);
exit:
    MPI_Finalize();
    return 0;
}
