#include <stdlib.h>
#include <stdio.h>
#include <time.h>

#include "mpi.h"

#define ARBITRARY_TAG (25)

#define MPI_RANK_MASTER (0)
#define MPI_RANK_SOURCE (1)
#define MPI_RANK_TARGET (2)

#define DEFAULT_COUNT (2000000)

int mpi_rank, mpi_size;

FILE * OUTPUT;

#define MEH(x) (mpi_error_handler(x,OUTPUT))
void mpi_error_handler ( int rc, FILE * fp ) {
 double t = MPI_Wtime();
 if ( MPI_SUCCESS != rc ) {
   char err_string[MPI_MAX_ERROR_STRING + 1];
   int err_string_len;

   MPI_Error_string ( rc, err_string, &err_string_len );

   if ( NULL != fp && stderr != fp ) {
     fprintf ( fp, "[%f] %d: ERROR: %s\n", t, mpi_rank, err_string );
   }
   fprintf ( stderr, "[%f] %d: ERROR: %s\n", t, mpi_rank, err_string );
 } else {
   if ( NULL != fp && stderr != fp ) {
     fprintf ( fp, "[%f] %d: previous call returned MPI_SUCCESS\n", t, mpi_rank );
   }
   fprintf (  stderr, "[%f] %d: previous call returned MPI_SUCCESS\n", t, mpi_rank );
 }
}

int main ( int arfc, char ** arfv ) {
  char output_filename[80]={0};
  int i, count;
  int data, * pdata;

  MPI_Status ms = {0};

  pdata = &data;

  MEH(MPI_Init(&arfc, &arfv));
  MEH(MPI_Comm_rank(MPI_COMM_WORLD, &mpi_rank));
  MEH(MPI_Comm_size(MPI_COMM_WORLD, &mpi_size));

  sprintf(output_filename, "output-%d", mpi_rank);

  if(NULL != (OUTPUT = fopen(output_filename, "w"))) {
    fprintf(stderr, "[%f] %d opened %s for write\n", MPI_Wtime(), mpi_rank, output_filename);
  } else {
    fprintf(OUTPUT, "[%f] %d could not open %s for write, bailing\n", MPI_Wtime(), mpi_rank, output_filename);
  }

  srand(time(NULL));

  if ( arfc >= 2 ) {
    count = atoi(arfv[1]);
    fprintf(OUTPUT, "[%f] %d converting first argument %s to %d\n", MPI_Wtime(), mpi_rank, arfv[1], count);
  }

  if ( count < 0 ) count = DEFAULT_COUNT;

  fprintf(OUTPUT, "[%f] %d attempting %d iterations\n", MPI_Wtime(), mpi_rank, count);

  for ( i = 0; i < count; ++ i ) {
    switch(mpi_rank) {

      case MPI_RANK_MASTER:
        // MPI_RANK_MASTER receives a number from MPI_RANK_SOURCE and forwards to MPI_RANK_TARGET

        MEH(MPI_Recv(pdata, 1, MPI_INT, MPI_ANY_SOURCE, ARBITRARY_TAG, MPI_COMM_WORLD, &ms));
        fprintf(OUTPUT, "[%f] %d received %d from %d, seq %d\n", MPI_Wtime(), mpi_rank, data, ms.MPI_SOURCE, i);

        MEH(MPI_Send(pdata, 1, MPI_INT, MPI_RANK_TARGET, ARBITRARY_TAG, MPI_COMM_WORLD));
        fprintf(OUTPUT, "[%f] %d sent %d to %d, seq %d\n", MPI_Wtime(), mpi_rank, data, MPI_RANK_TARGET, i);

        break;

      case MPI_RANK_SOURCE:
        // MPI_RANK_MASTER generates a pseudorandom number and sends to MPI_RANK_MASTER

        data = rand();

        MEH(MPI_Send(pdata, 1, MPI_INT, MPI_RANK_MASTER, ARBITRARY_TAG, MPI_COMM_WORLD));
        fprintf(OUTPUT, "[%f] %d sent %d to %d, seq %d\n", MPI_Wtime(), mpi_rank, data, MPI_RANK_MASTER, i);

        break;

      case MPI_RANK_TARGET:
        // MPI_RANK_TARGET receives a random number from MPI_RANK_MASTER

        MEH(MPI_Recv(pdata, 1, MPI_INT, MPI_ANY_SOURCE, ARBITRARY_TAG, MPI_COMM_WORLD, &ms));
        fprintf(OUTPUT, "[%f] %d received %d from %d, seq %d\n", MPI_Wtime(), mpi_rank, data, ms.MPI_SOURCE, i);

        break;
    }
  }

  fclose(OUTPUT);

  MEH(MPI_Finalize());
  return 0;
}

