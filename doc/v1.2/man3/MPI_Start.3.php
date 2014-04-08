<?php
$topdir = "../../..";
$title = "MPI_Start(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Start</B>  -  Initiates a communication using a persistent request han-
       dle.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Start(MPI_Request *<I>request</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_START(<I>REQUEST,</I> <I>IERROR</I>)
            INTEGER   <I>REQUEST,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void Prequest::Start()

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       request   Communication request (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       A communication (send or receive) that uses  a  persistent  request  is
       initiated by the function MPI_Start.

       The  argument,  request,  is a handle returned by one of the persistent
       communication-request    initialization    functions    (<a href="../man3/MPI_Send_init.3.php">MPI_Send_init</a>,
       <a href="../man3/MPI_Bsend_init.3.php">MPI_Bsend_init</a>,   <a href="../man3/MPI_Ssend_init.3.php">MPI_Ssend_init</a>,  <a href="../man3/MPI_Rsend_init.3.php">MPI_Rsend_init</a>,  <a href="../man3/MPI_Recv_init.3.php">MPI_Recv_init</a>). The
       associated request should be inactive and becomes active once the  call
       is made.

       If  the  request is for a send with ready mode, then a matching receive
       should be posted before the call is made. From the  time  the  call  is
       made  until  after  the  operation  completes, the communication buffer
       should not be accessed.

       The call is local, with semantics similar to the nonblocking communica-
       tion  operations  (see  Section 3.7 in the MPI-1 Standard, "Nonblocking
       Communication.") That is, a call to MPI_Start with a request created by
       <a href="../man3/MPI_Send_init.3.php">MPI_Send_init</a>  starts  a  communication in the same manner as a call to
       <a href="../man3/MPI_Isend.3.php">MPI_Isend</a>; a call to MPI_Start with a request created by <a href="../man3/MPI_Bsend_init.3.php">MPI_Bsend_init</a>
       starts  a communication in the same manner as a call to <a href="../man3/MPI_Ibsend.3.php">MPI_Ibsend</a>; and
       so on.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Bsend_init.3.php">MPI_Bsend_init</a>
       <a href="../man3/MPI_Rsend_init.3.php">MPI_Rsend_init</a>
       <a href="../man3/MPI_Send_init.3.php">MPI_Send_init</a>
       MPI_Sssend_init
       <a href="../man3/MPI_Recv_init.3.php">MPI_Recv_init</a>
       <a href="../man3/MPI_Startall.3.php">MPI_Startall</a>

Open MPI 1.2                    September 2006             MPI_Start(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
