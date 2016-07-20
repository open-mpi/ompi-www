<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  7 03:49:47 2012" -->
<!-- isoreceived="20120907074947" -->
<!-- sent="Fri, 07 Sep 2012 09:49:42 +0200" -->
<!-- isosent="20120907074942" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="5049A716.2060206_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUXrfsgaTUkrLOtYCvZ_F1Z0gv2wwCe+XYyn2BdqUM7rCQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread binding problem<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-07 03:49:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0707.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0707.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0707.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/09/2012 09:43, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good,  you found the kernel limit that exceed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; proc/memfinfo reports as MemFree     47834588 kB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; numactl -H:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; available: 2 nodes (0-1)
</span><br>
<span class="quotelev1">&gt; node 0 size: 24194 MB
</span><br>
<span class="quotelev1">&gt; node 0 free: 22702 MB
</span><br>
<span class="quotelev1">&gt; node 1 size: 24240 MB
</span><br>
<span class="quotelev1">&gt; node 1 free: 23997 MB
</span><br>
<span class="quotelev1">&gt; node distances:
</span><br>
<span class="quotelev1">&gt; node   0   1
</span><br>
<span class="quotelev1">&gt;   0:  10  21
</span><br>
<span class="quotelev1">&gt;   1:  21  10
</span><br>
<p>did you gather this info during the sleep(10) after the failure before
<br>
the program exits ?
<br>
<p><span class="quotelev1">&gt; Another question. I'm trying the same code in another system, but
</span><br>
<span class="quotelev1">&gt; hwloc gives: &quot;Function not implemented&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe because there isn't installed numa-devel package? Numa non devel
</span><br>
<span class="quotelev1">&gt; package il alreay installed.
</span><br>
<p>You likely need numa devel if you're configuring/building hwloc. The
<br>
summary at the end of the hwloc configure will tell you if memory
<br>
binding is supported or not, it mostly depends on numa devel.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0707.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0705.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0707.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0707.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
