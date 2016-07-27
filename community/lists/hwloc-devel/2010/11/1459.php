<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 08:28:51 2010" -->
<!-- isoreceived="20101110132851" -->
<!-- sent="Wed, 10 Nov 2010 14:28:46 +0100" -->
<!-- isosent="20101110132846" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="4CDA9E0E.3070000_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011101409.49114.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 08:28:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1460.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1rc2"</a>
<li><strong>Previous message:</strong> <a href="1458.php">Jirka Hladky: "[hwloc-devel] hwloc-1.1rc2"</a>
<li><strong>In reply to:</strong> <a href="1457.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1461.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1461.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 10/11/2010 14:09, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have found couple of issues with 1.1rc2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) man hwloc-bind
</span><br>
<span class="quotelev1">&gt; Following example does not work:
</span><br>
<span class="quotelev1">&gt; $ hwloc-bind --cpubind node:1 --membind:0 echo hello
</span><br>
<span class="quotelev1">&gt; Unrecognized option: --membind:0
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Obvious typo in the manpage (should be --membind node:0), I am fixing this.
<br>
<p><span class="quotelev1">&gt; 2) hwloc-bind --get --membind is not working for me (RHEL 6.0)
</span><br>
<span class="quotelev1">&gt; $ hwloc-bind --membind node:1 --mempolicy interleave -- hwloc-bind --get --
</span><br>
<span class="quotelev1">&gt; membind
</span><br>
<span class="quotelev1">&gt; hwloc_get_membind failed (errno 22 Invalid argument)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>You get the same error when running only &quot;hwloc-bind --get --membind&quot;,
<br>
right?
<br>
<p>I am not sure about this one. Do you have NUMA support in your kernel?
<br>
Is your machine NUMA? Can you send the gather-topology tarball ? (if we
<br>
don't have it already :))
<br>
<p><span class="quotelev1">&gt; 3)
</span><br>
<span class="quotelev1">&gt; $ hwloc-calc --single socket:0
</span><br>
<span class="quotelev1">&gt; Unrecognized option: --single
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Oops, I removed it by mistake, fixing this too.
<br>
<p>thanks,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1460.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1rc2"</a>
<li><strong>Previous message:</strong> <a href="1458.php">Jirka Hladky: "[hwloc-devel] hwloc-1.1rc2"</a>
<li><strong>In reply to:</strong> <a href="1457.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1461.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1461.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
