<?php
$topdir = "../../..";
$title = "MPI_File_seek_shared(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_seek_shared</B>  - Updates the global shared file pointer (collec-
       tive).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_seek_shared(MPI_File <I>fh</I>, MPI_Offset <I>offset</I>,
                         int <I>whence</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_SEEK_SHARED(<I>FH</I>, <I>OFFSET</I>, <I>WHENCE</I>, <I>IERROR</I>)
                  INTEGER <I>FH,</I> <I>WHENCE,</I> <I>IERROR</I>
                  INTEGER(KIND=MPI_OFFSET_KIND) <I>OFFSET</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Seek_shared(MPI::Offset <I>offset</I>, int <I>whence</I>)

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
       MPI_File_seek_shared updates  the  shared  file  pointer  according  to
       <I>whence,</I> which could have the following possible values:

         o    MPI_SEEK_SET - The pointer is set to <I>offset.</I>

         o    MPI_SEEK_CUR  -  The pointer is set to the current pointer posi-
              tion plus <I>offset.</I>

         o    MPI_SEEK_END - The pointer is set to the end of  the  file  plus
              <I>offset.</I>

MPI_File_seek_shared  is  collective;  all  the  processes in the communicator
group associated with the file handle <I>fh</I> must call  MPI_File_seek_shared  with
the  same <I>offset</I> and <I>whence.</I>  All processes in the communicator group are syn-
chronized before the shared file pointer is updated.

The <I>offset</I> can be negative, which allows seeking backwards. It is erroneous to
seek  to a negative position in the view. The end of the view is defined to be
the position of the next elementary data item, relative to the  current  view,
following the last whole elementary data item accessible.

       where  MPI_OFFSET_KIND  is  a  constant defined in mpif.h and gives the
       length of the declared integer in bytes.

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

Open MPI 1.2                    September 2006  MPI_File_seek_shared(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
