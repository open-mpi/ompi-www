<?php 
$title = "An Interface to Support the Identification of Dynamic 
MPI 2 Processes for Scalable Parallel Debugging";
$overview = "Describes a proposed mechanism for attaching debuggers to 
MPI-2 dynamic processes.";

$authors = "Christopher L. Gottbrath, Brian Barrett, Bill Gropp, 
Ewing \"Rusty\" Lusk, Jeff Squyres";

$abstract = "This paper proposes an interface that will allow MPI 2 
dynamic programs, those using MPI SPAWN, CONNECT/ACCEPT or JOIN, to
provide information to parallel debuggers such as TotalView about the
set of processes that constitute an individual application. The
TotalView parallel debugger currently obtains information about the
identify the processes directly from the MPI library using a widely
accepted proctable interface. The existing interface does not support
MPI 2 dynamic operations. The proposed interface supports MPI 2
dynamic operations, subset debugging, and helps the parallel debugger
assign meaningful names to processes.";

$presented = "<a href=\"http://www.pvmmpi06.org\">" . 
"Euro PVM/MPI 2006</a>, September, 2006, in Bonn, Germany.";

$files[] = "euro-pvmmpi-2006-mpi2-debugging.pdf";

$month = 9;
$day = 18;
$year = 2006;

$bibtex = "@inproceedings{gottbrath06:an_interf_to_suppor,
  author =       {Christopher L. Gottbrath and Brian Barrett and Bill Gropp and Ewing \"Rusty\" Lusk and Jeff Squyres},
  title =        {An Interface to Support the Identification of Dynamic {MPI} 2 Processes for Scalable Parallel Debugging},
  booktitle =    {Proceedings, 13th European PVM/MPI Users' Group Meeting},
  address =      {Bonn, Germany},
  publisher =    {Springer-Verlag},
  series =       {Lecture Notes in Computer Science},
  month =        {September},
  year =         {2006},
}";
