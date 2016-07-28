#include <stdio.h>
#include <mpi.h>
int main (int argc, char *argv[])
{
 int rank, size;
 int i;
 int send, recv;
 MPI_Init (&argc, &argv);      /* starts MPI */
 MPI_Comm_rank (MPI_COMM_WORLD, &rank);        /* get current process
id */
 MPI_Comm_size (MPI_COMM_WORLD, &size);        /* get number of
processes */


 printf( "Hello world from process %d of %d\n", rank, size );
 for (i=0; i < 100; i++){
       send = i;
       if (rank==0){
       MPI_Send(&send, 1, MPI_INT,1, 1, MPI_COMM_WORLD);

       }
       else{
       MPI_Recv(&recv, 1, MPI_INT, 0, MPI_ANY_TAG, MPI_COMM_WORLD,
NULL);
       printf("Process %d says %d\n", rank, recv);
       }



      printf("Process %d says %d\n", rank, i);

             sleep(3);

              }



               MPI_Finalize();
                return 0;
                }

