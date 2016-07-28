<?
$subject_val = "[hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r1261";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 13:57:29 2009" -->
<!-- isoreceived="20091029175729" -->
<!-- sent="Thu, 29 Oct 2009 13:57:23 -0400" -->
<!-- isosent="20091029175723" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r1261" -->
<!-- id="3A20FEF3-B8D3-487B-851E-E4CEE98641BA_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200910291755.n9THtHOt010820_at_sourcehaven.osl.iu.edu" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r1261<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 13:57:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0291.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1261"</a>
<li><strong>Previous message:</strong> <a href="0289.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you guys eyeball the docs changes I made before I move them over  
<br>
to the release branch?
<br>
<p>I think all the changes should be paletable, but just wanted to be  
<br>
sure...
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: October 29, 2009 1:55:17 PM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;hwloc-svn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [hwloc-svn] svn:hwloc r1261
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2009-10-29 13:55:16 EDT (Thu, 29 Oct 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1261
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1261">https://svn.open-mpi.org/trac/hwloc/changeset/1261</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Updates to frontmatter of the doxy docs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/doc/hwloc-hello.c |     8 +
</span><br>
<span class="quotelev1">&gt;    trunk/doc/hwloc.doxy    |   180 +++++++++++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; +----------------
</span><br>
<span class="quotelev1">&gt;    2 files changed, 115 insertions(+), 73 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/doc/hwloc-hello.c
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/doc/hwloc-hello.c     (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/doc/hwloc-hello.c     2009-10-29 13:55:16 EDT (Thu, 29 Oct  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -1,4 +1,10 @@
</span><br>
<span class="quotelev1">&gt; -/* topo-hello.c */
</span><br>
<span class="quotelev1">&gt; +/* Example hwloc API program.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * Copyright &#169; 2009 INRIA, Universit&#233; Bordeaux 1
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * topo-hello.c
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  #include &lt;hwloc.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  static void print_children(hwloc_topology_t topology, hwloc_obj_t  
</span><br>
<span class="quotelev1">&gt; obj, int depth)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/doc/hwloc.doxy
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/doc/hwloc.doxy        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/doc/hwloc.doxy        2009-10-29 13:55:16 EDT (Thu, 29 Oct  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -15,83 +15,111 @@
</span><br>
<span class="quotelev1">&gt;  \endhtmlonly
</span><br>
<span class="quotelev1">&gt;  \section Introduction
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -hwloc provides a portable abstraction (across OS, versions,  
</span><br>
<span class="quotelev1">&gt; architectures,
</span><br>
<span class="quotelev1">&gt; -...) of the hierarchical topology of modern architectures. It  
</span><br>
<span class="quotelev1">&gt; primarily aims at
</span><br>
<span class="quotelev1">&gt; -helping high-performance computing applications with gathering  
</span><br>
<span class="quotelev1">&gt; information about
</span><br>
<span class="quotelev1">&gt; -the hardware so as to exploit it accordingly and efficiently.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -hwloc provides a hierarchical view of the machine, NUMA memory nodes,
</span><br>
<span class="quotelev1">&gt; -sockets, shared caches, cores and simultaneous multithreading. It  
</span><br>
<span class="quotelev1">&gt; also gathers
</span><br>
<span class="quotelev1">&gt; -various attributes such as cache and memory information.
</span><br>
<span class="quotelev1">&gt; +hwloc provides command line tools and a C API to obtain the
</span><br>
<span class="quotelev1">&gt; +hierarchical map of key computing elements, such as: NUMA memory
</span><br>
<span class="quotelev1">&gt; +nodes, shared caches, processor sockets, processor cores, and
</span><br>
<span class="quotelev1">&gt; +processor &quot;threads&quot;.  hwloc also gathers various attributes such as
</span><br>
<span class="quotelev1">&gt; +cache and memory information, and is portable across a variety of
</span><br>
<span class="quotelev1">&gt; +different operating systems and platforms.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +hwloc primarily aims at helping high-performance computing (HPC)
</span><br>
<span class="quotelev1">&gt; +applications, but is also applicable to any project seeking to  
</span><br>
<span class="quotelev1">&gt; exploit
</span><br>
<span class="quotelev1">&gt; +code and/or data locality on modern computing platforms.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +*** Note that the hwloc project represents the merger of the
</span><br>
<span class="quotelev1">&gt; +libtopology project from INRIA and the Portable Linux Processor
</span><br>
<span class="quotelev1">&gt; +Affinity (PLPA) sub-project from Open MPI.  *Both of these prior
</span><br>
<span class="quotelev1">&gt; +projects are now deprecated.* The first hwloc release is  
</span><br>
<span class="quotelev1">&gt; essentially a
</span><br>
<span class="quotelev1">&gt; +&quot;re-branding&quot; of the libtopology code base, but with both a few
</span><br>
<span class="quotelev1">&gt; +genuinely new features and a few PLPA-like features added in.  More
</span><br>
<span class="quotelev1">&gt; +new features and more PLPA-like features will be added to hwloc over
</span><br>
<span class="quotelev1">&gt; +time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc supports the following operating systems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;ul&gt;
</span><br>
<span class="quotelev1">&gt; -  &lt;li&gt; Linux (including old kernels not having sysfs topology  
</span><br>
<span class="quotelev1">&gt; information, with
</span><br>
<span class="quotelev1">&gt; -  knowledge of cpusets, offline cpus, and Kerrighed support)
</span><br>
<span class="quotelev1">&gt; -  &lt;li&gt; Solaris
</span><br>
<span class="quotelev1">&gt; -  &lt;li&gt; AIX
</span><br>
<span class="quotelev1">&gt; -  &lt;li&gt; Darwin
</span><br>
<span class="quotelev1">&gt; -  &lt;li&gt; OSF/1 (aka. Tru64)
</span><br>
<span class="quotelev1">&gt; -  &lt;li&gt; HP-UX
</span><br>
<span class="quotelev1">&gt; -  &lt;li&gt; Windows
</span><br>
<span class="quotelev1">&gt; -  &lt;li&gt; For other OSes, only the number of processors is available  
</span><br>
<span class="quotelev1">&gt; for now.
</span><br>
<span class="quotelev1">&gt; +&lt;li&gt;Linux (including old kernels not having sysfs topology
</span><br>
<span class="quotelev1">&gt; +information, with knowledge of cpusets, offline cpus, and Kerrighed
</span><br>
<span class="quotelev1">&gt; +support)&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; +&lt;li&gt;Solaris&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; +&lt;li&gt;AIX&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; +&lt;li&gt;Darwin / OS X&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; +&lt;li&gt;OSF/1 (a.k.a., Tru64)&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; +&lt;li&gt;HP-UX&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; +&lt;li&gt;Microsoft Windows&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;/ul&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +hwloc only reports the number of processors on unsupported operating
</span><br>
<span class="quotelev1">&gt; +systems; no topology information is available.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  For development and debugging purposes, hwloc also offers the  
</span><br>
<span class="quotelev1">&gt; ability to
</span><br>
<span class="quotelev1">&gt; -work on fake topologies:
</span><br>
<span class="quotelev1">&gt; +work on &quot;fake&quot; topologies:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;ul&gt;
</span><br>
<span class="quotelev1">&gt; -  &lt;li&gt; Symmetrical tree of resources generated from a list of level  
</span><br>
<span class="quotelev1">&gt; arities
</span><br>
<span class="quotelev1">&gt; -  &lt;li&gt; Remote machine simulation through the gathering of Linux  
</span><br>
<span class="quotelev1">&gt; sysfs topology files
</span><br>
<span class="quotelev1">&gt; +  &lt;li&gt; Symmetrical tree of resources generated from a list of level  
</span><br>
<span class="quotelev1">&gt; arities&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt; +  &lt;li&gt; Remote machine simulation through the gathering of Linux  
</span><br>
<span class="quotelev1">&gt; sysfs topology files&lt;/li&gt;
</span><br>
<span class="quotelev1">&gt;  &lt;/ul&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -hwloc may also display the topology in a convenient format, either in
</span><br>
<span class="quotelev1">&gt; -graphical mode, or by exporting in PDF, PNG, FIG, ... format, or in  
</span><br>
<span class="quotelev1">&gt; text mode
</span><br>
<span class="quotelev1">&gt; -(see Examples below).
</span><br>
<span class="quotelev1">&gt; +hwloc can display the topology in a human-readable format, either in
</span><br>
<span class="quotelev1">&gt; +graphical mode (X11), or by exporting in one of several different
</span><br>
<span class="quotelev1">&gt; +formats, including: plain text, PDF, PNG, and FIG (see Examples
</span><br>
<span class="quotelev1">&gt; +below).  Note that some of the export formats require additional
</span><br>
<span class="quotelev1">&gt; +support libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  hwloc offers a programming interface for manipulating topologies and
</span><br>
<span class="quotelev1">&gt; -objects. It also brings a powerful cpu bitmap API that is used to  
</span><br>
<span class="quotelev1">&gt; describe
</span><br>
<span class="quotelev1">&gt; -topology objects location on physical/logical processors. See the  
</span><br>
<span class="quotelev1">&gt; \ref interface
</span><br>
<span class="quotelev1">&gt; -below. It may also be used to binding applications onto certain  
</span><br>
<span class="quotelev1">&gt; cores or
</span><br>
<span class="quotelev1">&gt; -memory nodes. Several utility programs are also provided to ease  
</span><br>
<span class="quotelev1">&gt; command-line
</span><br>
<span class="quotelev1">&gt; -manipulation of topology objects, binding of processes, ...
</span><br>
<span class="quotelev1">&gt; +objects. It also brings a powerful CPU bitmap API that is used to
</span><br>
<span class="quotelev1">&gt; +describe topology objects location on physical/logical processors.  
</span><br>
<span class="quotelev1">&gt; See
</span><br>
<span class="quotelev1">&gt; +the \ref interface below. It may also be used to binding applications
</span><br>
<span class="quotelev1">&gt; +onto certain cores or memory nodes. Several utility programs are also
</span><br>
<span class="quotelev1">&gt; +provided to ease command-line manipulation of topology objects,
</span><br>
<span class="quotelev1">&gt; +binding of processes, and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  \htmlonly
</span><br>
<span class="quotelev1">&gt;  &lt;/div&gt;&lt;div class=&quot;section&quot; id=&quot;installation&quot;&gt;
</span><br>
<span class="quotelev1">&gt;  \endhtmlonly
</span><br>
<span class="quotelev1">&gt;  \section installation Installation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -hwloc (<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>) is available under  
</span><br>
<span class="quotelev1">&gt; the BSD license.
</span><br>
<span class="quotelev1">&gt; -It is hosted by Open MPI (<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>).
</span><br>
<span class="quotelev1">&gt; -The current SVN snapshot can be fetched with:
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -&lt;ul&gt;
</span><br>
<span class="quotelev1">&gt; - &lt;li&gt;svn checkout <a href="http://svn.open-mpi.org/svn/hwloc/trunk">http://svn.open-mpi.org/svn/hwloc/trunk</a> hwloc-trunk
</span><br>
<span class="quotelev1">&gt; - &lt;li&gt;cd hwloc-trunk
</span><br>
<span class="quotelev1">&gt; - &lt;li&gt;./autogen.sh
</span><br>
<span class="quotelev1">&gt; -&lt;/ul&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -Note that autoconf &gt;=2.60, automake &gt;=1.10 and libtool &gt;=2.2.6 are  
</span><br>
<span class="quotelev1">&gt; required in that case.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -Installation by itself is as usual:
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -&lt;ul&gt;
</span><br>
<span class="quotelev1">&gt; - &lt;li&gt;./configure --prefix=...
</span><br>
<span class="quotelev1">&gt; - &lt;li&gt;make
</span><br>
<span class="quotelev1">&gt; - &lt;li&gt;make install
</span><br>
<span class="quotelev1">&gt; -&lt;/ul&gt;
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -Lstopo's fig support is always available. To get support for pdf,  
</span><br>
<span class="quotelev1">&gt; ps and png
</span><br>
<span class="quotelev1">&gt; -support, cairo is needed. To get support for xml, libxml2 is needed.
</span><br>
<span class="quotelev1">&gt; +hwloc (<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>) is available under  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; +BSD license.  It is hosted as a sub-project of the overall Open MPI
</span><br>
<span class="quotelev1">&gt; +project (<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>).  Note that hwloc does not require
</span><br>
<span class="quotelev1">&gt; +any functionality from Open MPI -- it is a wholly separate (and much
</span><br>
<span class="quotelev1">&gt; +smaller!) project and code base.  It just happens to be hosted as  
</span><br>
<span class="quotelev1">&gt; part
</span><br>
<span class="quotelev1">&gt; +of the overall Open MPI project.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Nightly development snapshots are available on the web site.
</span><br>
<span class="quotelev1">&gt; +Additionally, the code can be directly checked out of Subversion:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;pre&gt;
</span><br>
<span class="quotelev1">&gt; +shell$ svn checkout <a href="http://svn.open-mpi.org/svn/hwloc/trunk">http://svn.open-mpi.org/svn/hwloc/trunk</a> hwloc- 
</span><br>
<span class="quotelev1">&gt; trunk
</span><br>
<span class="quotelev1">&gt; +shell$ cd hwloc-trunk
</span><br>
<span class="quotelev1">&gt; +shell$ ./autogen.sh
</span><br>
<span class="quotelev1">&gt; +&lt;/pre&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Note that GNU Autoconf &gt;=2.60, Automake &gt;=1.10 and Libtool &gt;=2.2.6  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; +required when building from a Subversion checkout.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Installation by itself is the fairly common GNU-based process:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;pre&gt;
</span><br>
<span class="quotelev1">&gt; +shell$ ./configure --prefix=...
</span><br>
<span class="quotelev1">&gt; +shell$ make
</span><br>
<span class="quotelev1">&gt; +shell$ make install
</span><br>
<span class="quotelev1">&gt; +&lt;/pre&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +The hwloc command-line tool &quot;lstopo&quot; produces human-readable topology
</span><br>
<span class="quotelev1">&gt; +maps, as mentioned above.  It can also export maps to the &quot;fig&quot; file
</span><br>
<span class="quotelev1">&gt; +format.  Support for PDF, Postscript, and PNG exporting is provided  
</span><br>
<span class="quotelev1">&gt; if
</span><br>
<span class="quotelev1">&gt; +the &quot;Cairo&quot; development package can be found when hwloc is configured
</span><br>
<span class="quotelev1">&gt; +and build.  Similarly, lstopo's XML support requires the libxml2
</span><br>
<span class="quotelev1">&gt; +development package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  \htmlonly
</span><br>
<span class="quotelev1">&gt;  &lt;/div&gt;&lt;div class=&quot;section&quot; id=&quot;examples&quot;&gt;
</span><br>
<span class="quotelev1">&gt;  \endhtmlonly
</span><br>
<span class="quotelev1">&gt;  \section examples Examples
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - On a 4-socket 2-core machine with hyperthreading, the \c lstopo  
</span><br>
<span class="quotelev1">&gt; tool may
</span><br>
<span class="quotelev1">&gt; - show the following outputs:
</span><br>
<span class="quotelev1">&gt; +On a 4-socket 2-core machine with hyperthreading, the \c lstopo tool
</span><br>
<span class="quotelev1">&gt; +may show the following outputs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  \image html dudley.png
</span><br>
<span class="quotelev1">&gt;  \image latex dudley.png width=\textwidth
</span><br>
<span class="quotelev1">&gt; @@ -162,7 +190,8 @@
</span><br>
<span class="quotelev1">&gt;      L2(1024KB) + L1(64KB) + Core#1 + P#15
</span><br>
<span class="quotelev1">&gt;  \endcode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - On a 2-socket quad-core Xeon (pre-Nehalem ones assembling 2 dual- 
</span><br>
<span class="quotelev1">&gt; core dies into each socket):
</span><br>
<span class="quotelev1">&gt; + On a 2-socket quad-core Xeon (pre-Nehalem, with 2 dual-core dies  
</span><br>
<span class="quotelev1">&gt; into
</span><br>
<span class="quotelev1">&gt; + each socket):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  \image html emmett.png
</span><br>
<span class="quotelev1">&gt;  \image latex emmett.png width=\textwidth
</span><br>
<span class="quotelev1">&gt; @@ -191,20 +220,22 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  \section interface Programming interface
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -The basic interface is available in hwloc.h . It mostly offers low- 
</span><br>
<span class="quotelev1">&gt; level
</span><br>
<span class="quotelev1">&gt; -routines for advanced programmers that want to manually manipulate  
</span><br>
<span class="quotelev1">&gt; objects
</span><br>
<span class="quotelev1">&gt; -and follow links between them. Most users should look at hwloc/ 
</span><br>
<span class="quotelev1">&gt; helper.h
</span><br>
<span class="quotelev1">&gt; -which provides a lot of interesting higher-level traversal examples.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -Each object contains a cpuset which describes the list of processors
</span><br>
<span class="quotelev1">&gt; -that it contains. These cpusets may be used for \ref  
</span><br>
<span class="quotelev1">&gt; hwlocality_binding.
</span><br>
<span class="quotelev1">&gt; -hwloc offers an extensive cpuset manipulation interface in hwloc/ 
</span><br>
<span class="quotelev1">&gt; cpuset.h .
</span><br>
<span class="quotelev1">&gt; +The basic interface is available in hwloc.h. It mostly offers
</span><br>
<span class="quotelev1">&gt; +low-level routines for advanced programmers that want to manually
</span><br>
<span class="quotelev1">&gt; +manipulate objects and follow links between them.  Developers should
</span><br>
<span class="quotelev1">&gt; +look at hwloc/helper.h, which provides good higher-level topology
</span><br>
<span class="quotelev1">&gt; +traversal examples.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Each object contains a cpuset describing the list of processors that
</span><br>
<span class="quotelev1">&gt; +it contains.  These cpusets may be used for \ref hwlocality_binding.
</span><br>
<span class="quotelev1">&gt; +hwloc offers an extensive cpuset manipulation interface in
</span><br>
<span class="quotelev1">&gt; +hwloc/cpuset.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Moreover, hwloc also comes with additional helpers for
</span><br>
<span class="quotelev1">&gt;  interoperability with several commonly used environments.  For Linux,
</span><br>
<span class="quotelev1">&gt; -some specific helpers are available in hwloc/linux.h , and
</span><br>
<span class="quotelev1">&gt; +some specific helpers are available in hwloc/linux.h, and
</span><br>
<span class="quotelev1">&gt;  hwloc/linux-libnuma.h if using libnuma.  On glibc-based systems,
</span><br>
<span class="quotelev1">&gt; -additional helpers are available in hwloc/glibc-sched.h .  For Linux
</span><br>
<span class="quotelev1">&gt; +additional helpers are available in hwloc/glibc-sched.h.  For Linux
</span><br>
<span class="quotelev1">&gt;  systems with the OpenFabrics verbs library, some dedicated helpers  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt;  provided in hwloc/openfabrics-verbs.h (this helper file is not yet
</span><br>
<span class="quotelev1">&gt;  useful on non-Linux systems with the OpenFabrics verbs library).
</span><br>
<span class="quotelev1">&gt; @@ -212,10 +243,14 @@
</span><br>
<span class="quotelev1">&gt;  To precisely define the vocabulary used by hwloc, a \ref glossary is
</span><br>
<span class="quotelev1">&gt;  available and should probably be read first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Further documentation is available in html, manual pages, and pdf  
</span><br>
<span class="quotelev1">&gt; format
</span><br>
<span class="quotelev1">&gt; -in the source tarball in doc/doxygen-doc/ (after doxygen compilation
</span><br>
<span class="quotelev1">&gt; -for svn checkouts) and are installed in $prefix/share/doc/hwloc/ and
</span><br>
<span class="quotelev1">&gt; -the usual manual repository.
</span><br>
<span class="quotelev1">&gt; +Further documentation is available in a full set of HTML pages, man
</span><br>
<span class="quotelev1">&gt; +pages, and self-contained PDF files (formatted for both both US  
</span><br>
<span class="quotelev1">&gt; letter
</span><br>
<span class="quotelev1">&gt; +and A4 formats) in the source tarball in doc/doxygen-doc/.  If you  
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev1">&gt; +building from a Subversion checkout, you will need to have Doxygen  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; +pdflatex installed -- the documentation will be built during the
</span><br>
<span class="quotelev1">&gt; +normal &quot;make&quot; process.  The documentation is installed during &quot;make
</span><br>
<span class="quotelev1">&gt; +install&quot; to $prefix/share/doc/hwloc/ and your systems default man  
</span><br>
<span class="quotelev1">&gt; page
</span><br>
<span class="quotelev1">&gt; +tree (under $prefix, of course).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The following section presents an example of API usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -225,11 +260,12 @@
</span><br>
<span class="quotelev1">&gt;  that just prints the topology and binds itself to the first  
</span><br>
<span class="quotelev1">&gt; processor of the
</span><br>
<span class="quotelev1">&gt;  second core of the machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Hardware Location provides a pkg-config object, so compiling the  
</span><br>
<span class="quotelev1">&gt; example boils down to
</span><br>
<span class="quotelev1">&gt; +Hardware Location provides a pkg-config object, so compiling the
</span><br>
<span class="quotelev1">&gt; +example boils down to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  \verbatim
</span><br>
<span class="quotelev1">&gt; -CFLAGS+=$(pkg-config --cflags hwloc)
</span><br>
<span class="quotelev1">&gt; -LDLIBS+=$(pkg-config --libs hwloc)
</span><br>
<span class="quotelev1">&gt; +CFLAGS += $(pkg-config --cflags hwloc)
</span><br>
<span class="quotelev1">&gt; +LDLIBS += $(pkg-config --libs hwloc)
</span><br>
<span class="quotelev1">&gt;  cc hwloc-hello.c $(CFLAGS) -o hwloc-hello $(LDLIBS)
</span><br>
<span class="quotelev1">&gt;  \endverbatim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -259,7 +295,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  libtopology was initially developed by the INRIA Runtime Team-Project
</span><br>
<span class="quotelev1">&gt;  (<a href="http://runtime.bordeaux.inria.fr/">http://runtime.bordeaux.inria.fr/</a>) (headed by Raymond Namyst
</span><br>
<span class="quotelev1">&gt; -(<a href="http://dept-info.labri.fr/~namyst/">http://dept-info.labri.fr/~namyst/</a>)). PLPA was initially developed  
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev1">&gt; +(<a href="http://dept-info.labri.fr/~namyst/">http://dept-info.labri.fr/~namyst/</a>). PLPA was initially developed by
</span><br>
<span class="quotelev1">&gt;  the Open MPI development team as a sub-project. Both are now  
</span><br>
<span class="quotelev1">&gt; deprecated
</span><br>
<span class="quotelev1">&gt;  in favor of hwloc, which is distributed as an Open MPI sub-project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -328,7 +364,7 @@
</span><br>
<span class="quotelev1">&gt;  \image html diagram.png
</span><br>
<span class="quotelev1">&gt;  \image latex diagram.eps width=\textwidth
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -It can be noticed that for Processor objects, the logical index,  
</span><br>
<span class="quotelev1">&gt; computed
</span><br>
<span class="quotelev1">&gt; +It should be noted that for Processor objects, the logical index,  
</span><br>
<span class="quotelev1">&gt; computed
</span><br>
<span class="quotelev1">&gt;  linearly by hwloc, is not the same as the OS index.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0291.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1261"</a>
<li><strong>Previous message:</strong> <a href="0289.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc3 has been released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
