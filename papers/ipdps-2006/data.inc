<?php
$title = "InfiniBand Scalability in Open MPI";
$overview = "Analysis of scalability issues with InfiniBand and Open MPI";

$presented = "Presented at IEEE Parallel and Distributed Processing Symposium (IPDPS), May 2006, Rhodes Island, Greece.";

$authors = "Galen M. Shipman, Tim S. Woodall, Rich L. Graham,
Arthur B. Maccabe, Patrick G. Bridges";

$abstract = "Infiniband is becoming an important interconnect
technology in high performance computing. Recent efforts in large
scale Infiniband deployments are raising scalability questions in the
HPC community. Open MPI, a new open source implementation of the MPI
standard targeted for production computing, provides several
mechanisms to enhance Infiniband scalability. Initial comparisons with
MVAPICH, the most widely used Infiniband MPI implementation, show
similar performance but with much better scalability
characteristics. Specifically, small message latency is improved by up
to 10% in medium/large jobs and memory usage per host is reduced by
as much as 300%. In addition, Open MPI provides predictable latency
that is close to optimal without sacrificing bandwidth performance.";

$files[] = "ipdps-2006-openmpi-ib-scalability.ps";
$files[] = "ipdps-2006-openmpi-ib-scalability.pdf";

$month = 4;
$day = 25;
$year = 2006;

$bibtex = "@inproceedings{shipman06:_infin_scalab_open_mpi,
   author =   {Galen M. Shipman and Tim S. Woodall and Rich L. Graham and Arthur B. Maccabe and Patrick G. Bridges},
   title =   {InfiniBand Scalability in Open MPI},
   booktitle =   {Proceedings of IEEE Parallel and Distributed Processing Symposium},
   year =   2006,
   month = {April},
   location = {Rhodes Island, Greece},
}";

