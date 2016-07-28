<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 13 09:36:51 2014" -->
<!-- isoreceived="20140213143651" -->
<!-- sent="Thu, 13 Feb 2014 14:36:49 +0000" -->
<!-- isosent="20140213143649" -->
<!-- name="Andrew Cooper" -->
<!-- email="andrew.cooper3_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52FCD881.8090508_at_citrix.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52FCB5D0.50506_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc with Xen system support - v2<br>
<strong>From:</strong> Andrew Cooper (<em>andrew.cooper3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-13 09:36:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4063.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-85-g0af83db)"</a>
<li><strong>Previous message:</strong> <a href="4061.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4061.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4021.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 13/02/14 12:08, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 13/02/2014 12:03, Andrew Cooper a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you want to merge something in hwloc soon?
</span><br>
<span class="quotelev2">&gt;&gt; Would you mind merging your two patches that I am carrying?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;plugins: export hwloc_alloc_root_sets()&quot;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;plugins: cleanup hwloc_setup_pu_level() and export it to plugins&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Neither of them are explicitly Xen specific, and from a lazy point of
</span><br>
<span class="quotelev2">&gt;&gt; view it would be nicer to have a sorter branch to look after.  (I am
</span><br>
<span class="quotelev2">&gt;&gt; fairly sure I have rebased them properly going forwards over the other
</span><br>
<span class="quotelev2">&gt;&gt; changes recently)
</span><br>
<span class="quotelev1">&gt; Sure. I just pushed them to x86-common as well (and rebased the branch
</span><br>
<span class="quotelev1">&gt; on top of latest master). x86-common is basically a &quot;for-xen&quot; branch now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Until the library and hypervisor support is present in Xen-unstable,
</span><br>
<span class="quotelev2">&gt;&gt; releasing anything in hwloc seems premature.  Getting anything properly
</span><br>
<span class="quotelev2">&gt;&gt; sorted for v1.9 seems unlikely, but v1.10 seems reasonable.  I will of
</span><br>
<span class="quotelev2">&gt;&gt; course keep my xen and hwlock trees with working code in, so people can
</span><br>
<span class="quotelev2">&gt;&gt; play if they wish.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Ok thanks. Keep us informed when things evolve on the Xen side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I found some copious free time while other things were compiling.
<br>
<p>v5, fully rebased, and now down to only 3 patches on top of x86-common
<br>
<p><a href="http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v5">http://xenbits.xen.org/gitweb/?p=people/andrewcoop/hwloc.git;a=shortlog;h=refs/heads/hwloc-xen-topology-v5</a>
<br>
<p><p>In other news, there has been some traction on Xen-devel about getting
<br>
IO NUMA affinity sorted out between Xen and dom0.  If/when patches
<br>
develop, I shall see about trying to include that information in the xen
<br>
topology.  (Currently the PCI devices and topology are available, but
<br>
have no affinity information).
<br>
<p>~Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4063.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-85-g0af83db)"</a>
<li><strong>Previous message:</strong> <a href="4061.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4061.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4021.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
