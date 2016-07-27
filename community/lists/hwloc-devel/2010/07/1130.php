<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  5 01:14:41 2010" -->
<!-- isoreceived="20100705051441" -->
<!-- sent="Mon, 05 Jul 2010 07:12:58 +0200" -->
<!-- isosent="20100705051258" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?" -->
<!-- id="4C3169DA.30300_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007050241.08296.jhladky_at_redhat.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-05 01:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1131.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1129.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1128.php">Jirka Hladky: "[hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1135.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Reply:</strong> <a href="1135.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Reply:</strong> <a href="1140.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/07/2010 02:41, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using hwloc-distrib quite often to distribute jobs optimally on NUMA 
</span><br>
<span class="quotelev1">&gt; boxes. I use it to test linux kernel task - scheduler by comparing runtime of 
</span><br>
<span class="quotelev1">&gt; jobs bound to best possible CPU configuration (keeping CPU cache in mind) with 
</span><br>
<span class="quotelev1">&gt; runs without CPU affinity set. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just run into strange issue on box with newest Intel's Nehalem CPUs. There 
</span><br>
<span class="quotelev1">&gt; are 4 Sockets, each with 8 physical cores and hyper-threading enabled, which 
</span><br>
<span class="quotelev1">&gt; gives you 64 OS processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The box has strange NUMA layout - I will need to check why it is so. 
</span><br>
<span class="quotelev1">&gt; Basically, there are 3 NUMA nodes - one includes 2 Sockets, other 2 have one 
</span><br>
<span class="quotelev1">&gt; Socket associated to each of it.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Seems strange to me, likely a BIOS bug. Nehalem-EX should always have
<br>
one NUMA node per socket from what I understand.
<br>
<p><span class="quotelev1">&gt; hwloc-distrib --single 8 will distribute jobs in the following way:
</span><br>
<span class="quotelev1">&gt; 3 jobs on NUMANode #0
</span><br>
<span class="quotelev1">&gt; 3 jobs on NUMANode #1
</span><br>
<span class="quotelev1">&gt; 2 jobs on NUMANode #2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lstopo 64.pdf
</span><br>
<span class="quotelev1">&gt; for A in $(hwloc-distrib --single 8); do taskset ${A} sleep 100 &amp; done
</span><br>
<span class="quotelev1">&gt; lstopo --top top.pdf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-distrib does it in fact right but this is not what I want. It's not the 
</span><br>
<span class="quotelev1">&gt; best configuration when you consider CPU cache!
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I think it's expected. You have a asymmetric topology. One NUMA node
<br>
with 16 cores and two nodes with 8 cores. It's quite a mess for
<br>
hwloc-distrib to handle that. And we actually have a trac ticket about
<br>
this, but I didn't think it would be that useful :/
<br>
<p><span class="quotelev1">&gt; I have figured-out following way how to tell hwloc-distrib to avoid using 
</span><br>
<span class="quotelev1">&gt; NUMANodes when computing CPU distribution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lstopo --ignore NUMANode No_NUMA.xml
</span><br>
<span class="quotelev1">&gt; for A in $(hwloc-distrib --xml No_NUMA.xml --single 8); do taskset ${A} sleep 
</span><br>
<span class="quotelev1">&gt; 100 &amp; done
</span><br>
<span class="quotelev1">&gt; lstopo --top fix.pdf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm wondering if there is a better way how to make &quot;Socket&quot; the top object. 
</span><br>
<span class="quotelev1">&gt; Something like:
</span><br>
<span class="quotelev1">&gt; hwloc-distrib --ignore NUMANode --single 8
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; hwloc-distrib --top_level Socket --single 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; would be very useful. Is there something like this already? If not would you 
</span><br>
<span class="quotelev1">&gt; consider this as an enhancement? 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Indeed, such an option would be an easy way to work around problems with
<br>
asymmetric topologies. I don't know yet whether --ignore or --top-level
<br>
is better. I'll think about it.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1131.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>Previous message:</strong> <a href="1129.php">Brice Goglin: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1128.php">Jirka Hladky: "[hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1135.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Reply:</strong> <a href="1135.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<li><strong>Reply:</strong> <a href="1140.php">Jirka Hladky: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
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
