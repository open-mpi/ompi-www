<?php
$topdir = "../../..";
$title = "MPI_File_iwrite(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_iwrite</B>  -  Writes a file starting at the location specified by
       the individual file pointer (nonblocking, noncollective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_iwrite(MPI_File <I>fh</I>, void <I>*buf</I>, int <I>count</I>,
                  MPI_Datatype <I>datatype</I>, MPI_Request <I>*request</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_IWRITE(<I>FH</I>, <I>BUF</I>, <I>COUNT</I>, <I>DATATYPE</I>, <I>REQUEST</I>, <I>IERROR</I>)
                 &lt;TYPE&gt;         BUF(*)
                 INTEGER        FH, COUNT, DATATYPE, REQUEST, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Request MPI::File::Iwrite(const void* <I>buf</I>, int <I>count</I>,
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
       request   Request object (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_iwrite is a nonblocking version of the  <a href="../man3/MPI_File_write.3.php">MPI_File_write</a>  inter-
       face.  It  attempts  to  write into the file associated with <I>fh</I> (at the
       current individual file pointer position maintained by  the  system)  a
       total  number  of <I>count</I> data items having <I>datatype</I> type from the user's
       buffer <I>buf.</I>  The data is written into those parts of the file specified
       by the current view. MPI_File_iwrite stores the number of <I>datatype</I> ele-
       ments actually written in <I>status.</I>  All other fields of <I>status</I> are unde-
       fined.

       It  is  erroneous  to call this function if MPI_MODE_SEQENTIAL mode was
       specified when the file was open.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;      the      predefined     error     handler
       MPI_ERRORS_ARE_FATAL may be used to make I/O errors  fatal.  Note  that
       MPI  does not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006       MPI_File_iwrite(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
