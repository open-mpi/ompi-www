
#include <iostream>
#include <mpi.h>


int main(int args, char* argv[]){
  int size, rank;
  MPI::Init();
  size = MPI::COMM_WORLD.Get_rank();
  size = MPI::COMM_WORLD.Get_size();
  int amode, size_int;

  char *fname, *drep;
  MPI_Datatype etype, filetype;
  MPI_Info info;
  MPI_Status status;
  MPI_Offset disp;
  MPI_File fh;
  fname = "testfile.txt";
  drep = "native";

  amode = MPI_MODE_CREATE | MPI_MODE_WRONLY;

  size_int = sizeof(size_int);
  info = 0;

  MPI_File_open(MPI_COMM_WORLD, fname, amode, info, &fh);
  disp = rank * size_int;
  etype = MPI_INTEGER;
  filetype = MPI_INTEGER;

  MPI_File_set_view(fh, disp, etype, filetype, drep, info);
  MPI_File_write(fh, &rank, 1, MPI_INTEGER, &status);

  MPI_File_close(&fh);
  MPI_Finalize();
}
