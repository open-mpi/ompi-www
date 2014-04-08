<?php                                                                           
$title = "A Case for Standard Non-Blocking Collective Operations";

$overview = "We draw the case for non-blocking collective operations in MPI and
show several application benchmarks to support our claims.";

$presented = "<a href=\"http://pvmmpi07.lri.fr/\">" .
"EuroPVM/MPI '07</a>, September 30th - October 3rd, 2007, Paris,
France.";

$authors = "Torsten Hoefler, Prabhanjan Kambadur, Richard L. Graham, Galen
Shipman, Andrew Lumsdaine";

$abstract = "In this paper we make the case for adding standard non-blocking
collective operations to the MPI standard.  The non-blocking
point-to-point and blocking collective operations currently defined
by MPI provide important performance and abstraction benefits.  To
allow these benefits to be simultaneously realized, we present an
application programming interface for non-blocking collective
operations in MPI.  Microbenchmark and application-based performance
results demonstrate that non-blocking collective operations offer
not only improved convenience, but improved performance as well,
when compared to manual use of threads with blocking collectives.";

$files[] = "mpi-vs-nbc.pdf";

$month = 9;
$day = 30;
$year = 2007;

$bibtex = "@InProceedings{hoefler07:_case_for_stand_non_block_collec_operat,
  author =      {Torsten Hoefler and Prabhanjan Kambadur and Richard L. Graham and Galen Shipman and Andrew Lumsdaine},
  title =       {A Case for Standard Non-Blocking Collective Operations},
  booktitle =   {Proceedings, Euro PVM/MPI},
  year =        2007,
  address =     {Paris, France},
  month =       {October}
}";
