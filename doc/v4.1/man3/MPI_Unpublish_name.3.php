<?php
$topdir = "../../..";
$title = "MPI_Unpublish_name(3) man page (version 4.1.8)";
$meta_desc = "Open MPI v4.1.8 man page: MPI_UNPUBLISH_NAME(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<p>
<h2><a name='sect0' href='#toc0'>Name</a></h2>
<br>
<pre>MPI_Unpublish_name - Unpublishes a service name
</pre>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<p>
<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Unpublish_name(const char *service_name, MPI_Info info,
<tt> </tt>&nbsp;<tt> </tt>&nbsp;const char *port_name)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>USE MPI
! or the older form: INCLUDE &rsquo;mpif.h&rsquo;
MPI_UNPUBLISH_NAME(SERVICE_NAME, INFO, PORT_NAME, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;CHARACTER*(*)<tt> </tt>&nbsp;<tt> </tt>&nbsp;SERVICE_NAME, PORT_NAME
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;<tt> </tt>&nbsp;INFO, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>Fortran 2008 Syntax</a></h2>
<br>
<pre>USE mpi_f08
MPI_Unpublish_name(service_name, info, port_name, ierror)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;CHARACTER(LEN=*), INTENT(IN) :: service_name, port_name
<tt> </tt>&nbsp;<tt> </tt>&nbsp;TYPE(MPI_Info), INTENT(IN) :: info
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER, OPTIONAL, INTENT(OUT) :: ierror
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>service_name </dt>
<dd>A service name (string). </dd>

<dt>info </dt>
<dd>Options to the
name service functions (handle). </dd>

<dt>port_name </dt>
<dd>A port name (string).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output
Parameter</a></h2>

<dl>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
This routine
removes the pair (<i>service_name, port_name</i>) so that applications may no
longer retrieve <i>port_name</i> by calling <a href="../man3/MPI_Lookup_name.3.php">MPI_Lookup_name</a>. It is an error to
unpublish a <i>service_name</i> that was not published via <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>. Both
the <i>service_name</i> and <i>port_name</i> arguments to MPI_Unpublish_name must be
identical to the arguments to the previous call to <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>.
<p>
<h2><a name='sect8' href='#toc8'>Info
Arguments</a></h2>
The following keys for <i>info</i> are recognized: <p>
<p>
<br>
<pre>Key                   Type      Description
---                   ----      -----------
ompi_global_scope     bool      If set to true, unpublish the name from
                                the global scope.  Unpublish from the local
                                scope otherwise.  See the NAME SCOPE
                                section for more details.
</pre>
<p> <p>
<i>bool</i> info keys are actually strings but are evaluated as follows: if the
string value is a number, it is converted to an integer and cast to a boolean
(meaning that zero integers are false and non-zero values are true).  If
the string value is (case-insensitive) "yes" or "true", the boolean is true.
 If the string value is (case-insensitive) "no" or "false", the boolean
is false.  All other string values are unrecognized, and therefore false.
<p>
If no info key is provided, the function will first check to see if a global
server has been specified and is available. If so, then the unpublish function
will default to global scope first, followed by local. Otherwise, the data
will default to unpublish with local scope.
<p>
<h2><a name='sect9' href='#toc9'>Name Scope</a></h2>
Open MPI supports
two name scopes: <i>global</i> and <i>local</i>. Local scope values are placed in a data
store located on the mpirun of the calling process&rsquo; job, while global scope
values reside on a central server. Calls to MPI_Unpublish_name must correctly
specify the scope to be used in finding the value to be removed. The function
will return an error if the specified service name is not found on the
indicated location. <p>
For a more detailed description of scoping rules, please
see the <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a> man page.
<p>
<h2><a name='sect10' href='#toc10'>Errors</a></h2>
Almost all MPI routines return
an error value; C routines as the value of the function and Fortran routines
in the last argument. C++ functions do not return errors. If the default
error handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the
C++ exception mechanism will be used to throw an MPI::Exception object.
<p>
Before the error value is returned, the current MPI error handler is called.
By default, this error handler aborts the MPI job, except for I/O function
errors. The error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the
predefined error handler MPI_ERRORS_RETURN may be used to cause error values
to be returned. Note that MPI does not guarantee that an MPI program can
continue past an error. <p>
See the MPI man page for a full list of MPI error
codes.
<p>
<h2><a name='sect11' href='#toc11'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a>
<a href="../man3/MPI_Lookup_name.3.php">MPI_Lookup_name</a>
<a href="../man3/MPI_Open_port.3.php">MPI_Open_port</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
