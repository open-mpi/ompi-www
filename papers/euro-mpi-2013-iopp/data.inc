<?php 
$title = "Optimized Process Placement for Collective I/O Operations";
$overview = "Presents algorithms to optimize the process placement for
collective I/O";

$authors = "Vishwanath Venkatesan, Rakhi Anand, Edgar Gabriel, Jaspal Subhlok";

$abstract = "Mapping of MPI processes to the available resources is an
increasingly complex but important task on modern parallel systems. This paper
presents a new approach to optimize the process placement of a 
parallel application based on its I/O access pattern. The paper introduces the
SetMatch process mapping algorithm, which significantly reduces the
cost of the communication occurring in collective I/O operations. The
effectiveness of the approach has been evaluated for multiple scenarios on a
PVFS2 file system. Our results demonstrate significant improvements in the
communication time of collective I/O operations as well as improvements in the
overall application execution time with our mapping strategy. The generalized
SetMatch algorithm was the only mapping strategy that was able to
provide adequate performance for all scenarios used in this paper.";

$presented = "Euro MPI 2013, September, 2013, in Madrid, Spain.";

$files[] = "euro-mpi-2013-iopp.pdf";

$month = 9;
$day = 17;
$year = 2013;

$bibtex = "@InProceedings{venkatesan13:_iopp_,
  author       = {Vishwanath Venkatesan and Rakhi Anand and 
                  Edgar Gabriel and Jaspal Subhlok },
  title        = {Optimized Process Placement for Collective I/O Operations},
  booktitle    = {Proceedings, 20th European MPI Users' Group
                  Meeting},
  year         = 2013,
  address      = {Madrid, Spain},
  pages        = {31--36},
  month        = {September}
}";
