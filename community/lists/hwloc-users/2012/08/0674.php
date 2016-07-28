<?
$subject_val = "Re: [hwloc-users] lstopo and GPus";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 28 08:43:24 2012" -->
<!-- isoreceived="20120828124324" -->
<!-- sent="Tue, 28 Aug 2012 14:43:19 +0200" -->
<!-- isosent="20120828124319" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] lstopo and GPus" -->
<!-- id="503CBCE7.8060406_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120828122354.GH28646_at_type.bordeaux.inria.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-28 08:43:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0675.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0673.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0673.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0675.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Reply:</strong> <a href="0675.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/08/2012 14:23, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Gabriele Fatigati, le Tue 28 Aug 2012 14:19:44 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I'm using hwloc 1.5. I would to see how GPUs are connected with the processor
</span><br>
<span class="quotelev2">&gt;&gt; socket using lstopo command. 
</span><br>
<span class="quotelev1">&gt; About connexion with the socket, there is indeed no real graphical
</span><br>
<span class="quotelev1">&gt; difference between &quot;connected to socket #1&quot; and &quot;connected to all
</span><br>
<span class="quotelev1">&gt; sockets&quot;. You can use the text output for that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ lstopo
</span><br>
<span class="quotelev1">&gt;   Socket #0
</span><br>
<span class="quotelev1">&gt;   Socket #1
</span><br>
<span class="quotelev1">&gt;     PCI...
</span><br>
<span class="quotelev1">&gt; (connected to socket #1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ lstopo
</span><br>
<span class="quotelev1">&gt;   Socket #0
</span><br>
<span class="quotelev1">&gt;   Socket #1
</span><br>
<span class="quotelev1">&gt;   PCI...
</span><br>
<span class="quotelev1">&gt; (connected to both sockets)
</span><br>
<p>Fortunately, this won't occur in most cases (including Gabriele's
<br>
machines) because there's a NUMAnode object above each socket. Both the
<br>
socket and the PCI bus are drawn inside the NUMA box, so things appear
<br>
OK in graphics to.
<br>
<p>I've never seen the problem on a real machine, but a fake topology with
<br>
a PCI bus attached to a socket that is not strictly equal to the above
<br>
NUMA node is indeed wrongly displayed.
<br>
<p><p>Gabriele, assuming you have a dual Xeon X56xx Westmere machine, there
<br>
are plenty of such platforms where the GPU is indeed connected to both
<br>
sockets. Or it could be a buggy BIOS.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0675.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Previous message:</strong> <a href="0673.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>In reply to:</strong> <a href="0673.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0675.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
<li><strong>Reply:</strong> <a href="0675.php">Samuel Thibault: "Re: [hwloc-users] lstopo and GPus"</a>
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
