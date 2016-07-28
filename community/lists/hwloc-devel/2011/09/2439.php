<?
$subject_val = "Re: [hwloc-devel] Some practical hwloc API feedback";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 17:05:12 2011" -->
<!-- isoreceived="20110922210512" -->
<!-- sent="Thu, 22 Sep 2011 23:05:07 +0200" -->
<!-- isosent="20110922210507" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Some practical hwloc API feedback" -->
<!-- id="4E7BA303.2090109_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3D119B30-0C2E-4A2A-BBF9-0F616DE45A30_at_open-mpi.org" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 17:05:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2440.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3832)"</a>
<li><strong>Previous message:</strong> <a href="2438.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>In reply to:</strong> <a href="2438.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2443.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2443.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2456.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/09/2011 22:42, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; I guess I didn't get that from your documentation. Since caches sit
</span><br>
<span class="quotelev1">&gt; between socket and core, they appear to affect the depth of the core
</span><br>
<span class="quotelev1">&gt; in a given socket. Thus, if there are different numbers of caches in
</span><br>
<span class="quotelev1">&gt; the different sockets on a node, then the core/pu level would change
</span><br>
<span class="quotelev1">&gt; across the sockets.
</span><br>
<p>No, the level always contain all elements of the same type (+depth for
<br>
caches), even if they are not at the same &quot;distance&quot; to the root (not
<br>
&quot;depth&quot;).
<br>
<p>Let's say you have two single-core sockets. One with no cache. One with
<br>
a L1.
<br>
What happens is:
<br>
* first level/depth is socket, contains two sockets, cover all cores.
<br>
* level 2 is L2, single element, *does not cover all cores*
<br>
* level 3 is core, two elements.
<br>
<p>The funky thing here is that the parent/child links between the first
<br>
socket and its core go across level 2 because nothing matches there. In
<br>
the first socket, you have Socket(depth1)-&gt;Core(depth3) while in the
<br>
second socket you have Socket(depth1)-&gt;Cache(depth2)-&gt;Core(depth3)
<br>
<p>So what we call &quot;depth&quot; in hwloc, is not the number of parent/child
<br>
links between you and the root, it's really the number of levels between
<br>
you and the root, even if you don't have any parent in some of these levels.
<br>
<p>Looks like we need to clarify this :)
<br>
<p><p><span class="quotelev2">&gt;&gt; People would walk the list of PUs, Cores, Sockets, NUMA nodes.
</span><br>
<span class="quotelev2">&gt;&gt; But when talking about Caches, I would rather see them ask &quot;which cache
</span><br>
<span class="quotelev2">&gt;&gt; do I have above these cores?&quot;.
</span><br>
<span class="quotelev1">&gt; But that isn't exactly how people use that info. Instead, they ask us to &quot;map N processes on each L2 cache across the node&quot;, or to &quot;bind all procs to their local L3 cache&quot;.
</span><br>
<p>It seems to me that people asking for this already know a lot about the
<br>
topology. Random users don't know if there are L2 or L3 caches, if they
<br>
should bind to one or the other, ...
<br>
<p>So these advanced users should be able to say &quot;I know there's one L3 per
<br>
socket, so bind to the local socket&quot; instead of &quot;bind to the local L3&quot;.
<br>
<p>Or say &quot;I know there are 5 cores per L2, so map N processes per sets of
<br>
5 cores&quot; instead of &quot;map N procs on each L2&quot;. But yeah we're back to the
<br>
possibly-non-uniform hierarchy problem then. I see the mess.
<br>
<p><p><span class="quotelev1">&gt; When dealing with large scale systems, it is much faster and easier to check these things -before- launching the job. Remember, on these systems, it can take minutes to launch a full-scale job! Nobody wants to sit there for that much time, only to find that the system doesn't support the requested operation.
</span><br>
<p>Ok. Adding binding/support info to topology attributes should be easy
<br>
anyway.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2440.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3832)"</a>
<li><strong>Previous message:</strong> <a href="2438.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>In reply to:</strong> <a href="2438.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2443.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2443.php">Ralph Castain: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>Reply:</strong> <a href="2456.php">Jeff Squyres: "Re: [hwloc-devel] Some practical hwloc API feedback"</a>
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
