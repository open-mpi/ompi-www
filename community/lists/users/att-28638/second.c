#include "mpi.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.11.sdk/usr/include/machine/types.h"
#define comm MPI_COMM_WORLD

#define MAX 2

double buffer[MAX];
double puffer[MAX];
double Ergebnis[MAX];


//using namespace std;


int main(int argc, char **argv )
{

  int i, j, rank, size, info, anz, ndat = MAX;
  
  MPI_Group group;
  MPI_Status status;
 
  
  MPI_Init( & argc, & argv );

  MPI_Comm_rank(comm, & rank);
  MPI_Comm_size(comm, & size);
  MPI_Comm_group(comm, & group);
  MPI_Win  win[rank];

  //printf(" print %s  \n", group);
  
  /* Mastertask */
  if ( rank == 0 )
  {
    for(i=0; i< anz; i++)
    {
      /* Öffne für jeden Sklaven ein Fenster */
      MPI_Win_create( &puffer[i], MAX*sizeof(double), sizeof(double), MPI_INFO_NULL, comm,  &win[i]);
      MPI_Win_post( group, 0, win[i]); /* Freigabe des Fensters */
    }
    
    i=0;
      
    for(j=1; j< anz; j++)
    {  /* Überprüfe welches Fenster frei ist */
      for(info=0;!info;i = i%(anz-1)+1)
      MPI_Win_test(win[i], &info);
      //Arbeite(&puffer[i],ndat);
       /* Daten in puffer[i] sind freigeben */
     }
  }
  
  else

  {
    for(i=1;i< anz;i++)
      /*Öffne anz Fenster der Größe 0  */
      MPI_Win_create(&puffer[i], 0, 1, MPI_INFO_NULL, comm, &win[i]);
    //viel_Arbeit(Ergebnis,&ndat);

      /* Blockierender Zugriff auf das Fenster */
      MPI_Win_start(group, 0, win[rank]);
      MPI_Put(Ergebnis, ndat, MPI_DOUBLE, 0, 0, ndat, MPI_DOUBLE, win[rank]);
    /* Blockierende Freigabe des Fensters */
      MPI_Win_complete( win[rank] ); 
  }
  
  for(i=0;i<anz;i++)
    MPI_Win_free( &win[i] ); /* Schließen des Fensters */

  return 0;
}

