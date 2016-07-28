/*
 * Intercept MPI_Recv, and
 * call PMPI_Irecv, loop over PMPI_Request_get_status and sleep, until done
 *
 * Revision History:
 *  2008-12-17: copied from MPI_Send.c
 *  2008-12-18: tweaking.
 *
 * See MPI_Send.c for additional comments, 
 *  especially w.r.t. PMPI_Request_get_status.
 **/

#include "mpi.h"
#define _POSIX_C_SOURCE 199309 
#include <time.h>

int MPI_Recv(void *buff, int count, MPI_Datatype datatype, 
	      int from, int tag, MPI_Comm comm, MPI_Status *status) {

  int flag, nsec_start=1000, nsec_max=100000;
  struct timespec ts;
  MPI_Request req;

  ts.tv_sec = 0;
  ts.tv_nsec = nsec_start;

  PMPI_Irecv(buff, count, datatype, from, tag, comm, &req);
  do {
    nanosleep(&ts, NULL);
    ts.tv_nsec *= 2;
    ts.tv_nsec = (ts.tv_nsec > nsec_max) ? nsec_max : ts.tv_nsec;
    PMPI_Request_get_status(req, &flag, status);
  } while (!flag);

  return (*status).MPI_ERROR;
}

