/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 * Copyright by The HDF Group.                                               *
 * Copyright by the Board of Trustees of the University of Illinois.         *
 * All rights reserved.                                                      *
 *                                                                           *
 * This file is part of HDF5.  The full HDF5 copyright notice, including     *
 * terms governing use, modification, and redistribution, is contained in    *
 * the files COPYING and Copyright.html.  COPYING can be found at the root   *
 * of the source code distribution tree; Copyright.html can be found at the  *
 * root level of an installed copy of the electronic HDF5 document set and   *
 * is linked from the top-level documents page.  It can also be found at     *
 * http://hdfgroup.org/HDF5/doc/Copyright.html.  If you do not have          *
 * access to either file, you may request a copy from help@hdfgroup.org.     *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
/* Simple MPI-IO program testing if a parallel file can be created.
 * Default filename can be specified via first program argument.
 * Each process writes something, then reads all data back.
 */

#include <stdio.h>
#include <mpi.h>
#ifndef MPI_FILE_NULL           /*MPIO may be defined in mpi.h already       */
#   include <mpio.h>
#endif

#define DIMSIZE	10		/* dimension size, avoid powers of 2. */
#define PRINTID printf("Proc %d: ", mpi_rank)

main(int ac, char **av)
{
    char hostname[128];
    int  mpi_size, mpi_rank;
    MPI_File fh;
    char *filename = "./mpitest.data";
    char mpi_err_str[MPI_MAX_ERROR_STRING];
    int  mpi_err_strlen;
    int  mpi_err;
    char writedata[DIMSIZE], readdata[DIMSIZE];
    char expect_val;
    int  i, irank; 
    int  nerrors = 0;		/* number of errors */
    MPI_Offset  mpi_off;
    MPI_Status  mpi_stat;

    MPI_Init(&ac, &av);
    MPI_Comm_size(MPI_COMM_WORLD, &mpi_size);
    MPI_Comm_rank(MPI_COMM_WORLD, &mpi_rank);

    /* get file name if provided */
    if (ac > 1){
	filename = *++av;
    }
    if (mpi_rank==0){
	printf("Testing simple C MPIO program with %d processes accessing file %s\n",
	    mpi_size, filename);
        printf("    (Filename can be specified via program argument)\n");
    }

    /* show the hostname so that we can tell where the processes are running */
    if (gethostname(hostname, 128) < 0){
	PRINTID;
	printf("gethostname failed\n");
	MPI_Abort(MPI_COMM_WORLD, 1);
    }
    PRINTID;
    printf("hostname=%s\n", hostname);

    if ((mpi_err = MPI_File_open(MPI_COMM_WORLD, filename,
	    MPI_MODE_RDWR | MPI_MODE_CREATE | MPI_MODE_DELETE_ON_CLOSE,
	    MPI_INFO_NULL, &fh))
	    != MPI_SUCCESS){
	MPI_Error_string(mpi_err, mpi_err_str, &mpi_err_strlen);
	PRINTID;
	printf("MPI_File_open failed (%s)\n", mpi_err_str);
	MPI_Abort(MPI_COMM_WORLD, 1);
    }

    /* each process writes some data */
    for (i=0; i < DIMSIZE; i++)
	writedata[i] = mpi_rank*DIMSIZE + i;
    mpi_off = mpi_rank*DIMSIZE;
    if ((mpi_err = MPI_File_write_at(fh, mpi_off, writedata, DIMSIZE, MPI_BYTE,
	    &mpi_stat))
	    != MPI_SUCCESS){
	MPI_Error_string(mpi_err, mpi_err_str, &mpi_err_strlen);
	PRINTID;
	printf("MPI_File_write_at offset(%ld), bytes (%d), failed (%s)\n",
		(long) mpi_off, (int) DIMSIZE, mpi_err_str);
	MPI_Abort(MPI_COMM_WORLD, 1);
    };

    /* make sure all processes has done writing. */
    MPI_Barrier(MPI_COMM_WORLD);

    /* each process reads all data and verify. */
    for (irank=0; irank < mpi_size; irank++){
	mpi_off = irank*DIMSIZE;
	if ((mpi_err = MPI_File_read_at(fh, mpi_off, readdata, DIMSIZE, MPI_BYTE,
		&mpi_stat))
		!= MPI_SUCCESS){
	    MPI_Error_string(mpi_err, mpi_err_str, &mpi_err_strlen);
	    PRINTID;
	    printf("MPI_File_read_at offset(%ld), bytes (%d), failed (%s)\n",
		    (long) mpi_off, (int) DIMSIZE, mpi_err_str);
	    MPI_Abort(MPI_COMM_WORLD, 1);
	};
	for (i=0; i < DIMSIZE; i++){
	    expect_val = irank*DIMSIZE + i;
	    if (readdata[i] != expect_val){
		PRINTID;
		printf("read data[%d:%d] got %d, expect %d\n", irank, i,
			readdata[i], expect_val);
		nerrors++;
	    }
	}
    }
    if (nerrors)
	MPI_Abort(MPI_COMM_WORLD, 1);

    MPI_File_close(&fh);

    /* Verify that created file is deleted upon closing. */
    if ((mpi_err = MPI_File_open(MPI_COMM_WORLD, filename, MPI_MODE_RDWR,
	    MPI_INFO_NULL, &fh))
	    == MPI_SUCCESS){
	MPI_File_close(&fh);
	PRINTID;
	printf("File existed. MPI_MODE_DELETE_ON_CLOSE failed.\n");
	MPI_Abort(MPI_COMM_WORLD, 1);
    }

    /* Verify that MPI_MODE_EXCL works correctly with non-existing file.
     * It has been reported that this fails in the Panasas parallel filesystem
     * using the PathScale MPI. (See Bug 1468)
     */
    if ((mpi_err = MPI_File_open(MPI_COMM_WORLD, filename,
	    MPI_MODE_RDWR | MPI_MODE_CREATE | MPI_MODE_EXCL,
	    MPI_INFO_NULL, &fh))
	    != MPI_SUCCESS){
	MPI_Error_string(mpi_err, mpi_err_str, &mpi_err_strlen);
	PRINTID;
	printf("MPI_File_open with MPI_MODE_EXCL failed (%s)\n", mpi_err_str);
	MPI_Abort(MPI_COMM_WORLD, 1);
    }
    MPI_File_close(&fh);

    /* Verify MPI_File_delete works. Only 1 calls, the other waits. */
    if (mpi_rank==0){
	if ((mpi_err = MPI_File_delete(filename, MPI_INFO_NULL)) != MPI_SUCCESS)
	    MPI_Error_string(mpi_err, mpi_err_str, &mpi_err_strlen);
    }
    MPI_Bcast(&mpi_err, 1, MPI_INT, 0, MPI_COMM_WORLD);
    if (mpi_err != MPI_SUCCESS){
       if (mpi_rank==0){
	    PRINTID;
	    printf("MPI_File_delete failed (%s)\n", mpi_err_str);
	}
	MPI_Abort(MPI_COMM_WORLD, 1);
    }

    /* Check file no longer exist. */
    if ((mpi_err = MPI_File_open(MPI_COMM_WORLD, filename, MPI_MODE_RDWR,
	    MPI_INFO_NULL, &fh))
	    == MPI_SUCCESS){
	MPI_File_close(&fh);
	PRINTID;
	printf("File existed. MPI_File_delete failed.\n");
	MPI_Abort(MPI_COMM_WORLD, 1);
    }


    PRINTID;
    printf("all tests passed\n");

    MPI_Finalize();
    return 0;
}
