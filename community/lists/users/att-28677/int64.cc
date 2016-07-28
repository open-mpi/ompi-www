#include <iostream>
#include "mpi.h"
#include <unistd.h>
#include <limits.h>
#include <fcntl.h>

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

namespace PAIO {

int calculeExtentInt64VsInt32(MPI_Datatype pDataType,
MPI_Aint *pFileExtent,
void *pExtraState)
{
    int lReponse = MPI_ERR_TYPE;
    if (pDataType == MPI_LONG_INT) {
        lReponse = 8;
    }
    return lReponse;
}

int conversionLectureInt64VersInt32(void* pUserBuf,
MPI_Datatype pDataType,
int pCount,
void *pFileBuf,
MPI_Offset pPosition,
void* pExtraState)
{
    if (pDataType != MPI_LONG_INT) {
        return MPI_ERR_TYPE;
    }

    //ici byte_swap pas nécessaire...

    // Conversion du int64 en int32:
    for (int i = 0; i < pCount; ++i) {
        ((int*) pUserBuf)[pPosition+i] = ((long long int*) pFileBuf)[i];
    }
    return MPI_SUCCESS;
}

int conversionEcritureInt32VersInt64(void* pUserBuf,
MPI_Datatype pDataType,
int pCount,
void *pFileBuf,
MPI_Offset pPosition,
void* pExtraState)
{
    if (pDataType != MPI_LONG_INT) {
        return MPI_ERR_TYPE;
    }

    // Conversion du int32 en int64:
    for (int i = 0; i < pCount; ++i) {
        ((long long int*) pFileBuf)[i] = ((int*) pUserBuf)[pPosition+i];
    }

    //ici byte_swap pas nécessaire...

    return MPI_SUCCESS;
}

}

int main (int argc, char *argv[])
{

  MPI_Init( &argc, &argv );

  int nb_proc = 0;
  MPI_Comm_size( MPI_COMM_WORLD, &nb_proc );

  //Appelle l'enregistrement d'un nouveau "datarep":

  abortOnError(MPI_Register_datarep("int64",
  PAIO::conversionLectureInt64VersInt32,
  PAIO::conversionEcritureInt32VersInt64,
  PAIO::calculeExtentInt64VsInt32,
  NULL));

  MPI_Finalize();

  return 0;
}
