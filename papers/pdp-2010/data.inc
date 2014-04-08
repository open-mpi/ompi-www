<?php
$title = "hwloc: a Generic Framework for Managing Hardware Affinities in HPC Applications";
$overview = "Analysis, description, and results of using hardware affinity using the hwloc software package.";

$authors = "Fran&ccedil;ois Broquedis,
J&eacute;r&ocirc;me Clet-Ortega,
St&eacute;phanie Moreaud,
Nathalie Furmento,
Brice Goglin,
Guillaume Mercier,
Samuel Thibault, and
Raymond Namyst.";

$abstract = "The increasing numbers of cores, shared caches and memory
nodes within machines introduces a complex hardware
topology. High-performance computing applications now have to
carefully adapt their placement and behavior according to the
underlying hierarchy of hardware resources and their software
affinities. We introduce the Hardware Locality (hwloc) software
which gathers hardware information about processors, caches, memory
nodes and more, and exposes it to applications and runtime systems in
a abstracted and portable hierarchical manner. hwloc may significantly
help performance by having runtime systems place their tasks or adapt
their communication strategies depending on hardware affinities. We
show that hwloc can already be used by popular high-performance
OpenMP or MPI software. Indeed, scheduling OpenMP threads
according to their affinities or placing MPI processes according to
their communication patterns shows interesting performance improvement
thanks to hwloc. An optimized MPI communication strategy may also
be dynamically chosen according to the location of the communicating
processes in the machine and its hardware characteristics.";

$presented = "<a href=\"http://hal.inria.fr/INRIA/inria-00429889/fr/\">" .
"The 18th Euromicro International Conference on Parallel, Distributed
and Network-Based Computing</a> on February 17, 2010, in Garching, Germany.";

$files[] = "hwloc-pdp-2010.pdf";

$month = 2;
$day = 17;
$year = 2010;

$bibtex = "%% inria-00429889, version 1
%% http://hal.inria.fr/inria-00429889/en/
@inproceedings{BROQUEDIS:2010:INRIA-00429889:1,
	title = { hwloc: a {G}eneric {F}ramework for {M}anaging
            {H}ardware {A}ffinities in {HPC} {A}pplications},
	author = {{B}roquedis, {F}ran{\c{c}}ois and {C}let-{O}rtega,
            {J}{\'e}r{\^o}me and {M}oreaud, {S}t{\'e}phanie and
            {F}urmento, {N}athalie and {G}oglin, {B}rice and {M}ercier,
            {G}uillaume and {T}hibault, {S}amuel and {N}amyst, {R}aymond},
	language = {{A}nglais}, affiliation = {{L}aboratoire
            {B}ordelais de {R}echerche en {I}nformatique - {L}a{BRI} -
            {CNRS} : {UMR}5800 - {U}niversit{\'e} {S}ciences et
            {T}echnologies - {B}ordeaux {I} - {E}cole {N}ationale
            {S}up{\'e}rieure d'{E}lectronique, {I}nformatique et
            {R}adiocommunications de {B}ordeaux - {U}niversit{\'e}
            {V}ictor {S}egalen - {B}ordeaux {II} - {RUNTIME} - {INRIA}
            {B}ordeaux - {S}ud-{O}uest - {INRIA} - {CNRS} : {UMR}5800 -
            {U}niversit{\'e} {S}ciences et {T}echnologies - {B}ordeaux {I}
            - {E}cole {N}ationale {S}up{\'e}rieure d'{E}lectronique,
            {I}nformatique et {R}adiocommunications de {B}ordeaux },
	booktitle = {{PDP} 2010 - {T}he 18th {E}uromicro
            {I}nternational {C}onference on {P}arallel, {D}istributed and
            {N}etwork-{B}ased {C}omputing },
	address = {{P}isa {I}talie },
	editor = {{IEEE} },
	audience = {internationale },
	day = {17},
	month = {02},
	year = {2010},
	URL = {http://hal.inria.fr/inria-00429889/en/},
}";

