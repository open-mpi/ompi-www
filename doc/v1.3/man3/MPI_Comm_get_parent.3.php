<?php
$topdir = "../../..";
$title = "MPI_Comm_get_parent(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_get_parent</B>  -  Returns the parent intercommunicator of current
       spawned process.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_get_parent(MPI_Comm *<I>parent</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_GET_PARENT(<I>PARENT,</I> <I>IERROR</I>)
            INTEGER   <I>PARENT,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static MPI::Intercomm MPI::Comm::Get_parent()

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       parent    The parent communicator (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       If a process was started with <a href="../man3/MPI_Comm_spawn.3.php">MPI_Comm_spawn</a>  or  MPI_Comm_spawn_multi-
       ple,  MPI_Comm_get_parent returns the "parent" intercommunicator of the
       current process. This parent intercommunicator  is  created  implicitly
       inside  of  <a href="../man3/MPI_Init.3.php">MPI_Init</a>  and is the same intercommunicator returned by the
       spawn call made in the parents.

       If  the  process   was   not   spawned,   MPI_Comm_get_parent   returns
       MPI_COMM_NULL.

       After    the    parent   communicator   is   freed   or   disconnected,
       MPI_Comm_get_parent returns MPI_COMM_NULL.

</PRE>
<H2>NOTES</H2><PRE>
       MPI_Comm_get_parent returns a handle  to  a  single  intercommunicator.
       Calling  MPI_Comm_get_parent a second time returns a handle to the same
       intercommunicator.  Freeing  the  handle  with  <a href="../man3/MPI_Comm_disconnect.3.php">MPI_Comm_disconnect</a>  or
       <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>  will  cause other references to the intercommunicator to
       become invalid (dangling). Note that calling <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a> on the  par-
       ent communicator is not useful.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_spawn.3.php">MPI_Comm_spawn</a>
       <a href="../man3/MPI_Comm_spawn_multiple.3.php">MPI_Comm_spawn_multiple</a>

1.3.4                            Nov 11, 2009           <B>MPI_Comm_get_parent(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
