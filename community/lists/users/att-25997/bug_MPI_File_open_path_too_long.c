#include "mpi.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

void abortOnError(int ierr) {
  if (ierr != MPI_SUCCESS) {
    printf("ERROR Returned by MPI: %d\n",ierr);
    char* lCharPtr = (char*) malloc(sizeof(char)*MPI_MAX_ERROR_STRING);
    int lLongueur = 0;
    MPI_Error_string(ierr,lCharPtr, &lLongueur);
    printf("ERROR_string Returned by MPI: %s\n",lCharPtr);
    free(lCharPtr);
    MPI_Abort( MPI_COMM_WORLD, 1 );
  }
}

int openFileCollectivelyAndReadMyFormat(char* pFileName)
{
    int lReturnValue = 0;
    MPI_File lFile = 0; 

    printf("Opening the file by MPI_file_open : %s\n", pFileName);
    
    abortOnError(MPI_File_open( MPI_COMM_WORLD, pFileName, MPI_MODE_RDONLY, MPI_INFO_NULL, &lFile ));

    /*printf ("ierr=%d, lFile=%ld, lFile == MPI_FILE_NULL ? %d",ierr,lFile, lFile == MPI_FILE_NULL);*/
    long int lTrois = 0;
    char lCharGIS[]="123\0";
    
    long int lOnze = 0;
    char lCharVersion10[]="12345678901\0";
    
    abortOnError(MPI_File_read_all(lFile,&lTrois , 1, MPI_LONG, MPI_STATUS_IGNORE));
    abortOnError(MPI_File_read_all(lFile,lCharGIS, 3, MPI_CHAR, MPI_STATUS_IGNORE));

    if (3 != lTrois) {
      lReturnValue = 1;
    }

    if (0 == lReturnValue && 0 != strcmp(lCharGIS, "123\0")) {
      lReturnValue = 2;
    }

    if (lFile) {
      printf("  ...closing the file %s\n", pFileName);
      abortOnError(MPI_File_close(&lFile ));
      
    }
  return lReturnValue;
}

int main(int argc, char *argv[])
{
    char lValeur[1024];
    char *lHints[] = {"cb_nodes", "striping_factor", "striping_unit"};
    int flag;

    MPI_Init(&argc, &argv);
    
    if (2 != argc) {
      printf("ERROR: you must specify a filename to create.\n");
      MPI_Finalize();
      return 1;
    }

    if (strlen(argv[1]) < 256) {
      printf("ERROR: you must specify a path+filename longer than 256 to have the bug!.\n");
      MPI_Finalize();
      return 1;
    }

    int lResult = 0;
    int i;
    for (i=0; i<10 ; ++i) {
      lResult |= openFileCollectivelyAndReadMyFormat(argv[1]);           
    }

    MPI_Finalize();
    
    return lResult;
}
