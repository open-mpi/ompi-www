/* The program demonstrates how to initialize and finalize an
 * MPI environment.
 *
 * "mpijavac" and Java-bindings are available in "Open MPI
 * version 1.7" or newer.
 *
 *
 * Class file generation:
 *   mpijavac InitFinalizeMain.java
 *
 * Usage:
 *   mpiexec [parameters] java [parameters] InitFinalizeMain
 *
 * Examples:
 *   mpiexec java InitFinalizeMain
 *   mpiexec java -cp $HOME/mpi_classfiles InitFinalizeMain
 *
 *
 * File: InitFinalizeMain.java		Author: S. Gross
 * Date: 21.12.2012
 *
 */

import mpi.*;

public class InitFinalizeMain
{
  public static void main (String args[]) throws MPIException
  {
    MPI.Init (args);
    System.out.print ("Hello!\n");
    MPI.Finalize();
  }
}
