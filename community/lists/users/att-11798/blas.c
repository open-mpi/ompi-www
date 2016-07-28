
#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>

#if 4 == SIZEOF_SCAL_T
typedef float   Scal_t;
#define GEMM    sgemm_
#endif
#if 8 == SIZEOF_SCAL_T
typedef double  Scal_t;
#define GEMM    dgemm_
#endif

extern void GEMM(char *, char *, int *, int *, int *, Scal_t *, Scal_t *, int *,
                 Scal_t *, int *, Scal_t *, Scal_t *, int *);

int main(int argc, char **argv)
{
        MPI_Init(&argc, &argv);

        Scal_t A[2][3] = { { 5.0, 4.0, 2.0 }, { 1.0, -1.0, 0.0 } };
        Scal_t B[5][2] = { { 1.0, 0.0 }, { 0.0, -1.0 }, { 0.5, 1.5 },
                           { 6.0, 2.0 }, { 8.0, -2.0 } };
        Scal_t C[3][5];

        char   transa = 'N';
        char   transb = 'N';
        int    N      = 3;
        int    K      = 2;
        int    M      = 5;
        int    lda    = N;
        int    ldb    = K;
        int    ldc    = N;
        Scal_t alpha  = 1.0;
        Scal_t beta   = 0.0;

        GEMM(&transa, &transb, &N, &M, &K, &alpha, A, &lda, B, &ldb, &beta, C, &ldc);

        return MPI_Finalize();
}


