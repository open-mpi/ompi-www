<?php
$topdir = "../../..";
$title = "MPI_File_read_all_begin(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_read_all_begin</B> - Reads a file starting at the locations speci-
       fied by individual file pointers; beginning part of a split  collective
       routine (nonblocking).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_read_all_begin(MPI_File <I>fh</I>, void <I>*buf</I>,
                  int <I>count</I>, MPI_Datatype <I>datatype</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_READ_ALL_BEGIN(<I>FH</I>, <I>BUF</I>, <I>COUNT</I>, <I>DATATYPE</I>, <I>IERROR</I>)
                 &lt;TYPE&gt;         <I>BUF</I>(*)
                 INTEGER        <I>FH,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Read_all_begin(void* <I>buf</I>, int <I>count</I>,
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
       MPI_File_read_all_begin  is  the  beginning  part of a split collective
       operation that attempts to read from the file associated  with  <I>fh</I>  (at
       the  current individual file pointer position maintained by the system)
       a total number of <I>count</I> data items having <I>datatype</I> type into the user's
       buffer <I>buf.</I>  The data is taken out of those parts of the file specified
       by the current view.

</PRE>
<H2>NOTES</H2><PRE>
       All the nonblocking collective routines for  data  access  are  "split"
       into  two  routines,  each with _begin or _end as a suffix. These split
       collective routines are subject to the semantic rules described in Sec-
       tion 9.4.5 of the MPI-2 standard.

</PRE>
<H2>ERRORS</H2><PRE>
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

1.3.4                            Nov 11, 2009       <B>MPI_File_read_all_begin(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
