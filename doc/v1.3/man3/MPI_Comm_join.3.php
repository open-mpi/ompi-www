<?php
$topdir = "../../..";
$title = "MPI_Comm_join(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_join</B> - Establishes communication between MPI jobs

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_join(int <I>fd</I>, MPI_Comm *<I>intercomm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_JOIN(<I>FD,</I> <I>INTERCOMM,</I> <I>IERROR</I>)
            INTEGER   <I>FD,</I> <I>INTERCOMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Intercomm MPI::Comm::Join(const int <I>fd</I>)

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       fd        socket file descriptor (socket).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       intercomm Intercommunicator between processes (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_join  creates  an  intercommunicator from the union of two MPI
       processes that are connected by a socket. <I>fd</I> is a file descriptor  rep-
       resenting  a socket of type SOCK_STREAM (a two-way reliable byte-stream
       connection). Nonblocking I/O and asynchronous  notification  via  SIGIO
       must  not  be enabled for the socket. The socket must be in a connected
       state, and must be quiescent when MPI_Comm_join is called.

       MPI_Comm_join must be called by the process at each end of the  socket.
       It does not return until both processes have called MPI_Comm_join.

</PRE>
<H2>NOTES</H2><PRE>
       There  are  no MPI library calls for opening and manipulating a socket.
       The socket <I>fd</I> can be opened using standard socket API calls.  MPI  uses
       the  socket  to  bootstrap  creation  of the intercommunicator, and for
       nothing else. Upon return, the file descriptor will be open and  quies-
       cent.

       In  a  multithreaded  process,  the  application must ensure that other
       threads do not access the socket while one is in the midst  of  calling
       MPI_Comm_join.

       The  returned  communicator will contain the two processes connected by
       the socket, and may be used to establish MPI communication  with  addi-
       tional  processes,  through  the usual MPI communicator-creation mecha-
       nisms.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       I/O  function  errors.  The  error  handler   may   be   changed   with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may be used to cause error values to be returned. Note  that  MPI  does
       not guarantee that an MPI program can continue past an error.

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       socket(3SOCKET)
       <a href="../man3/MPI_Comm_create.3.php">MPI_Comm_create</a>
       <a href="../man3/MPI_Comm_group.3.php">MPI_Comm_group</a>

1.3.4                            Nov 11, 2009                 <B>MPI_Comm_join(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
