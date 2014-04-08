<?php
$topdir = "../../..";
$title = "MPI_Comm_connect(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_connect</B>  - Establishes communication with a server.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_connect(char *<I>port</I><B>_</B><I>name</I>, MPI_Info <I>info</I>, int <I>root</I>,
            MPI_Comm <I>comm</I>, MPI_Comm *<I>newcomm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_CONNECT(<I>PORT</I><B>_</B><I>NAME,</I> <I>INFO,</I> <I>ROOT,</I> <I>COMM,</I> <I>NEWCOMM,</I> <I>IERROR</I>)
            CHARACTER*(*)  <I>PORT</I><B>_</B><I>NAME</I>
            INTEGER        <I>INFO,</I> <I>ROOT,</I> <I>COMM,</I> <I>NEWCOMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Intercomm MPI::Intracomm::Connect(const char* <I>port</I><B>_</B><I>name</I>,
            const MPI::Info&amp; <I>info</I>, int <I>root</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       port_name Port name (string, used only on <I>root</I>).

       info      Options  given  by root for the connect (handle, used only on
                 root). No options currently supported.

       root      Rank in <I>comm</I> of root node (integer).

       comm      Intracommunicator over which call is collective (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newcomm   Intercommunicator with client as remote group (handle)

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_connect establishes communication with a server  specified  by
       <I>port</I><B>_</B><I>name</I>.  It  is collective over the calling communicator and returns
       an intercommunicator in which  the  remote  group  participated  in  an
       <a href="../man3/MPI_Comm_accept.3.php">MPI_Comm_accept</a>.  The  MPI_Comm_connect  call must only be called after
       the <a href="../man3/MPI_Comm_accept.3.php">MPI_Comm_accept</a> call has been made by the MPI  job  acting  as  the
       server.

       If the named port does not exist (or has been closed), MPI_Comm_connect
       raises an error of class MPI_ERR_PORT.

       MPI provides no guarantee of fairness in servicing connection attempts.
       That is, connection attempts are not necessarily satisfied in the order
       in which they were initiated, and  competition  from  other  connection
       attempts  may prevent a particular connection attempt from being satis-
       fied.

       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before  the  error  value is returned, the current MPI error handler is
       called. By default, this error handler aborts the MPI job,  except  for
       I/O   function   errors.   The   error  handler  may  be  changed  with
       <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined error handler MPI_ERRORS_RETURN
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_accept.3.php">MPI_Comm_accept</a> <a href="../man3/MPI_Open_port.3.php">MPI_Open_port</a>

Open MPI 1.2                      March 2007        MPI_Comm_connect(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
