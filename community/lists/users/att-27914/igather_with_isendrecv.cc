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

    MPI_Request *lRecvRequests = 0;
    MPI_Request lSendRequest = 0;
    const int lNbVal = 1000;
    int sendarray[lNbVal];

    for (int i = 0; i< lNbVal;++i) {
        sendarray[i] = rank;
    }
    int root = 0, *rbuf;
    if (root == rank) {
        rbuf = (int *)malloc(size*lNbVal*sizeof(int));
        lRecvRequests = (MPI_Request*) malloc(size*sizeof(MPI_Request));
    }

    if (root == rank) {
        //rank 0 receive from everybody:
        for (int p = 0; p < size; ++p) {
            int tag = p;
            abortOnError(MPI_Irecv(rbuf+lNbVal*p, lNbVal, MPI_INT, p, tag, MPI_COMM_WORLD, &lRecvRequests[p]));
        }
    }

    //All ranks sends data to rank 0:
    int tag = rank;
    abortOnError(MPI_Isend(sendarray, lNbVal, MPI_INT, root, tag, MPI_COMM_WORLD, &lSendRequest));

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
    int lIndex = 0;

    if (root == rank) {
        //Explore what we received:
        for (int p = 0; p < size; ++p) {
            abortOnError(MPI_Waitany(size,lRecvRequests, &lIndex, &lStatusReception));
            abortOnError(MPI_Get_count(&lStatusReception, MPI_INT, &lCount));
            int received_rank =  lStatusReception.MPI_SOURCE;
            std::cout << "Received from rank: " << received_rank << "), " << lCount << " values : " << std::endl;
            std::cout << "Doing some work with asynchronously received data..." <<std::endl;
            std::cout << "First 5 values: ";
            for (int j = 0; j <5;++j) {
                std::cout  << *(rbuf+lNbVal*received_rank+j) << " ";
            }
            std::cout << std::endl;
        }
    }

    MPI_Finalize();
    return 0;

}
