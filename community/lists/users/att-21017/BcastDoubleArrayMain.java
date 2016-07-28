/* Small program that distributes an array of double values with a
 * broadcast operation.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7" or newer.
 *
 *
 * Class file generation:
 *   mpijavac BcastDoubleArrayMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] BcastDoubleArrayMain
 *
 * Examples:
 *   mpiexec -np 2 java BcastDoubleArrayMain
 *   mpiexec -np 2 java -cp $HOME/mpi_classfiles BcastDoubleArrayMain
 *
 *
 * File: BcastDoubleArrayMain		Author: S. Gross
 * Date: 21.12.2012
 *
 */

import mpi.*;

public class BcastDoubleArrayMain
{
  public static void main (String args[]) throws MPIException
  {
    int	   mytid;			/* my task id			*/
    double doubleValues[];		/* bcast array of doubleValues	*/
    String processor_name;		/* name of local machine	*/

    MPI.Init (args);
    processor_name = MPI.Get_processor_name ();
    mytid	   = MPI.COMM_WORLD.Rank ();
    doubleValues   = new double[2];
    if (mytid == 0)
    {
      /* initialize data items						*/
      doubleValues[0] = 1234567.0;
      doubleValues[1] = 7654321.0;
    }
    /* broadcast value to all processes					*/
    MPI.COMM_WORLD.Bcast (doubleValues, 0, 2, MPI.DOUBLE, 0);
    /* Each process prints its received data item. The outputs
     * can intermingle on the screen so that you must use
     * "-output-filename" in Open MPI.
     */
    System.out.printf ("\nProcess %d running on %s.\n" +
		       "  doubleValues[0]: %f    doubleValues[1]: %f\n",
		       mytid, processor_name,
		       doubleValues[0], doubleValues[1]);
    MPI.Finalize();
  }
}
