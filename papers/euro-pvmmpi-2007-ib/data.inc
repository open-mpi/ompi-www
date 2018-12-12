<?php
$title = "Investigations on InfiniBand: Efficient Network Buffer Utilization at Scale";

$overview = "Using multiple queue pairs and pre-posted buffer sizes to
get more efficient registered memory utilization";

$presented = "<a href=\"http://pvmmpi07.lri.fr/\">" .
"EuroPVM/MPI '07</a>, September 30th - October 3rd, 2007, Paris,
France.";

$authors = "Galen M. Shipman, Ron Brightwell, Brian Barrett, Jeffrey
M. Squyres, Gil Bloch";

$abstract = "The default messaging model for the OpenFabrics \"Verbs\"
API is to consume receive buffers in order -- regardless of the actual
incoming message size -- leading to inefficient registered memory
usage.  For example, many small messages can consume large amounts of
registered memory.  This paper introduces a new transport protocol in
Open MPI implemented using the existing OpenFabrics Verbs API that
exhibits efficient registered memory utilization.  Several real-world
applications were run at scale with the new protocol; results show
that global network resource utilization efficiency increases,
allowing increased scalability -- and larger problem sizes -- on
clusters which can increase application performance in some cases.";

$files[] = "euro-pvmmpi-2007-ib.pdf";

$month = 9;
$day = 30;
$year = 2007;

$bibtex = "@InProceedings{shipman07:_inves_infin,
  author =	{Galen M. Shipman and Ron Brightwell and Brian Barrett and Jeffrey M. Squyres and Gil Bloch},
  title =       {Investigations on InfiniBand: Efficient Network Buffer Utilization at Scale},
  booktitle =   {Proceedings, Euro PVM/MPI},
  year =        2007,
  address =     {Paris, France},
  month =       {October}
}";
