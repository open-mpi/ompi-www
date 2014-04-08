<?php
$topdir = "../../..";
$title = "MPI_File_get_position_shared(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_get_position_shared</B>  -  Returns  the  current  position of the
       shared file pointer.

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_get_position_shared(MPI_File <I>fh</I>, MPI_Offset <I>*offset</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_GET_POSITION_SHARED(<I>FH</I>, <I>OFFSET</I>, <I>IERROR</I>)
                  INTEGER <I>FH,</I> <I>IERROR</I>
                  INTEGER(KIND=MPI_OFFSET_KIND) <I>OFFSET</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Offset MPI::File::Get_position_shared() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       offset    Offset of the shared file pointer (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_get_position_shared returns, in <I>offset,</I> the  current  position
       of  the shared file pointer in <I>etype</I> units relative to the current dis-
       placement and file type.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable  Fortran  syntax  for  the  <I>OFFSET</I>
       argument only for Fortran 90. Sun FORTRAN 77 users may use the non-por-
       table syntax

            INTEGER*MPI_OFFSET_KIND <I>OFFSET</I>

       where MPI_ADDRESS_KIND is a constant defined in mpif.h  and  gives  the
       length of the declared integer in bytes.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set

</PRE>
<H2>Open MPI 1.2                    SeptembeMPI_File_get_position_shared(3OpenMPI)</H2><PRE>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
