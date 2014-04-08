<?php
$topdir = "../../..";
$title = "MPI_Type_delete_attr(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_delete_attr</B> - Deletes a datatype-caching attribute value asso-
       ciated with a key.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_delete_attr(MPI_Datatype <I>type</I>, int <I>type</I><B>_</B><I>keyval</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_DELETE_ATTR(<I>TYPE,</I> <I>TYPE</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>)
            INTEGER   <I>TYPE,</I> <I>TYPE</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Datatype::Delete_attr(int <I>type</I><B>_</B><I>keyval</I>)

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       type      Data type from which the attribute is deleted (handle).n

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       type_keyval
                 Key value (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_delete_attr deletes a datatype-caching attribute value associ-
       ated  with  a  key.  This  routines partially replaces <a href="../man3/MPI_Attr_delete.3.php">MPI_Attr_delete</a>,
       which is now deprecated.

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
       not guarantee that an MPI program can continue past an error.

</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
