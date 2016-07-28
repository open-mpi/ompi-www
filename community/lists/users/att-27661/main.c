#include <stdio.h>
#include <mpi.h>
#include <unistd.h>
#include <stdlib.h>
#include <errno.h>
#include <math.h>
#include "somehead.h"


int size; // numb of CPU
int rank; // numb of current proc
int gridSz; // greed size (must be size*size)
int gridCoord[2]; // coord proc in grid
double *aMatrix; //
double *bMatrix; //
double *cMatrix; //
double *aMatrixBlock; // block matrix for buffer A
double *aBufProc; // matix A in current proc
double *bBufProc; // matix B in current proc
double *cBufProc; // matix C in current proc

static MPI_Comm gridComm; //
static MPI_Comm rowComm;  //
static MPI_Comm colComm;  //
///////////////////////////////////////////////////////////////////////////
// init data in matrices
void
dataInit(double* aMatrix, double* bMatrix, int matrixSize)
{
    int value = 1;
    uint i, j;
    srand(value);
    for (i = 0; i < matrixSize; i++){
        for (j = 0; j < matrixSize; j++){
            aMatrix[i * matrixSize+j] = 1.0 + rand() % 5;
            bMatrix[i * matrixSize+j] = 1.0 + rand() % 7;
        }
    }
}
///////////////////////////////////////////////////////////////////////////////////
// create comm for 2d grid coord
// define coord of proc in current grid
// make comm for row and column (MPI_Cart_create)
void
gridCommCr()
{
    int dimSize[2]; // for carry numb of proc in gridколичество процессов в каждой размерности сетки
    int period[2]; // 1 - periodicaly size, 0 - not
    int subDim[2]; // 1 - if dimension must be in subgrid else - 0
    dimSize[0] = gridSz;
    dimSize[1] = gridSz;
    period[0] = 0;
    period[1] = 0;
    MPI_Dims_create(size, 2, dimSize);
    MPI_Cart_create(MPI_COMM_WORLD, 2, dimSize, period, 1, &gridComm);
    MPI_Cart_coords(gridComm, rank, 2, gridCoord);

    subDim[0] = 0; //
    subDim[1] = 1; //
    MPI_Cart_sub(gridComm, subDim, &rowComm); //

    subDim[0] = 1; //
    subDim[1] = 0; //
    MPI_Cart_sub(gridComm, subDim, &colComm); //
//    printf("Comm created!");
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////

void
delivData(double* aMatrix, double* bMatrix, double* aMatrixBlock, double* bBufProc, int matrixSize, int blockSize)
{
    matrixScatter(aMatrix, aMatrixBlock, matrixSize, blockSize);
    matrixScatter(bMatrix, bBufProc, matrixSize, blockSize);
}

void
matrixScatter(double* curMatrix, double* curBufBlock, int maSize, int blockSize)
{
    uint i;
    double * tempMaRow = (double*) malloc((blockSize*maSize)*sizeof(double)); //
    if (gridCoord[1] == 0){
        MPI_Scatter(curMatrix, blockSize*maSize, MPI_DOUBLE, tempMaRow, blockSize*maSize, MPI_DOUBLE, 0, colComm);
    }
    for (i = 0; i < blockSize; i++){
        MPI_Scatter(&tempMaRow[i*maSize], blockSize, MPI_DOUBLE,&(curBufBlock[i*blockSize]), blockSize, MPI_DOUBLE, 0, rowComm);
    }
    free (tempMaRow);
}


///////////////////////////////////////////////////////////////////////////////////////////////
void
calcParal(double* aMatrix, double* aMatrixBlock, double* bBufProc, double* cBufProc, int blockSize)
{
    int iter;
    for (iter = 0; iter < gridSz; iter++){
        blockAbroadcast(iter, aMatrix, aMatrixBlock, blockSize);
        blMulti(aMatrix, bBufProc, cBufProc, blockSize);
        bBlSendRecv(bBufProc, blockSize);
    }
}

void
blockAbroadcast(int iter, double* aBufProc, double* aMatrixBlock, int blockSize)
{
    uint i;
    int tmpVar = (gridCoord[0] + iter) % gridSz;
    if (gridCoord[1] == tmpVar){
        for(i = 0; i < blockSize*blockSize; i++){
            aBufProc[i] = aMatrixBlock[i];
        }
    }
    MPI_Bcast(aBufProc, blockSize*blockSize, MPI_DOUBLE, tmpVar, rowComm);
}

void
bBlSendRecv(double* bBufProc, int blockSize)
{
    MPI_Status status;
    int nextProc = gridCoord[0] + 1;
    if (gridCoord[0] == gridSz - 1){
        nextProc = 0;
    }
    int pervProc = gridCoord[0] - 1;
    if(gridCoord[0] == 0){
        pervProc = gridSz -1;
    }
    MPI_Sendrecv_replace( bBufProc, blockSize*blockSize, MPI_DOUBLE, nextProc, 0, pervProc, 0, colComm, &status);
}

void
blMulti(double* aBlock, double* bBlock, double* cBlock, int matrixSize)
{
    serialCalc(aBlock, bBlock, cBlock, matrixSize);
}

void
serialCalc(double* aMatrix, double* bMatrix, double* cMatrix, int matrixSize)
{
    uint i, j, k;
    for (i=0; i<matrixSize; i++){
        for (j=0; j<matrixSize; j++){
            for (k=0; k<matrixSize; k++)
            {
                cMatrix[i*matrixSize+j] += aMatrix[i*matrixSize+k]*bMatrix[k*matrixSize+j];
            }
        }
    }
}


//////////////////////////////////////////////////////////////////////////////
void
collect(double* cMatrix, double* cBufProc,int matrixSize, int blockSize)
{
    double *tmpVar;
    tmpVar = malloc((matrixSize*blockSize)*sizeof(double));
    uint i;
    for (i = 0; i < blockSize; i++)    {
        MPI_Gather(&cBufProc[i*matrixSize], blockSize, MPI_DOUBLE, &tmpVar[i*matrixSize], blockSize, MPI_DOUBLE, 0, rowComm);
    }
    if (gridCoord[1] == 0){
        MPI_Gather(tmpVar, blockSize * matrixSize, MPI_DOUBLE, cMatrix, blockSize*matrixSize, MPI_DOUBLE, 0, colComm);
    }
    free(tmpVar);
}


//////////////////////////////////////////////////////////////////////////////////////////
void
blockPrint (double* bufBlock, int blockSize, const char str[])
{
    uint i;
    MPI_Barrier(MPI_COMM_WORLD);
    for (i=0; i<size; i++){
        if (rank == 0){
            printf("%s \n", str);
        }
        if (rank == i){
            printf ("ProcRank = %d \n", rank);
            printMa(bufBlock, blockSize, blockSize);
        }
        MPI_Barrier(MPI_COMM_WORLD);
    }
}


void
printMa(double* curMatrix, int numbRow, int numbCol)
{
    uint i, j;
    for (i = 0; i < numbRow; i++){
        for (j = 0; j < numbCol; j++){
            printf("%7.4f \t", curMatrix[i*numbRow+j]);
        }
    printf("\n");
    }
}


/////////////////////////////////////////////////////////////////////////////
int
main(int argc, char** argv)
{
    int matrixSize = 4; //
    int blockSize; //

    uint i;

    //double start, end; // reserved

    setvbuf(stdout, 0, _IONBF, 0); // buffer off

    MPI_Init(&argc, &argv);
    MPI_Comm_size(MPI_COMM_WORLD, &size);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);

    gridSz = sqrt((double) size);
    blockSize = matrixSize / gridSz;
    aBufProc = (double*) malloc((blockSize*blockSize)*sizeof(double));
    bBufProc = (double*) malloc((blockSize*blockSize)*sizeof(double));
    cBufProc = (double*) malloc((blockSize*blockSize)*sizeof(double));
    aMatrixBlock = (double*) malloc((blockSize*blockSize)*sizeof(double));
    if (rank == 0){
        if (size != gridSz*gridSz){
            printf("Grid size must be = countCPU*countCPU\n");
            MPI_Abort(MPI_COMM_WORLD, 911);
            MPI_Finalize();
            return 0; // i know it bad but ...
        }
    }
    aMatrix = (double*) malloc((matrixSize*matrixSize)*sizeof(double));
    bMatrix = (double*) malloc((matrixSize*matrixSize)*sizeof(double));
    cMatrix = (double*) malloc((matrixSize*matrixSize)*sizeof(double));

    gridCommCr();
    dataInit(aMatrix, bMatrix, matrixSize);
    MPI_Bcast(&matrixSize, 1, MPI_INT, 0, MPI_COMM_WORLD);
    for (i=0; i < blockSize*blockSize; i++)
        cBufProc[i] = 0.0;

    delivData(aMatrix, bMatrix, aMatrixBlock, bBufProc, matrixSize, blockSize);
    calcParal(aMatrix, aMatrixBlock, bBufProc, cBufProc, blockSize);
    collect(cMatrix, cBufProc, matrixSize, blockSize);

    //printf("Matrix A:\n");
    //printMa(aMatrix, matrixSize, matrixSize);
    //printf("Matrix B:\n");
    //printMa(bMatrix, matrixSize, matrixSize);
    //printf("Matrix C:\n");
    //printMa(cBufProc, matrixSize, matrixSize);
    blockPrint(aMatrix, matrixSize, "Matrix A");
    blockPrint(bMatrix, matrixSize, "Matrix B");
    blockPrint(cMatrix, matrixSize, "Matrix C");

    MPI_Finalize();
    return 0;
}
