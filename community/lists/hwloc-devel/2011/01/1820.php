<?
$subject_val = "Re: [hwloc-devel] more docs updates";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 14 17:18:38 2011" -->
<!-- isoreceived="20110114221838" -->
<!-- sent="Fri, 14 Jan 2011 23:18:30 +0100" -->
<!-- isosent="20110114221830" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] more docs updates" -->
<!-- id="4D30CBB6.10306_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="26774791-3684-40E7-8560-8D0A22614DA3_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-14 17:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1821.php">Brice Goglin: "Re: [hwloc-devel] doxygen setting"</a>
<li><strong>Previous message:</strong> <a href="1819.php">Jeff Squyres: "[hwloc-devel] doxygen setting"</a>
<li><strong>In reply to:</strong> <a href="1818.php">Jeff Squyres: "Re: [hwloc-devel] more docs updates"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/01/2011 23:08, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Jan 11, 2011, at 5:19 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When memory binding to nodesets or cpusets, do bit locations correspond to hwloc logical values or physical (os_index) values?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; It's clearly stated in &quot;hwlocality_sets&quot; at the beginning of hwloc.h
</span><br>
<span class="quotelev2">&gt;&gt; that cpusets and nodesets are always made of physical/OS indexes.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Actually, it says this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  * For use in hwloc itself, a hwloc_bitmap_t usually represents a set of
</span><br>
<span class="quotelev1">&gt;  * objects, typically logical processors or memory nodes, indexed by OS
</span><br>
<span class="quotelev1">&gt;  * physical number.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which says both &quot;logical&quot; and &quot;physical&quot;.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it's definitely supposed to be physical?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>yes physical. The above &quot;logical processor&quot; means &quot;hyperthread&quot; and the
<br>
non-intel variants :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1821.php">Brice Goglin: "Re: [hwloc-devel] doxygen setting"</a>
<li><strong>Previous message:</strong> <a href="1819.php">Jeff Squyres: "[hwloc-devel] doxygen setting"</a>
<li><strong>In reply to:</strong> <a href="1818.php">Jeff Squyres: "Re: [hwloc-devel] more docs updates"</a>
<!-- nextthread="start" -->
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
