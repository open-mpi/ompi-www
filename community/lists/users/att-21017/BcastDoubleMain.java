/* Small program that distributes a double value with a
 * broadcast operation.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7" or newer.
 *
 *
 * Class file generation:
 *   mpijavac BcastDoubleMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] BcastDoubleMain
 *
 * Examples:
 *   mpiexec -np 2 java BcastDoubleMain
 *   mpiexec -np 2 java -cp $HOME/mpi_classfiles BcastDoubleMain
 *
 *
 * File: BcastDoubleMain		Author: S. Gross
 * Date: 21.12.2012
 *
 */

import mpi.*;

public class BcastDoubleMain
{
  public static void main (String args[]) throws MPIException
  {
    int	   mytid;			/* my task id			*/
    double doubleValue = 0.0;		/* broadcast doubleValue	*/
    String processor_name;		/* name of local machine	*/

    MPI.Init (args);
    processor_name = MPI.Get_processor_name ();
    mytid	   = MPI.COMM_WORLD.Rank ();
    if (mytid == 0)
    {
      /* initialize data item						*/
      doubleValue = 1234567.0;
    }
    /* broadcast value to all processes					*/
    MPI.COMM_WORLD.Bcast (doubleValue, 0, 1, MPI.DOUBLE, 0);
    /* Each process prints its received data item. The outputs
     * can intermingle on the screen so that you must use
     * "-output-filename" in Open MPI.
     */
    System.out.printf ("\nProcess %d running on %s.\n" +
		       "  doubleValue: %f\n",
		       mytid, processor_name, doubleValue);
    MPI.Finalize();
  }
}
