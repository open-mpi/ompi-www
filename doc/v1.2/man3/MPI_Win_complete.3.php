<?php
$topdir = "../../..";
$title = "MPI_Win_complete(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_complete</B>  -  Completes  an RMA access epoch on <I>win</I> started by a
       call to <a href="../man3/MPI_Win_start.3.php">MPI_Win_start</a>

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI_Win_complete(MPI_Win <I>win</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_COMPLETE(WIN, IERROR)

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Complete() const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       win       Window object (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Win_complete is a one-sided MPI communication synchronization call,
       completing   an   RMA  access  epoch  on  <I>win</I>  started  by  a  call  to
       <a href="../man3/MPI_Win_start.3.php">MPI_Win_start</a>. MPI_Win_complete enforces the  completion  of  preceding
       RMA calls at the origin and not at the target. A put or accumulate call
       may not have completed at the target when it has completed at the  ori-
       gin.

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
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>; the predefined error handler  MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Win_start.3.php">MPI_Win_start</a>

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
