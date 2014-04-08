<?php
$title = "Preserving Collective Performance Across Process Failure for a Fault Tolerant MPI";

$overview = "Preserving Collective Performance Across Process Failure for a Fault Tolerant MPI";

$presented = "<a href=\"http://www.unixer.de/hips2011/\">" .
"16th International Workshop on High-Level Parallel Programming Models and Supportive Environments</a> at the " .
"<a href=\"http://www.ipdps.org/ipdps2011/\">" . "International
Parallel and Distributed Processing Symposium (IPDPS 2011)</a>, on
May 20, 2011, in Anchorage, Alaska, USA.";

$authors = "Joshua Hursey, Richard L. Graham";

$abstract = "Application developers are investigating Algorithm Based Fault Tolerance (ABFT) techniques to improve the efficiency of application recovery beyond what traditional techniques alone can provide. Applications will depend on libraries to sustain failure-free performance across process failure to continue to efficiently use High Performance Computing (HPC) systems even in the presence of process failure. Optimized Message Passing Interface (MPI) collective operations are a critical component of many scalable HPC applications. However, most of the collective algorithms are not able to handle process failure. Next generation MPI implementations must provide fault aware versions of such algorithms that can sustain performance across process failure. This paper discusses the design and implementation of fault aware collective algorithms for tree structured communication patterns. The three design approaches of rerouting, lookup avoiding and rebalancing are described, and analyzed for their performance impact relative to a similar fault unaware collective algorithm. The analysis shows that the rerouting approach causes up to a four times performance degradation while the rebalancing approach can bring the performance within 1\% of the fault unaware performance. Additionally, this paper introduces the reader to a set of run-through stabilization semantics being developed by the MPI Forum's Fault Tolerance Working Group to support ABFT. This paper underscores the need for care to be taken when designing new fault aware collective algorithms for fault tolerant MPI implementations.";

$files[] = "ipdps-hips-2011.pdf";

$month = 5;
$day = 20;
$year = 2011;

$bibtex = "@InProceedings{hursey11ft_coll,
  author =   {Joshua Hursey and Richard Graham},
  title =    {Preserving Collective Performance Across Process Failure for a Fault Tolerant {MPI}},
  booktitle =    {16th International Workshop on High-Level Parallel Programming Models and Supportive Environments (HIPS) held in conjunction with the 25th {IEEE} International Parallel and Distributed Processing Symposium (IPDPS)},
  year =         2011,
  address =      {Anchorage, Alaska},
  month =        {May}
}";
