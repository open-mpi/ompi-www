<?php
$title = "Managing the Topology of Heterogeneous Cluster Nodes with Hardware Locality (hwloc)";
$overview = "How I/O locality is managed in hwloc, how device details are represented, how hwloc interacts with other libraries, and how multiple nodes such as a cluster can be efficiently managed.";

$authors = "Brice Goglin.";

$abstract = "Modern computing platforms are increasingly complex, with multiple cores, shared caches, and NUMA architectures. Parallel applications developers have to take locality into account before they can expect good efficiency on these platforms. Thus there is a strong need for a portable tool gathering and exposing this information. The Hardware Locality project (hwloc) offers a tree representation of the hardware based on the inclusion and localities of the CPU and memory resources. It is already widely used for affinity-based task placement in high performance computing. In this article we present how hwloc is extended to describe more than computing and memory resources. Indeed, I/O device locality is becoming another important aspect of locality since high performance GPUs, network or InfiniBand interfaces possess privileged access to some of the cores and memory banks. hwloc integrates this knowledge into its topology representation and offers an interoperability API to extend existing libraries such as CUDA with locality information. We also describe how hwloc now helps process managers and batch schedulers to deal with the topology of multiple cluster nodes, together with compression for better scalability up to thousands of nodes.";

$presented = "<a href=\"https://hal.inria.fr/hal-00985096\">" .
"International Conference on High Performance Computing & Simulation (HPCS 2014)</a> on July 2014, in Bologna, Italy.";

$files[] = "hpcs-2014-hwloc.pdf";

$month = 7;
$year = 2014;

$bibtex = "
@inproceedings{goglin:hal-00985096,
  TITLE = {{Managing the Topology of Heterogeneous Cluster Nodes with Hardware Locality (hwloc)}},
  AUTHOR = {Goglin, Brice},
  URL = {https://hal.inria.fr/hal-00985096},
  BOOKTITLE = {{International Conference on High Performance Computing \& Simulation (HPCS 2014)}},
  ADDRESS = {Bologna, Italy},
  PUBLISHER = {{IEEE}},
  YEAR = {2014},
  MONTH = Jul,
  KEYWORDS = {opology ; locality ; affinities ; I/O devices ; clusters ; hwloc},
  HAL_ID = {hal-00985096},
  HAL_VERSION = {v1},
}";

