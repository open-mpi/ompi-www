<?
$subject_val = "Re: [hwloc-devel] -lhwloc in components.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 11:05:44 2012" -->
<!-- isoreceived="20120905150544" -->
<!-- sent="Wed, 5 Sep 2012 11:05:39 -0400" -->
<!-- isosent="20120905150539" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] -lhwloc in components." -->
<!-- id="2A7593FC-8988-4CD5-AB6C-214BA451BF25_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120905142134.GL2384_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] -lhwloc in components.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 11:05:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3248.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3246.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3244.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3249.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3249.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2012, at 10:21 AM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; So ltdl does not help for that matter?
</span><br>
<p>No.  It's not really an ltdl issue.  ltdl is just a portable wrapper around OS-specific dlopen-like mechanisms.  
<br>
<p>Back-end linker semantics (like these) are a whole different issue.
<br>
<p><span class="quotelev1">&gt; One way would be to pass to the component a structure with all the
</span><br>
<span class="quotelev1">&gt; useful function pointers (using #define to keep the same source code).
</span><br>
<p>We thought about this in OMPI and decided it would be a nightmare in the source code.  That being said, we didn't *actually try it*, so I can't say for sure.  But it certainly does make me nervous.
<br>
<p><span class="quotelev1">&gt; Another way would be to gather the allowed functions into a separate
</span><br>
<span class="quotelev1">&gt; libhwloc-components library without internal state, thus allowing
</span><br>
<span class="quotelev1">&gt; several copies, but that would bring a possibility of differing versions
</span><br>
<span class="quotelev1">&gt; between e.g. a statically-linked libhwloc.a and the dynamically-loaded
</span><br>
<span class="quotelev1">&gt; libhwloc-components.so.
</span><br>
<p><p>Yuck.  If a software design *requires* multiple copies of the code, that just seems pretty ugly to me.  :-\
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3248.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3246.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3244.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3249.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
<li><strong>Reply:</strong> <a href="3249.php">Samuel Thibault: "Re: [hwloc-devel] -lhwloc in components."</a>
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
