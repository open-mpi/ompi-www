import mpi.*;

public class Exception_2_Main
{
  public static void main (String args[]) throws MPIException
  {
    int mytid,				/* my task id			*/
	intValue[] = new int[1];	/* broadcast one intValue	*/

    MPI.Init(args);
    mytid = MPI.COMM_WORLD.getRank ();
    if (mytid == 0)
    {
      intValue[0] = 10;			/* arbitrary value		*/
    }
    System.out.printf ("Set error handler for MPI.COMM_WORLD to " +
		       "MPI.ERRORS_RETURN.\n");
    MPI.COMM_WORLD.setErrhandler (MPI.ERRORS_RETURN);
    try {
      /* use index out-of bounds to produce an error			*/
      System.out.printf ("Call \"bcast\" with index out-of bounds.\n");
      MPI.COMM_WORLD.bcast (intValue, 2, MPI.INT, 0);
    }
    catch (MPIException ex)
    {
      System.err.printf ("Caught an exception.\n");
      System.err.printf ("%s\n", ex.getMessage ());
      MPI.Finalize ();
      System.exit (0);
    }
    MPI.Finalize ();
  }
}
