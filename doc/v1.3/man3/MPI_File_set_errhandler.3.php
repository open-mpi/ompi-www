<?php
$topdir = "../../..";
$title = "MPI_File_set_errhandler(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_set_errhandler</B>  - Sets the error handler for a file.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_File_set_errhandler(MPI_File <I>file</I>, MPI_Errhandler
            <I>errhandler</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_FILE_SET_ERRHANDLER(<I>FILE,</I> <I>ERRHANDLER,</I> <I>IERROR</I>)
            INTEGER   <I>FILE,</I> <I>ERRHANDLER,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Set_errhandler(const MPI::Errhandler&amp; <I>errhandler</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       file      File (handle).

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       errhandler
                 New error handler for file (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Attaches  a  new  error  handler  to  a file. The error handler must be
       either a predefined error handler or an error handler created by a call
       to <a href="../man3/MPI_File_create_errhandler.3.php">MPI_File_create_errhandler</a>.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       MPI_File_set_errhandler;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
