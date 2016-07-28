#include <stdio.h>
#include <stdlib.h>
#include "mpi.h"

#define	P		4		/* # of rows			*/
#define Q		6		/* # of columns / rows		*/
#define R		8		/* # of columns			*/

static void print_matrix (int p, int q, double **mat);

int main (int argc, char *argv[])
{
  int	 ntasks,			/* number of parallel tasks	*/
	 mytid,				/* my task id			*/
	 namelen,			/* length of processor name	*/
	 i, j, k,			/* loop variables		*/
	 tmp;				/* temporary value		*/
  double a[P][Q], b[Q][R],		/* matrices to multiply		*/
	 c[P][R],			/* matrix for result		*/
	 row_a[Q],			/* one row of matrix "a"	*/
	 row_c[R];			/* one row of matrix "c"	*/
  char	 processor_name[MPI_MAX_PROCESSOR_NAME];

  MPI_Init (&argc, &argv);
  MPI_Comm_rank (MPI_COMM_WORLD, &mytid);
  MPI_Comm_size (MPI_COMM_WORLD, &ntasks);
  MPI_Get_processor_name (processor_name, &namelen);
  fprintf (stdout, "Process %d of %d running on %s\n",
	   mytid, ntasks, processor_name);
  fflush (stdout);
  MPI_Barrier (MPI_COMM_WORLD);		/* wait for all other processes	*/

  if ((ntasks != P) && (mytid == 0))
  {
    fprintf (stderr, "\n\nI need %d processes.\n"
	     "Usage:\n"
	     "  mpiexec -np %d %s.\n\n",
	     P, P, argv[0]);
  }
  if (ntasks != P)
  {
    MPI_Finalize ();
    exit (EXIT_FAILURE);
  }
  if (mytid == 0)
  {
    tmp = 1;
    for (i = 0; i < P; ++i)		/* initialize matrix a		*/
    {
      for (j = 0; j < Q; ++j)
      {
	a[i][j] = tmp++;
      }
    }
    printf ("\n\n(%d,%d)-matrix a:\n\n", P, Q);
    print_matrix (P, Q, (double **) a);
    tmp = Q * R;
    for (i = 0; i < Q; ++i)		/* initialize matrix b		*/
    {
      for (j = 0; j < R; ++j)
      {
	b[i][j] = tmp--;
      }
    }
    printf ("(%d,%d)-matrix b:\n\n", Q, R);
    print_matrix (Q, R, (double **) b);
  }
  /* send matrix "b" to all processes					*/
  MPI_Bcast (b, Q * R, MPI_DOUBLE, 0, MPI_COMM_WORLD);
  /* send row i of "a" to process i					*/
  MPI_Scatter (a, Q, MPI_DOUBLE, row_a, Q, MPI_DOUBLE, 0,
	       MPI_COMM_WORLD);
  for (j = 0; j < R; ++j)		/* compute i-th row of "c"	*/
  {
    row_c[j] = 0.0;
    for (k = 0; k < Q; ++k)
    {
      row_c[j] = row_c[j] + row_a[k] * b[k][j];
    }
  }
  /* receive row i of "c" from process i				*/
  MPI_Gather (row_c, R, MPI_DOUBLE, c, R, MPI_DOUBLE, 0,
	      MPI_COMM_WORLD);
  if (mytid == 0)
  {
    printf ("(%d,%d)-result-matrix c = a * b :\n\n", P, R);
    print_matrix (P, R, (double **) c);
  }
  MPI_Finalize ();
  return EXIT_SUCCESS;
}


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


