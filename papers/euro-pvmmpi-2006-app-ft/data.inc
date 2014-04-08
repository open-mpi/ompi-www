<?php 
$title = "Approaches for Parallel Applications Fault Tolerance";
$overview = "Invited talk about directions for application fault tolerance at scale";

$authors = "Richard Graham";
$abstract = "As the complexity of high performance computer systems
increases or the level of end-to-end engineering integration
decreases, the likelihood of software or hardware failure increases.
It is, therefore, important to effectively deal with these failures in
order to maintain application mean-time-to-failure at levels
acceptable to users.

<p>This talk will describe the work done in the Open MPI collaboration
to recover from several failure scenarios.  This builds on research
already done in the the context of the LA-MPI, FT-MPI, LAM/MPI, and
PACX-MPI projects and deals with transient and catastrophic network
errors, as well as several approaches to handling process failure. It
will address how failures are detected, the mechanisms used to work
around these failures and allow the applications to continue running,
and what level of support, if any, is needed from the application to
successfully deploy these solutions.  In addition, the performance
impact of these solutions on several applications will be discussed.";

$presented = "<a href=\"http://www.pvmmpi06.org\">" . 
"Euro PVM/MPI 2006</a>, September, 2006, in Bonn, Germany.";

$files[] = "euro-pvmmpi-2006-app-ft.pdf";

$month = 9;
$day = 18;
$year = 2006;

$bibtex = "";
