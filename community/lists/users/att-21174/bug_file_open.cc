#include "mpi.h"
#include <cstdio>
#include <cstdlib>

using namespace std;

void abortOnError(int ierr) {
  if (ierr != MPI_SUCCESS) {
    printf("ERROR Returned by MPI: %d\n",ierr);
    char* lCharPtr = new char[MPI_MAX_ERROR_STRING];
    int lLongueur = 0;
    MPI_Error_string(ierr,lCharPtr, &lLongueur);
    printf("ERROR_string Returned by MPI: %s\n",lCharPtr);
    MPI_Abort( MPI_COMM_WORLD, 1 );
  }
}

int main(int argc, char *argv[])
{
    int rank, size;

    MPI_Init(&argc, &argv);
    if (2 != argc) {
      printf("ERROR: you must specify a filename to create.\n");
      MPI_Finalize();
      return 1;
    }
    MPI_Comm_size(MPI_COMM_WORLD, &size);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    MPI_File lFile; 
    abortOnError(MPI_File_open( MPI_COMM_WORLD, argv[1], MPI_MODE_RDWR | MPI_MODE_CREATE, MPI_INFO_NULL, &lFile ));

    abortOnError(MPI_File_close( &lFile ));

    MPI_Finalize();
    return 0;
}

