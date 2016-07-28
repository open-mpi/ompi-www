<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 03:25:23 2010" -->
<!-- isoreceived="20100304082523" -->
<!-- sent="Thu, 04 Mar 2010 09:25:18 +0100" -->
<!-- isosent="20100304082518" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795" -->
<!-- id="4B8F6E6E.9080303_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201003020156.o221uEHf030784_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 03:25:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0710.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0708.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>Reply:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>Reply:</strong> <a href="0713.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
jsquyres_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2010-03-01 20:56:14 EST (Mon, 01 Mar 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1795
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1795">https://svn.open-mpi.org/trac/hwloc/changeset/1795</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix a bunch of small errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * Ensure the srcdir gets the right value
</span><br>
<span class="quotelev1">&gt;  * Convert some more &quot;if test...&quot; to &quot;AS_IF([...&quot;
</span><br>
<span class="quotelev1">&gt;  * Embedding mode now disables docs, debugging, cairo, and xml support
</span><br>
<span class="quotelev1">&gt;    by default.  Currently, there is no good/documented way to change
</span><br>
<span class="quotelev1">&gt;    these defaults -- let's see if any embedded project cares...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It looks this also disables Cairo and friends in the main hwloc
<br>
configure too, not only when embedding in another project. Are we
<br>
supposed to add things like enable_cairo=yes to configure.ac before
<br>
calling the embedding code?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0710.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="0708.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>Reply:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>Reply:</strong> <a href="0713.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
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
