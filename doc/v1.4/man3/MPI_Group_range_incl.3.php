<?php
$topdir = "../../..";
$title = "MPI_Group_range_incl(3) man page (version 1.4.5)";
$meta_desc = "Open MPI v1.4.5 man page: MPI_GROUP_RANGE_INCL(3)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
  <!-- manual page source format generated by PolyglotMan v3.2, -->
<!-- available at http://polyglotman.sourceforge.net/ -->

<body bgcolor='white'>
<a href='#toc'>Table of Contents</a><p>

<h2><a name='sect0' href='#toc0'>Name</a></h2>
<b>MPI_Group_range_incl</b> - Creates a new group from ranges of ranks in
an existing group.
<p>
<h2><a name='sect1' href='#toc1'>Syntax</a></h2>

<h2><a name='sect2' href='#toc2'>C Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
int MPI_Group_range_incl(MPI_Group group, int n, int ranges[][3],
<tt> </tt>&nbsp;<tt> </tt>&nbsp;MPI_Group *newgroup)
</pre>
<h2><a name='sect3' href='#toc3'>Fortran Syntax</a></h2>
<br>
<pre>INCLUDE &rsquo;mpif.h&rsquo;
MPI_GROUP_RANGE_INCL(GROUP, N, RANGES, NEWGROUP, IERROR)
<tt> </tt>&nbsp;<tt> </tt>&nbsp;INTEGER<tt> </tt>&nbsp;<tt> </tt>&nbsp;GROUP, N, RANGES(3,*), NEWGROUP, IERROR
</pre>
<h2><a name='sect4' href='#toc4'>C++ Syntax</a></h2>
<br>
<pre>#include &lt;mpi.h&gt;
Group Group::Range_incl(int n, const int ranges[][3]) const
</pre>
<h2><a name='sect5' href='#toc5'>Input Parameters</a></h2>

<dl>

<dt>group </dt>
<dd>Group (handle). </dd>

<dt>n </dt>
<dd>Number of triplets in array ranges
(integer). </dd>

<dt>ranges </dt>
<dd>A one-dimensional array of integer triplets, of the form
(first rank, last rank, stride) indicating ranks in group or processes
to be included in newgroup.
<p> </dd>
</dl>

<h2><a name='sect6' href='#toc6'>Output Parameters</a></h2>

<dl>

<dt>newgroup </dt>
<dd>New group derived
from above, in the order defined by ranges (handle). </dd>

<dt>IERROR </dt>
<dd>Fortran only:
Error status (integer).
<p> </dd>
</dl>

<h2><a name='sect7' href='#toc7'>Description</a></h2>
If ranges consist of the triplets
<p>
<br>
<pre>    (first1, last1, stride1),&nbsp;..., (firstn, lastn, striden)
</pre><p>
then newgroup consists of the sequence of processes in group with ranks
<p>
<br>
<pre>                                                 last(1)-first(1)
  first(1), first(1) + stride(1),..., first(1) + ---------------- stride(1),...
                                                     stride(1)
                                                 last(n)-first(n)
  first(n), first(n) + stride(n),..., first(n) + ---------------- stride(n).
                                                     stride(n)
</pre><p>
Each computed rank must be a valid rank in group and all computed ranks
must be distinct, or else the program is erroneous. Note that we may have
first(i) &gt; last(i), and stride(i) may be negative, but cannot be zero. <p>
The
functionality of this routine is specified to be equivalent to expanding
the array of ranges to an array of the included ranks and passing the resulting
array of ranks and other arguments to <a href="../man3/MPI_Group_incl.3.php">MPI_Group_incl</a>. A call to <a href="../man3/MPI_Group_incl.3.php">MPI_Group_incl</a>
is equivalent to a call to MPI_Group_range_incl with each rank i in ranks
replaced by the triplet (i,i,1) in the argument ranges.
<p>
<h2><a name='sect8' href='#toc8'>Note</a></h2>
This implementation
does not currently check to see that the list of ranges to include are
valid ranks in the group.
<p>
<h2><a name='sect9' href='#toc9'>Errors</a></h2>
Almost all MPI routines return an error
value; C routines as the value of the function and Fortran routines in
the last argument. C++ functions do not return errors. If the default error
handler is set to MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception
mechanism will be used to throw an MPI:Exception object. <p>
Before the error
value is returned, the current MPI error handler is called. By default,
this error handler aborts the MPI job, except for I/O function errors. The
error handler may be changed with <a href="../man3/MPI_Comm_set_errhandler.3.php">MPI_Comm_set_errhandler</a>; the predefined
error handler MPI_ERRORS_RETURN may be used to cause error values to be
returned. Note that MPI does not guarantee that an MPI program can continue
past an error.
<p>
<h2><a name='sect10' href='#toc10'>See Also</a></h2>
<p>
<a href="../man3/MPI_Group_incl.3.php">MPI_Group_incl</a>  <br>

<p><a href="../man3/MPI_Group_free.3.php">MPI_Group_free</a>
<p>
<p> <p>

<hr><p>
<a name='toc'><b>Table of Contents</b></a><p>
<ul>
<li><a name='toc0' href='#sect0'>Name</a></li>
<li><a name='toc1' href='#sect1'>Syntax</a></li>
<li><a name='toc2' href='#sect2'>C Syntax</a></li>
<li><a name='toc3' href='#sect3'>Fortran Syntax</a></li>
<li><a name='toc4' href='#sect4'>C++ Syntax</a></li>
<li><a name='toc5' href='#sect5'>Input Parameters</a></li>
<li><a name='toc6' href='#sect6'>Output Parameters</a></li>
<li><a name='toc7' href='#sect7'>Description</a></li>
<li><a name='toc8' href='#sect8'>Note</a></li>
<li><a name='toc9' href='#sect9'>Errors</a></li>
<li><a name='toc10' href='#sect10'>See Also</a></li>
</ul>


<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
