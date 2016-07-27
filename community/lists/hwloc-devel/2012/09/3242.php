<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 09:58:19 2012" -->
<!-- isoreceived="20120905135819" -->
<!-- sent="Wed, 5 Sep 2012 09:58:10 -0400" -->
<!-- isosent="20120905135810" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src" -->
<!-- id="8BB77195-738A-46E9-85F4-30EA06EE3362_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C5FBB5C-1E43-417D-A577-82E2314039B8_at_cisco.com" -->
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
<strong>Date:</strong> 2012-09-05 09:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3243.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3241.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3241.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3243.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3243.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should clarify...
<br>
<p>In OMPI, if we're building libmpi.so, we default to building plugins as DSOs.  If we're building libmpi.a, then we slurp all the plugins into libmpi.a (i.e., don't build them as DSOs).  This avoids many of the issues in table 2.
<br>
<p><p>On Sep 5, 2012, at 9:54 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This is a bad idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to remember the reason why, but we explicitly *removed* such -l statements (e.g., removed &quot;-lmpi&quot; from the plugins).  Hmm...  Oh, right.  Every time I think I understand linkers, I find out that I don't.  So last time we had a Big Confusion Discussion About Linkers (BCDAL), I wrote it all up:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The 4th column in these tables is labeled &quot;OMPI DSO components depend on libmpi.so?&quot; (which is somewhat of a misnomer, because not all components are at the MPI layer -- so consider it to mean &quot;OMPI DSO components depend on some OMPI library, such as libmpi.so?&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem cases are #9 and #12 in the first table: i.e., static linking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead, we use lt_dladvise() to open hwloc plugins in the same scope as the main application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course, this has its own tradeoffs -- if hwloc itself, is opened as a plugin in a private scope, then the plugins won't be able to find the symbols it needs (i.e., cases #14, #15, #17, #18, #20, #21, #23, and #24 in the 2nd table). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Until POSIX effects hierarchical linker scopes (or at least something like &quot;please dlopen this plugin and put it in XYZ linker scope&quot;), there's really no good solution here.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 5, 2012, at 6:03 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: bgoglin (Brice Goglin)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2012-09-05 06:03:52 EDT (Wed, 05 Sep 2012)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 4815
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4815">https://svn.open-mpi.org/trac/hwloc/changeset/4815</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Pass -lhwloc to all plugins, at least Darwin wants it
</span><br>
<span class="quotelev2">&gt;&gt; (plugins use some hwloc functions)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Define a plugins_ldflags with all common stuff for plugins
</span><br>
<span class="quotelev2">&gt;&gt; (this somehow reverts r4811)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  branches/components/src/Makefile.am |    13 +++++++------                           
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 7 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: branches/components/src/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- branches/components/src/Makefile.am	Wed Sep  5 06:03:36 2012	(r4814)
</span><br>
<span class="quotelev2">&gt;&gt; +++ branches/components/src/Makefile.am	2012-09-05 06:03:52 EDT (Wed, 05 Sep 2012)	(r4815)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -21,6 +21,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pluginsdir = $(libdir)/hwloc
</span><br>
<span class="quotelev2">&gt;&gt; plugins_LTLIBRARIES = 
</span><br>
<span class="quotelev2">&gt;&gt; +plugins_ldflags = -module -avoid-version -lhwloc
</span><br>
<span class="quotelev2">&gt;&gt; AM_CPPFLAGS += -DHWLOC_PLUGINS_DIR=\&quot;$(pluginsdir)\&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # Sources and ldflags
</span><br>
<span class="quotelev2">&gt;&gt; @@ -40,7 +41,6 @@
</span><br>
<span class="quotelev2">&gt;&gt;        topology-xml.c \
</span><br>
<span class="quotelev2">&gt;&gt;        topology-xml-nolibxml.c
</span><br>
<span class="quotelev2">&gt;&gt; ldflags =
</span><br>
<span class="quotelev2">&gt;&gt; -common_ldflags = 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # Conditionally add to the sources and ldflags
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -52,7 +52,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; xml_libxml_la_SOURCES = topology-xml-libxml.c
</span><br>
<span class="quotelev2">&gt;&gt; xml_libxml_la_CPPFLAGS = $(AM_CPPFLAGS) -DHWLOC_BUILD_PLUGIN
</span><br>
<span class="quotelev2">&gt;&gt; xml_libxml_la_CFLAGS = $(AM_CFLAGS) $(HWLOC_LIBXML2_CFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; -xml_libxml_la_LDFLAGS = $(common_ldflags) -module -avoid-version $(HWLOC_LIBXML2_LIBS)
</span><br>
<span class="quotelev2">&gt;&gt; +xml_libxml_la_LDFLAGS = $(plugins_ldflags) $(HWLOC_LIBXML2_LIBS)
</span><br>
<span class="quotelev2">&gt;&gt; endif
</span><br>
<span class="quotelev2">&gt;&gt; endif HWLOC_HAVE_LIBXML2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; core_libpci_la_SOURCES = topology-libpci.c
</span><br>
<span class="quotelev2">&gt;&gt; core_libpci_la_CPPFLAGS = $(AM_CPPFLAGS) -DHWLOC_BUILD_PLUGIN
</span><br>
<span class="quotelev2">&gt;&gt; core_libpci_la_CFLAGS = $(AM_CFLAGS) $(HWLOC_PCI_CFLAGS)
</span><br>
<span class="quotelev2">&gt;&gt; -core_libpci_la_LDFLAGS = $(common_ldflags) -module -avoid-version $(HWLOC_PCI_LIBS)
</span><br>
<span class="quotelev2">&gt;&gt; +core_libpci_la_LDFLAGS = $(plugins_ldflags) $(HWLOC_PCI_LIBS)
</span><br>
<span class="quotelev2">&gt;&gt; endif
</span><br>
<span class="quotelev2">&gt;&gt; endif HWLOC_HAVE_LIBPCI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; @@ -105,7 +105,8 @@
</span><br>
<span class="quotelev2">&gt;&gt; endif HWLOC_HAVE_FREEBSD
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if HWLOC_HAVE_GCC
</span><br>
<span class="quotelev2">&gt;&gt; -common_ldflags += -no-undefined
</span><br>
<span class="quotelev2">&gt;&gt; +ldflags += -no-undefined
</span><br>
<span class="quotelev2">&gt;&gt; +plugins_ldflags += -no-undefined
</span><br>
<span class="quotelev2">&gt;&gt; endif HWLOC_HAVE_GCC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if HWLOC_HAVE_WINDOWS
</span><br>
<span class="quotelev2">&gt;&gt; @@ -136,7 +137,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; # Installable library
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; libhwloc_la_SOURCES = $(sources)
</span><br>
<span class="quotelev2">&gt;&gt; -libhwloc_la_LDFLAGS = $(common_ldflags) $(ldflags) -version-info $(libhwloc_so_version) $(HWLOC_LIBS)
</span><br>
<span class="quotelev2">&gt;&gt; +libhwloc_la_LDFLAGS = $(ldflags) -version-info $(libhwloc_so_version) $(HWLOC_LIBS)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; if HWLOC_HAVE_PLUGINS
</span><br>
<span class="quotelev2">&gt;&gt; AM_CPPFLAGS += $(LTDLINCL)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -168,5 +169,5 @@
</span><br>
<span class="quotelev2">&gt;&gt; check_LTLIBRARIES = core_fake.la
</span><br>
<span class="quotelev2">&gt;&gt; core_fake_la_SOURCES = topology-fake.c
</span><br>
<span class="quotelev2">&gt;&gt; core_fake_la_CPPFLAGS = $(AM_CPPFLAGS) -DHWLOC_BUILD_PLUGIN
</span><br>
<span class="quotelev2">&gt;&gt; -core_fake_la_LDFLAGS = $(common_ldflags) -module -avoid-version -rpath /nowhere # force libtool to build a shared-library even it's check-only
</span><br>
<span class="quotelev2">&gt;&gt; +core_fake_la_LDFLAGS = $(plugins_ldflags) -rpath /nowhere # force libtool to build a shared-library even it's check-only
</span><br>
<span class="quotelev2">&gt;&gt; endif
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="3243.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3241.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3241.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3243.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3243.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
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
