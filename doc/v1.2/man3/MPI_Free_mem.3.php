<?php
$topdir = "../../..";
$title = "MPI_Free_mem(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Free_mem</B>    -   Frees   memory   that   has  been  allocated  using
       <a href="../man3/MPI_Alloc_mem.3.php">MPI_Alloc_mem</a>.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Free_mem(void *<I>base</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_FREE_MEM(<I>BASE,</I> <I>IERROR</I>)
            &lt;type&gt; <I>BASE</I>(*)
            INTEGER <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Free_mem(void *<I>base</I>)

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       base      Initial address of memory segment allocated by  <a href="../man3/MPI_Alloc_mem.3.php">MPI_Alloc_mem</a>
                 (choice).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Free_mem frees memory that has been allocated by <a href="../man3/MPI_Alloc_mem.3.php">MPI_Alloc_mem</a>.

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
       <a href="../man3/MPI_Alloc_mem.3.php">MPI_Alloc_mem</a>

Open MPI 1.2                    September 2006          MPI_Free_mem(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
