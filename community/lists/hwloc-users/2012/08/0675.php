<?
$subject_val = "Re: [hwloc-users] lstopo and GPus";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 08:47:53 2012" -->
<!-- isoreceived="20120828124753" -->
<!-- sent="Tue, 28 Aug 2012 14:47:48 +0200" -->
<!-- isosent="20120828124748" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo and GPus" -->
<!-- id="20120828124748.GI28646_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="503CBCE7.8060406_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] lstopo and GPus<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 08:47:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0676.php">Gabriele Fatigati: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0674.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0674.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0676.php">Gabriele Fatigati: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Reply:</strong> <a href="0676.php">Gabriele Fatigati: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 28 Aug 2012 14:43:53 +0200, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; $ lstopo
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #0
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #1
</span><br>
<span class="quotelev2">&gt; &gt;     PCI...
</span><br>
<span class="quotelev2">&gt; &gt; (connected to socket #1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; vs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ lstopo
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #0
</span><br>
<span class="quotelev2">&gt; &gt;   Socket #1
</span><br>
<span class="quotelev2">&gt; &gt;   PCI...
</span><br>
<span class="quotelev2">&gt; &gt; (connected to both sockets)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fortunately, this won't occur in most cases (including Gabriele's
</span><br>
<span class="quotelev1">&gt; machines) because there's a NUMAnode object above each socket.
</span><br>
<p>Oops, I actually meant NUMAnode above
<br>
<p><span class="quotelev1">&gt; Both the socket and the PCI bus are drawn inside the NUMA box, so
</span><br>
<span class="quotelev1">&gt; things appear OK in graphics to.
</span><br>
<p>Indeed, if the PCI bus was connected to one NUMAnode/socket only, it
<br>
would be drawn inside, which is not the case.
<br>
<p><span class="quotelev1">&gt; Gabriele, assuming you have a dual Xeon X56xx Westmere machine, there
</span><br>
<span class="quotelev1">&gt; are plenty of such platforms where the GPU is indeed connected to both
</span><br>
<span class="quotelev1">&gt; sockets. Or it could be a buggy BIOS.
</span><br>
<p>Agreed.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0676.php">Gabriele Fatigati: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0674.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0674.php">Brice Goglin: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0676.php">Gabriele Fatigati: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Reply:</strong> <a href="0676.php">Gabriele Fatigati: "Re: [hwloc-users] lstopo and GPus"</a>
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
