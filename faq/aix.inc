<?php
include_once("$topdir/software/ompi/current/version.inc");

$q[] = "Is AIX a supported operating system for Open MPI?";

$anchor[] = "support";

$a[] = "No.  AIX used to be supported, but none of the current Open
MPI developers has any platforms that require AIX support for Open
MPI.

Since Open MPI is an open source project, its features and
requirements are driven by the union of its developers.  Hence, AIX
support has fallen away because none of us currently use AIX.  All
this means is that we do not develop or test on AIX; there is no
fundamental technology reason why Open MPI _couldn't_ be supported on
AIX.

AIX support could certainly be re-instated if someone who wanted AIX
support joins the core group of developers and contributes the
development and testing to support AIX.";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does Open MPI work on AIX?";

$anchor[] = "does-it-work";

$url = "https://www.open-mpi.org/community/lists/users/2007/03/2898.php";

$a[] = "There have been reports from random users that a small number
of changes are required to the Open MPI code base to make it work
under AIX.  For example, see the following post on the Open MPI user's
list, reported by Ricardo Fonseca:

<div align=center>
" . "<a href=\"$url\">" . "$url</a>
</div>";
