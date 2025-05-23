<?php
$topdir = "../../..";
$title = "MPI_Query_thread(3) man page (version 1.10.1)";
$meta_desc = "Open MPI v1.10.1 man page: MPI_QUERY_THREAD(3)";

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
<b>MPI_Query_thread</b> - Returns the current level of thread support

<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<p>
<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Query_thread(int *provided)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_QUERY_THREAD(PROVIDED, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;PROVIDED, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI::Query_thread()
</pre>
<h2><a name='sect5' href='#toc5'>Output Parameters</a></h2>

<dl>

<dt>provided </dt>
<dd>C/Fortran only: Level of thread support (integer).
 </dd>

<dt>IERROR </dt>
<dd>Fortran only: Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Description</a></h2>
This routine
returns in <i>provided</i> the current level of thread support. If MPI was initialized
by a call to <a href="../man3/MPI_Init_thread.3.php">MPI_Init_thread</a>, <i>provided</i> will have the same value as was
returned by that function. <p>
The possible values of <i>provided</i> are as follows:

<dl>

<dt>MPI_THREAD_SINGLE </dt>
<dd>Only one thread may execute. </dd>

<dt>MPI_THREAD_FUNNELED </dt>
<dd>If the
process is multithreaded, only the thread that called <a href="../man3/MPI_Init.3.php">MPI_Init</a>[_thread]
may make MPI calls. </dd>

<dt>MPI_THREAD_SERIALIZED </dt>
<dd>If the process is multithreaded,
only one thread may make MPI library calls at one time. </dd>

<dt>MPI_THREAD_MULTIPLE
</dt>
<dd>If the process is multithreaded, multiple threads may call MPI at once
with no restrictions.
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Notes</a></h2>
In Open MPI, <i>provided</i> is always MPI_THREAD_SINGLE,
unless the program has been linked with the multithreaded library, in which
case <i>provided</i> is MPI_THREAD_MULTIPLE.
<p>
<h2><a name='sect8' href='#toc8'>Errors</a></h2>
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
continue past an error.  <p>
See the MPI man page for a full list of MPI error
codes.
<p>
<h2><a name='sect9' href='#toc9'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_Init.3.php">MPI_Init</a>
<a href="../man3/MPI_Init_thread.3.php">MPI_Init_thread</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
