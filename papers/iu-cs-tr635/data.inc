<?php
$title = "A Checkpoint and Restart Service Specification for Open MPI";

$authors = "Joshua Hursey, Jeffrey M. Squyres, Andrew Lumsdaine";

$overview = "An overview of the \"CRS\" framework and how it is used in Open MPI";

$presented = "Indiana University Computer Science tech report TR635";

$abstract = "
HPC systems are growing in both complexity and size, increasing the
opportunity for system failures. Checkpoint and restart techniques are
one of many fault tolerance techniques developed for such adverse
runtime conditions. Because of the variety of available approaches for
checkpoint and restart, HPC system libraries, such as MPI, seeking to
incorporate these techniques would benefit greatly from a portable,
extensible checkpoint and restart framework. This paper presents a
specification for such a framework in Open MPI that allows for the
integration of a variety of checkpoint/restart systems and
protocols. The modular design of the framework allows researchers to
contribute to specialized areas without requiring knowledge of the
entirety of the code base.";

$files[] = "iu-cs-tr635.pdf";

$month = 7;
$day = 8;
$year = 2006;

$bibtex = "@techreport{Hursey-Open-MPI-CRS,
  Address = {Bloomington, Indiana, USA},
  Author = {Joshua Hursey and Jeffrey M. Squyres and Andrew Lumsdaine },
  Institution = {Indiana University},
  Month = {July},
  Number = {TR635},
  Title = {A Checkpoint and Restart Service Specification for Open MPI},
  Url = {http://www.cs.indiana.edu/cgi-bin/techreports/TRNNN.cgi?trnum=TR635},
  Year = {2006}
}";

