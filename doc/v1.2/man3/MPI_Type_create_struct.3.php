<?php
$topdir = "../../..";
$title = "MPI_Type_create_struct(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_create_struct</B> - Creates a structured data type.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_create_struct(int <I>count</I>, int <I>array</I><B>_</B><I>of</I><B>_</B><I>blocklengths</I>[],
            MPI_Aint <I>array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>[], MPI_Datatype <I>array</I><B>_</B><I>of</I><B>_</B><I>types</I>[],
            MPI_Datatype *<I>newtype</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_CREATE_STRUCT(<I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>BLOCKLENGTHS,</I>
                 <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>TYPES,</I> <I>NEWTYPE,</I> <I>IERROR</I>)
            INTEGER   <I>COUNT,</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>BLOCKLENGTHS(*),</I> <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>TYPES(*),</I>
            INTEGER <I>NEWTYPE,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>ARRAY</I><B>_</B><I>OF</I><B>_</B><I>DISPLACEMENTS(*)</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static MPI::Datatype MPI::Datatype::Create_struct(int <I>count</I>,
            const int <I>array</I><B>_</B><I>of</I><B>_</B><I>blocklengths</I>[], const MPI::Aint
            <I>array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>[], const MPI::Datatype
            <I>array</I><B>_</B><I>of</I><B>_</B><I>types</I>[])

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number  of  blocks  (integer)  --  also  number of entries in
                 arrays    <I>array</I><B>_</B><I>of</I><B>_</B><I>types</I>,     <I>array</I><B>_</B><I>of</I><B>_</B><I>displacements</I>,     and
                 <I>array</I><B>_</B><I>of</I><B>_</B><I>blocklengths</I>.

       array_of_blocklengths
                 Number of elements in each block (array of integers).

       array_of_displacements
                 Byte displacement of each block (array of integers).

       array_of_types
                 Type of elements in each block (array of handles to data-type
                 objects).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   New data type (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_create_struct creates a structured  data  type.  This  routine
       replaces <a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a>, which is now deprecated.

       NOTE  - This routine replaces <a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a>, which is deprecated. See
       the man page <B><a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a>(3)</B> for information about that routine.

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
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Type_struct.3.php">MPI_Type_struct</a>
       <a href="../man3/MPI_Type_create_hindexed.3.php">MPI_Type_create_hindexed</a>

Open MPI 1.2                    September 2006MPI_Type_create_struct(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
