<?php
$topdir = "../../..";
$title = "MPI_File_write(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_write</B>  -  Writes  a file starting at the location specified by
       the individual file pointer (blocking, noncollective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_write(MPI_File <I>fh</I>, void <I>*buf</I>,
            int <I>count</I>, MPI_Datatype <I>datatype</I>,
            MPI_Status <I>*status</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_WRITE(<I>FH</I>,  <I>BUF</I>, <I>COUNT</I>,
                   <I>DATATYPE</I>, <I>STATUS</I>,  <I>IERROR</I>)
             &lt;type&gt; <I>BUF</I>(*)
             INTEGER <I>FH,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I>
                 <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Write(const void* <I>buf</I>, int <I>count</I>,
            const MPI::Datatype&amp; <I>datatype</I>, MPI::Status&amp; <I>status</I>)

       void MPI::File::Write(const void* <I>buf</I>, int <I>count</I>,
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
<H2>OUTPUT PARAMETERS</H2><PRE>
       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_write attempts to write into the file associated with  <I>fh</I>  (at
       the  current individual file pointer position maintained by the system)
       a total number of <I>count</I> data items having <I>datatype</I> type from the user's
       buffer <I>buf.</I>  The data is written into those parts of the file specified
       by the current view. MPI_File_write stores the number of <I>datatype</I>  ele-
       ments actually written in <I>status.</I>  All other fields of <I>status</I> are unde-
       fined.

       It is erroneous to call this function if MPI_MODE_SEQUENTIAL  mode  was
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

Open MPI 1.2                    September 2006        MPI_File_write(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
