<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  4 20:21:47 2010" -->
<!-- isoreceived="20100305012147" -->
<!-- sent="Thu, 4 Mar 2010 19:01:59 -0500" -->
<!-- isosent="20100305000159" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795" -->
<!-- id="21CF67F7-F007-4DDA-9F63-51E49B13C1DD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B8F6E6E.9080303_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-04 19:01:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0714.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>Previous message:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>In reply to:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0714.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>Reply:</strong> <a href="0714.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed now; sorry about that.  
<br>
<p>I discovered that the X detection wasn't working properly on my Mac, so I changed from AC_PATH_X to AC_PATH_XTRA and incorporated those flags into CFLAGS and LIBS.
<br>
<p>Can you guys check that X detection is still working properly for you?
<br>
<p><p>On Mar 4, 2010, at 3:25 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; jsquyres_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: jsquyres
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2010-03-01 20:56:14 EST (Mon, 01 Mar 2010)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1795
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1795">https://svn.open-mpi.org/trac/hwloc/changeset/1795</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Fix a bunch of small errors:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  * Ensure the srcdir gets the right value
</span><br>
<span class="quotelev2">&gt; &gt;  * Convert some more &quot;if test...&quot; to &quot;AS_IF([...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  * Embedding mode now disables docs, debugging, cairo, and xml support
</span><br>
<span class="quotelev2">&gt; &gt;    by default.  Currently, there is no good/documented way to change
</span><br>
<span class="quotelev2">&gt; &gt;    these defaults -- let's see if any embedded project cares...
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks this also disables Cairo and friends in the main hwloc
</span><br>
<span class="quotelev1">&gt; configure too, not only when embedding in another project. Are we
</span><br>
<span class="quotelev1">&gt; supposed to add things like enable_cairo=yes to configure.ac before
</span><br>
<span class="quotelev1">&gt; calling the embedding code?
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0714.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>Previous message:</strong> <a href="0712.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>In reply to:</strong> <a href="0709.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0714.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
<li><strong>Reply:</strong> <a href="0714.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1795"</a>
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
