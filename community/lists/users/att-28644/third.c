#include "mpi.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
// #include "/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.11.sdk/usr/include/machine/types.h"
#define comm MPI_COMM_WORLD

#define MAX 2

double *puffer;
double Ergebnis[MAX];


//using namespace std;


int main(int argc, char **argv )
{

  int i, j, rank, size, info, anz=1, ndat = MAX;
  
  MPI_Group group;
  MPI_Status status;
 
  
  MPI_Init( & argc, & argv );

  MPI_Comm_rank(comm, & rank);
  MPI_Comm_size(comm, & size);
  MPI_Comm_group(comm, & group);
  MPI_Win  win;

  //printf(" print %s  \n", group);
  
  /* Öffne für jeden Sklaven ein Fenster */
  MPI_Alloc_mem(MAX*sizeof(double), MPI_INFO_NULL, &puffer);
  MPI_Win_create( &puffer, MAX*sizeof(double), sizeof(double), MPI_INFO_NULL, comm,  &win);
  MPI_Win_post( group, 0, win); /* Freigabe des Fensters */
  MPI_Win_start(group, 0, win);

  MPI_Barrier(MPI_COMM_WORLD);
    
  /* Mastertask */
  if ( rank == 0 )
  {
    i=0;
      
    for(j=1; j< anz; j++)
    {  /* Überprüfe welches Fenster frei ist */
      for(info=0;!info;i = i%(anz-1)+1)
      MPI_Win_test(win, &info);
      //Arbeite(&puffer[i],ndat);
       /* Daten in puffer[i] sind freigeben */
     }
  }
  
  else

  {
    for(i=1;i< anz;i++)
      MPI_Put(Ergebnis, ndat, MPI_DOUBLE, 0, 0, ndat, MPI_DOUBLE, win);
    /* Blockierende Freigabe des Fensters */
  }
  
  MPI_Win_complete( win ); 
  MPI_Win_wait( win ); 
  MPI_Win_free( &win ); /* Schließen des Fensters */

  return 0;
}

