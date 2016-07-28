#include <iostream>
#include <cstdlib>
#include <vector>
#include <iostream>

#include <mpi.h>

template<typename T>
void createWindowForPointer(MPI_Comm comm, const T * ptr, int size, MPI_Win & win) {
  
  int disp_unit = sizeof(T);

  if (size > 0) {
    MPI_Win_create(const_cast<T*>(ptr), size*disp_unit, disp_unit, MPI_INFO_NULL, comm, &win);
  }
  else {
    MPI_Win_create(MPI_BOTTOM, 0, disp_unit, MPI_INFO_NULL, comm, &win);
  }

}

template <int N>
struct Foo {
  int data[N];
};

template <int N>
void mkFooDType(MPI_Datatype & dType) {
  int blockcount = N;
  MPI_Aint displ = 0;
  MPI_Datatype type = MPI_INT;
  MPI_Datatype dTypeTmp;

  MPI_Type_create_struct(1, &blockcount, &displ, &type,
                         &dTypeTmp);

#ifdef ADJ_EXTENT
#pragma message "Using ADJ_EXTENT"
  std::cout << "Adjusting extent" << std::endl;
  MPI_Type_create_resized(dTypeTmp, 0, sizeof(Foo<N>), &dType);
#else
  MPI_Type_dup(dTypeTmp, &dType);
#endif

  MPI_Type_commit(&dType);
}

int main(int argc, char *argv[]) {
  MPI_Init(&argc, &argv);

  int rank;
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);

  const int arraySize = 5, fooSize = 3;

  MPI_Win inPtrWin;
  Foo<fooSize> * inPtr;

  int inPtrSize = ((rank == 0) ? arraySize*sizeof(Foo<fooSize>) : 0);

  if (rank == 0) {
    MPI_Alloc_mem(arraySize*sizeof(Foo<fooSize>), MPI_INFO_NULL, &inPtr);

    for (int i = 0; i < arraySize; ++i) {
      for (int j = 0; j < fooSize; ++j) {
        inPtr[i].data[j] = std::rand();
      }
    }
  }

  createWindowForPointer(MPI_COMM_WORLD, inPtr,
                         ((rank == 0) ? arraySize : 0),
                         inPtrWin);

  MPI_Datatype fooDType;
  mkFooDType<fooSize>(fooDType);

  Foo<fooSize> * outPtr;

  MPI_Win_fence((MPI_MODE_NOPUT | MPI_MODE_NOPRECEDE), inPtrWin);  
  if (rank != 0) {
    MPI_Alloc_mem(arraySize*sizeof(Foo<fooSize>), MPI_INFO_NULL, &outPtr);

    MPI_Get(outPtr, arraySize, fooDType, 0, 0, arraySize, fooDType, inPtrWin);
  }
  MPI_Win_fence(MPI_MODE_NOSUCCEED, inPtrWin);

  if (rank != 0) {
    std::cout << "On rank " << rank << ", outPtr = [";
    for (int i = 0; i < arraySize; ++i) {
      std::cout << " (";
      for (int j = 0; j < fooSize; ++j) {
        std::cout << " " << outPtr[i].data[j];
      }
      std::cout << " )";
    }
    std::cout << " ]" << std::endl;
  }
  else {
    std::cout << "On rank " << rank << ",  inPtr = [";
    for (int i = 0; i < arraySize; ++i) {
      std::cout << " (";
      for (int j = 0; j < fooSize; ++j) {
        std::cout << " " << inPtr[i].data[j];
      }
      std::cout << " )";
    }
    std::cout << " ]" << std::endl;
  }

  MPI_Win_free(&inPtrWin);

  if (rank == 0) {
    MPI_Free_mem(inPtr);
  }
  else {
    MPI_Free_mem(outPtr);
  }

  MPI_Finalize();
  return 0;
}
