<?php

$title = "Evaluating Sparse Data Storage Techniques for MPI Groups and
Communicators";
$overview = "This paper evaluates various storage formats for groups and communicators for minimizing the memory footprint of MPI applications.";

$authors = "Mohamad Chaarawi, Edgar Gabriel";

$abstract = "In this paper we explore various sparse data storage
techniques in order to reduce the amount of memory required for MPI
groups and communicators. The idea behind the approach is to exploit
similarities between the objects and thus store only the difference
between the original process group and the resulting one. For each
technique, we detail the memory saved compared to the currently used
implementations, and present a runtime decision routine capable of
choosing dynamically the most efficient technique for each
scenario. Furthermore, we evaluate the performance impact of the new
structures using point-to-point benchmarks as well as an application
scenario over InfiniBand, Myrinet and Gigabit Ethernet networks.";

$presented = "<a href=\"http://www.iccs-meeting.org/iccs2008/\">" .  "International Conference
on Computational Science</a>, on June 24, 2008, in Cracow, Poland.";

$files[] = "iccs-2008.pdf";

$month = 6;
$day = 24;
$year = 2008;

$bibtex = "@InProceedings{chaarawi08:sparsegroups,
 author = {Mohamad Chaarawi and Edgar Gabriel},
 title  = {Evaluating Sparse Data Storage Techniques for {MPI} Groups and Communicators},
 booktitle = {Proceedings of the International Conference on Computational Science},
 volume    = {1},
 pages     = {297--306},
 year      = {2008},
 month     = {June},
 address   = {Cracow, Poland},
}";
