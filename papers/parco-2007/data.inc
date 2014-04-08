<?php

$title = "Memory Debugging of MPI-Parallel Applications in Open MPI";

$overview = "Adding MPI semantics for memory debugging using valgrind";

$presented = "<a href=\"http://www.fz-juelich.de/conference/parco2007/\">" .
"ParCo2007</a>, September 4th - 7th, 2007, Julich, Germany.";

$authors = "Rainer Keller, Shiqing Fan, and Michael Resch";

$abstract = "In this paper we describe the implementation of memory
checking functionality based on instrumentation using valgrind. The
combination of valgrind based checking functions within the
MPI-implementation offers superior debugging functionality, for errors
that otherwise are not possible to detect with comparable
MPI-debugging tools. The functionality is integrated into Open MPI as
the so-called memchecker-framework. This allows other memory debuggers
that offer a similar API to be integrated. The tight control of the
user's memory passed to Open MPI, allows not only to find application
errors, but also helps track bugs within Open MPI itself.  We describe
the actual checks, classes of errors being found, how memory buffers
internally are being handled, show errors actually found in user's
code and the performance implications of this instrumentation.  ";

$files[] = "parco-2007.pdf";

$month = 9;
$day = 4;
$year = 2007;

$bibtex = "@INPROCEEDINGS{keller07,
  author =       \"Rainer Keller and Shiqing Fan and Michael Resch\",
  title =        \"{Memory debugging of MPI-parallel Applications in Open MPI}\",
  booktitle =    \"Proceedings of ParCo'07\",
  editor =       \"G.R.~Joubert and C.~Bischof and F.~Peters and T.~Lippert and M.~Bucker and P.~Gibbon and B.~Mohr\",
  address =      \"Julich, Germany\",
  month =        \"Sep\",
  year =         \"2007\"
}";
