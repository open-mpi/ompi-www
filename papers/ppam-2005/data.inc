<?php
$title = "Open MPI: A Flexible High Performance MPI";
$overview = "Overview of Open MPI and the OB1 point-to-point architecture.";

$presented = "PPAM 2005, the 6th International Conference on Parallel
Processing and Applied Mathematics in Poznan, Poland, in September
2005.  Also available via the PPAM 2005 Leture Notes in Computer
Science (see " . "<a href=\"http://www.springeronline.com/lncs\">" .
"http://www.springeronline.com/lncs/</a>, or contact Roman Wyrzykowski
for more information).";

$authors = "Richard L. Graham, Timothy S. Woodall, Jeffrey M. Squyres";

$abstract = "A large number of MPI implementations are currently
available, each of which emphasize different aspects of
high-performance computing or are intended to solve a specific
research problem.  The result is a myriad of incompatible MPI
implementations, all of which require separate installation, and the
combination of which present significant logistical challenges for end
users.  Building upon prior research, and influenced by experience
gained from the code bases of the LAM/MPI, LA-MPI, FT-MPI, and
PACX-MPI projects, <em>Open MPI</em> is an all-new, production-quality
MPI-2 implementation that is fundamentally centered around component
concepts.  Open MPI provides a unique combination of novel features
previously unavailable in an open-source, production-quality
implementation of MPI.  Its component architecture provides both a
stable platform for third-party research as well as enabling the
run-time composition of independent software add-ons.  This paper
presents a high-level overview the goals, design, and implementation
of Open MPI, as well as performance results for it's point-to-point
implementation.";

$files[] = "ppam-2005.pdf";
$files[] = "ppam-2005.ps";

$month = 12;
$day = 10;
$year = 2005;

$bibtex = "@InProceedings{graham05:_open_mpi,
  author =       {Richard L. Graham and Timothy S. Woodall and Jeffrey M. Squyres},
  title =         {Open {MPI}: A Flexible High Performance {MPI}},
  booktitle    = {Proceedings, 6th Annual International Conference on Parallel Processing and Applied Mathematics},
  year	       = 2005,
  address      = {Poznan, Poland},
  month	       = {September}
}";

