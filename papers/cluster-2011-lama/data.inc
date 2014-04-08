<?php
$title = "Locality-Aware Parallel Process Mapping for Multi-Core HPC Systems";

$overview = "Locality-Aware Parallel Process Mapping for Multi-Core HPC Systems";

$presented = "<a href=\"http://www.ieeecluster.org/\">" .
"IEEE Cluster '11</a>, September 26th - September 30th, 2011, Austin, Texas, USA.";

$authors = "Joshua Hursey, Jeffrey M. Squyres, Terry Dontje";

$abstract = "High Performance Computing (HPC) systems are composed of servers containing an ever-increasing number of cores. With such high processor core counts, non-uniform memory access (NUMA) architectures are almost universally used to reduce inter-processor and memory communication bottlenecks by distributing processors and memory throughout a server-internal networking topology. Application studies have shown that the tuning of processes placement in a server's NUMA networking topology to the application can have a dramatic impact on performance. The performance implications are magnified when running a parallel job across multiple server nodes, especially with large scale HPC applications.
<br>
This paper presents the Locality-Aware Mapping Algorithm (LAMA) for distributing the individual processes of a parallel application across processing resources in an HPC system, paying particular attention to the internal server NUMA topologies. The algorithm is able to support both homogeneous and heterogeneous hardware systems, and dynamically adapts to the available hardware and user-specified process layout at run-time. As implemented in Open MPI, the LAMA provides 362,880 mapping permutations and is able to naturally scale out to additional hardware resources as they become available in future architectures.";

/*$files[] = "cluster-2011-lama.pdf";*/

$month = 9;
$day = 27;
$year = 2011;

$bibtex = "@InProceedings{hursey11lama_poster,
  author = {Joshua Hursey and Jeffrey M. Squyres and Terry Dontje},
  title = {Locality-Aware Parallel Process Mapping for Multi-Core {HPC} Systems},
  booktitle = {IEEE International Conference on Cluster Computing},
  year =         2011,
  address = {Austin, TX},
  month =        {September},
  Note = {(Poster)}
}";
