<?php
$title = "Building a Fault Tolerant MPI Application: A Ring Communication Example";

$overview = "Building a Fault Tolerant MPI Application: A Ring Communication Example";

$presented = "<a href=\"http://www.iti.uni-luebeck.de/DPDNS11/\">" .
"16th IEEE Workshop on Dependable Parallel, Distributed and Network-Centric Systems</a> at the " .
"<a href=\"http://www.ipdps.org/ipdps2011/\">" . "International
Parallel and Distributed Processing Symposium (IPDPS 2011)</a>, on
May 20, 2011, in Anchorage, Alaska, USA.";

$authors = "Joshua Hursey, Richard L. Graham";

$abstract = "Process failure is projected to become a normal event for many long running and scalable High Performance Computing (HPC) applications. As such many application developers are investigating Algorithm Based Fault Tolerance (ABFT) techniques to improve the efficiency of application recovery beyond what existing checkpoint/restart techniques alone can provide. Unfortunately for these application developers the libraries that their applications depend upon, like Message Passing Interface (MPI), do not have standardized fault tolerance semantics. This paper introduces the reader to a set of run-through stabilization semantics being developed by the MPI Forum's Fault Tolerance Working Group to support ABFT. Using a well-known ring communication program as the running example, this paper illustrates to application developers new to ABFT some of the issues that arise when designing a fault tolerant application. The ring program allows the paper to focus on the communication-level issues rather than the data preservation mechanisms covered by existing literature. This paper highlights a common set of issues that application developers must address in their design including program control management, duplicate message detection, termination detection, and testing. The discussion provides application developers new to ABFT with an introduction to both new interfaces becoming available, and a range of design issues that they will likely need to address regardless of their research domain.";

$files[] = "ipdps-dpdns-2011.pdf";

$month = 5;
$day = 20;
$year = 2011;

$bibtex = "@InProceedings{hursey11ft_ring,
  author =   {Joshua Hursey and Richard Graham},
  title =    {Building a Fault Tolerant {MPI} Application: A Ring Communication Example},
  booktitle =    {16th International Workshop on Dependable Parallel, Distributed and Network-Centric Systems (DPDNS) held in conjunction with the 25th {IEEE} International Parallel and Distributed Processing Symposium (IPDPS)},
  year =         2011,
  address =      {Anchorage, Alaska},
  month =        {May}
}";
