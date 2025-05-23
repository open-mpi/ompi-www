<?php
$topdir = "../../..";
$title = "MPI_T_pvar_start(3) man page (version 4.1.8)";
$meta_desc = "Open MPI v4.1.8 man page: MPI_T_PVAR_START(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
      <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_T_pvar_start</b>, <b><a href="../man3/MPI_T_pvar_stop.3.php">MPI_T_pvar_stop</a></b> - Start/stop a performance
variable
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_T_pvar_start(MPI_T_pvar_session session, MPI_T_pvar_handle handle)
int <a href="../man3/MPI_T_pvar_stop.3.php">MPI_T_pvar_stop</a>(MPI_T_pvar_session session, MPI_T_pvar_handle handle)
</pre>
<h2><a name='sect3' href='#toc3'>Input Parameters</a></h2>

<dl>

<dt>session </dt>
<dd>Performance experiment session. </dd>

<dt>handle </dt>
<dd>Performance
variable handle.
<p> </dd>
</dl>

<h2><a name='sect4' href='#toc4'>Description</a></h2>
MPI_T_pvar_start starts the performance variable
with the handle specified in <i>handle</i>. The special value MPI_T_PVAR_ALL_HANDLES
can be passed in <i>handle</i> to start all non-continuous handles in the session
specified in <i>session</i>.
<p> <a href="../man3/MPI_T_pvar_stop.3.php">MPI_T_pvar_stop</a> stops the performance variable with
the handle specified in <i>handle</i>. The special value MPI_T_PVAR_ALL_HANDLES
can be passed in <i>handle</i> to stop all non-continuous handles in the session
specified in <i>session</i>.
<p> Continuous performance variables can neither be started
nor stopped.
<p>
<h2><a name='sect5' href='#toc5'>Errors</a></h2>
MPI_T_pvar_start() and <a href="../man3/MPI_T_pvar_stop.3.php">MPI_T_pvar_stop</a>() will fail if:

<dl>

<dt>[MPI_T_ERR_NOT_INITIALIZED] </dt>
<dd>The MPI Tools interface not initialized </dd>

<dt>[MPI_T_ERR_INVALID_SESSION]
</dt>
<dd>Session parameter is not a valid session </dd>

<dt>[MPI_T_ERR_INVALID_HANDLE] </dt>
<dd>Invalid
handle or handle not associated with the session </dd>

<dt>[MPI_T_ERR_PVAR_NO_STARTSTOP]
</dt>
<dd>
<p>The variable cannot be started or stopped
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>See Also</a></h2>
<br>
<pre><a href="../man3/MPI_T_pvar_get_info.3.php">MPI_T_pvar_get_info</a>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
