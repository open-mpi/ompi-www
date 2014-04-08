<?php
$topdir = "../../..";
$title = "MPI_Is_thread_main(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Is_thread_main</B> - Determines if thread called <a href="../man3/MPI_Init.3.php">MPI_Init</a>

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Is_thread_main(int *<I>flag</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_IS_THREAD_MAIN(<I>FLAG,</I> <I>IERROR</I>)
            LOGICAL   <I>FLAG</I>
            INTEGER   <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool MPI::Is_thread_main()

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       flag      True if calling thread is main thread (boolean).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Is_thread_main is called by a thread to find out whether the caller
       is the main thread  (that  is,  the  thread  that  called  <a href="../man3/MPI_Init.3.php">MPI_Init</a>  or
       <a href="../man3/MPI_Init_thread.3.php">MPI_Init_thread</a>).

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

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Init.3.php">MPI_Init</a>
       <a href="../man3/MPI_Init_thread.3.php">MPI_Init_thread</a>

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
