<?
$subject_val = "Re: [hwloc-devel] doxygen autoconf setup";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 17:08:27 2009" -->
<!-- isoreceived="20090909210827" -->
<!-- sent="Wed, 09 Sep 2009 23:08:00 +0200" -->
<!-- isosent="20090909210800" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] doxygen autoconf setup" -->
<!-- id="4AA81930.7020301_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52937630-0155-4F9C-9A42-9ABFA762F279_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] doxygen autoconf setup<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 17:08:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0011.php">Jeff Squyres: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Previous message:</strong> <a href="0009.php">Jeff Squyres: "[hwloc-devel] doxygen autoconf setup"</a>
<li><strong>In reply to:</strong> <a href="0009.php">Jeff Squyres: "[hwloc-devel] doxygen autoconf setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0011.php">Jeff Squyres: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Reply:</strong> <a href="0011.php">Jeff Squyres: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Reply:</strong> <a href="0013.php">Samuel Thibault: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm a little confused by the doxygen setup in configure.ac -- can one
</span><br>
<span class="quotelev1">&gt; of you shed some light on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After the DX_* macros, I see the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AC_CHECK_FILE(${srcdir}/doc/doxygen-doc/man, [hwloc_have_man=yes], [:])
</span><br>
<span class="quotelev1">&gt; AC_CHECK_FILE(${srcdir}/doc/doxygen-doc/hwloc.pdf,
</span><br>
<span class="quotelev1">&gt; [hwloc_have_pdf=yes], [:])
</span><br>
<span class="quotelev1">&gt; AC_CHECK_FILE(${srcdir}/doc/doxygen-doc/html, [hwloc_have_html=yes], [:])
</span><br>
<span class="quotelev1">&gt; AC_CHECK_FILE(${srcdir}/doc/doxygen-doc/hwloc.tag,
</span><br>
<span class="quotelev1">&gt; [hwloc_have_tag=yes], [:])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What are these supposed to do?  None of those directories will exist
</span><br>
<span class="quotelev1">&gt; the first time you run configure.  Indeed, these tests really only
</span><br>
<span class="quotelev1">&gt; test what happened the last time you built the doxygen output -- not
</span><br>
<span class="quotelev1">&gt; what *will* happen when you run &quot;make&quot;.
</span><br>
<p>I think the idea is that we build the doc before make dist so that it
<br>
gets included in the tarball and users don't have to install many
<br>
dependencies to rebuild it. So we build it once and configure disables
<br>
it when it's already built.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0011.php">Jeff Squyres: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Previous message:</strong> <a href="0009.php">Jeff Squyres: "[hwloc-devel] doxygen autoconf setup"</a>
<li><strong>In reply to:</strong> <a href="0009.php">Jeff Squyres: "[hwloc-devel] doxygen autoconf setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0011.php">Jeff Squyres: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Reply:</strong> <a href="0011.php">Jeff Squyres: "Re: [hwloc-devel] doxygen autoconf setup"</a>
<li><strong>Reply:</strong> <a href="0013.php">Samuel Thibault: "Re: [hwloc-devel] doxygen autoconf setup"</a>
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
