<?php
$topdir = "../../..";
$title = "MPI_Add_error_string(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Add_error_string</B> - Associates a string with an error code or class

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Add_error_string(int <I>errorcode</I>, char *<I>string</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ADD_ERROR_STRING(<I>ERRORCODE,</I> <I>STRING,</I> <I>IERROR</I>)
            INTEGER        <I>ERRORCODE,</I> <I>IERROR</I>
            CHARACTER*(*)  <I>STRING</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Add_error_string(int <I>errorcode</I>, const char* <I>string</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       errorcode     MPI error class, or an error code returned by an MPI rou-
                     tine (integer).

       string        Text  that  corresponds  to  the  error  code  or   class
                     (string).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR        Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  routine  associates  an error string with an error code or class.
       Calling MPI_Add_error_string for an error code or  class  that  already
       has an associated error string will replace the old string with the new
       one. It is erroneous to call MPI_Add_error_string for  an  error  value
       not  generated  via <a href="../man3/MPI_Add_error_class.3.php">MPI_Add_error_class</a> or <a href="../man3/MPI_Add_error_code.3.php">MPI_Add_error_code</a> (e.g., an
       error code or class with a value not greater than MPI_LAST_ERRCODE).

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

Open MPI 1.2                    September 2006  MPI_Add_error_string(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
