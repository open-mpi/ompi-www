#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

int tryToRead(const MPI_File file, const MPI_Datatype type, const int count, 
               const size_t size, const char *typename, void *buf) {

    int ierr;
    MPI_Status status;

    size_t bufsize = (size_t)count * size;

    printf("Trying %d of %s, %lu bytes: ", count, typename, bufsize );

    ierr = MPI_File_read(file, buf, count, type, &status);

    if ( !ierr  ) {

        int gotcount;
        MPI_Get_count( &status, type, &gotcount );
        printf("successfully read %d\n", gotcount);

    } else {

        char err[MPI_MAX_ERROR_STRING];
        int len;
        MPI_Error_string(ierr, err, &len);
        printf("failed: err=%d, %s\n", ierr, err);
    
    }
    
    return ierr;
}


int tryToReadInChunks(const MPI_File file, const MPI_Datatype type, const int count, 
               const size_t size, const char *typename, void *buf, int nchunks) {

    int ierr;
    int nsofar = 0;
    int chunksize = count / nchunks;
    char *cbuf = buf;

    for (int chunk = 0; chunk < nchunks; chunk++ ) {
        int thischunk = chunksize;
        if (chunk == nchunks-1) thischunk = count - nsofar;

        printf("Chunk %d/%d: ", chunk+1, nchunks);
        ierr = tryToRead(file, type, thischunk, size, typename, &(cbuf[nsofar*size]));
               
        if (ierr) break;
        nsofar += thischunk;
    }

    return ierr;
}


int main(int argc, char *argv[]) 
{ 
    int count;
    MPI_File fh;

    MPI_Init(&argc, &argv); 

    MPI_File_open(MPI_COMM_WORLD, "/dev/zero", MPI_MODE_RDONLY, MPI_INFO_NULL, &fh); 

    char *buf = malloc( ((size_t)1 << 31)+1024 );
    if (buf == NULL) {
        printf("Malloc failed.\n");
        exit(-1);
    }

    /* integers */

    count = (1 << 28) + 1;
    tryToRead(fh, MPI_FLOAT, count, sizeof(float), "float", buf);

    count = (1 << 29) + 1;
    tryToRead(fh, MPI_FLOAT, count, sizeof(float), "float", buf);

    /* doubles */

    count = (1 << 27) + 1;
    tryToRead(fh, MPI_DOUBLE, count, sizeof(double), "double", buf);

    count = (1 << 28) + 1;
    tryToRead(fh, MPI_DOUBLE, count, sizeof(double), "double", buf);

    /* 2 x doubles */

    MPI_Datatype TwoDoubles;
    MPI_Type_contiguous(2, MPI_DOUBLE, &TwoDoubles);
    MPI_Type_commit(&TwoDoubles);
    
    count = (1 << 26) + 1;
    tryToRead(fh, TwoDoubles, count, 2*sizeof(double), "2xdouble", buf);

    count = (1 << 27) + 1;
    tryToRead(fh, TwoDoubles, count, 2*sizeof(double), "2xdouble", buf);

    MPI_Type_free(&TwoDoubles);


    /* 256 x doubles */

    MPI_Datatype TwoFiftySixDoubles;
    MPI_Type_contiguous(256, MPI_DOUBLE, &TwoFiftySixDoubles);
    MPI_Type_commit(&TwoFiftySixDoubles);
    
    count = (1 << 19) + 1;
    tryToRead(fh, TwoFiftySixDoubles, count, 256*sizeof(double), "256xdouble", buf);

    count = (1 << 20) + 1;
    tryToRead(fh, TwoFiftySixDoubles, count, 256*sizeof(double), "256xdouble", buf);


    /* 256 x doubles, in 2 chunks */

    count = (1 << 20) + 1;
    tryToReadInChunks(fh, TwoFiftySixDoubles, count, 256*sizeof(double), "256xdouble, chunked", buf, 2);

    MPI_Type_free(&TwoFiftySixDoubles);

    MPI_File_close(&fh); 
    MPI_Finalize(); 

    free(buf);
    return 0; 
} 



