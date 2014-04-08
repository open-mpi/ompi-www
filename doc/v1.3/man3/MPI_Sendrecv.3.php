<?php
$topdir = "../../..";
$title = "MPI_Sendrecv(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Sendrecv</B> - Sends and receives a message.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Sendrecv(void *<I>sendbuf</I>, int <I>sendcount</I>, MPI_Datatype <I>sendtype</I>,
            int <I>dest</I>, int <I>sendtag</I>, void <I>*recvbuf</I>, int <I>recvcount</I>,
            MPI_Datatype <I>recvtype</I>, int <I>source</I>, int <I>recvtag</I>,
            MPI_Comm <I>comm</I>, MPI_Status <I>*status</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_SENDRECV(<I>SENDBUF,</I> <I>SENDCOUNT,</I> <I>SENDTYPE,</I> <I>DEST,</I> <I>SENDTAG,</I>
                 <I>RECVBUF,</I> <I>RECVCOUNT,</I> <I>RECVTYPE,</I> <I>SOURCE,</I> <I>RECVTAG,</I> <I>COMM,</I>
                 <I>STATUS,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>SENDBUF(*),</I> <I>RECVBUF(*)</I>
            INTEGER   <I>SENDCOUNT,</I> <I>SENDTYPE,</I> <I>DEST,</I> <I>SENDTAG</I>
            INTEGER   <I>RECVCOUNT,</I> <I>RECVTYPE,</I> <I>SOURCE,</I> <I>RECVTAG,</I> <I>COMM</I>
            INTEGER   <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Comm::Sendrecv(const void *<I>sendbuf</I>, int <I>sendcount</I>, const
            Datatype&amp; <I>sendtype</I>, int <I>dest</I>, int <I>sendtag</I>, void *<I>recvbuf</I>,
            int <I>recvcount</I>, const Datatype&amp; <I>recvtype</I>, int <I>source</I>,
            int <I>recvtag</I>, Status&amp; <I>status</I>) const

       void Comm::Sendrecv(const void *<I>sendbuf</I>, int <I>sendcount</I>, const
            Datatype&amp; <I>sendtype</I>, int <I>dest</I>, int <I>sendtag</I>, void *<I>recvbuf</I>,
            int <I>recvcount</I>, const Datatype&amp; <I>recvtype</I>, int <I>source</I>,
            int <I>recvtag</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       sendbuf   Initial address of send buffer (choice).

       sendcount Number of elements to send (integer).

       sendtype  Type of elements in send buffer (handle).

       dest      Rank of destination (integer).

       sendtag   Send tag (integer).

       recvcount Maximum number of elements to receive (integer).

       recvtype  Type of elements in receive buffer (handle).

       source    Rank of source (integer).

       recvtag   Receive tag (integer).

       comm      Communicator (handle).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The send-receive operations combine in one call the sending of  a  mes-
       sage  to  one  destination  and  the receiving of another message, from
       another process. The two (source  and  destination)  are  possibly  the
       same.  A  send-receive operation is useful for executing a shift opera-
       tion across a chain of processes. If blocking sends  and  receives  are
       used  for  such a shift, then one needs to order the sends and receives
       correctly (for example, even processes send,  then  receive;  odd  pro-
       cesses  receive  first, then send) in order to prevent cyclic dependen-
       cies that may lead to deadlock. When a send-receive operation is  used,
       the  communication  subsystem  takes  care  of  these issues. The send-
       receive operation  can  be  used  in  conjunction  with  the  functions
       described  in Chapter 6 of the MPI-1 Standard, "Process Topologies," in
       order to perform shifts on various logical topologies.  Also,  a  send-
       receive operation is useful for implementing remote procedure calls.

       A message sent by a send-receive operation can be received by a regular
       receive operation or probed by a probe operation; a send-receive opera-
       tion can receive a message sent by a regular send operation.

       MPI_Sendrecv  executes a blocking send and receive operation. Both send
       and receive use the same communicator, but possibly different tags. The
       send  buffer and receive buffers must be disjoint, and may have differ-
       ent lengths and datatypes.

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
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Sendrecv_replace.3.php">MPI_Sendrecv_replace</a>

1.3.4                            Nov 11, 2009                  <B>MPI_Sendrecv(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
