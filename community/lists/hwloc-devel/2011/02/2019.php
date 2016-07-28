<?
$subject_val = "Re: [hwloc-devel] Memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 28 16:30:57 2011" -->
<!-- isoreceived="20110228213057" -->
<!-- sent="Mon, 28 Feb 2011 16:30:52 -0500" -->
<!-- isosent="20110228213052" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Memory affinity" -->
<!-- id="C171D65F-B58C-4DC1-8A5A-0BFB3F565827_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6C1113.3090209_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-28 16:30:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2020.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2018.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2018.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2021.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2021.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2023.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2011, at 4:18 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Ah good point! So Jeff has to hope that pages of different processes
</span><br>
<span class="quotelev1">&gt; won't be highly mixed in the swap partition, good luck :)
</span><br>
<p>This is really a pretty terrible statement we (the Linux community) are making: it's all about manycore these days, and a direct consequence of that is that it's all about NUMA.  So you should bind your memory.
<br>
<p>But that may not be enough.  Binding memory to a location is not binding -- in the sense that it can change under certain circumstances.
<br>
<p>The soundbite version of this is: &quot;binding != binding.&quot;  Terrible.  :-(
<br>
<p>In many cases, setting a memory policy is probably sufficient to be &quot;sure enough&quot; that your memory will be local.  But here's a class of cases where it's not: a multi-threaded application where threads communicate by having a message buffer physically close to a &quot;reader&quot; thread -- the &quot;writer&quot; thread may be far away.  A typical scenario is that the writer writes infrequently, but the reader polls frequently.  The memory is local to the reader, so it's acceptable.
<br>
<p>But if the communication buffer gets swapped out and the writer happens to be the one that touches the memory to get it swapped back in, the message buffer might end up being local to the *writer*, not the *reader*.
<br>
<p>Gah!
<br>
<p>For cases like this, it sounds like the only way to be sure that the buffer stays where you want it is to actually pin the memory to the memory location close to the receiver.
<br>
<p>So: binding + pinning = binding (as long as you can ensure that the binding + pinning was atomic!).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2020.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Previous message:</strong> <a href="2018.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>In reply to:</strong> <a href="2018.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2021.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2021.php">Brice Goglin: "Re: [hwloc-devel] Memory affinity"</a>
<li><strong>Reply:</strong> <a href="2023.php">David Singleton: "Re: [hwloc-devel] Memory affinity"</a>
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
