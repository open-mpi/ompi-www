/* Small program that distributes an object with a broadcast operation.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7" or newer.
 *
 *
 * Class file generation:
 *   mpijavac ObjectBroadcastMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] ObjectBroadcastMain
 *
 * Examples:
 *   mpiexec -np 2 java ObjectBroadcastMain
 *   mpiexec -np 2 java -cp $HOME/mpi_classfiles ObjectBroadcastMain
 *
 *
 * File: ObjectBroadcastMain		Author: S. Gross
 * Date: 15.12.2012
 *
 */

import mpi.*;

public class ObjectBroadcastMain
{
  public static void main (String args[]) throws MPIException
  {
    int	   mytid;			/* my task id			*/
    MyData dataItem;
    String processor_name;		/* name of local machine	*/

    MPI.Init (args);
    processor_name = MPI.Get_processor_name ();
    mytid	   = MPI.COMM_WORLD.Rank ();
    dataItem	   = new MyData ();
    if (mytid == 0)
    {
      /* initialize data item						*/
      dataItem.setAge (35);
      dataItem.setName ("Smith");
      dataItem.setSalary (2545.75);
    }
    MPI.COMM_WORLD.Bcast (dataItem, 0, 1, MPI.OBJECT, 0);
    /* Each process prints its received data item. The outputs
     * can intermingle on the screen so that you must use
     * "-output-filename" in Open MPI.
     */
    System.out.printf ("\nProcess %d running on %s.\n" +
		       "  Age:  %d\n" +
		       "  Name: %s\n" +
		       "  Salary: %10.2f\n",
		       mytid, processor_name,
		       dataItem.getAge (),
		       dataItem.getName (),
		       dataItem.getSalary ());
    MPI.Finalize();
  }
}
