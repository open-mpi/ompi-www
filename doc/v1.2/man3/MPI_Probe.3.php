<?php
$topdir = "../../..";
$title = "MPI_Probe(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Probe</B> - Blocking test for a message.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Probe(int <I>source</I>, int <I>tag</I>, MPI_Comm <I>comm</I>, MPI_Status <I>*status</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_PROBE(<I>SOURCE,</I> <I>TAG,</I> <I>COMM,</I> <I>STATUS,</I> <I>IERROR</I>)
            INTEGER   <I>SOURCE,</I> <I>TAG,</I> <I>COMM,</I> <I>STATUS(MPI</I><B>_</B><I>STATUS</I><B>_</B><I>SIZE),</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Comm::Probe(int <I>source</I>, int <I>tag</I>, Status&amp; <I>status</I>) const

       void Comm::Probe(int <I>source</I>, int <I>tag</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       source    Source rank or MPI_ANY_SOURCE (integer).

       tag       Tag value or MPI_ANY_TAG (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       status    Status object (status).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       The MPI_Probe and <a href="../man3/MPI_Iprobe.3.php">MPI_Iprobe</a> operations allow checking of incoming mes-
       sages, without actual receipt of them. The user can then decide how  to
       receive  them,  based  on  the information returned by the probe in the
       status variable. For example, the user  may  allocate  memory  for  the
       receive buffer, according to the length of the probed message.

       MPI_Probe  behaves  like  <a href="../man3/MPI_Iprobe.3.php">MPI_Iprobe</a>  except that it is a blocking call
       that returns only after a matching message has been found.

       If your application does not need to examine the <I>status</I> field, you  can
       save  resources by using the predefined constant MPI_STATUS_IGNORE as a
       special value for the <I>status</I> argument.

       The semantics of MPI_Probe and <a href="../man3/MPI_Iprobe.3.php">MPI_Iprobe</a> guarantee progress: If a call
       to  MPI_Probe has been issued by a process, and a send that matches the
       probe has been initiated by some process, then the  call  to  MPI_Probe
       will  return,  unless  the  message  is  received by another concurrent
       receive operation (that is executed by another thread  at  the  probing
       process).  Similarly,  if  a  process  busy waits with <a href="../man3/MPI_Iprobe.3.php">MPI_Iprobe</a> and a
       matching message has been issued, then  the  call  to  <a href="../man3/MPI_Iprobe.3.php">MPI_Iprobe</a>  will
              ELSE IF(rank.EQ.1) THEN
                   CALL <a href="../man3/MPI_Send.3.php">MPI_SEND</a>(x, 1, MPI_REAL, 2, 0, comm, ierr)
              ELSE   ! rank.EQ.2
                  DO i=1, 2
                     CALL MPI_PROBE(MPI_ANY_SOURCE, 0,
                                     comm, status, ierr)
                     IF (status(MPI_SOURCE) = 0) THEN
       100                CALL <a href="../man3/MPI_Recv.3.php">MPI_RECV</a>(i, 1, MPI_INTEGER, 0, 0, status, ierr)
                     ELSE
       200                CALL <a href="../man3/MPI_Recv.3.php">MPI_RECV</a>(x, 1, MPI_REAL, 1, 0, status, ierr)
                     END IF
                  END DO
              END IF

       Each message is received with the right type.

       <B>Example</B> <B>2:</B> A program similar to the previous example, but with a  prob-
       lem.

       CALL <a href="../man3/MPI_Comm_rank.3.php">MPI_COMM_RANK</a>(comm, rank, ierr)
              IF (rank.EQ.0) THEN
                   CALL <a href="../man3/MPI_Send.3.php">MPI_SEND</a>(i, 1, MPI_INTEGER, 2, 0, comm, ierr)
              ELSE IF(rank.EQ.1) THEN
                   CALL <a href="../man3/MPI_Send.3.php">MPI_SEND</a>(x, 1, MPI_REAL, 2, 0, comm, ierr)
              ELSE
                  DO i=1, 2
                     CALL MPI_PROBE(MPI_ANY_SOURCE, 0,
                                     comm, status, ierr)
                     IF (status(MPI_SOURCE) = 0) THEN
       100                CALL <a href="../man3/MPI_Recv.3.php">MPI_RECV</a>(i, 1, MPI_INTEGER, MPI_ANY_SOURCE,
                                        0, status, ierr)
                     ELSE
       200                CALL <a href="../man3/MPI_Recv.3.php">MPI_RECV</a>(x, 1, MPI_REAL, MPI_ANY_SOURCE,
                                        0, status, ierr)
                     END IF
                  END DO
              END IF

       We  slightly  modified  Example  2,  using MPI_ANY_SOURCE as the source
       argument in the two receive calls in statements labeled  100  and  200.
       The  program is now incorrect: The receive operation may receive a mes-
       sage that is distinct from the message probed by the preceding call  to
       MPI_Probe.

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

Open MPI 1.2                    September 2006             MPI_Probe(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
