<?php
$topdir = "../../..";
$title = "MPI_Query_thread(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Query_thread</B> - Returns the current level of thread support

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Query_thread(int *<I>provided</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_QUERY_THREAD(<I>PROVIDED,</I> <I>IERROR</I>)
            INTEGER   <I>PROVIDED,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI::Query_thread()

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       provided  C/Fortran only: Level of thread support (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  routine  returns in <I>provided</I> the current level of thread support.
       If MPI was initialized by a call to <a href="../man3/MPI_Init_thread.3.php">MPI_Init_thread</a>, <I>provided</I> will have
       the same value as was returned by that function.

       The possible values of <I>provided</I> are as follows:

       MPI_THREAD_SINGLE       Only one thread may execute.

       MPI_THREAD_FUNNELED     If  the  process  is  multithreaded,  only  the
                               thread that called <a href="../man3/MPI_Init.3.php">MPI_Init</a>[_thread]  may  make
                               MPI calls.

       MPI_THREAD_SERIALIZED   If  the  process  is  multithreaded,  only  one
                               thread may make MPI library calls at one  time.

       MPI_THREAD_MULTIPLE     If   the  process  is  multithreaded,  multiple
                               threads may call MPI at once with  no  restric-
                               tions.

</PRE>
<H2>NOTES</H2><PRE>
       In  Open  MPI, <I>provided</I> is always MPI_THREAD_SINGLE, unless the program
       has been linked with the multithreaded library, in which case  <I>provided</I>
       is MPI_THREAD_MULTIPLE.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       not guarantee that an MPI program can continue past an error.

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Init.3.php">MPI_Init</a>
       <a href="../man3/MPI_Init_thread.3.php">MPI_Init_thread</a>

Open MPI 1.2                    September 2006      MPI_Query_thread(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
