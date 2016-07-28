#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

MPI_Comm mpiComm = MPI_COMM_WORLD;

long fileSize(const char* filename)
{
    FILE* fp = fopen(filename, "rb");
    fseek(fp, 0L, SEEK_END);
    long pos = ftell(fp);
    fclose(fp);
    MPI_Barrier(MPI_COMM_WORLD);
    return pos;
}

int main(int argc, char** argv)
{
    int mpirank, mpisize;
    MPI_Init(&argc, &argv);
    MPI_Comm_size(mpiComm, &mpisize);
    MPI_Comm_rank(mpiComm, &mpirank);
    const char* filename = "test.out";
    const char crank = (const char)mpirank;
    int count = 256;
    char* contents = (char*)malloc(count * sizeof(char));
    memset(contents, crank, count);

    MPI_Info mpiInfo = MPI_INFO_NULL;
    MPI_File handle;
    int amode = MPI_MODE_CREATE | MPI_MODE_WRONLY | MPI_MODE_UNIQUE_OPEN;
    int mpiErr = MPI_File_open(mpiComm, filename, amode, mpiInfo, &handle);
    if (mpiErr == MPI_SUCCESS) {
        mpiErr = MPI_File_set_view(handle, 0, MPI_CHAR, MPI_CHAR, "native", mpiInfo);
    }
    if (mpiErr == MPI_SUCCESS) {
        size_t initialSize = 0;
        mpiErr = MPI_File_set_size(handle, initialSize);
    }
    if (mpiErr != MPI_SUCCESS) {
        char errorstr[MPI_MAX_ERROR_STRING];
        int len;
        MPI_Error_string(mpiErr, errorstr, &len);
        fprintf(stderr, "Error opening %s for parallel writing: %s",
                filename, errorstr);
        MPI_Finalize();
        return 1;
    }

    MPI_Status status;
    MPI_Offset offset = count * mpirank;
    mpiErr = MPI_File_write_at(handle, offset, contents, count, MPI_CHAR, &status);
    MPI_File_close(&handle);
    long size = fileSize(filename);
    fprintf(stderr, "rank %d: expected: %d, actual: %d\n", mpirank, count*mpisize, size);

    MPI_Finalize();
    return 0;
}


