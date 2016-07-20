<?
$subject_val = "Re: [hwloc-users] Numa availability";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 28 06:35:54 2011" -->
<!-- isoreceived="20110828103554" -->
<!-- sent="Sun, 28 Aug 2011 12:35:43 +0200" -->
<!-- isosent="20110828103543" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Numa availability" -->
<!-- id="4E5A19FF.2000204_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUVWnnP7YnCf6CnGpmGr3Guf=sMzmhZjo1GbqAVwrHj=uQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Numa availability<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-28 06:35:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0428.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
<li><strong>Previous message:</strong> <a href="0426.php">Gabriele Fatigati: "[hwloc-users] Numa availability"</a>
<li><strong>In reply to:</strong> <a href="0426.php">Gabriele Fatigati: "[hwloc-users] Numa availability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0428.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/08/2011 12:14, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Dear hwloc users, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what happens if I use hwloc on a non-NUMA machine? I suppose memory
</span><br>
<span class="quotelev1">&gt; binding has no sense because there is not a memory locality concept.
</span><br>
<span class="quotelev1">&gt; And regards execution binding? are there some difference on a non-NUMA
</span><br>
<span class="quotelev1">&gt; machine?
</span><br>
<p>Hello Gabriele,
<br>
<p>Execution binding remains exactly the same.
<br>
<p>Memory binding has no sense on non-NUMA machine but it's still available
<br>
for application portability (it basically just does nothing).
<br>
<p><span class="quotelev1">&gt;  Is there a hwloc routine to check this?
</span><br>
<p>get_nbobjs_by_type(topology, HWLOC_OBJ_NODE) tells how many NUMA node
<br>
objects exist.
<br>
If you get &gt;1, the machine is NUMA.
<br>
If the non-NUMA case, I think you can get 0 or 1 depending on whether
<br>
the OS is NUMA-aware or not (not sure we should remove this possible
<br>
difference).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0428.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
<li><strong>Previous message:</strong> <a href="0426.php">Gabriele Fatigati: "[hwloc-users] Numa availability"</a>
<li><strong>In reply to:</strong> <a href="0426.php">Gabriele Fatigati: "[hwloc-users] Numa availability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0428.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
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
