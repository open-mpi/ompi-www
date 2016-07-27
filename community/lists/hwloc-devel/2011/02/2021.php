<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 16:40:06 2011" -->
<!-- isoreceived="20110228214006" -->
<!-- sent="Mon, 28 Feb 2011 22:39:56 +0100" -->
<!-- isosent="20110228213956" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="4D6C162C.2060103_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C171D65F-B58C-4DC1-8A5A-0BFB3F565827_at_cisco.com" -->
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
<strong>Date:</strong> 2011-02-28 16:39:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2022.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2020.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2019.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2022.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2022.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/02/2011 22:30, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; This is really a pretty terrible statement we (the Linux community) are making: it's all about manycore these days, and a direct consequence of that is that it's all about NUMA.  So you should bind your memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But that may not be enough.  Binding memory to a location is not binding -- in the sense that it can change under certain circumstances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The soundbite version of this is: &quot;binding != binding.&quot;  Terrible.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In many cases, setting a memory policy is probably sufficient to be &quot;sure enough&quot; that your memory will be local.  But here's a class of cases where it's not: a multi-threaded application where threads communicate by having a message buffer physically close to a &quot;reader&quot; thread -- the &quot;writer&quot; thread may be far away.  A typical scenario is that the writer writes infrequently, but the reader polls frequently.  The memory is local to the reader, so it's acceptable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if the communication buffer gets swapped out and the writer happens to be the one that touches the memory to get it swapped back in, the message buffer might end up being local to the *writer*, not the *reader*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gah!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For cases like this, it sounds like the only way to be sure that the buffer stays where you want it is to actually pin the memory to the memory location close to the receiver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So: binding + pinning = binding (as long as you can ensure that the binding + pinning was atomic!).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>If the application swaps for real, do you really care about NUMA
<br>
locality ? It seems to me that the overhead of accessing distant NUMA
<br>
memory may be negligible against the cost of swapping.
<br>
<p>Try to make sure you have enough memory for your program first. Then
<br>
you'll look at fixing these misplaced pages.
<br>
<p>By the way, doing set_area_membind() with HWLOC_MEMBIND_MIGRATE from
<br>
time to time may move your pages back to where they belong.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2022.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2020.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2019.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2022.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2022.php">Jeff Squyres: "Re: [hwloc-devel] Memory affinity"</a>
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
