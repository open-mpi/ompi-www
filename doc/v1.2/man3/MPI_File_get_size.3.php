<?php
$topdir = "../../..";
$title = "MPI_File_get_size(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_get_size</B> - Returns the current size of the file.

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_get_size(MPI_File <I>fh</I>, MPI_Offset <I>*size</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_GET_SIZE(<I>FH</I>, <I>SIZE</I>,  <I>IERROR</I>)
            INTEGER <I>FH,</I> <I>ERROR</I>
            INTEGER(KIND=MPI_OFFSET_KIND) <I>SIZE</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Offset MPI::File::Get_size() const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       fh        File handle (handle).

       size      Size of the file in bytes (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_get_size  returns,  in <I>size</I> , the current size in bytes of the
       file associated with the file  handle  <I>fh</I>.  Note  that  the  file  size
       returned  by  Solaris  may not represent the number of bytes physically
       allocated for the file in those cases where all bytes in this file have
       not been written at least once.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The  MPI standard prescribes portable Fortran syntax for the <I>SIZE</I> argu-
       ment only for Fortran 90. Sun FORTRAN 77 users may use the non-portable
       syntax

            INTEGER*MPI_OFFSET_KIND <I>SIZE</I>

       where  MPI_ADDRESS_KIND  is  a constant defined in mpif.h and gives the
       length of the declared integer in bytes.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       <a href="../man3/MPI_File_preallocate.3.php">MPI_File_preallocate</a>

Open MPI 1.2                    September 2006     MPI_File_get_size(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
