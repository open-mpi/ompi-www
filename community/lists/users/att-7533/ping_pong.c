#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>

#include <mpi.h>


int main(int argc, char *argv[])
{
   int a, b;
   int rank, size;
   MPI_Status status;
/*    int count, from, to, tag; */

   MPI_Init(&argc, &argv);
   MPI_Comm_rank(MPI_COMM_WORLD, &rank);
   MPI_Comm_size(MPI_COMM_WORLD, &size);

   if(size != 2)
     {
       if(rank == 0)
	 {
	   fprintf(stderr, "ERROR: run this ping pong only on 2 processes ... \n");
	   fflush(stderr);
	 }
       MPI_Finalize();
       exit(EXIT_FAILURE);
     }

   fprintf(stdout, "%d : I am %d of %d : START ... \n", rank, rank, size);
   fflush(stdout);
   sleep(1);

/*    if(rank == 0) from = to = 1; */
/*    if(rank == 1) from = to = 0; */
/*    tag = 1; */
/*    count = 1; */

   a = 10;
   b = -7777;

   if(rank == 0)
     {
       MPI_Send(&a, 1, MPI_INT, 1, 1, MPI_COMM_WORLD);
       MPI_Recv(&b, 1, MPI_INT, 1, 1, MPI_COMM_WORLD, &status);
     }
   else
     {
       MPI_Recv(&b, 1, MPI_INT, 0, 1, MPI_COMM_WORLD, &status);
       MPI_Send(&a, 1, MPI_INT, 0, 1, MPI_COMM_WORLD);
     }
   
   fprintf(stdout, "%d : Received %d ... \n", rank, b);
   fflush(stdout);

   fprintf(stdout, "%d : I am %d of %d : END   ... \n", rank, rank, size);
   fflush(stdout);

   MPI_Finalize();

   

}

