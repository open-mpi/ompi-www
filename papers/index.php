<?php // -*- php -*-

$topdir = "..";
$title = "Open MPI Publications";
$lam_section = "papers";

include_once("$topdir/includes/header.inc");
include_once("$topdir/papers/papers.inc");

?>

<!------------------------------------------------------------------------->

<P>If you are looking for general-purpose Open MPI citations, please
use the following (other, more specific papers are also available):</P>

<b>Open MPI: Goals, Concept, and Design of a Next Generation MPI
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
<?php # Stupid php mode: '
?>
<!------------------------------------------------------------------------->

<p><B>Open MPI Bibliography and Papers:</B><BR>

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
		   "kcomputer-2012",
		   "mpi-java-presentation",
		   "mpi-java-spec",
		   "aosa-vol-2",
		   "cug-2012"));
?>
</UL>

<p><strong>2011</strong></p>
<UL>
<?php
print_papers(array("sc-2011",
                   "cluster-2011-lama",
                   "euro-mpi-2011-log-validate",
                   "ipdps-dpdns-2011",
                   "ipdps-hips-2011",
                   ));
?>
</UL>

<p><strong>2010</strong></p>
<UL>
<?php
print_papers(array("sc-2010",
                   "euro-mpi-2010-cr-debug",
                   "pdp-2010",
                   ));
?>
</UL>

<p><strong>2009</strong></p>
<UL>
<?php
print_papers(array("sc-2009",
                   "tr-uni-muenchen-8991",
                   "trinity-btl-2009",
                   "hpdc-2009",
                   ));
?>
</UL>

<p><strong>2008</strong></p>
<UL>
<?php
print_papers(array("sc-2008",
                   "iccs-2008",
                   "euro-pvmmpi-2008-xrc"));
?>
</UL>

<p><strong>2007</strong></p>
<UL>
<?php
print_papers(array("euro-pvmmpi-2007-mtt",
		   "euro-pvmmpi-2007-ib",
		   "euro-pvmmpi-2007-nb-coll",
		   "euro-pvmmpi-2007-cray-mtl",
                   "euro-pvmmpi-2007-onesided",
                   "parco-2007",
                   "isc-2007",
                   "cac-2007",
                   "dpdns-2007",
                   "kicc-2007"));
?>
</UL>

<p><strong>2006</strong></p>
<UL>
<?php
print_papers(array("sc-2006",
                   "heteropar-2006",
                   "dapsys-2006-self-healing-network",
                   "euro-pvmmpi-2006-app-ft",
                   "euro-pvmmpi-2006-hpc-protocols",
                   "euro-pvmmpi-2006-peruse",
                   "euro-pvmmpi-2006-mpi2-debugging",
                   "euro-pvmmpi-2006-scalable-rt-ft",
                   "euro-pvmmpi-2006-libnbc",
                   "euro-pvmmpi-2006-collective-alg-selection",
                   "iu-cs-tr635",
                   "ipdps-2006",
                   "workshop-2006"));
?>
</UL>

<p><strong>2005</strong></p>
<UL>
<?php
print_papers(array("openib-workshop-2006",
                   "kicc-2005",
                   "sc-2005",
                   "lanl-2005-red-storm",
                   "euro-pvmmpi-2005-fortran", 
                   "euro-pvmmpi-2005-mca-perf",
                   "euro-pvmmpi-2005-orte",
                   "ppam-2005",
                   "icpp-2005"));
?>
</UL>

<p><strong>2004</strong></p>
<UL>
<?php
print_papers(array("euro-pvmmpi-2004-overview", 
                   "euro-pvmmpi-2004-p2p",
                   "euro-pvmmpi-2004-p2p-perf",
                   "ics-2004"));
?>
<UL>

<?php
include_once("$topdir/includes/footer.inc"); 
