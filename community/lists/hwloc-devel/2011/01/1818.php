<?
$subject_val = "Re: [hwloc-devel] more docs updates";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 14 17:08:23 2011" -->
<!-- isoreceived="20110114220823" -->
<!-- sent="Fri, 14 Jan 2011 17:08:17 -0500" -->
<!-- isosent="20110114220817" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] more docs updates" -->
<!-- id="26774791-3684-40E7-8560-8D0A22614DA3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D2CD78D.3030401_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] more docs updates<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-14 17:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1819.php">Jeff Squyres: "[hwloc-devel] doxygen setting"</a>
<li><strong>Previous message:</strong> <a href="1817.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3064)"</a>
<li><strong>In reply to:</strong> <a href="1811.php">Brice Goglin: "Re: [hwloc-devel] more docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1820.php">Brice Goglin: "Re: [hwloc-devel] more docs updates"</a>
<li><strong>Reply:</strong> <a href="1820.php">Brice Goglin: "Re: [hwloc-devel] more docs updates"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 11, 2011, at 5:19 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; When memory binding to nodesets or cpusets, do bit locations correspond to hwloc logical values or physical (os_index) values?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's clearly stated in &quot;hwlocality_sets&quot; at the beginning of hwloc.h
</span><br>
<span class="quotelev1">&gt; that cpusets and nodesets are always made of physical/OS indexes.
</span><br>
<p>Actually, it says this:
<br>
<p>&nbsp;* For use in hwloc itself, a hwloc_bitmap_t usually represents a set of
<br>
&nbsp;* objects, typically logical processors or memory nodes, indexed by OS
<br>
&nbsp;* physical number.
<br>
<p>which says both &quot;logical&quot; and &quot;physical&quot;.  :-)
<br>
<p>So it's definitely supposed to be physical?
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
<li><strong>Next message:</strong> <a href="1819.php">Jeff Squyres: "[hwloc-devel] doxygen setting"</a>
<li><strong>Previous message:</strong> <a href="1817.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3064)"</a>
<li><strong>In reply to:</strong> <a href="1811.php">Brice Goglin: "Re: [hwloc-devel] more docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1820.php">Brice Goglin: "Re: [hwloc-devel] more docs updates"</a>
<li><strong>Reply:</strong> <a href="1820.php">Brice Goglin: "Re: [hwloc-devel] more docs updates"</a>
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
