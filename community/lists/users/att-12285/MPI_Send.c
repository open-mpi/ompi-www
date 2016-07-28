/*
 * Intercept MPI_Send, and
 * call PMPI_Isend, loop over PMPI_Request_get_status and sleep, until done
 *
 * Revision History:
 *  2008-12-12: skeleton by Jeff Squyres <jsquyres@cisco.com>
 *  2008-12-16->18: adding parameters, variable wait, 
 *     change MPI_Test to MPI_Request_get_status
 *      Douglas Guptill <douglas.guptill@dal.ca>
 **/

/* When we use this:
 *   PMPI_Test(&req, &flag, &status); 
 * we get:
 * dguptill@DOME:$ mpirun -np 2 mpi_send_recv_test_mine
 * This is process            0  of            2 .
 * This is process            1  of            2 .
 * error: proc            0 ,mpi_send returned -1208109376
 * error: proc            1 ,mpi_send returned -1208310080
 *     1 changed to            3
 *
 * Using MPI_request_get_status cures the problem.
 *
 * A read of mpi21-report.pdf confirms that MPI_Request_get_status
 * is the appropriate choice, since there seems to be something
 * between the call to MPI_SEND (MPI_RECV) in my FORTRAN program
 * and MPI_Send.c (MPI_Recv.c)
 **/


#include "mpi.h"
#define _POSIX_C_SOURCE 199309 
#include <time.h>

int MPI_Send(void *buff, int count, MPI_Datatype datatype, 
	      int dest, int tag, MPI_Comm comm) {

  int flag, nsec_start=1000, nsec_max=100000;
  struct timespec ts;
  MPI_Request req;
  MPI_Status status;

  ts.tv_sec = 0;
  ts.tv_nsec = nsec_start;

  PMPI_Isend(buff, count, datatype, dest, tag, comm, &req);
  do {
    nanosleep(&ts, NULL);
    ts.tv_nsec *= 2;
    ts.tv_nsec = (ts.tv_nsec > nsec_max) ? nsec_max : ts.tv_nsec;
    PMPI_Request_get_status(req, &flag, &status);
  } while (!flag);

  return status.MPI_ERROR;
}

