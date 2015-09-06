<?php
$topdir = "../..";
$title = "Portable Hardware Locality (hwloc)";
include_once("$topdir/software/hwloc/current/version.inc");
include_once("$topdir/projects/hwloc/nav.inc");
include_once("$topdir/includes/header.inc");
include_once("$topdir/includes/news.inc");
include_once("$topdir/includes/code.inc");
?>

<div style="float: right; padding-left: 6px">
 <a href="devel09-pci.png">
  <img src="devel09-pci.png" width="405px" alt="Sample hwloc output">
</a></div>

<div style="float: right; clear: both"><!-- "clear: both" prevents news from going near the float image above -->
<?php
# Lists are not mirrored - use an absolute URL
news("hwloc v1.11.0 published",
     "New feature release",
     "http://www.open-mpi.org/community/lists/hwloc-announce/2015/06/0078.php");
news("The Best of lstopo published",
     "Best lstopo graphical outputs",
     "lstopo");
//news("hwloc v1.10.1 released",
//     "New stable release",
//     "http://www.open-mpi.org/community/lists/hwloc-announce/2015/01/0075.php");
news("Network Locality (netloc)",
     "New hwloc companion",
     "http://blogs.cisco.com/performance/the-network-locality-project-netloc/");
//news("hwloc tutorial material",
//     "Slides and code available",
//     "$topdir/projects/hwloc/tutorials");
?>
</div>

<p> The Portable Hardware Locality (hwloc) software package provides a
portable abstraction (across OS, versions, architectures, ...)  of the
hierarchical topology of modern architectures, including NUMA memory
nodes, sockets, shared caches, cores and simultaneous
multithreading. It also gathers various system attributes such as
cache and memory information as well as the locality of I/O devices
such as network interfaces, InfiniBand HCAs or GPUs.
It primarily aims at helping
applications with gathering information about modern computing
hardware so as to exploit it accordingly and efficiently.</p>

<p> The democratization of multicore processors and NUMA architectures
leads to the spreading of complex hardware topologies into the whole server world.
Nodaways every single cluster node may contain tens of cores, hierarchical caches,
and multiple memory nodes, making its topology far from flat.
Such complex and hierarchical topologies have strong impact of the application performance.
The developer must take hardware affinities into account when trying to exploit
the actual hardware performance. For instance, two tasks that tightly cooperate
should probably rather be placed onto cores sharing a cache.
However, two independent memory-intensive tasks should better be spread out
onto different sockets so as to maximize their memory throughput.
As described in <a href="http://hal.inria.fr/inria-00496295">this paper</a>,
OpenMP threads have to be placed according to their affinities and to the
hardware characteristics.
MPI implementations apply similar techniques while also adapting their
communication strategies to the network locality as described in
<a href="http://hal.inria.fr/inria-00486178">this paper</a>
or <a href="http://hal.inria.fr/inria-00566246">this one</a>.
</p>


<!------------------------------------------------------------------------->

<h3>Portability and support</h3>

<p> hwloc supports the following operating systems:</p>

<p><ul>
<li>Linux (including old kernels not having sysfs topology
information, with knowledge of cgroups, offline CPUs, ScaleMP vSMP,
and NumaScale NumaConnect) on all supported hardware,
including Intel Xeon Phi.</li>
<li>Solaris</li>
<li>AIX</li>
<li>Darwin / OS X</li>
<li>FreeBSD and its variants (such as kFreeBSD/GNU)</li>
<li>NetBSD</li>
<li>OSF/1 (a.k.a., Tru64)</li>
<li>HP-UX</li>
<li>Microsoft Windows (either using MinGW or a native Visual Studio solution)</li>
<li>IBM BlueGene/Q Compute Node Kernel (CNK)</li>
</ul></p>

<p>Additionally hwloc can detect the locality PCI devices as well as OpenCL,
CUDA and Xeon Phi accelerators, network and InfiniBand interfaces,
etc.
See the <a href="lstopo">Best of lstopo</a> for more examples of supported platforms.</p>

<p>Since it uses standard Operating System information, hwloc's support is
almost always independent from the processor type (x86, powerpc, ia64, ...),
and just relies on the Operating System support. Whenever the OS does not
support topology information (e.g. some BSDs), hwloc uses an x86-only
CPUID-based backend.</p>

<p>To check whether hwloc works on a particular machine, just try to build
it and run <tt>lstopo</tt> or <tt>lstopo-no-graphics</tt>.
If some things do not look right (e.g. bogus or
missing cache information), see Questions and bugs below</p>

<p> hwloc may display the topology in multiple convenient formats (see
<a href="doc/v<?php print($ver_current); ?>/#cli_examples">v<?php
print($ver_current); ?> examples</a> and the <a href="lstopo">Best of lstopo</a>).
It also offers a powerful programming interface to gather information
about the hardware, bind processes, and much more.</p>

<!------------------------------------------------------------------------->

<h3>Documentation</h3>

<p> More details are available in the <a href="doc/">Documentation</a>
(in both PDF and HTML).  The documentation for each version contains
<a href="doc/v<?php print($ver_current); ?>/#cli_examples">examples of
outputs</a> and an <a href="doc/v<?php print($ver_current);
?>/#interface">API interface example</a> (these links are for v<?php
print($ver_current); ?>).</p>

<p>The materials from several hwloc tutorials is
<a href="<?php print "$topdir/projects/hwloc/tutorials" ?>">available online</a>.
</p>

<!------------------------------------------------------------------------->

<h3>Getting and using hwloc</h3>

<p> The latest hwloc releases are available on the
<a href="../../software/hwloc/<?php print($ver_current_dir); ?>/">download page</a>.
The GIT repository is also accessible for
<a href="https://github.com/open-mpi/hwloc">online browsing</a>
or <a href="git.php">checkout</a>.
</p>

<p>hwloc is already available as official packages for many Linux distributions
(at least Debian, Ubuntu, ArchLinux, Fedora, RHEL),
as well as Cygwin and Mac OS X ports.
</p>

<p>
Perl bindings are available from Bernd Kallies
<a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/">on CPAN</a>.
<br />
Python bindings are available from Guy Streeter
as <a href="http://people.redhat.com/streeter/">Fedora RPM and tarball</a>
or within their <a href="git://git.fedorahosted.org/python-hwloc.git">git tree</a>
(<a href="http://git.fedorahosted.org/git/python-hwloc.git">html</a>).
</p>

<p> The following software already benefit from hwloc or are being
ported to it:<ul>
<li>MPI implementations and tools</li><ul>
 <li><a href="http://www.open-mpi.org">Open MPI</a></li>
 <li>The <a
 href="http://www.mpich.org">MPICH</a>
 process launcher Hydra</li>
 <li><a href="http://mvapich.cse.ohio-state.edu/">MVAPICH2</a></li>
 <li>The parallel job inspector <a
 href="http://padb.pittman.org.uk/">Padb</a></li>
</ul>
<li>Runtime systems and compilers</li><ul>
 <li>Cray's <a href="http://chapel.cray.com/">Chapel Parallel Programming Language</a></li>
 <li>The <a href="http://runtime.bordeaux.inria.fr/StarPU">StarPU</a>
 runtime system for heterogeneous multicore architectures</li>
 <li>The <a href="http://icl.cs.utk.edu/parsec">Parallel Runtime Scheduling and Execution Controller (PaRSEC)</a> project</li>
 <li>The <a href="http://stellar.cct.lsu.edu/projects/hpx/">High Performance ParalleX (HPX)</a> runtime system</li>
 <li>The <a href="http://www.cs.sandia.gov/qthreads/">Qthreads</a> project</li>
 <li>The <a href="http://www.rosecompiler.org/">Rose compiler</a></li>
 <li>The <a href="http://portablecl.org/">Portable Computing Language (POCL)</a></li>
 <li>The former <a href="http://runtime.bordeaux.inria.fr/forestgomp">ForestGOMP</a> OpenMP platform for hierarchical architectures</li>
</ul>
<li>Parallel scientific libraries and toolkits</li><ul>
 <li>The <a href="http://www.cp2k.org/">CP2K</a> quantum chemistry and solid state physics software package</li>
 <li>The <a href="http://www.feelpp.org/">Feel++</a> library for partial differential equations</li>
 <li>The <a href="http://pastix.gforge.inria.fr/">Parallel Sparse matriX (PaStiX)</a> package</li>
 <li>The <a href="http://icl.cs.utk.edu/plasma/">Parallel Linear Algebra for Scalable Multi-core Architectures (PLASMA)</a> project</li>
 <li>The <a href="http://www.mcs.anl.gov/petsc">Portable Extensible Toolkit for Scientific Computation (PETSc)</a></li>
</ul>
<li>Resource manager and job schedulers</li><ul>
 <li>The <a href="http://gridscheduler.sourceforge.net/">Open Grid Scheduler</a></li>
 <li>The <a href="http://www.adaptivecomputing.com/products/open-source/torque/">TORQUE resource manager</a></li>
 <li>Univa <a href="http://www.univa.com/products/grid-engine">Grid Engine</a></li>
 <li>The <a href="http://arc.liv.ac.uk/trac/SGE/">Son of Grid Engine</a> project</li>
 <li>Altair's <a href="http://www.pbsworks.com/Product.aspx?id=1">PBS Professional</a> solution (part of PBS Works)</li>
</ul>
<li>and even more!</li><ul>
 <li>The interactive process viewer <a href="http://htop.sourceforge.net/">htop</a> for Linux</a></li>
 <li>Apache <a href="http://trafficserver.apache.org/">Traffic Server</a></li>
</ul></ul></p>

<!------------------------------------------------------------------------->

<h3>How do you pronounce "hwloc"?</h3>

<p> When in doubt, say "hardware locality."</p>

<p> Some of the core developers say "H. W. Loke"; others say
"H. W. Lock".  We've heard several other pronunciations as well.  We
don't really have a strong preference for <em>how</em> you say it; we
chose the name for its Google-ability, not its pronunciation.</p>

<p>  But now at least you know how <em>we</em> pronounce it.  :-)</p>

<!------------------------------------------------------------------------->

<a name=help>
<h3>Questions and bugs</h3>
</a>

<p> Questions, comments, and bugs should be sent to <a
href="../../community/lists/hwloc.php">hwloc mailing lists</a>.  When
appropriate, please attach the <tt>/proc</tt> + <tt>/sys</tt> tarball
generated by the installed script <tt>hwloc-gather-topology</tt> when
submitting problems about Linux, or send the
output of <tt>kstat cpu_info</tt> in the Solaris case, or the output
of <tt>sysctl hw</tt> in the Darwin or BSD cases.  Also make sure you
run a recent OS (e.g. Linux kernel) and possibly a recent BIOS too
since hwloc gathers topology information from them.  Passing
<tt>--enable-debug</tt> to <tt>./configure</tt> also enables a lot of
helpful debugging information.</p>

<p>Also be sure to see the
 <a href="https://github.com/open-mpi/hwloc/wiki">hwloc wiki</a>
 and <a href="https://github.com/open-mpi/hwloc/issues">bug tracking system</a>.
</p>

<!------------------------------------------------------------------------->

<h3>Publications</h3>

<p>
 If you are looking for general-purpose hwloc citations, please use the following one.
 This paper (available <a href="http://hal.inria.fr/inria-00429889">here</a>)
 introduces hwloc, its goals and its implementation.
 It then shows how hwloc may be used by MPI implementations and OpenMP
 runtime systems as a way to carefully place processes and adapt communication
 strategies to the underlying hardware.
</p>
<blockquote>
 François Broquedis, Jérôme Clet-Ortega, Stéphanie Moreaud, Nathalie Furmento, Brice Goglin, Guillaume Mercier, Samuel Thibault, and Raymond Namyst.
 <b>hwloc: a Generic Framework for Managing Hardware Affinities in HPC Applications.</b>
 In <em>Proceedings of the 18th Euromicro International Conference on Parallel, Distributed and Network-Based Processing (PDP2010)</em>,
 Pisa, Italia, February 2010.
 IEEE Computer Society Press.
</blockquote>

<p>
 If you are looking for a citation about I/O device locality and cluster/multi-node support, please use the following one instead.
 This paper (available <a href="http://hal.inria.fr/hal-00985096">here</a>)
 explains how I/O locality is managed in hwloc, how device details are represented,
 how hwloc interacts with other libraries, and how multiple nodes such as a cluster can be efficiently managed.
</p>
<blockquote>
 Brice Goglin.
 <b>Managing the Topology of Heterogeneous Cluster Nodes with Hardware Locality (hwloc).</b>
 In <em>Proceedings of 2014 International Conference on High Performance Computing & Simulation (HPCS 2014)</em>,
 Bologna, Italy, July 2014.
</blockquote>

<p>
 See also the
 <a href="http://www.open-mpi.org/papers/">Open MPI publication list</a>.
</p>

<!------------------------------------------------------------------------->

<h3>History / credits</h3>

<p>hwloc is the evolution and merger of the libtopology and
<a href="../plpa/">Portable Linux Processor Affinity (PLPA)</a> projects.
Because of functional and ideological overlap, these two code bases and ideas
were merged and released under the name "hwloc" as an Open MPI sub-project.
hwloc is now mostly developed by the TADaaM team at Inria (Bordeaux, France).
</p>

<p><a href="http://www.inria.fr/"><img align="right" hspace="10" src="<?php print($topdir); ?>/about/members/inria.jpg"></a></p>

<p>libtopology was initially developed by the Inria Runtime team-project
as a way to discover hardware affinities inside the Marcel threading library.
With the advent of multicore machines, this work became interesting for much more than multithreading.
So libtopology was extracted from Marcel and became an independent library.
</p>

<p>Portability tests are performed thanks to
the Inria <a href="https://ci.inria.fr/hwloc/">Continuous Integration</a> platform.
</p>

<?php
include_once("$topdir/includes/footer.inc");
