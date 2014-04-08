<?php
$title = "A Log-Scaling Fault Tolerant Agreement Algorithm for a Fault Tolerant MPI";

$overview = "A Log-Scaling Fault Tolerant Agreement Algorithm for a Fault Tolerant MPI";

$presented = "<a href=\"http://www.eurompi2011.org/\">" .
"EuroPVM/MPI '11</a>, September 18th - September 21th, 2011, Santorini, Greece.";

$authors = "Joshua Hursey, Thomas Naughton, Geoffroy Vallee, Richard L. Graham";

$abstract = "The lack of fault tolerance is becoming a limiting factor for application scalability in HPC systems. The MPI does not provide standardized fault tolerance interfaces and semantics. The MPI Forum's Fault Tolerance Working Group is proposing a collective fault tolerant agreement algorithm for the next MPI standard. Such algorithms play a central role in many fault tolerant applications, but are rarely scalable to large numbers of processes. This paper replaces the linear operations in the two-phase commit agreement algorithm with log-scaling operations. Additional error handling properties are introduced that preserve the fault tolerance properties while improving overall scalability.";

$files[] = "euro-mpi-2011-log-validate.pdf";

$month = 9;
$day = 21;
$year = 2011;

$bibtex = "@InProceedings{hursey11log_validate,
  author =   {Joshua Hursey and Thomas Naughton and Geoffroy Vallee and Richard L. Graham},
  title =    {A Log-Scaling Fault Tolerant Agreement Algorithm for a Fault Tolerant {MPI}},
  booktitle =    {{EuroMPI} 2011: Proceedings of the 18th {EuroMPI} Conference},
  year =         2011,
  address =      {Santorini, Greece},
  month =        {September},
  doi = {http://dx.doi.org/10.1007/978-3-642-24449-0_29}
}";
