<?php
$topdir = "../../..";
$title = "MPI_Add_error_class(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Add_error_class</B> - Creates a new error class and returns its value

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Add_error_class(int *<I>errorclass</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ADD_ERROR_CLASS(<I>ERRORCLASS,</I> <I>IERROR</I>)
            INTEGER   <I>ERRORCLASS,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI::Add_error_class()

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       errorclass    New error class (integer).

       IERROR        Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The function MPI_Add_error_class creates a new, local error class.

</PRE>
<H2>NOTES</H2><PRE>
       Because this function is local, the same value of <I>errorclass</I> may not be
       returned on all processes that make this call, even if  they  call  the
       function  concurrently. Thus, same error on different processes may not
       cause the same value of <I>errorclass</I> to be returned. To reduce the poten-
       tial  for  confusion, <a href="../man3/MPI_Add_error_string.3.php">MPI_Add_error_string</a> may be used on multiple pro-
       cesses to associate the same error string with the newly created <I>error-</I>
       <I>class</I>.  Even  though <I>errorclass</I> may not be consistent across processes,
       using <a href="../man3/MPI_Add_error_string.3.php">MPI_Add_error_string</a> will ensure the error string associated with
       it will be the same everywhere.

       No  function  is  provided to free error classes, as it is not expected
       that an application will create them in significant numbers.

       The value returned is always greater than or equal to MPI_ERR_LASTCODE.

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
       <a href="../man3/MPI_Error_class.3.php">MPI_Error_class</a>
       <a href="../man3/MPI_Error_string.3.php">MPI_Error_string</a>

1.3.4                            Nov 11, 2009           <B>MPI_Add_error_class(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
