<?php
$topdir = "../..";
$title = "Portable Network Locality (netloc)";
include_once("$topdir/software/netloc/current/version.inc");
include_once("$topdir/projects/netloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/news.inc");
include_once("$topdir/includes/code.inc");
?>

<div style="float: right; padding-left: 10px; padding-right: 10px">
  <a href="netloc-map-full-size.png">
    <img src="netloc-map-small.png" width="500px">
  </a>
  <br />
  <br />
  <a href="netloc-neighborhoods-full-size.png">
    <img src="netloc-neighborhoods-small.png" width="500px">
  </a>
</div>

<?php
/*
<div style="float: right; clear: both"><!-- "clear: both" prevents news from going near the float image above -->
# Lists are not mirrored - use an absolute URL
news("Network Locality announced",
     "w00t!",
     "http://www.open-mpi.org/community/lists/netloc-announce/2013/11/0001.php");
</div>
*/
?>

<p> The Portable Network Locality (netloc) software package provides
network topology discovery tools, and an abstract representation of 
those networks topologies for a range of network types and configurations.
It is provided as a companion to the <a
href="../hwloc/">Portable Hardware Locality (hwloc)</a> package. These
two software packages work together to provide a comprehensive view of
the HPC system topology, spanning from the processor cores in one
server to the cores in another – including the complex network(s) in
between.</p>

<p>Towards this end, netloc is divided into three components:<p>

<p><ol>

<li> Network topology discovery tools for each network type and 
discovery technique (called <i>readers</i>)</li>

<li>Merging hwloc server topology information with that network
topology information to produce a unified map of an entire computing
system (even if that system includes multiple networks of different
types, and servers that are on at least one of those networks).</li>

<li> A portable C API for higher-level software to query, traverse, 
and manipulate the abstract representation of the network topology
and unified map (represented as a graph)</li>

</ol></p>

<div style="float: left; padding-left: 10px; padding-right: 10px">
  <a href="netloc-design-full-size.png">
    <img src="netloc-design-small.png" width="300px">
  </a>
</div>

<p>The network topology graph not only provides information about 
the physical nodes and edges in the network topology, but also
information about the paths between nodes (both physical and logical, 
where available). Since the type of analysis (e.g., graph partitioning) 
required of this graph is often application-specific, netloc limits 
the amount of analysis it performs and leaves further analysis to 
higher level applications and libraries built upon this service. 
Additionally, the <code>lsnettopo</code> CLI tool 
can display and export this network topology information in a 
variety of formats (e.g., GraphML and GEXF file formats) providing 
developers with an additional mechanism to access the data for 
further analysis.</p>

<p> Similar to hwloc, netloc primarily aims at helping applications
with gathering information about modern computing and networking
hardware so as to exploit it accordingly and efficiently.</p>

<!------------------------------------------------------------------------->

<h3>Portability and support</h3>

<p> netloc is still in early days -- there is <em>much</em> work to be
done before it is ready for prime time.  However, netloc currently
supports InfiniBand networks and OpenFlow-managed Ethernet
networks.</p>

<p> netloc supports the following operating systems:</p>

<p><ul>
<li> Linux</li>
<li> Mac OS X</li>
</ul></p>

<!------------------------------------------------------------------------->

<h3>How do you pronounce "netloc"?</h3>

<p> When in doubt, say "network locality."</p>

<p> Some of the core developers say "Net. Loke"; others say
"Net. Lock".  We've heard several other pronunciations as well.  We
don't really have a strong preference for <em>how</em> you say it; we
chose the name for its Google-ability and similarity to hwloc, not its
pronunciation.</p>

<p>  But now at least you know how <em>we</em> pronounce it.  :-)</p>

<!------------------------------------------------------------------------->

<a name=help>
<h3>Questions and bugs</h3>
</a>

<p> Questions, comments, and bugs should be sent to <a
href="../../community/lists/netloc.php">netloc mailing lists</a>.

<p>Also be sure to see the <a
href="https://git.open-mpi.org/trac/netloc/">netloc wiki and bug tracking
system</a>.</a>

<!------------------------------------------------------------------------->

<h3>History / credits</h3>

<p>netloc is the natural evolution of the <a href="../hwloc/">hwloc
project</a>.  The authors of hwloc have long-since wanted to extend
locality information to include networking resources.  However, after
examining hwloc and the requirements needed to expose network locality
information, it was determined that netloc should be a standalone
project -- extending hwloc wouldn't be the right abstraction.  As
such, netloc <em>uses</em> hwloc, but is a new system on its own.</p>

<?php
include_once("$topdir/includes/footer.inc");
