<?php
$title = "The Design and Implementation of Checkpoint/Restart Process Fault Tolerance for Open MPI";
$overview = "A high level description of the checkpoint/restart process fault tolerance infrastructure in Open MPI.";

$authors = "Joshua Hursey, Jeffrey M. Squyres, Timothy I. Mattox, Andrew Lumsdaine";

$abstract = "To be able to fully exploit ever larger computing platforms,
modern HPC applications and system software must be able to 
tolerate inevitable faults. Historically, MPI implementations that incorporated fault tolerance
capabilities have been limited by lack of modularity, scalability and
usability. This paper presents the design and implementation of an infrastructure
to support checkpoint/restart fault tolerance in the Open MPI project.
We identify the general capabilities required for distributed
checkpoint/restart and realize these capabilities as extensible
frameworks within Open MPI's modular component architecture.
Our design features an abstract interface for providing and accessing
fault tolerance services without sacrificing performance, robustness,
or flexibility. Although our implementation includes support for some initial
checkpoint/restart mechanisms, the framework is meant to be extensible
and to encourage experimentation of alternative techniques within a
production quality MPI implementation.";

$presented = "<a href=\"http://www.iti.uni-luebeck.de/DPDNS07/\">" .
"12th IEEE Workshop on Dependable Parallel, Distributed and Network-Centric Systems</a> at the " .
"<a href=\"http://www.ipdps.org/ipdps2007/\">" . "International
Parallel and Distributed Processing Symposium (IPDPS 2007)</a>, on
March 26, 2007, in Long Beach, California, USA.";

$files[] = "dpdns-2007.pdf";

$month = 3;
$day = 26;
$year = 2007;

$bibtex = "@InProceedings{hursey:ipdps07:Open-MPI-FT-Design,
  author = {Joshua Hursey and Jeffrey M. Squyres and Timothy I. Mattox and Andrew Lumsdaine},
  title = {The Design and Implementation of Checkpoint/Restart Process Fault Tolerance for {O}pen {MPI}},
  booktitle = {Proceedings of the 21st {IEEE} {International Parallel and Distributed Processing Symposium (IPDPS)}},
  location = {Long Beach, CA, USA},
  publisher = {IEEE Computer Society},
  year = {2007},
  month = {03},
}";
