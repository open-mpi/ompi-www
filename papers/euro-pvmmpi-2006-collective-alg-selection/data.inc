<?php 
$title = "MPI Collective Algorithm Selection and Quadtree Encoding";
$overview = "Methods of selection of the \"best\" collective algorithms at run-time.";

$authors = "Jelena Pjesivac-Grbovic, Graham E. Fagg, Thara Angskun, 
George Bosilca, Jack J. Dongarra";

$abstract ="Selecting the close-to-optimal collective algorithm based 
on the parameters of the collective call at run time is an important
step in achieving good performance of MPI applications. In this paper,
we focus on MPI collective algorithm selection process and explore the
applicability of the quadtree encoding method to this problem. We
construct quadtrees with different properties from the measured
algorithm performance data and analyze the quality and performance of
decision functions generated from these trees. The experimental data
shows that in some cases, the decision function based on a quadtree
structure with a mean depth of 3 can incur as little as a 5%
performance penalty on average. The exact, experimentally measured,
decision function for all tested collectives could be fully
represented using quadtrees with a maximum of 6 levels. These results
indicate that quadtrees may be a feasible choice for both processing
of the performance data and automatic decision function generation.";

$presented = "<a href=\"http://www.pvmmpi06.org\">" . 
"Euro PVM/MPI 2006</a>, September, 2006, in Bonn, Germany.";

$files[] = "euro-pvmmpi-2006-collective-alg-selection.pdf";

$month = 9;
$day = 18;
$year = 2006;

$bibtex = "@InProceedings{pjesivac-grbovic:europvmmpi06,
   author =    {Jelena Pje\v{s}ivac-Grbovi\'{c} and Graham E. Fagg and Thara Angskun and George Bosilca and Jack J. Dongarra},
   title =     {MPI Collective Algorithm Selection and Quadtree Encoding},
   booktitle = {In Proceedings, 13th European PVM/MPI Users' Group Meeting},
   year =      {2006},
   address =   {Bonn, Germany},
   month =     {September},
}";
