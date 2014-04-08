<?php
$topdir = "../../..";
$title = "MPI_File_create_errhandler(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_File_create_errhandler</B>   -  Creates an MPI-style error handler that
       can be attached to a file.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_File_create_errhandler(MPI_File_errhandler_fn <I>*function</I>,
            MPI_Errhandler <I>*errhandler</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_FILE_CREATE_ERRHANDLER(<I>FUNCTION,</I> <I>ERRHANDLER,</I> <I>IERROR</I>)
            EXTERNAL  <I>FUNCTION</I>
            INTEGER   <I>ERRHANDLER,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt; static MPI::Errhandler       MPI::File::Create_errhan-
       dler(MPI::File::Errhandler_fn*      <I>function</I>)

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
       Registers  the  user  routine <I>function</I> for use as an MPI exception han-
       dler. Returns in errhandler a handle to the registered  exception  han-
       dler.

       In  the C language, the user routine <I>function</I> should be a C function of
       type MPI_File_errhandler_fn, which is defined as

           typedef void (MPI_File_errhandler_fn)(MPI_File *, int *,
           ...);

       The first argument to <I>function</I> is the file in use. The  second  is  the
       error code to be returned by the MPI routine that raised the error.

       In the Fortran language, the user routine should be of the form:

           SUBROUTINE FILE_ERRHANDLER_FN(FILE, ERROR_CODE, ...)
               INTEGER FILE, ERROR_CODE

       In C++, the user routine <I>function</I> should be of the form:

           typedef void MPI::File::Errhandler_fn(MPI::File &amp;, int *,
           ...);

       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. For MPI I/O function errors, the default error handler  is  set
       to   MPI_ERRORS_RETURN.   The   error   handler  may  be  changed  with
       <a href="../man3/MPI_File_set_errhandler.3.php">MPI_File_set_errhandler</a>;     the     predefined      error      handler
       MPI_ERRORS_ARE_FATAL  may  be  used to make I/O errors fatal. Note that
       MPI does not guarantee that an MPI program can continue past an  error.

1.3.4                            Nov 11, 2009    <B>MPI_File_create_errhandler(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
