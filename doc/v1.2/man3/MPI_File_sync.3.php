<?php
$topdir = "../../..";
$title = "MPI_File_sync(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_sync</B>  -  Makes semantics consistent for data-access operations
       (collective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_sync(MPI_File <I>fh</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_SYNC(<I>FH</I>, <I>IERROR</I>)
                  INTEGER    FH, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Sync()

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Calling MPI_File_sync with <I>fh</I> causes all previous writes to <I>fh</I>  by  the
       calling  process to be written to permanent storage. If other processes
       have made updates to permanent storage, then all  such  updates  become
       visible to subsequent reads of <I>fh</I> by the calling process.

       MPI_File_sync  is  a  collective operation. The user is responsible for
       ensuring that all nonblocking requests on <I>fh</I> have been completed before
       calling  MPI_File_sync.  Otherwise,  the call to MPI_File_sync is erro-
       neous.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  For  MPI I/O function errors, the default error handler is set
       to  MPI_ERRORS_RETURN.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;      the      predefined     error     handler
       MPI_ERRORS_ARE_FATAL may be used to make I/O errors  fatal.  Note  that
       MPI  does not guarantee that an MPI program can continue past an error.

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
