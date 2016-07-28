<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 15:42:01 2011" -->
<!-- isoreceived="20110228204201" -->
<!-- sent="Mon, 28 Feb 2011 21:41:55 +0100" -->
<!-- isosent="20110228204155" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="4D6C0893.9000202_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="17642BB4-F465-4BC6-9E77-44B68E0660CA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Memory affinity<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 15:41:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2012.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2010.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2010.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2008.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/02/2011 21:35, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 28, 2011, at 3:31 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; That would seem to imply that I should always hwloc_set_area_membind() if I want it to persist beyond any potential future swapping.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
</span><br>
<span class="quotelev2">&gt;&gt; The kernel only looks at the current virtual memory area policy. If you
</span><br>
<span class="quotelev2">&gt;&gt; didn't call set_area_membind, the default policy is used. It doesn't
</span><br>
<span class="quotelev2">&gt;&gt; care about the location of the old page before swap-out.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; I'm not sure exactly what you mean here -- if I call hwloc_set_area_membind() to bind an area to numa node X, and then area pages get swapped out, then swapped back in, will be guaranteed to be swapped back in somewhere on numa node X?  (I don't care if they're exactly the same physical page)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes. set_area_membind() will make things work as you wish.
<br>
<p>&quot;No set_area_membind()&quot; lets pages go on random NUMA nodes (but still
<br>
*preferably* near the process that first-touches them or swaps them back
<br>
in). That's what I call &quot;default policy&quot;.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2012.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2010.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2010.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2008.php">Samuel Thibault: "Re: [hwloc-devel] Memory affinity"</a>
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
