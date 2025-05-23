#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>

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

   if (rank == 0) {
	printf("Main process: %d.\n", rank);
	int a = 100;
	int i;			

	MPI_Request *reqs;
	reqs = (MPI_Request *) malloc((numtasks - 1)*sizeof(MPI_Request));	
	MPI_Status *stats;
	stats = (MPI_Status *) malloc((numtasks - 1)*sizeof(MPI_Status));

	for ( i = 1; i < numtasks; ++i){
		rc = MPI_Isend(&a , 1 , MPI_INT , i , 0 , MPI_COMM_WORLD , &reqs[i]);		
	}

	MPI_Waitall(numtasks - 1 , reqs , stats);		

        free(reqs);
	free(stats);
		
	printf("End.\n");
      
   } else {
	int b;
	int rc;
	MPI_Status status;
	rc = MPI_Recv( &b , 1 , MPI_INT , MPI_ANY_SOURCE , 0, MPI_COMM_WORLD , &status);
	printf("%d - received value, rc value: %d %d\n", rank , b, rc);
	
   }

   MPI_Finalize();
   return 0;
}

