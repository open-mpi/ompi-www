<?php 
$title = "OMPIO: A Modular Software Architecture for MPI I/O";
$overview = "Presents the architecture of the Open MPI parallel I/O subsystem";

$authors = "Mohamad Chaarawi, Edgar Gabriel, Rainer Keller, Richard L. Graham,
George Bosilca and Jack J. Dongarra";

$abstract = "I/O is probably the most limiting factor on high-end machines 
for large scale parallel applications as of today. This paper introduces
OMPIO, a new parallel I/O architecture for Open MPI. OMPIO
provides a highly modular approach to parallel I/O by separating I/O
functionality into smaller units (frameworks) and an arbitrary number
of modules in each framework. Furthermore, each framework has a cus-
tomized selection criteria that determines which module to use depending
on the functionality of the framework as well as external parameters.";

$presented = "Euro MPI 2011, September, 2011, in Santorini, Greeece";

$files[] = "euro-mpi-2011-ompio.pdf";

$month = 9;
$day = 17;
$year = 2011;

$bibtex = "@InProceedings{chaarawi11:_ompio_,
  author       = {Mohamad Chaarawi and Edgar Gabriel and Rainer Keller and
  	       	  Richard L. Graham and George Bosilca and Jack J. Dongarra},
  title        = {{OMPIO}: A Modular Software Architecture for {MPI I/O}},
  booktitle    = {Proceedings, 18th European MPI Users' Group
                  Meeting},
  year         = 2011,
  address      = {Santorini, Greece},
  pages        = {81--89},
  month        = {September}
}";
