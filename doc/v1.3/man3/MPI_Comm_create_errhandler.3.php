<?php
$topdir = "../../..";
$title = "MPI_Comm_create_errhandler(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_create_errhandler</B>   -  Creates  an  error  handler that can be
       attached to communicators.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_create_errhandler(MPI_Comm_errhandler_fn <I>*function</I>,
            MPI_Errhandler *<I>errhandler</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_CREATE_ERRHANDLER(<I>FUNCTION,</I> <I>ERRHANDLER,</I> <I>IERROR</I>)
            EXTERNAL  <I>FUNCTION</I>
            INTEGER   <I>ERRHANDLER,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static MPI::Errhandler
            MPI::Comm::Create_errhandler(MPI::Comm::Errhandler_fn*
            <I>function</I>)

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       function  User-defined error handling procedure (function).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       errhandler
                 MPI error handler (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_create_errhandler  creates  an  error  handler  that  can   be
       attached  to  communicators.  This function is identical to MPI_Errhan-
       dler_create, the use of which is deprecated.

       In C, the user routine should be a function  of  type  MPI_Comm_errhan-
       dler_fn, which is defined as

           typedef void MPI_Comm_errhandler_fn(MPI_Comm *, int *, ...);

       The  first argument is the communicator in use. The second is the error
       code to be returned by the MPI routine  that  raised  the  error.  This
       typedef  replaces MPI_Handler_function, the use of which is deprecated.

       In Fortran, the user routine should be of this form:

           SUBROUTINE COMM_ERRHANDLER_FN(COMM, ERROR_CODE, ...)
               INTEGER COMM, ERROR_CODE

       In C++, the user routine should be of this form:

       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

1.3.4                            Nov 11, 2009    <B>MPI_Comm_create_errhandler(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
