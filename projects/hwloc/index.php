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
  <img src="lstopo.png" width="294px" alt="Sample hwloc output">
</a></div>

<div style="float: right; clear: both"><!-- "clear: both" prevents news from going near the float image above -->
<?php
# Lists are not mirrored - use an absolute URL
news("hwloc 2.10.0",
     "Major release",
     "https://www.mail-archive.com/hwloc-announce@lists.open-mpi.org/msg00164.html");
news("Upgrading to v2.0 API",
     "Guide for Porting your Code",
     "doc/v2.10.0/a00351.php");
news("XML topology database",
     "Repository of XML topologies",
     "https://hwloc.gitlabpages.inria.fr/xmls/");
news("The Best of lstopo",
     "Best lstopo graphical outputs",
     "lstopo");
//news("hwloc tutorial material",
//     "Slides and code available",
//     "$topdir/projects/hwloc/tutorials");
?>
</div>

<p> The Portable Hardware Locality (hwloc) software package provides a
<b>portable abstraction</b> (across OS, versions, architectures, ...)  of the
<b>hierarchical topology of modern architectures</b>, including NUMA memory
nodes (DRAM, HBM, non-volatile memory, CXL, etc.),
sockets, shared caches, cores and simultaneous
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
<li>Linux (with knowledge of cgroups, heterogeneous memory,
hybrid CPUs, offline CPUs, ScaleMP vSMP, and NumaScale NumaConnect)
on all supported hardware.</li>
<li>Solaris, AIX and HP-UX</li>
<li>NetBSD, FreeBSD and kFreeBSD/GNU</li>
<li>Darwin / OS X</li>
<li>Microsoft Windows (either using MinGW, Cygwin, CMake, or a native Visual Studio solution)</li>
<li>IBM BlueGene/Q Compute Node Kernel (CNK)</li>
<li>Android</li>
</ul></p>

<p>Additionally hwloc can detect the locality PCI devices
as well as software devices to manipulate accelerators
(OpenCL, NVIDIA CUDA, AMD ROCm, Intel LevelZero, NEC Vector Engine, etc.),
network and InfiniBand interfaces, etc.
See the <a href="lstopo">Best of lstopo</a> for more examples of supported platforms.
The topologies of many existing platforms are also available in the
<a href="https://hwloc.gitlabpages.inria.fr/xmls/">XML topology database</a>
for testing your software on architectures you don't have access to.
</p>

<p> hwloc may display the topology in multiple convenient formats (see
<a href="doc/v<?php print($last_dir); ?>/index.php#cli_examples">v<?php
print($last_ver); ?> examples</a> and the <a href="lstopo">Best of lstopo</a>).
It also offers a powerful programming interface to gather information
about the hardware, bind processes, and much more.</p>

<p>Since it uses standard Operating System information, hwloc's support is
almost always independent from the processor type (x86, ARM, RISC-V, POWER, etc),
and just relies on the Operating System support. Whenever the OS does not
support topology information (e.g. some BSDs), hwloc uses an x86-only
CPUID-based backend.</p>

<p>To check whether hwloc works on a particular machine, just try to build
it and run <tt>lstopo</tt> or <tt>lstopo-no-graphics</tt>.
If some things do not look right (e.g. bogus or
missing cache information), see Questions and bugs below</p>

<!------------------------------------------------------------------------->

<h1>Documentation</h1>

<p> More details are available in the <a href="doc/">Documentation</a>
(in both PDF and HTML).  The documentation for each version contains
<a href="doc/v<?php print($last_dir); ?>/index.php#cli_examples">examples of
outputs</a> and an <a href="doc/v<?php print($last_ver);
?>/index.php#interface">API interface example</a> (these links are for v<?php
print($last_ver); ?>).</p>

<p>The materials from several hwloc tutorials are
<a href="<?php print "$topdir/projects/hwloc/tutorials" ?>">available online</a>.
</p>

<!------------------------------------------------------------------------->

<h1>Getting and using hwloc</h1>

<p>
hwloc is open-source, available under the
<a href="<?php print "$topdir/projects/hwloc/license.php" ?>">BSD license</a>.
</p>

<p> The latest <b>hwloc releases are available on the
<a href="../../software/hwloc/<?php print($series_dir); ?>/">download page</a>.</b>
The GIT repository is also accessible for
<a href="https://github.com/open-mpi/hwloc">online browsing</a>
or <a href="git.php">checkout</a>.
</p>

<p> The <b>version string of the latest release is available from the
 <a href="../../software/hwloc/current/downloads/latest_release.txt"><tt>latest_release.txt</tt></a> link</b>.
 For the latest release or release candidate, rather use the
 <a href="../../software/hwloc/current/downloads/latest_snapshot.txt"><tt>latest_snapshot.txt</tt></a> link.
 For the latest on a specific series, replace "<tt>current</tt>" with "<tt>v2.9</tt>" in these links for instance.
</p>

<p>hwloc is already available as official packages for many Linux distributions
(at least Debian/Ubuntu, Fedora/RHEL, SUSE, ArchLinux, Slackware, Gentoo and their derivatives),
as well as NetBSD, FreeBSD, Cygwin, Mac OS X ports, and <a href="http://hpux.connect.org.uk/hppd/hpux/">HP-UX</a>.
It is also available as EasyBuild and Spack packages.
The lstopo Android app is available in the
 <a href="https://play.google.com/store/apps/details?id=com.hwloc.lstopo">Play Store</a>
 and in <a href="https://f-droid.org/fr/packages/com.hwloc.lstopo/">F-Droid</a>.
</p>

<a name="language_bindings"></a>
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
  <b>Python</b> <a href="https://gitlab.com/guystreeter/python-hwloc">git tree</a> (thanks to Guy Streeter).
 </li>
 <li>
  <b>Rust</b> <a href="https://github.com/daschl/hwloc-rs">on GitHub</a> (thanks to Michael Nitschinger).
 </li>
</ul>
</p>

<p><b>The following software already benefit from hwloc</b> or are being
ported to it:<ul>
<li>MPI implementations:</li><ul>
 <li><a href="https://www.open-mpi.org">Open MPI</a>.</li>
 <li>The <a href="http://www.mpich.org">MPICH</a> process launcher Hydra.</li>
 <li><a href="http://mvapich.cse.ohio-state.edu/">MVAPICH2</a>.</li>
 <li>CEA and Paratools' <a href="http://mpc.hpcframework.com/">Multiprocessor Computing framework (MPC)</a>.</li>
 <li>The <a href="https://pm2.gitlabpages.inria.fr/newmadeleine/">Newmadeleine</a> communication library.</li>
</ul>
<li>Runtime systems and compilers:</li><ul>
 <li>The <a href="http://chapel-lang.org/">Chapel Parallel Programming Language</a>.</li>
 <li>The <a href="https://legion.stanford.edu/">Legion Programming System</a>.</li>
 <li>The <a href="https://starpu.gitlabpages.inria.fr/">StarPU</a> runtime system for heterogeneous multicore architectures.</li>
 <li>The <a href="http://icl.cs.utk.edu/parsec">Parallel Runtime Scheduling and Execution Controller (PaRSEC)</a> project.</li>
 <li>The <a href="https://pm.bsc.es/nanox">Nanos++</a> runtime library for <a href="https://pm.bsc.es/ompss">OmpSs</a>.</li>
 <li>The <a href="https://stellar-group.org/libraries/hpx/">High Performance ParalleX (HPX)</a> runtime system.</li>
 <li>LLVM's <a href="https://openmp.llvm.org/">OpenMP runtime</a>.</li>
 <li>The <a href="https://github.com/kokkos/kokkos">C++ Performance Portability Programming EcoSystem</a>.</li>
 <li>Intel's <a href="https://github.com/oneapi-src/oneTBB">oneTBB</a> project.</li>
 <li>The <a href="https://github.com/memkind/memkind">memkind heap manager</a>.</li>
 <li>The <a href="http://www.sandia.gov/qthreads/">Qthreads</a> project.</li>
 <li>The <a href="http://www.rosecompiler.org/">Rose compiler</a>.</li>
 <li>The <a href="http://portablecl.org/">Portable Computing Language (POCL)</a>.</li>
 <li>The <a href="https://gitlab.inria.fr/h2m/h2m">H2M runtime</a> for managing heterogeneous memory.</li>
 <li>The former <a href="https://runtime.gitlabpages.inria.fr/forestgomp/">ForestGOMP</a> OpenMP platform for hierarchical architectures.</li>
</ul>
<li>Parallel scientific applications, libraries and toolkits:</li><ul>
 <li>The <a href="https://www.gromacs.org/">Gromacs</a> software suite for high-performance molecular dynamics.</li>
 <li>The <a href="http://www.cp2k.org/">CP2K</a> quantum chemistry and solid state physics software package.</li>
 <li>The <a href="http://www.feelpp.org/">Feel++</a> library for partial differential equations.</li>
 <li>The <a href="https://solverstack.gitlabpages.inria.fr/pastix/">Parallel Sparse matriX (PaStiX)</a> package.</li>
 <li>The <a href="https://icl.utk.edu/plasma/">Parallel Linear Algebra for Scalable Multi-core Architectures (PLASMA)</a> project.</li>
 <li>The <a href="http://www.mcs.anl.gov/petsc">Portable Extensible Toolkit for Scientific Computation (PETSc)</a>.</li>
 <li>The <a href="https://librsb.sourceforge.net/">librsb</a> sparse linear algebra library.</li>
 <li>The <a href="https://icl.utk.edu/magma/">Magma</a> dense linear algebra library.</li>
</ul>
<li>Resource manager and job schedulers:</li><ul>
 <li>The <a href="https://slurm.schedmd.com/">SLURM</a> workload manager.</li>
 <li>The <a href="http://gridscheduler.sourceforge.net/">Open Grid Scheduler</a>.</li>
 <li>The <a href="https://adaptivecomputing.com/cherry-services/torque-resource-manager/">TORQUE resource manager</a>.</li>
 <li>Univa <a href="http://www.univa.com/products/grid-engine">Grid Engine</a>.</li>
 <li>Altair's <a href="https://www.altair.com/pbs-professional/">PBS Professional</a> solution (part of PBS Works).</li>
 <li>The <a href="http://ceph.com">Ceph</a> distributed storage system.</li>
</ul>
<li>Performance analysis and debugging tools:</li><ul>
 <li>The performance-oriented tool suite <a href="https://github.com/RRZE-HPC/likwid">LIKWID</a>.</li>
 <li>The interactive process viewer <a href="http://htop.dev/">htop</a> for Linux.</li>
 <li>The parallel job inspector <a href="http://padb.pittman.org.uk/">Padb</a>.</li>
</ul>
<li>and even more!</li><ul>
 <li>The <a href="https://github.com/tensorflow/tensorflow">TensorFlow</a> library for numerical computation using data flow graphs.</li>
 <li>Apache <a href="http://trafficserver.apache.org/">Traffic Server</a>.</li>
 <li>The <a href="http://www.scylladb.com">Scylla</a> NoSQL server.</li>
 <li><a href="http://geopm.github.io/">Global Energy Optimization Power Management (GEOPM)</a>.</li>
 <li>The <a href="https://github.com/pwrapi/pwrapi-ref">Reference Implementation</a> of the <a href="http://powerapi.sandia.gov/">HPC Power API</a>.</li>
 <li>The <a href="https://openpmix.github.io/">OpenPMIx</a> implementation of the Process Management Interface Exascale (PMIx) standard.</li>
 <li>The <a href="https://www.aircrack-ng.org/">aircrack-ng</a> WiFi network security assesser.</li>
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
There is also a <tt>#hwloc</tt> IRC channel on Libera Chat (<tt>irc.libera.chat</tt>) and Freenode (<tt>irc.freenode.net</tt>).
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
 Brice Goglin and Andrès Rubio Proaño.
 <b>Using Performance Attributes for Managing Heterogeneous Memory in HPC Applications.</b>
 In <em>Proceedings of the 23rd IEEE International Workshop on Parallel and Distributed Scientific and Engineering Computing (PDSEC 2022), held in conjunction with IPDPS 2022</em>,
 Lyon, France, May 2022.
 <a href="https://hal.inria.fr/hal-03599360">https://hal.inria.fr/hal-03599360</a>
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
