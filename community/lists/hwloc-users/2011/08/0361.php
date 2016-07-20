<?
$subject_val = "Re: [hwloc-users] hwloc v1.2.1rc1 test on AIX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  3 05:29:22 2011" -->
<!-- isoreceived="20110803092922" -->
<!-- sent="Wed, 03 Aug 2011 11:29:15 +0200" -->
<!-- isosent="20110803092915" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc v1.2.1rc1 test on AIX" -->
<!-- id="4E3914EB.1000807_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E38FA43.5080302_at_dkrz.de" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc v1.2.1rc1 test on AIX<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-03 05:29:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">Samuel Thibault: "Re: [hwloc-users] Return value hwloc functions"</a>
<li><strong>Previous message:</strong> <a href="0360.php">Gabriele Fatigati: "[hwloc-users] Return value hwloc functions"</a>
<li><strong>In reply to:</strong> <a href="0359.php">Hendryk Bockelmann: "[hwloc-users] hwloc v1.2.1rc1 test on AIX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/08/2011 09:35, Hendryk Bockelmann a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello Samuel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; installation of hwloc-1.2.1rc1r3571.tar.gz was no problem on AIX6.1
</span><br>
<p>Thanks for testing!
<br>
<p><span class="quotelev1">&gt; Report of lstopo for one POWER6 node given:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine + L1 L#0 (64KB)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;     L1 L#0 (64KB)
</span><br>
<span class="quotelev1">&gt;       L2 L#0 (4096KB) + L1 L#0 (64KB) + Core L#0
</span><br>
<span class="quotelev1">&gt;         PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;         PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;       L2 L#1 (4096KB) + L1 L#1 (64KB) + Core L#1
</span><br>
<span class="quotelev1">&gt;         PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;         PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;     L1 L#1 (64KB)
</span><br>
<span class="quotelev1">&gt;       L2 L#2 (4096KB) + L1 L#2 (64KB) + Core L#2
</span><br>
<span class="quotelev1">&gt;         PU L#4 (P#4)
</span><br>
<span class="quotelev1">&gt;         PU L#5 (P#5)
</span><br>
<span class="quotelev1">&gt;       L2 L#3 (4096KB) + L1 L#3 (64KB) + Core L#3
</span><br>
<span class="quotelev1">&gt;         PU L#6 (P#6)
</span><br>
<span class="quotelev1">&gt;         PU L#7 (P#7)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There seems to be two little failures:
</span><br>
<p>Are these new failures ? Did 1.2 work fine ?
<br>
<p><span class="quotelev1">&gt; i/ each core has 128kB L1-cache (64kB data and 64kB instruction)
</span><br>
<p>We only report data (and unified caches) so I assume the instruction L1
<br>
is ignored on purpose.
<br>
<p><span class="quotelev1">&gt; ii/ the shared L3-cache of one POWER6 chip, i.e. of two cores, is 32MB
</span><br>
<span class="quotelev1">&gt; - here it is shown as &quot;L1 L#0 (64KB)&quot;
</span><br>
<p>Can you send the output of lstopo after reconfiguring with
<br>
--enable-debug, it's not easy to understand what's going on here.
<br>
<p>Thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">Samuel Thibault: "Re: [hwloc-users] Return value hwloc functions"</a>
<li><strong>Previous message:</strong> <a href="0360.php">Gabriele Fatigati: "[hwloc-users] Return value hwloc functions"</a>
<li><strong>In reply to:</strong> <a href="0359.php">Hendryk Bockelmann: "[hwloc-users] hwloc v1.2.1rc1 test on AIX"</a>
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
