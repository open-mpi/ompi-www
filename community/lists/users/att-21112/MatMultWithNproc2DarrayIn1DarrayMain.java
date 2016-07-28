/* Matrix multiplication: c = a * b.
 *
 * This program needs one process for each row of matrix "a".
 *
 * At the moment (January 2013) the Java interface of Open MPI
 * for the broadcast, gather, and scatter operations can only
 * handle multi-dimensional arrays, if they are stored in a
 * contiguous memory area. Unfortunately Java stores a
 * 2-dimensional array as array of arrays (one 1-dimensional
 * array for each row and another 1-dimensional array for the
 * object IDs of the rows), i.e., each 1-dimensional array is
 * stored in a contiguous memory area, but the whole matrix
 * isn't stored in a contiguous memory area. Therefore it is
 * necessary to simulates a 2-dimensional array in an
 * 1-dimensional array and to compute all indices manually at
 * the moment.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7" or newer.
 *
 *
 * Class file generation:
 *   mpijavac MatMultWithNproc2DarrayIn1DarrayMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] \
 *	MatMultWithNproc2DarrayIn1DarrayMain
 *
 * Examples:
 *   mpiexec -np 4 java MatMultWithNproc2DarrayIn1DarrayMain
 *   mpiexec -np 4 java -cp $HOME/mpi_classfiles \
 *	MatMultWithNproc2DarrayIn1DarrayMain
 *
 *
 * File: MatMultWithNproc2DarrayIn1DarrayMain.java	Author: S. Gross
 * Date: 15.01.2013
 *
 */

import mpi.*;

public class MatMultWithNproc2DarrayIn1DarrayMain
{
  static final int P = 4;		/* # of rows			*/
  static final int Q = 6;		/* # of columns / rows		*/
  static final int R = 8;		/* # of columns			*/
  static final int SLEEP_FACTOR = 500;	/* 500 ms to get ordered output	*/

  public static void main (String args[]) throws MPIException,
						 InterruptedException
  {
    int    ntasks,			/* number of parallel tasks	*/
	   mytid,			/* my task id			*/
	   i, j, k,			/* loop variables		*/
	   tmp;				/* temporary value		*/
    double a[], b[],			/* matrices to multiply		*/
	   c[],				/* matrix for result		*/
	   row_a[],			/* one row of matrix "a"	*/
	   row_c[];			/* one row of matrix "c"	*/
    String processor_name;		/* name of local machine	*/

    MPI.Init (args);
    processor_name = MPI.Get_processor_name ();
    mytid	   = MPI.COMM_WORLD.Rank ();
    ntasks	   = MPI.COMM_WORLD.Size ();
    a		   = new double[P * Q];
    b		   = new double[Q * R];
    c		   = new double[P * R];
    row_a	   = new double[Q];
    row_c	   = new double[R];

    if (ntasks != P)
    {
      /* wrong number of processes					*/
      if (mytid == 0)
      {
	String className =
	  new MatMultWithNproc2DarrayIn1DarrayMain().getClass().getName();
	System.err.printf ("\nI need %d processes.\n" +
			   "Usage:\n" +
			   "  mpiexec -np %d java %s\n\n",
			   P, P, className);
      };
      MPI.Finalize();
      System.exit (0);
    }
    /* Each process prints a small message. Messages can intermingle
     * on the screen so that you can use "-output-filename" in
     * Open MPI to separate the messages from different processes.
     * Sleep different times and try to get ordered output.
     */
    Thread.sleep (SLEEP_FACTOR * mytid);
    System.out.printf ("Process %d of %d running on %s.\n",
		       mytid, ntasks, processor_name);
    MPI.COMM_WORLD.Barrier ();		/* wait for all other processes	*/
    if (mytid == 0)
    {
      tmp = 1;
      for (i = 0; i < P; ++i)		/* initialize matrix a		*/
      {
	for (j = 0; j < Q; ++j)
	{
	  a[i * Q + j] = tmp++;
	}
      }
      /* print matrix a							*/
      System.out.printf ("\n(%d,%d)-matrix a:\n\n", P, Q);
      PrintArray.P2Din1D (P, Q, a);
      tmp = Q * R;
      for (i = 0; i < Q; ++i)		/* initialize matrix b		*/
      {
	for (j = 0; j < R; ++j)
	{
	  b[i * R + j] = tmp--;
	}
      }
      /* print matrix b							*/
      System.out.printf ("(%d,%d)-matrix b:\n\n", Q, R);
      PrintArray.P2Din1D (Q, R, b);
    }
    /* send matrix "b" to all processes					*/
    MPI.COMM_WORLD.Bcast (b, 0, Q * R, MPI.DOUBLE, 0);
    /* send row i of "a" to process i					*/
    MPI.COMM_WORLD.Scatter (a, 0, Q, MPI.DOUBLE,
			    row_a, 0, Q, MPI.DOUBLE, 0);

    for (j = 0; j < R; ++j)		/* compute i-th row of "c"	*/
    {
      row_c[j] = 0.0;
      for (k = 0; k < Q; ++k)
      {
	row_c[j] = row_c[j] + row_a[k] * b[k * R + j];
      }
    }
    /* receive row i of "c" from process i				*/
    MPI.COMM_WORLD.Gather (row_c, 0, R, MPI.DOUBLE,
			   c, 0, R, MPI.DOUBLE, 0);
    if (mytid == 0)
    {
      /* print matrix c							*/
      System.out.printf ("(%d,%d)-result-matrix c = a * b:\n\n", P, R);
      PrintArray.P2Din1D (P, R, c);
    }
    MPI.Finalize();
  }
}
