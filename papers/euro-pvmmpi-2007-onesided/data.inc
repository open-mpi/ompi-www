<?php

$title = "Analysis of Implementation Options for MPI-2 One-Sided";

$overview = "An analysis of the implementation of MPI-2 one-sided
functionality in Open MPI";

$presented = "<a href=\"http://pvmmpi07.lri.fr/\">" .
"EuroPVM/MPI '07</a>, September 30th - October 3rd, 2007, Paris,
France.";

$authors = "Brian W. Barrett, Galen M. Shipman, Andrew Lumsdaine";

$abstract = "The Message Passing Interface provides an interface for
one- sided communication as part of the MPI-2 standard. The semantics
spec- ified by MPI-2 allow for a number of different implementation
avenues, each with different performance characteristics. Within the
context of Open MPI, a freely available high performance MPI
implementation, we analyze a number of implementation possibilities,
including layering over MPI-1 send/receive and true remote memory
access.";

$files[] = "euro-pvmmpi-2007-onesided.pdf";

$month = 9;
$day = 30;
$year = 2007;

$bibtex = "@InProceedings{barrett07:_analy_implem_option_mpi_one_sided,
  author =	 {Brian W. Barrett and Galen M. Shipman and Andrew Lumsdaine},
  title =	 {Analysis of Implementation Options for MPI-2 One-Sided},
  booktitle =    {Proceedings, Euro PVM/MPI},
  year =         2007,
  address =      {Paris, France},
  month =        {October}
}";
