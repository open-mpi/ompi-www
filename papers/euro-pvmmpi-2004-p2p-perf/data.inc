<?php
$title = "Open MPI's TEG Point-to-Point Communications Methodology: Comparison to Existing Implementations";
$overview = "Preliminary performance results using a pre-release version of Open MPI.";

$authors = "T.S. Woodall, R.L. Graham, R.H. Castain, D.J. Daniel, 
M.W. Sukalski, G.E. Fagg, E. Gabriel, G. Bosilca, T. Angskun,
J.J. Dongarra, J.M. Squyres, V. Sahay, P. Kambadur, B. Barrett, A. Lumsdaine";

$abstract = "TEG is a new methodology for point-to-point messaging
developed as a part of the Open MPI project. Initial performance
measurements are presented, showing comparable ping-pong latencies in
a single NIC configuration, but with bandwidths up to 30% higher than
that achieved by other leading MPI implementations.  Homogeneous
dual-NIC configurations further improved performance, but the
heterogeneous case requires continued investigation.";

$presented = "<a href=\"http://www.lpds.sztaki.hu/pvmmpi\">" .
"Euro PVM/MPI 2004</a>, September, 2004, in Budapest, Hungary.";

$files[] = "euro-pvmmpi-2004-p2p-perf.ps";
$files[] = "euro-pvmmpi-2004-p2p-perf.pdf";

$month = 9;
$day = 20;
$year = 2004;

$bibtex = "@InProceedings{woodall04:_open_teg_point_point_commun_method,
  author       = {T.S. Woodall and R.L. Graham and R.H. Castain and
                  D.J. Daniel and M.W. Sukalski and G.E. Fagg and
                  E. Gabriel and G. Bosilca and T. Angskun and
                  J.J. Dongarra and J.M. Squyres and V. Sahay and
                  P. Kambadur and B. Barrett and A. Lumsdaine},
  title        = {Open {MPI}'s {TEG} Point-to-Point Communications
                  Methodology: Comparison to Existing
  Implementations},
  booktitle    = {Proceedings, 11th European PVM/MPI Users' Group
                  Meeting},
  year         = 2004,
  address      = {Budapest, Hungary},
  pages        = {105-111},
  month        = {September}
}";
