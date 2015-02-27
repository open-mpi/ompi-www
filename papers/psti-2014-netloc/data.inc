<?php
$title = "netloc: Towards a Comprehensive View of the HPC System Topology";
$overview = "Design of the Netloc Locality service and API for network-affinity optimization.";

$authors = "Brice Goglin,
Joshua Hursey, and
Jeff M. Squyres.";

$abstract = "The increasing complexity of High Performance Computing (HPC) server architectures and networks has made topology- and affinity-awareness a critical component of HPC application optimization. Although there is a portable mechanism for accessing the server-internal topology there is no such mechanism for accessing the network topology of modern HPC systems in an equally portable manner. The Network Locality (netloc) project provides mechanisms for portably discovering and abstractly representing the network topology of modern HPC systems. Additionally, netloc provides the ability to merge the network topology with the server-internal topologies resulting in a comprehensive map of the HPC system topology. Using a modular infrastructure, netloc provides support for a variety of network types and discovery techniques. By representing the network topology as a graph, netloc supports any network topology configuration. The netloc architecture hides the topology discovery mechanism from the application developer thus allowing them to focus on traversing and analyzing the resulting map of the HPC system topology.";

$presented = "<a href=\"https://hal.inria.fr/hal-01010599\">" .
"Fifth International Workshop on Parallel Software Tools and Tool Infrastructures (PSTI 2014)</a> on September 2014, in Minneapolis, United States.";

$files[] = "psti-2014-netloc.pdf";

$month = 9;
$year = 2014;

$bibtex = "
@inproceedings{goglin:hal-01010599,
  TITLE = {{netloc: Towards a Comprehensive View of the HPC System Topology}},
  AUTHOR = {Goglin, Brice and Hursey, Joshua and Squyres, Jeffrey M.},
  URL = {https://hal.inria.fr/hal-01010599},
  BOOKTITLE = {{Fifth International Workshop on Parallel Software Tools and Tool Infrastructures (PSTI 2014)}},
  ADDRESS = {Minneapolis, United States},
  PUBLISHER = {{IEEE}},
  YEAR = {2014},
  MONTH = Sep,
  HAL_ID = {hal-01010599},
  HAL_VERSION = {v1},
}";

