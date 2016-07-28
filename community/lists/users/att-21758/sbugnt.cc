#include "mpi.h"
#include <cstdio>
#include <cstdlib>
#include <cmath>
#include <iostream>

//**************************************************************************
//
// This example is showing a problem with multiple nested types!
// It works perfectly with mpich-3.0.3 but seems to do a wrong transmission
// with openmpi 1.6.3, 1.6.4, 1.7.0 and 1.7.1
//
// The basic problem seems to arise with a vector of PAPairLongV2D which is a
// MPI nested type constructed like this:
//--------------------------------------
// Struct          | is composed of
//--------------------------------------
// PAPairLongV2D   |  {PALong,PAV2D}
// PAV2D           |  {3xPADouble}
// PADouble        |  {double, long, char}
// PALong          |  {long}
//--------------------------------------
//
// If you comment the #define THE_BUG, PALong is changed to:
//
// PALong          |  {long, long, char}
//
// and everything works perfectly!
//
//**************************************************************************

using namespace std;

// Comment the #define and everything goes fine! (it changes the struct PALong)
#define THE_BUG

//Forward declarations (full definitions after the "main"):
void abortOnError(int ierr);
class PALong;
class PAV2D;
class PADouble;
class PAPaireLongV2D;

// a constant:
#define FIRST_CHAR 32

//****************************
//
// Bunch of class definitions:
//
//****************************


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

// Here goes the classes definitions:

#ifdef THE_BUG

// Defining some classes and the MPI_datatype:
class PALong
{
public:
  long int  aLong; //!< a long int

  //! Notice the default value!
  PALong() : aLong(-444) {}

  //! A methode to "print" the class:
  void print(std::ostream& pOS) {pOS << "{" << aLong << "}";}

  static MPI_Datatype  asMPIDatatype; //!< attribute storing the MPI_datatype
  static MPI_Datatype& reqMPIDatatype() { return asMPIDatatype;}

  //! A static method to create the MPI_datatype:
  static void          createMPIDatatype()
  {
    asMPIDatatype = MPI_LONG;
  }
};
#else
class PALong
{
public:

  //! Notice the default values!
  PALong() : aLong(-555), aLVal(-666), aLB(FIRST_CHAR+3) {}

  long int  aLong;
  long int  aLVal;
  char   aLB;

  void print(std::ostream& pOS) {pOS << "{" << aLong << "," << aLVal << "," << aLB << "}";}

  static MPI_Datatype  asMPIDatatype;

  static MPI_Datatype& reqMPIDatatype() { return asMPIDatatype;}

  static void createMPIDatatype() {

    PALong lPAType;

    MPI_Datatype lTypes[3];

    lTypes[0] = MPI_LONG;
    lTypes[1] = MPI_LONG;
    lTypes[2] = MPI_CHAR;

    MPI_Aint lDeplacements[3];

    MPI_Aint lPtrBase = 0;
    MPI_Get_address(&lPAType,            &lPtrBase);
    MPI_Get_address(&lPAType.aLong,      &lDeplacements[0]);
    MPI_Get_address(&lPAType.aLVal,      &lDeplacements[1]);
    MPI_Get_address(&lPAType.aLB,        &lDeplacements[2]);

    //Compute the "displacement" from lPtrBase
    for (int i = 0; i < 3; ++i) {
      lDeplacements[i] -= lPtrBase;
    }

    int lNbParBloc[3] = {1,1,1};

    abortOnError(MPI_Type_create_struct(3, lNbParBloc, lDeplacements, lTypes, &asMPIDatatype));
    abortOnError(MPI_Type_commit(&asMPIDatatype));

  }
};

#endif

// The static attribute declaration:
MPI_Datatype PALong::asMPIDatatype = MPI_DATATYPE_NULL;

//----------------------------------------------------------
//! Here is another class storing a double, a long and a char:
//----------------------------------------------------------
class PADouble
{
public:
  //! Notice the default values!
  PADouble() :aDouble(-888.8), aDVal(-999), aDB(FIRST_CHAR+4) {}

  double    aDouble;
  long int  aDVal;
  char      aDB;

  static MPI_Datatype  asMPIDatatype;
  static MPI_Datatype& reqMPIDatatype() { return asMPIDatatype;}

  void print(std::ostream& pOS) {pOS << "{" << aDouble << "," << aDVal << "," << aDB << "}";}

  static void createMPIDatatype() {

    PADouble lPAType;

    MPI_Datatype lTypes[3];

    lTypes[0] = MPI_DOUBLE;
    lTypes[1] = MPI_LONG;
    lTypes[2] = MPI_CHAR;

    MPI_Aint lDeplacements[3];

    MPI_Aint lPtrBase = 0;
    MPI_Get_address(&lPAType,           &lPtrBase);
    MPI_Get_address(&lPAType.aDouble,   &lDeplacements[0]);
    MPI_Get_address(&lPAType.aDVal,     &lDeplacements[1]);
    MPI_Get_address(&lPAType.aDB,       &lDeplacements[2]);

    //Compute the "displacement" from lPtrBase
    for (int i = 0; i < 3; ++i) {
      lDeplacements[i] -= lPtrBase;
    }

    int lNbParBloc[3] = {1,1,1};

    abortOnError(MPI_Type_create_struct(3, lNbParBloc, lDeplacements, lTypes, &asMPIDatatype));
    abortOnError(MPI_Type_commit(&asMPIDatatype));

  }
};
MPI_Datatype PADouble::asMPIDatatype = MPI_DATATYPE_NULL;

// Another class: kind of "2D vector"
class PAV2D
{

public:
  PAV2D() {}

  PADouble aXYZ[2];

  static MPI_Datatype  asMPIDatatype;
  static MPI_Datatype& reqMPIDatatype() { return asMPIDatatype;}
  void print(std::ostream& pOS) {
    pOS << "{" ;
    aXYZ[0].print(pOS);
    pOS << "," ;
    aXYZ[1].print(pOS);
    pOS << "}" ;
  }

  static void createMPIDatatype()
  {
    PAV2D lPAType;

    MPI_Datatype lTypes;

    lTypes = PADouble::reqMPIDatatype();

    MPI_Aint lDeplacements;

    MPI_Aint lPtrBase = 0;
    MPI_Get_address(&lPAType,                             &lPtrBase);
    MPI_Get_address(&lPAType.aXYZ[0],                     &lDeplacements);

    //Compute the "displacement" from lPtrBase
    lDeplacements -= lPtrBase;

    int lNbParBloc;

    lNbParBloc = 2;

    abortOnError(MPI_Type_create_struct(1, &lNbParBloc, &lDeplacements, &lTypes, &asMPIDatatype));
    abortOnError(MPI_Type_commit(&asMPIDatatype));

  }

};
MPI_Datatype PAV2D::asMPIDatatype = MPI_DATATYPE_NULL;


//And the laste class: a kind of std::pair<>
class PAPairLongV2D
{
public:
  PAPairLongV2D()  {}

  PALong aFirst;
  PAV2D  aSecond;

  static MPI_Datatype  asMPIDatatype;
  static MPI_Datatype& reqMPIDatatype() { return asMPIDatatype;}
  void print(std::ostream& pOS) {
    pOS << "{" ;
    aFirst.print(pOS);
    pOS << "," ;
    aSecond.print(pOS);
    pOS << "}" ;
  }
  static void createMPIDatatype()
  {
    PAPairLongV2D lPAType;

    MPI_Datatype lTypes[2];

    lTypes[0] = PALong::reqMPIDatatype();
    lTypes[1] = PAV2D ::reqMPIDatatype();

    MPI_Aint lDeplacements[2];

    MPI_Aint lPtrBase = 0;
    MPI_Get_address(&lPAType,                             &lPtrBase);
    MPI_Get_address(&lPAType.aFirst,                      &lDeplacements[0]);
    MPI_Get_address(&lPAType.aSecond,                     &lDeplacements[1]);

    //Compute the "displacement" from lPtrBase
    for (int i = 0; i < 2; ++i) {
      lDeplacements[i] -= lPtrBase;
    }

    int lNbParBloc[2] = {1,1};

    abortOnError(MPI_Type_create_struct(2, lNbParBloc, lDeplacements, lTypes, &asMPIDatatype));
    abortOnError(MPI_Type_commit(&asMPIDatatype));

  }

};

MPI_Datatype PAPairLongV2D::asMPIDatatype = MPI_DATATYPE_NULL;



//****************************
//
// Here is now the main...
//
//****************************



int main(int argc, char *argv[])
{

  MPI_Init(&argc, &argv);

  //Calls the types creations once:
  PALong       ::createMPIDatatype();
  PADouble     ::createMPIDatatype();
  PAV2D        ::createMPIDatatype();
  PAPairLongV2D::createMPIDatatype();

  int rank, size;
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  MPI_Comm_size(MPI_COMM_WORLD, &size);

  if (size != 2)
  {
    std::cout << "Please run with 2 processes.\n";
    MPI_Finalize();
    return 1;
  }

  // Here is the array we wil try to transmit:
  PAPairLongV2D* lBuf = 0;

  const int lBufSize = 6;
  const int lTag = 123;
  lBuf = new PAPairLongV2D[lBufSize];

  if (rank == 0)
  {
    // Some filling of values (to override the default ones from the constructors):
    for (int i=0; i<lBufSize; i++) {
      lBuf[i].aFirst.aLong             = i;
      lBuf[i].aSecond.aXYZ[0].aDouble  = (1/2.);
      lBuf[i].aSecond.aXYZ[0].aDVal    = 3*1;
      lBuf[i].aSecond.aXYZ[0].aDB      = FIRST_CHAR+5*1;
      lBuf[i].aSecond.aXYZ[1].aDouble =  1/4.;
      lBuf[i].aSecond.aXYZ[1].aDVal    = 7*1;
      lBuf[i].aSecond.aXYZ[1].aDB      = FIRST_CHAR+1+20;
    }
    // Print what we will send:
    std::cout << " Rank 0 send this: " << std::endl;
    for (int i=0; i<lBufSize; i++) {
      std::cout << " i: " << i << " => ";
      lBuf[i].print(std::cout);
      std::cout << std::endl;
    }
    //Now send this vector!
    abortOnError(MPI_Send(lBuf, lBufSize, PAPairLongV2D::reqMPIDatatype(), 1, lTag, MPI_COMM_WORLD));
  }

  if (rank == 1)
  {
    MPI_Status status;
    status.MPI_SOURCE = -1;
    status.MPI_TAG = -1;
    status.MPI_ERROR = -1;
    abortOnError(MPI_Recv(lBuf, lBufSize, PAPairLongV2D::reqMPIDatatype(), 0, lTag, MPI_COMM_WORLD, &status));

    // For verifying the status:
    int lCount = -1;
    abortOnError(MPI_Get_count(&status, PAPairLongV2D::reqMPIDatatype(),&lCount));
    const bool lAllOK = 0           == status.MPI_SOURCE &&
                        lTag        == status.MPI_TAG &&
                        MPI_SUCCESS == status.MPI_ERROR &&
                        lCount      == lBufSize;
    if (lAllOK)
    {
      std::cout << "MPI_Recv returned success and everything in MPI_Status is correct after receive." << std::endl;
    }
    else {
      std::cout << "MPI_Status is not correct!" << std::endl;
    }

    std::cout << " Rank 1 received this: " << std::endl;
    for (int i=0; i<lBufSize; i++) {
      std::cout << " i: " << i << " => ";
      lBuf[i].print(std::cout);
      // Verifications of what we should have received:
      bool lOK = true;
      lOK &= lBuf[i].aFirst.aLong             == i;
      lOK &= lBuf[i].aSecond.aXYZ[0].aDouble  == (1/2.);
      lOK &= lBuf[i].aSecond.aXYZ[0].aDVal    == 3*1;
      lOK &= lBuf[i].aSecond.aXYZ[0].aDB      == FIRST_CHAR+5*1;
      lOK &= lBuf[i].aSecond.aXYZ[1].aDouble  ==  1/4.;
      lOK &= lBuf[i].aSecond.aXYZ[1].aDVal    == 7*1;
      lOK &= lBuf[i].aSecond.aXYZ[1].aDB      == FIRST_CHAR+1+20;

      //If it is not what we expect, print an error:
      std::cout << (lOK ? " OK " : " *** ERROR ****") << std::endl;

    }

  }
   MPI_Barrier(MPI_COMM_WORLD);
   delete [] lBuf;

#ifndef THE_BUG
   // Carefull: we can't call MPI_Type_free on natives types...
   abortOnError(MPI_Type_free(&PALong       ::reqMPIDatatype()));
#endif
   abortOnError(MPI_Type_free(&PADouble     ::reqMPIDatatype()));
   abortOnError(MPI_Type_free(&PAV2D        ::reqMPIDatatype()));
   abortOnError(MPI_Type_free(&PAPairLongV2D::reqMPIDatatype()));

  abortOnError(MPI_Finalize());

  return 0;
}


