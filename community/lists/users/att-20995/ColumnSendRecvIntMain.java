/* Small program that creates and prints column vectors of a matrix.
 * This version uses Send/Recv operations.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7" or newer.
 *
 *
 * Class file generation:
 *   mpijavac ColumnSendRecvIntMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] ColumnSendRecvIntMain
 *
 * Examples:
 *   mpiexec -np 7 java ColumnSendRecvIntMain
 *   mpiexec -np 7 java -cp $HOME/mpi_classfiles ColumnSendRecvIntMain
 *
 *
 * File: ColumnSendRecvIntMain		Author: S. Gross
 * Date: 18.12.2012
 *
 */

import mpi.*;

public class ColumnSendRecvIntMain
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
    int	     matrix[][],
	     column[];
    Datatype column_t;			/* strided vector		*/

    MPI.Init (args);
    matrix = new int[P][Q];
    column = new int[P];
    mytid  = MPI.COMM_WORLD.Rank ();
    ntasks = MPI.COMM_WORLD.Size ();
    /* check that we have the correct number of processes in our
     * universe
     */
    if (mytid == 0)
    {
      if (ntasks != (Q + 1))
      {
	System.err.println ("\n\nI need exactly " + (Q + 1) +
			    " processes.\n\n" +
			    "Usage:\n" +
			    "  mpiexec -np " + (Q + 1) + 
			    " java <program name>\n");
      }
    }
    if (ntasks != (Q + 1))
    {
      MPI.Finalize ();
      System.exit (0);
    }
    /* Build the new type for a strided vector.				*/
    column_t = Datatype.Vector (P, 1, Q, MPI.INT);
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
	  System.out.printf ("%6d  ", matrix[i][j]);
	}
	System.out.println ();
      }
      System.out.println ();
    }
    if (mytid == 0)
    {
      /* send one column to each process				*/
      for (i = 0; i < Q; ++i)
      {
	MPI.COMM_WORLD.Send (matrix, i, 1, column_t, i + 1, 0);
      }
    }
    else
    {
      MPI.COMM_WORLD.Recv (column, 0, P, MPI.DOUBLE, 0, 0);
      /* Each process prints its column. The output will probably
       * intermingle on the screen so that you must use
       * "-output-filename" in Open MPI.
       */
      System.out.println ("\nColumn of process " + mytid + "\n");
      for (i = 0; i < P; ++i)
      {
	if (((i + 1) % NUM_ELEM_PER_LINE) == 0)
        {
	  System.out.printf ("%6d\n", column[i]);
	}
	else
        {
	  System.out.printf ("%6d", column[i]);
	}
      }
      System.out.println ();
    }
    column_t.finalize ();
    MPI.Finalize();
  }
}
