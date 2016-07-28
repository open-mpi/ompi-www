 #ifndef __SOMEHEAD_H_
 #define __SOMEHEAD_H_

typedef unsigned int uint;

void gridCommCr();
void dataInit(double* aMatrix, double* bMatrix, int matrixSize);
void printMa(double* curMatrix, int numbRow, int numbCol);
void matrixScatter(double* curMatrix, double* curBufBlock, int maSize, int blockSize);
void delivData(double* aMatrix, double* bMatrix, double* aMatrixBlock, double* bBufProc, int matrixSize, int blockSize);
void bBlSendRecv(double* bBufProc, int blockSize);
void calcParal(double* aMatrix, double* aMatrixBlock, double* bBufProc, double* cBufProc, int blockSize);
void collect(double* cMatrix, double* cBufProc,int matrixSize, int blockSize);
void blockAbroadcast(int iter, double* aBufProc, double* aMatrixBlock, int blockSize);
void blMulti(double* aBlock, double* bBlock, double* cBlock, int matrixSize);
void serialCalc(double* aMatrix, double* bMatrix, double* cMatrix, int matrixSize);
void blockPrint (double* bufBlock, int blockSize, char str[]);

#endif // __SOMEHEAD_H__
