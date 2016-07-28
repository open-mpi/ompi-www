<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 09:09:21 2010" -->
<!-- isoreceived="20100420130921" -->
<!-- sent="Tue, 20 Apr 2010 09:09:15 -0400" -->
<!-- isosent="20100420130915" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960" -->
<!-- id="6DF4D348-4E43-407A-9C2A-05CC5153B555_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0FA76D86-7D97-4140-8FC7-C5DC218D8890_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 09:09:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0907.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>Previous message:</strong> <a href="0905.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>In reply to:</strong> <a href="0905.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0907.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>Reply:</strong> <a href="0907.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>Reply:</strong> <a href="0908.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done.  BTW, I use the attached helper script to merge stuff in to the branches (can't remember if I've sent this before or not).  It's a trivial thing, but it reduces the amount of stuff I have to type on the command line.
<br>
<p><p><p>On Apr 20, 2010, at 8:49 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Cool; I'll have a look right now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 20, 2010, at 8:43 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This needs to be backported to the 1.0 branch, but somebody might want
</span><br>
<span class="quotelev2">&gt; &gt; to fix/improve the text, so I am waiting a bit.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brice
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; bgoglin_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Author: bgoglin
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Date: 2010-04-20 04:06:03 EDT (Tue, 20 Apr 2010)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; New Revision: 1960
</span><br>
<span class="quotelev3">&gt; &gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1960">https://svn.open-mpi.org/trac/hwloc/changeset/1960</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Add a documentation section about external helpers
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Text files modified:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    trunk/doc/Makefile.am |    14 +++++----                             
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    trunk/doc/hwloc.doxy  |    57 +++++++++++++++++++++++++++++++++++----
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    2 files changed, 58 insertions(+), 13 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Modified: trunk/doc/Makefile.am
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- trunk/doc/Makefile.am     (original)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ trunk/doc/Makefile.am     2010-04-20 04:06:03 EDT (Tue, 20 Apr 2010)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -134,12 +134,14 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       -_at_mv -f $(DOX_DIR)/latex/tools.tex $(DOX_DIR)/latex/a00002.tex
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       -_at_mv -f $(DOX_DIR)/html/envvar.html $(DOX_DIR)/html/a00003.html
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       -_at_mv -f $(DOX_DIR)/latex/envvar.tex $(DOX_DIR)/latex/a00003.tex
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -     -_at_mv -f $(DOX_DIR)/html/threadsafety.html $(DOX_DIR)/html/a00004.html
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -     -_at_mv -f $(DOX_DIR)/latex/threadsafety.tex $(DOX_DIR)/latex/a00004.tex
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -     -_at_mv -f $(DOX_DIR)/html/embed.html $(DOX_DIR)/html/a00005.html
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -     -_at_mv -f $(DOX_DIR)/latex/embed.tex $(DOX_DIR)/latex/a00005.tex
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -     -_at_mv -f $(DOX_DIR)/html/switchfromplpa.html $(DOX_DIR)/html/a00006.html
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -     -_at_mv -f $(DOX_DIR)/latex/switchfromplpa.tex $(DOX_DIR)/latex/a00006.tex
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +     -_at_mv -f $(DOX_DIR)/html/interoperability.html $(DOX_DIR)/html/a00004.html
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +     -_at_mv -f $(DOX_DIR)/latex/interoperability.tex $(DOX_DIR)/latex/a00004.tex
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +     -_at_mv -f $(DOX_DIR)/html/threadsafety.html $(DOX_DIR)/html/a00005.html
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +     -_at_mv -f $(DOX_DIR)/latex/threadsafety.tex $(DOX_DIR)/latex/a00005.tex
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +     -_at_mv -f $(DOX_DIR)/html/embed.html $(DOX_DIR)/html/a00006.html
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +     -_at_mv -f $(DOX_DIR)/latex/embed.tex $(DOX_DIR)/latex/a00006.tex
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +     -_at_mv -f $(DOX_DIR)/html/switchfromplpa.html $(DOX_DIR)/html/a00007.html
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +     -_at_mv -f $(DOX_DIR)/latex/switchfromplpa.tex $(DOX_DIR)/latex/a00007.tex
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  endif
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  endif
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Modified: trunk/doc/hwloc.doxy
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ==============================================================================
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --- trunk/doc/hwloc.doxy      (original)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +++ trunk/doc/hwloc.doxy      2010-04-20 04:06:03 EDT (Tue, 20 Apr 2010)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -235,13 +235,8 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  hwloc/cpuset.h.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Moreover, hwloc also comes with additional helpers for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -interoperability with several commonly used environments.  For Linux,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -some specific helpers are available in hwloc/linux.h, and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -hwloc/linux-libnuma.h if using libnuma.  On glibc-based systems,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -additional helpers are available in hwloc/glibc-sched.h.  For Linux
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -systems with the OpenFabrics verbs library, some dedicated helpers are
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -provided in hwloc/openfabrics-verbs.h (this helper file is not yet
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -useful on non-Linux systems with the OpenFabrics verbs library).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +interoperability with several commonly used environments.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +See the \ref interoperability section for details.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  To precisely define the vocabulary used by hwloc, a \ref termsanddefs
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  section is available and should probably be read first.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; @@ -532,6 +527,54 @@
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +\page interoperability Interoperability with other software
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +hwloc offers its own portable interface but it still may have to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +interoperate with specific or non-portable libraries that manipulate
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +some similar objects.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +It thus offers several specific helpers to help converting between
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +those specific interfaces and hwloc.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +Such external libraries may be specific to some OS or may not always
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +be installed, so hwloc does not explicitly depend on them.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +However, when a custom program depends on such a library, it may optionally
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +include the corresponding hwloc helper to extend the hwloc interface with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +dedicated helpers.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +&lt;dl&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +&lt;dt&gt;Linux specific features&lt;/dt&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; + &lt;dd&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  hwloc/linux.h offers Linux specific helpers that access some non-portable
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  features of the Linux system, such as binding threads through their tid
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  or parsing kernel CPU mask files.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; + &lt;/dd&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +&lt;dt&gt;Linux libnuma&lt;/dt&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; + &lt;dd&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  hwloc/linux-libnuma.h provides conversion helpers between hwloc CPU sets
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  and libnuma specific types such as nodemasks and bitmasks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  It helps you use libnuma memory binding functions with hwloc CPU sets.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; + &lt;/dd&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +&lt;dt&gt;Glibc&lt;/dt&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; + &lt;dd&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  hwloc/glibc-sched.h offers conversion routines between Glibc and hwloc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  CPU sets so as to manipulate functions such as sched_setaffinity()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  together with hwloc.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; + &lt;/dd&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +&lt;dt&gt;OpenFabrics Verbs&lt;/dt&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; + &lt;dd&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  hwloc/openfabrics-verbs.h help interoperability with the OpenFabrics Verbs
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  interface, for instance by returning the list of processors near an
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +  InfiniBand device.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; + &lt;/dd&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +&lt;/dl&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt; +
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  \page threadsafety Thread safety
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Like most libraries that mainly fill data structures, hwloc is not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hwloc-svn mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0906/merge">merge</a>
</ul>
<!-- attachment="merge" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0907.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>Previous message:</strong> <a href="0905.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>In reply to:</strong> <a href="0905.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0907.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>Reply:</strong> <a href="0907.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
<li><strong>Reply:</strong> <a href="0908.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1960"</a>
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
