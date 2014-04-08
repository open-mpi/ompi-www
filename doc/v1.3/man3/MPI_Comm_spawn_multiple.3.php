<?php
$topdir = "../../..";
$title = "MPI_Comm_spawn_multiple(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_spawn_multiple</B>  - Spawns multiple binaries, or the same binary
       with multiple sets of arguments.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_spawn_multiple(int <I>count</I>, char *<I>array</I><B>_</B><I>of</I><B>_</B><I>commands</I>[],
            char **<I>array</I><B>_</B><I>of</I><B>_</B><I>argv</I>[], int <I>array</I><B>_</B><I>of</I><B>_</B><I>maxprocs</I>[], MPI_Info
            <I>array</I><B>_</B><I>of</I><B>_</B><I>info</I>[], int <I>root</I>, MPI_Comm <I>comm</I>, MPI_Comm *<I>intercomm</I>,
            int <I>array</I><B>_</B><I>of</I><B>_</B><I>errcodes</I>[])

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_SPAWN_MULTIPLE(<I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>COMMANDS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>ARGV,</I>
            <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>MAXPROCS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>INFO,</I> <I>ROOT,</I> <I>COMM,</I> <I>INTERCOMM,</I>
            <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>ERRCODES,</I> <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>INFO(*),</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>MAXPROCS(*),</I> <I>ROOT,</I>
                 <I>COMM,</I> <I>INTERCOMM,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>ERRCODES(*),</I> <I>IERROR</I>
            CHARACTER*(*) <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>COMMANDS</I>(*), <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>ARGV</I>(<I>COUNT</I>, *)

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Intercomm MPI::Intracomm::Spawn_multiple(int <I>count</I>,
            const char* <I>array</I><B>_</B><I>of</I><B>_</B><I>commands</I>[], const char** <I>array</I><B>_</B><I>of</I><B>_</B><I>argv</I>[],
            const int <I>array</I><B>_</B><I>of</I><B>_</B><I>maxprocs</I>[], const MPI::Info <I>array</I><B>_</B><I>of</I><B>_</B><I>info</I>[],
            int <I>root</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>errcodes</I>[])

       MPI::Intercomm MPI::Intracomm::Spawn_multiple(int <I>count</I>,
            const char* <I>array</I><B>_</B><I>of</I><B>_</B><I>commands</I>[], const char** <I>array</I><B>_</B><I>of</I><B>_</B><I>argv</I>[],
            const int <I>array</I><B>_</B><I>of</I><B>_</B><I>maxprocs</I>[], const MPI::Info <I>array</I><B>_</B><I>of</I><B>_</B><I>info</I>[],
            int <I>root</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number of commands (positive integer, significant to MPI only
                 at <I>root</I> -- see NOTES).

       array_of_commands
                 Programs  to  be executed (array of strings, significant only
                 at <I>root</I>).

       array_of_argv
                 Arguments for <I>commands</I> (array of array of strings,   signifi-
                 cant only at <I>root</I>).

       array_of_maxprocs
                 Maximum  number of processes to start for each command (array
                 of integers, significant only at <I>root</I>).

       array_of_info
                 Info objects telling the runtime  system  where  and  how  to
                 start processes (array of handles, significant only at <I>root</I>).

       root      Rank of process in  which  previous  arguments  are  examined
                 spawned group (handle).

       array_of_errcodes
                 One code per process (array of integers).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_spawn_multiple  is  identical to <a href="../man3/MPI_Comm_spawn.3.php">MPI_Comm_spawn</a> except that it
       can specify multiple executables. The first argument, <I>count</I>,  indicates
       the  number  of executables. The next three arguments are arrays of the
       corresponding  arguments  in   <a href="../man3/MPI_Comm_spawn.3.php">MPI_Comm_spawn</a>.   The   next   argument,
       <I>array</I><B>_</B><I>of</I><B>_</B><I>info</I>,  is  an array of <I>info</I> arguments; however, only the first
       argument in that array is used.  Any subsequent arguments in the  array
       are  ignored because an <I>info</I> argument applies to the entire job that is
       spawned, and cannot be different for each executable in the  job.   See
       the INFO ARGUMENTS section for more information.

       For    the    Fortran    version    of   <I>array</I><B>_</B><I>of</I><B>_</B><I>argv</I>,   the   element
       <I>array</I><B>_</B><I>of</I><B>_</B><I>argv</I>(i,j) is the jth argument to command number i.

       In any language, an application may  use  the  constant  MPI_ARGVS_NULL
       (which  is  likely to be (char ***)0 in C) to specify that no arguments
       should be passed to any commands. The effect of setting individual ele-
       ments  of  <I>array</I><B>_</B><I>of</I><B>_</B><I>argv</I>  to  MPI_ARGV_NULL  is not defined. To specify
       arguments for some commands but not others, the commands without  argu-
       ments  should  have  a  corresponding  <I>argv</I> whose first element is null
       ((char *)0 in C and empty string in Fortran).

       All of the spawned processes have the same MPI_COMM_WORLD. Their  ranks
       in  MPI_COMM_WORLD  correspond  directly to the order in which the com-
       mands are specified in MPI_Comm_spawn_multiple.  Assume  that  m1  pro-
       cesses  are  generated by the first command, m2 by the second, etc. The
       processes corresponding to the first command have ranks 0, 1,..., m1-1.
       The  processes in the second command have ranks m1, m1+1, ..., m1+m2-1.
       The processes in the third have ranks m1+m2, m1+m2+1, ...,  m1+m2+m3-1,
       etc.

       The <I>array</I><B>_</B><I>of</I><B>_</B><I>errcodes</I> argument is 1-dimensional array of size

             _ count
            \       n ,
            /_ i=1   i

       where  i is the ith element of <I>array</I><B>_</B><I>of</I><B>_</B><I>maxprocs</I>. Command number <I>i</I> cor-
       responds to the i contiguous slots in this array from element

                             _              _
             _ <I>i</I>-1          |   _ <I>i</I>          |
            \       n ,  to |  \      n      | -1
            /_ <I>j</I>=1   i      |  /_ <I>j</I>=1  j     |
                            |_              _|

       Error codes are treated as for <a href="../man3/MPI_Comm_spawn.3.php">MPI_Comm_spawn</a>.

       host                  char *    Host on which the process should be spawned.
       wdir                  char *    Directory where the executable is located.
       ompi_prefix           char *    Same as the --prefix command line argument
                                       to mpirun.
       ompi_non_mpi          bool      If set to true, launching a non-MPI
                                       application; the returned communicator
                                       will be MPI_COMM_NULL.

       <I>bool</I> info keys are actually strings but are evaluated  as  follows:  if
       the string value is a number, it is converted to an integer and cast to
       a boolean (meaning that zero integers are false and non-zero values are
       true).   If the string value is (case-insensitive) "yes" or "true", the
       boolean is true.  If the string value  is  (case-insensitive)  "no"  or
       "false",  the  boolean  is false.  All other string values are unrecog-
       nized, and therefore false.

       Note that if any of the info handles have  <I>ompi</I><B>_</B><I>non</I><B>_</B><I>mpi</I>  set  to  true,
       then  all  info  handles  must have it set to true.  If some are set to
       true, but others are set to false (or are unset), MPI_ERR_INFO will  be
       returned.

       Note  that  in "Open MPI", the first array location in <I>array</I><B>_</B><I>of</I><B>_</B><I>info</I> is
       applied to all the commands in <I>array</I><B>_</B><I>of</I><B>_</B><I>commands</I>.

</PRE>
<H2>NOTES</H2><PRE>
       The argument <I>count</I> is interpreted by  MPI  only  at  the  root,  as  is
       <I>array</I><B>_</B><I>of</I><B>_</B><I>argv</I>. Since the leading dimension of <I>array</I><B>_</B><I>of</I><B>_</B><I>argv</I> is <I>count</I>, a
       nonpositive value of <I>count</I> at a nonroot node could theoretically  cause
       a  runtime  bounds  check  error,  even  though <I>array</I><B>_</B><I>of</I><B>_</B><I>argv</I> should be
       ignored by the subroutine. If this happens, you should explicitly  sup-
       ply a reasonable value of <I>count</I> on the nonroot nodes.

       Calling  <a href="../man3/MPI_Comm_spawn.3.php">MPI_Comm_spawn</a>  many  times would create many sets of children
       with different MPI_COMM_WORLDs, whereas MPI_Comm_spawn_multiple creates
       children  with a single MPI_COMM_WORLD, so the two methods are not com-
       pletely equivalent. Also  if you need to  spawn  multiple  executables,
       you may get better performance by using MPI_Comm_spawn_multiple instead
       of calling <a href="../man3/MPI_Comm_spawn.3.php">MPI_Comm_spawn</a> several times.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

1.3.4                            Nov 11, 2009       <B>MPI_Comm_spawn_multiple(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
