<?php
$topdir = "../..";

$title = "Portable Linux Processor Affinity (PLPA)";
include_once("$topdir/software/plpa/current/version.inc");
include_once("$topdir/projects/plpa/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/projects/plpa/deprecated.inc");
?>

<p><strong><font color="red">
The PLPA and libtopology projects have merged to form the new <a
href="../hwloc/">Portable Hardware Locality (hwloc)</a> project.
hwloc therefore represents the evolution of both projects.  PLPA
distributions will continue to be available, but the software is not
likely will not evolve.  All future work is being done on hwloc.
</font></strong></p>

<p><hr></p>

<p><strong>Current stable version: <?php print($ver_current); ?></strong></p>

<p>The Portable Linux Processor Affinity (PLPA) library does the
following, regardless of your Linux distribution, kernel version, and
GLibc version:</p>

<ul>
<li> Provide consistent behavior</li>

<li> Provide binary compatibility of processor affinity</li>

<li> Provide a common API and set of abstractions</li>
</ul>

<p>PLPA is an attempt to solve the problem that there are multiple
API's for processor affinity within Linux.  Specifically, the
functions <code>sched_setaffinity()</code> and
<code>sched_getaffinity()</code> have numbers and types of parameters
depending on your Linux vendor and/or version of GLibc.  This is quite
problematic for applications attempting to use processor affinity in
Linux for compile-time, link-time, and run-time reasons.</p>

<p>The PLPA provides a single processor affinity API that developers
can write to in order to get both consistent behavior and binary
compatibility across different Linux installations (assuming that you
have an executable that is otherwise binary Linux portable, of
course).</p>

<p>This library was developed by the Open MPI team as a standalone
project that can be used by the Linux community.  Specifically: it is
distributed independently of Open MPI and does not require any part of
Open MPI for its compile-, link-, or run-time functionality.</p>

<?php
include_once("$topdir/includes/footer.inc");
