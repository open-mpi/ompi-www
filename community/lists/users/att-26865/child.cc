#include <mpi.h>
#include <iostream>
#include <unistd.h>

int main(int argc, char** argv) {
  // Initialize the MPI environment
  MPI_Init(NULL, NULL);

  std::cout << "CHILD" << std::endl;
  sleep(10);

  MPI_Finalize();
}
