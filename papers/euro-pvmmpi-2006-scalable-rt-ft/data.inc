<?php 
$title = "Scalable Fault Tolerant Protocol for Parallel Runtime Environments";
$overview = "Robust runtime environment message passing for damaged and incomplete topologies.";

$authors = "Thara Angskun, Graham E. Fagg, George Bosilca, 
Jelena Pjesivac-Grbovic, Jack J. Dongarra";

$abstract = "The number of processors embedded on high performance 
computing platforms is growing daily to satisfy users desire for solving 
larger and more complex problems. Parallel runtime environments have 
to support and adapt to the underlying libraries and hardware which 
require a high degree of scalability in dynamic environments. This paper 
presents the design of a scalable and fault tolerant protocol for sup- 
porting parallel runtime environment communications. The protocol is 
designed to support transmission of messages across multiple nodes with 
in a self-healing topology to protect against recursive node and pro- 
cess failures. A formal protocol verification has validated the protocol 
for both the normal and failure cases. We have implemented multiple 
routing algorithms for the protocol and concluded that the variant rule- 
based routing algorithm yields the best overall results for damaged and 
incomplete topologies.";

$presented = "<a href=\"http://www.pvmmpi06.org\">" . 
"Euro PVM/MPI 2006</a>, September, 2006, in Bonn, Germany.";

$files[] = "euro-pvmmpi-2006-scalable-rt-ft.pdf";

$month = 9;
$day = 18;
$year = 2006;

$bibtex = "@inproceedings{angskun-epvm06,
  author = {Thara Angskun and Graham E. Fagg and George Bosilca and Jelena Pjesivac-Grbovic and Jack J. Dongarra},
  title = {Scalable Fault Tolerant Protocol for Parallel Runtime Environments},
  booktitle = {Proceedings, 13th European PVM/MPI Users' Group Meeting},
  address = {Bonn, Germany},
  publisher = {Springer-Verlag},
  series = {Lecture Notes in Computer Science},
  month = {September},
  year = {2006},
}";
