/*The Parallel Hello World Program*/
#include <stdio.h>
#include <mpi.h>

main(int argc, char **argv)
{
   int rank;
   int size;
   MPI_Status status;
   int i,j;
   
   int buffer[10];

   printf("Starting\n");
   MPI_Init(&argc,&argv);
   printf("Calling MPI_Init\n");
   MPI_Comm_rank(MPI_COMM_WORLD, &rank);
   MPI_Comm_size(MPI_COMM_WORLD, &size);
   if (rank > 0) {
     for(i=0; i<10;i++) {
       buffer[i]=i+1;
     }
     printf("Hello World from Node rank %d\n",rank);
     printf("Rank %d is receiving from 0\n",rank);
     MPI_Recv(buffer,10,MPI_INT,0,0,MPI_COMM_WORLD,&status);
     printf("Rank %d is sending to 0\n",rank);
     MPI_Send(buffer,10,MPI_INT,0,0,MPI_COMM_WORLD);
   } else {
     for(i=0; i<10;i++) {
       buffer[i]=i;
     }
     for(i=1;i < size;i++) {
       printf("Sending to rank %d from 0\n",i);
       MPI_Send(buffer,10,MPI_INT,i,0,MPI_COMM_WORLD);
     }
     for(i=1;i < size;i++) {
       printf("Rank 0 is receiving from %d\n",i);
       MPI_Recv(buffer,10,MPI_INT,i,0,MPI_COMM_WORLD,&status);
     }
   }
   MPI_Finalize();
}

