/* Small program that sends/receives a message with point-to-point
 * operations.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.74" or newer.
 *
 *
 * Class file generation:
 *   mpijavac MsgSendRecvMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] MsgSendRecvMain
 *
 * Examples:
 *   mpiexec java MsgSendRecvMain
 *   mpiexec -host sunpc1,linpc1,rs0 java -cp $HOME/mpi_classfiles \
 *	MsgSendRecvMain
 *
 *
 * File: MsgSendRecvMain.java		Author: S. Gross
 * Date: 19.09.2013
 *
 */

import mpi.*;

public class MsgSendRecvMain
{
  static final int SENDTAG  = 1;	/* send message command		*/
  static final int EXITTAG  = 2;	/* termination command		*/
  static final int MSGTAG   = 3;	/* normal message tag		*/
  static final int BUF_SIZE = 256;	/* message buffer size		*/

  public static void main (String args[]) throws MPIException
  {
    int    mytid,			/* my task id			*/
	   ntasks,			/* number of parallel tasks	*/
	   num,				/* number of received data items*/
	   i;				/* loop variable		*/
    char   buffer[];			/* message buffer		*/
    Status status;			/* status of MPI operation	*/

    MPI.Init (args);
    mytid  = MPI.COMM_WORLD.getRank ();
    ntasks = MPI.COMM_WORLD.getSize ();
    buffer = new char[BUF_SIZE];
    if (mytid == 0)
    {
      if (ntasks == 2)
      {
	System.out.println ("\nNow " + (ntasks - 1) + " process " +
			    "sends its greetings.\n");
      }
      else
      {
	System.out.println ("\nNow " + (ntasks - 1) + " processes " +
			    "are sending greetings.\n");
      }
      /* request messages						*/
      for (i = 1; i < ntasks; ++i)
      {
	MPI.COMM_WORLD.send (buffer, 0, MPI.CHAR, i, SENDTAG);
      }
      /* wait for messages and print greetings				*/
      for (i = 1; i < ntasks; ++i)
      {
	status = MPI.COMM_WORLD.recv (buffer, BUF_SIZE, MPI.CHAR,
				      MPI.ANY_SOURCE, MPI.ANY_TAG);
	num = status.getCount (MPI.CHAR);
	System.out.println ("Greetings from process " +
			    status.getSource () + ":\n" +
			    "  message tag:    " + status.getTag () +
			    "\n" +
			    "  message length: " + num +
			    "\n" +
			    "  message:        " +
			    String.valueOf (buffer) + "\n");
      }
      /* terminate all processes					*/
      for (i = 1; i < ntasks; ++i)
      {
	MPI.COMM_WORLD.send (buffer, 0, MPI.CHAR, i, EXITTAG);
      }

    }
    else
    {
      boolean more_to_do = true;

      while (more_to_do)
      {
	status = MPI.COMM_WORLD.recv (buffer, buffer.length, MPI.CHAR, 0,
				      MPI.ANY_TAG);
	if (status.getTag () != EXITTAG)
	{
	  buffer = (MPI.getProcessorName()).toCharArray();
	  MPI.COMM_WORLD.send (buffer, buffer.length, MPI.CHAR,
			       0, MSGTAG);
	}
	else
	{
	  more_to_do = false;		/* terminate			*/
	}
      }
    }
    MPI.Finalize ();
  }
}

