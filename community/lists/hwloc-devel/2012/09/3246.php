<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 11:03:30 2012" -->
<!-- isoreceived="20120905150330" -->
<!-- sent="Wed, 5 Sep 2012 11:03:25 -0400" -->
<!-- isosent="20120905150325" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src" -->
<!-- id="05CE14FC-E29E-495E-A91D-50841E72F090_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50475DF0.4010207_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 11:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3247.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Previous message:</strong> <a href="3245.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3243.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3244.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2012, at 10:13 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I understand pretty much nothing in your mails :)
</span><br>
<p>Don't linkers suck?  :-)  That wiki page is the result of much hard-won knowledge.
<br>
<p><span class="quotelev1">&gt; The problem I was trying to fix below is that linking hwloc plugins on
</span><br>
<span class="quotelev1">&gt; Darwin failed because plugins referred to hwloc-core symbols.
</span><br>
<p>That should be fine, as long as you are dlopening the plugins in the same scope as the main application.  Then the unresolved symbols in the plugins should be resolved against the libhwloc.so that is already loaded in the process space.
<br>
<p>That's what lt_dladvise() is for.
<br>
<p><span class="quotelev1">&gt; Nothing on
</span><br>
<span class="quotelev1">&gt; the libtool command-line said where to find those symbols (I don't
</span><br>
<span class="quotelev1">&gt; understand why it worked on other platforms).
</span><br>
<p>Correct.  This is more of a run-time issue than a compile/link-time issue (discounting -rpath, for the moment).
<br>
<p>To clarify: it's fine to build any kind of shared library (DSO or otherwise) with unresolved symbols.  They just need to be resolved when that shared library is loaded -- either by symbols that are already in the process space or by some dependent library that also gets loaded at the same time.
<br>
<p><span class="quotelev1">&gt; I added -lhwloc as a way to tell the linker &quot;those symbols are there&quot;. I
</span><br>
<span class="quotelev1">&gt; didn't think it would statically link libhwloc inside the plugins, and
</span><br>
<span class="quotelev1">&gt; it doesn't seem to do so (from what I see in objdump). Is this what you
</span><br>
<span class="quotelev1">&gt; mean?
</span><br>
<p>Yes and no.
<br>
<p>If libhwloc is libhowloc.a, then yes, it will statically link those symbols in the DSOs.  If libhwloc is libhwloc.so, then you're probably ok -- this is case #1 (and footnote (*1*)) on table 1.  Specifically:
<br>
<p>(*1*) As far as we know, this works on all platforms that have dlopen (i.e., almost everywhere). But we've only tested (recently) Linux, OSX, and Solaris. These 3 dynamic loaders are smart enough to realize that they only need to load libmpi.so once (i.e., that the implicit dependency of libmpi.so brought in by the components is the same libmpi.so that is already loaded), so everything works fine.
<br>
<p><span class="quotelev1">&gt; It's really a problem when linking, not about loading (and scopes that I
</span><br>
<span class="quotelev1">&gt; don't know anything about), but I couldn't test loading before linking
</span><br>
<span class="quotelev1">&gt; worked.
</span><br>
<p>No.  It actually is a problem with loading -- not linking.  :-)
<br>
<p><span class="quotelev1">&gt; Anyway, how should I solve this?
</span><br>
<p>Let me answer Samuel's mails and come back to this question...
<br>
<p><span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 05/09/2012 15:58, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I should clarify...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In OMPI, if we're building libmpi.so, we default to building plugins as DSOs.  If we're building libmpi.a, then we slurp all the plugins into libmpi.a (i.e., don't build them as DSOs).  This avoids many of the issues in table 2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 5, 2012, at 9:54 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a bad idea.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to remember the reason why, but we explicitly *removed* such -l statements (e.g., removed &quot;-lmpi&quot; from the plugins).  Hmm...  Oh, right.  Every time I think I understand linkers, I find out that I don't.  So last time we had a Big Confusion Discussion About Linkers (BCDAL), I wrote it all up:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The 4th column in these tables is labeled &quot;OMPI DSO components depend on libmpi.so?&quot; (which is somewhat of a misnomer, because not all components are at the MPI layer -- so consider it to mean &quot;OMPI DSO components depend on some OMPI library, such as libmpi.so?&quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem cases are #9 and #12 in the first table: i.e., static linking.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Instead, we use lt_dladvise() to open hwloc plugins in the same scope as the main application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course, this has its own tradeoffs -- if hwloc itself, is opened as a plugin in a private scope, then the plugins won't be able to find the symbols it needs (i.e., cases #14, #15, #17, #18, #20, #21, #23, and #24 in the 2nd table). 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Until POSIX effects hierarchical linker scopes (or at least something like &quot;please dlopen this plugin and put it in XYZ linker scope&quot;), there's really no good solution here.  :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 5, 2012, at 6:03 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Author: bgoglin (Brice Goglin)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: 2012-09-05 06:03:52 EDT (Wed, 05 Sep 2012)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; New Revision: 4815
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4815">https://svn.open-mpi.org/trac/hwloc/changeset/4815</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pass -lhwloc to all plugins, at least Darwin wants it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (plugins use some hwloc functions)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Define a plugins_ldflags with all common stuff for plugins
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (this somehow reverts r4811)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; branches/components/src/Makefile.am |    13 +++++++------                           
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 files changed, 7 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Modified: branches/components/src/Makefile.am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --- branches/components/src/Makefile.am	Wed Sep  5 06:03:36 2012	(r4814)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +++ branches/components/src/Makefile.am	2012-09-05 06:03:52 EDT (Wed, 05 Sep 2012)	(r4815)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -21,6 +21,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pluginsdir = $(libdir)/hwloc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; plugins_LTLIBRARIES = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +plugins_ldflags = -module -avoid-version -lhwloc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AM_CPPFLAGS += -DHWLOC_PLUGINS_DIR=\&quot;$(pluginsdir)\&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Sources and ldflags
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -40,7 +41,6 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       topology-xml.c \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       topology-xml-nolibxml.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ldflags =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -common_ldflags = 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Conditionally add to the sources and ldflags
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -52,7 +52,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xml_libxml_la_SOURCES = topology-xml-libxml.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xml_libxml_la_CPPFLAGS = $(AM_CPPFLAGS) -DHWLOC_BUILD_PLUGIN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xml_libxml_la_CFLAGS = $(AM_CFLAGS) $(HWLOC_LIBXML2_CFLAGS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -xml_libxml_la_LDFLAGS = $(common_ldflags) -module -avoid-version $(HWLOC_LIBXML2_LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +xml_libxml_la_LDFLAGS = $(plugins_ldflags) $(HWLOC_LIBXML2_LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endif HWLOC_HAVE_LIBXML2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core_libpci_la_SOURCES = topology-libpci.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core_libpci_la_CPPFLAGS = $(AM_CPPFLAGS) -DHWLOC_BUILD_PLUGIN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core_libpci_la_CFLAGS = $(AM_CFLAGS) $(HWLOC_PCI_CFLAGS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -core_libpci_la_LDFLAGS = $(common_ldflags) -module -avoid-version $(HWLOC_PCI_LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +core_libpci_la_LDFLAGS = $(plugins_ldflags) $(HWLOC_PCI_LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endif HWLOC_HAVE_LIBPCI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -105,7 +105,8 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endif HWLOC_HAVE_FREEBSD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if HWLOC_HAVE_GCC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -common_ldflags += -no-undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +ldflags += -no-undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +plugins_ldflags += -no-undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endif HWLOC_HAVE_GCC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if HWLOC_HAVE_WINDOWS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -136,7 +137,7 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Installable library
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libhwloc_la_SOURCES = $(sources)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -libhwloc_la_LDFLAGS = $(common_ldflags) $(ldflags) -version-info $(libhwloc_so_version) $(HWLOC_LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +libhwloc_la_LDFLAGS = $(ldflags) -version-info $(libhwloc_so_version) $(HWLOC_LIBS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if HWLOC_HAVE_PLUGINS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AM_CPPFLAGS += $(LTDLINCL)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; @@ -168,5 +169,5 @@
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; check_LTLIBRARIES = core_fake.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core_fake_la_SOURCES = topology-fake.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; core_fake_la_CPPFLAGS = $(AM_CPPFLAGS) -DHWLOC_BUILD_PLUGIN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -core_fake_la_LDFLAGS = $(common_ldflags) -module -avoid-version -rpath /nowhere # force libtool to build a shared-library even it's check-only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +core_fake_la_LDFLAGS = $(plugins_ldflags) -rpath /nowhere # force libtool to build a shared-library even it's check-only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; endif
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3247.php">Jeff Squyres: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Previous message:</strong> <a href="3245.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3243.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3244.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
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
