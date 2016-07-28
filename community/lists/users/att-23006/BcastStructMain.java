/* Small program that distributes a structure with a broadcast
 * operation.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7.4" or newer.
 *
 *
 * Class file generation:
 *   mpijavac BcastStructMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] BcastStructMain
 *
 * Examples:
 *   mpiexec -np 2 java BcastStructMain
 *   mpiexec -np 2 java -cp $HOME/mpi_classfiles BcastStructMain
 *
 *
 * File: BcastStructMain.java		Author: S. Gross
 * Date: 11.09.2013
 *
 */

import java.nio.*;
import mpi.*;

public class BcastStructMain
{
  static final int SLEEP_FACTOR = 200;	/* 200 ms to get ordered output	*/

  public static void main (String args[]) throws MPIException,
						 InterruptedException
  {
    int		  mytid;		/* my task id			*/
    String	  processorName;	/* name of local machine	*/
    ByteBuffer	  dataItemBuffer;	/* buffer for structured data	*/
    MyStruct	  myStructType;
    MyStruct.Data dataItem;		/* one item from dataItemBuffer	*/
    Datatype	  myStructDatatype;

    MPI.Init (args);
    processorName    = MPI.getProcessorName ();
    mytid	     = MPI.COMM_WORLD.getRank ();
    myStructType     = new MyStruct ();
    myStructDatatype = new MyStruct().getType();
    dataItemBuffer   = MPI.newByteBuffer(myStructType.getExtent());
    dataItem	     = myStructType.getData(dataItemBuffer, 0);

    if (mytid == 0)
    {
      /* initialize data item						*/
      dataItem.setAge (35);
      dataItem.setFirstName ("Kathy");
      dataItem.setLastName ("Miller");
      dataItem.setSalary (2545.75);
    }
    MPI.COMM_WORLD.bcast (dataItemBuffer, 1, myStructDatatype, 0);
    /* Each process prints its received data item. The outputs
     * can intermingle on the screen so that you must use
     * "-output-filename" in Open MPI.
     */
    Thread.sleep (SLEEP_FACTOR * mytid); /* sleep to get ordered output	*/	
    System.out.printf ("\nProcess %d running on %s.\n" +
		       "  Age:       %d\n" +
		       "  FirstName: %s\n" +
		       "  LastName:  %s\n" +
		       "  Salary:    %.2f\n",
		       mytid, processorName,
		       dataItem.getAge (),
		       dataItem.getFirstName (),
		       dataItem.getLastName (),
		       dataItem.getSalary ());
    MPI.Finalize ();
  }
}
