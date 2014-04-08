<?php
$topdir = "../../..";
$title = "MPI_Comm_free_keyval(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_free_keyval</B>  -  Frees  attribute  key  for  communicator cache
       attribute.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_free_keyval(int *<I>comm</I><B>_</B><I>keyval</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_FREE_KEYVAL(<I>COMM</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>)
            INTEGER   <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       static void MPI::Comm::Free_keyval(int&amp; <I>comm</I><B>_</B><I>keyval</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       comm_keyval

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_free_keyval frees an extant attribute key. This function  sets
       the  value  of <I>keyval</I> to  MPI_KEYVAL_INVALID. Note that it is not erro-
       neous to free an attribute key that is in use, because the actual  free
       does  not  transpire until after all references (in other communicators
       on the process) to the key have been freed. These references need to be
       explictly    freed    by    the    program,   either   via   calls   to
       <a href="../man3/MPI_Comm_delete_attr.3.php">MPI_Comm_delete_attr</a> that free one attribute instance, or by  calls  to
       <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>  that  free  all  attribute instances associated with the
       freed communicator.

       This call is identical to the call <a href="../man3/MPI_Keyval_free.3.php">MPI_Keyval_free</a>  but  is  needed  to
       match  the   communicator-specific  creation function introduced in the
       MPI-2 standard. The use of <a href="../man3/MPI_Keyval_free.3.php">MPI_Keyval_free</a> is deprecated.

</PRE>
<H2>NOTES</H2><PRE>
       Key values are global (they can be used with  any  and  all  communica-
       tors).

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism

Open MPI 1.2                    September 2006  MPI_Comm_free_keyval(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
