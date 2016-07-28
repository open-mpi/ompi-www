/* Small program that distributes an array of structures with a
 * scatter operation. It needs one process for each element of the
 * array.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7.4" or newer.
 *
 *
 * Class file generation:
 *   mpijavac ScatterStructArrayMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] ScatterStructArrayMain
 *
 * Examples:
 *   mpiexec -np 2 java ScatterStructArrayMain
 *   mpiexec -np 2 java -cp $HOME/mpi_classfiles ScatterStructArrayMain
 *
 *
 * File: ScatterStructArrayMain.java	Author: S. Gross
 * Date: 11.09.2013
 *
 */

import java.nio.*;
import java.util.Random;
import mpi.*;

public class ScatterStructArrayMain
{
  static final int SLEEP_FACTOR = 200;	/* 200 ms to get ordered output	*/
  static final int P = 3;		/* # of array elem to scatter	*/
  static final String firstNames[] = {"John", "Elizabeth"};
  static final String lastNames[] = {"Smith", "Cooper", "Hill"};

  public static void main (String args[]) throws MPIException,
						 InterruptedException
  {
    int	   mytid,			/* my task id			*/
	   ntasks,			/* number of tasks		*/
	   idx;
    String processorName;		/* name of local machine	*/
    Random rand = new Random();
    ByteBuffer	  dataItemBuffer,	/* buffer for structured data	*/
		  recvBuffer;
    MyStruct	  myStructType;
    MyStruct.Data dataItem;		/* one item from dataItemBuffer	*/
    Datatype	  myStructDatatype;

    MPI.Init (args);
    mytid  = MPI.COMM_WORLD.getRank ();
    ntasks = MPI.COMM_WORLD.getSize ();
    myStructType     = new MyStruct ();
    myStructDatatype = new MyStruct().getType();
    dataItemBuffer   = MPI.newByteBuffer(myStructType.getExtent() * P);
    recvBuffer	     = MPI.newByteBuffer(myStructType.getExtent());
    dataItem	     = myStructType.getData(dataItemBuffer, 0);

    if (ntasks != P)
    {
      /* wrong number of processes					*/
      if (mytid == 0)
      {
	String className =
	  new ScatterStructArrayMain().getClass().getName();
	System.err.printf ("\nI need %d processes.\n" +
			   "Usage:\n" +
			   "  mpiexec -np %d java %s\n\n",
			   P, P, className);
      }
      MPI.Finalize ();
      System.exit (0);
    }

    processorName = MPI.getProcessorName ();
    if (mytid == 0)
    {
      /* initialize data items						*/
      for (int i = 0; i < P; ++i)
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
    MPI.COMM_WORLD.scatter (dataItemBuffer, 1, myStructDatatype,
			    recvBuffer, 1, myStructDatatype, 0);
    /* Each process prints its received data item. The outputs
     * can intermingle on the screen so that you must use
     * "-output-filename" in Open MPI.
     */
    Thread.sleep (SLEEP_FACTOR * mytid); /* sleep to get ordered output	*/	
    dataItem = myStructType.getData(recvBuffer, 0);
    System.out.printf ("\nProcess %d running on %s.\n" +
		       "  Age:       %d\n" +
		       "  Firstname: %s\n" +
		       "  Lastname:  %s\n" +
		       "  Salary:    %.2f\n",
		       mytid, processorName,
		       dataItem.getAge (),
		       dataItem.getFirstName (),
		       dataItem.getLastName (),
		       dataItem.getSalary ());
    MPI.Finalize ();
  }
}
