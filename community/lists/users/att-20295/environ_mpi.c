/* A small MPI program, which delivers some information about its
 * machine, operating system, and some environment variables.
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
 * File: environ_mpi.c		       	Author: S. Gross
 * Date: 25.09.2012
 *
 */

#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
#include <sys/utsname.h>
#include "mpi.h"

#define	BUF_SIZE	8192		/* message buffer size		*/
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
       ntasks;				/* number of parallel tasks	*/

  MPI_Init (&argc, &argv);
  MPI_Comm_rank (MPI_COMM_WORLD, &mytid);
  MPI_Comm_size (MPI_COMM_WORLD, &ntasks);

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
  printf ("\n\nNow %d slave tasks are sending their environment.\n\n",
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
    printf ("Environment from task %d:\n"
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
		 num_env_vars,		/* # of environment variables	*/
		 i,			/* loop variable		*/
		 more_to_do;
  char		 buf[BUF_SIZE],       	/* message buffer      		*/
		 *env_vars[] = {"PATH",
				"LD_LIBRARY_PATH_32",
				"LD_LIBRARY_PATH_64",
				"LD_LIBRARY_PATH",
				"CLASSPATH"};
  MPI_Status	 stat;			/* message details		*/

  MPI_Comm_rank (MPI_COMM_WORLD, &mytid);
  num_env_vars = sizeof (env_vars) / sizeof (env_vars[0]);
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
      for (i = 0; i < num_env_vars; ++i)
      {
	char *env_val,			/* pointer to environment value	*/
	     *delimiter = ":"	,	/* field delimiter for "strtok"	*/
	     *next_tok;			/* next token			*/

	env_val = getenv (env_vars[i]);
	if (env_val != NULL)
	{
	  if ((strlen (buf) + strlen (env_vars[i]) + 6) < BUF_SIZE)
	  {
	    strncpy (buf + strlen (buf), "\n    ",
		     BUF_SIZE - strlen (buf));
	    strncpy (buf + strlen (buf), env_vars[i],
		     BUF_SIZE - strlen (buf));
	  }
	  else
	  {
	    fprintf (stderr, "Buffer too small. Couldn't add \"%s\"."
		     "\n\n", env_vars[i]);
	  }
	  /* Get first token in "env_val". "strtok" skips all
	   * characters that are contained in the current delimiter
	   * string. If it finds a character which is not contained
	   * in the delimiter string, it is the start of the first
	   * token. Now it searches for the next character which is
	   * part of the delimiter string. If it finds one it will
	   * overwrite it by a '\0' to terminate the first token.
	   * Otherwise the token extends to the end of the string.
	   * Subsequent calls of "strtok" use a NULL pointer as first
	   * argument and start searching from the saved position
	   * after the last token. "strtok" returns NULL if it
	   * couldn't find a token.
	   */
	  next_tok = strtok (env_val, delimiter);
	  while (next_tok != NULL)
	  {
	    if ((strlen (buf) + strlen (next_tok) + 25) < BUF_SIZE)
	    {
	      strncpy (buf + strlen (buf), "\n                       ",
		       BUF_SIZE - strlen (buf));
	      strncpy (buf + strlen (buf), next_tok,
		       BUF_SIZE - strlen (buf));
	    }
	    else
	    {
	      fprintf (stderr, "Buffer too small. Couldn't add \"%s\" "
		       "to %s.\n\n", next_tok, env_vars[i]);
	    }
	    /* get next token						*/
	    next_tok = strtok (NULL, delimiter);
	  }
	}
      }
      MPI_Send (buf, strlen (buf), MPI_CHAR, stat.MPI_SOURCE,
      		MSGTAG, MPI_COMM_WORLD);
    }
    else
    {
      more_to_do = 0;			/* terminate			*/
    }
  }
}

