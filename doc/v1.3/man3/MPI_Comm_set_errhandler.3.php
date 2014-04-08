<?php
$topdir = "../../..";
$title = "MPI_Comm_set_errhandler(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_set_errhandler</B>  - Attaches a new error handler to a communica-
       tor.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_set_errhandler(MPI_Comm <I>comm</I>,
            MPI_Errhandler <I>errhandler</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_SET_ERRHANDLER(<I>COMM,</I> <I>ERRHANDLER,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>ERRHANDLER,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Set_errhandler(const MPI::Errhandler&amp; <I>errhandler</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       errhandler
                 New error handler for communicator (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_set_errhandler attaches a new error handler to a communicator.
       The error handler must be either a predefined error handler or an error
       handler created by a call to <a href="../man3/MPI_Comm_create_errhandler.3.php">MPI_Comm_create_errhandler</a>. This  call  is
       identical to <a href="../man3/MPI_Errhandler_set.3.php">MPI_Errhandler_set</a>, the use of which is deprecated.

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
       MPI_Comm_set_errhandler; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
