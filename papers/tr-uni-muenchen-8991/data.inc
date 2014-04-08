<?php

$title = "State-of-the-Art in Parallel Computing with R";

$overview = "This paper provides an overview of using MPI with R";

$authors = "Schmidberger, Markus and Morgan, Martin and Eddelbuettel,
Dirk and Yu, Hao and Tierney, Luke and Mansmann, Ulrich";

$abstract = "R is a mature open-source programming language for
statistical computing and graphics. Many areas of statistical research
are experiencing rapid growth in the size of data sets. Methodological
advances drive increased use of simulations. A common approach is to
use parallel computing. This paper presents an overview of techniques
for parallel computing with R on computer clusters, on multi-core
systems, and in grid computing. It reviews sixteen different packages,
comparing them on their state of development, the parallel technology
used, as well as on usability, acceptance, and performance. Two
packages (snow, Rmpi) stand out as particularly useful for general use
on computer clusters. Packages for grid computing are still in
development, with only one package currently available to the end
user. For multi-core systems four different packages exist, but a
number of issues pose challenges to early adopters. The paper
concludes with ideas for further developments in high performance
computing with R. Example code is available in the appendix.";

$presented = "<a href=\"http://epub.ub.uni-muenchen.de/8991/\">" .
"Technical Report, Department of Statistics, University of Munich</a>";

$files[] = "parallelR_techRep.pdf";

$month = 1;
$day = 26;
$year = 2009;

$bibtex = "@misc{epub8991,
       keyword = {R, high performance computing, parallel computing,
       computer cluster, multi-core systems, grid computing,
       benchmark.},
        volume = {47},
         month = {1},
         title = {State-of-the-Art in Parallel Computing with R},
        author = {Markus Schmidberger and Martin Morgan and Dirk
       Eddelbuettel and Hao Yu and Luke Tierney and Ulrich Mansmann},
          year = {2009},
        series = {tech},
           url = {http://epub.ub.uni-muenchen.de/8991/}
}";
