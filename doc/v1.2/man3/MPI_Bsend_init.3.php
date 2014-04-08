<?php
$topdir = "../../..";
$title = "MPI_Bsend_init(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Bsend_init</B> - Builds a handle for a buffered send.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Bsend_init(void <I>*buf</I>, int <I>count</I>, MPI_Datatype <I>datatype</I>,
            int <I>dest</I>, int <I>tag</I>, MPI_Comm <I>comm</I>, MPI_Request <I>*request</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_BSEND_INIT(<I>BUF</I>, <I>COUNT</I>, <I>DATATYPE</I>, <I>DEST</I>, <I>TAG</I>, <I>COMM</I>, <I>REQUEST</I>,
                 <I>IERROR</I>)
            &lt;type&gt;    <I>BUF</I>(<I>*</I>)
            INTEGER   <I>COUNT</I>, <I>DATATYPE</I>, <I>DEST</I>, <I>TAG</I>,
            INTEGER   <I>COMM</I>, <I>REQUEST</I>, <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       Prequest Comm::Bsend_init(const void* <I>buf</I>, int <I>count</I>, const
            Datatype&amp; <I>datatype</I>, int <I>dest</I>, int <I>tag</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       buf       Initial address of send buffer (choice).

       count     Number of elements sent (integer).

       datatype  Type of each element (handle).

       dest      Rank of destination (integer).

       tag       Message tag (integer).

       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       request   Communication request (handle).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Creates  a  persistent  communication request for a buffered mode send,
       and binds to it all the arguments of a send operation.

       A communication (send or receive) that uses  a  persistent  request  is
       initiated by the function <a href="../man3/MPI_Start.3.php">MPI_Start</a>.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Send_init.3.php">MPI_Send_init</a>
       <a href="../man3/MPI_Ssend_init.3.php">MPI_Ssend_init</a>
       <a href="../man3/MPI_Rsend_init.3.php">MPI_Rsend_init</a>
       <a href="../man3/MPI_Recv_init.3.php">MPI_Recv_init</a>
       <a href="../man3/MPI_Start.3.php">MPI_Start</a>
       <a href="../man3/MPI_Startall.3.php">MPI_Startall</a>

Open MPI 1.2                    September 2006        MPI_Bsend_init(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
