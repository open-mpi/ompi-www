#include <mpi.h>
#include <stdio.h>

/* test zero size segment.
 run on at least 3 cpus
 mpirun -np 4 a.out */

int main(int argc, char** argv) {
    // Initialize the MPI environment
    MPI_Init(NULL, NULL);

    int world_size;
    MPI_Comm_size(MPI_COMM_WORLD, &world_size);

    int world_rank;
    MPI_Comm_rank(MPI_COMM_WORLD, &world_rank);
   
    int disp_unit = sizeof(world_rank);
    MPI_Aint size;
    MPI_Info info=0;
    MPI_Win win;
    int* ptr;
    MPI_Comm comm;
    if(world_rank == 0){
      size = 0;
    }else{
      size = 1*disp_unit;
    }
    MPI_Win_allocate_shared (size, disp_unit, MPI_INFO_NULL, MPI_COMM_WORLD, &ptr, &win);
    MPI_Win_fence(0 , win);
    printf("rank %d, pointer value %p \n",world_rank,ptr);
    if(ptr != NULL){
      ptr[0] = world_rank;
      MPI_Barrier(MPI_COMM_WORLD);
      if(world_rank != world_size-1){
	printf("rank  %d: first value = %d , value at start of next segment = %d \n",
	     world_rank,ptr[0],ptr[1]);
      }else{
	printf("rank  %d: first value = %d , value at end of preceding segment = %d \n",
	     world_rank,ptr[0],ptr[-1]);	
      }
    }else{
      MPI_Barrier(MPI_COMM_WORLD);
	printf("rank  %d: pointer set to NULL\n",world_rank);
    }

    MPI_Finalize();
}
