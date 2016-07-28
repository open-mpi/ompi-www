/* C Example */
#include <stdio.h>
#include <mpi.h>
#define NEL    8
#define NTIMES 1000000

int main (int argc,char *argv[]) {
  int       i;
  double    w[NEL];
  MPI_Aint  win_size,warr_size;
  MPI_Win  *win;

  win_size=sizeof(MPI_Win);
  warr_size=sizeof(MPI_DOUBLE)*NEL;
  
      
  MPI_Init (&argc, &argv);
  
  for(i=0;i<NTIMES;i++) {
      MPI_Alloc_mem(win_size,MPI_INFO_NULL,&win);

      MPI_Win_create(w,warr_size,sizeof(double),MPI_INFO_NULL,MPI_COMM_WORLD,win);
      MPI_Win_free(win);

      MPI_Free_mem(win);
  }

  MPI_Finalize();

  return 0;

}

