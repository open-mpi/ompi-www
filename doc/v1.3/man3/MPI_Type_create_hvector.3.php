<?php
$topdir = "../../..";
$title = "MPI_Type_create_hvector(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_create_hvector</B>  -  Creates  a  vector (strided) data type with
       offset in bytes.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_create_hvector(int <I>count</I>, int <I>blocklength</I>,
            MPI_Aint <I>stride</I>, MPI_Datatype <I>oldtype</I>, MPI_Datatype *<I>newtype</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_CREATE_HVECTOR(<I>COUNT,</I> <I>BLOCKLENGTH,</I> <I>STRIDE,</I> <I>OLDTYPE,</I>
            <I>NEWTYPE,</I> <I>IERROR</I>)

            INTEGER   <I>COUNT,</I> <I>BLOCKLENGTH,</I> <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>STRIDE</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Datatype MPI::Datatype::Create_hvector(int <I>count</I>,
            int <I>blocklength</I>, MPI::Aint <I>stride</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number of blocks (nonnegative integer).

       blocklength
                 Number of elements in each block (nonnegative integer).

       stride    Number of bytes between start of each block (integer).

       oldtype   Old data type (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   New data type (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_create_hvector creates a vector (strided) data type with  off-
       set in bytes.

       NOTE - This routine replaces <a href="../man3/MPI_Type_hvector.3.php">MPI_Type_hvector</a>, which is deprecated. See
       the man page <B><a href="../man3/MPI_Type_hvector.3.php">MPI_Type_hvector</a>(3)</B> for information about that routine.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable  Fortran  syntax  for  the  <I>STRIDE</I>
       argument  only for Fortran 90.  FORTRAN 77 users may use the non-porta-
       ble syntax

            INTEGER*MPI_ADDRESS_KIND <I>STRIDE</I>

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
       <a href="../man3/MPI_Type_hvector.3.php">MPI_Type_hvector</a>
       <a href="../man3/MPI_Type_vector.3.php">MPI_Type_vector</a>

1.3.4                            Nov 11, 2009       <B>MPI_Type_create_hvector(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
