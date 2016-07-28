
#include <mpi.h>
#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <unistd.h>

#define NUM_BLOCKS 1
#define BLOCK_SIZE 1000

int main(int argc, char** argv)
{

    MPI_File fh;
    MPI_Datatype file_type, mem_type;
    void *data = NULL;
    int rc, i, rank;
    MPI_Aint disp[NUM_BLOCKS];
    int block_lens[NUM_BLOCKS];

    MPI_Init (&argc, &argv);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    for(i=0 ; i<NUM_BLOCKS ; i++) {
        disp[i] = (MPI_Aint)((BLOCK_SIZE+1555) * i);
        block_lens[i] = BLOCK_SIZE;
    }

    data = malloc(BLOCK_SIZE);
    memset(data, 0, BLOCK_SIZE);

    if(0 == rank) {
        //MPI_Type_create_hindexed_block(NUM_BLOCKS, BLOCK_SIZE, disp, MPI_BYTE, &file_type);
        MPI_Type_create_hindexed(NUM_BLOCKS, block_lens, disp, MPI_BYTE, &file_type);
        MPI_Type_create_hvector(NUM_BLOCKS, BLOCK_SIZE, 0, MPI_BYTE, &mem_type);
    }
    else {
        //MPI_Type_create_hindexed_block(0, BLOCK_SIZE, disp, MPI_BYTE, &file_type);
        MPI_Type_create_hindexed(0, block_lens, disp, MPI_BYTE, &file_type);
        MPI_Type_create_hvector(0, BLOCK_SIZE, 0, MPI_BYTE, &mem_type);
    }

    MPI_Type_commit(&file_type);
    MPI_Type_commit(&mem_type);

    if(MPI_File_open (MPI_COMM_WORLD, argv[1], MPI_MODE_RDWR | MPI_MODE_CREATE,
                      MPI_INFO_NULL, &fh) != 0) {
        printf("Can't open file: %s\n",argv[1]);
        exit(1);
    }

    printf("SET VIEW\n");
    if (MPI_SUCCESS != MPI_File_set_view(fh, 2144, MPI_BYTE, 
                                         file_type, "native", MPI_INFO_NULL)) {
        printf ("ERROR SET VIEW\n");
        exit(1);
    }

    printf("WRITING\n");
    /* write everything */
    rc =  MPI_File_write_at_all (fh, 
                                 0, 
                                 data, 
                                 1, 
                                 mem_type, 
                                 MPI_STATUS_IGNORE);
    if (rc != MPI_SUCCESS){
        printf ("%d ERROR WRITE AT ALL\n", rc);
        exit(1);
    }
    MPI_File_close(&fh);

    MPI_Type_free (&mem_type);
    MPI_Type_free(&file_type);

    MPI_Finalize ();

    free(data);
    return 0;
}

