<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 04:54:38 2014" -->
<!-- isoreceived="20140401085438" -->
<!-- sent="Tue, 01 Apr 2014 10:54:36 +0200" -->
<!-- isosent="20140401085436" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released" -->
<!-- id="533A7ECC.7000002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALT_uBSm1FLe2bmHP3a4Y_70bHgJ2nCgJi5vE5jFE47GfLgYgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-01 04:54:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1017.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Previous message:</strong> <a href="1015.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>In reply to:</strong> <a href="1014.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1017.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Reply:</strong> <a href="1017.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/04/2014 10:43, Jiri Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see some compiler warnings when building rpm package for Fedora:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; topology-windows.c: In function 'hwloc_win_get_VirtualAllocExNumaProc':
</span><br>
<span class="quotelev1">&gt; topology-windows.c:338:30: warning: assignment from incompatible
</span><br>
<span class="quotelev1">&gt; pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt; topology-windows.c:343:28: warning: assignment from incompatible
</span><br>
<span class="quotelev1">&gt; pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt; topology-windows.c: In function 'hwloc_look_windows':
</span><br>
<span class="quotelev1">&gt; topology-windows.c:500:36: warning: assignment from incompatible
</span><br>
<span class="quotelev1">&gt; pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt; topology-windows.c:501:38: warning: assignment from incompatible
</span><br>
<span class="quotelev1">&gt; pointer type [enabled by default]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You already reported those on February 13th and we replied that they are
<br>
harmless :)
<br>
<p>Moreover, these warnings come from make check under tests/ports when
<br>
verifying that the Windows backend builds fine using &quot;emulated&quot; Windows
<br>
headers under Linux. Something that for sure cannot be perfect. If you
<br>
have a way to ignore make check warnings, at least under tests/ports,
<br>
that'd be good.
<br>
<p><p><span class="quotelev1">&gt; hwloc_backends.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; hwloc_backends.c:42:10: warning: ignoring return value of 'mkstemp',
</span><br>
<span class="quotelev1">&gt; declared with attribute warn_unused_result [-Wunused-result]
</span><br>
<p>Another warning from make check. We mostly don't care, I'll see if I can
<br>
fix it.
<br>
<p>I am fixing the manpage problem and backporting it.
<br>
<p>thanks!
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1017.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Previous message:</strong> <a href="1015.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>In reply to:</strong> <a href="1014.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1017.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Reply:</strong> <a href="1017.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
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
