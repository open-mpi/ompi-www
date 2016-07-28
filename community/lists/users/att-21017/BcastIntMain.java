/* Small program that distributes an integer value with a
 * broadcast operation.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7" or newer.
 *
 *
 * Class file generation:
 *   mpijavac BcastIntMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] BcastIntMain
 *
 * Examples:
 *   mpiexec -np 2 java BcastIntMain
 *   mpiexec -np 2 java -cp $HOME/mpi_classfiles BcastIntMain
 *
 *
 * File: BcastIntMain		Author: S. Gross
 * Date: 21.12.2012
 *
 */

import mpi.*;

public class BcastIntMain
{
  public static void main (String args[]) throws MPIException
  {
    int	   mytid;			/* my task id			*/
    int    intValue = 0;		/* broadcast intValue		*/
    String processor_name;		/* name of local machine	*/

    MPI.Init (args);
    processor_name = MPI.Get_processor_name ();
    mytid	   = MPI.COMM_WORLD.Rank ();
    if (mytid == 0)
    {
      /* initialize data item						*/
      intValue = 1234567;
    }
    /* broadcast value to all processes					*/
    MPI.COMM_WORLD.Bcast (intValue, 0, 1, MPI.INT, 0);
    /* Each process prints its received data item. The outputs
     * can intermingle on the screen so that you must use
     * "-output-filename" in Open MPI.
     */
    System.out.printf ("\nProcess %d running on %s.\n" +
		       "  intValue: %d\n",
		       mytid, processor_name, intValue);
    MPI.Finalize();
  }
}
