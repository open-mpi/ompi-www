<?php
$title = "The Component Architecture of Open MPI: Enabling Third-Party Collective Algorithms";
$overview = "General description of the MPI Component Architecture, focusing on the details of the collective algorithm framework in Open MPI.";

$authors = "Jeffrey M. Squyres, Andrew Lumsdaine";

$abstract = "As large-scale clusters become more distributed and
heterogeneous, significant research interest has emerged in optimizing
MPI collective operations because of the performance gains that can be
realized.  However, researchers wishing to develop new algorithms for
MPI collective operations are typically faced with significant design,
implementation, and logistical challenges.  To address a number of
needs in the MPI research community, Open MPI has been developed, a
new MPI-2 implementation centered around a lightweight component
architecture that provides a set of component frameworks for realizing
collective algorithms, point-to-point communication, and other aspects
of MPI implementations.  In this paper, we focus on the collective
algorithm component framework.  The <code>coll</code> framework
provides tools for researchers to easily design, implement, and
experiment with new collective algorithms in the context of a
production-quality MPI.  Performance results with basic collective
operations demonstrate that the component architecture of Open MPI
does not introduce any performance penalty.";

$presented = "<a href=\"http://www.cs.vu.nl/CMSGA\">" . 
"Workshop on Component Models and Systems for Grid Applications</a> at
the <a href=\"http://graal.ens-lyon.fr/ICS04/\">18th Annual ACM
International Conference on Supercomputing</a>, on June 26, 2004, in
Saint-Malo, France.";

$files[] = "ics-2004.ps";
$files[] = "ics-2004.pdf";

$month = 6;
$day = 26;
$year = 2004;

$bibtex = "@InProceedings{squyres04:_compon_archit_open_mpi,
  author       = {Jeffrey M.\ Squyres and Andrew Lumsdaine},
  title        = {The Component Architecture of Open {MPI}: Enabling
                  Third-Party Collective Algorithms},
  booktitle    = {Proceedings, 18th ACM International Conference on
                  Supercomputing, Workshop on Component Models and
                  Systems for Grid Applications},
  year         = 2004,
  address      = {St.\ Malo, France},
  month        = {July},
  pages        = {167--185},
  editor       = {Vladimir Getov and Thilo Kielmann},
  publisher    = {Springer}
}";
