#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <assert.h>
#include <mpi.h>

int main(int c, char **v)
{
   int   ret;
   char *host = NULL;

   host  = (char *) calloc(128, sizeof(char));
   gethostname(host, 64);

   /* init mpi */
   ret = MPI_Init(&c, &v);
   assert(ret == MPI_SUCCESS);

   /* synchronize */
   ret = MPI_Barrier(MPI_COMM_WORLD);
   assert(ret == MPI_SUCCESS);

   printf("host:%s made it past the barrier, ret:%d\n", host, ret);
   fflush(stdout);

   /* exit */
   MPI_Finalize();

   free(host);

   return 0;
}
