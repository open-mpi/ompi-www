<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r914";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 22:40:10 2009" -->
<!-- isoreceived="20090910024010" -->
<!-- sent="Wed, 9 Sep 2009 22:40:01 -0400" -->
<!-- isosent="20090910024001" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r914" -->
<!-- id="5D95E717-B4D8-4228-9524-ADB34BA322F6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200909092226.n89MQS3m029087_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r914<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 22:40:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0015.php">Jeff Squyres: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Previous message:</strong> <a href="0013.php">Samuel Thibault: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0016.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r914"</a>
<li><strong>Reply:</strong> <a href="0016.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r914"</a>
<li><strong>Maybe reply:</strong> <a href="0017.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r914"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems like if we generate README, we should not have it in SVN,  
<br>
right?
<br>
<p><p>On Sep 9, 2009, at 6:26 PM, &lt;sthibaul_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2009-09-09 18:26:27 EDT (Wed, 09 Sep 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 914
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/914">https://svn.open-mpi.org/trac/hwloc/changeset/914</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; regenerate README
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/README |    88 ++++++++++++++++++++--------------------
</span><br>
<span class="quotelev1">&gt;    1 files changed, 44 insertions(+), 44 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/README
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
<span class="quotelev1">&gt; --- trunk/README        (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/README        2009-09-09 18:26:27 EDT (Wed, 09 Sep 2009)
</span><br>
<span class="quotelev1">&gt; @@ -1,16 +1,15 @@
</span><br>
<span class="quotelev1">&gt;  Introduction
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -libtopology provides a portable abstraction (across OS, versions,
</span><br>
<span class="quotelev1">&gt; -architectures, ...) of the hierarchical topology of modern  
</span><br>
<span class="quotelev1">&gt; architectures. It
</span><br>
<span class="quotelev1">&gt; -primarily aims at helping high-performance computing applications  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; -gathering information about the hardware so as to exploit it  
</span><br>
<span class="quotelev1">&gt; accordingly and
</span><br>
<span class="quotelev1">&gt; -efficiently.
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -libtopology provides a hierarchical view of the machine, NUMA  
</span><br>
<span class="quotelev1">&gt; memory nodes,
</span><br>
<span class="quotelev1">&gt; -sockets, shared caches, cores and simultaneous multithreading. It  
</span><br>
<span class="quotelev1">&gt; also gathers
</span><br>
<span class="quotelev1">&gt; -various attributes such as cache and memory information.
</span><br>
<span class="quotelev1">&gt; +hwloc provides a portable abstraction (across OS, versions,  
</span><br>
<span class="quotelev1">&gt; architectures, ...)
</span><br>
<span class="quotelev1">&gt; +of the hierarchical topology of modern architectures. It primarily  
</span><br>
<span class="quotelev1">&gt; aims at
</span><br>
<span class="quotelev1">&gt; +helping high-performance computing applications with gathering  
</span><br>
<span class="quotelev1">&gt; information
</span><br>
<span class="quotelev1">&gt; +about the hardware so as to exploit it accordingly and efficiently.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +hwloc provides a hierarchical view of the machine, NUMA memory  
</span><br>
<span class="quotelev1">&gt; nodes, sockets,
</span><br>
<span class="quotelev1">&gt; +shared caches, cores and simultaneous multithreading. It also  
</span><br>
<span class="quotelev1">&gt; gathers various
</span><br>
<span class="quotelev1">&gt; +attributes such as cache and memory information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -libtopology supports the following operating systems:
</span><br>
<span class="quotelev1">&gt; +hwloc supports the following operating systems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    * Linux (including old kernels not having sysfs topology  
</span><br>
<span class="quotelev1">&gt; information, with
</span><br>
<span class="quotelev1">&gt;      knowledge of cpusets, offline cpus, and Kerrighed support)
</span><br>
<span class="quotelev1">&gt; @@ -22,33 +21,33 @@
</span><br>
<span class="quotelev1">&gt;    * Windows
</span><br>
<span class="quotelev1">&gt;    * For other OSes, only the number of processors is available for  
</span><br>
<span class="quotelev1">&gt; now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -For development and debugging purposes, libtopology also offers the  
</span><br>
<span class="quotelev1">&gt; ability to
</span><br>
<span class="quotelev1">&gt; -work on fake topologies:
</span><br>
<span class="quotelev1">&gt; +For development and debugging purposes, hwloc also offers the  
</span><br>
<span class="quotelev1">&gt; ability to work
</span><br>
<span class="quotelev1">&gt; +on fake topologies:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    * Symmetrical tree of resources generated from a list of level  
</span><br>
<span class="quotelev1">&gt; arities
</span><br>
<span class="quotelev1">&gt;    * Remote machine simulation through the gathering of Linux sysfs  
</span><br>
<span class="quotelev1">&gt; topology
</span><br>
<span class="quotelev1">&gt;      files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -libtopology may also display the topology in a convenient format,  
</span><br>
<span class="quotelev1">&gt; either in
</span><br>
<span class="quotelev1">&gt; -graphical mode, or by exporting in PDF, PNG, FIG, ... format, or in  
</span><br>
<span class="quotelev1">&gt; text mode
</span><br>
<span class="quotelev1">&gt; -(see Examples below).
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -libtopology offers a programming interface for manipulating  
</span><br>
<span class="quotelev1">&gt; topologies and
</span><br>
<span class="quotelev1">&gt; -objects. It also brings a powerful cpu bitmap API that is used to  
</span><br>
<span class="quotelev1">&gt; describe
</span><br>
<span class="quotelev1">&gt; -topology objects location on physical/logical processors. See the  
</span><br>
<span class="quotelev1">&gt; Interface
</span><br>
<span class="quotelev1">&gt; -example interface below. It may also be used to binding  
</span><br>
<span class="quotelev1">&gt; applications onto
</span><br>
<span class="quotelev1">&gt; -certain cores or memory nodes. Several utility programs are also  
</span><br>
<span class="quotelev1">&gt; provided to
</span><br>
<span class="quotelev1">&gt; -ease command-line manipulation of topology objects, binding of  
</span><br>
<span class="quotelev1">&gt; processes, ...
</span><br>
<span class="quotelev1">&gt; +hwloc may also display the topology in a convenient format, either  
</span><br>
<span class="quotelev1">&gt; in graphical
</span><br>
<span class="quotelev1">&gt; +mode, or by exporting in PDF, PNG, FIG, ... format, or in text mode  
</span><br>
<span class="quotelev1">&gt; (see
</span><br>
<span class="quotelev1">&gt; +Examples below).
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +hwloc offers a programming interface for manipulating topologies  
</span><br>
<span class="quotelev1">&gt; and objects.
</span><br>
<span class="quotelev1">&gt; +It also brings a powerful cpu bitmap API that is used to describe  
</span><br>
<span class="quotelev1">&gt; topology
</span><br>
<span class="quotelev1">&gt; +objects location on physical/logical processors. See the Interface  
</span><br>
<span class="quotelev1">&gt; example
</span><br>
<span class="quotelev1">&gt; +interface below. It may also be used to binding applications onto  
</span><br>
<span class="quotelev1">&gt; certain cores
</span><br>
<span class="quotelev1">&gt; +or memory nodes. Several utility programs are also provided to ease
</span><br>
<span class="quotelev1">&gt; +command-line manipulation of topology objects, binding of  
</span><br>
<span class="quotelev1">&gt; processes, ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Installation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -libtopology (<a href="http://libtopology.gforge.inria.fr/">http://libtopology.gforge.inria.fr/</a>) is available  
</span><br>
<span class="quotelev1">&gt; under the BSD
</span><br>
<span class="quotelev1">&gt; -license. It is hosted by the INRIA Gforge (<a href="http://gforge.inria.fr/projects/">http://gforge.inria.fr/projects/</a>
</span><br>
<span class="quotelev1">&gt; -libtopology/). The current SVN snapshot can be fetched with:
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -  * svn checkout svn://scm.gforge.inria.fr/svn/libtopology/trunk  
</span><br>
<span class="quotelev1">&gt; libtopology
</span><br>
<span class="quotelev1">&gt; -  * cd libtopology
</span><br>
<span class="quotelev1">&gt; -  * autoreconf -ifv
</span><br>
<span class="quotelev1">&gt; +hwloc (<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>) is available under  
</span><br>
<span class="quotelev1">&gt; the BSD
</span><br>
<span class="quotelev1">&gt; +license. It is hosted by Open MPI (<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>). The  
</span><br>
<span class="quotelev1">&gt; current SVN
</span><br>
<span class="quotelev1">&gt; +snapshot can be fetched with:
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  * svn checkout <a href="http://svn.open-mpi.org/svn/hwloc/trunk">http://svn.open-mpi.org/svn/hwloc/trunk</a> hwloc-trunk
</span><br>
<span class="quotelev1">&gt; +  * cd hwloc-trunk
</span><br>
<span class="quotelev1">&gt; +  * ./autogen.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Note that autoconf &gt;=2.60, automake &gt;=1.10 and libtool &gt;=2.2.6 are  
</span><br>
<span class="quotelev1">&gt; required in
</span><br>
<span class="quotelev1">&gt;  that case.
</span><br>
<span class="quotelev1">&gt; @@ -153,12 +152,12 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Interface example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -This section shows how to use libtopology with an small example  
</span><br>
<span class="quotelev1">&gt; hwloc-hello.c
</span><br>
<span class="quotelev1">&gt; -that just prints the topology and binds itself to the first  
</span><br>
<span class="quotelev1">&gt; processor of the
</span><br>
<span class="quotelev1">&gt; -second core of the machine.
</span><br>
<span class="quotelev1">&gt; +This section shows how to use hwloc with an small example hwloc- 
</span><br>
<span class="quotelev1">&gt; hello.c that
</span><br>
<span class="quotelev1">&gt; +just prints the topology and binds itself to the first processor of  
</span><br>
<span class="quotelev1">&gt; the second
</span><br>
<span class="quotelev1">&gt; +core of the machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Libtopology provides a pkg-config object, so compiling the example  
</span><br>
<span class="quotelev1">&gt; boils down
</span><br>
<span class="quotelev1">&gt; -to
</span><br>
<span class="quotelev1">&gt; +Hardware Location provides a pkg-config object, so compiling the  
</span><br>
<span class="quotelev1">&gt; example boils
</span><br>
<span class="quotelev1">&gt; +down to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  CFLAGS+=$(pkg-config --cflags hwloc)
</span><br>
<span class="quotelev1">&gt;  LDLIBS+=$(pkg-config --libs hwloc)
</span><br>
<span class="quotelev1">&gt; @@ -258,30 +257,31 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Further documentation is available in html, manual pages, and pdf  
</span><br>
<span class="quotelev1">&gt; format in the
</span><br>
<span class="quotelev1">&gt;  source tarball in doc/doxygen-doc/ (after doxygen compilation for svn
</span><br>
<span class="quotelev1">&gt; -checkouts) and are installed in $prefix/share/doc/topology/ and the  
</span><br>
<span class="quotelev1">&gt; usual
</span><br>
<span class="quotelev1">&gt; -manual repository.
</span><br>
<span class="quotelev1">&gt; +checkouts) and are installed in $prefix/share/doc/hwloc/ and the  
</span><br>
<span class="quotelev1">&gt; usual manual
</span><br>
<span class="quotelev1">&gt; +repository.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The basic interface is available in hwloc.h, a lot of traversal  
</span><br>
<span class="quotelev1">&gt; examples are
</span><br>
<span class="quotelev1">&gt;  available as inlines in hwloc/helper.h . On Linux, additional  
</span><br>
<span class="quotelev1">&gt; helpers are
</span><br>
<span class="quotelev1">&gt;  available in hwloc/linux-libnuma.h and on glibc-based systems,  
</span><br>
<span class="quotelev1">&gt; additional
</span><br>
<span class="quotelev1">&gt;  helpers are available in hwloc/glibc-sched.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -To precisely define the vocabulary used by libtopology, a Glossary  
</span><br>
<span class="quotelev1">&gt; is available
</span><br>
<span class="quotelev1">&gt; -and should probably be read first.
</span><br>
<span class="quotelev1">&gt; +To precisely define the vocabulary used by hwloc, a Glossary is  
</span><br>
<span class="quotelev1">&gt; available and
</span><br>
<span class="quotelev1">&gt; +should probably be read first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Questions and bugs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Questions should be sent to the devel mailing list (
</span><br>
<span class="quotelev1">&gt; -libtopology-devel_at_[hidden], <a href="http://lists.gforge.inria.fr/cgi-bin/">http://lists.gforge.inria.fr/cgi-bin/</a>
</span><br>
<span class="quotelev1">&gt; -mailman/listinfo/libtopology-devel). Bug reports should be reported  
</span><br>
<span class="quotelev1">&gt; in the
</span><br>
<span class="quotelev1">&gt; -tracker (<a href="http://gforge.inria.fr/tracker/?group_id=1758">http://gforge.inria.fr/tracker/?group_id=1758</a>).
</span><br>
<span class="quotelev1">&gt; +Questions should be sent to the devel mailing list (<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt; +community/lists/hwloc.php). Bug reports should be reported in the  
</span><br>
<span class="quotelev1">&gt; tracker (
</span><br>
<span class="quotelev1">&gt; +<a href="https://svn.open-mpi.org/trac/hwloc/">https://svn.open-mpi.org/trac/hwloc/</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Credits
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -libtopology is developed by the INRIA Runtime Team-Project (http://
</span><br>
<span class="quotelev1">&gt; +TODO: FIXME
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +hwloc is developed by the INRIA Runtime Team-Project (http://
</span><br>
<span class="quotelev1">&gt;  runtime.bordeaux.inria.fr/) (headed by Raymond Namyst <a href="http://dept-info.labri.fr">http://dept-info.labri.fr</a>
</span><br>
<span class="quotelev1">&gt;  /~namyst/).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Generated on Wed Sep 9 17:52:55 2009 for libtopology by  doxygen  
</span><br>
<span class="quotelev1">&gt; 1.6.1
</span><br>
<span class="quotelev1">&gt; +Generated on Thu Sep 10 00:25:46 2009 for hwloc by  doxygen 1.6.1
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
<li><strong>Next message:</strong> <a href="0015.php">Jeff Squyres: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Previous message:</strong> <a href="0013.php">Samuel Thibault: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0016.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r914"</a>
<li><strong>Reply:</strong> <a href="0016.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r914"</a>
<li><strong>Maybe reply:</strong> <a href="0017.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r914"</a>
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
