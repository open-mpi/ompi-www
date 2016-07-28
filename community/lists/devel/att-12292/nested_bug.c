#include "mpi.h"
#include <malloc.h>
#include <stdio.h>
#include <stddef.h>

/**************************************************************************
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
// PAPairLI        |  {long, int}
// PALong_2Pairs   |  {long,{PAPairLI,PAPairLI}}
//--------------------------------------
//
*/


/*! Function to abort on any MPI error:*/
void abortOnError(int ierr) {
  if (ierr != MPI_SUCCESS) {
    printf("ERROR Returned by MPI: %d\n",ierr);
    char* lCharPtr = malloc(sizeof(char)*MPI_MAX_ERROR_STRING);
    int lLongueur = 0;
    MPI_Error_string(ierr,lCharPtr, &lLongueur);
    printf("ERROR_string Returned by MPI: %s\n",lCharPtr);
    MPI_Abort( MPI_COMM_WORLD, 1 );
  }
}

/* a constant:*/
#define FIRST_CHAR 32

/*****************************************************
//
// PAPairLI is a pair: {long, int}
//
*/

struct PAPairLI
{
  long   aLong;
  int    aInt;
};

/*Global variable*/
MPI_Datatype gPAPairLI_datatype      = MPI_DATATYPE_NULL;
MPI_Datatype gPALong_2Pairs_datatype = MPI_DATATYPE_NULL;

void createPAPaireLI_datatype() 
{
    MPI_Datatype lTypes[2] = {MPI_LONG, MPI_INT};

    /*Compute the offset:*/
    MPI_Aint lOffset[2];
    lOffset[0] = offsetof(struct PAPairLI, aLong);
    lOffset[1] = offsetof(struct PAPairLI, aInt);

    int lBlocLen[2] = {1,1};

    abortOnError(MPI_Type_create_struct(2, lBlocLen, lOffset, lTypes, &gPAPairLI_datatype));
    abortOnError(MPI_Type_commit(&gPAPairLI_datatype));
}

/*****************************************************
//
// PALong_2Pairs is a struct of: {long, PAPairLI[2]}
//
*/
struct PALong_2Pairs
{
  long      aFirst;
  struct PAPairLI a2Pairs[2];
};

void printPALong_2Pairs(struct PALong_2Pairs* pObj) { printf("{{%ld},{{%ld,%d},{%ld,%d}}}",pObj->aFirst, pObj->a2Pairs[0].aLong,pObj->a2Pairs[0].aInt,pObj->a2Pairs[1].aLong,pObj->a2Pairs[1].aInt); }

void createPALong_2Pairs_datatype()
{
    MPI_Datatype lTypes[2] = {MPI_LONG, gPAPairLI_datatype};

    /*Compute the offset:*/
    MPI_Aint lOffset[2];
    lOffset[0] = offsetof(struct PALong_2Pairs, aFirst);
    lOffset[1] = offsetof(struct PALong_2Pairs, a2Pairs);

    int lBlocLen[2] = {1,2};

    abortOnError(MPI_Type_create_struct(2, lBlocLen, lOffset, lTypes, &gPALong_2Pairs_datatype));
    abortOnError(MPI_Type_commit(&gPALong_2Pairs_datatype));
}



/****************************
//
// Here is now the main...
//
*/
int main(int argc, char *argv[])
{
  int rank, size;

  MPI_Init(&argc, &argv);
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  MPI_Comm_size(MPI_COMM_WORLD, &size);

  if (size != 2)
  {
    printf("Please run with 2 processes.\n");
    MPI_Finalize();
    return 1;
  }

  /*Calls the types creations once:*/
  createPAPaireLI_datatype(); 
  createPALong_2Pairs_datatype();

  /* Here is the object we wil try to transmit:*/
  struct PALong_2Pairs lBuf;
  const int lTag = 123;

  if (rank == 0)
  {
    /* Some filling of values (to override the default ones from the constructors):*/
    lBuf.aFirst              = 1;
    lBuf.a2Pairs[0].aLong    = 2;
    lBuf.a2Pairs[0].aInt     = 3;
    lBuf.a2Pairs[1].aLong    = 4;
    lBuf.a2Pairs[1].aInt     = 5;

    /* Print what we will send:*/
    printf(" Rank 0 send this:\n");
    printPALong_2Pairs(&lBuf);
    printf("\n");

    /*Now send this object!*/
    abortOnError(MPI_Send(&lBuf, 1, gPALong_2Pairs_datatype, 1, lTag, MPI_COMM_WORLD));
  }

  if (rank == 1)
  {
    MPI_Status status;
    status.MPI_SOURCE = -1;
    status.MPI_TAG = -1;
    status.MPI_ERROR = MPI_SUCCESS;
    abortOnError(MPI_Recv(&lBuf, 1, gPALong_2Pairs_datatype, 0, lTag, MPI_COMM_WORLD, &status));

    /* For verifying the status:*/
    int lCount = -1;
    abortOnError(MPI_Get_count(&status, gPALong_2Pairs_datatype,&lCount));
    const int lAllOK = 0           == status.MPI_SOURCE &&
                       lTag        == status.MPI_TAG &&
                       MPI_SUCCESS == status.MPI_ERROR &&
                       lCount      == 1;
    if (!lAllOK) {
      printf("MPI_Status is not correct!");
      MPI_Abort(MPI_COMM_WORLD,1);
    }

    printf(" Rank 1 received this: ");
    printPALong_2Pairs(&lBuf);
    /* Verifications of what we should have received:*/
    int lOK = 1;
    lOK &= lBuf.aFirst           == 1;
    lOK &= lBuf.a2Pairs[0].aLong == 2;
    lOK &= lBuf.a2Pairs[0].aInt  == 3;
    lOK &= lBuf.a2Pairs[1].aLong == 4;
    lOK &= lBuf.a2Pairs[1].aInt  == 5;

    /*If it is not what we expect, print an error:*/
    char* lOkOrNot = (lOK ? " OK " : " *** ERROR ****");
    printf("%s\n",lOkOrNot);
  }

  MPI_Barrier(MPI_COMM_WORLD);

  abortOnError(MPI_Type_free(&gPALong_2Pairs_datatype));
  abortOnError(MPI_Type_free(&gPAPairLI_datatype));

  abortOnError(MPI_Finalize());

  return 0;
}

