#include <stdio.h>
#include <mpi.h>

/* openmpi 1.2.5 by default sets the eager limit to 12288 bytes */
#define LEN 10000
#define NUM_TRIALS 1000000

int
main(int argc, char **argv)
{
  int mype;
  int npes;
  int i;
  int dest;
  char *a, *b;
  MPI_Status status;

  a = (char *) malloc(LEN);
  b = (char *) malloc(LEN);

  MPI_Init(&argc, &argv);

  MPI_Comm_rank(MPI_COMM_WORLD, &mype);
  MPI_Comm_size(MPI_COMM_WORLD, &npes);

  printf("%d hello\n", mype);
  fflush(stdout);

  if (mype==0) {
    for (dest=1; dest<npes; dest++)
    {
      for (i=0; i<NUM_TRIALS; i++)
      {
        MPI_Recv(a, LEN, MPI_CHAR, dest, 0, MPI_COMM_WORLD, &status);
        fprintf(stderr, "Recv from %d index %d\n", dest, i);
        fflush(stderr);
      }
    }
  }
  else
  {
    for (i=0; i<NUM_TRIALS; i++)
    {
      dest = 0;
      MPI_Send(b, LEN, MPI_CHAR, dest, 0, MPI_COMM_WORLD);
      if ((i%1000)==0) {
        printf("%d sent %d msgs\n", mype, i);
        fflush(stdout);
      }
    }
    printf("%d done\n", mype);
    fflush(stdout);
  }

  MPI_Barrier(MPI_COMM_WORLD);
  MPI_Finalize();

  return 0;
}


