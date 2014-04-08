<?php
$topdir = "../../..";
$title = "MPI_File_seek(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_seek</B> - Updates individual file pointers (noncollective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_seek(MPI_File <I>fh</I>, MPI_Offset <I>offset</I>,
                         int <I>whence</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_SEEK(<I>FH</I>, <I>OFFSET</I>, <I>WHENCE</I>, <I>IERROR</I>)
                  INTEGER <I>FH,</I> <I>WHENCE,</I> <I>IERROR</I>
                  INTEGER(KIND=MPI_OFFSET_KIND) <I>OFFSET</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Seek(MPI::Offset <I>offset</I>, int <I>whence</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       fh        File handle (handle).

       offset    File offset (integer).

       whence    Update mode (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_seek  updates the individual file pointer according to <I>whence,</I>
       which could have the following possible values:

         o    MPI_SEEK_SET - The pointer is set to <I>offset.</I>

         o    MPI_SEEK_CUR - The pointer is set to the current  pointer  posi-
              tion plus <I>offset.</I>

         o    MPI_SEEK_END  -  The  pointer is set to the end of the file plus
              <I>offset.</I>

The <I>offset</I> can be negative, which allows seeking backwards. It is erroneous to
seek  to a negative position in the file. The end of the file is defined to be
the location of the next elementary  data  item  immediately  after  the  last
accessed data item, even if that location is a hole.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The  MPI  standard  prescribes  portable  Fortran syntax for the <I>OFFSET</I>
       argument only for Fortran 90.  FORTRAN 77 users may use the  non-porta-
       ble syntax

            INTEGER*MPI_OFFSET_KIND <I>OFFSET</I>

       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  For  MPI I/O function errors, the default error handler is set
       to  MPI_ERRORS_RETURN.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;      the      predefined     error     handler
       MPI_ERRORS_ARE_FATAL may be used to make I/O errors  fatal.  Note  that
       MPI  does not guarantee that an MPI program can continue past an error.

1.3.4                            Nov 11, 2009                 <B>MPI_File_seek(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
