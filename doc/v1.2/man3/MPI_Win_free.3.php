<?php
$topdir = "../../..";
$title = "MPI_Win_free(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_free</B> - Frees the window object and returns a null handle.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_free(MPI_Win *<I>win</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_FREE(<I>WIN,</I> <I>IERROR</I>)
            INTEGER <I>WIN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Free()

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       win       Window object (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Win_free  frees  the  window  object  <I>win</I> and returns a null handle
       (equal to MPI_WIN_NULL). This collective call is executed by  all  pro-
       cesses in the group associated with <I>win</I>. It can be invoked by a process
       only after it has completed its involvement in  RMA  communications  on
       window  <I>win</I>,  that  is, the process has called <a href="../man3/MPI_Win_fence.3.php">MPI_Win_fence</a>, or called
       <a href="../man3/MPI_Win_unlock.3.php">MPI_Win_unlock</a> to match a previous call to <a href="../man3/MPI_Win_lock.3.php">MPI_Win_lock</a>. When the  call
       returns, the window memory can be freed.

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
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Win_create.3.php">MPI_Win_create</a> <a href="../man3/MPI_Win_fence.3.php">MPI_Win_fence</a> <a href="../man3/MPI_Win_unlock.3.php">MPI_Win_unlock</a>

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
