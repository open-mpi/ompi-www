<?php
$topdir = "../../..";
$title = "MPI_File_iread(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_iread</B> - Reads a file starting at the location specified by the
       individual file pointer (nonblocking, noncollective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_iread(MPI_File <I>fh</I>, void  <I>*buf</I>, int  <I>count</I>,
                  MPI_Datatype  <I>datatype</I>, MPI_Request  <I>*request</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_IREAD(<I>FH</I>, <I>BUF</I>, <I>COUNT</I>, <I>DATATYPE</I>, <I>REQUEST</I>, <I>IERROR</I>)
                 &lt;type&gt;         BUF(*)
                 INTEGER        FH, COUNT, DATATYPE, REQUEST, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Request MPI::File::Iread(void* <I>buf</I>, int <I>count</I>,
            const MPI::Datatype&amp; <I>datatype</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number of elements in the buffer (integer).

       datatype  Data type of each buffer element (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       buf       Initial address of buffer (choice).

       request   Request object (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_iread is a nonblocking version of <a href="../man3/MPI_File_read.3.php">MPI_File_read</a>.  It  attempts
       to read from the file associated with <I>fh</I> at the current individual file
       pointer position maintained by the system in which a  total  number  of
       <I>count</I>  data items having <I>datatype</I> type  are read into the user's buffer
       <I>buf.</I>  The data is taken out of those parts of the file specified by the
       current  view.  MPI_File_iread  stores the number of data-type elements
       actually read in <I>status.</I>  All other fields of <I>status</I> are undefined.  It
       is  erroneous  to  call  this  function if MPI_MODE_SEQUENTIAL mode was
       specified when the file was opened.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI  does not guarantee that an MPI program can continue past an error.

1.3.4                            Nov 11, 2009                <B>MPI_File_iread(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
