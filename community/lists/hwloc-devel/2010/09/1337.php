<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 22 10:30:35 2010" -->
<!-- isoreceived="20100922143035" -->
<!-- sent="Wed, 22 Sep 2010 10:30:30 -0400" -->
<!-- isosent="20100922143030" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="B36DC200-6CA6-4B8C-9013-817AA1E19AD9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C99F1F7.9030802_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] roadmap<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-22 10:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1338.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1336.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1335.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1338.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1338.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2010, at 8:09 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; hwloc_set_*? hwloc_objset* ? Anything better?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_set_* might not be the best since we would have a hwloc_set_set()
</span><br>
<span class="quotelev1">&gt; function to set one bit :)
</span><br>
<p>Agreed.  Too bad, though -- I liked hwloc_set*.
<br>
<p>hwloc_group* (that seems kinda lame, though)
<br>
hwloc_stuff* (hah)
<br>
hwloc_bitmap*
<br>
<p>?
<br>
<p><span class="quotelev1">&gt; By the way, hwloc_cpuset_cpu() and hwloc_cpuset_all_but_cpu() should be
</span><br>
<span class="quotelev1">&gt; renamed too. hwloc_set_onlyone() and hwloc_set_allbutone() maybe?
</span><br>
<p>How about just hwloc_set() which takes a single position parameter?  &quot;onlyone&quot; can be implied.
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
<li><strong>Next message:</strong> <a href="1338.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1336.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<li><strong>In reply to:</strong> <a href="1335.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1338.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1338.php">Brice Goglin: "Re: [hwloc-devel] roadmap"</a>
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
