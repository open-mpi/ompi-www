#include <stdio.h>
#include <mpi.h>
#define BUF_SIZE (1024*1024)

#define N_NEST 4

#define USE_RMA
#define USE_PUT

int main(int argc, char **argv)
{
  MPI_Init(&argc, &argv);

  int myrank, nranks;
  MPI_Comm_rank(MPI_COMM_WORLD, &myrank);
  MPI_Comm_size(MPI_COMM_WORLD, &nranks);
  if(nranks != 2){
    printf("The number of processes must be 2\n");
    MPI_Abort(MPI_COMM_WORLD, -1);
  }

  int i;
  char buf[BUF_SIZE];

  for(i = 0; i < BUF_SIZE; i++) buf[i] = 0;

  if(myrank == 0){
    for(i = 0; i < (1<<N_NEST); i++) buf[i] = 99;
  }

  MPI_Datatype nested_types[N_NEST];
  for(i = N_NEST-1; i >= 0; i--){
    MPI_Datatype oldtype = (i == N_NEST-1)? MPI_BYTE : nested_types[i+1];
    MPI_Type_contiguous(2, oldtype, &nested_types[i]);
  }
  MPI_Type_commit(&nested_types[0]);


#ifdef USE_RMA
  MPI_Win win;
  MPI_Win_create(buf, BUF_SIZE, sizeof(char), MPI_INFO_NULL, MPI_COMM_WORLD, &win);
  MPI_Win_lock_all(0, win);

#ifdef USE_PUT
  if(myrank == 0){
    MPI_Put(buf, (1<<N_NEST), MPI_BYTE,
	    1,
            0, 1, nested_types[0],
	    win);
  }
#else
  if(myrank == 1){
    MPI_Get(buf, (1<<N_NEST), MPI_BYTE,
	    0,
            0, 1, nested_types[0],
	    win);
  }
#endif

  MPI_Win_unlock_all(win);
  MPI_Win_free(&win);
#else
  if(myrank == 0){
    MPI_Send(buf, (1<<N_NEST), MPI_BYTE, 1, 0, MPI_COMM_WORLD);
  }else{
    MPI_Recv(buf, 1, nested_types[0], 0, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
  }
#endif


  for(i = 0; i < N_NEST; i++){
    MPI_Type_free(&nested_types[i]);
  }

  MPI_Barrier(MPI_COMM_WORLD);

  if(myrank == 1){
    for(i = 0; i < (1<<N_NEST); i++){
      if(buf[i] != 99) MPI_Abort(MPI_COMM_WORLD, -2);
    }
    for( ; i < BUF_SIZE; i++){
      if(buf[i] != 0) MPI_Abort(MPI_COMM_WORLD, -3);
    }
  }

  MPI_Finalize();

  return 0;
}

