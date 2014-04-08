<?php
$topdir = "../../..";
$title = "MPI_Win_create_errhandler(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_create_errhandler</B> - Creates an error handler for a window.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_create_errhandler(MPI_Win_errhandler_fn *<I>function</I>,
            MPI_Errhandler *<I>errhandler</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_CREATE_ERRHANDLER(<I>FUNCTION,</I> <I>ERRHANDLER,</I> <I>IERROR</I>)
            EXTERNAL <I>FUNCTION</I>
            INTEGER <I>ERRHANDLER,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static MPI::Errhandler MPI::Win::Create_errhandler(MPI::Win::
            Errhandler_fn* <I>function</I>)

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       function  User-defined error-handling procedure (function).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       errhandler
                 MPI error handler (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Win_create_errhandler   should   be,  in  C,  a  function  of  type
       MPI_Win_errhandler_fn, which is defined as

       typedef void MPI_Win_errhandler_fn(MPI Win *, int *, ...);

       The first argument is the window in use, the second is the  error  code
       to be returned.

       In Fortran, the user routine should be of the form:

       SUBROUTINE WIN_ERRHANDLER_FN(WIN, ERROR_CODE, ...)
           INTEGER WIN, ERROR_CODE

       In C++, the user routine should be of the form:

       typedef void MPI::Win::Errhandler_fn(MPI::Win &amp;, int *, ...);

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       not guarantee that an MPI program can continue past an error.

1.3.4                            Nov 11, 2009     <B>MPI_Win_create_errhandler(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
