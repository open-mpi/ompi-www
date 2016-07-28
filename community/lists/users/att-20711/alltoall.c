/*
  Test program to illustrate OpenMPI 1.6.0 - 1.6.2 alltoall regression.
*/
#include <mpi.h>
#include <math.h>
#include <stdlib.h>
#include <stdio.h>

int main(int argc, char *argv[])
{
  int nProc, rank, n, m;
  int *data, *r_data;
  int *nData, *r_nData;
  int *displ, *r_displ;
  int *gather;
  double start = 0, finish = 0;
  MPI_Init(&argc,&argv); 
  MPI_Comm_size(MPI_COMM_WORLD,&nProc); 
  MPI_Comm_rank(MPI_COMM_WORLD,&rank);

  if (rank == 0) {
    printf("Open MPI %d.%d.%d\n",
           OMPI_MAJOR_VERSION,OMPI_MINOR_VERSION,OMPI_RELEASE_VERSION);
  }

  nData = (int *)malloc(sizeof(int)*nProc);
  r_nData = (int *)malloc(sizeof(int)*nProc);
  gather = (int *)malloc(sizeof(int)*nProc*nProc);
  
  displ = (int *)malloc(sizeof(int)*(nProc + 1));
  r_displ = (int *)malloc(sizeof(int)*(nProc + 1));

  float maxSize = 5000.0f;

  displ[0] = 0;
  for (n = 0; n != nProc; ++n) {
    float x = (float)(nProc - 1 - rank - n)/(float)(nProc - 1);
    nData[n] = (int)fabs(x*x*x*x*x*x*x*x * maxSize);
    displ[n+1] = displ[n] + nData[n];
  }
  data = (int *)malloc(sizeof(int)*displ[nProc]);
  
  MPI_Gather(nData, nProc, MPI_INT, gather, nProc, MPI_INT, 0, MPI_COMM_WORLD);

  if (rank == 0) {
    for (n = 0; n != nProc; ++n) {
      int total = 0;
      printf("Proc %2d: ", n);
      for (m = 0; m != nProc; ++m) {
        int ki = gather[n*nProc + m];
        if (ki) {
          printf("%2d ", ki / 100);
        } else {
          printf("   ");
        }
        total += ki;
      }
      printf("Total: %d x 100 int\n", total / 100);
    }
  }

  for (n = 0; n != displ[nProc]; ++n) {
    data[n] = n;
  }

  if (rank == 0) start = MPI_Wtime();

  for (m = 0; m < 10000; ++m) {

    MPI_Alltoall(nData, 1, MPI_INT, r_nData, 1, MPI_INT, MPI_COMM_WORLD);
    r_displ[0] = 0;
    for (n = 0; n != nProc; ++n) {
      r_displ[n+1] = r_displ[n] + r_nData[n];
    }
    r_data = (int *)malloc(sizeof(int)*r_displ[nProc]);
    
    MPI_Alltoallv(data, nData, displ, MPI_INT,
                  r_data, r_nData, r_displ, MPI_INT, MPI_COMM_WORLD);
    free(r_data);
    if (rank == 0 && !(m % 100)) {
      printf(".");
      fflush(stdout);
    }
  }
  if (rank == 0) {
    finish = MPI_Wtime();
    printf("\nTotal time = %f seconds\n",
           finish - start);
  }

  MPI_Finalize();

  return 0;
}

