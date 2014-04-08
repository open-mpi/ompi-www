<?php
$topdir = "../../..";
$title = "MPI_Add_error_code(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Add_error_code</B>  -  Creates  a new error code associated with <I>error-</I>
       <I>class</I>

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Add_error_code(int <I>errorclass</I>, int *<I>errorcode</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ADD_ERROR_CODE(<I>ERRORCLASS,</I> <I>ERRORCODE,</I> <I>IERROR</I>)
            INTEGER  <I>ERRORCLASS,</I> <I>ERRORCODE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI::Add_error_code(int <I>errorclass</I>, int* <I>errorcode</I>)

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       errorclass    MPI error class (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       errorcode     Error code returned by an MPI routine  or  an  MPI  error
                     class (integer).

       IERROR        Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Creates  a  new  error  code associated with <I>errorclass</I> and returns its
       value in <I>errorcode</I>.

</PRE>
<H2>NOTES</H2><PRE>
       No function is provided to free error codes, as it is not expected that
       an application will create them in significant numbers.

       The value returned is always greater than or equal to MPI_ERR_LASTCODE.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

1.3.4                            Nov 11, 2009            <B>MPI_Add_error_code(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
