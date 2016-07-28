#include "mpi.h"
#include <assert.h>

int main(int argc, char **argv) {
  int rc;
  MPI_Init(&argc, &argv);

  MPI_Info the_info;
  rc = MPI_Info_create(&the_info);
  assert(rc == MPI_SUCCESS);

  // I tried both (with appropriately different argv[1])...same result.
#if 1
  rc = MPI_Info_set(the_info, "hostfile", argv[1]);
  assert(rc == MPI_SUCCESS);
#else
  rc = MPI_Info_set(the_info, "host", argv[1]);
  assert(rc == MPI_SUCCESS);
#endif

  MPI_Comm the_group;
  rc = MPI_Comm_spawn("hostname",
                 MPI_ARGV_NULL,
                 8,
                 the_info,
                 0,
                 MPI_COMM_WORLD,
                 &the_group,
                 MPI_ERRCODES_IGNORE);
  assert(rc == MPI_SUCCESS);

  MPI_Finalize();
  return 0;
}

