<?php
$topdir = "../../..";
$title = "MPI_File_read_ordered_begin(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_read_ordered_begin</B> - Reads a file at a location specified by a
       shared file pointer; beginning part of a split collective routine (non-
       blocking).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_read_ordered_begin(MPI_File <I>fh</I>, void <I>*buf</I>,
                  int <I>count</I>, MPI_Datatype <I>datatype</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_READ_ORDERED_BEGIN(<I>FH</I>, <I>BUF</I>, <I>COUNT</I>, <I>DATATYPE</I>, <I>IERROR</I>)
                 &lt;type&gt;         BUF(*)
                 INTEGER        FH, COUNT, DATATYPE, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Read_ordered_begin(void* <I>buf</I>, int <I>count</I>,
            const MPI::Datatype&amp; <I>datatype</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number of elements in buffer (integer).

       datatype  Data type of each buffer element (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       buf       Initial address of buffer (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_read_ordered_begin  is  the  beginning part of a split collec-
       tive, nonblocking routine that must be called by all processes  in  the
       communicator  group  associated  with the file handle <I>fh.</I>  Each process
       may pass different argument values for the  <I>datatype</I>  and  <I>count</I>  argu-
       ments. Each process attempts to read, from the file associated with <I>fh,</I>
       a total number of <I>count</I> data items having <I>datatype</I> type into the user's
       buffer  <I>buf.</I>   For each process, the location in the file at which data
       is read is the position at which the shared file pointer would be after
       all  processes  whose ranks within the group are less than that of this
       process had read their data.

</PRE>
<H2>NOTES</H2><PRE>
       All the nonblocking collective routines for  data  access  are  "split"
       into  two  routines,  each with _begin or _end as a suffix. These split
       collective routines are subject to the semantic rules described in Sec-
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

1.3.4                            Nov 11, 2009   <B>MPI_File_read_ordered_begin(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
