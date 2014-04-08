<?php
$topdir = "../../..";
$title = "MPI_Finalized(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Finalized</B>  - Checks whether <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a> has completed.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Finalized(int <I>*flag</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_FINALIZED(<I>FLAG</I>, <I>IERROR</I>)
            LOGICAL   <I>FLAG</I>
            INTEGER   <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool MPI::Is_finalized()

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       flag      True if MPI was finalized (logical).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This routine returns "true" if <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a> has completed. You can call
       MPI_Finalized before <a href="../man3/MPI_Init.3.php">MPI_Init</a> and after <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a>.

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

Open MPI 1.2                    September 2006         MPI_Finalized(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
