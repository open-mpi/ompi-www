<?
$subject_val = "Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 11:29:24 2011" -->
<!-- isoreceived="20111214162924" -->
<!-- sent="Wed, 14 Dec 2011 17:29:18 +0100" -->
<!-- isosent="20111214162918" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)" -->
<!-- id="20111214162918.GE4197_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1872413975.11286.1323875187733.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 11:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2641.php">Paul H. Hargrove: "[hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2639.php">Jeff Squyres: "[hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<li><strong>Maybe in reply to:</strong> <a href="2639.php">Jeff Squyres: "[hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2620.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Wed 14 Dec 2011 16:06:27 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; - cpuset may not be equal to complete_cpuset
</span><br>
<p>Yes, but not only in that case, see below.
<br>
<p><span class="quotelev1">&gt; - cpuset is already the logical AND of allowed_cpuset and online_cpuset
</span><br>
<p>Yes, that's explicitly enforced by the core
<br>
<p><span class="quotelev1">&gt; - cpuset is comprised only of PUs that you can bind to
</span><br>
<p>And thus this is right too.
<br>
<p><span class="quotelev1">&gt; - (ditto for nodeset / complete_nodeset)
</span><br>
<p>Ditto.
<br>
<p><span class="quotelev1">&gt; And if you *do* supply WHOLE_SYSTEM, then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - cpuset will be equal to complete_cpuset
</span><br>
<p>Cf the doc: complete_cpuset also includes PUs for which we don't have
<br>
topology information.
<br>
<p><span class="quotelev1">&gt; - cpuset is not necessarily the logical AND of allowed_cpuset and online_cpuset
</span><br>
<p>Yes. As the documentation says, it comprises all PUs for which we have
<br>
topology information, be they allowed, offline, or not.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2641.php">Paul H. Hargrove: "[hwloc-devel] pcilib error messages w/ rhl8 and hwloc-1.3.1rc1"</a>
<li><strong>Previous message:</strong> <a href="2639.php">Jeff Squyres: "[hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<li><strong>Maybe in reply to:</strong> <a href="2639.php">Jeff Squyres: "[hwloc-devel] WHOLE_SYSTEM and cpusets (was: 1.3.1 and 1.4rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2620.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
