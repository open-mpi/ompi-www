<?php
$topdir = "../../..";
$title = "MPI_Comm_accept(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Comm_accept</B>  - Establishes communication with a client.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Comm_accept(char *<I>port</I><B>_</B><I>name</I>, MPI_Info <I>info</I>, int <I>root</I>, MPI_Comm <I>comm</I>, MPI_Comm *<I>newcomm</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_COMM_ACCEPT(<I>PORT</I><B>_</B><I>NAME,</I> <I>INFO,</I> <I>ROOT,</I> <I>COMM,</I> <I>NEWCOMM,</I> <I>IERROR</I>)
            CHARACTER*(*)  <I>PORT</I><B>_</B><I>NAME</I>
            INTEGER        <I>INFO,</I> <I>ROOT,</I> <I>COMM,</I> <I>NEWCOMM,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       MPI::Intercomm MPI::Intracomm::Accept(const char* <I>port</I><B>_</B><I>name</I>,
            const MPI::Info&amp; <I>info</I>, int <I>root</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       port_name Port name (string, used only on <I>root</I>).

       info      Options  given  by  root for the accept (handle, used only on
                 root). No options currently supported.

       root      Rank in <I>comm</I> of root node (integer).

       comm      Intracommunicator over which call is collective (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       newcomm   Intercommunicator with client as remote group (handle)

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Comm_accept establishes communication with a client. It is  collec-
       tive  over  the  calling  communicator. It returns an intercommunicator
       that allows communication with the client, after the  client  has  con-
       nected  with  the  MPI_Comm_accept  function using the <a href="../man3/MPI_Comm_connect.3.php">MPI_Comm_connect</a>
       function.

       The  <I>port</I><B>_</B><I>name</I>  must  have  been  established   through   a   call   to
       <a href="../man3/MPI_Open_port.3.php">MPI_Open_port</a> on the root.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       tions  do  not  return  errors.  If the default error handler is set to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Comm_connect.3.php">MPI_Comm_connect</a> <a href="../man3/MPI_Open_port.3.php">MPI_Open_port</a>

Open MPI 1.2                      March 2007         MPI_Comm_accept(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
