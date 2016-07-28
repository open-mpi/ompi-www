<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 10:05:42 2010" -->
<!-- isoreceived="20100707140542" -->
<!-- sent="Wed, 7 Jul 2010 16:05:33 +0200" -->
<!-- isosent="20100707140533" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?" -->
<!-- id="201007071605.33639.jhladky_at_redhat.com" -->
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
<strong>Date:</strong> 2010-07-07 10:05:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1141.php">Brice Goglin: "[hwloc-devel] Fwd: Ad"</a>
<li><strong>Previous message:</strong> <a href="1139.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, July 05, 2010 07:12:58 am Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 05/07/2010 02:41, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm using hwloc-distrib quite often to distribute jobs optimally on NUMA
</span><br>
<span class="quotelev2">&gt; &gt; boxes. I use it to test linux kernel task - scheduler by comparing
</span><br>
<span class="quotelev2">&gt; &gt; runtime of jobs bound to best possible CPU configuration (keeping CPU
</span><br>
<span class="quotelev2">&gt; &gt; cache in mind) with runs without CPU affinity set.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I just run into strange issue on box with newest Intel's Nehalem CPUs.
</span><br>
<span class="quotelev2">&gt; &gt; There are 4 Sockets, each with 8 physical cores and hyper-threading
</span><br>
<span class="quotelev2">&gt; &gt; enabled, which gives you 64 OS processors.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The box has strange NUMA layout - I will need to check why it is so.
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
<p>Confirmed to be BIOS bug. Asked Intel to get fixed BIOS.
<br>
Thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1141.php">Brice Goglin: "[hwloc-devel] Fwd: Ad"</a>
<li><strong>Previous message:</strong> <a href="1139.php">Jirka Hladky: "Re: [hwloc-devel] How to get information about hwloc objects?"</a>
<li><strong>In reply to:</strong> <a href="1130.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib: how to start at lower hiearchy level?"</a>
<!-- nextthread="start" -->
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
