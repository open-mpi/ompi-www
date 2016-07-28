<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 05:39:28 2010" -->
<!-- isoreceived="20100707093928" -->
<!-- sent="Wed, 7 Jul 2010 11:39:19 +0200" -->
<!-- isosent="20100707093919" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?" -->
<!-- id="201007071139.20219.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C3169DA.30300_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 05:39:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1136.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1140.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p><span class="quotelev2">&gt; &gt; The box has strange NUMA layout - I will need to check why it is so.
</span><br>
<span class="quotelev2">&gt; &gt; Basically, there are 3 NUMA nodes - one includes 2 Sockets, other 2 have
</span><br>
<span class="quotelev2">&gt; &gt; one Socket associated to each of it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems strange to me, likely a BIOS bug. Nehalem-EX should always have
</span><br>
<span class="quotelev1">&gt; one NUMA node per socket from what I understand.
</span><br>
I will check it if it's intended or a bug. It's a testing box we got from 
<br>
Intel before official release of Nehalem-EX.
<br>
<p><span class="quotelev1">&gt; I think it's expected. You have a asymmetric topology. One NUMA node
</span><br>
<span class="quotelev1">&gt; with 16 cores and two nodes with 8 cores. It's quite a mess for
</span><br>
<span class="quotelev1">&gt; hwloc-distrib to handle that. And we actually have a trac ticket about
</span><br>
<span class="quotelev1">&gt; this, but I didn't think it would be that useful :/
</span><br>
In theory we could add weights to NUMA nodes to account for asymmetric 
<br>
topology.  I personally think that at least at my scenario it's better to tell 
<br>
to hwloc-distrib to ignore NUMA nodes and work at Socket level. It's more 
<br>
transparent. 
<br>
<p>I don't have mutli-node (multiple hosts or machines) scenario. (I guess 
<br>
machine concept is intended for clusters like Beowulf cluster). I can imagine 
<br>
that it can be also asymmetric scenario where different machines have different 
<br>
CPU and memory. Using weights here may be useful but it can be really hard to 
<br>
come up with some algorithm to automatically compute the weights. 
<br>
<p>To make long story short: IMHO, current behavior which assume symmetric NUMA 
<br>
nodes seem to be right to me.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have figured-out following way how to tell hwloc-distrib to avoid using
</span><br>
<span class="quotelev2">&gt; &gt; NUMANodes when computing CPU distribution:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; lstopo --ignore NUMANode No_NUMA.xml
</span><br>
<span class="quotelev2">&gt; &gt; for A in $(hwloc-distrib --xml No_NUMA.xml --single 8); do taskset ${A}
</span><br>
<span class="quotelev2">&gt; &gt; sleep 100 &amp; done
</span><br>
<span class="quotelev2">&gt; &gt; lstopo --top fix.pdf
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm wondering if there is a better way how to make &quot;Socket&quot; the top
</span><br>
<span class="quotelev2">&gt; &gt; object. Something like:
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-distrib --ignore NUMANode --single 8
</span><br>
<span class="quotelev2">&gt; &gt; or
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-distrib --top_level Socket --single 8
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; would be very useful. Is there something like this already? If not would
</span><br>
<span class="quotelev2">&gt; &gt; you consider this as an enhancement?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, such an option would be an easy way to work around problems with
</span><br>
<span class="quotelev1">&gt; asymmetric topologies. I don't know yet whether --ignore or --top-level
</span><br>
<span class="quotelev1">&gt; is better. I'll think about it.
</span><br>
<p>IMHO, --top-level would be better. 
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1136.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1134.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1140.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
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
