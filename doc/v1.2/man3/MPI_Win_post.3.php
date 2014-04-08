<?php
$topdir = "../../..";
$title = "MPI_Win_post(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_post</B>  - Starts an RMA exposure epoch for the local window asso-
       ciated with <I>win</I>

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_post(MPI_Group <I>group</I>, int assert, MPI_Win <I>win</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_POST(<I>GROUP,</I> <I>ASSERT,</I> <I>WIN,</I> <I>IERROR</I>)
            INTEGER GROUP, ASSERT, WIN, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Post(const MPI::Group&amp; group, int assert) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       group     The group of origin processes (handle)

       assert    Program assertion (integer)

       win       Window object (handle)

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Starts an RMA exposure epoch for the local window associated with  <I>win</I>.
       Only the processes belonging to <I>group</I> should access the window with RMA
       calls on <I>win</I> during this epoch. Each process  in  <I>group</I>  must  issue  a
       matching call to <a href="../man3/MPI_Win_start.3.php">MPI_Win_start</a>. MPI_Win_post does not block.

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
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
