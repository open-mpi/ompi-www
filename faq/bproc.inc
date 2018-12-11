<?php

include_once("$topdir/software/ompi/current/version.inc");

$q[] = "What versions of BProc does Open MPI work with?";

$anchor[] = "bproc-supported-versions";

$a[] = "BProc support was dropped from Open MPI in the Open MPI v1.3 series.

The last version of Open MPI to include BProc support was <a
href=\"$topdir/software/ompi/v1.2/\">Open MPI 1.2.9</a>, which was
released in February of 2009.

As of December 2005, Open MPI supports recent versions of
BProc, such as those found in " . "<a
href=\"http://www.clustermatic.org/\">" . "Clustermatic</a>.  We have
not tested with older forks of the BProc project, such as those from
Scyld (now defunct).  Since Open MPI's BProc support uses some
advanced support from recent BProc versions, it is somewhat doubtful
(but totally untested) as to whether it would work on Scyld systems.";

/////////////////////////////////////////////////////////////////////////

$q[] = "What prerequisites are necessary for running an Open MPI job under BProc?";

$anchor[] = "bproc-run-prereqs";

$a[] = "In general, they are the same for running Open MPI jobs in
other environments (see <a href=\"./?category=running\">this FAQ
category for more general information</a>).

However, with BProc it is worth noting that BProc may not bring all
necessary dynamic libraries with a process when it is migrated to a
back-end compute node.  Plus, Open MPI opens components on the fly
(i.e., _after_ the process has started), so if these components are
unavailable on the back-end compute nodes, Open MPI applications may
fail.

In general the Open MPI team recommends one of the following two
solutions when running on BProc clusters (in order):

<ol>
<li>Compile Open MPI statically, meaning that Open MPI's libraries
produce static \"[.a]\" libraries and all components are included in
the library (as opposed to dynamic \"[.so]\" libraries, and separate
\"[.so]\" files for each component that is found and loaded at
run-time) so that applications do not need to find any shared
libraries or components when they are migrated to back-end compute
nodes.  This can be accomplished by specifying [--enable-static
--disable-shared] to [configure] when building Open MPI.</li>

<li>If you do not wish to use static compilation, ensure that Open MPI
is fully installed on all nodes (i.e., the head node and all compute
nodes) in the same directory location.  For example, if Open MPI is
installed in [/opt/openmpi-$ver_current] on the head node, ensure that
it is also installed in that same directory on all the compute
nodes.</li>
</ol>";

/////////////////////////////////////////////////////////////////////////

