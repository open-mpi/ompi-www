<?php
$title = "X-SRQ - Improving Scalability and Performance of Multi-Core InfiniBand Clusters";

$overview = "Using XRC - new transport protocol based on B-SRQ";

$presented = "<a href=\"http://pvmmpi08.ucd.ie/\">" .
"EuroPVM/MPI '08</a>, September 7th - September 10th, 2009, Dublin,
Ireland.";

$authors = "Galen M. Shipman, Stephen Poole, Pavel Shamis, and Ishai Rabinovitz";

$abstract = "X-SRQ is a new transport protocol in Open MPI based on B-SRQ which
takes advantage of this improvement in connection scalability. This paper
introduces the X-SRQ protocol and details the significantly improved
scalability of the protocol over B-SRQ and its reduction of the memory
footprint of connection state by as much as 2 orders of magnitude on
large scale multi-core systems. In addition to improving scalability, performance
of latency-sensitive collective operations are improved by up to
38% while significantly decreasing the variability of results.";

$files[] = "euro-pvmmpi-2008-xrc.pdf";

$month = 9;
$day = 7;
$year = 2008;

$bibtex = "@InProceedings{shipman08a,
  author =	{Galen M. Shipman, Stephen Poole, Pavel Shamis, and Ishai Rabinovitz},
  title =       {X-SRQ - Improving Scalability and Performance of Multi-Core InfiniBand Clusters},
  booktitle =   {Proceedings, Euro PVM/MPI},
  year =        2008,
  address =     {Dublin, Ireland},
  month =       {September}
}";
