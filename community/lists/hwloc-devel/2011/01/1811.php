<?
$subject_val = "Re: [hwloc-devel] more docs updates";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 11 17:20:05 2011" -->
<!-- isoreceived="20110111222005" -->
<!-- sent="Tue, 11 Jan 2011 23:19:57 +0100" -->
<!-- isosent="20110111221957" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] more docs updates" -->
<!-- id="4D2CD78D.3030401_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E6F2712-FF71-4FC2-9797-CEF1628F1100_at_cisco.com" -->
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
<strong>Date:</strong> 2011-01-11 17:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1812.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Previous message:</strong> <a href="1810.php">Jeff Squyres: "[hwloc-devel] more docs updates"</a>
<li><strong>In reply to:</strong> <a href="1810.php">Jeff Squyres: "[hwloc-devel] more docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1818.php">Jeff Squyres: "Re: [hwloc-devel] more docs updates"</a>
<li><strong>Reply:</strong> <a href="1818.php">Jeff Squyres: "Re: [hwloc-devel] more docs updates"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 11/01/2011 23:09, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; When memory binding to nodesets or cpusets, do bit locations correspond to hwloc logical values or physical (os_index) values?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It's clearly stated in &quot;hwlocality_sets&quot; at the beginning of hwloc.h
<br>
that cpusets and nodesets are always made of physical/OS indexes.
<br>
<p>If you want to put logical index bits in there, use hwloc_bitmap_t, not
<br>
hwloc_cpuset_t or hwloc_nodeset_t (even if the storage is the same).
<br>
<p><p>By the way, ack to your nexttouch rewording in the other mail.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1812.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Previous message:</strong> <a href="1810.php">Jeff Squyres: "[hwloc-devel] more docs updates"</a>
<li><strong>In reply to:</strong> <a href="1810.php">Jeff Squyres: "[hwloc-devel] more docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1818.php">Jeff Squyres: "Re: [hwloc-devel] more docs updates"</a>
<li><strong>Reply:</strong> <a href="1818.php">Jeff Squyres: "Re: [hwloc-devel] more docs updates"</a>
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
