<?php
$topdir = "../../..";
$title = "MPI_Win_unlock(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_unlock</B>  -  Completes  an  RMA access epoch started by a call to
       <a href="../man3/MPI_Win_lock.3.php">MPI_Win_lock</a>.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_unlock(int <I>rank</I>, MPI_Win <I>win</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_UNLOCK(<I>RANK,</I> <I>WIN,</I> <I>IERROR</I>)
            INTEGER <I>RANK,</I> <I>WIN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Unlock(int <I>rank</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       rank      Rank of window (nonnegative integer).

       win       Window object (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Win_unlock completes an RMA access  epoch  started  by  a  call  to
       <a href="../man3/MPI_Win_lock.3.php">MPI_Win_lock</a>.  RMA  operations issued during this period will have com-
       pleted both at the origin and at the target when the call returns.

       Locks are used to protect accesses to the locked target window effected
       by  RMA  calls  issued between the lock and unlock call, and to protect
       local load/store accesses to a locked local window executed between the
       lock  and unlock call. Accesses that are protected by an exclusive lock
       will not be concurrent at the window site with other  accesses  to  the
       same  window  that are lock protected. Accesses that are protected by a
       shared lock will not be concurrent at the  window  site  with  accesses
       protected by an exclusive lock to the same window.

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

1.3.4                            Nov 11, 2009                <B>MPI_Win_unlock(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
