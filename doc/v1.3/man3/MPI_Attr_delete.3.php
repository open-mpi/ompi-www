<?php
$topdir = "../../..";
$title = "MPI_Attr_delete(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Attr_delete</B>  - Deletes attribute value associated with a key -- use
       of this routine is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Attr_delete(MPI_Comm <I>comm</I>, int <I>keyval</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ATTR_DELETE(<I>COMM</I>, <I>KEYVAL</I>, <I>IERROR</I>)
            INTEGER   <I>COMM</I>, <I>KEYVAL</I>, <I>IERROR</I>

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator to which attribute is attached (handle).

       keyval    The key value of the deleted attribute (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This deprecated routine is not available in C++.

       Note that use of this routine is <I>deprecated</I> as  of  MPI-2.  Please  use
       <a href="../man3/MPI_Comm_delete_attr.3.php">MPI_Comm_delete_attr</a>.

       Delete attribute from cache by key. This function invokes the attribute
       delete function delete_fn specified when the keyval  was  created.  The
       call  will  fail  if the delete_fn function returns an error code other
       than MPI_SUCCESS.

       Whenever a communicator is replicated using the function  <a href="../man3/MPI_Comm_dup.3.php">MPI_Comm_dup</a>,
       all  callback  copy functions for attributes that are currently set are
       invoked (in arbitrary order). Whenever a communicator is deleted  using
       the   function   <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>,   all  callback  delete  functions  for
       attributes that are currently set are invoked.

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
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
