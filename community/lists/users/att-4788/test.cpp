#include <iostream>
#include <mpi.h>

const int ARRAYSIZE = 150;

int main(int argc, char* argv[])
{
    MPI_Init(&argc, &argv);
    int rank, anzprocs, recvcount, sendcnt;
    MPI_Comm_size(MPI_COMM_WORLD, &anzprocs);
    MPI_Comm_rank(MPI_COMM_WORLD, &rank);
    
    const int WORKING = ARRAYSIZE/anzprocs;

    double stat[ARRAYSIZE][2];
    double stathlp[WORKING][2];
    
    if (rank == 0)
        for (int i = 0; i < ARRAYSIZE; ++i)
            for (int j = 0; j < 2; ++j)
                stat[i][j] = i * 10 + j;

    double stat2[WORKING][5];
    double stat3[anzprocs][ARRAYSIZE][5];
    if (rank==0) 
        sendcnt=WORKING*2;

    MPI::COMM_WORLD.Scatter(
        stat, 
        sendcnt, 
        MPI::DOUBLE, 
        stathlp, 
        WORKING*2, 
        MPI::DOUBLE, 
        0);

    for(int i=0; i < WORKING; i++){
        stat2[i][0] = stathlp[i][0];
        stat2[i][1] = stathlp[i][1];
        stat2[i][2] = (stat2[i][0]*stat2[i][1]);
        stat2[i][3] = (stat2[i][0]*stat2[i][0]);
        stat2[i][4] = (stat2[i][1]*stat2[i][1]);
    }
    
    if (rank==0) 
        recvcount=WORKING*5;

    MPI_Gather(
        &stat2, 
        WORKING*5, 
        MPI_DOUBLE,
        &stat3, 
        recvcount,
        MPI_DOUBLE,
        0, 
        MPI_COMM_WORLD);
        
    if (rank==0){
        std::cout << stat3[0][0][0] << std::endl;
        std::cout << stat3[1][0][0] << std::endl;
        std::cout << stat3[2][0][0] << std::endl;

        std::cout << stat3[0][1][0] << std::endl;
        std::cout << stat3[1][1][0] << std::endl;
        std::cout << stat3[2][1][0] << std::endl;

        std::cout << stat3[0][1][1] << std::endl;
        std::cout << stat3[1][1][1] << std::endl;
        std::cout << stat3[2][1][1] << std::endl;
    }
    MPI_Finalize();
 }

