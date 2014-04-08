<?php
$topdir = "../../..";
$title = "MPI_Comm_disconnect(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_disconnect</B>  -  Deallocates communicator object and sets handle
       to MPI_COMM_NULL.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_disconnect(MPI_Comm *<I>comm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_DISCONNECT(<I>COMM,</I> <I>IERROR</I>)
            INTEGER   <I>COMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Comm::Disconnect()

</PRE>
<H2>INPUT/OUTPUT PARAMETER</H2><PRE>
       comm      Communicator (handle).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_disconnect waits for all pending communication on <I>comm</I> to com-
       plete  internally,  deallocates  the  communicator object, and sets the
       handle to MPI_COMM_NULL. It is a collective operation.

       It  may  not  be  called  with  the  communicator   MPI_COMM_WORLD   or
       MPI_COMM_SELF.

       MPI_Comm_disconnect may be called only if all communication is complete
       and matched, so that buffered data can be delivered to its destination.
       This requirement is the same as for <a href="../man3/MPI_Finalize.3.php">MPI_Finalize</a>.

       MPI_Comm_disconnect  has  the same action as <a href="../man3/MPI_Comm_free.3.php">MPI_Comm_free</a>, except that
       it waits for pending communication to finish internally and enables the
       guarantee about the behavior of disconnected processes.

</PRE>
<H2>NOTES</H2><PRE>
       To  disconnect  two processes you may need to call MPI_Comm_disconnect,
       <a href="../man3/MPI_Win_free.3.php">MPI_Win_free</a>, and <a href="../man3/MPI_File_close.3.php">MPI_File_close</a>  to  remove  all  communication  paths
       between  the two processes. Note that it may be necessary to disconnect
       several communicators (or to free several windows or files) before  two
       processes are completely independent.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_connect.3.php">MPI_Comm_connect</a>
       <a href="../man3/MPI_Comm_accept.3.php">MPI_Comm_accept</a>

Open MPI 1.2                    September 2006   MPI_Comm_disconnect(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
