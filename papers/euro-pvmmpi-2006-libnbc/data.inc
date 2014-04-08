<?php 
$title = "Optimizing a Conjugate Gradient Solver with Non Blocking Collective Operations";
$overview = "Using a real-world application to analyze the applicability of non-blocking collective operations for MPI.";

$authors = "T. Hoefler, P. Gottschling, W. Rehm, A. Lumsdaine";

$abstract = "This paper presents a case study about the applicability 
and usage of non blocking collective operations. These operations
provide the ability to overlap communication with computation and to
avoid unnecessary synchronization. We introduce our NBC library, a
portable low-overhead implementation of non blocking collectives on
top of MPI-1.  We demonstrate the easy usage of the NBC library with
the optimization of a conjugate gradient solver with only minor
changes to the traditional parallel implementation of the program. The
optimized solver runs up to 34% faster and is able to overlap most of
the communication.  We show that there is, due to the overlap, no
performance difference between Gigabit Ethernet and InfiniBand for our
calculation.";

$presented = "<a href=\"http://www.pvmmpi06.org\">" . 
"Euro PVM/MPI 2006</a>, September, 2006, in Bonn, Germany.";

$files[] = "euro-pvmmpi-2006-libnbc.pdf";

$month = 9;
$day = 18;
$year = 2006;

$bibtex = "@inproceedings{hoefler-parsim-06,
  author = {T. Hoefler and P. Gottschling and W. Rehm and A. Lumsdaine},
  title = {{Optimizing a Conjugate Gradient Solver with Non-Blocking Collective Operations}},
  booktitle    = {Proceedings, 13th European PVM/MPI Users' Group Meeting},
  year      = 2006,
  address   = {Bonn, Germany},
  month     = {September},
  publisher = {Springer-Verlag},
  series = {Lecture Notes in Computer Science},
  source = {http://www.open-mpi.org/papers/},
}";

