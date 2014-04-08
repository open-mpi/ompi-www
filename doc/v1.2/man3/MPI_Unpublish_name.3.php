<?php
$topdir = "../../..";
$title = "MPI_Unpublish_name(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Unpublish_name</B> - Unpublishes a service name

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Unpublish_name(char *<I>service</I><B>_</B><I>name</I>, MPI_Info <I>info</I>,
            char *<I>port</I><B>_</B><I>name</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_UNPUBLISH_NAME(<I>SERVICE</I><B>_</B><I>NAME,</I> <I>INFO,</I> <I>PORT</I><B>_</B><I>NAME,</I> <I>IERROR</I>)
            CHARACTER*(*)  <I>SERVICE</I><B>_</B><I>NAME,</I> <I>PORT</I><B>_</B><I>NAME</I>
            INTEGER        <I>INFO,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Unpublish_name(const char* <I>service</I><B>_</B><I>name</I>, const MPI::Info&amp; <I>info</I>,
            char* <I>port</I><B>_</B><I>name</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       service_name  A service name (string).

       info          Options  to  the  name  service  functions  (handle).  No
                     options currently supported.

       port_name     A port name (string).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR        Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This routine removes the pair (<I>service</I><B>_</B><I>name,</I> <I>port</I><B>_</B><I>name</I>) so that  appli-
       cations may no longer retrieve <I>port</I><B>_</B><I>name</I> by calling <a href="../man3/MPI_Lookup_name.3.php">MPI_Lookup_name</a>. It
       is an error to unpublish a <I>service</I><B>_</B><I>name</I>  that  was  not  published  via
       <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>.  Both  the  <I>service</I><B>_</B><I>name</I>  and  <I>port</I><B>_</B><I>name</I> arguments to
       MPI_Unpublish_name must be identical to the arguments to  the  previous
       call to <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>.

       The  <I>info</I>  parameter  should be MPI_INFO_NULL, as this routine does not
       parse any MPI Info arguments.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>
       <a href="../man3/MPI_Lookup_name.3.php">MPI_Lookup_name</a>
       <a href="../man3/MPI_Open_port.3.php">MPI_Open_port</a>

Open MPI 1.2                      March 2007      MPI_Unpublish_name(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
