<?php
$topdir = "../../..";
$title = "MPI_File_write_all_begin(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_write_all_begin</B>  -  Writes  a  file  starting at the locations
       specified by individual file pointers; beginning part of a  split  col-
       lective routine (nonblocking).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_write_all_begin(MPI_File <I>fh</I>, void <I>*buf</I>,
                  int <I>count</I>, MPI_Datatype <I>datatype</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_WRITE_ALL_BEGIN(<I>FH</I>, <I>BUF</I>, <I>COUNT</I>, <I>DATATYPE</I>, <I>IERROR</I>)
                 &lt;type&gt;         BUF(*)
                 INTEGER        FH, COUNT, DATATYPE, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Write_all_begin(const void* <I>buf</I>, int <I>count</I>,
            const MPI::Datatype&amp; <I>datatype</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       buf       Initial address of buffer (choice).

       count     Number of elements in buffer (integer).

       datatype  Data type of each buffer element (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_write_all_begin  is  the beginning part of a split collective,
       nonblocking routine that attempts to write  into  the  file  associated
       with  <I>fh</I> (at the current individual file pointer position maintained by
       the system) a total number of <I>count</I> data  items  having  <I>datatype</I>  type
       from  the  user's  buffer <I>buf.</I>  The data is written into those parts of
       the file specified by the current view.

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

</PRE>
<H2>Open MPI 1.2                    September 20MPI_File_write_all_begin(3OpenMPI)</H2><PRE>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
