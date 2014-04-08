<?php
$topdir = "../../..";
$title = "MPI_File_delete(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_delete</B> - Deletes a file.

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_delete(char <I>*filename</I>, MPI_Info <I>info</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_DELETE(<I>FILENAME</I>, <I>INFO</I>, <I>IERROR</I>)
             CHARACTER*(*) <I>FILENAME</I>
             INTEGER <I>INFO,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static void MPI::File::Delete(const char* <I>filename</I>, const
            MPI::Info&amp; <I>info</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       filename  Name of file to delete (string).

       info      Info object (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_delete  deletes the file identified by the file name <I>filename</I>,
       provided it is not currently open by any process. It  is  an  error  to
       delete  the  file with MPI_File_delete if some process has it open, but
       MPI_File_delete does not check  this.  If  the  file  does  not  exist,
       MPI_File_delete returns an error in the class MPI_ERR_NO_SUCH_FILE.

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
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
