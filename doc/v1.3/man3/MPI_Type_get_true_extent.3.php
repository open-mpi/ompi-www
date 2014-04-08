<?php
$topdir = "../../..";
$title = "MPI_Type_get_true_extent(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_get_true_extent</B> - Returns the true lower bound and extent of a
       data type's corresponding typemap, ignoring MPI_UB and MPI_LB  markers.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_get_true_extent(MPI_Datatype <I>datatype</I>,
            MPI_Aint *<I>true</I><B>_</B><I>lb</I>, MPI_Aint *<I>true</I><B>_</B><I>extent</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_GET_TRUE_EXTENT(<I>DATATYPE,</I> <I>TRUE</I><B>_</B><I>LB,</I> <I>TRUE</I><B>_</B><I>EXTENT,</I> <I>IERROR</I>)
            INTEGER   <I>DATATYPE,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>TRUE</I><B>_</B><I>LB,</I> <I>TRUE</I><B>_</B><I>EXTENT</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Datatype::Get_true_extent(MPI::Aint&amp; <I>true</I><B>_</B><I>lb</I>,
            MPI::Aint&amp; <I>true</I><B>_</B><I>extent</I>) const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       datatype  Data type for which information is wanted (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       true_lb   True lower bound of data type (integer).

       true_extent
                 True size of data type (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The  <I>true</I><B>_</B><I>lb</I>  parameter  returns the offset of the lowest unit of store
       that is addressed by the data type, that is, the  lower  bound  of  the
       corresponding typemap, ignoring MPI_LB markers. The <I>true</I><B>_</B><I>extent</I> parame-
       ter returns the true size of the data type, that is, the extent of  the
       corresponding typemap, ignoring MPI_LB and MPI_UB markers, and perform-
       ing no rounding for alignment.

       The <I>true</I><B>_</B><I>extent</I> is the minimum number of bytes of memory  necessary  to
       hold a data type, uncompressed.

       See  Section 4.14.3 of the MPI-2 standard for more detailed definitions
       of these parameters in relation to the typemap.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The MPI standard prescribes portable Fortran syntax for the <I>TRUE</I><B>_</B><I>LB</I> and
       <I>TRUE</I><B>_</B><I>EXTENT</I> arguments only for Fortran 90. FORTRAN 77 users may use the
       non-portable syntax

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

1.3.4                            Nov 11, 2009      <B>MPI_Type_get_true_extent(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
