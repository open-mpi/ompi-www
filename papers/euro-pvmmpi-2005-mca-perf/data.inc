<?php
$title = "Analysis of the Component Architectue Overhead in Open MPI";
$overview = "Presents a detailed analysis of the [lack of] overhead generated Open MPI's component architecture.";

$authors = "B. Barrett, J. M. Squyres, A. Lumsdaine, R. L. Graham, G. Bosilca";

$abstract = " Component architectures provide a useful framework for
developing an extensible and maintainable code base upon which
large-scale software projects can be built.  Component methodologies
have only recently been incorporated into applications by the High
Performance Computing community, in part because of the perception
that component architectures necessarily incur an unacceptable
performance penalty.  The Open MPI project is creating a new
implementation of the Message Passing Interface standard, based on a
custom component architecture -- the Modular Component Architecture
(MCA) -- to enable straightforward customization of a high-performance
MPI implementation.  This paper reports on a detailed analysis of the
performance overhead in Open MPI introduced by the MCA.  We compare
the MCA-based implementation of Open MPI with a modified version that
bypasses the component infrastructure.  The overhead of the MCA is
shown to be low, on the order of 1%, for both latency and bandwidth
microbenchmarks as well as for the NAS Parallel Benchmark suite.";

$presented = "<a href=\"http://www.pvmmpi05.unina2.it\">" .
"Euro PVM/MPI 2005</a>, September, 2005, in Sorrento, Italy";

$files[] = "euro-pvm-mpi-2005-mca-perf.ps";
$files[] = "euro-pvm-mpi-2005-mca-perf.pdf";

$month = 9;
$day = 18;
$year = 2005;

$bibtex = "@InProceedings{barrett05:_analy_compon_archit_overh_open_mpi,
  author       = {B. Barrett and J. M. Squyres and A. Lumsdaine and R. L. Graham and G. Bosilca},
  title        = {Analysis of the Component Architecture Overhead in Open MPI},
  booktitle    = {Proceedings, 12th European PVM/MPI Users' Group
                  Meeting},
  year      = 2005,
  address   = {Sorrento, Italy},
  month     = {September}
}";

