<?php
$topdir = "../../..";
$title = "MPI_Init(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Init</B> - Initializes the MPI execution environment

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Init(int *<I>argc</I>, char ***<I>argv</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_INIT(<I>IERROR</I>)
            INTEGER   <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Init(int&amp; <I>argc</I>, char**&amp; <I>argv</I>)
       void MPI::Init()

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       argc      C/C++ only: Pointer to the number of arguments.

       argv      C/C++ only: Argument vector.

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  routine,  or <a href="../man3/MPI_Init_thread.3.php">MPI_Init_thread</a>, must be called before any other MPI
       routine (apart from <a href="../man3/MPI_Initialized.3.php">MPI_Initialized</a>) is called. MPI can be  initialized
       at most once; subsequent calls to MPI_Init or <a href="../man3/MPI_Init_thread.3.php">MPI_Init_thread</a> are erro-
       neous.

       All MPI programs must contain a call to  MPI_Init  or  <a href="../man3/MPI_Init_thread.3.php">MPI_Init_thread</a>.
       Open MPI accepts the C/C++ <I>argc</I> and <I>argv</I> arguments to main, but neither
       modifies, interprets, nor distributes them:

            {
                 /* declare variables */
                 MPI_Init(&amp;argc, &amp;argv);
                 /* parse arguments */
                 /* main program */
                 <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a>();
            }

</PRE>
<H2>NOTES</H2><PRE>
       The Fortran version does not have provisions  for  <I>argc</I>  and  <I>argv</I>  and
       takes only IERROR.

       The  MPI Standard does not say what a program can do before an MPI_Init
       or after an <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a>. In the Open MPI implementation, it should  do
       as  little  as possible. In particular, avoid anything that changes the
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Init_thread.3.php">MPI_Init_thread</a>
       <a href="../man3/MPI_Initialized.3.php">MPI_Initialized</a>
       <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a>

1.3.4                            Nov 11, 2009                      <B>MPI_Init(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
