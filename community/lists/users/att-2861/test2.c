#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <assert.h>
#include <mpi.h>

int main(int argc, char **argv)
{
   int   ret;
   char *host = NULL;

   host  = (char *) calloc(128, sizeof(char));
   gethostname(host, 64);

   /* init mpi */
   ret = MPI_Init(&argc, &argv);
   assert(ret == MPI_SUCCESS);

   if(argc > 1)
   {
      int master = 0;
      int rank, size;

      master = atoi(argv[1]);

      MPI_Comm_rank(MPI_COMM_WORLD, &rank);
      MPI_Comm_size(MPI_COMM_WORLD, &size);

      if(rank != master)
      {
         MPI_Send(&rank, 1, MPI_INT, master, rank, MPI_COMM_WORLD);
         printf("host:%20s node:%3d sent:%3d to:  %3d\n", host, rank, rank, master);
         fflush(stdout);
      }
      /* is master node */
      else
      {
         int i;
         int val;
         MPI_Status status;

         printf("host:%20s node:%3d is the master\n", host, rank);
         fflush(stdout);

         for(i = 0; i < size; ++i)
         {
            if(i == master) continue;
            MPI_Recv(&val, 1, MPI_INT, i, MPI_ANY_TAG, MPI_COMM_WORLD, &status);
            printf("host:%20s node:%3d recv:%3d from:%3d\n", host, rank, val, status.MPI_SOURCE);
            fflush(stdout);
         }
      }
   }

   /* synchronize */
   ret = MPI_Barrier(MPI_COMM_WORLD);
   assert(ret == MPI_SUCCESS);

   printf("host:%20s made it past the barrier, ret:%d\n", host, ret);
   fflush(stdout);

   /* exit */
   MPI_Finalize();

   free(host);

   return 0;
}
