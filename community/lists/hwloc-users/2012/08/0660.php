<?
$subject_val = "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 18:37:19 2012" -->
<!-- isoreceived="20120806223719" -->
<!-- sent="Mon, 6 Aug 2012 22:36:58 +0000" -->
<!-- isosent="20120806223658" -->
<!-- name="Wheeler, Kyle Bruce" -->
<!-- email="kbwheel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion" -->
<!-- id="2367E49CF1319C4FAF0E51EC778BD33126805F28_at_EXMB03.srn.sandia.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="50204057.8020405_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion<br>
<strong>From:</strong> Wheeler, Kyle Bruce (<em>kbwheel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 18:36:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Reply:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 6, 2012, at 4:08 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; You should not be getting a distance matrix for depth 0 above. You get
</span><br>
<span class="quotelev1">&gt; one for depth=1 (the depth of NUMAnodes in your topology).
</span><br>
<p>Ahh, ok. Well, at least I know what I *should* get now. :)
<br>
<p>Sheepishly, I have to admit that I just figured it out. I had two versions of hwloc installed, and the older one was further up in the LD_LIBRARY_PATH.
<br>
<p><span class="quotelev2">&gt;&gt; And why is hwloc_get_latency() failing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you pass some Core objects to get_latency(), it's expected that it
</span><br>
<span class="quotelev1">&gt; fails because the topology only has latencies between NUMA nodes. You
</span><br>
<span class="quotelev1">&gt; should walk up the object parent links until you find NUMAnode objects.
</span><br>
<span class="quotelev1">&gt; We've been thinking of handling this case inside hwloc but we're not
</span><br>
<span class="quotelev1">&gt; sure it's always a good idea to do so.
</span><br>
<p>Ahhhh, that's key! The documentation currently says &quot;Look at ancestor objects from the bottom to the top until one of them contains a distance matrix that matches the objects exactly&quot;, which suggests to me that it will traverse the object hierarchy looking for the NUMANodes *for* me. Now that I know to do it manually, I can get it to work. (Of course, my version mis-match didn't help in the first place&#133;)
<br>
<p>Thanks for the help!
<br>
<pre>
-- 
Kyle B. Wheeler
Dept. 1423: Scalable System Software
Sandia National Laboratories
505-844-0394
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0659.php">Brice Goglin: "Re: [hwloc-users] hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Reply:</strong> <a href="0661.php">Brice Goglin: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
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
