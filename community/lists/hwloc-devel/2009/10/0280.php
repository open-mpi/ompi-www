<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 09:08:17 2009" -->
<!-- isoreceived="20091029130817" -->
<!-- sent="Thu, 29 Oct 2009 09:08:10 -0400" -->
<!-- isosent="20091029130810" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252" -->
<!-- id="30D51A50-2529-4395-96C1-707FA6FDDB87_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AE98D32.5070702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 09:08:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0281.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<li><strong>Previous message:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<li><strong>In reply to:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AC_HAVE_LIBRARY is listed as an obsolete / deprecated macro in the AC  
<br>
2.64 docs.  So I think AC_CHECK_LIB is the better choice.
<br>
<p><p>On Oct 29, 2009, at 8:40 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; bgoglin_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: bgoglin
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2009-10-29 03:56:40 EDT (Thu, 29 Oct 2009)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1252
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1252">https://svn.open-mpi.org/trac/hwloc/changeset/1252</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; pciutils only got a .pc recently (in 2.2.6), so add configure code  
</span><br>
<span class="quotelev1">&gt; to manually check for its headers and library
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    branches/libpci/configure.ac |    10 ++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 10 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: branches/libpci/configure.ac
</span><br>
<span class="quotelev2">&gt; &gt;  
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
<span class="quotelev2">&gt; &gt; --- branches/libpci/configure.ac      (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ branches/libpci/configure.ac      2009-10-29 03:56:40 EDT  
</span><br>
<span class="quotelev1">&gt; (Thu, 29 Oct 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -376,6 +376,16 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  if test &quot;x$enable_pci&quot; = &quot;xyes&quot;; then
</span><br>
<span class="quotelev2">&gt; &gt;    PKG_CHECK_MODULES([PCI], [libpci], [:], [enable_pci=&quot;no&quot;])
</span><br>
<span class="quotelev2">&gt; &gt; +  # manually check pciutils in case a old one without .pc is  
</span><br>
<span class="quotelev1">&gt; installed
</span><br>
<span class="quotelev2">&gt; &gt; +  if test &quot;x$enable_pci&quot; = &quot;xno&quot;; then
</span><br>
<span class="quotelev2">&gt; &gt; +    AC_CHECK_HEADERS([pci/pci.h], [
</span><br>
<span class="quotelev2">&gt; &gt; +      AC_CHECK_LIB([pci], [pci_cleanup], [enable_pci=yes]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, I used AC_CHECK_LIB instead of AC_HAVE_LIBRARY without any
</span><br>
<span class="quotelev1">&gt; good reason here. The only difference seems to be that the former  
</span><br>
<span class="quotelev1">&gt; checks
</span><br>
<span class="quotelev1">&gt; for an actual function name in the lib. I don't know if/how the libpci
</span><br>
<span class="quotelev1">&gt; ABI actually changed in the past. Is their any common sense driving  
</span><br>
<span class="quotelev1">&gt; such
</span><br>
<span class="quotelev1">&gt; a choice? AC_SEARCH_LIBS is sometimes recommended but I don't think it
</span><br>
<span class="quotelev1">&gt; matters for libpci.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0281.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<li><strong>Previous message:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<li><strong>In reply to:</strong> <a href="0279.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
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
