/* A master-slave version of the "MPI hello world" program, which
 * delivers some information about its machine and operating system.
 */

#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
#include <sys/utsname.h>

#include "mpi.h"

#define	BUF_SIZE	255		/* message buffer size		*/
#define	SENDTAG		1		/* send message command		*/
#define	EXITTAG		2		/* termination command		*/
#define	MSGTAG		3		/* normal message token		*/

/* Function for the "master task". The master sends a request to all
 * slaves asking for a message. After receiving and printing the
 * messages it sends all slaves a termination command.
 */
static void master (int *ntasks)
{
  int  num, numtasks = *ntasks, i;			
  char buf[BUF_SIZE + 1];   /* message buffer (+1 for '\0') */
  MPI_Status stat;	    /* message details		    */
  
  printf ("\n\nNow %d slave tasks are sending greetings.\n\n", numtasks - 1);
  /* request messages from slave tasks	*/
  for (i = 1; i < numtasks; ++i)
  {
    MPI_Send (NULL, 0, MPI_CHAR, i, SENDTAG, MPI_COMM_WORLD);
  }
  /* wait for messages and print greetings */
  for (i = 1; i < numtasks; ++i)
  {
    MPI_Recv (buf, BUF_SIZE, MPI_CHAR, i, MSGTAG, MPI_COMM_WORLD, &stat);
    MPI_Get_count (&stat, MPI_CHAR, &num);
    buf[num] = '\0';
    printf ("Greetings from task %d:\n"
	    "  message type:        %d\n"
	    "  msg length:          %d characters\n"
	    "  message:             %s\n\n",
	    stat.MPI_SOURCE, stat.MPI_TAG, num, buf);
  }
  /* terminate all slave tasks						*/
  for (i = 1; i < numtasks; ++i)
  {
    MPI_Send (NULL, 0, MPI_CHAR, i, EXITTAG, MPI_COMM_WORLD);
  }
  return;
}

/* Function for "slave tasks". The slave task sends its hostname,
 * operating system name and release, and processor architecture
 * as a message to the master.
 */
static void slave (void)
{
  struct utsname sys_info;	/* system information	*/
  int wait_for_msg = 1;
  char buf[BUF_SIZE];       	/* message buffer      	*/
  MPI_Status stat;		/* message details	*/

  while (wait_for_msg)
  {
    MPI_Recv (buf, BUF_SIZE, MPI_CHAR, 0, SENDTAG, MPI_COMM_WORLD, &stat);
    if (stat.MPI_TAG != EXITTAG)
    {
      uname (&sys_info);
      strcpy (buf, "\n    hostname:          ");
      strncpy (buf + strlen (buf), sys_info.nodename,           BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), "\n    operating system:  ", BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), sys_info.sysname,            BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), "\n    release:           ", BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), sys_info.release,            BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), "\n    processor:         ", BUF_SIZE - strlen (buf));
      strncpy (buf + strlen (buf), sys_info.machine,            BUF_SIZE - strlen (buf));
      MPI_Send (buf, strlen (buf), MPI_CHAR, stat.MPI_SOURCE, MSGTAG, MPI_COMM_WORLD);
    }
    else
    {
      wait_for_msg = 0;
    }
  }
  return;
}

int main (int argc, char *argv[])
{
  int  mytid, numtasks, namelen;				
  char processor_name[MPI_MAX_PROCESSOR_NAME];

  MPI_Init (&argc, &argv);
  MPI_Comm_rank (MPI_COMM_WORLD, &mytid);
  MPI_Comm_size (MPI_COMM_WORLD, &numtasks);
  MPI_Get_processor_name (processor_name, &namelen);

  /* With the next statement every process executing this code will
   * print one line on the display. It may happen that the lines will
   * get mixed up because the display is a critical section.
   */
  fprintf (stdout, "Process %d of %d running on host %s\n", mytid, numtasks, processor_name);
  fflush (stdout);
  MPI_Barrier (MPI_COMM_WORLD);		/* wait for all other processes	*/

  if (mytid == 0)
  {
    master (&numtasks);
  }
  else
  {
    slave ();
  }
  MPI_Barrier (MPI_COMM_WORLD);
  MPI_Finalize ();
  return EXIT_SUCCESS;
}

