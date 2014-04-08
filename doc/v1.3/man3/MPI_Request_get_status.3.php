<?php
$topdir = "../../..";
$title = "MPI_Request_get_status(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Request_get_status</B>  -  Access information associated with a request
       without freeing the request.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Request_get_status(MPI_Request <I>request</I>, int <I>*flag</I>, MPI_Status <I>*status</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       <a href="../man3/MPI_Request_free.3.php">MPI_REQUEST_FREE</a>(<I>REQUEST</I>, <I>FLAG</I>, <I>STATUS</I>, <I>IERROR</I>)
            INTEGER   REQUEST, STATUS(MPI_STATUS_SIZE), IERROR
            LOGICAL   FLAG

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool MPI::Request::Get_status(MPI::Status&amp; <I>status</I>) const

       bool MPI::Request::Get_status() const

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       <B>request</B>         Communication request (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       <B>flag</B>      Boolean flag, same as from <a href="../man3/MPI_Test.3.php">MPI_Test</a> (logical).

       <B>status</B>    MPI_Status object if flag is true (status).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Request_get_status sets <I>flag</I>=<I>true</I> if the operation is  complete  or
       sets <I>flag</I>=<I>false</I> if it is not complete. If the operation is complete, it
       returns in <I>status</I> the request status. It does not deallocate or inacti-
       vate  the  request;  a subsequent call to test, wait, or free should be
       executed with that request.

       If your application does not need to examine the <I>status</I> field, you  can
       save  resources by using the predefined constant MPI_STATUS_IGNORE as a
       special value for the <I>status</I> argument.

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
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
