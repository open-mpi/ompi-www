<?php
$title = "A Practical Approach to the Rating of Barrier Algorithms using the LogP Model and Open MPI";
$overview = "Barrier measurements and performance analysis.";

$authors = "Torsten Hoefler, Lavinio Cerquetti, Torsten Mehlan, Frank Mietke, Wolfgang Rehm";

$presented = "Workshop on Performance Evaluation of
Networks for Parallel, Cluster, and Grid Computing Systems
(PEN-PCGCS'05) at the International Converence on Parallel Processing
Workshops, June 2005, Oslo, Norway.";

$abstract = "Large-scale parallel applications performing global
synchronization may spend a significant amount of execution time
waiting for the completion of a barrier operation. Consequently,
numerous research works have focused on reducing the communication
costs of synchronization primitives. However, so far there has been no
exhaustive comparison of barrier algorithms. This paper will
investigate significant representatives of this family of algorithms
and evaluate their diverging characteristics, with the purpose of
assessing their properties within the context of a specific
scenario. The first part of this work will introduce four run time
complexity classes, to which all barrier algorithms are known to
belong. Then, the LogP model will be used to analyze the behavior and
predict the running time of a representative algorithm of each
class. As these performance predictions will be scrutinized with the
help of measurements conducted on original implementations based on
the Open MPI framework, this work will show how to leverage the
flexible component architecture of this new MPI implementation, which
has proved to be an ideal research tool.";

$files[] = "icpp-2005.pdf";

$month = 6;
$day = 14;
$year = 2005;

$bibtex = "@InProceedings{hoefleroslo05,
  author = {Torsten Hoefler and Lavinio Cerquetti and Torsten Mehlan and Frank Mietke and Wolfgang Rehm},
  title = {A Practical Approach to the Rating of Barrier Algorithms using the LogP Model and Open MPI},
  booktitle = {Proceedings of the 2005 International Conference on Parallel Processing Workshops},
  pages = \"562--569\",
  isbn = \"0-7659-2381-1\",
  year =  2005,
  month = {June}
}";

