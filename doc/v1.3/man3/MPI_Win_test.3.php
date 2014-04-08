<?php
$topdir = "../../..";
$title = "MPI_Win_test(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_test</B>  - Attempts to complete an RMA exposure epoch; a nonblock-
       ing version of <a href="../man3/MPI_Win_wait.3.php">MPI_Win_wait</a>

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_test(MPI_Win <I>win</I>, int *<I>flag</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_TEST( <I>WIN,</I> <I>FLAG,</I> <I>IERROR</I>)
            INTEGER  <I>WIN,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool MPI::Win::Test() const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       win       Window object (handle)

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       IERROR    Fortran only: Error status (integer).

       flag      The returning state of the test for epoch closure.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Win_test is a one-sided MPI communication synchronization  call,  a
       nonblocking   version   of  <a href="../man3/MPI_Win_wait.3.php">MPI_Win_wait</a>.  It  returns  <I>ag</I>  <I>=</I>  <I>true</I>  if
       <a href="../man3/MPI_Win_wait.3.php">MPI_Win_wait</a> would return, <I>ag</I> <I>=</I> <I>false</I> otherwise. The effect  of  return
       of  MPI_Win_test with <I>flag</I> <I>=</I> <I>true</I> is the same as the effect of a return
       of <a href="../man3/MPI_Win_wait.3.php">MPI_Win_wait</a>. If <I>ag</I> <I>=</I> <I>false</I> is returned, then the call has no  visi-
       ble effect.

       Invoke  MPI_Win_test  only  where <a href="../man3/MPI_Win_wait.3.php">MPI_Win_wait</a> can be invoked. Once the
       call has returned <I>ag</I> <I>=</I> <I>true</I>, it must not be  invoked  anew,  until  the
       window is posted anew.

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

                                 Nov 11, 2009                  <B>MPI_Win_test(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
