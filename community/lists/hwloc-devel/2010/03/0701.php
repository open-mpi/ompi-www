<?
$subject_val = "Re: [hwloc-devel] 1.0-rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  1 14:25:04 2010" -->
<!-- isoreceived="20100301192504" -->
<!-- sent="Mon, 1 Mar 2010 14:24:58 -0500" -->
<!-- isosent="20100301192458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0-rc1" -->
<!-- id="FC64738F-4BCC-4F7A-863A-33E2F9A17B15_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B8A50D3.9010209_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0-rc1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-01 14:24:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/02/0700.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/02/0700.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2010, at 6:17 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; $ utils/lstopo -                   
</span><br>
<span class="quotelev1">&gt; Machine(1509MB) + Socket l#0 + L2 l#0(2048KB)
</span><br>
<span class="quotelev1">&gt;   L1 l#0(32KB) + Core l#0 + P l#0
</span><br>
<span class="quotelev1">&gt;   L1 l#1(32KB) + Core l#1 + P l#1
</span><br>
<span class="quotelev1">&gt; $ utils/lstopo - -p
</span><br>
<span class="quotelev1">&gt; Machine(1509MB) + Socket p#0 + L2(2048KB)
</span><br>
<span class="quotelev1">&gt;   L1(32KB) + Core p#0 + P p#0
</span><br>
<span class="quotelev1">&gt;   L1(32KB) + Core p#1 + P p#1
</span><br>
<p>Just curious -- what happened to the #0 for the L1 and L2 cache in the physical display, above?
<br>
<p><span class="quotelev1">&gt; $ utils/lstopo - -l
</span><br>
<span class="quotelev1">&gt; Machine(1509MB) + Socket#0l + L2#0l(2048KB)
</span><br>
<span class="quotelev1">&gt;   L1#0l(32KB) + Core#0l + P#0l
</span><br>
<span class="quotelev1">&gt;   L1#1l(32KB) + Core#1l + P#1l
</span><br>
<span class="quotelev1">&gt; $ utils/lstopo - -p                
</span><br>
<span class="quotelev1">&gt; Machine(1509MB) + Socket#0p + L2(2048KB)
</span><br>
<span class="quotelev1">&gt;   L1(32KB) + Core#0p + P#0p
</span><br>
<span class="quotelev1">&gt;   L1(32KB) + Core#1p + P#1p
</span><br>
<p>Same question as above.
<br>
<p><span class="quotelev1">&gt; I think I prefer the latter.
</span><br>
<p>I marginally prefer the former, but don't have a strong opinion -- I can't think of any better option than these two.
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
<li><strong>Next message:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/02/0700.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/02/0700.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
<li><strong>Reply:</strong> <a href="0702.php">Brice Goglin: "Re: [hwloc-devel] 1.0-rc1"</a>
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
