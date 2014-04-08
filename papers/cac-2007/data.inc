<?php
$title = "A practically constant-time MPI Broadcast Algorithm for large-scale InfiniBand Clusters with Multicast";
$overview = "A reliable multicast-based broadcast algorithm for InfiniBand.";

$authors = "T. Hoefler and C. Siebert and W. Rehm";

$abstract = "An efficient implementation of the MPI_BCAST operation 
is crucial for many parallel scientific applications. The hardware
multicast operation seems to be applicable to switch-based InfiniBand
cluster systems.  Several approaches have been implemented so far,
however there has been no production-ready code available yet. This
makes optimal algorithms to a subject of active research. Some
problems still need to be solved in order to bridge the semantic gap
between the unreliable multicast and MPI_BCAST. The biggest of those
problems is to ensure the reliable data transmission in a scalable
way. Acknowledgement-based methods that scale logarithmically with the
number of participating MPI processes exist, but they do not meet the
supernormal demand of high-performance computing. We propose a new
algorithm that performs the MPI_BCAST operation in a practically
constant time, independent of the communicator size. This method is
well suited for large communicators and (especially) small messages
due to its good scaling and its ability to prevent parallel process
skew. We implemented our algorithm as a collective component for the
Open~MPI framework using native InfiniBand multicast and we show its
scalability on a cluster with 116 compute nodes, where it saves up to
41\% MPI_BCAST latency in comparison to the \"TUNED\" Open MPI
collective.";

$presented = "<a href=\"http://www.c3.lanl.gov/cac2007/\">".
"Workshop on Communication Architectures for Clusters</a> at the " .
"<a href=\"http://www.ipdps.org/ipdps2007/\">" . "International
Parallel and Distributed Processing Symposium (IPDPS 2007)</a>, on
March 26, 2007, in Long Beach, California, USA.";

$files[] = "cac-2007.pdf";

$month = 3;
$day = 26;
$year = 2007;

$bibtex = "@article{hoefler-cac07,
  author={T. Hoefler and C. Siebert and W. Rehm},
  title={{A practically constant-time MPI Broadcast Algorithm for large-scale InfiniBand Clusters with Multicast}},
  institution={TU Chemnitz},
  year={2007},
  month={03},
  pages={232},
  booktitle={Proceedings of the 21st IEEE International Parallel & Distributed Processing Symposium},
  location={Long Beach, CA, USA},
  publisher={IEEE Computer Society},
  isbn={1-4244-0909-8},
  url={./img/hoefler-cac07.pdf},
  source={http://www.unixer.de/~htor/publications/},
}";
