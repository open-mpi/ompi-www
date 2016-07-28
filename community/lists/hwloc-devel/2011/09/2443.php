<?
$subject_val = "Re: [hwloc-devel] Some practical hwloc API feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 12:04:33 2011" -->
<!-- isoreceived="20110923160433" -->
<!-- sent="Fri, 23 Sep 2011 10:04:24 -0600" -->
<!-- isosent="20110923160424" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Some practical hwloc API feedback" -->
<!-- id="16C67339-88C1-4EDB-ACC7-66BB34A8EB42_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E7BA303.2090109_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Some practical hwloc API feedback<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 12:04:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2444.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2442.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc2r3833)"</a>
<li><strong>In reply to:</strong> <a href="2439.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2456.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2011, at 3:05 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 22/09/2011 22:42, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I guess I didn't get that from your documentation. Since caches sit
</span><br>
<span class="quotelev2">&gt;&gt; between socket and core, they appear to affect the depth of the core
</span><br>
<span class="quotelev2">&gt;&gt; in a given socket. Thus, if there are different numbers of caches in
</span><br>
<span class="quotelev2">&gt;&gt; the different sockets on a node, then the core/pu level would change
</span><br>
<span class="quotelev2">&gt;&gt; across the sockets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, the level always contain all elements of the same type (+depth for
</span><br>
<span class="quotelev1">&gt; caches), even if they are not at the same &quot;distance&quot; to the root (not
</span><br>
<span class="quotelev1">&gt; &quot;depth&quot;).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's say you have two single-core sockets. One with no cache. One with
</span><br>
<span class="quotelev1">&gt; a L1.
</span><br>
<span class="quotelev1">&gt; What happens is:
</span><br>
<span class="quotelev1">&gt; * first level/depth is socket, contains two sockets, cover all cores.
</span><br>
<span class="quotelev1">&gt; * level 2 is L2, single element, *does not cover all cores*
</span><br>
<span class="quotelev1">&gt; * level 3 is core, two elements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The funky thing here is that the parent/child links between the first
</span><br>
<span class="quotelev1">&gt; socket and its core go across level 2 because nothing matches there. In
</span><br>
<span class="quotelev1">&gt; the first socket, you have Socket(depth1)-&gt;Core(depth3) while in the
</span><br>
<span class="quotelev1">&gt; second socket you have Socket(depth1)-&gt;Cache(depth2)-&gt;Core(depth3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So what we call &quot;depth&quot; in hwloc, is not the number of parent/child
</span><br>
<span class="quotelev1">&gt; links between you and the root, it's really the number of levels between
</span><br>
<span class="quotelev1">&gt; you and the root, even if you don't have any parent in some of these levels.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like we need to clarify this :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Indeed - having the above example in hwloc.h would help. I think the key thing here is that the depth for a given type is being set across the entire node, and not by the local structure - i.e., the depth of the core in your example is determined by looking across the node at the max depth of any core in its local structure. Those of us coming from the chip world will find that confusing, as we look at things one socket at a time, but we can adapt.
<br>
<p>All that said, if I put my dictionary away and can get the code to work, hopefully we won't have to parse thru it again. :-)
<br>
<p>Thanks!
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2443/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2444.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2442.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc2r3833)"</a>
<li><strong>In reply to:</strong> <a href="2439.php">Brice Goglin: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2456.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
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
