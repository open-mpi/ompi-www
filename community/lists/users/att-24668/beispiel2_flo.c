/*
*	Beispiel Program für RMA mit MPI 2
*	Beispiel Nr. 1
* 
*	Einfuehrung von MPI_Win_create()
*	MPI_Win_fence() und MPI_get()
*
*	Author Florian Hahner
*	Datum 11. Jun 2014
* 	Version 1.0
*/

#include <stdio.h>
#include <stdlib.h>
#include <mpi.h>
int main(int argc, char** argv)
{
	int rank, size, *a, *b, namelen, i, sizereal, flag;
	char processor_name[MPI_MAX_PROCESSOR_NAME];
	MPI_Win win;
	MPI_Init(&argc, &argv);		/* Initialisiere MPI Umgebung 	*/
	/* Ermittle den aktuellen Rang des Prozesses 			*/
	MPI_Comm_rank(MPI_COMM_WORLD, &rank); 
	/* Ermittle die Anzahl aller Prozesse im Communicator		*/
  	MPI_Comm_size(MPI_COMM_WORLD, &size);
  	/* Ermittle den Prozessornamen auf dem der akt. Prozess läuft	*/
  	MPI_Get_processor_name(processor_name, &namelen);
  	printf("Guten Tag. Ich bin Prozess %d von %d. Ich werde auf Host %s ausgefuehrt\n", rank, size, processor_name);
  	/* Speicherreservierung f�r ein int-Arrays der Groesse size 	*/
  	MPI_Alloc_mem(sizeof(int)*size, MPI_INFO_NULL, &a);
	MPI_Alloc_mem(sizeof(int), MPI_INFO_NULL, &b);
  	if (rank==0)			/* Master Prozess */
  	{
  		for(i = 0; i < size; i++)
  		{
  			a[i] = i * 100;
			printf("a[%d]=%d\n", i, a[i]);
  		}
	}
	MPI_Win_create(a, size * sizeof(int), sizeof(int), MPI_INFO_NULL, MPI_COMM_WORLD, &win);
	printf ("ok1\n");
	if (rank == 0)
	{+
	  MPI_Win_get_attr(win, MPI_WIN_SIZE, &sizereal, &flag);
	  printf ("ok2\n");
	  if (flag == 0)
	  {
	    printf ("MPI_Win_get_attr(): Unknown attribute\n");
	    exit (EXIT_FAILURE);
	  }
	  else
	  {
	    printf("Real Size %d\n", sizereal); 
	  }
	}
	else
	{
	  printf ("Process %d after MPI_Win_create()\n");
	}
	printf ("ok3\n");

  	/* Erstellen des lokalen Speicherfensters		*/
  	/* Das Speicherfenster zeigt auf den Adressraum des     */
  	/* int-Arrays a. Es hat die Größe von size*sizeof(int)	*/
  	/* und nutze das Window Objekt win 			*/
  	
	MPI_Win_fence(0, win);
        if (rank>0)
	  {
	    MPI_Get(b, 1, MPI_INT, 0, rank, 1, MPI_INT, win);
	  }
  	MPI_Win_fence(0, win);
  	
	if (rank>0)
	{
	  printf("Prozess %d# hat Wert %d von Prozess 0 geholt\n", rank, b);
  	}

  	MPI_Win_free(&win);
	MPI_Free_mem(a);
	MPI_Finalize();
}
