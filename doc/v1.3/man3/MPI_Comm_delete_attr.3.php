<?php
$topdir = "../../..";
$title = "MPI_Comm_delete_attr(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_delete_attr</B> - Deletes attribute value associated with a key.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_delete_attr(MPI_Comm <I>comm</I>, int <I>comm</I><B>_</B><I>keyval</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_Comm_delete_attr(<I>COMM,</I> <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>COMM</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Delete_attr(int <I>comm</I><B>_</B><I>keyval</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       comm      Communicator from which the attribute is deleted (handle).

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       comm_keyval
                 Key value (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_delete_attr deletes an attribute from cache by key. This func-
       tion invokes the attribute delete function delete_fn specified when the
       <I>comm</I><B>_</B><I>keyval</I>  was  created. The call will fail if the delete_fn function
       returns an error code other than MPI_SUCCESS.

       Whenever a communicator is replicated using the function  <a href="../man3/MPI_Comm_dup.3.php">MPI_Comm_dup</a>,
       all  callback  copy functions for attributes that are currently set are
       invoked (in arbitrary order). Whenever a communicator is deleted  using
       the   function   <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>,   all  callback  delete  functions  for
       attributes that are currently set are invoked.

       This function is the same as <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a> but is needed to match the
       communicator-specific  functions  introduced in the MPI-2 standard. The
       use of <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a> is deprecated.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

1.3.4                            Nov 11, 2009          <B>MPI_Comm_delete_attr(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
