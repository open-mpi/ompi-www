/*
 * $HEADER$
 *
 * Program to test MPI_Comm_spawn with environment variables.
 */

#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#include "mpi.h"

static void do_parent(char *cmd, int rank, int count)
{
    int *errcode, err;
    int i;
    MPI_Comm child_inter;
    MPI_Comm intra;
    FILE *fp;
    int found;
    int size;

    /* First, see if cmd exists on all ranks */

    fp = fopen(cmd, "r");
    if (NULL == fp) {
	found = 0;
    } else {
	fclose(fp);
	found = 1;
    }
    MPI_Comm_size(MPI_COMM_WORLD, &size);
    MPI_Allreduce(&found, &count, 1, MPI_INT, MPI_SUM, MPI_COMM_WORLD);
    if (count != size) {
	if (rank == 0) {
            MPI_Abort(MPI_COMM_WORLD, 77);
        }
	return;
    }

    /* Now try the spawn if it's found anywhere */

    errcode = malloc(sizeof(int) * count);
    if (NULL == errcode) {
        MPI_Abort(MPI_COMM_WORLD, 1);
    }
    memset(errcode, -1, count);
    MPI_Comm_spawn(cmd, MPI_ARGV_NULL, count, MPI_INFO_NULL, 0,
                   MPI_COMM_WORLD, &child_inter, errcode);

    /* Clean up */
    MPI_Barrier(child_inter);

    MPI_Comm_disconnect(&child_inter);
    free(errcode);
}


static void do_target(MPI_Comm parent)
{
    MPI_Barrier(parent);
    MPI_Comm_disconnect(&parent);
}


int main(int argc, char *argv[])
{
    int rank, size;
    MPI_Comm parent;

    /* Ok, we're good.  Proceed with the test. */
    MPI_Init(&argc, &argv);
    MPI_Comm_size(MPI_COMM_WORLD, &size);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    /* Check to see if we *were* spawned -- because this is a test, we
       can only assume the existence of this one executable.  Hence, we
       both mpirun it and spawn it. */

    parent = MPI_COMM_NULL;
    MPI_Comm_get_parent(&parent);
    if (parent != MPI_COMM_NULL) {
	do_target(parent);
    } else {
	do_parent(argv[0], rank, size);
    }

    MPI_Comm_size(MPI_COMM_WORLD, &size);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    if (0 < rank) sleep(3);

    MPI_Finalize();

    /* All done */

    return 0;
}

