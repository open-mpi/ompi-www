<?php
$topdir = "../../..";
$title = "MPI_Recv(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Recv</B> - Performs a standard-mode blocking receive.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Recv(void *<I>buf</I>, int <I>count</I>, MPI_Datatype <I>datatype</I>,
            int <I>source</I>, int <I>tag</I>, MPI_Comm <I>comm</I>, MPI_Status <I>*status</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_RECV(<I>BUF,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>SOURCE,</I> <I>TAG,</I> <I>COMM,</I> <I>STATUS,</I> <I>IERROR</I>)
            &lt;type&gt;    <I>BUF</I>(*)
            INTEGER   <I>COUNT,</I> <I>DATATYPE,</I> <I>SOURCE,</I> <I>TAG,</I> <I>COMM</I>
            INTEGER   <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Comm::Recv(void* <I>buf</I>, int <I>count</I>, const Datatype&amp; <I>datatype</I>,
            int <I>source</I>, int <I>tag</I>, Status&amp; <I>status</I>) const

       void Comm::Recv(void* <I>buf</I>, int <I>count</I>, const Datatype&amp; <I>datatype</I>,
            int <I>source</I>, int <I>tag</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Maximum number of elements to receive (integer).

       datatype  Datatype of each receive buffer entry (handle).

       source    Rank of source (integer).

       tag       Message tag (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       buf       Initial address of receive buffer (choice).

       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  basic  receive  operation, MPI_Recv, is blocking: it returns only
       after the receive buffer contains the newly received message. A receive
       can  complete before the matching send has completed (of course, it can
       complete only after the matching send has started).

       The blocking semantics of this call are described in Section 3.4 of the
       MPI-1 Standard, "Communication Modes."

       The receive buffer contains a number (defined by the value of <I>count</I>) of
       If a message that is shorter than the  length  of  the  receive  buffer
       arrives,  then  only  those  locations  corresponding  to the (shorter)
       received message are modified.

</PRE>
<H2>NOTES</H2><PRE>
       The <I>count</I> argument indicates the maximum  number  of  entries  of  type
       <I>datatype</I> that can be received in a message. Once a message is received,
       use the <a href="../man3/MPI_Get_count.3.php">MPI_Get_count</a>  function  to  determine  the  actual  number  of
       entries within that message.

       To receive messages of unknown length, use the <a href="../man3/MPI_Probe.3.php">MPI_Probe</a> function. (For
       more information about <a href="../man3/MPI_Probe.3.php">MPI_Probe</a> and <a href="../man3/MPI_Cancel.3.php">MPI_Cancel</a>, see  their  respective
       man pages; also, see Section 3.8 of the MPI-1 Standard, "Probe and Can-
       cel.")

       A message can be  received  by  a  receive  operation  only  if  it  is
       addressed  to the receiving process, and if its source, tag, and commu-
       nicator (comm) values match the source, tag, and comm values  specified
       by  the receive operation. The receive operation may specify a wildcard
       value for source and/or tag, indicating that any source and/or tag  are
       acceptable.  The  wildcard value for source is source = MPI_ANY_SOURCE.
       The wildcard value for tag is tag = MPI_ANY_TAG. There is  no  wildcard
       value for comm. The scope of these wildcards is limited to the proceses
       in the group of the specified communicator.

       The message tag is specified by the tag argument of the receive  opera-
       tion.

       The  argument source, if different from MPI_ANY_SOURCE, is specified as
       a rank within the process group associated with that same  communicator
       (remote  process  group,  for  intercommunicators).  Thus, the range of
       valid values for the source argument is  {0,...,n-1}  {MPI_ANY_SOURCE},
       where n is the number of processes in this group.

       Note the asymmetry between send and receive operations: A receive oper-
       ation may accept messages from an arbitrary sender; on the other  hand,
       a  send operation must specify a unique receiver. This matches a "push"
       communication mechanism, where data transfer is effected by the  sender
       (rather than a "pull" mechanism, where data transfer is effected by the
       receiver).

       Source = destination is allowed, that is, a process can send a  message
       to  itself.  However,  it is not recommended for a process to send mes-
       sages  to  itself  using  the  blocking  send  and  receive  operations
       described  above,  since  this may lead to deadlock. See Section 3.5 of
       the MPI-1 Standard, "Semantics of Point-to-Point Communication."

       If your application does not need to examine the <I>status</I> field, you  can
       save  resources by using the predefined constant MPI_STATUS_IGNORE as a
       special value for the <I>status</I> argument.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Irecv.3.php">MPI_Irecv</a>
       <a href="../man3/MPI_Probe.3.php">MPI_Probe</a>

Open MPI 1.2                      March 2007                MPI_Recv(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
