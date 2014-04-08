<?php

$title = "An Evaluation of Open MPI's Matching Transport Layer on the
Cray XT";

$overview = "This paper describes the implementation of Open MPI on
the Cray XT.";

$presented = "<a href=\"http://pvmmpi07.lri.fr/\">" .  "EuroPVM/MPI
'07</a>, September 30th - October 3rd, 2007, Paris, France.";

$authors = "Richard L. Graham, Ron Brightwell, Brian Barrett, George
Bosilca, Jelena Pjevsivac-Grbovic";

$abstract = "Open MPI was initially designed to support a wide variety
of high-performance networks and network programming interfaces.
Recently, Open MPI was enhanced to support networks that have full
support for MPI matching semantics.  Previous Open MPI efforts focused
on networks that require the MPI library to manage message matching,
which is sub-optimal for some networks that inherently support
matching. We describes a new matching transport layer in Open MPI,
present results of micro-benchmarks and several applications on the
Cray XT platform, and compare performance of the new and the existing
transport layers, as well as the vendor-supplied implementation of
MPI.";

$files[] = "euro-pvmmpi-2007-cray-mtl.pdf";

$month = 9;
$day = 30;
$year = 2007;

$bibtex = "@InProceedings{graham07:_eval_open_mpi_mtl_cray,
author = {Richard L. Graham and Ron Brightwell and Brian Barrett and George Bosilca and  Pje\v{s}ivac-Grbovi\'{c}},
title = {An Evaluation of Open MPI's Matching Transport Layer on the Cray XT},
journal = {Recent Advantages in Parallel Virtual Machine and Message Passing Interface. 14th European PVM/MPI User's Group Meeting},
location = {Paris, France},
year = 2007,
month = {Oct}
}";
