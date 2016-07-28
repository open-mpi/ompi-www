#include "mpi.h"
#include <iostream>
#include <cstdlib>

//Use the following for the MPI_Waitany version
//#define MPI_WAIT_ANY_VERSION

int main(int pArgc, char *pArgv[])
{
  int lRank = -1;
  int lNp   = -1;
  int lTag = 1;
  int lRet = 0;

  if (pArgc != 2) {
    std::cerr << "Please specify the number of int to send!" << std::endl;
    return 1;
  }
  int lNbInt = std::atoi(pArgv[1]);

  MPI_Request lSendRequest;
  MPI_Status  lStatus;
  lStatus.MPI_ERROR  = MPI_SUCCESS;

  MPI_Init(&pArgc,&pArgv);

  MPI_Comm lComm = MPI_COMM_WORLD;

  MPI_Comm_size(lComm, &lNp);

  MPI_Comm_rank(lComm, &lRank);

  int * lPtrToArrayOfInt = 0;
  int * lVecInt = 0;

  if (lRank != 0 ) {
    lPtrToArrayOfInt = new int[lNbInt];
    for (int i = 0; i< lNbInt; ++i) {
      lPtrToArrayOfInt[i] = rand();
    }
    MPI_Isend(lPtrToArrayOfInt, lNbInt, MPI_INT, 0, lTag, lComm, &lSendRequest);
  }
  else {
    MPI_Request* lVecRequest = new MPI_Request[lNp-1];
    lVecInt = new int[lNbInt*lNp-1];
    if (0 == lVecInt) {
      std::cerr<< "Unable to allocate array!" <<std::endl;
      return 1;
    }
    for (int i = 1; i < lNp  ; ++i) {
      MPI_Irecv(&lVecInt[lNbInt*(i-1)], lNbInt, MPI_INT, i, lTag, lComm, &lVecRequest[i-1]);
    }
    //Ok, now Wait for receiving some data and start to process them:
    for (int i = 1; i < lNp ; ++i) {
      lStatus.MPI_ERROR  = MPI_SUCCESS;
#ifndef MPI_WAIT_ANY_VERSION
      MPI_Wait(&lVecRequest[i-1], &lStatus);
      std::cout << "Waited for rank " << i << std::endl;
#else
      int lIndexInVec = -1;
      MPI_Waitany(lNp-1, lVecRequest, &lIndexInVec, &lStatus);
      const int lRankReceived = lIndexInVec+1;
      if (lStatus.MPI_ERROR != MPI_SUCCESS) {
        std::cerr << "Error in MPI_Waitany" << std::endl;
        return 1;
      }
      else {
        std::cout << "Waited for any and received rank " << lRankReceived << std::endl;
      }

#endif
      //Do something in the range from lVecInt[100*(lRankReceived-1)] to lVecInt[100*(lRankReceived)-1]
      // ...
    }
  }
  // Some other treatments not modifying lPtrToArrayOf100Int
  // ...

  // The end:
  if (lRank != 0 ) {
    MPI_Wait(&lSendRequest, &lStatus);

    delete lPtrToArrayOfInt;
  }
  else  {
    delete lVecInt;
  }

  //std::cout << "rank ["<<lRank << "] has completed! " <<std::endl;

  MPI_Finalize();

  return 0;
}


