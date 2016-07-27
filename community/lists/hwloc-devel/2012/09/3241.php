<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 09:54:44 2012" -->
<!-- isoreceived="20120905135444" -->
<!-- sent="Wed, 5 Sep 2012 09:54:38 -0400" -->
<!-- isosent="20120905135438" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src" -->
<!-- id="4C5FBB5C-1E43-417D-A577-82E2314039B8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120905100352.68F0615F9CB_at_tiger.crest.iu.edu" -->
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
<strong>Date:</strong> 2012-09-05 09:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3242.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3240.php">Brice Goglin: "[hwloc-devel] plugins status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3242.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3242.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3244.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a bad idea.
<br>
<p>I'm trying to remember the reason why, but we explicitly *removed* such -l statements (e.g., removed &quot;-lmpi&quot; from the plugins).  Hmm...  Oh, right.  Every time I think I understand linkers, I find out that I don't.  So last time we had a Big Confusion Discussion About Linkers (BCDAL), I wrote it all up:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a>
<br>
<p>The 4th column in these tables is labeled &quot;OMPI DSO components depend on libmpi.so?&quot; (which is somewhat of a misnomer, because not all components are at the MPI layer -- so consider it to mean &quot;OMPI DSO components depend on some OMPI library, such as libmpi.so?&quot;)
<br>
<p>The problem cases are #9 and #12 in the first table: i.e., static linking.
<br>
<p>Instead, we use lt_dladvise() to open hwloc plugins in the same scope as the main application.
<br>
<p>Of course, this has its own tradeoffs -- if hwloc itself, is opened as a plugin in a private scope, then the plugins won't be able to find the symbols it needs (i.e., cases #14, #15, #17, #18, #20, #21, #23, and #24 in the 2nd table). 
<br>
<p>Until POSIX effects hierarchical linker scopes (or at least something like &quot;please dlopen this plugin and put it in XYZ linker scope&quot;), there's really no good solution here.  :-(
<br>
<p><p><p>On Sep 5, 2012, at 6:03 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: bgoglin (Brice Goglin)
</span><br>
<span class="quotelev1">&gt; Date: 2012-09-05 06:03:52 EDT (Wed, 05 Sep 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 4815
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/4815">https://svn.open-mpi.org/trac/hwloc/changeset/4815</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Pass -lhwloc to all plugins, at least Darwin wants it
</span><br>
<span class="quotelev1">&gt; (plugins use some hwloc functions)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Define a plugins_ldflags with all common stuff for plugins
</span><br>
<span class="quotelev1">&gt; (this somehow reverts r4811)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   branches/components/src/Makefile.am |    13 +++++++------                           
</span><br>
<span class="quotelev1">&gt;   1 files changed, 7 insertions(+), 6 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/components/src/Makefile.am
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/components/src/Makefile.am	Wed Sep  5 06:03:36 2012	(r4814)
</span><br>
<span class="quotelev1">&gt; +++ branches/components/src/Makefile.am	2012-09-05 06:03:52 EDT (Wed, 05 Sep 2012)	(r4815)
</span><br>
<span class="quotelev1">&gt; @@ -21,6 +21,7 @@
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pluginsdir = $(libdir)/hwloc
</span><br>
<span class="quotelev1">&gt; plugins_LTLIBRARIES = 
</span><br>
<span class="quotelev1">&gt; +plugins_ldflags = -module -avoid-version -lhwloc
</span><br>
<span class="quotelev1">&gt; AM_CPPFLAGS += -DHWLOC_PLUGINS_DIR=\&quot;$(pluginsdir)\&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Sources and ldflags
</span><br>
<span class="quotelev1">&gt; @@ -40,7 +41,6 @@
</span><br>
<span class="quotelev1">&gt;         topology-xml.c \
</span><br>
<span class="quotelev1">&gt;         topology-xml-nolibxml.c
</span><br>
<span class="quotelev1">&gt; ldflags =
</span><br>
<span class="quotelev1">&gt; -common_ldflags = 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # Conditionally add to the sources and ldflags
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -52,7 +52,7 @@
</span><br>
<span class="quotelev1">&gt; xml_libxml_la_SOURCES = topology-xml-libxml.c
</span><br>
<span class="quotelev1">&gt; xml_libxml_la_CPPFLAGS = $(AM_CPPFLAGS) -DHWLOC_BUILD_PLUGIN
</span><br>
<span class="quotelev1">&gt; xml_libxml_la_CFLAGS = $(AM_CFLAGS) $(HWLOC_LIBXML2_CFLAGS)
</span><br>
<span class="quotelev1">&gt; -xml_libxml_la_LDFLAGS = $(common_ldflags) -module -avoid-version $(HWLOC_LIBXML2_LIBS)
</span><br>
<span class="quotelev1">&gt; +xml_libxml_la_LDFLAGS = $(plugins_ldflags) $(HWLOC_LIBXML2_LIBS)
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; endif HWLOC_HAVE_LIBXML2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -64,7 +64,7 @@
</span><br>
<span class="quotelev1">&gt; core_libpci_la_SOURCES = topology-libpci.c
</span><br>
<span class="quotelev1">&gt; core_libpci_la_CPPFLAGS = $(AM_CPPFLAGS) -DHWLOC_BUILD_PLUGIN
</span><br>
<span class="quotelev1">&gt; core_libpci_la_CFLAGS = $(AM_CFLAGS) $(HWLOC_PCI_CFLAGS)
</span><br>
<span class="quotelev1">&gt; -core_libpci_la_LDFLAGS = $(common_ldflags) -module -avoid-version $(HWLOC_PCI_LIBS)
</span><br>
<span class="quotelev1">&gt; +core_libpci_la_LDFLAGS = $(plugins_ldflags) $(HWLOC_PCI_LIBS)
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; endif HWLOC_HAVE_LIBPCI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -105,7 +105,8 @@
</span><br>
<span class="quotelev1">&gt; endif HWLOC_HAVE_FREEBSD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if HWLOC_HAVE_GCC
</span><br>
<span class="quotelev1">&gt; -common_ldflags += -no-undefined
</span><br>
<span class="quotelev1">&gt; +ldflags += -no-undefined
</span><br>
<span class="quotelev1">&gt; +plugins_ldflags += -no-undefined
</span><br>
<span class="quotelev1">&gt; endif HWLOC_HAVE_GCC
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if HWLOC_HAVE_WINDOWS
</span><br>
<span class="quotelev1">&gt; @@ -136,7 +137,7 @@
</span><br>
<span class="quotelev1">&gt; # Installable library
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libhwloc_la_SOURCES = $(sources)
</span><br>
<span class="quotelev1">&gt; -libhwloc_la_LDFLAGS = $(common_ldflags) $(ldflags) -version-info $(libhwloc_so_version) $(HWLOC_LIBS)
</span><br>
<span class="quotelev1">&gt; +libhwloc_la_LDFLAGS = $(ldflags) -version-info $(libhwloc_so_version) $(HWLOC_LIBS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if HWLOC_HAVE_PLUGINS
</span><br>
<span class="quotelev1">&gt; AM_CPPFLAGS += $(LTDLINCL)
</span><br>
<span class="quotelev1">&gt; @@ -168,5 +169,5 @@
</span><br>
<span class="quotelev1">&gt; check_LTLIBRARIES = core_fake.la
</span><br>
<span class="quotelev1">&gt; core_fake_la_SOURCES = topology-fake.c
</span><br>
<span class="quotelev1">&gt; core_fake_la_CPPFLAGS = $(AM_CPPFLAGS) -DHWLOC_BUILD_PLUGIN
</span><br>
<span class="quotelev1">&gt; -core_fake_la_LDFLAGS = $(common_ldflags) -module -avoid-version -rpath /nowhere # force libtool to build a shared-library even it's check-only
</span><br>
<span class="quotelev1">&gt; +core_fake_la_LDFLAGS = $(plugins_ldflags) -rpath /nowhere # force libtool to build a shared-library even it's check-only
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
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
<li><strong>Next message:</strong> <a href="3242.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3240.php">Brice Goglin: "[hwloc-devel] plugins status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3242.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3242.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3244.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
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
