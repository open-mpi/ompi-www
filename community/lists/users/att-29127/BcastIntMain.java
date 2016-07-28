/* Small program that distributes an integer value with a
 * broadcast operation.
 *
 * Java uses call-by-value and doesn't support call-by-reference
 * for method parameters with the only exception of object references.
 * Therefore you must use an array with just one element, if you
 * want to send/receive/broadcast/... primitive datatypes.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7.4" or newer.
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
 * File: BcastIntMain.java		Author: S. Gross
 * Date: 09.09.2013
 *
 */

import mpi.*;

public class BcastIntMain
{
  static final int SLEEP_FACTOR = 200;	/* 200 ms to get ordered output	*/

  public static void main (String args[]) throws MPIException,
						 InterruptedException
  {
    int	   mytid;			/* my task id			*/
    int    intValue[] = new int[1];	/* broadcast one intValue	*/
    String processorName;		/* name of local machine	*/

    MPI.Init (args);
    processorName = MPI.getProcessorName ();
    mytid	  = MPI.COMM_WORLD.getRank ();
    intValue[0]   = -1;
    if (mytid == 0)
    {
      /* initialize data item						*/
      intValue[0] = 1234567;
    }
    /* broadcast value to all processes					*/
    MPI.COMM_WORLD.bcast (intValue, 1, MPI.INT, 0);
    /* Each process prints its received data item. The outputs
     * can intermingle on the screen so that you must use
     * "-output-filename" in Open MPI.
     */
    Thread.sleep (SLEEP_FACTOR * mytid); /* sleep to get ordered output	*/	
    System.out.printf ("\nProcess %d running on %s.\n" +
		       "  intValue: %d\n",
		       mytid, processorName, intValue[0]);
    MPI.Finalize ();
  }
}

