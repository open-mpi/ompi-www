
#include "mpi.h"
#include <stdio.h>

int main (int argc, char **argv)
{
  int provided;
  MPI_Comm slave;
  char *arg[]= {"spawn1", (char *)0};

  MPI_Init_thread (&argc, &argv, MPI_THREAD_MULTIPLE, &provided);
  MPI_Comm_spawn ("./spawn_slave", arg, 1, 
          MPI_INFO_NULL, 0, MPI_COMM_SELF, &slave,
          MPI_ERRCODES_IGNORE);

  MPI_Finalize ();
  return 0;
}
