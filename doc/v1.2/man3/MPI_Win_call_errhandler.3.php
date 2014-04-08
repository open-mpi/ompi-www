<?php
$topdir = "../../..";
$title = "MPI_Win_call_errhandler(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_call_errhandler</B>  -  Passes the supplied error code to the error
       handler assigned to a window

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_call_errhandler(MPI_Win <I>win</I>, int <I>errorcode</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_CALL_ERRHANDLER(<I>WIN,</I> <I>ERRORCODE,</I> <I>IERROR</I>)
            INTEGER   <I>WIN,</I> <I>ERRORCODE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Win::Call_errhandler(int <I>errorcode</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       win           Window with error handler (handle).

       errorcode     MPI error code (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR        Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This function invokes the error handler assigned to the window <I>win</I> with
       the  supplied  error  code <I>errorcode</I>. If the error handler was success-
       fully called, the  process  is  not  aborted,  and  the  error  handler
       returns, this function returns MPI_SUCCESS.

</PRE>
<H2>NOTES</H2><PRE>
       Users    should    note    that    the   default   error   handler   is
       MPI_ERRORS_ARE_FATAL. Thus, calling this function will abort the window
       processes  if  the  default error handler has not been changed for this
       window.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Win_create_errhandler.3.php">MPI_Win_create_errhandler</a>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
