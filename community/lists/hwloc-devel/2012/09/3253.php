<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 11:23:19 2012" -->
<!-- isoreceived="20120905152319" -->
<!-- sent="Wed, 5 Sep 2012 11:23:14 -0400" -->
<!-- isosent="20120905152314" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src" -->
<!-- id="B5F030E0-0431-45D8-93F5-428C5F6B3CBF_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="50476BD0.3010101_at_inria.fr" -->
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
<strong>Date:</strong> 2012-09-05 11:23:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3254.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3252.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3250.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3256.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3256.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3262.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 5, 2012, at 11:12 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; To be clear: we have exactly the same situation in OMPI, and we do not link any of our DSOs against libmpi.so (we used to, but we don't any more because of the discussion on the <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a> wiki page).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I would need to remove -no-undefined from plugins ldflags and darwin
</span><br>
<span class="quotelev1">&gt; (and you?) may be happy again? But iirc, removing this flag broke
</span><br>
<span class="quotelev1">&gt; something else, I'll check again.
</span><br>
<p>Ah, yes; I confess that I have not looked closely on the components branch.  :-(
<br>
<p>But yes; you should not have --no-undefined when building the plugins.  It's fine for building libhwloc, I think.
<br>
<p><span class="quotelev1">&gt; By the way, we have almost no internal state in hwloc.
</span><br>
<p><p>Fair enough.
<br>
<p>So let's get back to your question: how to fix this?
<br>
<p>In OMPI, we settled on the compromise that I (briefly) mentioned earlier.  Here it is spelled out more specifically:
<br>
<p>1. We do not allow &quot;./configure --enable-static --enable-shared&quot;.  Even though that's valid Automake/Libtool (i.e., it'll generate libhwloc.a *and* libhwloc.so), we don't allow it.
<br>
<p>2. If --enable-shared (which is OMPI's default), we build plugins as DSOs and do not link them against libmpi.so (and friends).
<br>
<p>3. If --enable-static, we build plugins are part of libmpi.a (and friends).  Issues #9 and #12 from table 1 on the wiki are avoided, as are 
<br>
<p>4. However: in both libmpi.so / libmpi.a cases, we can still allow the use of DSOs -- e.g., if a vendor drops in another DSO plugin that OMPI will just find/load/use at run time.  This is cases #2, #5, #8, and #11 in table 1.
<br>
<p>5. All that being said, if it is desirable to open libmpi in a private linker scope, we define that that will only work if you slurp all the plugins into libmpi (either libmpi.so, in which case it can directly be dlopened, or in libmpi.a, in which case libmpi.a must be linked into something_else.so which is dlopened).  And the dlopen functionality in libmpi just plain won't work -- e.g., vendors can't drop in new DSOs to an OMPI installation and expect them to work (because any DSOs that libmpi opens won't be able to find libmpi's symbols in the process space, because libmpi itself is in a private scope).
<br>
<p>Clear as mud?  :-)
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
<li><strong>Next message:</strong> <a href="3254.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3252.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>In reply to:</strong> <a href="3250.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3256.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3256.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Reply:</strong> <a href="3262.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
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
