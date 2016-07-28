#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>
int main(int argc, char*argv[])
{
  double *x, *y;
  int i,times,rank,size;
  const int l=200;

  MPI_Init(&argc,&argv);

  times=10000;
  if (argc > 1)
    times = atoi(argv[1]);

  MPI_Comm_rank(MPI_COMM_WORLD,&rank);
  MPI_Comm_size(MPI_COMM_WORLD,&size);

  if (rank == 0)
    printf("scattertest, repetitions is %d\n",times);

  x=(double*) malloc(sizeof(double)*l*size);
  y=(double*) malloc(sizeof(double)*l);

  for (i=0; i<l*size; i++)
    x[i]=10.0;

  for (i=0; i<times; i++)
    {
      MPI_Scatter(x,l,MPI_DOUBLE,y,l,MPI_DOUBLE,0,MPI_COMM_WORLD);
//      if (i%100 == 0) 
 //        MPI_Barrier(MPI_COMM_WORLD);
    }

  printf("all is well on %d\n",rank);
  
  MPI_Finalize();
  
}

