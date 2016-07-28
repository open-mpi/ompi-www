<?
$subject_val = "Re: [hwloc-devel] restricted topology (&amp; topology changes)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 08:19:53 2009" -->
<!-- isoreceived="20090927121953" -->
<!-- sent="Sun, 27 Sep 2009 14:18:54 +0200" -->
<!-- isosent="20090927121854" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] restricted topology (&amp;amp; topology changes)" -->
<!-- id="4ABF582E.5090501_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090927121637.GC7681_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] restricted topology (&amp; topology changes)<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-27 08:18:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0091.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Previous message:</strong> <a href="0089.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0089.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0091.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Reply:</strong> <a href="0091.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev2">&gt;&gt; but shouldn't it return the restricted topology (or have a method that  
</span><br>
<span class="quotelev2">&gt;&gt; returns the restricted topology).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should already be the default. To get the whole system, see lstopo
</span><br>
<span class="quotelev1">&gt; --help: --whole-system
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Maybe he's referring to when the process launcher does a
<br>
sched_setaffinity/numatcl to restrict this process, as opposed to
<br>
administrator-wide restriction with linux cpusets or so. We could add
<br>
another topology flag for such restrictions.
<br>
<p><span class="quotelev2">&gt;&gt; Another thing that would be nice to have (but much less important for  
</span><br>
<span class="quotelev2">&gt;&gt; me) is having a callback that can be called when/if the topology  
</span><br>
<span class="quotelev2">&gt;&gt; changes.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've wondered how to implement topology changes indeed. AIX does have a
</span><br>
<span class="quotelev1">&gt; SIGRECONFIG signal for this, I don't know any support from other OSes.
</span><br>
<span class="quotelev1">&gt; that'd mean having to poll for changes, how often, and in which context?
</span><br>
<span class="quotelev1">&gt; (another thread? an explicit polling request from the application?). I'd
</span><br>
<span class="quotelev1">&gt; rather avoid the thread usage and just let the application decide both
</span><br>
<span class="quotelev1">&gt; how often and in which context. In other words, actually maybe all we
</span><br>
<span class="quotelev1">&gt; need is a function to compare two topologies?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Maybe there's a inotify way to get such changes in Linux.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0091.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Previous message:</strong> <a href="0089.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0089.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0091.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Reply:</strong> <a href="0091.php">Samuel Thibault: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
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
