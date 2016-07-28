#include <stdlib.h>
#include <mpi.h>

int main(int argc, char** argv) {
   
   MPI_Init(&argc, &argv);

   int array[1024]; 
   int root=0; 

   MPI_Bcast( array, 1024, MPI_CHAR, root, MPI_COMM_WORLD); 

   MPI_Finalize();

   return EXIT_SUCCESS;
}
