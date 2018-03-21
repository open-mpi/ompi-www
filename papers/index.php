<?php // -*- php -*-

$topdir = "..";
$title = "Open MPI Slides and Presentations";

include_once("$topdir/includes/header.inc");
include_once("$topdir/papers/papers.inc");

?>

<!------------------------------------------------------------------------->

<P>If you are looking for a general-purpose Open MPI citation, please
use the following:</P>

<dl>
<dd><b>Open MPI: Goals, Concept, and Design of a Next Generation MPI
Implementation</b>.  Edgar Gabriel, Graham E. Fagg, George Bosilca,
Thara Angskun, Jack J. Dongarra, Jeffrey M. Squyres, Vishal Sahay,
Prabhanjan Kambadur, Brian Barrett, Andrew Lumsdaine, Ralph
H. Castain, David J. Daniel, Richard L. Graham, and Timothy
S. Woodall.  In <em>Proceedings, 11th European PVM/MPI Users' Group
Meeting</em>, Budapest, Hungary, September 2004.  [<a
href="euro-pvmmpi-2004-overview/euro-pvmmpi-2004-overview.pdf">pdf</a>]
[<a
href="euro-pvmmpi-2004-overview/euro-pvmmpi-2004-overview.ps">ps</a>]
[<a href="euro-pvmmpi-2004-overview/">bibtex</a>]
</dd>
</dl>

<P>If you are looking for a general-purpose Hwloc citation, please use
the following:</P>

<dl>
<dd><b>hwloc: a Generic Framework for Managing Hardware Affinities in
HPC Applications.</b> François Broquedis, Jérôme Clet-Ortega,
Stéphanie Moreaud, Nathalie Furmento, Brice Goglin, Guillaume
Mercier, Samuel Thibault, and Raymond Namyst.  In <em>Proceedings of
the 18th Euromicro International Conference on Parallel, Distributed
and Network-Based Processing (PDP2010)</em>, Pisa, Italia, February
2010.  IEEE Computer Society Press.  <a
href="https://hal.inria.fr/inria-00429889">https://hal.inria.fr/inria-00429889</a>
[<a href="pdp-2010/hwloc-pdp-2010.pdf">pdf</a>]
[<a href="pdp-2010/">bibtex</a>]</p>
</dd>
</dl>

<p>If you are looking for general-purpose MTT citation, please use the
following:</p>

<dl>
<dd><b>An Extensible Framework for Distributed Testing of MPI
Implementations (2007).</b> Hursey J., Mallove E., Squyres J.M.,
Lumsdaine A In <em>Recent Advances in Parallel Virtual Machine and
Message Passing Interface.</em> EuroPVM/MPI 2007. Lecture Notes in
Computer Science, vol 4757. Springer, Berlin, Heidelberg.  <a
href="https://doi.org/10.1007/978-3-540-75416-9_15">https://doi.org/10.1007/978-3-540-75416-9_15</a>
[<a href="euro-pvmmpi-2007-mtt/euro-pvmmpi-2007-mtt.pdf">pdf</a>]
[<a href="euro-pvmmpi-2007-mtt/">bibtex</a>]</p>
</dd>
</dl>

<hr>

<!------------------------------------------------------------------------->

<p><B>Community Open MPI project slides, public presentations, and
general architecture papers:</B><BR>

<p><strong>2017</strong></p>
<ul>
<?php
print_papers(array("sc-2017", "sc-2017-pmix"));
?>
</ul>

<p><strong>2016</strong></p>
<ul>
<?php
print_papers(array("sc-2016", "sc-2016-pmix"));
?>
</ul>

<p><strong>2015</strong></p>
<ul>
<?php
print_papers(array("sc-2015",
                   "sc-2015-pmix",
                   "versioning-update-2015"));
?>
</ul>

<p><strong>2014</strong></p>
<UL>
<?php
print_papers(array("sc-2014"
		   ));
?>
</UL>

<p><strong>2013</strong></p>
<UL>
<?php
print_papers(array("sc-2013"
		   ));
?>
</UL>

<p><strong>2012</strong></p>
<UL>
<?php
print_papers(array("sc-2012",
		   "aosa-vol-2"
		   ));
?>
</UL>

<p><strong>2011</strong></p>
<UL>
<?php
print_papers(array("sc-2011",
		   "euro-mpi-2011-ompio"
                   ));
?>
</UL>

<p><strong>2010</strong></p>
<UL>
<?php
print_papers(array("sc-2010",
                   ));
?>
</UL>

<p><strong>2009</strong></p>
<UL>
<?php
print_papers(array("sc-2009",
                   ));
?>
</UL>

<p><strong>2008</strong></p>
<UL>
<?php
print_papers(array("sc-2008",
	           ));
?>
</UL>

<p><strong>2007</strong></p>
<UL>
<?php
print_papers(array("euro-pvmmpi-2007-mtt",
		   "isc-2007",
                   "kicc-2007"));
?>
</UL>

<p><strong>2006</strong></p>
<UL>
<?php
print_papers(array("sc-2006",
	           "euro-pvmmpi-2006-hpc-protocols",
                   "workshop-2006"));
?>
</UL>

<p><strong>2005</strong></p>
<UL>
<?php
print_papers(array("sc-2005",
                   "euro-pvmmpi-2005-orte",
                   "ppam-2005",
		   ));
?>
</UL>

<p><strong>2004</strong></p>
<UL>
<?php
print_papers(array("euro-pvmmpi-2004-overview",
                   "ics-2004"));
?>
<UL>

<?php
include_once("$topdir/includes/footer.inc");
