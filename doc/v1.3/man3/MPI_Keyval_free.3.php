<?php
$topdir = "../../..";
$title = "MPI_Keyval_free(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Keyval_free</B>  - Frees attribute key for communicator cache attribute
       -- use of this routine is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Keyval_free(int *<I>keyval</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_KEYVAL_FREE(<I>KEYVAL,</I> <I>IERROR</I>)
            INTEGER   <I>KEYVAL,</I> <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       keyval    Frees the integer key value (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note that use of this routine is <I>deprecated</I> as  of  MPI-2.  Please  use
       <a href="../man3/MPI_Comm_free_keyval.3.php">MPI_Comm_free_keyval</a> instead.

       This deprecated routine is not available in C++.

       Frees  an  extant attribute key. This function sets the value of keyval
       to  MPI_KEYVAL_INVALID. Note that  it  is  not  erroneous  to  free  an
       attribute  key  that  is in use, because the actual free does not tran-
       spire until  after  all  references  (in  other  communicators  on  the
       process)  to  the  key  have  been  freed.  These references need to be
       explictly freed by the program, either  via  calls  to  <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a>
       that  free  one  attribute  instance, or by calls to <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a> that
       free all attribute instances associated with the freed communicator.

</PRE>
<H2>NOTE</H2><PRE>
       Key values are global (they can be used with  any  and  all  communica-
       tors).

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

1.3.4                            Nov 11, 2009               <B>MPI_Keyval_free(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
