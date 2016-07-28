<?
$subject_val = "Re: [hwloc-users] Numa availability";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 28 08:47:36 2011" -->
<!-- isoreceived="20110828124736" -->
<!-- sent="Sun, 28 Aug 2011 14:47:30 +0200" -->
<!-- isosent="20110828124730" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Numa availability" -->
<!-- id="CAJNPZUWHhko2gkoAj0ytvirpQ7i5KP4Unyg=1NqFnyFioUfYnw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110828115401.GD5238_at_type" -->
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
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-28 08:47:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0430.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
<li><strong>Previous message:</strong> <a href="0428.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
<li><strong>In reply to:</strong> <a href="0428.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0430.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mm,
<br>
<p>in each case, if get_nbobjs_by_type return 0, also if the machine is NUMA,
<br>
hwloc can't build the NUMA-aware topolog, so the NUMA capability is not
<br>
usable. Is it right?
<br>
<p>2011/8/28 Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Brice Goglin, le Sun 28 Aug 2011 12:36:31 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  Is there a hwloc routine to check this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; get_nbobjs_by_type(topology, HWLOC_OBJ_NODE) tells how many NUMA node
</span><br>
<span class="quotelev2">&gt; &gt; objects exist.
</span><br>
<span class="quotelev2">&gt; &gt; If you get &gt;1, the machine is NUMA.
</span><br>
<span class="quotelev2">&gt; &gt; If the non-NUMA case, I think you can get 0 or 1 depending on whether
</span><br>
<span class="quotelev2">&gt; &gt; the OS is NUMA-aware or not (not sure we should remove this possible
</span><br>
<span class="quotelev2">&gt; &gt; difference).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The useful difference is that 0 means we don't know, while 1 means we do
</span><br>
<span class="quotelev1">&gt; know there is only one node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0429/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0430.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
<li><strong>Previous message:</strong> <a href="0428.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
<li><strong>In reply to:</strong> <a href="0428.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0430.php">Samuel Thibault: "Re: [hwloc-users] Numa availability"</a>
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
