<?php
$topdir = "../../..";
$title = "MPI_Error_string(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Error_string</B>  - Returns a string for a given error code.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Error_string(int <I>errorcode</I>, char <I>*string</I>, int <I>*resultlen</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ERROR_STRING(<I>ERRORCODE,</I> <I>STRING,</I> <I>RESULTLEN,</I> <I>IERROR</I>)
            INTEGER        <I>ERRORCODE,</I> <I>RESULTLEN,</I> <I>IERROR</I>
            CHARACTER*(*)  <I>STRING</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Get_error_string(int <I>errorcode</I>, char* <I>name</I>, int&amp; <I>resultlen</I>)

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       errorcode Error  code returned by an MPI routine or an MPI error class.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       string    Text that corresponds to the errorcode.

       resultlen Length of string.

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Returns the error string associated with an error code  or  class.  The
       argument   string   must   represent   storage   that   is   at   least
       MPI_MAX_ERROR_STRING characters long.

       The number of characters actually written is  returned  in  the  output
       argument, resultlen.

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

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
