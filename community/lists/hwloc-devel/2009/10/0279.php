<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 08:40:36 2009" -->
<!-- isoreceived="20091029124036" -->
<!-- sent="Thu, 29 Oct 2009 13:40:18 +0100" -->
<!-- isosent="20091029124018" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252" -->
<!-- id="4AE98D32.5070702_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200910290756.n9T7ufIV023750_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 08:40:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0280.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<li><strong>Previous message:</strong> <a href="0278.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0280.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<li><strong>Reply:</strong> <a href="0280.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bgoglin_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2009-10-29 03:56:40 EDT (Thu, 29 Oct 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 1252
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1252">https://svn.open-mpi.org/trac/hwloc/changeset/1252</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; pciutils only got a .pc recently (in 2.2.6), so add configure code to manually check for its headers and library
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    branches/libpci/configure.ac |    10 ++++++++++                              
</span><br>
<span class="quotelev1">&gt;    1 files changed, 10 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/libpci/configure.ac
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/libpci/configure.ac	(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/libpci/configure.ac	2009-10-29 03:56:40 EDT (Thu, 29 Oct 2009)
</span><br>
<span class="quotelev1">&gt; @@ -376,6 +376,16 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  if test &quot;x$enable_pci&quot; = &quot;xyes&quot;; then
</span><br>
<span class="quotelev1">&gt;    PKG_CHECK_MODULES([PCI], [libpci], [:], [enable_pci=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; +  # manually check pciutils in case a old one without .pc is installed
</span><br>
<span class="quotelev1">&gt; +  if test &quot;x$enable_pci&quot; = &quot;xno&quot;; then
</span><br>
<span class="quotelev1">&gt; +    AC_CHECK_HEADERS([pci/pci.h], [
</span><br>
<span class="quotelev1">&gt; +      AC_CHECK_LIB([pci], [pci_cleanup], [enable_pci=yes]
</span><br>
<p><p>By the way, I used AC_CHECK_LIB instead of AC_HAVE_LIBRARY without any
<br>
good reason here. The only difference seems to be that the former checks
<br>
for an actual function name in the lib. I don't know if/how the libpci
<br>
ABI actually changed in the past. Is their any common sense driving such
<br>
a choice? AC_SEARCH_LIBS is sometimes recommended but I don't think it
<br>
matters for libpci.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0280.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<li><strong>Previous message:</strong> <a href="0278.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1255"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0280.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
<li><strong>Reply:</strong> <a href="0280.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1252"</a>
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
