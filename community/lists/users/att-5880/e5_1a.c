
#include <stdio.h>
#include <stdlib.h>
#include "mpi.h"

#define	P		4		/* # of rows			*/
#define Q		2		/* # of columns			*/
#define FAKTOR		2		/* multiplicator for col. elem.	*/

static void print_matrix (int p, int q, double **mat);

int main (int argc, char *argv[])
{
  int    ntasks,			/* number of parallel tasks	*/
         mytid,				/* my task id			*/
         namelen,			/* length of processor name	*/
         i, j,				/* loop variables		*/
         tmp;				/* temporary value		*/
  double matrix[P][Q],
	 column[2];
  /*	 column[P];*/
  int	 blockcounts[2] = {1, 1};

  MPI_Datatype	types[2]       = {MPI_DOUBLE, MPI_UB};
  MPI_Aint	offsets[2]     = {0, Q * sizeof (double)};
  MPI_Datatype	coltype;

  MPI_Init (&argc, &argv);
  MPI_Comm_rank (MPI_COMM_WORLD, &mytid);
  MPI_Comm_size (MPI_COMM_WORLD, &ntasks);
  /* check that we have the correct number of processes in our universe	*/
  if (mytid == 0)
  {
    if (ntasks != Q)
    {
      printf ("\n\nWe need exactly %d processes.\n"
	      "Usage: mpirun -w -np %d N %s\n\n\n",
	      Q, Q, argv[0]);
    }
  }
  if (ntasks != Q)
  {
    MPI_Finalize ();
    exit (EXIT_FAILURE);
  }
  /* build the new type for a strided vector				*/
  MPI_Type_struct (2, blockcounts, offsets, types, &coltype);
  MPI_Type_commit (&coltype);
  if (mytid == 0)
  {
    tmp = 1;
    for (i = 0; i < P; ++i)		/* initialize matrix		*/
    {
      for (j = 0; j < Q; ++j)
      {
	matrix[i][j] = tmp++;
      }
    }
    printf ("\n\noriginal matrix:\n\n");
    print_matrix (P, Q, (double **) matrix);
  }
  /* distribute columns							*/
  MPI_Scatter (matrix, 2, coltype, column, 2, MPI_DOUBLE, 0,
  /*  MPI_Scatter (matrix, P, coltype, column, P, MPI_DOUBLE, 0,*/
	       MPI_COMM_WORLD);
  printf ("rank: %d  c0: %g  c1: %g\n", mytid, column[0], column[1]);
  for (i = 0; i < 2; ++i)
  /*  for (i = 0; i < P; ++i)*/
  {
    if ((mytid % 2) == 0)
    {
      column[i] = column[i] * column[i];
    }
    else
    {
      column[i] = column[i] * FAKTOR;
    }
  }
  /* wait for result vectors		     				*/
  MPI_Gather (column, 2, MPI_DOUBLE, matrix, 2, coltype, 0,
  /*  MPI_Gather (column, P, MPI_DOUBLE, matrix, P, coltype, 0,*/
	      MPI_COMM_WORLD);
  if (mytid == 0)
  {
    printf ("\n\nresult matrix:\n"
	    "(odd columns: elements squared; even columns: elements "
	    "multiplied with %d)\n\n", FAKTOR);
    print_matrix (P, Q, (double **) matrix);
  }
  MPI_Type_free (&coltype);
  MPI_Finalize ();
  return EXIT_SUCCESS;
}


/* print the values of a matrix
 *
 * input parameters:	p	number of rows
 *			q	number of columns
 *			mat	2D-matrix of "double" values
 * output parameters:	none
 * return value:	none
 * side effects:	none
 *
 */
void print_matrix (int p, int q, double **mat)
{
  int i, j;				/* loop variables		*/

  for (i = 0; i < p; ++i)
  {
    for (j = 0; j < q; ++j)
    {
      printf ("%6g", *((double *) mat + i * q + j));
    }
    printf ("\n");
  }
  printf ("\n");
}

