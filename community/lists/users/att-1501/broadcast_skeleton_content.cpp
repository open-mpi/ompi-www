#include <mpi.h>
#include <list>
#include <vector>
#include <cassert>
#include <iostream>

void make_list_content_type(std::list<int>& l, MPI_Datatype& type)
{
  std::vector<int> lengths(l.size(), 1);
  std::vector<MPI_Aint> displacements;
  std::vector<MPI_Datatype> types(l.size(), MPI_INT);
  for (std::list<int>::iterator i = l.begin(); i != l.end(); ++i) {
    MPI_Aint addr;
    MPI_Address(&*i, &addr);
    displacements.push_back(addr);
  }

  MPI_Type_struct(l.size(), &lengths.front(), &displacements.front(),
                  &types.front(), &type);
  MPI_Type_commit(&type);
}

int main(int argc, char* argv[])
{
  MPI_Init(&argc, &argv);
  
  int list_size = 24;
  int root = 0;
  
  int rank; MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  int size; MPI_Comm_size(MPI_COMM_WORLD, &size);

  for (root = 0; root < size; ++root) {
    if (rank == root) {
      std::list<int> original_list;
      for (int i = 0; i < list_size; ++i)
        original_list.push_back(i);

      // Build datatype for this list
      MPI_Datatype type;
      make_list_content_type(original_list, type);

      std::cout << "Broadcasting integers from root " << root << "...";
      std::cout.flush();
      // Broadcast data
      MPI_Bcast(MPI_BOTTOM, 1, type, root, MPI_COMM_WORLD);
      std::cout << "done.\nBroadcasting reversed integers from root " << root 
                << "...";
      std::cout.flush();

      // Reverse list and broadcast again
      original_list.reverse();
      MPI_Bcast(MPI_BOTTOM, 1, type, root, MPI_COMM_WORLD);
      std::cout << "done.\n";
      std::cout.flush();
    } else {
      // Allocate some useless data, to try to get the addresses of the
      // list<int>'s used later to be different across processes.
      std::list<int> junk_list(rank * 3 + 1, 17);

      // Build the list and its type
      std::list<int> transferred_list(list_size);
      MPI_Datatype type;
      make_list_content_type(transferred_list, type);

      // Receive broadcast data, twice
      MPI_Bcast(MPI_BOTTOM, 1, type, root, MPI_COMM_WORLD);
      MPI_Bcast(MPI_BOTTOM, 1, type, root, MPI_COMM_WORLD);    
    }
  }

  MPI_Finalize();
  return 0;
}

