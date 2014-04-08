<?php
$title = "Checkpoint/Restart-Enabled Parallel Debugging";

$overview = "Checkpoint/Restart-Enabled Parallel Debugging";

$presented = "<a href=\"http://www.eurompi2010.org/\">" .
"EuroPVM/MPI '10</a>, September 12th - September 15th, 2010, Stuttgart, Germany.";

$authors = "Joshua Hursey, Chris January, Mark O' Connor, Paul Hargrove, David Lecomber, Jeffrey Squyres and Andrew Lumsdaine";

$abstract = "Debugging is often the most time consuming part of software development. HPC applications prolong the debugging process by adding more processes interacting in dynamic ways for longer periods of time. Checkpoint/restart-enabled parallel debugging returns the developer to an intermediate state closer to the bug. This focuses the debugging process, saving developers considerable amounts of time, but requires parallel debuggers cooperating with MPI implementations and checkpointers. This paper presents a design specification for such a cooperative relationship. Additionally, this paper discusses the application of this design to the GDB and DDT debuggers, Open MPI, and BLCR projects.";

$files[] = "euro-mpi-2010-cr-debug.pdf";

$month = 9;
$day = 14;
$year = 2010;

$bibtex = "@InProceedings{hursey10crdebug,
  author =   {Joshua Hursey and Chris January and Mark O'Connor and Paul H. Hargrove and David Lecomber and Jeffrey M. Squyres and Andrew Lumsdaine},
  title =    {Checkpoint/Restart-Enabled Parallel Debugging},
  booktitle =    {{EuroMPI} 2010: Proceedings of the 17th {EuroMPI} Conference},
  year =         2010,
  address =      {Stuttgart, Germany},
  month =        {September}
}";
