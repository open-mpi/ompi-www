#include <mpi.h>
#include <iostream>
#include <string>
#include <unistd.h>

int main(int argc, char** argv) {
  MPI_Init(NULL, NULL);

  std::string lProgram = "./child";
  MPI_Comm lIntercomm;
  int lRv;
  lRv = MPI_Comm_spawn( const_cast< char* >(lProgram.c_str()), MPI_ARGV_NULL, 3,
                       MPI_INFO_NULL, 0, MPI_COMM_WORLD, &lIntercomm,
                       MPI_ERRCODES_IGNORE);

  if ( MPI_SUCCESS == lRv) {
      std::cout << "SPAWN SUCCESS" << std::endl;
      sleep(10);
  }
  else {
      std::cout << "SPAWN ERROR " << lRv << std::endl;
  }

  MPI_Finalize();
}

