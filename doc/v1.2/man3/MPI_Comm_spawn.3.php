<?php
$topdir = "../../..";
$title = "MPI_Comm_spawn(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_spawn</B> - Spawns a number of identical binaries.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_spawn(char *<I>command</I>, char *<I>argv</I>[], int <I>maxprocs</I>,
            MPI_Info <I>info</I>, int <I>root</I>, MPI_Comm <I>comm</I>,
            MPI_Comm *<I>intercomm</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>errcodes</I>[])

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_SPAWN(<I>COMMAND,</I> <I>ARGV,</I> <I>MAXPROCS,</I> <I>INFO,</I> <I>ROOT,</I> <I>COMM,</I>
            <I>INTERCOMM,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>ERRCODES,</I> <I>IERROR</I>)

            CHARACTER*(*) <I>COMMAND,</I> <I>ARGV(*)</I>
            INTEGER   <I>INFO,</I> <I>MAXPROCS,</I> <I>ROOT,</I> <I>COMM,</I> <I>INTERCOMM,</I>
            <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>ERRORCODES(*),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Intercomm MPI::Intracomm::Spawn(const char* <I>command</I>,
            const char* <I>argv</I>[], int <I>maxprocs</I>, const MPI::Info&amp; <I>info</I>,
            int <I>root</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>errcodes</I>[]) const

       MPI::Intercomm MPI::Intracomm::Spawn(const char* <I>command</I>,
            const char* <I>argv</I>[], int <I>maxprocs</I>, const MPI::Info&amp; <I>info</I>,
            int <I>root</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       command   Name  of  program  to be spawned (string, significant only at
                 <I>root</I>).

       argv      Arguments to <I>command</I> (array of strings, significant  only  at
                 <I>root</I>).

       maxprocs  Maximum  number  of  processes to start (integer, significant
                 only at <I>root</I>).

       info      A set of key-value pairs telling the runtime system where and
                 how  to  start  the  processes  (handle,  significant only at
                 <I>root</I>).

       root      Rank of process in  which  previous  arguments  are  examined
                 (integer).

       comm      Intracommunicator  containing  group  of  spawning  processes
                 (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       intercomm Intercommunicator  between  original  group  and  the   newly
                 spawned group (handle).

       gram specified by <I>command</I>, establishing  communication  with  them  and
       returning  an  intercommunicator. The spawned processes are referred to
       as children. The children have their own MPI_COMM_WORLD, which is sepa-
       rate  from that of the parents. MPI_Comm_spawn is collective over <I>comm</I>,
       and also may not return until <a href="../man3/MPI_Init.3.php">MPI_Init</a> has been called in the children.
       Similarly,  <a href="../man3/MPI_Init.3.php">MPI_Init</a>  in  the children may not return until all parents
       have called MPI_Comm_spawn. In this sense, MPI_Comm_spawn in  the  par-
       ents  and <a href="../man3/MPI_Init.3.php">MPI_Init</a> in the children form a collective operation over the
       union of parent and child processes. The intercommunicator returned  by
       MPI_Comm_spawn contains the parent processes in the local group and the
       child processes in the remote group. The ordering of processes  in  the
       local and remote groups is the same as the as the ordering of the group
       of the <I>comm</I> in the parents  and  of  MPI_COMM_WORLD  of  the  children,
       respectively.  This  intercommunicator  can be obtained in the children
       through the function <a href="../man3/MPI_Comm_get_parent.3.php">MPI_Comm_get_parent</a>.

       The MPI standard allows an implementation to use the  MPI_UNIVERSE_SIZE
       attribute  of  MPI_COMM_WORLD  to  specify the number of processes that
       will be active in a program.  Although this implementation of  the  MPI
       standard  defines  MPI_UNIVERSE_SIZE, it does not allow the user to set
       its value.  If you try to set the value of MPI_UNIVERSE_SIZE, you  will
       get an error message.

       The <I>command</I> Argument

       The <I>command</I> argument is a string containing the name of a program to be
       spawned. The string is null-terminated in C. In  Fortran,  leading  and
       trailing spaces are stripped. MPI looks for the file first in the work-
       ing directory of the spawning process.

       The <I>argv</I> Argument

       <I>argv</I> is an array of strings containing arguments that are passed to the
       program. The first element of <I>argv</I> is the first argument passed to <I>com-</I>
       <I>mand</I>, not, as is conventional in some contexts, the command itself. The
       argument list is terminated by NULL in C and C++ and an empty string in
       Fortran. In Fortran, leading and trailing spaces are  always  stripped,
       so  that  a  string  consisting  of  all  spaces is considered an empty
       string. The constant MPI_ARGV_NULL may be used in C, C++ and Fortran to
       indicate  an  empty  argument  list. In C and C++, this constant is the
       same as NULL.

       In C, the MPI_Comm_spawn argument <I>argv</I> differs from the  <I>argv</I>  argument
       of  <I>main</I> in two respects. First, it is shifted by one element. Specifi-
       cally, <I>argv</I>[0] of <I>main</I>  contains the name of the program (given by <I>com-</I>
       <I>mand</I>).  <I>argv</I>[1]  of  <I>main</I>  corresponds  to  <I>argv</I>[0]  in MPI_Comm_spawn,
       <I>argv</I>[2] of <I>main</I> to <I>argv</I>[1] of MPI_Comm_spawn, and so on.  Second,  <I>argv</I>
       of  MPI_Comm_spawn  must  be null-terminated, so that its length can be
       determined. Passing an <I>argv</I> of MPI_ARGV_NULL to MPI_Comm_spawn  results
       in  <I>main</I> receiving <I>argc</I> of 1 and an <I>argv</I> whose element 0 is the name of
       the program.

       The <I>maxprocs</I> Argument

       Open MPI tries to spawn <I>maxprocs</I> processes. If it is  unable  to  spawn
       <I>maxprocs</I>  processes,  it raises an error of class MPI_ERR_SPAWN. If MPI
       is able to spawn the  specified  number  of  processes,  MPI_Comm_spawn
       returns  successfully  and the number of spawned processes, <I>m</I>, is given
       in C++ and INTEGER in Fortran. It is a container for a number of  user-
       speci  ed (<I>key,value</I>) pairs. <I>key</I> and <I>value</I> are strings (null-terminated
       char* in C, character*(*) in Fortran). Routines to create  and  manipu-
       late the <I>info</I> argument are described in Section 4.10 of the MPI-2 stan-
       dard.

       For the SPAWN calls, <I>info</I> provides additional, implementation-dependent
       instructions  to  MPI and the runtime system on how to start processes.
       An application may pass MPI_INFO_NULL in C or  Fortran.  Portable  pro-
       grams  not requiring detailed control over process locations should use
       MPI_INFO_NULL.

       The following values for <I>info</I> are recognized in Open MPI. (The reserved
       values  mentioned in Section 5.3.4 of the MPI-2 standard are not imple-
       mented.)

       Key value             Type      Description
       ----------            ----      -----------

       host                  char *    Host on which the process should be spawned.
       wdir                  char *    Directory where the executable is located.

       The <I>root</I> Argument

       All arguments before the <I>root</I> argument are examined only on the process
       whose  rank  in  <I>comm</I> is equal to <I>root</I>. The value of these arguments on
       other processes is ignored.

       The <I>array</I><B>_</B><I>of</I><B>_</B><I>errcodes</I> Argument

       The <I>array</I><B>_</B><I>of</I><B>_</B><I>errcodes</I> is an array  of  length  <I>maxprocs</I>  in  which  MPI
       reports the status of the processes that MPI was requested to start. If
       all <I>maxprocs</I> processes were spawned,  <I>array</I><B>_</B><I>of</I><B>_</B><I>errcodes</I>  is  filled  in
       with  the  value  MPI_SUCCESS.  If anyof the processes are <I>not</I> spawned,
       <I>array</I><B>_</B><I>of</I><B>_</B><I>errcodes</I> is filled in with the value MPI_ERR_SPAWN.  In  C  or
       Fortran,  an  application  may  pass  MPI_ERRCODES_IGNORE  if it is not
       interested in the error codes. In C++ this constant does not exist, and
       the <I>array</I><B>_</B><I>of</I><B>_</B><I>errcodes</I> argument may be omitted from the argument list.

</PRE>
<H2>NOTES</H2><PRE>
       Completion  of  MPI_Comm_spawn  in the parent does not necessarily mean
       that <a href="../man3/MPI_Init.3.php">MPI_Init</a> has been called in the children  (although  the  returned
       intercommunicator can be used immediately).

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <B>mpirun(1)</B>

Open MPI 1.2                    September 2006        MPI_Comm_spawn(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
