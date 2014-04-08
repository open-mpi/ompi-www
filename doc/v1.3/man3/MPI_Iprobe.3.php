<?php
$topdir = "../../..";
$title = "MPI_Iprobe(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Iprobe</B> - Nonblocking test for a message.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Iprobe(int <I>source</I>, int <I>tag</I>, MPI_Comm <I>comm</I>, int <I>*flag</I>,
            MPI_Status <I>*status</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_IPROBE(<I>SOURCE,</I> <I>TAG,</I> <I>COMM,</I> <I>FLAG,</I> <I>STATUS,</I> <I>IERROR</I>)
            LOGICAL   <I>FLAG</I>
            INTEGER   <I>SOURCE,</I> <I>TAG,</I> <I>COMM,</I> <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool Comm::Iprobe(int <I>source</I>, int <I>tag</I>, Status&amp; <I>status</I>) const

       bool Comm::Iprobe(int <I>source</I>, int <I>tag</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       source    Source rank or MPI_ANY_SOURCE (integer).

       tag       Tag value or MPI_ANY_TAG (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       flag      Message-waiting flag (logical).

       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The <a href="../man3/MPI_Probe.3.php">MPI_Probe</a> and MPI_Iprobe operations allow checking of incoming mes-
       sages without actual receipt of them. The user can then decide  how  to
       receive  them,  based  on  the information returned by the probe (basi-
       cally, the information returned by status). In particular, the user may
       allocate  memory for the receive buffer, according to the length of the
       probed message.

       MPI_Iprobe(source, tag, comm, flag, status)  returns  flag  =  true  if
       there  is  a  message that can be received and that matches the pattern
       specified by the arguments source, tag, and comm. The call matches  the
       same  message  that would have been received by a call to <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>(...,
       source, tag, comm, status) executed at the same point in  the  program,
       and  returns  in status the same value that would have been returned by
       <a href="../man3/MPI_Recv.3.php">MPI_Recv</a>(). Otherwise, the call returns flag = false, and leaves status
       undefined.

       probe.  If  the  receiving  process  is multithreaded, it is the user's
       responsibility to ensure that the last condition holds.

       The source argument of <a href="../man3/MPI_Probe.3.php">MPI_Probe</a> can be  MPI_ANY_SOURCE,  and  the  tag
       argument can be MPI_ANY_TAG, so that one can probe for messages from an
       arbitrary source and/or with an arbitrary tag. However, a specific com-
       munication context must be provided with the comm argument.

       If  your application does not need to examine the <I>status</I> field, you can
       save resources by using the predefined constant MPI_STATUS_IGNORE as  a
       special value for the <I>status</I> argument.

       It  is not necessary to receive a message immediately after it has been
       probed for, and the same message may be probed for several times before
       it is received.

</PRE>
<H2>NOTE</H2><PRE>
       Users  of  libmpi-mt  should  remember  that  two  threads  may  do  an
       MPI_Iprobe that actually returns true for the  same  message  for  both
       threads.

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
       <a href="../man3/MPI_Probe.3.php">MPI_Probe</a>
       <a href="../man3/MPI_Cancel.3.php">MPI_Cancel</a>

1.3.4                            Nov 11, 2009                    <B>MPI_Iprobe(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
