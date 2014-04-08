<?php
$topdir = "../../..";
$title = "MPI_Sizeof(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Sizeof</B> - Returns the size, in bytes, of the given type

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_SIZEOF(<I>X,</I> <I>SIZE,</I> <I>IERROR</I>)
       &lt;type&gt;    <I>X</I>
       INTEGER   <I>SIZE,</I> <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       X         A Fortran variable of numeric intrisic type (choice).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       SIZE      Size of machine representation of that type (integer).

       IERROR    Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_SIZEOF returns the size (in bytes) of the machine representation of
       the given variable. It is a generic Fortran  type  and  has  a  Fortran
       binding  only.  This routine is similar to the sizeof builtin in C/C++.
       However, if given an array argument, it returns the size  of  the  base
       element, not the size of the whole array.

</PRE>
<H2>NOTES</H2><PRE>
       This function is not available in C/C++ because it is not necessary.

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

       See the MPI man page for a full list of MPI error codes.

1.3.4                            Nov 11, 2009                    <B>MPI_Sizeof(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
