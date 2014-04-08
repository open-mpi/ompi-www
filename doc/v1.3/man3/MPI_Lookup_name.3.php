<?php
$topdir = "../../..";
$title = "MPI_Lookup_name(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Lookup_name</B> - Finds port associated with a service name

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Lookup_name(char *<I>service</I><B>_</B><I>name</I>, MPI_Info <I>info</I>,
            char *<I>port</I><B>_</B><I>name</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_LOOKUP_NAME(<I>SERVICE</I><B>_</B><I>NAME,</I> <I>INFO,</I> <I>PORT</I><B>_</B><I>NAME,</I> <I>IERROR</I>)
            CHARACTER*(*)  <I>SERVICE</I><B>_</B><I>NAME,</I> <I>PORT</I><B>_</B><I>NAME</I>
            INTEGER        <I>INFO,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Lookup_name(const char *<I>service</I><B>_</B><I>name</I>, const MPI::Info&amp; <I>info</I>,
            char* <I>port</I><B>_</B><I>name</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       service_name  A service name (string).

       info          Options to the name service functions (handle).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       port_name     a port name (string).

       IERROR        Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  function  retrieves a <I>port</I><B>_</B><I>name</I> published under <I>service</I><B>_</B><I>name</I> by a
       previous invocation of <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>. The application must supply  a
       <I>port</I><B>_</B><I>name</I>  buffer  large  enough to hold the largest possible port name
       (i.e., MPI_MAX_PORT_NAME bytes).

</PRE>
<H2>INFO ARGUMENTS</H2><PRE>
       The following keys for <I>info</I> are recognized:

       Key                   Type      Description
       ---                   ----      -----------

       ompi_lookup_order     char *    Resolution order for name lookup.

       The <I>ompi</I><B>_</B><I>lookup</I><B>_</B><I>order</I> info key can specify one  of  four  valid  string
       values  (see  the NAME SCOPE section below for more information on name
       scopes):

       <I>local</I>: Only search the local scope for name resolution.
       <I>global,local</I>: Search the global scope for name resolution.  If
           not found, try searching the local scope for name resolution.

       If no info key is provided, the search will first check  to  see  if  a
       global  server  has  been  specified  and is available. If so, then the
       search will default to global scope first, followed  by  local.  Other-
       wise, the search will default to local.

</PRE>
<H2>NAME SCOPE</H2><PRE>
       Open MPI supports two name scopes: <I>global</I> and <I>local</I>. Local scope values
       are placed in a data  store  located  on  the  mpirun  of  the  calling
       process'  job,  while  global  scope values reside on a central server.
       Calls to <a href="../man3/MPI_Unpublish_name.3.php">MPI_Unpublish_name</a> must correctly specify the scope to be used
       in  finding  the value to be removed. The function will return an error
       if the specified service name is not found on the indicated location.

       For a more detailed  description  of  scoping  rules,  please  see  the
       <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a> man page.

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

       See the MPI man page for a full list of MPI error codes.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>
       <a href="../man3/MPI_Open_port.3.php">MPI_Open_port</a>

1.3.4                            Nov 11, 2009               <B>MPI_Lookup_name(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
