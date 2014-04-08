<?php
$topdir = "../../..";
$title = "MPI_Abort(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Abort</B> - Terminates MPI execution environment.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Abort(MPI_Comm <I>comm</I>, int <I>errorcode</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ABORT(<I>COMM</I>, <I>ERRORCODE</I>, <I>IERROR</I>)
            INTEGER        <I>COMM</I>, <I>ERRORCODE</I>, <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Comm::Abort(int <I>errorcode</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator of tasks to abort.

       errorcode Error code to return to invoking environment.

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  routine makes a "best attempt" to abort all tasks in the group of
       comm. This function does not require that the invoking environment take
       any  action  with  the error code. However, a UNIX or POSIX environment
       should handle this as a return errorcode from the main  program  or  an
       abort (errorcode).

       The  Open MPI implementation terminates all processes in all tasks that
       contain a process in <I>comm</I>, and the error code is not  returned  to  the
       invoking environment.

       Note: All associated processes are sent a SIGTERM.

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
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
