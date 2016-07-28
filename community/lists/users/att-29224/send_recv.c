#include "mpi.h" 
#include <mpi-ext.h>
#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[]) 
{ 
   int size, rank, psize; 
   int loops = 78;
   int length = 4;
   MPI_Init(&argc, &argv); 
   MPI_Comm_size(MPI_COMM_WORLD, &size);
   MPI_Comm_rank(MPI_COMM_WORLD, &rank);
   int *code = (int *)malloc(length * sizeof(int));
   MPI_Status status;
   long long i = 0;
   double time_s = MPI_Wtime();

   if(rank % 2 == 1)
   {
       int i ;
       int j ;
       double a = 0.3, b = 0.5;
       for(i = 0; i < 30000; i++)
           for(j = 0; j < 30000; j++){
               a = a * 2;
               b = b + a;
           }
   }

   for(i = 0; i < loops; i++){
       if(rank % 2 == 0){
           MPI_Send(code, length, MPI_INT, rank + 1, 0, MPI_COMM_WORLD);
       }
       else if(rank % 2 == 1){
           MPI_Recv(code, length, MPI_INT, rank - 1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
       }
   }
   double time_e = MPI_Wtime();
   printf("[%d] size = %d, loop = %d, time = %.5f\n", rank, length * sizeof(int), loops, time_e - time_s);

   MPI_Finalize(); 
   return 0; 
} 

