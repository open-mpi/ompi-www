<?
$subject_val = "[hwloc-devel] thread safety";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 20:35:02 2010" -->
<!-- isoreceived="20100312013502" -->
<!-- sent="Thu, 11 Mar 2010 17:34:59 -0800" -->
<!-- isosent="20100312013459" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] thread safety" -->
<!-- id="21AB62D5-6D16-4594-BED6-187D85A40124_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100311235735.GG7174_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] thread safety<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 20:34:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0743.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1823)"</a>
<li><strong>Previous message:</strong> <a href="0741.php">Bert Wesarg: "[hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach"</a>
<li><strong>In reply to:</strong> <a href="0739.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0744.php">Brice Goglin: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0744.php">Brice Goglin: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0747.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 11, 2010, at 3:57 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev2">&gt; &gt; What *is* hwloc's policy about thread safety, anyway?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be odd to not be threadsafe, considering the target
</span><br>
<span class="quotelev1">&gt; applications :) and I believe hwloc is already.
</span><br>
<p>Hmm.  I'm not so sure.  Consider:
<br>
<p>1. thread A calls hwloc_topology_init(&amp;a)
<br>
2. thread A calls hwloc_topology_load(a)
<br>
3. thread A launches thread B
<br>
4. thread B calls hwloc_topology_get_*(a...)
<br>
5. thread A calls hwloc_topology_load(a)
<br>
<p>On the one hand, you could say that an app would be dumb to do this.  But OTOH, if we say that hwloc is &quot;thread safe&quot;, it might be a reasonable expectation to assume that multiple threads can read/write topologies simultaneously and hwloc makes it safe.  It depends on exactly what you mean by &quot;thread safe&quot; (kinda like MPI's 4 different levels of thread support).
<br>
<p>Which do we want for hwloc?
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
<li><strong>Next message:</strong> <a href="0743.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1823)"</a>
<li><strong>Previous message:</strong> <a href="0741.php">Bert Wesarg: "[hwloc-devel] [PATCH 2/2] Provide hwloc_cpuset_next() and use it in hwloc_cpuset_foreach"</a>
<li><strong>In reply to:</strong> <a href="0739.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mountslines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0744.php">Brice Goglin: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0744.php">Brice Goglin: "Re: [hwloc-devel] thread safety"</a>
<li><strong>Reply:</strong> <a href="0747.php">Samuel Thibault: "Re: [hwloc-devel] thread safety"</a>
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
