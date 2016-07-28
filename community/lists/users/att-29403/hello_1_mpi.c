/* An MPI-version of the "hello world" program, which delivers some
 * information about its machine and operating system.
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
 * File: hello_1_mpi.c		       	Author: S. Gross
 * Date: 01.10.2012
 *
 */

#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
#include <sys/utsname.h>
#include "mpi.h"

#define	BUF_SIZE	255		/* message buffer size		*/
#define	MAX_TASKS	12		/* max. number of tasks		*/
#define	SENDTAG		1		/* send message command		*/
#define	EXITTAG		2		/* termination command		*/
#define	MSGTAG		3		/* normal message token		*/

#define ENTASKS		-1		/* error: too many tasks	*/

static void master (void);
static void slave (void);

int main (int argc, char *argv[])
{
  int  mytid,				/* my task id			*/
       ntasks,				/* number of parallel tasks	*/
       namelen;				/* length of processor name	*/
  char processor_name[MPI_MAX_PROCESSOR_NAME];

  MPI_Init (&argc, &argv);
  MPI_Comm_rank (MPI_COMM_WORLD, &mytid);
  MPI_Comm_size (MPI_COMM_WORLD, &ntasks);
  MPI_Get_processor_name (processor_name, &namelen);
  /* With the next statement every process executing this code will
   * print one line on the display. It may happen that the lines will
   * get mixed up because the display is a critical section. In general
   * only one process (mostly the process with rank 0) will print on
   * the display and all other processes will send their messages to
   * this process. Nevertheless for debugging purposes (or to
   * demonstrate that it is possible) it may be useful if every
   * process prints itself.
   */
  fprintf (stdout, "Process %d of %d running on %s\n",
	   mytid, ntasks, processor_name);
  fflush (stdout);
  MPI_Barrier (MPI_COMM_WORLD);		/* wait for all other processes	*/

  if (mytid == 0)
  {
    master ();
  }
  else
  {
    slave ();
  }
  MPI_Finalize ();
  return EXIT_SUCCESS;
}


/* Function for the "master task". The master sends a request to all
 * slaves asking for a message. After receiving and printing the
 * messages he sends all slaves a termination command.
 *
 * input parameters:	not necessary
 * output parameters:	not available
 * return value:	nothing
 * side effects:	no side effects
 *
 */
void master (void)
{
  int		ntasks,			/* number of parallel tasks	*/
		mytid,			/* my task id			*/
		num,			/* number of entries		*/
		i;			/* loop variable		*/
  char		buf[BUF_SIZE + 1];    	/* message buffer (+1 for '\0')	*/
  MPI_Status	stat;			/* message details		*/

  MPI_Comm_rank (MPI_COMM_WORLD, &mytid);
  MPI_Comm_size (MPI_COMM_WORLD, &ntasks);
  if (ntasks > MAX_TASKS)
  {
    fprintf (stderr, "Error: Too many tasks. Try again with at most "
	     "%d tasks.\n", MAX_TASKS);
    /* terminate all slave tasks					*/
    for (i = 1; i < ntasks; ++i)
    {
      MPI_Send ((char *) NULL, 0, MPI_CHAR, i, EXITTAG, MPI_COMM_WORLD);
    }
    MPI_Finalize ();
    exit (ENTASKS);
  }
  printf ("\n\nNow %d slave tasks are sending greetings.\n\n",
	  ntasks - 1);
  /* request messages from slave tasks					*/
  for (i = 1; i < ntasks; ++i)
  {
    MPI_Send ((char *) NULL, 0, MPI_CHAR, i, SENDTAG, MPI_COMM_WORLD);
  }
  /* wait for messages and print greetings     				*/
  for (i = 1; i < ntasks; ++i)
  {
    MPI_Recv (buf, BUF_SIZE, MPI_CHAR, MPI_ANY_SOURCE,
	      MPI_ANY_TAG, MPI_COMM_WORLD, &stat);
    MPI_Get_count (&stat, MPI_CHAR, &num);
    buf[num] = '\0';			/* add missing end-of-string	*/
    printf ("Greetings from task %d:\n"
	    "  message type:        %d\n"
	    "  msg length:          %d characters\n"
	    "  message:             %s\n\n",
	    stat.MPI_SOURCE, stat.MPI_TAG, num, buf);
  }
  /* terminate all slave tasks						*/
  for (i = 1; i < ntasks; ++i)
  {
    MPI_Send ((char *) NULL, 0, MPI_CHAR, i, EXITTAG, MPI_COMM_WORLD);
  }
}


/* Function for "slave tasks". The slave task sends its hostname,
 * operating system name and release, and processor architecture
 * as a message to the master.
 *
 * input parameters:	not necessary
 * output parameters:	not available
 * return value:	nothing
 * side effects:	no side effects
 *
 */
void slave (void)
{
  struct utsname sys_info;		/* system information		*/
  int		 mytid,		       	/* my task id			*/
		 more_to_do;
  char		 buf[BUF_SIZE];       	/* message buffer      		*/
  MPI_Status	 stat;			/* message details		*/

  MPI_Comm_rank (MPI_COMM_WORLD, &mytid);
  more_to_do = 1;
  while (more_to_do == 1)
  {
    /* wait for a message from the master task				*/
    MPI_Recv (buf, BUF_SIZE, MPI_CHAR, 0, MPI_ANY_TAG,
	      MPI_COMM_WORLD, &stat);
    if (stat.MPI_TAG != EXITTAG)
    {
      uname (&sys_info);
      strcpy (buf, "\n    hostname:          ");
      strncpy (buf + strlen (buf), sys_info.nodename,
	       BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), "\n    operating system:  ",
	       BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), sys_info.sysname,
	       BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), "\n    release:           ",
	       BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), sys_info.release,
	       BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), "\n    processor:         ",
	       BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), sys_info.machine,
	       BUF_SIZE - strlen (buf));
      MPI_Send (buf, strlen (buf), MPI_CHAR, stat.MPI_SOURCE,
		MSGTAG, MPI_COMM_WORLD);
    }
    else
    {
      more_to_do = 0;			/* terminate			*/
    }
  }
}

