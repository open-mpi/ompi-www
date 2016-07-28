#include <stdio.h>
#include <stdlib.h>
#include "mpi.h"

#define ROOT 0

int main( int argc, char *argv[] )
{
   int  numtasks, rank, rc; 

   rc = MPI_Init(&argc,&argv);
   if (rc != MPI_SUCCESS) {
     printf ("Error starting MPI program. Terminating.\n");
     MPI_Abort(MPI_COMM_WORLD, rc);
   }

   MPI_Comm_size(MPI_COMM_WORLD,&numtasks);
   MPI_Comm_rank(MPI_COMM_WORLD,&rank);

   if (rank == ROOT) {
	printf("Main process: %d.\n", rank);
	int a = 100;
	int i;			
	MPI_Request *reqs;
	MPI_Status *stats;

	reqs = (MPI_Request *) malloc((numtasks - 1)*sizeof(MPI_Request));	
	stats = (MPI_Status *) malloc((numtasks - 1)*sizeof(MPI_Status));

        
	for ( i = 1; i < numtasks; ++i){
		/*
                 * Being very picky, one should not use the *same* buffer
                 * in two non-blocking communications
                 *
                 * The main problem however is that &reqs[i] is wrong: reqs[0] is
                 * not initialized at all.
                 * change to &reqs[i-1] works.
                 */
		rc = MPI_Isend(&a , 1 , MPI_INT , i , 0 , MPI_COMM_WORLD , &reqs[i-1]);
	}

	MPI_Waitall(numtasks - 1 , reqs , stats);

        free(reqs);
	free(stats);
	printf("End.\n");
   } else {
	int b;
	int rc;
	MPI_Status status;

	rc = MPI_Recv( &b , 1 , MPI_INT, ROOT , 0, MPI_COMM_WORLD , &status);
	printf("%d - received value, rc value: %d %d\n", rank , b, rc);
   }

   MPI_Finalize();
   return 0;
}

