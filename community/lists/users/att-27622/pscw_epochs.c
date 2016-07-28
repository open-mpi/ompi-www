#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>

#include <mpi.h>

#define WIN_BUFFER_INIT_VALUE 0xFFFFFFFF
#define DPRINT(fmt, ...) printf("[%d @ %.6f %s:%d]: " fmt "\n", comm_rank, MPI_Wtime(), __FILE__, __LINE__, ##__VA_ARGS__)

int main(int argc, char** argv)
{
	int comm_rank, comm_size, i, buffer;
	int* win_buffer;
	int exclude_targets[2] = { 0, 1 };
	MPI_Win win;
	MPI_Group world_group, start_group, post_group;

	MPI_Init(&argc, &argv);
	MPI_Comm_size(MPI_COMM_WORLD, &comm_size);
	MPI_Comm_rank(MPI_COMM_WORLD, &comm_rank);

#ifdef USE_WIN_ALLOCATE
	MPI_Win_allocate(sizeof(*win_buffer), 1, MPI_INFO_NULL, MPI_COMM_WORLD, &win_buffer, &win);
#else
	MPI_Alloc_mem(sizeof(*win_buffer), MPI_INFO_NULL, &win_buffer);
	MPI_Win_create(win_buffer, sizeof(*win_buffer), 1, MPI_INFO_NULL, MPI_COMM_WORLD, &win);
#endif
	*win_buffer = WIN_BUFFER_INIT_VALUE;

	MPI_Comm_group(MPI_COMM_WORLD, &world_group);

	if (comm_rank == 0) {
		/* origin */

		/* 1st round: access window of rank 1 */
		MPI_Group_incl(world_group, 1, exclude_targets + 1, &start_group);

		buffer = 1;
		MPI_Win_start(start_group, 0, win);
		DPRINT("putting to 1");
		MPI_Put(&buffer, 1, MPI_INT, 1, 0, 1, MPI_INT, win);
		MPI_Win_complete(win);
		DPRINT("done with put/complete");

		MPI_Group_free(&start_group);

		/* 2nd round: access everyone else */
		MPI_Group_excl(world_group, sizeof(exclude_targets) / sizeof(*exclude_targets), exclude_targets, &start_group);
		buffer = 2;
		MPI_Win_start(start_group, 0, win);
		for (i = 2; i < comm_size; i++) {
			DPRINT("putting value %d to rank %d", buffer, i);
			MPI_Put(&buffer, 1, MPI_INT, i, 0, 1, MPI_INT, win);
		}
		MPI_Win_complete(win);
		MPI_Group_free(&start_group);
	} else {
		/* target */
		if (comm_rank == 1) {
			DPRINT("sleeping...");
			sleep(2);
			DPRINT("woke up.");

			if (*win_buffer != WIN_BUFFER_INIT_VALUE) {
				DPRINT("window buffer modified before sync'ed");
			}
		}

		MPI_Group_incl(world_group, 1, exclude_targets, &post_group);
		MPI_Win_post(post_group, 0, win);
		DPRINT("posted, waiting for wait to return...");
		/* nop */
		MPI_Win_wait(win);
		DPRINT("target done got %d -> %s", *win_buffer, (*win_buffer != (comm_rank == 1 ? 1 : 2)) ? "FAILURE" : "success");
		MPI_Group_free(&post_group);
	}

	MPI_Win_free(&win);
	MPI_Finalize();
}


