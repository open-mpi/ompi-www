#include "mpi.h"
#include <iostream>

//**************************************************************************
//
// This example is showing a problem with nested types!
// It works perfectly with mpich-3.0.3 but seems to do a wrong transmission
// with openmpi 1.6.3, 1.6.4, 1.7.0 and 1.7.1
//
// The basic problem seems to arise with a vector of PALong_2Pairs which is a
// MPI nested type constructed like this:
//--------------------------------------
// Struct          | is composed of
//--------------------------------------
// PAPairLC        |  {long, char}
// PALong_2Pairs   |  {long,{PAPairLC,PAPairLC}}
//--------------------------------------
//
//**************************************************************************

using namespace std;

//! Function to abort on any MPI error:
void abortOnError(int ierr) {
  if (ierr != MPI_SUCCESS) {
    std::cerr << "ERROR Returned by MPI: " << ierr << std::endl;
    char* lCharPtr = new char[MPI_MAX_ERROR_STRING];
    int lLongueur = 0;
    MPI_Error_string(ierr,lCharPtr, &lLongueur);
    std::cerr << "ERROR_string Returned by MPI: " << lCharPtr << std::endl;
    MPI_Abort( MPI_COMM_WORLD, 1 );
  }
}

// a constant:
#define FIRST_CHAR 32

//*****************************************************
//
// PAPairLC is a pair: {long, char}
//
//*****************************************************

class PAPairLC
{
public:
  PAPairLC() :aLong(-999), aChar(FIRST_CHAR+4) {}

  long   aLong;
  char   aChar;

  static MPI_Datatype  asMPIDatatype;
  static MPI_Datatype& reqMPIDatatype() { return asMPIDatatype;}

  void print(std::ostream& pOS) {pOS << "{" << aLong << "," << aChar << "}";}

  static void createMPIDatatype() {

    PAPairLC lPAType;

    MPI_Datatype lTypes[2];

    lTypes[0] = MPI_LONG;
    lTypes[1] = MPI_CHAR;

    MPI_Aint lDeplacements[2];

    MPI_Aint lPtrBase = 0;
    MPI_Get_address(&lPAType,                             &lPtrBase);
    MPI_Get_address(&lPAType.aLong,                       &lDeplacements[0]);
    MPI_Get_address(&lPAType.aChar,                         &lDeplacements[1]);

    //Compute the "displacement" from lPtrBase
    lDeplacements[0] -= lPtrBase;
    lDeplacements[1] -= lPtrBase;

    int lBlocLen[2] = {1,1};

    abortOnError(MPI_Type_create_struct(2, lBlocLen, lDeplacements, lTypes, &asMPIDatatype));

    abortOnError(MPI_Type_commit(&asMPIDatatype));

  }
};
MPI_Datatype PAPairLC::asMPIDatatype = MPI_DATATYPE_NULL;

//*****************************************************
//
// PALong_2Pairs is a struct of: {long, PAPairLC[2]}
//
//*****************************************************
class PALong_2Pairs
{
public:
  PALong_2Pairs()  {}

  long      aFirst;
  PAPairLC a2Pairs[2];

  static MPI_Datatype  asMPIDatatype;
  static MPI_Datatype& reqMPIDatatype() { return asMPIDatatype;}
  void print(std::ostream& pOS) {
    pOS << "{{" << aFirst << "}," << "{{"
        << a2Pairs[0].aLong<< ","
        << a2Pairs[0].aChar<< "},{"
        << a2Pairs[1].aLong<< ","
        << a2Pairs[1].aChar<< "}}}";
  }
  static void createMPIDatatype()
  {
    PALong_2Pairs lPAType;

    MPI_Datatype lTypes[2] = {MPI_LONG, PAPairLC::reqMPIDatatype()};

    MPI_Aint lDeplacements[2];

    MPI_Aint lPtrBase = 0;
    MPI_Get_address(&lPAType,                        &lPtrBase);
    MPI_Get_address(&lPAType.aFirst,                 &lDeplacements[0]);
    MPI_Get_address(&lPAType.a2Pairs[0],             &lDeplacements[1]);

    //Compute the "displacement" from lPtrBase
    lDeplacements[0] -= lPtrBase;
    lDeplacements[1] -= lPtrBase;

    int lBlocLen[2] = {1,2};

    abortOnError(MPI_Type_create_struct(2, lBlocLen, lDeplacements, lTypes, &asMPIDatatype));
    abortOnError(MPI_Type_commit(&asMPIDatatype));
  }
};

MPI_Datatype PALong_2Pairs::asMPIDatatype = MPI_DATATYPE_NULL;


//****************************
//
// Here is now the main...
//
//****************************
int main(int argc, char *argv[])
{
  int rank, size;

  MPI_Init(&argc, &argv);
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  MPI_Comm_size(MPI_COMM_WORLD, &size);

  if (size != 2)
  {
    std::cout << "Please run with 2 processes.\n";
    MPI_Finalize();
    return 1;
  }

  //Calls the types creations once:
  PAPairLC::createMPIDatatype();
  PALong_2Pairs::createMPIDatatype();

  // Here is the array we wil try to transmit:
  PALong_2Pairs* lBuf = 0;

  const int lBufSize = 6;
  const int lTag = 123;
  lBuf = new PALong_2Pairs[lBufSize];

  if (rank == 0)
  {
    // Some filling of values (to override the default ones from the constructors):
    for (int i=0; i<lBufSize; i++) {
      lBuf[i].aFirst                 = i;
      lBuf[i].a2Pairs[0].aLong    = 3;
      lBuf[i].a2Pairs[0].aChar    = FIRST_CHAR+5;
      lBuf[i].a2Pairs[1].aLong    = 7;
      lBuf[i].a2Pairs[1].aChar    = FIRST_CHAR+21;
    }
    // Print what we will send:
    std::cout << " Rank 0 send this: " << std::endl;
    for (int i=0; i<lBufSize; i++) {
      std::cout << " i: " << i << " => ";
      lBuf[i].print(std::cout);
      std::cout << std::endl;
    }
    //Now send this vector!
    abortOnError(MPI_Send(lBuf, lBufSize, PALong_2Pairs::reqMPIDatatype(), 1, lTag, MPI_COMM_WORLD));
  }

  if (rank == 1)
  {
    MPI_Status status;
    status.MPI_SOURCE = -1;
    status.MPI_TAG = -1;
    status.MPI_ERROR = MPI_SUCCESS;
    abortOnError(MPI_Recv(lBuf, lBufSize, PALong_2Pairs::reqMPIDatatype(), 0, lTag, MPI_COMM_WORLD, &status));

    // For verifying the status:
    int lCount = -1;
    abortOnError(MPI_Get_count(&status, PALong_2Pairs::reqMPIDatatype(),&lCount));
    const bool lAllOK = 0           == status.MPI_SOURCE &&
                        lTag        == status.MPI_TAG &&
                        MPI_SUCCESS == status.MPI_ERROR &&
                        lCount      == lBufSize;
    if (lAllOK)
    {
      std::cout << "MPI_Recv returned success and everything in MPI_Status is correct after receive." << std::endl;
    }
    else {
      std::cout << "MPI_Status is not correct!"<< std::endl;
      return 1;
    }

    std::cout << " Rank 1 received this: " << std::endl;
    for (int i=0; i<lBufSize; i++) {
      std::cout << " i: " << i << " => ";
      lBuf[i].print(std::cout);
      // Verifications of what we should have received:
      bool lOK = true;
      lOK &= lBuf[i].aFirst                 == i;
      lOK &= lBuf[i].a2Pairs[0].aLong    == 3;
      lOK &= lBuf[i].a2Pairs[0].aChar    == FIRST_CHAR+5;
      lOK &= lBuf[i].a2Pairs[1].aLong    == 7;
      lOK &= lBuf[i].a2Pairs[1].aChar    == FIRST_CHAR+21;

      //If it is not what we expect, print an error:
      std::cout << (lOK ? " OK " : " *** ERROR ****") << std::endl;
    }
  }

  MPI_Barrier(MPI_COMM_WORLD);
  delete [] lBuf;

  abortOnError(MPI_Type_free(&PAPairLC::reqMPIDatatype()));
  abortOnError(MPI_Type_free(&PALong_2Pairs::reqMPIDatatype()));

  abortOnError(MPI_Finalize());

  return 0;
}

