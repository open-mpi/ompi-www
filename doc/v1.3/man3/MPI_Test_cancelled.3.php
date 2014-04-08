<?php
$topdir = "../../..";
$title = "MPI_Test_cancelled(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Test_cancelled</B> - Tests whether a request was canceled.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Test_cancelled(MPI_Status *<I>status</I>, int <I>*flag</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TEST_CANCELLED(<I>STATUS,</I> <I>FLAG,</I> <I>IERROR</I>)
            LOGICAL   <I>FLAG</I>
            INTEGER   <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool Status::Is_cancelled() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       status    Status object (status).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       flag      True if operation was cancelled (logical).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Returns  <I>flag</I>  =  true  if the communication associated with the status
       object was canceled successfully. In such a case, all other  fields  of
       status  (such as <I>count</I> or <I>tag</I>) are undefined. Otherwise, returns <I>flag</I> =
       false. If a receive  operation  might  be  canceled,  one  should  call
       MPI_Test_cancelled  first, to check whether the operation was canceled,
       before checking on the other fields of the return status.

</PRE>
<H2>NOTES</H2><PRE>
       Cancel can be an expensive operation that should be  used  only  excep-
       tionally.

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
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
