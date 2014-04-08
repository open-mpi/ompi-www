<?php
$topdir = "../../..";
$title = "MPI_Sendrecv_replace(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Sendrecv_replace</B>  -  Sends  and  receives  a message using a single
       buffer.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Sendrecv_replace(void *<I>buf</I>, int <I>count</I>, MPI_Datatype <I>datatype</I>,
            int <I>dest</I>, int <I>sendtag</I>, int <I>source</I>, int <I>recvtag</I>, MPI_Comm <I>comm</I>,
            MPI_Status <I>*status</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_SENDRECV_REPLACE(<I>BUF,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>DEST,</I> <I>SENDTAG,</I> <I>SOURCE,</I>
                 <I>RECVTAG,</I> <I>COMM,</I> <I>STATUS,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>BUF</I>(*)
            INTEGER   <I>COUNT,</I> <I>DATATYPE,</I> <I>DEST,</I> <I>SENDTAG</I>
            INTEGER   <I>SOURCE,</I> <I>RECVTAG,</I> <I>COMM</I>
            INTEGER   <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Comm::Sendrecv_replace(void* <I>buf</I>, int <I>count</I>, const
            Datatype&amp; <I>datatype</I>, int <I>dest</I>, int <I>sendtag</I>, int <I>source</I>,
            int <I>recvtag</I>, Status&amp; <I>status</I>) const

       void Comm::Sendrecv_replace(void* <I>buf</I>, int <I>count</I>, const
            Datatype&amp; <I>datatype</I>, int <I>dest</I>, int <I>sendtag</I>, int <I>source</I>,
            int <I>recvtag</I>) const

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       buf       Initial address of send and receive buffer (choice).

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Number of elements in send and receive buffer (integer).

       datatype  Type of elements to send and receive (handle).

       dest      Rank of destination (integer).

       sendtag   Send message tag (integer).

       source    Rank of source (integer).

       recvtag   Receive message tag (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       status    Status object (status).

       IERROR    Fortran only: Error status (integer).
       used  for  such a shift, then one needs to order the sends and receives
       correctly (for example, even processes send,  then  receive;  odd  pro-
       cesses  receive  first, then send) in order to prevent cyclic dependen-
       cies that may lead to deadlock. When a send-receive operation is  used,
       the  communication  subsystem  takes  care  of  these issues. The send-
       receive operation  can  be  used  in  conjunction  with  the  functions
       described  in  Chapter  6 of the MPI Standard, "Process Topologies," in
       order to perform shifts on various logical topologies.  Also,  a  send-
       receive operation is useful for implementing remote procedure calls.

       A message sent by a send-receive operation can be received by a regular
       receive operation or probed by a probe operation; a send-receive opera-
       tion can receive a message sent by a regular send operation.

       MPI_Sendrecv_replace  executes  a  blocking  send and receive. The same
       buffer is used both for the send and for the receive, so that the  mes-
       sage sent is replaced by the message received.

       The  semantics of a send-receive operation is what would be obtained if
       the caller forked two concurrent threads, one to execute the send,  and
       one to execute the receive, followed by a join of these two threads.

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
       <a href="../man3/MPI_Sendrecv.3.php">MPI_Sendrecv</a>

Open MPI 1.2                    September 2006  MPI_Sendrecv_replace(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
