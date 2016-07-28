#include <mpi.h>

#include <stdlib.h>
#include <stdio.h>

#define MPICall(funcall) \
  { \
  int __my_result = funcall; \
  if (__my_result != MPI_SUCCESS) \
    { \
    char errormsg[MPI_MAX_ERROR_STRING]; \
    int dummy; \
    MPI_Error_string(__my_result, errormsg, &dummy); \
    printf("Received error when calling\n%s\n%s\n\n", #funcall, errormsg); \
    } \
  }

int sizes[] = { 50, 50, 50 };
int subsizes[] = { 25, 25, 25 };
int starts[] = {25, 0, 25};

int main(int argc, char **argv)
{
  MPI_File fd;
  MPI_Datatype view;

  MPI_Init(&argc, &argv);

  MPICall(MPI_File_open(MPI_COMM_WORLD, "test.tmp",
                        MPI_MODE_WRONLY | MPI_MODE_CREATE, MPI_INFO_NULL, &fd));

  MPICall(MPI_Type_create_subarray(3, sizes, subsizes, starts,
                                   MPI_ORDER_FORTRAN, MPI_BYTE, &view));
  MPICall(MPI_File_set_view(fd, 20, MPI_BYTE, view, "native", MPI_INFO_NULL));

  MPI_Finalize();
}
