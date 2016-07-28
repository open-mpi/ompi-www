/* Small program that distributes an array of structures with a
 * broadcast operation.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7.4" or newer.
 *
 *
 * Class file generation:
 *   mpijavac BcastStructArrayMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] BcastStructArrayMain
 *
 * Examples:
 *   mpiexec -np 2 java BcastStructArrayMain
 *   mpiexec -np 2 java -cp $HOME/mpi_classfiles BcastStructArrayMain
 *
 *
 * File: BcastStructArrayMain.java	Author: S. Gross
 * Date: 12.09.2013
 *
 */

import java.nio.*;
import java.util.Random;
import mpi.*;

public class BcastStructArrayMain
{
  static final int SLEEP_FACTOR = 200;	/* 200 ms to get ordered output	*/
  static final int NUM_ITEMS = 4;
  static final String firstNames[] = {"John", "Elizabeth"};
  static final String lastNames[] = {"Smith", "Cooper", "Hill"};

  public static void main (String args[]) throws MPIException,
						 InterruptedException
  {
    int	   mytid,			/* my task id			*/
	   idx;
    String processorName;		/* name of local machine	*/
    Random rand = new Random();
    ByteBuffer	  dataItemBuffer;	/* buffer for structured data	*/
    MyStruct	  myStructType;
    MyStruct.Data dataItem;		/* one item from dataItemBuffer	*/
    Datatype	  myStructDatatype;

    MPI.Init (args);
    processorName    = MPI.getProcessorName ();
    mytid	     = MPI.COMM_WORLD.getRank ();
    myStructType     = new MyStruct ();
    myStructDatatype = new MyStruct().getType();
    dataItemBuffer   = MPI.newByteBuffer(myStructType.getExtent() *
					 NUM_ITEMS);

    if (mytid == 0)
    {
      /* initialize data items						*/
      for (int i = 0; i < NUM_ITEMS; ++i)
      {
	dataItem = myStructType.getData(dataItemBuffer, i);
	dataItem.setAge (20 + rand.nextInt (40));
	idx = rand.nextInt (firstNames.length);
	dataItem.setFirstName (firstNames[idx]);
	idx = rand.nextInt (lastNames.length);
	dataItem.setLastName (lastNames[idx]);
	dataItem.setSalary (1000.0 + (2000 * rand.nextDouble ()));
      }
    }
    MPI.COMM_WORLD.bcast (dataItemBuffer, NUM_ITEMS, myStructDatatype, 0);
    /* Each process prints its received data item. The outputs
     * can intermingle on the screen so that you must use
     * "-output-filename" in Open MPI.
     */
    Thread.sleep (SLEEP_FACTOR * mytid); /* sleep to get ordered output	*/	
    System.out.printf ("\nProcess %d running on %s.\n",
		       mytid, processorName);
    for (int i = 0; i < NUM_ITEMS; ++i)
    {
      dataItem = myStructType.getData(dataItemBuffer, i);
      System.out.printf ("  dataItem[" + i + "].Age:       %d\n" +
			 "  dataItem[" + i + "].FirstName: %s\n" +
			 "  dataItem[" + i + "].LastName:  %s\n" +
			 "  dataItem[" + i + "].Salary:    %.2f\n",
			 dataItem.getAge (),
			 dataItem.getFirstName (),
			 dataItem.getLastName (),
			 dataItem.getSalary ());
    }
    MPI.Finalize ();
  }
}
