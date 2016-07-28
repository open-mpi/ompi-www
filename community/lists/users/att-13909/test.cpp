#include <time.h>
#include <stdlib.h>
#include <stdio.h>
#include <mpi.h>

int main(int argc, char *argv[]) {
  int numprocs, rank, namelen;
  char processor_name[MPI_MAX_PROCESSOR_NAME];

  MPI::Init(argc, argv);
  rank = MPI::COMM_WORLD.Get_rank();
  numprocs = MPI::COMM_WORLD.Get_size();
  MPI::Get_processor_name(processor_name, namelen);

  // init random seed
  srand(time(NULL)+rank);

  // simple summing test
  if (rank == 0)
  {
    double buf;
    double sum = 0;
    MPI::Status status;
    for (int i=1; i < MPI::COMM_WORLD.Get_size(); i++)
    {
      MPI::COMM_WORLD.Recv(&buf, 1, MPI_DOUBLE , i, 100, status);
      sum += buf;
    }
    printf("sum: %f\n",sum);
  }
  else
  {
    double x = (double)rand()/(double)RAND_MAX;
    MPI::COMM_WORLD.Send(&x, 1, MPI_DOUBLE , 0, 100);
    printf("node: %d x: %f send complete\n",rank,x);
  }

  MPI::Finalize();
}

