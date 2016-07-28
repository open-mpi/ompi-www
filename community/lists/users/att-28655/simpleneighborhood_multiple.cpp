#include <mpi.h>
#include <iostream>

int main (int argc, char* argv[]) {
  MPI_Init(nullptr, nullptr);
  //--> Connect graph to my mpi communicator
  bool reorder = false;
  int indegree  = 2;
  int outdegree = 2;
  int sources[indegree];
  int sweights[indegree];
  int destinations[outdegree];
  int dweights[outdegree];
  int my_rank;
  MPI_Comm_rank(MPI_COMM_WORLD, &my_rank); //get my rank
  if (my_rank == 0) {
    sources[0] = 1;
    sources[1] = 2;
    sweights[0] = 1;
    sweights[1] = 1;

    destinations[0] = 1;
    destinations[1] = 2;
    dweights[0] = 1;
    dweights[1] = 1;

  }else if (my_rank == 1) {
    sources[0] = 0;
    sources[1] = 2;
    sweights[0] = 1;
    sweights[1] = 1;

    destinations[0] = 0;
    destinations[1] = 2;
    dweights[0] = 1;
    dweights[1] = 1;
  }else if (my_rank == 2) {
    sources[0] = 0;
    sources[1] = 1;
    sweights[0] = 1;
    sweights[1] = 1;

    destinations[0] = 0;
    destinations[1] = 1;
    dweights[0] = 1;
    dweights[1] = 1;
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
  int sendcounts[2];
  MPI_Aint sdispls[2];
  MPI_Datatype send_datatype[2];

  int recvcounts[2];
  MPI_Aint rdispls[2];
  MPI_Datatype recv_datatype[2];

  int mpi_double_size;
  MPI_Type_size(MPI::DOUBLE, &mpi_double_size);
  for (int i = 0; i < 2; ++i) {
    send_datatype[i] = MPI::DOUBLE;
    recv_datatype[i] = MPI::DOUBLE;
    sendcounts[i] = 1;
    recvcounts[i] = 1;
    sdispls[i] = i*mpi_double_size;
  }

  //---> oversized to send from and to accept into
  double send_number[4];
  if (my_rank == 0) {
    send_number[0] = 0;
    send_number[1] = 0;
  }else if (my_rank == 1) {
    send_number[0] = 1;
    send_number[1] = 1;
  }else if (my_rank == 2) {
    send_number[0] = 2;
    send_number[1] = 2;
  }
  send_number[2] = -1;
  send_number[3] = -1;

  MPI_Request request_array[1];
  MPI_Status status[1];
  int error_code;
  request_array[0] = MPI_REQUEST_NULL;

  // //----------------------------------------------------------------------------
  // //---> This works fine on OpenMPI-1.10.2 with patch
  // for (int i = 0; i < 2; ++i) {
  //   rdispls[i] = i*mpi_double_size;
  // }
  // error_code = MPI_Ineighbor_alltoallw
  //   (send_number, sendcounts, sdispls, send_datatype,
  //    &send_number[2], recvcounts, rdispls, recv_datatype,
  //    mpi_comm_with_graph, request_array);
  // MPI_Wait(request_array, status);

  //----------------------------------------------------------------------------
  //---> This segfaults on OpenMPI-1.10.2 with patch
  for (int i = 0; i < 2; ++i) {
    rdispls[i] = (i+2)*mpi_double_size;
  }
  error_code = MPI_Ineighbor_alltoallw
    (send_number, sendcounts, sdispls, send_datatype,
     send_number, recvcounts, rdispls, recv_datatype,
     mpi_comm_with_graph, request_array);
  MPI_Wait(request_array, status);



  MPI_Finalize();

  if (my_rank == 0) {
    for (int i = 0; i < 4; ++i) {
      std::cout << "Rank : " << my_rank << " send array: "
                << send_number[i] << "\n";
    }
  }

  return 0;
}// End main
