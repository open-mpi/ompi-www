<?php
$topdir = "../../..";
$title = "MPI_Type_size(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_size</B>  -  Returns  the number of bytes occupied by entries in a
       data type.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_size(MPI_Datatype <I>datatype</I>, int <I>*size</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_SIZE(<I>DATATYPE,</I> <I>SIZE,</I> <I>IERROR</I>)
            INTEGER   <I>DATATYPE,</I> <I>SIZE,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int Datatype::Get_size() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       datatype  Datatype (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       size      Datatype size (integer).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Type_size returns the total size, in bytes, of the entries  in  the
       type  signature  associated  with datatype; i.e., the total size of the
       data in a message that would be created  with  this  datatype.  Entries
       that occur multiple times in the datatype are counted with their multi-
       plicity.

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
