<?php
$topdir = "../../..";
$title = "MPI_Errhandler_get(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Errhandler_get</B>   - Gets the error handler for a communicator -- use
       of this routine is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Errhandler_get(MPI_Comm <I>comm</I>, MPI_Errhandler <I>*errhandler</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ERRHANDLER_GET(<I>COMM,</I> <I>ERRHANDLER,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>ERRHANDLER,</I> <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm      Communicator to get the error handler from (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       errhandler
                 MPI error  handler  currently  associated  with  communicator
                 (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note  that  use  of  this routine is <I>deprecated</I> as of MPI-2. Please use
       <a href="../man3/MPI_Comm_get_errhandler.3.php">MPI_Comm_get_errhandler</a> instead.

       This deprecated routine is not available in C++.

       Returns in errhandler (a handle to) the error handler that is currently
       associated with communicator comm.

       <B>Example:</B> A library function may register at its entry point the current
       error handler for a communicator, set its own private error handler for
       this  communicator,  and restore before exiting the previous error han-
       dler.

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
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does

1.3.4                            Nov 11, 2009            <B>MPI_Errhandler_get(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
