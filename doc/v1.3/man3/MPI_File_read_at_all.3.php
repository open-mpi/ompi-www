<?php
$topdir = "../../..";
$title = "MPI_File_read_at_all(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_read_at_all</B>  -  Reads  a  file at explicitly specified offsets
       (blocking, collective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_read_at_all(MPI_File <I>fh</I>, MPI_Offset <I>offset</I>,
            void <I>*buf</I>, int <I>count</I>, MPI_Datatype <I>datatype</I>,
            MPI_Status <I>*status</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_READ_AT_ALL(<I>FH</I>,  <I>OFFSET</I>,  <I>BUF</I>, <I>COUNT</I>,
                   <I>DATATYPE</I>, <I>STATUS</I>,  <I>IERROR</I>)
             &lt;type&gt; <I>BUF</I>(*)
             INTEGER <I>FH,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>
             INTEGER(KIND=MPI_OFFSET_KIND) <I>OFFSET</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Read_at_all(MPI::Offset <I>offset</I>, void* <I>buf</I>,
            int <I>count</I>, const MPI::Datatype&amp; <I>datatype</I>, MPI::Status&amp; <I>status</I>)

       void MPI::File::Read_at_all(MPI::Offset <I>offset</I>, void* <I>buf</I>,
            int <I>count</I>, const MPI::Datatype&amp; <I>datatype</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       fh        File handle (handle).

       offset    File offset (integer).

       count     Number of elements in buffer (integer).

       datatype  Data type of each buffer element (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       buf       Initial address of buffer (choice).

       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_read_at_all is a collective routine that attempts to read from
       the  file associated with <I>fh</I> (at the <I>offset</I> position) a total number of
       <I>count</I> data items having <I>datatype</I> type into the user's buffer <I>buf.</I>   The
       <I>offset</I>  is  in etype units relative to the current view. That is, holes
       are not counted when locating an offset. The data is taken out of those
       parts  of  the file specified by the current view. MPI_File_read_at_all
       stores the number of <I>datatype</I> elements actually read  in  <I>status.</I>   All
       other  fields  of  <I>status</I>  are  undefined. It is erroneous to call this
       function if MPI_MODE_SEQUENTIAL mode was specified when  the  file  was
            INTEGER*MPI_OFFSET_KIND <I>OFFSET</I>

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

1.3.4                            Nov 11, 2009          <B>MPI_File_read_at_all(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
