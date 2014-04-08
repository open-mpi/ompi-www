<?php
$topdir = "../../..";
$title = "MPI_File_get_view(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_get_view</B> - Returns the process's view of data in the file.

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_get_view(MPI_File <I>fh</I>, MPI_Offset <I>*disp</I>,
                  MPI_Datatype <I>*etype</I>, MPI_Datatype <I>*filetype</I>,
                     char <I>*datarep</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_GET_VIEW(<I>FH</I>, <I>DISP</I>, <I>ETYPE</I>,
                   <I>FILETYPE</I>, <I>DATAREP</I>,  <I>IERROR</I>)
             INTEGER <I>FH,</I> <I>ETYPE,</I> <I>FILETYPE,</I> <I>IERROR</I>
             CHARACTER*(*) <I>DATAREP</I>
             INTEGER(KIND=MPI_OFFSET_KIND) <I>DISP</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::File::Get_view(MPI::Offset&amp; <I>disp</I>,
            MPI::Datatype&amp; <I>etype</I>,
            MPI::Datatype&amp; <I>filetype</I>, char* <I>datarep</I>) const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       fh        File handle (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       disp      Displacement (integer).

       etype     Elementary data type (handle).

       filetype  File type (handle). See Restrictions, below.

       datarep   Data representation (string).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The MPI_File_get_view routine returns the process's view of the data in
       the file. The current values of the displacement, etype,  and  filetype
       are returned in <I>disp,</I> <I>etype,</I> and <I>filetype,</I> respectively.

       The  MPI_File_get_view  interface allows the user to pass a data-repre-
       sentation string via the <I>datarep</I> argument.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran syntax for the <I>DISP</I>  argu-
       ment  only  for  Fortran 90.  FORTRAN 77 users may use the non-portable
       syntax.

            INTEGER*MPI_OFFSET_KIND <I>DISP</I>

       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

Open MPI 1.2                    September 2006     MPI_File_get_view(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
