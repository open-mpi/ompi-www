
#include <fstream>
#include <iostream>
#include <iomanip>
#include <math.h>
#ifndef NO_MPI 
#include <mpi.h>
#endif
#include <limits>

using namespace std;

int main( int nargs, char *args[] )
{
  int mpi_rank, mpi_size;
#ifndef NO_MPI
  MPI_Init( &nargs, &args );
  MPI_Comm_rank( MPI_COMM_WORLD, &mpi_rank );
  MPI_Comm_size( MPI_COMM_WORLD, &mpi_size );
#else
  mpi_rank = 0;
  mpi_size = 1;
#endif

  int  nbuf =  std::numeric_limits<int>::max();

  if ( nargs < 2 ){
    if ( mpi_rank == 0 ){
      cerr<<"usage:\n"
	  <<"------\n"
	  <<args[0]<<" filename"<<endl
	  <<"description:\n"
	  <<"------------\n"
	  <<"write 2 x "<<nbuf<<" bytes to file\n"
	  <<"read  1 x "<<nbuf<<" bytes from file\n";
    }
#ifndef NO_MPI
    MPI_Finalize();
#endif
    return 0;
  }

  // filename ---------
  char *sfile = args[1];

#ifndef NO_MPI
  int error, count;
  MPI_File fp;
  MPI_Status stat;
  MPI_Offset fpos;

  if ( mpi_rank == 0 ){
    // allocate buffer
    char *buf  = new char[nbuf];

    // open for write
    error = MPI_File_open( MPI_COMM_SELF, sfile, MPI_MODE_WRONLY | MPI_MODE_CREATE,
			   MPI_INFO_NULL, &fp );
    if( error != MPI_SUCCESS ) {
      cerr<<"error: MPI_File_open for file "<<sfile
	  <<" in mode write|create returns code "<<error<<endl;
      MPI_Abort( MPI_COMM_WORLD, 1 );
    }
    MPI_File_set_size( fp, 0 );
    
    // write (initial) 
    cout<<"write "<<nbuf<<" bytes"<<endl;
    error = MPI_File_write( fp, buf, nbuf, MPI_BYTE, &stat );
    MPI_Get_count( &stat, MPI_BYTE, &count );
    cout<<"MPI_File_write returns code: "<<error<<" count: "<<count<<endl;
    
    // write (add)
    fpos = (MPI_Offset) count;
    cout<<"write: add "<<nbuf<<" bytes at file position "<<count<<endl;
    error = MPI_File_write_at( fp, fpos, buf, nbuf, MPI_BYTE, &stat );
    MPI_Get_count( &stat, MPI_BYTE, &count );
    cout<<"MPI_File_write returns code: "<<error<<" count: "<<count<<endl;

    // close
    MPI_File_close( &fp );

    // open for read
    error = MPI_File_open( MPI_COMM_SELF, sfile, MPI_MODE_RDONLY,
			   MPI_INFO_NULL, &fp );
    if( error != MPI_SUCCESS ) {
      cerr<<"error: MPI_File_open for file "<<sfile 
	  <<" in mode read returns code "<<error<<endl;
      MPI_Abort( MPI_COMM_WORLD, 1 );
    }
    
    // read 
    cout<<"read "<<nbuf<<" bytes"<<endl;
    error = MPI_File_read( fp, buf, nbuf, MPI_BYTE, &stat );
    MPI_Get_count( &stat, MPI_BYTE, &count );
    cout<<"MPI_File_read returns code: "<<error<<" count: "<<count<<endl;
    
    // close
    MPI_File_close( &fp );
    delete[] buf;
  }

  MPI_Barrier( MPI_COMM_WORLD );
  MPI_Finalize();
#else
  size_t count;
  FILE *fp = fopen( sfile, "w" );
  if ( !fp ){
    cerr<<"error: could not open "<<sfile<<" in write mode\n";
    return 1;
  }
  
  // allocate buffer
  char *buf  = new char[nbuf];

  cout<<"write "<<nbuf<<" bytes"<<endl;
  count = fwrite( buf, 1, nbuf, fp );
  cout<<"fwrite returns count: "<<count<<endl;

  cout<<"write: add "<<nbuf<<" bytes"<<endl;
  count = fwrite( buf, 1, nbuf, fp );
  cout<<"fwrite returns "<<count<<endl;

  fclose( fp );

  fp = fopen( sfile, "r" );
  if ( !fp ){
    cerr<<"error: could not open "<<sfile<<" in read mode\n";
    return 1;
  }

  cout<<"read "<<nbuf<<" bytes"<<endl;
  count = fread( buf, 1, nbuf, fp );
  cout<<"read returns "<<count<<endl;

  fclose( fp );
  delete[] buf;
#endif

  return 0;
}


