<?
$subject_val = "Re: [hwloc-devel] Some practical hwloc API feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 07:46:37 2011" -->
<!-- isoreceived="20110924114637" -->
<!-- sent="Sat, 24 Sep 2011 07:46:29 -0400" -->
<!-- isosent="20110924114629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Some practical hwloc API feedback" -->
<!-- id="DE50CF43-2772-4889-A660-2DE4E134B140_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E7BA303.2090109_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Some practical hwloc API feedback<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 07:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2457.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2455.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc2r3843)"</a>
<li><strong>In reply to:</strong> <a href="2439.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2457.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2457.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2011, at 5:05 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; No, the level always contain all elements of the same type (+depth for
</span><br>
<span class="quotelev1">&gt; caches), even if they are not at the same &quot;distance&quot; to the root (not
</span><br>
<span class="quotelev1">&gt; &quot;depth&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's say you have two single-core sockets. One with no cache. One with
</span><br>
<span class="quotelev1">&gt; a L1.
</span><br>
<span class="quotelev1">&gt; What happens is:
</span><br>
<span class="quotelev1">&gt; * first level/depth is socket, contains two sockets, cover all cores.
</span><br>
<span class="quotelev1">&gt; * level 2 is L2, single element, *does not cover all cores*
</span><br>
<span class="quotelev1">&gt; * level 3 is core, two elements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The funky thing here is that the parent/child links between the first
</span><br>
<span class="quotelev1">&gt; socket and its core go across level 2 because nothing matches there. In
</span><br>
<span class="quotelev1">&gt; the first socket, you have Socket(depth1)-&gt;Core(depth3) while in the
</span><br>
<span class="quotelev1">&gt; second socket you have Socket(depth1)-&gt;Cache(depth2)-&gt;Core(depth3)
</span><br>
<p>Huh.  I didn't know / had forgotten this.
<br>
<p>I think we definitely need to call this out in the docs.
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
<li><strong>Next message:</strong> <a href="2457.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Previous message:</strong> <a href="2455.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc2r3843)"</a>
<li><strong>In reply to:</strong> <a href="2439.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2457.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2457.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
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
