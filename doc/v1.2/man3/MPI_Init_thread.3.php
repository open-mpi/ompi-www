<?php
$topdir = "../../..";
$title = "MPI_Init_thread(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Init_thread</B> - Initializes the MPI execution environment

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Init_thread(int *<I>argc</I>, char ***<I>argv</I>,
            int <I>required</I>, int *<I>provided</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       <a href="../man3/MPI_Init.3.php">MPI_INIT</a>(<I>REQUIRED,</I> <I>PROVIDED,</I> <I>IERROR</I>)
            INTEGER   <I>REQUIRED,</I> <I>PROVIDED,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI::Init_thread(int&amp; <I>argc</I>, char**&amp; <I>argv</I>, int <I>required</I>)
       int MPI::Init_thread(int <I>required</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       argc      C/C++ only: Pointer to the number of arguments.

       argv      C/C++ only: Argument vector.

       required  Desired level of thread support (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       provided  Available level of thread support (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  routine, or <a href="../man3/MPI_Init.3.php">MPI_Init</a>, must be called before any other MPI routine
       (apart from <a href="../man3/MPI_Initialized.3.php">MPI_Initialized</a>) is called. MPI can be initialized at  most
       once; subsequent calls to <a href="../man3/MPI_Init.3.php">MPI_Init</a> or MPI_Init_thread are erroneous.

       MPI_Init_thread,  as compared to <a href="../man3/MPI_Init.3.php">MPI_Init</a>, has a provision to request a
       certain level of thread support in <I>required</I>:

       MPI_THREAD_SINGLE       Only one thread will execute.

       MPI_THREAD_FUNNELED     If  the  process  is  multithreaded,  only  the
                               thread  that  called  MPI_Init_thread will make
                               MPI calls.

       MPI_THREAD_SERIALIZED   If  the  process  is  multithreaded,  only  one
                               thread will make MPI library calls at one time.

       MPI_THREAD_MULTIPLE     If  the  process  is  multithreaded,   multiple
                               threads  may  call MPI at once with no restric-
                               tions.

       modifies, interprets, nor distributes them:

            {
                 /* declare variables */
                 MPI_Init_thread(&amp;argc, &amp;argv, req, &amp;prov);
                 /* parse arguments */
                 /* main program */
                 <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a>();
            }

</PRE>
<H2>NOTES</H2><PRE>
       The  Fortran  version  does  not  have provisions for <I>argc</I> and <I>argv</I> and
       takes only IERROR.

       It is the caller's responsibility to check the value of <I>provided</I>, as it
       may be less than what was requested in <I>required</I>.

       The  MPI  Standard  does  not  say  what  a  program  can  do before an
       MPI_Init_thread or after an <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a>. In the Open  MPI  implementa-
       tion, it should do as little as possible. In particular, avoid anything
       that changes the external state of the program, such as opening  files,
       reading standard input, or writing to standard output.

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
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Init.3.php">MPI_Init</a>
       <a href="../man3/MPI_Initialized.3.php">MPI_Initialized</a>
       <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a>

Open MPI 1.2                    September 2006       MPI_Init_thread(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
