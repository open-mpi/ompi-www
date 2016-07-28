#include <mpi.h>
#include <iostream>

int main (int argc, char* argv[]) {
  MPI_Init(nullptr, nullptr);
  //--> Connect graph to my mpi communicator
  bool reorder = false;
  int indegree  = 1;
  int outdegree = 1;
  int sources[indegree];
  int sweights[indegree];
  int destinations[outdegree];
  int dweights[outdegree];
  int my_rank;
  MPI_Comm_rank(MPI_COMM_WORLD, &my_rank); //get my rank
  if (my_rank == 0) {
    sources[0] = 1;
    sweights[0] = 1;
    destinations[0] = 1;
    dweights[0] = 1;
  }else if (my_rank == 1) {
    sources[0] = 0;
    sweights[0] = 1;
    destinations[0] = 0;
    dweights[0] = 1;
  }

  MPI_Info mpi_info = MPI_INFO_NULL;
  MPI_Info_create(&mpi_info);
  MPI_Comm mpi_comm_with_graph;
  MPI_Dist_graph_create_adjacent(MPI_COMM_WORLD, indegree, sources,
                                 sweights, outdegree,
                                 destinations, dweights,
                                 mpi_info, reorder, &mpi_comm_with_graph);
  MPI_Comm_rank(mpi_comm_with_graph, &my_rank); //get my rank

  //----------------------------------------------------------------------------
  //---> Send and receive messages
  int send_number[1];
  int recv_number[1];

  if (my_rank == 0) {
    send_number[0] = 123;
    recv_number[0] = -1;
  }else if (my_rank == 1) {
    send_number[0] = 456;
    recv_number[0] = -1;
  }

  MPI_Request request_array[1];
  request_array[0] = MPI_REQUEST_NULL;

  int error_code = MPI_Ineighbor_alltoall
    (send_number, 1, MPI::INT,
     recv_number, 1, MPI::INT,
     mpi_comm_with_graph, request_array);

  MPI_Status status[1];
  MPI_Wait(request_array, status);

  MPI_Finalize();

  std::cout << "Rank : " << my_rank << " send of " << send_number[0] << "\n";
  std::cout << "Rank : " << my_rank << " recv of " << recv_number[0] << "\n";

  return 0; //--> End simulation
}// End Main
