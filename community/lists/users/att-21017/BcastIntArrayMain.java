/* Small program that distributes an array of integer values with a
 * broadcast operation.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7" or newer.
 *
 *
 * Class file generation:
 *   mpijavac BcastIntArrayMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] BcastIntArrayMain
 *
 * Examples:
 *   mpiexec -np 2 java BcastIntArrayMain
 *   mpiexec -np 2 java -cp $HOME/mpi_classfiles BcastIntArrayMain
 *
 *
 * File: BcastIntArrayMain		Author: S. Gross
 * Date: 21.12.2012
 *
 */

import mpi.*;

public class BcastIntArrayMain
{
  public static void main (String args[]) throws MPIException
  {
    int	   mytid;			/* my task id			*/
    int    intValues[];			/* broadcast array of intValues	*/
    String processor_name;		/* name of local machine	*/

    MPI.Init (args);
    processor_name = MPI.Get_processor_name ();
    mytid	   = MPI.COMM_WORLD.Rank ();
    intValues	   = new int[2];
    if (mytid == 0)
    {
      /* initialize data items						*/
      intValues[0] = 1234567;
      intValues[1] = 7654321;
    }
    /* broadcast value to all processes					*/
    MPI.COMM_WORLD.Bcast (intValues, 0, 2, MPI.INT, 0);
    /* Each process prints its received data item. The outputs
     * can intermingle on the screen so that you must use
     * "-output-filename" in Open MPI.
     */
    System.out.printf ("\nProcess %d running on %s.\n" +
		       "  intValues[0]: %d    intValues[1]: %d\n",
		       mytid, processor_name,
		       intValues[0], intValues[1]);
    MPI.Finalize();
  }
}
