<?php
$title = "A Case for New MPI Fortran Bindings";
$overview = "Rationale for new MPI Fortran bindings, including a specific propsal.";

$authors = "Craig E. Rasmussen, Jeffrey M. Squyres";

$abstract = "The Fortran language has evolved substantially from the
Fortran 77 bindings defined in the MPI-1 (Message Passing Interface)
standard.  Fortran 90 introduced interface blocks (among other items);
subsequently, the MPI-2 standard defined Fortran 90 bindings with
explicit Fortran interfaces to MPI routines.  In this paper, we
describe the Open MPI implementation of these two sets of Fortran
bindings and point out particular issues related to them.  In
particular, we note that strong typing of the Fortran 90 MPI
interfaces with user-choice buffers leads to an explosion of interface
declarations; each choice buffer must be expanded to all possible
combinations of Fortran type, kind, and array dimension.  Because of
this (and other reasons outlined in this paper), we propose a new set
of Fortran MPI bindings that uses the intrinsic ISO_C_BINDING module
in Fortran 2003.  These new bindings will allow MPI interfaces to be
defined in Fortran that directly invoke their corresponding MPI C
implementation routines -- no additional layer of software to marshall
parameters between Fortran and C is required.";

$presented = "Euro PVM/MPI 2005, September, 2005, in Sorrento, Italy";

$files[] = "euro-pvm-mpi-2005-fortran.pdf";

$month = 9;
$day = 18;
$year = 2005;

$bibtex = "@InProceedings{rasmussen05:_case_new_mpi_fortran_bindings,
  author       = {Craig E. Rasmussen and Jeffrey M. Squyres},
  title	       = {A Case for New MPI Fortran Bindings},
  booktitle    = {Proceedings, 12th European PVM/MPI Users' Group
                  Meeting},
  year	       = 2005,
  address      = {Sorrento, Italy},
  month	       = {September}
}";

