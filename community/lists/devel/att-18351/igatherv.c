#include <mpi.h>
int main(int argc, char *argv[])
{
  signed char a=1,b=2;
  int rcounts[1] = {0};
  int rdispls[1] = {0};
  MPI_Request request;
  MPI_Init(&argc, &argv);
  MPI_Igatherv(&a, 0, MPI_SIGNED_CHAR,
               &b, rcounts, rdispls, MPI_SIGNED_CHAR,
               0, MPI_COMM_SELF, &request);
  MPI_Wait(&request, MPI_STATUS_IGNORE);
  MPI_Finalize();
  return 0;
}
