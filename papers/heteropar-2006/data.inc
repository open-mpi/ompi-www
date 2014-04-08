<?php 
$title = "Open MPI: A High-Performance, Heterogeneous MPI";
$overview = "An overview of Open MPI's architecture, emphasizing the heterogeneous-enabled design.";

$authors = "Richard L. Graham, Galen M. Shipman, Brian W. Barrett, Ralph H. Castain, George Bosilca, Andrew Lumsdaine";

$abstract = "
  The growth in the number of generally available, distributed,
  heterogeneous computing systems places increasing importance on the
  development of user-friendly tools that enable application
  developers to efficiently use these resources.  Open MPI
  provides support for several aspects of heterogeneity within a
  single, open-source MPI implementation.  Through careful
  abstractions, heterogeneous support 
  maintains efficient use of uniform computational platforms.  We describe
  Open MPI's architecture for heterogeneous network and processor support.
  A key design features of this implementation is the
  transparency to the application developer while maintaining very high
  levels of performance.  This is demonstrated with the results of
  several numerical experiments.";

$presented = "<a href=\"http://dis.um.es/heteropar\">" . 
"HeteroPar '06</a>, September 2006, in Barcelona, Spain.";

$files[] = "heteropar-2006-paper.pdf";
$files[] = "heteropar-2006-talk.pdf";

$month = 9;
$day = 25;
$year = 2006;

$bibtex = "@InProceedings{richard06:_open_mpi,
  author = 	 {Richard L. Graham and Galen M. Shipman and Brian W. Barrett and Ralph H. Castain and George Bosilca and Andrew Lumsdaine},
  title = 	 {Open {MPI}: A High-Performance, Heterogeneous {MPI}},
  booktitle = {Proceedings, Fifth International Workshop on Algorithms, Models and Tools for Parallel Computing on Heterogeneous Networks},
  year = 	 2006,
  address = 	 {Barcelona, Spain},
  month = 	 {September}
}";
