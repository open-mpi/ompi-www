#include <mpi.h>
#include <iostream>
#include <string>

using namespace std;


void receive() {
  int length = 0;
  MPI_Status status;
  MPI_Probe(MPI_ANY_SOURCE, 0, MPI_COMM_WORLD, &status);
  MPI_Get_count(&status, MPI_CHAR, &length);
  cout << "Stringlength = " << length << endl;
  __attribute__((aligned(64))) char cstr[length];
  MPI_Recv(cstr,
           length,
           MPI_CHAR,
           MPI_ANY_SOURCE,
           MPI_ANY_TAG,
           MPI_COMM_WORLD,
           MPI_STATUS_IGNORE);
  cout << cstr << endl;
}

void send(int rankReceiver) {
  __attribute__((aligned(64))) std::string s = "123456789012345678901234567890123456789012345678901234567890123";
  MPI_Send(s.c_str(),
           s.size()+1,
           MPI_CHAR,
           rankReceiver,
           0,
           MPI_COMM_WORLD);
}

int main(int argc, char* argv[])
{
  int rank;
  MPI_Init(&argc, &argv);

  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  if (rank == 0)
    send(1);
  else {
    receive();
  }
  MPI_Finalize();
  return 0;
}



