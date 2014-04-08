<?php
$topdir = "../../..";
$title = "MPI_Exscan(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Exscan</B> - Computes an exclusive scan (partial reduction)

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Exscan(void *<I>sendbuf</I>, void *<I>recvbuf</I>, int <I>count</I>,
            MPI_Datatype <I>datatype</I>, MPI_Op <I>op</I>, MPI_Comm <I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       <a href="../man3/MPI_Scan.3.php">MPI_SCAN</a>(<I>SENDBUF,</I> <I>RECVBUF,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>OP,</I> <I>COMM,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF(*),</I> <I>RECVBUF(*)</I>
            INTEGER   <I>COUNT,</I> <I>DATATYPE,</I> <I>OP,</I> <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Intracomm::Exscan(const void* <I>sendbuf</I>, void* <I>recvbuf</I>,
            int <I>count</I>, const MPI::Datatype&amp; <I>datatype</I>,
            const MPI::Op&amp; <I>op</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Send buffer (choice).

       count     Number of elements in input buffer (integer).

       datatype  Data type of elements of input buffer (handle).

       op        Operation (handle).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       recvbuf   Receive buffer (choice).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Exscan  is  used  to  perform an exclusive prefix reduction on data
       distributed across the calling processes. The operation returns, in the
       <I>recvbuf</I> of the process with rank i, the reduction (calculated according
       to the function <I>op</I>) of the values in the  <I>sendbuf</I>s  of  processes  with
       ranks  0,  ...,  i-1.  Compare this with the functionality of <a href="../man3/MPI_Scan.3.php">MPI_Scan</a>,
       which calculates over the range 0, ...,  i  (inclusive).  The  type  of
       operations  supported, their semantics, and the constraints on send and
       receive buffers are as for <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>.

       The value in <I>recvbuf</I> on  process  0  is  undefined  and  unreliable  as
       <I>recvbuf</I>  is  not  significant  for  process  0. The value of <I>recvbuf</I> on
       process 1 is always the value in <I>sendbuf</I> on process 0.

       No MPI_IN_PLACE operation is supported.
       It  can be argued, from a mathematical perspective, that the definition
       of MPI_Exscan is unsatisfactory because the  output  at  process  0  is
       undefined.   The "mathematically correct" output for process 0 would be
       the unit element of the reduction operation. However, such a definition
       of  an  exclusive scan would not work with user-defined <I>op</I> functions as
       there is no way for MPI to "know" the unit value for these custom oper-
       ations.

</PRE>
<H2>NOTES ON COLLECTIVE OPERATIONS</H2><PRE>
       The  reduction  functions  of type MPI_Op do not return an error value.
       As a result, if the functions detect an  error,  all  they  can  do  is
       either  call <a href="../man3/MPI_Abort.3.php">MPI_Abort</a> or silently skip the problem. Thus, if the error
       handler is changed from MPI_ERRORS_ARE_FATAL to something  else  (e.g.,
       MPI_ERRORS_RETURN), then no error may be indicated.

       The  reason  for  this is the performance problems in ensuring that all
       collective routines return the same error value.

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

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Op_create.3.php">MPI_Op_create</a>
       <a href="../man3/MPI_Reduce.3.php">MPI_Reduce</a>
       <a href="../man3/MPI_Scan.3.php">MPI_Scan</a>

Open MPI 1.2                    September 2006            MPI_Exscan(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
