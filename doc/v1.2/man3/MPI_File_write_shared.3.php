<?php
$topdir = "../../..";
$title = "MPI_File_write_shared(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_write_shared</B>  -  Writes  a  file using the shared file pointer
       (blocking, noncollective).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_write_shared(MPI_File <I>fh</I>, void <I>*buf</I>, int <I>count</I>,
                  MPI_Datatype <I>datatype</I>, MPI_Status <I>*status</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_WRITE_SHARED(<I>FH</I>, <I>BUF</I>, <I>COUNT</I>, <I>DATATYPE</I>, <I>STATUS</I>, <I>IERROR</I>)
                 &lt;type&gt;         <I>BUF(*)</I>
                 INTEGER        <I>FH,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I>
                                <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Write_shared(const void* <I>buf</I>, int <I>count</I>,
            const MPI::Datatype&amp; <I>datatype</I>, MPI::Status&amp; <I>status</I>)

       void MPI::File::Write_shared(const void* <I>buf</I>, int <I>count</I>,
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
       MPI_File_write_shared is a blocking routine that uses the  shared  file
       pointer to write files. The order of serialization is not deterministic
       for this noncollective routine.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

Open MPI 1.2                    September 2006 MPI_File_write_shared(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
