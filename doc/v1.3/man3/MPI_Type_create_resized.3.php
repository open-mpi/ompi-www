<?php
$topdir = "../../..";
$title = "MPI_Type_create_resized(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_create_resized</B>  -  Returns a new data type with new extent and
       upper and lower bounds.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_create_resized(MPI_Datatype <I>oldtype</I>, MPI_Aint <I>lb</I>,
            MPI_Aint <I>extent</I>, MPI_Datatype *<I>newtype</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_CREATE_RESIZED(<I>OLDTYPE,</I> <I>LB,</I> <I>EXTENT,</I> <I>NEWTYPE,</I> <I>IERROR</I>)
            INTEGER   <I>OLDTYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND)     <I>LB,</I> <I>EXTENT</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Datatype MPI::Datatype::Create_resized(const MPI::Aint <I>lb</I>,
            const MPI::Aint <I>extent</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       oldtype   Input data type (handle).

       lb        New lower bound of data type (integer).

       extent    New extent of data type (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   Output data type (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_create_resized returns in <I>newtype</I> a handle to a new data  type
       that  is  identical to <I>oldtype</I>, except that the lower bound of this new
       data type is set to be <I>lb</I>, and its upper  bound  is  set  to  be  <I>lb</I>  +
       <I>extent</I>.  Any  previous  <I>lb</I> and <I>ub</I> markers are erased, and a new pair of
       lower bound and upper bound markers are put in the positions  indicated
       by  the  <I>lb</I> and <I>extent</I> arguments. This affects the behavior of the data
       type when used in communication operations, with <I>count</I> &gt;  1,  and  when
       used in the construction of new derived data types.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The  MPI  standard  prescribes  portable  Fortran syntax for the <I>LB</I> and
       <I>EXTENT</I> arguments only for Fortran 90. FORTRAN 77 users may use the non-
       portable syntax

            INTEGER*MPI_ADDRESS_KIND <I>LB</I>
       or
            INTEGER*MPI_ADDRESS_KIND <I>EXTENT</I>

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
       <a href="../man3/MPI_Type_get_extent.3.php">MPI_Type_get_extent</a>

1.3.4                            Nov 11, 2009       <B>MPI_Type_create_resized(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
