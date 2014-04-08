<?php
$topdir = "../../..";
$title = "MPI_Recv_init(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Recv_init</B> - Builds a handle for a receive.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Recv_init(void *<I>buf</I>, int <I>count</I>, MPI_Datatype <I>datatype</I>,
            int <I>source</I>, int <I>tag</I>, MPI_Comm <I>comm</I>, MPI_Request <I>*request</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_RECV_INIT(<I>BUF,</I> <I>COUNT,</I> <I>DATATYPE,</I> <I>SOURCE,</I> <I>TAG,</I> <I>COMM,</I> <I>REQUEST,</I>
                 <I>IERROR</I>)
            &lt;type&gt;    <I>BUF</I>(*)
            INTEGER   <I>COUNT,</I> <I>DATATYPE,</I> <I>SOURCE,</I> <I>TAG,</I> <I>COMM,</I> <I>REQUEST,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Prequest Comm::Recv_init(void* <I>buf</I>, int <I>count</I>, const
            Datatype&amp; <I>datatype</I>, int <I>source</I>, int <I>tag</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       count     Maximum number of elements to receive (integer).

       datatype  Type of each entry (handle).

       source    Rank of source (integer).

       tag       Message tag (integer).

       comm      Communicator (handle).

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       buf       Initial address of receive buffer (choice).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       request   Communication request (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Creates a persistent communication request for a receive operation. The
       argument <I>buf</I> is marked as OUT because  the  user  gives  permission  to
       write on the receive buffer by passing the argument to MPI_Recv_init.

       A  persistent  communication request is inactive after it is created --
       no active communication is attached to the request.

       A communication (send or receive) that uses  a  persistent  request  is
       initiated by the function <a href="../man3/MPI_Start.3.php">MPI_Start</a> or <a href="../man3/MPI_Startall.3.php">MPI_Startall</a>.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Bsend_init.3.php">MPI_Bsend_init</a>
       <a href="../man3/MPI_Rsend_init.3.php">MPI_Rsend_init</a>
       <a href="../man3/MPI_Send_init.3.php">MPI_Send_init</a>
       MPI_Sssend_init
       <a href="../man3/MPI_Start.3.php">MPI_Start</a>
       <a href="../man3/MPI_Startall.3.php">MPI_Startall</a>
       <a href="../man3/MPI_Request_free.3.php">MPI_Request_free</a>

1.3.4                            Nov 11, 2009                 <B>MPI_Recv_init(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
