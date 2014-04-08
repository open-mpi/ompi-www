<?php

/////////////////////////////////////////////////////////////////////////

$q[] = "How many API's are there? Which one(s) should I use?";

$anchor[] = "api-general";

$a[] = "
The netloc project has four sections to its API, each listed below.
<ol>
 <li> Data Collection API
 <li> Network Metadata API
 <li> Network Topology Query
 <li> Map API
</ol>

If you are an application programmer you will probably want to focus on APIs
#2, #3, and #4. If you are interested in developing a reader for a new network
then you will want to look at API #1. 
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is the Data Collection API?";

$anchor[] = "api-data-collection";

$a[] = "
This API is used by the readers to create the netloc-common .ndat topology
files. This API can be used by other system services (e.g., resource managers,
MPI) to produce .ndat files that represent a subset of the network, or to
further annotate the network information.

Futher details can be found in the header linked below:<br>
<a href=\"https://github.com/open-mpi/netloc/blob/master/include/netloc_dc.h\">/include/netloc_dc.h</a>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is the Network Metadata API?";

$anchor[] = "api-network-metadata";

$a[] = "
This API is used by the application to access high level information about the
network types and subnets available on the system without pulling all of the
network information. An application may use this API to search for a specific
type of network or subnet, or to request information about all available
networks.

Futher details can be found in the header linked below:<br>
<a href=\"https://github.com/open-mpi/netloc/blob/master/include/netloc.h\">/include/netloc.h</a>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is the Network Topology Query API?";

$anchor[] = "api-network-topology";

$a[] = "
This API is used by the application to access specific information about nodes
and edges in a single network subnet graph.

Futher details can be found in the header linked below:<br>
<a href=\"https://github.com/open-mpi/netloc/blob/master/include/netloc.h\">/include/netloc.h</a>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "What is the Map API?";

$anchor[] = "api-map";

$a[] = "

Futher details can be found in the header linked below:<br>
<a href=\"https://github.com/open-mpi/netloc/blob/master/include/netloc_map.h\">/include/netloc_map.h</a>
";

/////////////////////////////////////////////////////////////////////////

$q[] = "Are there any example programs that I can reference to get started?";

$anchor[] = "api-examples";

$a[] = "
The netloc repository contains a few examples in the [tests] sub-directory:<br>
<a href=\"https://github.com/open-mpi/netloc/tree/master/tests\">/tests</a>

A few exemplars to get you started:
<ul>
  <li>The <a href=\"https://github.com/open-mpi/netloc/blob/master/tests/map_paths.c\">map_paths.c</a>
  test provides the path between two processors on separate servers.
  <li>The <a href=\"https://github.com/open-mpi/netloc/blob/master/tests/test_metadata.c\">test_metadata.c</a>
  demonstrates ways to use the Network Metadata API to discover sets of networks.
</ul>
";

/////////////////////////////////////////////////////////////////////////

