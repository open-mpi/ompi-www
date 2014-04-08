<?php
$topdir = "../../..";
$title = "MPI_File_write_ordered(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_write_ordered</B>  -  Writes  a  file at a location specified by a
       shared file pointer (blocking, collective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_write_ordered(MPI_File <I>fh</I>, void <I>*buf</I>,
                         int <I>count</I>, MPI_Datatype <I>datatype</I>,
                         MPI_Status <I>*status</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_WRITE_ORDERED(<I>FH</I>, <I>BUF</I>, <I>COUNT</I>, <I>DATATYPE</I>,
                         <I>STATUS</I>, <I>IERROR</I>)
                  &lt;type&gt;     <I>BUF</I>(*)
                  INTEGER    <I>FH,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Write_ordered(const void* <I>buf</I>, int <I>count</I>,
            const MPI::Datatype&amp; <I>datatype</I>, MPI::Status&amp; <I>status</I>)

       void MPI::File::Write_ordered(const void* <I>buf</I>, int <I>count</I>,
            const MPI::Datatype&amp; <I>datatype</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       fh        File handle (handle).

       buf       Initial address of buffer (choice).

       count     Number of elements in buffer (integer).

       datatype  Data type of each buffer element (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       status    Status object (Status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_write_ordered is a collective routine. This  routine  must  be
       called  by  all processes in the communicator group associated with the
       file handle <I>fh.</I>  Each process may pass different  argument  values  for
       the  <I>datatype</I> and <I>count</I> arguments. Each process attempts to write, into
       the file associated with <I>fh,</I> a total number of <I>count</I> data items  having
       datatype  type  contained  in the user's buffer <I>buf.</I>  For each process,
       the location in the file at which data is written is  the  position  at
       which  the shared file pointer would be after all processes whose ranks
       within the group are less than that of this process had  written  their
       data.  MPI_File_write_ordered  returns  the number of <I>datatype</I> elements
       written in <I>status.</I>  The shared file pointer is updated by  the  amounts
       of data requested by all processes of the group.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

Open MPI 1.2                    September 2006MPI_File_write_ordered(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
