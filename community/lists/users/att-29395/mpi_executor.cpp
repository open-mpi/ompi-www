#ifdef _WIN32
#include <windows.h>
#define OMPI_IMPORTS
#endif

#include <cstdlib>
#include <iostream>
#include <cmath>
#include <fstream>
#include <string>
#include <mpi.h>

using namespace std;

int main ( int argc, char *argv[] )
{
cerr << " executor: MPI_Init"<< endl;
  MPI_Init ( &argc, &argv );

  int iRank;

  MPI_Comm_rank(MPI_COMM_WORLD,&iRank);
  int numprocs;
  MPI_Comm_size( MPI_COMM_WORLD, &numprocs );
  cerr << " subtask rank = "<<iRank<<" out of "<<numprocs<<endl;
  MPI_Comm parentComm;
  MPI_Comm_get_parent(&parentComm);
    void *v;
    int flag;
    int vval;
    int size = numprocs;
    MPI_Comm_get_attr( MPI_COMM_WORLD, MPI_UNIVERSE_SIZE, &v, &flag );
    /* MPI_UNIVERSE_SIZE need not be set */
    if (flag) {
        /* But if it is set, it must be at least the size of comm_world */
        vval = *(int *)v;
        if (vval < size) {
            fprintf( stderr, "MPI_UNIVERSE_SIZE = %d, less than comm world (%d)\n", vval, size );fflush(stderr);
        }
      fprintf( stderr, "child: MPI_UNIVERSE_SIZE = %d\n", vval );
    }
  // receive broadcast string (length includes null terminator character)
  int iLen;
cout << " Proc"<<iRank<<" wait for first broadcast"<<endl;
  MPI_Bcast ( &iLen, 1, MPI_INT, 0, parentComm );
cout << " Proc"<<iRank<<" string length = "<<iLen<<endl;

  char *pcTemp = new char[iLen];
  MPI_Bcast ( pcTemp, iLen, MPI_CHAR, 0, parentComm );
  string strFunc = pcTemp;
  cout << " Proc"<<iRank<<" string contents = '"<<strFunc<<"'"<<endl;
  delete [] pcTemp;

  // receive broadcast data values
  double vdValues[3];
cout << " Proc"<<iRank<<" wait for broadcast of data values, size="<<3*sizeof(double)<<endl;
  MPI_Bcast ( vdValues, 3*sizeof(double), MPI_BYTE, 0, parentComm );

  cout << " Proc"<<iRank<<" data values='"<<vdValues[0]<<","<<vdValues[1]<<","<<vdValues[2]<<endl;

  fstream fout;
  char cFilename[32];
#ifdef _WIN32
  sprintf_s ( cFilename, 32, "%s_%4.4d.dat", strFunc.c_str(), iRank );
#else
  sprintf ( cFilename, "%s_%4.4d.dat", strFunc.c_str(), iRank );
#endif
  fout.open( cFilename, ios_base::out );

  // perform data processing based on number of nodes, rank, 
  //   the broadcast string and data values
  int iNum = 360/numprocs;
  int iStart = iNum*iRank;
  int iPercent = 0;
  for (int ii=0; ii<iNum; ++ii) {
    double dAngle = double(ii+iStart)*0.0174532925 * vdValues[1];
    // default function
    double dValue = vdValues[0] * dAngle + vdValues[2];
    if ( strFunc.compare("sin")==0 )
      dValue = vdValues[0] * sin( dAngle ) + vdValues[2];
    if ( strFunc.compare("cos")==0 )
      dValue = vdValues[0] * cos( dAngle ) + vdValues[2];
    fout << ii+iStart << "\t "<< dAngle << "\t "<< dValue << endl;
    if ( (ii+1)%10 == 0 && (ii+1<iNum) ) {
      iPercent = int(((ii+1)*100)/iNum);
      MPI_Send ( &iPercent, 1, MPI_INT, 0, (iRank+1)*10, parentComm );
    }
  }
  fout.close();

#ifdef _WIN32
  Sleep((iRank+1)*1000);
#else
  sleep(iRank+1);
#endif
  iPercent = 100;
  MPI_Send ( &iPercent, 1, MPI_INT, 0, (iRank+1)*10, parentComm );

  cout << " Process "<<iRank<<" completed"<<endl;

  MPI_Comm_free( &parentComm );
  MPI_Finalize ( );
 
  return 0; 
}

