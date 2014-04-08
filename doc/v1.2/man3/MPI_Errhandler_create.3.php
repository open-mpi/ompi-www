<?php
$topdir = "../../..";
$title = "MPI_Errhandler_create(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Errhandler_create</B>   -  Creates an MPI-style error handler -- use of
       this routine is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Errhandler_create(MPI_Handler_function *<I>function</I>,
            MPI_Errhandler *<I>errhandler</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ERRHANDLER_CREATE(<I>FUNCTION,</I> <I>ERRHANDLER,</I> <I>IERROR</I>)
            EXTERNAL  <I>FUNCTION</I>
            INTEGER   <I>ERRHANDLER,</I> <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       function  User-defined error handling procedure.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       errhandler
                 MPI error handler (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note that use of this routine is <I>deprecated</I> as  of  MPI-2.  Please  use
       <a href="../man3/MPI_Comm_create_errhandler.3.php">MPI_Comm_create_errhandler</a> instead.

       This deprecated routine is not available in C++.

       Registers  the  user  routine function for use as an MPI exception han-
       dler. Returns in errhandler a handle to the registered  exception  han-
       dler.

       In  the  C  language,  the  user routine should be a C function of type
       MPI_Handler_function, which is defined as

           typedef void (MPI_Handler_function)(MPI_Comm *, int *, ...);

       The first argument is the communicator in use. The second is the  error
       code  to  be  returned by the MPI routine that raised the error. If the
       routine would have returned MPI_ERR_IN_STATUS, it  is  the  error  code
       returned in the status for the request that caused the error handler to
       be invoked. The remaining arguments are stdargs arguments whose  number
       and  meaning  is  implementation-dependent.  An  implementation  should
       clearly document these arguments. Addresses are used so that  the  han-
       dler may be written in Fortran.

</PRE>
<H2>NOTE</H2><PRE>
       The  MPI-1  Standard  states that an implementation may make the output
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

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_create_errhandler.3.php">MPI_Comm_create_errhandler</a>
       <a href="../man3/MPI_Comm_get_errhandler.3.php">MPI_Comm_get_errhandler</a>
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>

Open MPI 1.2                    September 2006 MPI_Errhandler_create(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
