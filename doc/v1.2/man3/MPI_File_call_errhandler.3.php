<?php
$topdir = "../../..";
$title = "MPI_File_call_errhandler(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_call_errhandler</B>  - Passes the supplied error code to the error
       handler assigned to a file

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_File_call_errhandler(MPI_File <I>fh</I>, int <I>errorcode</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_FILE_CALL_ERRHANDLER(<I>FH,</I> <I>ERRORCODE,</I> <I>IERROR</I>)
            INTEGER   <I>FH,</I> <I>IERRORCODE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Call_errhandler(int <I>errorcode</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       fh            file with error handler (handle).

       errorcode     MPI error code (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR        Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This function invokes the error handler assigned to the file handle  <I>fh</I>
       with  the  supplied error code <I>errorcode</I>. If the error handler was suc-
       cessfully called, the process is not aborted,  and  the  error  handler
       returns, this function returns MPI_SUCCESS.

       Unlike  errors  on  communicators and windows, the default errorhandler
       for files is MPI_ERRORS_RETURN.

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
       <a href="../man3/MPI_File_create_errhandler.3.php">MPI_File_create_errhandler</a>
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
