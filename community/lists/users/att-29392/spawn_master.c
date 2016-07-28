/* The program demonstrates how to spawn some dynamic MPI processes.
 * This version uses one master process which creates some slave
 * processes.
 *
 * A process or a group of processes can create another group of
 * processes with "MPI_Comm_spawn ()" or "MPI_Comm_spawn_multiple ()".
 * In general it is best (better performance) to start all processes
 * statically with "mpiexec" via the command line. If you want to use
 * dynamic processes you will normally have one master process which
 * starts a lot of slave processes. In some cases it may be useful to
 * enlarge a group of processes, e.g., if the MPI universe provides
 * more virtual cpu's than the current number of processes and the
 * program may benefit from additional processes. You will use
 * "MPI_Comm_spwan_multiple ()" if you must start different
 * programs or if you want to start the same program with different
 * parameters.
 *
 * There are some reasons to prefer "MPI_Comm_spawn_multiple ()"
 * instead of calling "MPI_Comm_spawn ()" multiple times. If you
 * spawn new (child) processes they start up like any MPI application,
 * i.e., they call "MPI_Init ()" and can use the communicator
 * MPI_COMM_WORLD afterwards. This communicator contains only the
 * child processes which have been created with the same call of
 * "MPI_Comm_spawn ()" and which is distinct from MPI_COMM_WORLD
 * of the parent process or processes created in other calls of
 * "MPI_Comm_spawn ()". The natural communication mechanism between
 * the groups of parent and child processes is via an
 * inter-communicator which will be returned from the above
 * MPI functions to spawn new processes. The local group of the
 * inter-communicator contains the parent processes and the remote
 * group contains the child processes. The child processes can get
 * the same inter-communicator calling "MPI_Comm_get_parent ()".
 * Now it is obvious that calling "MPI_Comm_spawn ()" multiple
 * times will create many sets of children with different
 * communicators MPI_COMM_WORLD whereas "MPI_Comm_spawn_multiple ()"
 * creates child processes with a single MPI_COMM_WORLD. Furthermore
 * spawning several processes in one call may be faster than spawning
 * them sequentially and perhaps even the communication between
 * processes spawned at the same time may be faster than communication
 * between sequentially spawned processes.
 *
 * For collective operations it is sometimes easier if all processes
 * belong to the same intra-communicator. You can use the function
 * "MPI_Intercomm_merge ()" to merge the local and remote group of
 * an inter-communicator into an intra-communicator.
 * 
 *
 * Compiling:
 *   Store executable(s) into local directory.
 *     mpicc -o <program name> <source code file name>
 *
 *   Store executable(s) into predefined directories.
 *     make
 *
 *   Make program(s) automatically on all specified hosts. You must
 *   edit the file "make_compile" and specify your host names before
 *   you execute it.
 *     make_compile
 *
 * Running:
 *   LAM-MPI:
 *     mpiexec -boot -np <number of processes> <program name>
 *     or
 *     mpiexec -boot \
 *	 -host <hostname> -np <number of processes> <program name> : \
 *	 -host <hostname> -np <number of processes> <program name>
 *     or
 *     mpiexec -boot [-v] -configfile <application file>
 *     or
 *     lamboot [-v] [<host file>]
 *       mpiexec -np <number of processes> <program name>
 *	 or
 *	 mpiexec [-v] -configfile <application file>
 *     lamhalt
 *
 *   OpenMPI:
 *     "host1", "host2", and so on can all have the same name,
 *     if you want to start a virtual computer with some virtual
 *     cpu's on the local host. The name "localhost" is allowed
 *     as well.
 *
 *     mpiexec -np <number of processes> <program name>
 *     or
 *     mpiexec --host <host1,host2,...> \
 *	 -np <number of processes> <program name>
 *     or
 *     mpiexec -hostfile <hostfile name> \
 *	 -np <number of processes> <program name>
 *     or
 *     mpiexec -app <application file>
 *
 * Cleaning:
 *   local computer:
 *     rm <program name>
 *     or
 *     make clean_all
 *   on all specified computers (you must edit the file "make_clean_all"
 *   and specify your host names before you execute it.
 *     make_clean_all
 *
 *
 * File: spawn_master.c			Author: S. Gross
 * Date: 28.09.2013
 *
 */

#include <stdio.h>
#include <stdlib.h>
#include "mpi.h"

#define NUM_SLAVES	4		/* create NUM_SLAVES processes	*/
#define SLAVE_PROG	"spawn_slave"	/* slave program name		*/


int main (int argc, char *argv[])
{
  MPI_Comm COMM_CHILD_PROCESSES;	/* inter-communicator		*/
  int	   ntasks_world,		/* # of tasks in MPI_COMM_WORLD	*/
	   ntasks_local,		/* COMM_CHILD_PROCESSES local	*/
	   ntasks_remote,		/* COMM_CHILD_PROCESSES remote	*/
	   mytid,			/* my task id			*/
	   namelen;			/* length of processor name	*/
  char	   processor_name[MPI_MAX_PROCESSOR_NAME];

  MPI_Init (&argc, &argv);
  MPI_Comm_rank (MPI_COMM_WORLD, &mytid);
  MPI_Comm_size (MPI_COMM_WORLD, &ntasks_world);
  /* check that only the master process is running in MPI_COMM_WORLD.   */
  if (ntasks_world > 1)
  {
    if (mytid == 0)
    {
      fprintf (stderr, "\n\nError: Too many processes (only one "
	       "process allowed).\n"
	       "Usage:\n"
	       "  mpiexec %s\n\n",
	       argv[0]);
    }
    MPI_Finalize ();
    exit (EXIT_SUCCESS);
  }
  MPI_Get_processor_name (processor_name, &namelen);
  printf ("\nParent process %d running on %s\n"
	  "  I create %d slave processes\n\n",
	  mytid,  processor_name, NUM_SLAVES);
  MPI_Comm_spawn (SLAVE_PROG, MPI_ARGV_NULL, NUM_SLAVES,
		  MPI_INFO_NULL, 0, MPI_COMM_WORLD,
		  &COMM_CHILD_PROCESSES, MPI_ERRCODES_IGNORE);
  MPI_Comm_size	(COMM_CHILD_PROCESSES, &ntasks_local);
  MPI_Comm_remote_size (COMM_CHILD_PROCESSES, &ntasks_remote);
  printf ("Parent process %d: "
	  "tasks in MPI_COMM_WORLD:                    %d\n"
	  "                  tasks in COMM_CHILD_PROCESSES local "
	  "group:  %d\n"
	  "                  tasks in COMM_CHILD_PROCESSES remote "
	  "group: %d\n\n",
	  mytid, ntasks_world, ntasks_local, ntasks_remote);
  MPI_Comm_free (&COMM_CHILD_PROCESSES);
  MPI_Finalize ();
  return EXIT_SUCCESS;
}

