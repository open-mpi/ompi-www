<?php
$topdir = "../../..";
$title = "MPI_File_get_type_extent(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_get_type_extent</B>  -  Returns  the  extent of the data type in a
       file.

</PRE>
<H2>SYNTAX</H2><PRE>
       C Syntax
           #include &lt;mpi.h&gt;
           int MPI_File_get_type_extent(MPI_File <I>fh</I>, MPI_Datatype
                  <I>datatype</I>, MPI_Aint <I>*extent</I>)

       Fortran Syntax (see FORTRAN 77 NOTES)
           INCLUDE 'mpif.h'
           MPI_FILE_GET_TYPE_EXTENT(<I>FH</I>, <I>DATATYPE</I>, <I>EXTENT</I>,  <I>IERROR</I>)
                 INTEGER   <I>FH,</I> <I>DATATYPE,</I> <I>IERROR</I>
                 INTEGER(KIND=MPI_ADDRESS_KIND) <I>EXTENT</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Aint MPI::File::Get_type_extent(const MPI::Datatype&amp;
            <I>datatype</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       fh        File handle (handle).

       datatype  Data type (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       extent    Data type extent (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_File_get_type_extent can be used to calculate <I>extent</I>  for  <I>datatype</I>
       in  the  file.  The  extent is the same for all processes accessing the
       file associated with <I>fh</I>. If the current view uses a  user-defined  data
       representation,  MPI_File_get_type_extent uses the <I>dtype</I><B>_</B><I>file</I><B>_</B><I>extent</I><B>_</B><I>fn</I>
       callback to calculate the extent.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable  Fortran  syntax  for  the  <I>EXTENT</I>
       argument only for Fortran 90. FORTRAN 77 users may use the non-portable
       syntax

            INTEGER*MPI_ADDRESS_KIND <I>EXTENT</I>

       where MPI_ADDRESS_KIND is a constant defined in mpif.h  and  gives  the
       length of the declared integer in bytes.

</PRE>
<H2>NOTES</H2><PRE>
       If  the  file  data representation is other than "native," care must be
       the data types to match the file data representation. Data types passed
       as  arguments to read/write routines specify the data layout in memory;
       therefore, they must always be constructed using  displacements  corre-
       sponding to displacements in memory.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

</PRE>
<H2>Open MPI 1.2                    September 20MPI_File_get_type_extent(3OpenMPI)</H2><PRE>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
