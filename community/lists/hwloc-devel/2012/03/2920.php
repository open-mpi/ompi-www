<?
$subject_val = "[hwloc-devel] merging instruction cache branch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 09:39:26 2012" -->
<!-- isoreceived="20120313133926" -->
<!-- sent="Tue, 13 Mar 2012 14:39:21 +0100" -->
<!-- isosent="20120313133921" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] merging instruction cache branch" -->
<!-- id="4F5F4E09.3010102_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] merging instruction cache branch<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 09:39:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2921.php">Samuel Thibault: "Re: [hwloc-devel] merging instruction cache branch"</a>
<li><strong>Previous message:</strong> <a href="2919.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4371)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2921.php">Samuel Thibault: "Re: [hwloc-devel] merging instruction cache branch"</a>
<li><strong>Maybe reply:</strong> <a href="2921.php">Samuel Thibault: "Re: [hwloc-devel] merging instruction cache branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I think I will merge the icache branch by the end of the week if nobody
<br>
complains.
<br>
<p>This new branch adds a type attribute to cache objects, which can be
<br>
DATA, INSTRUCTION or UNIFIED. On Linux sysfs, everything is detected
<br>
properly. I am working on the devicetree code. Other OSes currently
<br>
report Unified unless I was really sure it was Data.
<br>
<p>Instruction caches detection is *disabled by default* because it adds
<br>
new levels to the topology (you may have L1d and L1i with different
<br>
affinities) and we don't want to break existing applications that may
<br>
assume there won't be multiple cache levels with the same cache-depth.
<br>
There's a topology flag (&quot;ICACHES&quot;) to enable Instruction cache
<br>
detection, and a lstopo options (--icaches). If &quot;icaches&quot; is a bad name,
<br>
please let me know. &quot;instruction-caches&quot; is very long :)
<br>
<p>Data and instruction caches are now shown as &quot;L1d&quot; or &quot;L1dCache&quot; instead
<br>
of &quot;L1&quot; or &quot;L1Cache&quot; (normal or verbose). Unified doesn't add a &quot;u&quot;
<br>
(unified is always alone, no need to distinguish from data or
<br>
instruction with same cache-depth).
<br>
<p>Comments welcome.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2921.php">Samuel Thibault: "Re: [hwloc-devel] merging instruction cache branch"</a>
<li><strong>Previous message:</strong> <a href="2919.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.2a1r4371)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2921.php">Samuel Thibault: "Re: [hwloc-devel] merging instruction cache branch"</a>
<li><strong>Maybe reply:</strong> <a href="2921.php">Samuel Thibault: "Re: [hwloc-devel] merging instruction cache branch"</a>
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
