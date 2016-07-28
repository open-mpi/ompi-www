#include "mpi.h"
#include <cstdio>
#include <cstdlib>
#include <fstream>

using namespace std;

void abortOnError(int ierr) {
    if (ierr != MPI_SUCCESS) {
        printf("ERROR Returned by MPI: %d\n",ierr);
        char* lCharPtr = new char[MPI_MAX_ERROR_STRING];
        int lLongueur = 0;
        MPI_Error_string(ierr,lCharPtr, &lLongueur);
        printf("ERROR_string Returned by MPI: %s\n",lCharPtr);
        MPI_Abort( MPI_COMM_WORLD, 1 );
    }
}

int main(int argc, char *argv[])
{
    int rank, size;
    MPI_Init(&argc, &argv);
    MPI_Comm_size(MPI_COMM_WORLD, &size);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    const int lNbVal = 1000;

    int sendarray[lNbVal];
    for (int i = 0; i< lNbVal;++i) {
        sendarray[i] = rank;
    }
    int root = 0, *rbuf;
    if (0 == rank) {
        rbuf = (int *)malloc(size*lNbVal*sizeof(int));
    }
    MPI_Request lRequest;

    abortOnError(MPI_Igather( sendarray, lNbVal, MPI_INT, rbuf, lNbVal, MPI_INT, root, MPI_COMM_WORLD, &lRequest));

    if (root == rank) {
        //Show memory used on rank 0:
        std::ifstream lFicProcSelfStatus("/proc/self/status");
        std::string lTmpLine;
        while (lFicProcSelfStatus) {
            std::getline(lFicProcSelfStatus, lTmpLine, '\n');
            std::cout << lTmpLine <<std::endl;
        }
    }

    MPI_Status  lStatusReception;
    lStatusReception.MPI_ERROR  = MPI_SUCCESS;
    int lCount = 0;

    if (0 == rank) {
        abortOnError(MPI_Wait(&lRequest, &lStatusReception));
        //Explore what we got:
        for (int p = 0; p < size; ++p) {
            abortOnError(MPI_Get_count(&lStatusReception, MPI_INT, &lCount));

            std::cout << "Received from rank: " << p  << " (?==" <<lStatusReception.MPI_SOURCE << "), " << lCount << " values : " << std::endl;
            std::cout << "First 5 values: ";
            for (int j = 0; j <5;++j) {
                std::cout << *(rbuf+lNbVal*p+j) << " ";
            }
            std::cout << std::endl;
        }
    }
    else {
        abortOnError(MPI_Wait(&lRequest, &lStatusReception));
        abortOnError(MPI_Get_count(&lStatusReception, MPI_INT, &lCount));
        std::cout << "rank: " << rank  << " sent " << lCount << " values." << std::endl;
    }

    MPI_Finalize();
    return 0;

}
