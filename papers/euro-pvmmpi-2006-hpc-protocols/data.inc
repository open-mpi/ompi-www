<?php 
$title = "High Performance RDMA Protocols in HPC";
$overview = "An overview of Open MPI's RDMA-based point-to-point messaging layer (PML).";

$authors = "Galen Mark Shipman, Tim S. Woodall, George Bosilca, 
Rich L. Graham, Arthur B. Maccabe";

$abstract = "Modern network communication libraries that leverage 
Remote Directory Memory Access (RDMA) and OS bypass protocols, such as
Infiniband and Myrinet can offer significant performance advantages
over conventional send/receive protocols. However, this performance
often comes with hidden per buffer setup costs.  This paper describes
a unique long-message MPI library \"pipeline\" protocol that addresses
these constraints while avoiding some of the pitfalls of existing
techniques. By using portable send/receive semantics to hide the cost
of initializing the pipeline algorithm, and then effectively
overlapping the cost of memory registration with RDMA operations, this
protocol provides very good performance for any large-memory usage
pattern. This approach avoids the use of non-portable memory hooks or
keeping registered memory from being returned to the OS. Through this
approach, bandwidth may be increased up to 67% when memory buffers are
not effectively reused while providing superior performance in the
effective bandwidth benchmark.  Several user level protocols are
explored using Open MPI's PML (Point to point messaging layer) and
compared/contrasted to this \"pipeline\" protocol.";

$presented = "Euro PVM/MPI 2006, September, 2006, in Bonn, Germany.";

$files[] = "euro-pvmmpi-2006-hpc-protocols.pdf";

$month = 9;
$day = 18;
$year = 2006;

$bibtex = "@inproceedings{shipman06:_high_perf_rdma_protocols,
  authors =      {Galen Mark Shipman and Tim S. Woodall and George Bosilca andRich L. Graham and Arthur B. Maccabe},
  title =        {High Performance {RDMA} Protocols in {HPC}},
  booktitle =    {Proceedings, 13th European PVM/MPI Users' Group Meeting},
  address =      {Bonn, Germany},
  publisher =    {Springer-Verlag},
  series =       {Lecture Notes in Computer Science},
  month =        {September},
  year =         {2006},
}";
