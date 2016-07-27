<?
$subject_val = "Re: [hwloc-devel] restricted topology (&amp; topology changes)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 27 08:16:43 2009" -->
<!-- isoreceived="20090927121643" -->
<!-- sent="Sun, 27 Sep 2009 14:16:37 +0200" -->
<!-- isosent="20090927121637" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] restricted topology (&amp;amp; topology changes)" -->
<!-- id="20090927121637.GC7681_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FF2ABE08-FC1F-4B43-B7B3-BED41F6BAFC7_at_gmx.ch" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-27 08:16:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Brice Goglin: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Previous message:</strong> <a href="0088.php">Fawzi Mohamed: "[hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0088.php">Fawzi Mohamed: "[hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0090.php">Brice Goglin: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Reply:</strong> <a href="0090.php">Brice Goglin: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed, le Sun 27 Sep 2009 14:09:59 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; the topology load returns the topology of the whole system (I think),  
</span><br>
<p>Nope, else it's a bug :)
<br>
<p><span class="quotelev1">&gt; but shouldn't it return the restricted topology (or have a method that  
</span><br>
<span class="quotelev1">&gt; returns the restricted topology).
</span><br>
<p>It should already be the default. To get the whole system, see lstopo
<br>
--help: --whole-system
<br>
<p><span class="quotelev1">&gt; Another thing that would be nice to have (but much less important for  
</span><br>
<span class="quotelev1">&gt; me) is having a callback that can be called when/if the topology  
</span><br>
<span class="quotelev1">&gt; changes.
</span><br>
<p>I've wondered how to implement topology changes indeed. AIX does have a
<br>
SIGRECONFIG signal for this, I don't know any support from other OSes.
<br>
that'd mean having to poll for changes, how often, and in which context?
<br>
(another thread? an explicit polling request from the application?). I'd
<br>
rather avoid the thread usage and just let the application decide both
<br>
how often and in which context. In other words, actually maybe all we
<br>
need is a function to compare two topologies?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Brice Goglin: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Previous message:</strong> <a href="0088.php">Fawzi Mohamed: "[hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>In reply to:</strong> <a href="0088.php">Fawzi Mohamed: "[hwloc-devel] restricted topology (&amp; topology changes)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0090.php">Brice Goglin: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
<li><strong>Reply:</strong> <a href="0090.php">Brice Goglin: "Re: [hwloc-devel] restricted topology (&amp; topology changes)"</a>
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
