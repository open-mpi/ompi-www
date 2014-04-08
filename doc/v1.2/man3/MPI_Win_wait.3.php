<?php
$topdir = "../../..";
$title = "MPI_Win_wait(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_wait</B>  -  Completes  an  RMA exposure epoch started by a call to
       <a href="../man3/MPI_Win_post.3.php">MPI_Win_post</a> on <I>win</I>

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_wait(MPI_Win <I>win</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_WAIT( <I>WIN,</I> <I>IERROR</I>)
            INTEGER  <I>WIN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Wait() const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       win       Window object (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Win_wait is a one-sided MPI communication synchronization call that
       completes  an  RMA  exposure epoch started by a call to <a href="../man3/MPI_Win_post.3.php">MPI_Win_post</a> on
       <I>win</I>. This call matches calls to <a href="../man3/MPI_Win_complete.3.php">MPI_Win_complete</a>(<I>win</I>) issued by each of
       the processes that were granted access to the window during this epoch.
       The  call  to  MPI_Win_wait  blocks  until  all   matching   calls   to
       <a href="../man3/MPI_Win_complete.3.php">MPI_Win_complete</a>  have  occurred. This guarantees that all these origin
       processes have completed their RMA accesses to the local  window.  When
       the  call  returns,  all  these RMA accesses will have completed at the
       target window.

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
       <a href="../man3/MPI_Win_set_errhandler.3.php">MPI_Win_set_errhandler</a>;  the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
