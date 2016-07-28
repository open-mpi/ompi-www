<?
$subject_val = "Re: [hwloc-devel] upcoming feature removal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 08:59:56 2014" -->
<!-- isoreceived="20141104135956" -->
<!-- sent="Tue, 4 Nov 2014 13:59:55 +0000" -->
<!-- isosent="20141104135955" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] upcoming feature removal" -->
<!-- id="4346916C-E515-40A7-A05E-70520ECFB969_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54575D9E.7070106_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] upcoming feature removal<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 08:59:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4285.php">Brice Goglin: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Previous message:</strong> <a href="4283.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.0-10-gf6257f3)"</a>
<li><strong>In reply to:</strong> <a href="4280.php">Brice Goglin: "[hwloc-devel] upcoming feature removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4285.php">Brice Goglin: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Reply:</strong> <a href="4285.php">Brice Goglin: "Re: [hwloc-devel] upcoming feature removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2014, at 5:49 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; * don't put I/O objects in &quot;normal&quot; children since it confuses programs
</span><br>
<span class="quotelev1">&gt; consulting the children list. rather place them under a dedicated child
</span><br>
<span class="quotelev1">&gt; pointer special objects such as Misc may go there as well.
</span><br>
<p>If you're going to separate them from the normal &quot;children&quot;, then how about naming them for what they are?  E.g.:
<br>
<p>- pe_children
<br>
- io_children
<br>
- misc_children
<br>
<p><span class="quotelev1">&gt; * stop having 4 cpusets and 3 nodesets per object and just have 1 cpuset
</span><br>
<span class="quotelev1">&gt; and 1 nodeset depending on topology flags (only allowed, or only online,
</span><br>
<span class="quotelev1">&gt; etc). possibly with ways to switch between modes at runtime
</span><br>
<p>No, please don't do this.  For big code bases like Open MPI, we don't know how the different consumers of hwloc will use the information.  So we get all of the topo information once, at the beginning of time.  Various different plugins and different parts of OMPI may want different information, and it would kinda defeat the point if they had to re-scan the topo because we didn't initially get the information that they needed.
<br>
<p><span class="quotelev1">&gt; * stop having a CACHE type + data/instruction/unified + depth, and just
</span><br>
<span class="quotelev1">&gt; have one type for each of them, such as HWLOC_OBJ_CACHE_L1d. the
</span><br>
<span class="quotelev1">&gt; advantage is that you can switch (type) without special-casing the CACHE
</span><br>
<span class="quotelev1">&gt; subtypes. One drawback is that there are many subtypes in existing
</span><br>
<span class="quotelev1">&gt; machines (at least L1[id], L2[idu], L3[idu], L4u).
</span><br>
<p>Samuel has a good point about &quot;where will it end?&quot;.
<br>
<p>But I also agree that it's pretty annoying (and Ralph has [rightfully] complained a bunch) to have to special-case the check for the various caches -- it has caused a bunch of code churn in OMPI.
<br>
<p>How about making enums for L1 through L5?  That's more than any architecture has today, and gives us a bit of future-proofing.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4285.php">Brice Goglin: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Previous message:</strong> <a href="4283.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.0-10-gf6257f3)"</a>
<li><strong>In reply to:</strong> <a href="4280.php">Brice Goglin: "[hwloc-devel] upcoming feature removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4285.php">Brice Goglin: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Reply:</strong> <a href="4285.php">Brice Goglin: "Re: [hwloc-devel] upcoming feature removal"</a>
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
