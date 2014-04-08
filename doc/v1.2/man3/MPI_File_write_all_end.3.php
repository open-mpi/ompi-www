<?php
$topdir = "../../..";
$title = "MPI_File_write_all_end(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_write_all_end</B> - Writes a file starting at the locations speci-
       fied by individual file pointers; ending part  of  a  split  collective
       routine (blocking).

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_write_all_end(MPI_File <I>fh</I>, void <I>*buf</I>, MPI_Status <I>*status</I>)

       Fortran Syntax
           INCLUDE 'mpif.h'
           MPI_FILE_WRITE_ALL_END(<I>FH</I>, <I>BUF</I>, <I>STATUS</I>, <I>IERROR</I>)
                 &lt;type&gt;         BUF(*)
                 INTEGER        FH, STATUS, IERROR

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Write_all_end(const void* <I>buf</I>, MPI::Status&amp; <I>status</I>)

       void MPI::File::Write_all_end(const void* <I>buf</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       buf       Initial address of buffer (choice).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_write_all_end is the ending part of a split collective routine
       that stores the number of elements actually written into the file asso-
       ciated    with   <I>fh</I>   from   the   user's   buffer   <I>buf</I>   in   <I>status.</I>
       MPI_File_write_all_end  blocks  until  the   operation   initiated   by
       <a href="../man3/MPI_File_write_all_begin.3.php">MPI_File_write_all_begin</a>  completes.  The  data  is  written into those
       parts of the file specified by the current view. All  other  fields  of
       <I>status</I> are undefined.

</PRE>
<H2>NOTES</H2><PRE>
       All  the  nonblocking  collective  routines for data access are "split"
       into two routines, each with _begin or _end as a  suffix.  These  split
       collective routines are subject to the semantic rules described in Sec-
       tion 9.4.5 of the MPI-2 standard.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;      the      predefined     error     handler
       MPI_ERRORS_ARE_FATAL may be used to make I/O errors  fatal.  Note  that
       MPI  does not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006MPI_File_write_all_end(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
