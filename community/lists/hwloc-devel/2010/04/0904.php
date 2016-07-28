<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 08:43:32 2010" -->
<!-- isoreceived="20100420124332" -->
<!-- sent="Tue, 20 Apr 2010 14:43:26 +0200" -->
<!-- isosent="20100420124326" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960" -->
<!-- id="4BCDA16E.90806_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201004200806.o3K863Zj020723_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 08:43:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0905.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>Previous message:</strong> <a href="0903.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r1958)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0905.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>Reply:</strong> <a href="0905.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This needs to be backported to the 1.0 branch, but somebody might want
<br>
to fix/improve the text, so I am waiting a bit.
<br>
<p>Brice
<br>
<p><p><p><p>bgoglin_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-04-20 04:06:03 EDT (Tue, 20 Apr 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1960
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1960">https://svn.open-mpi.org/trac/hwloc/changeset/1960</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add a documentation section about external helpers
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/doc/Makefile.am |    14 +++++----                               
</span><br>
<span class="quotelev1">&gt;    trunk/doc/hwloc.doxy  |    57 +++++++++++++++++++++++++++++++++++---- 
</span><br>
<span class="quotelev1">&gt;    2 files changed, 58 insertions(+), 13 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/doc/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/doc/Makefile.am	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/doc/Makefile.am	2010-04-20 04:06:03 EDT (Tue, 20 Apr 2010)
</span><br>
<span class="quotelev1">&gt; @@ -134,12 +134,14 @@
</span><br>
<span class="quotelev1">&gt;  	-_at_mv -f $(DOX_DIR)/latex/tools.tex $(DOX_DIR)/latex/a00002.tex
</span><br>
<span class="quotelev1">&gt;  	-_at_mv -f $(DOX_DIR)/html/envvar.html $(DOX_DIR)/html/a00003.html
</span><br>
<span class="quotelev1">&gt;  	-_at_mv -f $(DOX_DIR)/latex/envvar.tex $(DOX_DIR)/latex/a00003.tex
</span><br>
<span class="quotelev1">&gt; -	-_at_mv -f $(DOX_DIR)/html/threadsafety.html $(DOX_DIR)/html/a00004.html
</span><br>
<span class="quotelev1">&gt; -	-_at_mv -f $(DOX_DIR)/latex/threadsafety.tex $(DOX_DIR)/latex/a00004.tex
</span><br>
<span class="quotelev1">&gt; -	-_at_mv -f $(DOX_DIR)/html/embed.html $(DOX_DIR)/html/a00005.html
</span><br>
<span class="quotelev1">&gt; -	-_at_mv -f $(DOX_DIR)/latex/embed.tex $(DOX_DIR)/latex/a00005.tex
</span><br>
<span class="quotelev1">&gt; -	-_at_mv -f $(DOX_DIR)/html/switchfromplpa.html $(DOX_DIR)/html/a00006.html
</span><br>
<span class="quotelev1">&gt; -	-_at_mv -f $(DOX_DIR)/latex/switchfromplpa.tex $(DOX_DIR)/latex/a00006.tex
</span><br>
<span class="quotelev1">&gt; +	-_at_mv -f $(DOX_DIR)/html/interoperability.html $(DOX_DIR)/html/a00004.html
</span><br>
<span class="quotelev1">&gt; +	-_at_mv -f $(DOX_DIR)/latex/interoperability.tex $(DOX_DIR)/latex/a00004.tex
</span><br>
<span class="quotelev1">&gt; +	-_at_mv -f $(DOX_DIR)/html/threadsafety.html $(DOX_DIR)/html/a00005.html
</span><br>
<span class="quotelev1">&gt; +	-_at_mv -f $(DOX_DIR)/latex/threadsafety.tex $(DOX_DIR)/latex/a00005.tex
</span><br>
<span class="quotelev1">&gt; +	-_at_mv -f $(DOX_DIR)/html/embed.html $(DOX_DIR)/html/a00006.html
</span><br>
<span class="quotelev1">&gt; +	-_at_mv -f $(DOX_DIR)/latex/embed.tex $(DOX_DIR)/latex/a00006.tex
</span><br>
<span class="quotelev1">&gt; +	-_at_mv -f $(DOX_DIR)/html/switchfromplpa.html $(DOX_DIR)/html/a00007.html
</span><br>
<span class="quotelev1">&gt; +	-_at_mv -f $(DOX_DIR)/latex/switchfromplpa.tex $(DOX_DIR)/latex/a00007.tex
</span><br>
<span class="quotelev1">&gt;  endif
</span><br>
<span class="quotelev1">&gt;  endif
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/doc/hwloc.doxy
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/doc/hwloc.doxy	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/doc/hwloc.doxy	2010-04-20 04:06:03 EDT (Tue, 20 Apr 2010)
</span><br>
<span class="quotelev1">&gt; @@ -235,13 +235,8 @@
</span><br>
<span class="quotelev1">&gt;  hwloc/cpuset.h.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  Moreover, hwloc also comes with additional helpers for
</span><br>
<span class="quotelev1">&gt; -interoperability with several commonly used environments.  For Linux,
</span><br>
<span class="quotelev1">&gt; -some specific helpers are available in hwloc/linux.h, and
</span><br>
<span class="quotelev1">&gt; -hwloc/linux-libnuma.h if using libnuma.  On glibc-based systems,
</span><br>
<span class="quotelev1">&gt; -additional helpers are available in hwloc/glibc-sched.h.  For Linux
</span><br>
<span class="quotelev1">&gt; -systems with the OpenFabrics verbs library, some dedicated helpers are
</span><br>
<span class="quotelev1">&gt; -provided in hwloc/openfabrics-verbs.h (this helper file is not yet
</span><br>
<span class="quotelev1">&gt; -useful on non-Linux systems with the OpenFabrics verbs library).
</span><br>
<span class="quotelev1">&gt; +interoperability with several commonly used environments.
</span><br>
<span class="quotelev1">&gt; +See the \ref interoperability section for details.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  To precisely define the vocabulary used by hwloc, a \ref termsanddefs
</span><br>
<span class="quotelev1">&gt;  section is available and should probably be read first.
</span><br>
<span class="quotelev1">&gt; @@ -532,6 +527,54 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +\page interoperability Interoperability with other software
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +hwloc offers its own portable interface but it still may have to
</span><br>
<span class="quotelev1">&gt; +interoperate with specific or non-portable libraries that manipulate
</span><br>
<span class="quotelev1">&gt; +some similar objects.
</span><br>
<span class="quotelev1">&gt; +It thus offers several specific helpers to help converting between
</span><br>
<span class="quotelev1">&gt; +those specific interfaces and hwloc.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Such external libraries may be specific to some OS or may not always
</span><br>
<span class="quotelev1">&gt; +be installed, so hwloc does not explicitly depend on them.
</span><br>
<span class="quotelev1">&gt; +However, when a custom program depends on such a library, it may optionally
</span><br>
<span class="quotelev1">&gt; +include the corresponding hwloc helper to extend the hwloc interface with
</span><br>
<span class="quotelev1">&gt; +dedicated helpers.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;dl&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;dt&gt;Linux specific features&lt;/dt&gt;
</span><br>
<span class="quotelev1">&gt; + &lt;dd&gt;
</span><br>
<span class="quotelev1">&gt; +  hwloc/linux.h offers Linux specific helpers that access some non-portable
</span><br>
<span class="quotelev1">&gt; +  features of the Linux system, such as binding threads through their tid
</span><br>
<span class="quotelev1">&gt; +  or parsing kernel CPU mask files.
</span><br>
<span class="quotelev1">&gt; + &lt;/dd&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;dt&gt;Linux libnuma&lt;/dt&gt;
</span><br>
<span class="quotelev1">&gt; + &lt;dd&gt;
</span><br>
<span class="quotelev1">&gt; +  hwloc/linux-libnuma.h provides conversion helpers between hwloc CPU sets
</span><br>
<span class="quotelev1">&gt; +  and libnuma specific types such as nodemasks and bitmasks.
</span><br>
<span class="quotelev1">&gt; +  It helps you use libnuma memory binding functions with hwloc CPU sets.
</span><br>
<span class="quotelev1">&gt; + &lt;/dd&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;dt&gt;Glibc&lt;/dt&gt;
</span><br>
<span class="quotelev1">&gt; + &lt;dd&gt;
</span><br>
<span class="quotelev1">&gt; +  hwloc/glibc-sched.h offers conversion routines between Glibc and hwloc
</span><br>
<span class="quotelev1">&gt; +  CPU sets so as to manipulate functions such as sched_setaffinity()
</span><br>
<span class="quotelev1">&gt; +  together with hwloc.
</span><br>
<span class="quotelev1">&gt; + &lt;/dd&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;dt&gt;OpenFabrics Verbs&lt;/dt&gt;
</span><br>
<span class="quotelev1">&gt; + &lt;dd&gt;
</span><br>
<span class="quotelev1">&gt; +  hwloc/openfabrics-verbs.h help interoperability with the OpenFabrics Verbs
</span><br>
<span class="quotelev1">&gt; +  interface, for instance by returning the list of processors near an
</span><br>
<span class="quotelev1">&gt; +  InfiniBand device.
</span><br>
<span class="quotelev1">&gt; + &lt;/dd&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +&lt;/dl&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  \page threadsafety Thread safety
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  Like most libraries that mainly fill data structures, hwloc is not
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0905.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>Previous message:</strong> <a href="0903.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r1958)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0905.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>Reply:</strong> <a href="0905.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
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
