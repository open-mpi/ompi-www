<?
$subject_val = "Re: [hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 17:44:55 2011" -->
<!-- isoreceived="20110217224455" -->
<!-- sent="Thu, 17 Feb 2011 17:44:51 -0500" -->
<!-- isosent="20110217224451" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] The de-C99 of hwloc" -->
<!-- id="A078174D-9B92-41C3-9924-877470A84310_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D5DA213.4010904_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] The de-C99 of hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 17:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1953.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1951.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>In reply to:</strong> <a href="1950.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1954.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2011, at 5:32 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Minor comments:
</span><br>
<span class="quotelev1">&gt; * do you really need to check if ptr != NULL before freeing ptr ? my
</span><br>
<span class="quotelev1">&gt; free accepts NULL ptr
</span><br>
<p>I do it because:
<br>
<p>- it's just defensive programming
<br>
- I've seen some free() implementations output to stderr when free(NULL) is invoked
<br>
<p><span class="quotelev1">&gt; * I would rather assert(0) when type is OBJ_TYPE_MAX in switches
</span><br>
<p>Good call; I'll do that.
<br>
<p><span class="quotelev1">&gt; * note that backporting to 1.1 would conflict in the distance stuff
</span><br>
<span class="quotelev1">&gt; (some code was moved from src/topology.c to distance.c, and types were
</span><br>
<span class="quotelev1">&gt; changed from unsigned to float)
</span><br>
<p>Oy; ok.
<br>
<p><span class="quotelev1">&gt; What's your plan now?
</span><br>
<p>Need to have the other back ends de-C99'ed, too, but I don't have access to those kinds of machines, so I can't really do it.  :-(
<br>
<p><span class="quotelev1">&gt; Apply this to hwloc trunk, don't backport in hwloc
</span><br>
<span class="quotelev1">&gt; 1.1, but backport to OMPI's copy of hwloc 1.1 to get some wide testing?
</span><br>
<p>Trunk, yes -- after Samuel comments and we talk about how to do the other back ends.
<br>
<p>Once we're done, I'll probably take a whack at back-porting to 1.1 (even if it's not a straight svn merge) because it certainly is nicer to have stock versions of hwloc in ompi rather than a hacked version.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="1953.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1951.php">Brice Goglin: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>In reply to:</strong> <a href="1950.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1954.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
