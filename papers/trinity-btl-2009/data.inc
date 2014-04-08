<?php

$title = "An Efficient Open MPI Transport System for Virtual Worker
Nodes"; 

$overview = "This paper discusses a shared memory Xen-based transport
for Open MPI.  It also provides a good technical description of Open
MPI's BTL plugins.";

$authors = "Timothy Hayes";

$abstract = "There is increased interest in running cluster jobs
within virtual machines to provide isolation and customised
environments. For this to be successful, it is essential that
efficient transport mechanisms are available.  In particular,
communication between virtual machines on the same physical host
should provide similar performance to that between multiple jobs
running on a single host. This project will implement a shared memory
transport for Open MPI that uses Xen features to provide low-latency
communication between virtual machines. Open MPI's failover features
will be used to automatically switch to other transport mechanisms
(e.g. Ethernet) when virtual machines are migrated so they no longer
share a physical host.";

$presented = "<a href=\"http://www.scss.tcd.ie/\">" .  "Undergraduate dissertation</a>, Trinity College, Dublin";

$files[] = "xenmpi_report.pdf";

$month = 5;
$day = 1;
$year = 2009;

$bibtex = "@misc{hayes09_ugrad_xenmpi,
  author = {Timothy Hayes},
  title = {An Effcient Open MPI Transport System for Virtual Worker Nodes},
  howpublished = {Trinity College Dublin Final Year Project},
  year = {2009},
  note = \"Undergraduate Dissertation\",
}";
