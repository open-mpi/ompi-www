<?php
$topdir = "../../..";
$title = "MPI_File_get_byte_offset(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_get_byte_offset</B>  -  Converts  a  view-relative  offset into an
       absolute byte position.

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_get_byte_offset(MPI_File <I>fh</I>, MPI_Offset <I>offset</I>,
                  MPI_Offset <I>*disp</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_GET_BYTE_OFFSET(<I>FH</I>, <I>OFFSET</I>, <I>DISP</I>, <I>IERROR</I>)
                 INTEGER   <I>FH,</I> <I>IERROR</I>
                 INTEGER(KIND=MPI_OFFSET_KIND) <I>OFFSET,</I> <I>DISP</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Offset MPI::File::Get_byte_offset(const MPI::Offset <I>disp</I>)
            const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       fh        File handle (handle).

       offset    Offset (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       disp      Absolute byte position of offset (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_get_byte_offset converts an offset specified for  the  current
       view  to  its  corresponding displacement value, or absolute byte posi-
       tion, from the beginning of the file. The  absolute  byte  position  of
       <I>offset</I> relative to the current view of <I>fh</I> is returned in <I>disp</I>.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The  MPI standard prescribes portable Fortran syntax for the <I>OFFSET</I> and
       <I>DISP</I> arguments only for Fortran 90. Sun FORTRAN 77 users  may  use  the
       non-portable syntax

            INTEGER*MPI_OFFSET_KIND <I>OFFSET</I>
       or
            INTEGER*MPI_OFFSET_KIND <I>DISP</I>

       where  MPI_OFFSET_KIND  is  a  constant defined in mpif.h and gives the
       length of the declared integer in bytes.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;      the      predefined     error     handler
       MPI_ERRORS_ARE_FATAL may be used to make I/O errors  fatal.  Note  that
       MPI  does not guarantee that an MPI program can continue past an error.

</PRE>
<H2>Open MPI 1.2                    September 20MPI_File_get_byte_offset(3OpenMPI)</H2><PRE>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
