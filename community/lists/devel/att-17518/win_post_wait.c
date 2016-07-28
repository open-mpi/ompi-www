#include <mpi.h>
int main(int argc, char *argv[])
{
  MPI_Win win;
  MPI_Init(&argc, &argv);
  MPI_Win_create(MPI_BOTTOM,0,1,MPI_INFO_NULL,MPI_COMM_SELF,&win);
  MPI_Win_post(MPI_GROUP_EMPTY,0,win);
  MPI_Win_wait(win);
  MPI_Finalize();
  return 0;
}
