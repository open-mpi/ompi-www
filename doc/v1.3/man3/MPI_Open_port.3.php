<?php
$topdir = "../../..";
$title = "MPI_Open_port(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Open_port</B>  -  Establishes  a network address for a server to accept
       connections from clients.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Open_port(MPI_Info <I>info</I>, char *<I>port</I><B>_</B><I>name</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_OPEN_PORT(<I>INFO,</I> <I>PORT</I><B>_</B><I>NAME,</I> <I>IERROR</I>)
            CHARACTER*(*)  <I>PORT</I><B>_</B><I>NAME</I>
            INTEGER        <I>INFO,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Open_port(const MPI::Info&amp; <I>info</I>, char* <I>port</I><B>_</B><I>name</I>)

</PRE>
<H2>INPUT PARAMETER</H2><PRE>
       info      Options on how to establish an address (handle).  No  options
                 currently supported.

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       port_name Newly established port (string).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Open_port  establishes  a network address, encoded in the <I>port</I><B>_</B><I>name</I>
       string, at which the server will be able  to  accept  connections  from
       clients. <I>port</I><B>_</B><I>name</I> is supplied by the system.

       MPI  copies a system-supplied port name into <I>port</I><B>_</B><I>name</I>. <I>port</I><B>_</B><I>name</I> iden-
       tifies the newly opened port and can be used by a client to contact the
       server.  The  maximum size string that may be supplied by the system is
       MPI_MAX_PORT_NAME.

</PRE>
<H2>SUPPORTED INFO KEYS</H2><PRE>
       None.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for

1.3.4                            Nov 11, 2009                 <B>MPI_Open_port(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
