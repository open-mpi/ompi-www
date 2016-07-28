/* Small program that creates and prints column vectors of a matrix.
 * This version uses the Scatter operation.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7" or newer.
 *
 *
 * Class file generation:
 *   mpijavac ColumnScatterMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] ColumnScatterMain
 *
 * Examples:
 *   mpiexec -np 6 java ColumnScatterMain
 *   mpiexec -np 6 java -cp $HOME/mpi_classfiles ColumnScatterMain
 *
 *
 * File: ColumnScatterMain		Author: S. Gross
 * Date: 10.10.2012
 *
 */

import mpi.*;

public class ColumnScatterMain
{
  static final int P = 4;			/* # of rows		*/
  static final int Q = 6;			/* # of columns		*/
  static final int NUM_ELEM_PER_LINE = 6;	/* to print a vector	*/

  public static void main (String args[]) throws MPIException
  {
    int      ntasks,			/* number of parallel tasks	*/
	     mytid,			/* my task id			*/
	     i, j,			/* loop variables		*/
	     tmp;			/* temporary value		*/
    double   matrix[][],
	     column[];
    Datatype column_t;			/* strided vector		*/

    MPI.Init (args);
    matrix = new double[P][Q];
    column = new double[P];
    mytid  = MPI.COMM_WORLD.Rank ();
    ntasks = MPI.COMM_WORLD.Size ();
    /* check that we have the correct number of processes in our
     * universe
     */
    if (mytid == 0)
    {
      if (ntasks != Q)
      {
	System.err.println ("\n\nI need exactly " + Q +
			    " processes.\n\n" +
			    "Usage:\n" +
			    "  mpiexec -np " + Q + 
			    " java <program name>\n");
      }
    }
    if (ntasks != Q)
    {
      MPI.Finalize ();
      System.exit (0);
    }
    /* Build the new type for a strided vector.				*/
    column_t = Datatype.Vector (P, 1, Q, MPI.DOUBLE);
    column_t.Commit ();
    if (mytid == 0)
    {
      tmp = 1;
      for (i = 0; i < P; ++i)			/* initialize matrix	*/
      {
	for (j = 0; j < Q; ++j)
        {
	  matrix[i][j] = tmp++;
	}
      }
      System.out.println ("\nmatrix:\n");	/* print matrix		*/
      for (i = 0; i < P; ++i)
      {
	for (j = 0; j < Q; ++j)
	{
	  System.out.printf ("%10.2f", matrix[i][j]);
	}
	System.out.println ();
      }
      System.out.println ();
    }
    MPI.COMM_WORLD.Scatter (matrix, 0, 1, column_t,
			    column, 0, P, MPI.DOUBLE, 0);
    /* Each process prints its column. The output will probably
     * intermingle on the screen so that you must use
     * "-output-filename" in Open MPI.
     */
    System.out.println ("\nColumn of process " + mytid + "\n");
    for (i = 0; i < P; ++i)
    {
      if (((i + 1) % NUM_ELEM_PER_LINE) == 0)
      {
	System.out.printf ("%10.2f\n", column[i]);
      }
      else
      {
	System.out.printf ("%10.2f", column[i]);
      }
    }
    System.out.println ();
    column_t.finalize ();
    MPI.Finalize();
  }
}

