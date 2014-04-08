<?php
$topdir = "../../..";
$title = "MPI_Type_dup(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_dup</B> - Duplicates a data type with associated key values.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_dup(MPI_Datatype <I>type</I>, MPI_Datatype *<I>newtype</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_DUP(<I>TYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>)
            INTEGER   <I>TYPE,</I> <I>NEWTYPE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Datatype MPI::Datatype::Dup() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       type      Data type (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newtype   Copy of <I>type</I> (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_dup  is  a  type constructor that duplicates the existing type
       with associated key values. For each key  value,  the  respective  copy
       callback  function  determines the attribute value associated with this
       key in the new communicator. One particular action that a copy callback
       may  take is to delete the attribute from the new data type. Returns in
       <I>newtype</I> a new data type with exactly the same properties  as  <I>type</I>,  as
       well  as any copied cached information. The new data type has identical
       upper bound and lower bound and yields the same net result  when  fully
       decoded  with the functions described in Section 8.6 of the MPI-2 stan-
       dard. <I>newtype</I> has the same committed state as the old <I>type</I>.

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
