
#include <mpi.h>
#include <stdio.h>
#include <stdlib.h>
#include <peruse.h>

int rank;
int total_msg_arrived = 0;

static int MSG_ARRIVED_callback (peruse_event_h event_h, MPI_Aint unique_id,
  peruse_comm_spec_t *spec, void *param)
{
	total_msg_arrived++;
//  fprintf (stdout, "RANK %d : MSG_ARRIVED comm = %d buf = %p count = %d peer = %d tag = %d\n", rank, spec->comm, spec->buf, spec->count, spec->peer, spec->tag);
  return 0;
}

int buffer[1048576];

int main (int argc, char *argv[])
{
	int ret, size, MSG_ARRIVED_event, sum;
	MPI_Request req1,req2[3];
	MPI_Status sts1,sts2[3];
  peruse_event_h handler;
	
	MPI_Init (&argc, &argv);

	/* PERUSE CONFIG BEGIN */
	ret = PERUSE_Init ();
	if (ret != PERUSE_SUCCESS)
		return 0;

  ret = PERUSE_Query_event ("PERUSE_COMM_MSG_ARRIVED", &MSG_ARRIVED_event);
  if (ret != PERUSE_SUCCESS)
    return 0;

  ret = PERUSE_Event_comm_register (MSG_ARRIVED_event, MPI_COMM_WORLD,
    MSG_ARRIVED_callback, NULL, &handler);
  if (ret != PERUSE_SUCCESS)
  {
    fprintf (stderr, "mpitrace: Error! Can't register PERUSE event!\n");
    return 0;
  }
  ret = PERUSE_Event_activate (handler);
  if (ret != PERUSE_SUCCESS)
  {
    fprintf (stderr, "mpitrace: Error! Can't activate PERUSE event!\n");
    return 0;
  }
	/* PERUSE CONFIG END */

	MPI_Comm_rank (MPI_COMM_WORLD, &rank);
	MPI_Comm_size (MPI_COMM_WORLD, &size);

	if (rank == 0)
	{
		int out, indices[3*4];

		MPI_Isend (buffer, 1, MPI_INTEGER, 1, 1001, MPI_COMM_WORLD, &(req2[0]));
		MPI_Isend (buffer, 1, MPI_INTEGER, 2, 1001, MPI_COMM_WORLD, &(req2[1]));
		MPI_Isend (buffer, 1, MPI_INTEGER, 3, 1001, MPI_COMM_WORLD, &(req2[2]));
		
		MPI_Waitall (3, req2, sts2);
	}
	else
	{
		int out, indices[4];

		MPI_Irecv (buffer, 1, MPI_INTEGER, 0, 1001, MPI_COMM_WORLD, &req1);
		MPI_Wait (&req1, &sts1);
	}

#if 0
	MPI_Reduce (&total_msg_arrived, &sum, 1, MPI_INTEGER, MPI_SUM, 0, MPI_COMM_WORLD);

	if (rank == 0)
	fprintf (stdout, "sum = %d , total_msg_arrived = %d\n", sum, total_msg_arrived);
#else
	fprintf (stdout, "task %d : total_msg_arrived = %d\n", rank, total_msg_arrived);
#endif

	MPI_Finalize();
}


