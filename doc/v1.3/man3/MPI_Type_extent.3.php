<?php
$topdir = "../../..";
$title = "MPI_Type_extent(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_extent</B>  -  Returns  the  extent of a data type, the difference
       between the upper and lower bounds of the data type -- use of this rou-
       tine is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_extent(MPI_Datatype <I>datatype</I>, MPI_Aint <I>*extent</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_EXTENT(<I>DATATYPE,</I> <I>EXTENT,</I> <I>IERROR</I>)
            INTEGER   <I>DATATYPE,</I> <I>EXTENT,</I> <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       datatype  Datatype (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       extent    Datatype extent (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note  that  use  of  this routine is <I>deprecated</I> as of MPI-2. Please use
       <a href="../man3/MPI_Type_get_extent.3.php">MPI_Type_get_extent</a> instead.

       This deprecated routine is not available in C++.

       MPI_Type_extent returns the extent  of  a  data  type,  the  difference
       between the upper and lower bounds of the data type.

       In general, if

           Typemap = {(<B>type(0)</B>, <B>disp(0)</B>), ..., (type(n-1), disp(n-1))}

       then the lower bound of Typemap is defined to be

                     ( min(j) disp(j)                         if no entry has
         lb(Typemap)=(                                        basic type lb
                     (min(j) {disp(j) such that type(j) = lb} otherwise

       Similarly, the upper bound of Typemap is defined to be

                     (max(j) disp(j) + sizeof(type(j)) + e    if no entry has
         ub(Typemap)=(                                        basic type ub
                     (max(j) {disp(j) such that type(j) = ub} otherwise

       Then

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

1.3.4                            Nov 11, 2009               <B>MPI_Type_extent(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
