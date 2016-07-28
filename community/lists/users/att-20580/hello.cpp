#include <iostream>
#include <mpi.h>

extern "C"  void RED(int*,int*);

int main( int argc, char* argv[] )
{
	int ier=MPI_SUCCESS, rank=-1, size=0 ;
	ier = MPI_Init( &argc, &argv ) ;
    ier = MPI_Comm_size( MPI_COMM_WORLD, &size ) ;
	ier = MPI_Comm_rank( MPI_COMM_WORLD, &rank ) ;
	for( int i=0 ; i<size ; ++i )
	{
	  ier = MPI_Barrier( MPI_COMM_WORLD ) ;
      if( i==rank ) std::cout << "Hello world, I am the processor #" << rank << " on " << size << std::endl ;
	  ier = MPI_Barrier( MPI_COMM_WORLD ) ;
    }

	int k = rank ;
	ier = MPI_Bcast( &k, 1, MPI_INT, 0, MPI_COMM_WORLD ) ;

	
	for( int i=0 ; i<size ; ++i )
	{
	  ier = MPI_Barrier( MPI_COMM_WORLD ) ;
      if( i==rank ) std::cout << "I am still the processor #" << rank << " and I received " << k << std::endl ;
	  ier = MPI_Barrier( MPI_COMM_WORLD ) ;
    }

	int c = MPI_Comm_c2f( MPI_COMM_WORLD ) ;
	int rr = -1 ;
	RED(&c,&rr) ;
	for( int i=0 ; i<size ; ++i )
	{
	  ier = MPI_Barrier( MPI_COMM_WORLD ) ;
	  if( i==rank ) std::cout << "red=" << rr << std::endl ;
	  ier = MPI_Barrier( MPI_COMM_WORLD ) ;
    }
#if 0
	int buf[2], recv[2] ;
	buf[0]=rank ;
	buf[1]=rank*-1 ;
	MPI_Allreduce( buf,recv,2,MPI_INT, MPI_MAX,MPI_COMM_WORLD ) ;
	
	for( int i=0 ; i<size ; ++i )
	{
	  ier = MPI_Barrier( MPI_COMM_WORLD ) ;
	  if( !rank ) std::cout << "RECV[]=" << recv[0] << "," << recv[1] << std::endl ;
	  ier = MPI_Barrier( MPI_COMM_WORLD ) ;
    }
#endif
	ier = MPI_Finalize() ;
	return 0 ;
}