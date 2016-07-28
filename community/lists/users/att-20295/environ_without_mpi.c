/* A small program, which delivers some information about its
 * machine, operating system, and some environment variables.
 *
 *
 * Compiling:
 *   Store executable(s) into local directory.
 *     (g)cc -o environ_without_mpi environ_without_mpi.c
 *
 * Running:
 *   environ_without_mpi
 *
 *
 * File: environ_without_mpi.c	       	Author: S. Gross
 * Date: 25.09.2012
 *
 */

#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>
#include <sys/utsname.h>

#define	BUF_SIZE	8192		/* message buffer size		*/

int main (int argc, char *argv[])
{
  struct utsname sys_info;		/* system information		*/
  int		 num_env_vars,		/* # of environment variables	*/
		 i;			/* loop variable		*/
  char		 buf[BUF_SIZE],       	/* message buffer      		*/
		 *env_vars[] = {"PATH",
				"LD_LIBRARY_PATH_32",
				"LD_LIBRARY_PATH_64",
				"LD_LIBRARY_PATH",
				"CLASSPATH"};

  num_env_vars = sizeof (env_vars) / sizeof (env_vars[0]);
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
  printf ("Environment:\n"
	  "  message:             %s\n\n",  buf);
  return EXIT_SUCCESS;
}

