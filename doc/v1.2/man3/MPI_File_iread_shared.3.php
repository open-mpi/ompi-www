<?php
$topdir = "../../..";
$title = "MPI_File_iread_shared(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_iread_shared</B>  -  Reads  a  file  using the shared file pointer
       (nonblocking, noncollective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_iread_shared(MPI_File <I>fh</I>, void <I>*buf</I>, int <I>count</I>,
                  MPI_Datatype <I>datatype</I>, MPI_Request <I>*request</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_IREAD_SHARED(<I>FH</I>, <I>BUF</I>, <I>COUNT</I>, <I>DATATYPE</I>, <I>REQUEST</I>, <I>IERROR</I>)
                 &lt;type&gt;         BUF(*)
                 INTEGER        FH, COUNT, DATATYPE, REQUEST, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Request MPI::File::Iread_shared(void* <I>buf</I>, int <I>count</I>,
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

       request   Request object (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_iread_shared    is    a    nonblocking    version    of    the
       <a href="../man3/MPI_File_read_shared.3.php">MPI_File_read_shared</a> interface. It uses the shared file pointer to read
       files. The order of serialization among the processors is not determin-
       istic  for this noncollective routine, so you need to use other methods
       of synchronization to impose a particular order among processors.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is

Open MPI 1.2                    September 2006 MPI_File_iread_shared(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
