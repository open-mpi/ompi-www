<?php
$topdir = "../../..";
$title = "MPI_File_set_size(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_set_size</B> - Resizes a file (collective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_set_size(MPI_File <I>fh</I>, MPI_Offset <I>size</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_SET_SIZE(<I>FH</I>, <I>SIZE</I>,  <I>IERROR</I>)
                  INTEGER <I>FH,</I> <I>IERROR</I>
                  INTEGER(KIND=MPI_OFFSET_KIND) <I>SIZE</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Set_size(MPI::Offset <I>size</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       fh        File handle (handle).

       size      Size to truncate or expand file (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_set_size  resizes the file associated with the file handle <I>fh,</I>
       truncating UNIX files as necessary.  MPI_File_set_size  is  collective;
       all processes in the group must pass identical values for size.

       When using MPI_File_set_size on a UNIX file, if <I>size</I> is larger than the
       current file size, the file size becomes <I>size</I>. If <I>size</I> is smaller  than
       the current file size, the file is truncated at the position defined by
       <I>size</I> (from the beginning of the file and measured in bytes). Regions of
       the file which have been previously written are unaffected.

       MPI_File_set_size  does  not affect the individual file pointers or the
       shared file pointer.

       Note that the actual amount of storage space  cannot  be  allocated  by
       MPI_File_set_size. Use <a href="../man3/MPI_File_preallocate.3.php">MPI_File_preallocate</a> to accomplish this.

       It  is  erroneous to call this function if MPI_MODE_SEQUENTIAL mode was
       specified when the file was opened.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran syntax for the <I>SIZE</I>  argu-
       ment  only  for  Fortran 90.  FORTRAN 77 users may use the non-portable
       syntax

            INTEGER*MPI_OFFSET_KIND <I>SIZE</I>

       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

Open MPI 1.2                    September 2006     MPI_File_set_size(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
