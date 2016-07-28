/****************************************************************************
* mpifileout.c
* DESCRIPTION:  Output using MPI IO functions
*
*  This works correctly with NFS because NFS provides locking.  It may
*  not work correctly with PVFS ?
******************************************************************************/

#include "mpi.h"
#define array_size 100

static char filename[] = "output.dat";

main( int argc, char **argv )
{
    int myrank, commsize;
    MPI_File outfile;
    MPI_Status status;
    int nbytes, myarray[array_size], mode, i;

    /* initialize MPI */
    MPI_Init( &argc, &argv );
    MPI_Comm_rank( MPI_COMM_WORLD, &myrank );
    MPI_Comm_size( MPI_COMM_WORLD, &commsize );

    /* initialize array */
    for (i=0; i < array_size; i++) {
      myarray[i] = 10*myrank*array_size+i;
    }

    /* open file */
    mode = MPI_MODE_CREATE | MPI_MODE_WRONLY;

    MPI_File_open( MPI_COMM_WORLD, filename, mode, MPI_INFO_NULL, &outfile );

    /* set file view */
    MPI_File_set_view( outfile, myrank*array_size*sizeof(MPI_INT), MPI_INT, MPI_INT, "native", MPI_INFO_NULL );

    /*  write buffer to file */
    MPI_File_write( outfile, &myarray[0], array_size, MPI_INT, &status );

    /* print out number of bytes written */
    MPI_Get_elements( &status, MPI_CHAR, &nbytes );
    printf( "TASK %d ====== number of bytes written = %d ======\n", myrank, nbytes );

    /* close file */
    MPI_File_close( &outfile );

    /* finalize MPI */
    MPI_Finalize();
}
