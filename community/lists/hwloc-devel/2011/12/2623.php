<?
$subject_val = "Re: [hwloc-devel] 1.3.1 and 1.4rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 14:28:39 2011" -->
<!-- isoreceived="20111213192839" -->
<!-- sent="Tue, 13 Dec 2011 20:28:33 +0100" -->
<!-- isosent="20111213192833" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.1 and 1.4rc1" -->
<!-- id="4EE7A761.5070105_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20111213183019.GA4547_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.1 and 1.4rc1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 14:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2624.php">Christopher Samuel: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2622.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2620.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2621.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/12/2011 19:30, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Ok, I thought you were referring to an architectural detail. Well,
</span><br>
<span class="quotelev1">&gt; actually NUMA nodes and embedded memory should just both use a MEM
</span><br>
<span class="quotelev1">&gt; object, instead of duplicating all kinds of objects. We won't duplicate
</span><br>
<span class="quotelev1">&gt; such things for the MIC, will we?
</span><br>
<p>My feeling about MIC is that it would something very similar to the
<br>
current contents of a socket object inside a PCI device. And if MIC
<br>
evers bypasses PCI and comes onto a real socket, it would make sense
<br>
too. However I am far from understanding the implication on the core
<br>
code and API of having such a hierarchy inside a PCI device, so I don't
<br>
know for sure if that's a good idea.
<br>
<p><span class="quotelev1">&gt; IIRC the problems I had with using NODE was things like: make sure
</span><br>
<span class="quotelev1">&gt; total_memory doesn't count it, having a &quot;name&quot; to distinguish &quot;shared&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;global&quot;, avoid letting it enter the &quot;levels&quot;.
</span><br>
<p>I think I agree that embedded mem and NUMA node should be MEM. New
<br>
attributes could then be used distinguish between them to solve your
<br>
problems above.
<br>
<p>This reminds me of the discussion before merging the PCI branch. It took
<br>
way too long before we released a PCI-enabled hwloc, but at least we had
<br>
time to mature the interface. Merging this new branch is probably even
<br>
more important because it may have implications on future support for
<br>
MIC and friends.
<br>
<p><p><span class="quotelev1">&gt;  But all of these
</span><br>
<span class="quotelev1">&gt; could just be fixed by not browsing inside PCI devices, which we might
</span><br>
<span class="quotelev1">&gt; already be doing, actually.
</span><br>
<p>Yeah not done yet, but easy to do.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2624.php">Christopher Samuel: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>Previous message:</strong> <a href="2622.php">Brice Goglin: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<li><strong>In reply to:</strong> <a href="2620.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2621.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.1 and 1.4rc1"</a>
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
