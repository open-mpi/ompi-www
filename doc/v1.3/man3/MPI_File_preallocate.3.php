<?php
$topdir = "../../..";
$title = "MPI_File_preallocate(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_preallocate</B> - Preallocates a specified amount of storage space
       at the beginning of a file (collective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_preallocate(MPI_File <I>fh</I>, MPI_Offset <I>size</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_PREALLOCATE(<I>FH</I>, <I>SIZE</I>, <I>IERROR</I>)
                  INTEGER <I>FH,</I> <I>IERROR</I>
                  INTEGER(KIND=MPI_OFFSET_KIND) <I>SIZE</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Preallocate(MPI::Offset <I>size</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       size      Size to preallocate file, in bytes (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_preallocate ensures that storage space is  allocated  for  the
       first  <I>size</I>  bytes of the file associated with <I>fh</I>. MPI_File_preallocate
       can be a very time-consuming operation.

       MPI_File_preallocate is collective; all processes  in  the  group  must
       pass  identical  values  for <I>size</I>. Regions of the file that have previ-
       ously been written are unaffected. For newly allocated regions  of  the
       file,  MPI_File_preallocate  has  the  same effect as writing undefined
       data. If size is larger than the  current  file  size,  the  file  size
       increases  to  <I>size</I>.  If <I>size</I> is less than or equal to the current file
       size, the file size is unchanged.

       The treatment of file pointers, pending nonblocking accesses, and  file
       consistency  is the same as with <a href="../man3/MPI_File_set_size.3.php">MPI_File_set_size</a>. If MPI_MODE_SEQUEN-
       TIAL mode was specified when the file was opened, it  is  erroneous  to
       call this routine.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The  MPI standard prescribes portable Fortran syntax for the <I>SIZE</I> argu-
       ment only for Fortran 90.  FORTRAN 77 users may  use  the  non-portable
       syntax

       the size that is set is smaller than the current file size, the file is
       truncated at the position defined by size. If the size  is  set  to  be
       larger  than the current file size, the file size becomes the set size.
       When the file size is increased this way  with  <a href="../man3/MPI_File_set_size.3.php">MPI_File_set_size</a>,  new
       regions are created in the file with displacements between the old file
       size and the larger, newly set file size.

       Sun MPI I/O does not necessarily  allocate  file  space  for  such  new
       regions.  You  may reserve file space either by using MPI_File_preallo-
       cate or by performing a read or write to certain bytes.

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

1.3.4                            Nov 11, 2009          <B>MPI_File_preallocate(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
