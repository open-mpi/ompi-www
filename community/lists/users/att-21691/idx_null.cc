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
// This main is showing how to have an assertion raised if you try
// to create a MPI_File_set_view with some process holding no data

#define WITH_ZERO_ELEMNT_BUG

int main(int argc, char *argv[])
{
  int rank, size, i;
  MPI_Datatype lTypeIndexIntWithExtent, lTypeIndexIntWithoutExtent;

  MPI_Init(&argc, &argv);
  MPI_Comm_size(MPI_COMM_WORLD, &size);
  if (size != 3)
  {
    printf("Please run with 3 processes.\n");
    MPI_Finalize();
    return 1;
  }
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);

  int displacement[3];
  int* buffer = 0;

  int lTailleBuf = 0;
  if (rank == 0)
  {
    lTailleBuf = 3;
    displacement[0] = 0;
    displacement[1] = 4;
    displacement[2] = 5;
    buffer = new int[lTailleBuf];
    for (i=0; i<lTailleBuf; i++) buffer[i] = 10*(i+1);
  }
  if (rank == 1)
  {
    lTailleBuf = 2;
    displacement[0] = 1;
    displacement[1] = 2;

#ifdef WITH_ZERO_ELEMNT_BUG
    displacement[2] = 3;
    ++lTailleBuf;
#endif

    buffer = new int[lTailleBuf];
    for (i=0; i<lTailleBuf; i++) buffer[i] = -(i+1);
  }
  // BUG: A rank without any "element"
  if (rank == 2)
  {
#ifdef WITH_ZERO_ELEMNT_BUG
    lTailleBuf = 0;
#else
    displacement[0] = 0;
    lTailleBuf = 1;
    buffer = new int[lTailleBuf];
    for (i=0; i<lTailleBuf; i++) buffer[i] = 1000*(i+1);
#endif
  }

  MPI_File lFile;

  abortOnError(MPI_File_open( MPI_COMM_WORLD, const_cast<char*>("temp"), MPI_MODE_RDWR | MPI_MODE_CREATE, MPI_INFO_NULL, &lFile ));

  MPI_Type_create_indexed_block(lTailleBuf, 1, displacement, MPI_INT, &lTypeIndexIntWithoutExtent);
  MPI_Type_commit(&lTypeIndexIntWithoutExtent);

  // Here we compute the total number of int to write to resize the type:
  // Ici, on veut s'échanger le nb total de int à écrire à chaque appel pcqu'on doit calculer le bon "extent" du type.
  // Ça revient à dire que chaque processus ne n'écrira qu'une petite partie du fichier, mais devra avancer son pointeur
  // local d'écriture suffisamment loin pour ne pas écrire par dessus les données des autres
  int lTailleGlobale = 0;
  printf("[%d] Local size : %d \n",rank,lTailleBuf);

  MPI_Allreduce( &lTailleBuf, &lTailleGlobale, 1, MPI_INT, MPI_SUM, MPI_COMM_WORLD );

  printf("[%d] MPI_AllReduce : %d \n",rank,lTailleGlobale);

  //We now modify the extent of the type "type_without_extent"
  MPI_Type_create_resized( lTypeIndexIntWithoutExtent, 0, lTailleGlobale*sizeof(int), &lTypeIndexIntWithExtent );
  MPI_Type_commit(&lTypeIndexIntWithExtent);

  abortOnError(MPI_File_set_view( lFile, 0, MPI_INT, lTypeIndexIntWithExtent, const_cast<char*>("native"), MPI_INFO_NULL));

  for (int i =0; i<2;++i) {
    abortOnError(MPI_File_write_all( lFile, buffer, lTailleBuf, MPI_INT, MPI_STATUS_IGNORE));
    MPI_Offset lOffset,lSharedOffset;
    MPI_File_get_position(lFile, &lOffset);
    MPI_File_get_position_shared(lFile, &lSharedOffset);
    printf("[%d] Offset after write : %d int: Local: %ld Shared: %ld \n",rank,lTailleBuf,lOffset,lSharedOffset);

  }

  abortOnError(MPI_File_close( &lFile ));

  abortOnError(MPI_Type_free(&lTypeIndexIntWithExtent));
  abortOnError(MPI_Type_free(&lTypeIndexIntWithoutExtent));

  MPI_Finalize();
  return 0;
}

