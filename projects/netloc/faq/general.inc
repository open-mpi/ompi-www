<?php

$q[] = "What is netloc?";

$anchor[] = "what-is-netloc";

$a[] = "
The Portable Network Locality (netloc) software package provides network
topology discovery tools, and an abstract representation of those networks
topologies for a range of network types and configurations. It is provided as a
companion to the Portable Hardware Locality (hwloc) package. These two software
packages work together to provide a comprehensive view of the HPC system
topology, spanning from the processor cores in one server to the cores in
another - including the complex network(s) in between.

Towards this end, netloc is divided into three components:

<ul>
 <li> Network topology discovery tools for each network type and discovery
 technique (called readers).
 <li> erging hwloc server topology information with that network topology
 information to produce a unified map of an entire computing system (even if
 that system includes multiple networks of different types, and servers that
 are on at least one of those networks).
 <li> A portable C API for higher-level software to query, traverse, and
 manipulate the abstract representation of the network topology and unified map
 (represented as a graph)
</ul>
 
The network topology graph not only provides information about the physical
nodes and edges in the network topology, but also information about the paths
between nodes (both physical and logical, where available). Since the type of
analysis (e.g., graph partitioning) required of this graph is often
application-specific, netloc limits the amount of analysis it performs and
leaves further analysis to higher level applications and libraries built upon
this service. Additionally, the lsnettopo CLI tool can display and export this
network topology information in a variety of formats (e.g., GraphML and GEXF
file formats) providing developers with an additional mechanism to access the
data for further analysis. 

Similar to hwloc, netloc primarily aims at helping applications with gathering
information about modern computing and networking hardware so as to exploit it
accordingly and efficiently. 
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What types of networks does netloc support?";

$anchor[] = "supported-networks";

$a[] = "
The project currently supports the following networks:
<ul>
  <li>Ethernet networks using OpenFlow
  <li>InfiniBand networks
</ul>

We are always working to support for additional networks. If there is a
particular network technology or configuration that you would like us to
support then please contact us on the development mailing list.
";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do netloc and hwloc work together?";

$anchor[] = "netloc-and-hwloc";

$a[] = "
The hwloc project provides a detailed view of the server topology from compute
cores to memory domains to PCI connected devices such as network cards. The
netloc core readers have the ability to discover the network topology from the
switches to each individual network card.

The netloc core readers themselves do not have enough information to determine
which network cards belong to the same server. By mapping the network topology
(discovered by the netloc core readers) with the hwloc server topology netloc
is able to group the network cards installed into the same server box. The
mapping joins these two topologies allowing the user to trace a path from a
processor core on one server to the cores in another through the network(s)
between them.

<a href=\"../netloc-neighborhoods-full-size.png\">
  <img src=\"../netloc-neighborhoods-small.png\" width=\"500px\">
</a>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is \"mapping\"?";

$anchor[] = "def-mapping";

$a[] = "
The netloc project uses the term \"mapping\" when we are combining the network
topology information with the server topology information. Specifically,
mapping joins together the network cards in the hwloc topologies to their
corresponding network interfaces in the netloc topology.

The mapping process also allows multiple types of and subnets within networks
to be accessed together. For example, if you have a cluster that has an
InfiniBand network and multiple Ethernet networks the mapping process will
connect these network topologies to the appropriate network cards in the server
topologies during the mapping phase. The end user can differentiate those two
networks by identifiers on their associated data structures.

<a href=\"../netloc-map-full-size.png\">
  <img src=\"../netloc-map-small.png\" width=\"500px\">
</a>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is a \"reader\"?";

$anchor[] = "def-reader";

$a[] = "
A netloc \"reader\" is a command line tool that is used to access the network
topology for a specific network type. As such there is at least one reader for
each network type. The goal of the reader is to hide the discovery mechanism
from the end user, access the topology information, and preserve that network
topology information to a network independent format. The readers use the Data
Collection API internally to save the network topology information into a
netloc specific format.
";

/////////////////////////////////////////////////////////////////////////
