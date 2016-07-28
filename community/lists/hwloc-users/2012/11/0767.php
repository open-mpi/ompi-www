<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.6rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 16:31:26 2012" -->
<!-- isoreceived="20121115213126" -->
<!-- sent="Thu, 15 Nov 2012 14:31:20 -0700" -->
<!-- isosent="20121115213120" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.6rc1 released" -->
<!-- id="50A55F28.4010102_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20121115201426.GD5785_at_type.sc12.org" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.6rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-15 16:31:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0768.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0766.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.6rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0766.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.6rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, that was an old bug on a somehow rare XML case on a NUIOA machine.
<br>
Looks like adding new test cases is indeed useful :)
<br>
<p>Brice
<br>
<p><p><p>Le 15/11/2012 13:14, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice Goglin, le Tue 13 Nov 2012 13:45:28 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev2">&gt;&gt; release candidate for v1.6:
</span><br>
<span class="quotelev1">&gt; I'm getting an odd failure in hwloc_pci_backend:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lt-hwloc_pci_backend: hwloc-1.6rc1/tests/hwloc_pci_backend.c:68: main: Assertion `!nb' failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that even with flags == 0, pci stuff gets loaded from the xml
</span><br>
<span class="quotelev1">&gt; output. It happens on only one of our machines, hannibal. I wonder what
</span><br>
<span class="quotelev1">&gt; is special there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0768.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0766.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.6rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0766.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.6rc1 released"</a>
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
