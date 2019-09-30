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
 <a href="lstopo.png">
  <img src="lstopo.png" width="405px" alt="Sample hwloc output">
</a></div>

<div style="float: right; clear: both"><!-- "clear: both" prevents news from going near the float image above -->
<?php
# Lists are not mirrored - use an absolute URL
news("hwloc 2.1.0rc2",
     "Major release candidate",
     "https://www.mail-archive.com/hwloc-announce@lists.open-mpi.org/msg00126.html");
news("hwloc v2.0.4 released",
     "Stable release",
     "https://www.mail-archive.com/hwloc-announce@lists.open-mpi.org/msg00124.html");
news("hwloc v1.11.13 released",
     "Ultrastable release",
     "https://www.mail-archive.com/hwloc-announce@lists.open-mpi.org/msg00123.html");
news("Upgrading to v2.0 API",
     "Guide for Porting your Code",
     "doc/v2.0.0/a00327.php");
news("The Best of lstopo",
     "Best lstopo graphical outputs",
     "lstopo");
news("Network Locality (netloc)",
     "New hwloc companion",
     "http://blogs.cisco.com/performance/the-network-locality-project-netloc/");
//news("hwloc tutorial material",
//     "Slides and code available",
//     "$topdir/projects/hwloc/tutorials");
?>
</div>

<p> The Portable Hardware Locality (hwloc) software package provides a
<b>portable abstraction</b> (across OS, versions, architectures, ...)  of the
<b>hierarchical topology of modern architectures</b>, including NUMA memory
nodes, sockets, shared caches, cores and simultaneous
multithreading. It also gathers various system attributes such as
cache and memory information as well as the locality of I/O devices
such as network interfaces, InfiniBand HCAs or GPUs.
</p>

<p>
hwloc primarily aims at helping
applications with <b>gathering information about increasingly complex
parallel computing platforms so as to exploit them accordingly and efficiently</b>.
For instance, two tasks that tightly cooperate
should probably be placed onto cores sharing a cache.
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

<p>
hwloc may also help many applications just by providing
<b>a portable CPU and memory binding API</b>
and a reliable way to
<b>find out how many cores and/or hardware threads</b> are available.
</p>

<!------------------------------------------------------------------------->

<h1>Portability and support</h1>

<p> hwloc supports the following operating systems:</p>

<p><ul>
<li>Linux (including old kernels not having sysfs topology
information, with knowledge of cgroups, offline CPUs, ScaleMP vSMP,
and NumaScale NumaConnect) on all supported hardware,
including Intel Xeon Phi.</li>
<li>Solaris, AIX and HP-UX</li>
<li>NetBSD, FreeBSD and kFreeBSD/GNU</li>
<li>Darwin / OS X</li>
<li>Microsoft Windows (either using MinGW, or Cygwin, or a native Visual Studio solution)</li>
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
<a href="doc/v<?php print($last_dir); ?>/a00312.php#cli_examples">v<?php
print($last_ver); ?> examples</a> and the <a href="lstopo">Best of lstopo</a>).
It also offers a powerful programming interface to gather information
about the hardware, bind processes, and much more.</p>

<!------------------------------------------------------------------------->

<h1>Documentation</h1>

<p> More details are available in the <a href="doc/">Documentation</a>
(in both PDF and HTML).  The documentation for each version contains
<a href="doc/v<?php print($last_dir); ?>/a00312.php#cli_examples">examples of
outputs</a> and an <a href="doc/v<?php print($last_ver);
?>/a00312.php#interface">API interface example</a> (these links are for v<?php
print($last_ver); ?>).</p>

<p>The materials from several hwloc tutorials are
<a href="<?php print "$topdir/projects/hwloc/tutorials" ?>">available online</a>.
</p>

<!------------------------------------------------------------------------->

<h1>Getting and using hwloc</h1>

<p><b>
hwloc is open-source, available under the
<a href="<?php print "$topdir/projects/hwloc/license.php" ?>">BSD license</a>.
</b></p>

<p> The latest <b>hwloc releases are available on the
<a href="../../software/hwloc/<?php print($series_dir); ?>/">download page</a>.</b>
The GIT repository is also accessible for
<a href="https://github.com/open-mpi/hwloc">online browsing</a>
or <a href="git.php">checkout</a>.
</p>

<p>hwloc is already available as official packages for many Linux distributions
(at least Debian/Ubuntu, Fedora/RHEL, SUSE, ArchLinux, Slackware, Gentoo and their derivatives),
as well as NetBSD, FreeBSD, Cygwin, Mac OS X ports, and <a href="http://hpux.connect.org.uk/hppd/hpux/">HP-UX</a>.
It is also available as EasyBuild and Spack packages.
</p>

<p>
The following langages also have dedicated bindings:
<ul>
 <li>
  <b>Julia</b> <a href="https://github.com/JuliaParallel/Hwloc.jl">on GitHub</a> (thanks to Erik Schnetter).
 </li>
 <li>
  <b>Perl</b> <a href="http://search.cpan.org/~bka/Sys-Hwloc-0.10/">on CPAN</a> (thanks to Bernd Kallies).
 </li>
 <li>
  <b>Python</b>
  as <a href="https://copr.fedorainfracloud.org/coprs/streeter/python-hwloc/">Fedora RPM and tarball</a>
  or within their <a href="https://gitlab.com/guystreeter/python-hwloc">git tree</a>
  (thanks to Guy Streeter).
 </li>
 <li>
  <b>Rust</b> <a href="https://github.com/daschl/hwloc-rs">on GitHub</a> (thanks to Michael Nitschinger).
 </li>
</ul>
</p>

<p><b>The following software already benefit from hwloc</b> or are being
ported to it:<ul>
<li>MPI implementations and tools</li><ul>
 <li><a href="https://www.open-mpi.org">Open MPI</a></li>
 <li>The <a href="http://www.mpich.org">MPICH</a> process launcher Hydra</li>
 <li><a href="http://mvapich.cse.ohio-state.edu/">MVAPICH2</a></li>
 <li>CEA and Paratools' <a href="http://mpc.hpcframework.paratools.com/">Multiprocessor Computing framework (MPC)</a></li>
 <li>The parallel job inspector <a href="http://padb.pittman.org.uk/">Padb</a></li>
 <li>TACC's <a href="https://www.tacc.utexas.edu/research-development/tacc-projects/mpi-advisor">MPI Advisor tool</a></li>
</ul>
<li>Runtime systems and compilers</li><ul>
 <li>Cray's <a href="http://chapel.cray.com/">Chapel Parallel Programming Language</a></li>
 <li>The <a href="https://legion.stanford.edu/">Legion Programming System</a></li>
 <li>The <a href="http://starpu.gforge.inria.fr/">StarPU</a> runtime system for heterogeneous multicore architectures</li>
 <li>The <a href="http://icl.cs.utk.edu/parsec">Parallel Runtime Scheduling and Execution Controller (PaRSEC)</a> project</li>
 <li>The <a href="https://pm.bsc.es/projects/nanox">Nanos++</a> runtime library for <a href="https://pm.bsc.es/ompss-bsc">OmpSs</a></li>
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
 <li>The <a href="https://bitbucket.org/icl/plasma">Parallel Linear Algebra for Scalable Multi-core Architectures (PLASMA)</a> project</li>
 <li>The <a href="http://www.mcs.anl.gov/petsc">Portable Extensible Toolkit for Scientific Computation (PETSc)</a></li>
</ul>
<li>Resource manager and job schedulers</li><ul>
 <li>The <a href="http://gridscheduler.sourceforge.net/">Open Grid Scheduler</a></li>
 <li>The <a href="http://www.adaptivecomputing.com/products/open-source/torque/">TORQUE resource manager</a></li>
 <li>Univa <a href="http://www.univa.com/products/grid-engine">Grid Engine</a></li>
 <li>The <a href="http://arc.liv.ac.uk/trac/SGE/">Son of Grid Engine</a> project</li>
 <li>Altair's <a href="http://www.pbsworks.com/Product.aspx?id=1">PBS Professional</a> solution (part of PBS Works)</li>
 <li><a href="https://www.ibm.com/us-en/marketplace/hpc-workload-management">IBM Platform LSF</a> workload management platform</li>
</ul>
<li>and even more!</li><ul>
 <li>The <a href="https://github.com/tensorflow/tensorflow">TensorFlow</a> library for numerical computation using data flow graphs</li>
 <li><a href="https://pmix.github.io/pmix/">PMI-Exascale (PMIx)</a></li>
 <li>The performance-oriented tool suite <a href="https://github.com/RRZE-HPC/likwid">LIKWID</a></li>
 <li>The interactive process viewer <a href="http://hisham.hm/htop/">htop</a> for Linux</a></li>
 <li>Apache <a href="http://trafficserver.apache.org/">Traffic Server</a></li>
 <li>The <a href="http://www.scylladb.com">Scylla</a> NoSQL server.</li>
 <li><a href="http://geopm.github.io/geopm/">Global Energy Optimization Power Management (GEOPM)</a>.</li>
 <li>The <a href="https://github.com/pwrapi/pwrapi-ref">Reference Implementation</a> of the <a href="http://powerapi.sandia.gov/">HPC Power API</a>.</li>
</ul></ul></p>

<!------------------------------------------------------------------------->

<a name=help>
<h1>Questions and bugs</h1>
</a>

<p>
Bugs should be reported in
<a href="https://github.com/open-mpi/hwloc/issues">the tracker</a>.
Opening a new issue automatically displays lots of hints about
how to debug and report issues.
</p>

<p>
See also the
<a href="https://github.com/open-mpi/hwloc/wiki/Linux-kernel-bugs">
wiki page about Linux kernel bugs</a> (or BIOS bugs) affecting locality information in hwloc.
</p>

<p>
Questions may be sent to the users or developers
<a href="http://www.open-mpi.org/community/lists/hwloc.php">mailing lists</a>.
</p>

<p>
There is also a <tt>#hwloc</tt> IRC channel on Freenode (<tt>irc.freenode.net</tt>).
</p>

<!------------------------------------------------------------------------->

<h1>Publications</h1>

<p>
 For a general-purpose hwloc citations, please use the following one.
 This paper introduces hwloc, its goals and its implementation.
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
 <a href="https://hal.inria.fr/inria-00429889">https://hal.inria.fr/inria-00429889</a>
</blockquote>

<p>
 For citing how hwloc deals with new heterogeneous memory hierarchies
 (Knights Landing's MCDRAM, high-bandwidth memory (HBM), non-volatile memory (NVDIMM), etc),
 use this paper:
</p>
<blockquote>
 Brice Goglin.
 <b>Exposing the Locality of Heterogeneous Memory Architectures to HPC Applications.</b>
 In <em>Proceedings of the First ACM International Symposium on Memory Systems (MEMSYS16)</em>,
 Washington, DC, USA, October 2016.
 <a href="https://hal.inria.fr/hal-01330194">https://hal.inria.fr/hal-01330194</a>
</blockquote>

<p>
 When discussing the overhead of topology discovery and why XML or synthetic topologies are useful, use this paper:
</p>
<blockquote>
 Brice Goglin.
 <b>On the Overhead of Topology Discovery for Locality-aware Scheduling in HPC.</b>
 In <em>Proceedings of the 25th Euromicro International Conference on Parallel, Distributed and Network-Based Processing (PDP2017)</em>,
 St Petersburg, Russia, March 2017.
 <a href="https://hal.inria.fr/hal-01402755">https://hal.inria.fr/hal-01402755</a>
</blockquote>

<p>
 About the memory footprint of hwloc and the new shmem topology API in hwloc 2.0:
</p>
<blockquote>
 Brice Goglin.
 <b>Memory Footprint of Locality Information on Many-Core Platforms.</b>
 In <em>Proceedings of the 6th Workshop on Runtime and Operating Systems for the Many-core Era (ROME 2018), held in conjunction with IPDPS</em>,
 Vancouvert, BC, Canada, May 2018.
 <a href="https://hal.inria.fr/hal-01644087">https://hal.inria.fr/hal-01644087</a>
</blockquote>

<p>
 For citing hwloc's I/O device locality and cluster/multi-node support, please use the following one instead.
 This paper explains how I/O locality is managed in hwloc, how device details are represented,
 how hwloc interacts with other libraries, and how multiple nodes such as a cluster can be efficiently managed.
</p>
<blockquote>
 Brice Goglin.
 <b>Managing the Topology of Heterogeneous Cluster Nodes with Hardware Locality (hwloc).</b>
 In <em>Proceedings of 2014 International Conference on High Performance Computing & Simulation (HPCS 2014)</em>,
 Bologna, Italy, July 2014.
 <a href="https://hal.inria.fr/hal-00985096">https://hal.inria.fr/hal-00985096</a>
</blockquote>

<p>
 For citing hwloc's hierarchical modeling of computing, memory and I/O resources as well as multi-node support,
 use this paper:
</p>
<blockquote>
 Brice Goglin.
 <b>Towards the Structural Modeling of the Topology of next-generation heterogeneous cluster Nodes with hwloc.</b>
 Inria, November 2016.
 <a href="https://hal.inria.fr/hal-01400264">https://hal.inria.fr/hal-01400264</a>
</blockquote>

<!------------------------------------------------------------------------->

<h1>History / credits</h1>

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

<!------------------------------------------------------------------------->

<h1>How do you pronounce "hwloc"?</h1>

<p> When in doubt, say "hardware locality."</p>

<p> Some of the core developers say "H. W. Loke"; others say
"H. W. Lock".  We've heard several other pronunciations as well.  We
don't really have a strong preference for <em>how</em> you say it; we
chose the name for its Google-ability, not its pronunciation.</p>

<p>  But now at least you know how <em>we</em> pronounce it.  :-)</p>

<?php
include_once("$topdir/includes/footer.inc");
