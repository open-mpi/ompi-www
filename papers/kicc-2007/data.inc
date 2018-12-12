<?php
$title = "Efficient Message Passing on Multi-Clusters: An IPv6 Extension to Open MPI";
$overview = "General description and first benchmarks of the Open MPI IPv6 extension";

$authors = "Christian Kauhaus, Adrian Knoth, Thomas Peiselt, Dietmar Fey";

$abstract = "At our university, different institutes have installed their own
  cluster computers.
  Connecting several of these clusters to perform distributed
  high-performance computing requires message passing
  spanning heterogeneous network structures. 
  One problem is that private IPv4 addresses inside clusters, although
  common and suitable for internal communication, 
  preclude end-to-end connectivity.
  To establish multi-cluster message passing in such a context, we propose to
  use MPI over IPv6. In this article, we 
  present our IPv6 extension to Open MPI, which is able to cope with
  mixed IPv4/IPv6 environments and delivers high performance levels.";

$presented = "Kommunikation in Clusterrechnern und Clusterverbundsystemen
    2007 Workshop (KiCC, translated to English, \"Communication in Cluster- 
    and Grid-Systems\") at the Technical University of Chemnitz, February 2007,
    Germany.";

$files[] = "kicc-2007.pdf";

$month = 2;
$day = 8;
$year = 2007;

$bibtex = "@inproceedings{ompi-ipv6,
   author =   {Christian Kauhaus, Adrian Knoth, Thomas Peiselt, Dietmar Fey},
   title =   {Efficient Message Passing on Multi-Clusters: An IPv6 Extension to {O}pen {MPI}}, 
   booktitle =   {Proceedings of KiCC'07, Chemnitzer Informatik Berichte},
   issn = {0947-5125},
   year =   2007,
   month = {February},
   location = {Chemnitz, Germany},
}";

