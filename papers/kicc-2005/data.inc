<?php
$title = "Implementing a Hardware-Based Barrier in Open MPI: A Case Study";
$overview = "Adding hardware-aware barriers into Open MPI.";

$presented = "Kommunikation in Clusterrechnern und
Clusterverbundsystemen 2005 Workshop (KiCC, translated to English,
\"Communication in Cluster- and Grid-Systems\") at the Chemnitzer
Informatik Berichte, November 2005, Chemnitz, Germany.";

$authors = "Torsten Hoefler, Jeffrey M. Squyres, Torsten Mehlan, Frank Mietke, 
Wolfgang Rehm";

$abstract = "Open MPI is a recent open source development project
which tries to combine features of different MPI
implementations. These features include fault tolerance, multi network
support, grid support and a component architecture which ensures
extensibility. The TUC Hardware Barrier is a special purpose low
latency barrier network based on commodity hardware. We show that the
Open MPI collective framework can easily be extended to support the
special purpose collective hardware without any changes in Open MPI
itself.";

$files[] = "kicc-2005.pdf";

$month = 11;
$day = 30;
$year = 2005;

$bibtex = "@inproceedings{hoeflerkicc05,
   author =   {Torsten Hoefler and Jeffrey M. Squyres and Torsten Mehlan and Frank Mietke and Wolfgang Rehm},
   title =   {Implementing a Hardware-Based Barrier in {O}pen {MPI}}, 
   booktitle =   {Proceedings of KiCC'05, Chemnitzer Informatik Berichte},
   isbn = {0-7659-2381-1},
   year =   2005,
   month = {November},
   location = {Chemnitz, Germany},
}";

