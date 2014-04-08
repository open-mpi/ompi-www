<?php
$topdir = "../../..";
$title = "MPI_Comm_call_errhandler(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_call_errhandler</B>  - Passes the supplied error code to the error
       handler assigned to a communicator

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_call_errhandler(MPI_Comm <I>comm</I>, int <I>errorcode</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_CALL_ERRHANDLER(<I>COMM,</I> <I>ERRORCODE,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>ERRORCODE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Call_errhandler(int <I>errorcode</I>) const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm          communicator with error handler (handle).

       errorcode     error code (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       IERROR        Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This function invokes the error handler assigned  to  the  communicator
       <I>comm</I>  with  the supplied error code <I>errorcode</I>. If the error handler was
       successfully called, the process is not aborted, and the error  handler
       returns, this function returns MPI_SUCCESS.

</PRE>
<H2>NOTES</H2><PRE>
       Users    should    note    that    the   default   error   handler   is
       MPI_ERRORS_ARE_FATAL. Thus, calling this function will abort  the  pro-
       cesses in <I>comm</I> if the default error handler has not been changed.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_create_errhandler.3.php">MPI_Comm_create_errhandler</a>
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
