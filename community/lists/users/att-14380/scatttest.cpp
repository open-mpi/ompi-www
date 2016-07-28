#include <iostream>
#include <vector>
#include <time.h>
#include <mpi.h>

using namespace std;

int main(int argc, char *argv[])
{
    // MPI variables
    int master = 0;
    int rank;
    int numprocs;
    MPI::Status mpistat;

    // MPI Initialization
    MPI::Init ( argc, argv );
    numprocs = MPI::COMM_WORLD.Get_size ( );
    rank = MPI::COMM_WORLD.Get_rank ( );
    
    int ipop, popsize = numprocs;
    int iter, maxiter = 5000;
    int c, c1, c2; 
    time_t t1, t2;

    int totalsize=300*30*popsize;
    int indsize=300*30;
    vector<short> pop(totalsize, 1);
    vector<short> ind(indsize, 1);
    t1=clock();
    for(c1=0; c1< maxiter; c1++)
    {
        if(rank == 0)
            for(c=0; c<totalsize; c++)
                pop[c]=c1;
        // Scatter the pop to all procs
        MPI::COMM_WORLD.Scatter(&pop[0], indsize, MPI::SHORT, &ind[0], indsize, MPI::SHORT, 0);
        MPI::COMM_WORLD.Barrier();
    }
    t2=clock();
    if(rank ==0) cout << "pop="<<popsize<< " time1="<<difftime(t2, t1)/CLOCKS_PER_SEC<<endl;
    t1=clock();
    for(c1=0; c1< maxiter; c1++)
    {
        if(rank == 0)
            for(c=0; c<totalsize; c++)
                pop[c]=c1;
        // Scatter the pop to all procs
        for(c2=0; c2<numprocs; c2++)     
        {
            if(rank == 0)
                MPI::COMM_WORLD.Send(&pop[300*30*c2], indsize, MPI::SHORT, c2, c2);
            if(rank == c2) 
                MPI::COMM_WORLD.Recv(&ind[0], indsize, MPI::SHORT, 0, c2, mpistat);
        }
        MPI::COMM_WORLD.Barrier();
    }
    t2=clock();
    if(rank ==0) cout << "pop="<<popsize<< " time2="<<difftime(t2, t1)/CLOCKS_PER_SEC<<endl;
    MPI::Finalize();
    return 0;
}

    
