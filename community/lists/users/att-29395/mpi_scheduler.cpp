#ifdef _WIN32
#include <windows.h>
#define OMPI_IMPORTS
#endif

#include <cstdlib>
#include <iostream>

#include <mpi.h>

using namespace std;

int main ( int argc, char *argv[] )
{

#ifdef _WIN32
  char procname[] = "mpi_executor.exe";
#else
  char procname[] = "mpi_executor";
#endif
  int output_val;
  int iaProgress[16];
  double wtime;

  int iMaxNode = 4;
  char cFunc[] = "sin";
  char *pcFunc = cFunc;

  if ( argc > 1 ) {
    iMaxNode = atoi( argv[1] );
    if ( argc > 2 )
      pcFunc = argv[2];
  }

cerr << " scheduler: MPI_Init"<< endl;
  MPI_Init(&argc, &argv);

    void *v;
    int flag;
    int vval;
    int size;
    MPI_Comm_size( MPI_COMM_WORLD, &size );
  cerr << "-->MPI_COMM_WORLD size = "<< size << endl;
    MPI_Comm_get_attr( MPI_COMM_WORLD, MPI_UNIVERSE_SIZE, &v, &flag );
    /* MPI_UNIVERSE_SIZE need not be set */
    if (flag) {
        /* But if it is set, it must be at least the size of comm_world */
        vval = *(int *)v;
        if (vval < size) {
            cerr <<"parent: MPI_UNIVERSE_SIZE = "<<vval<<", less than comm world ("<<size<<")" << endl;
        }
      cerr <<"parent: MPI_UNIVERSE_SIZE = " << vval << endl;
    }
  int rank, err[16];
  MPI_Comm childComm;
  MPI_Comm_rank(MPI_COMM_WORLD, &rank);
  if (rank != 0) {
    cerr << " main task rank = "<<rank<<"???"<<endl;
    exit(-1);
  }
cerr <<"scheduler: calling MPI_Comm_spawn for "<<iMaxNode<<" instances of '"<<procname<<"'" << endl;
    MPI_Comm_spawn(procname, MPI_ARGV_NULL, iMaxNode, MPI_INFO_NULL, 0, MPI_COMM_SELF, &childComm, err);
cerr << "scheduler: MPI_Comm_spawn completed" << endl;
    wtime = MPI_Wtime();

  // broadcast strings
  int iLen = int(strlen(pcFunc))+1;  // 1 added to include null terminator
cout << " scheduler broadcasting function string length = "<<iLen<<endl;
  MPI_Bcast ( &iLen, 1, MPI_INT, MPI_ROOT, childComm );
cout << " scheduler broadcast completed"<<endl;

  MPI_Bcast ( (void *)pcFunc, iLen, MPI_CHAR, MPI_ROOT, childComm );

  // broadcast scale, multipler and offset for function
  double dData[] = { 2.5, 1.5, 4.0 };
cout << " scheduler broadcasting data values, size = "<<3*sizeof(double)<<endl;
  MPI_Bcast ( &dData[0], 3*sizeof(double), MPI_BYTE, MPI_ROOT, childComm );
cout << " scheduler broadcast completed"<<endl;

  MPI_Status status;

  int nrecv = 0;
//  Loop until every executor has checked in with progress at 100 percent.
  while ( nrecv < iMaxNode ) {
//  Receive the next message that arrives.
    MPI_Recv ( &output_val, 1, MPI_INT, MPI_ANY_SOURCE, MPI_ANY_TAG, childComm, 
      &status );
//  The actual source of the message is saved in STATUS.
    int recv = status.MPI_SOURCE;
    if ( recv >= iMaxNode )
      cerr << " unexpect recv source = "<<recv<<endl;
    else {
      iaProgress[recv] = output_val;
      if ( output_val == 100 ) ++nrecv;
      cout << "Process "<<recv<<" status="<<iaProgress[recv]<<", time = "<<MPI_Wtime() - wtime<<endl; 
      }
  }

    printf ( "  Process main time = %g\n", MPI_Wtime() - wtime );

    MPI_Finalize();

    printf ( "  Normal end of execution.\n" );

  return 0;
}

