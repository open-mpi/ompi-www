<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 11:27:56 2010" -->
<!-- isoreceived="20101110162756" -->
<!-- sent="Wed, 10 Nov 2010 17:27:49 +0100" -->
<!-- isosent="20101110162749" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="4CDAC805.6000204_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011101502.22189.jhladky_at_redhat.com" -->
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
<strong>Date:</strong> 2010-11-10 11:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1463.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1461.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1461.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1463.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1463.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 10/11/2010 15:02, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev3">&gt;&gt;&gt; 2) hwloc-bind --get --membind is not working for me (RHEL 6.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ hwloc-bind --membind node:1 --mempolicy interleave -- hwloc-bind --get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- membind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc_get_membind failed (errno 22 Invalid argument)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; You get the same error when running only &quot;hwloc-bind --get --membind&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; right?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Yes:
</span><br>
<span class="quotelev1">&gt; $ hwloc-bind --get --membind
</span><br>
<span class="quotelev1">&gt; hwloc_get_membind failed (errno 22 Invalid argument)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure about this one. Do you have NUMA support in your kernel?
</span><br>
<span class="quotelev2">&gt;&gt; Is your machine NUMA? Can you send the gather-topology tarball ? (if we
</span><br>
<span class="quotelev2">&gt;&gt; don't have it already :))
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Yes, it's a NUMA box with NUMA support in kernel.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Unfortunately, I can't reproduce. I tried with your tarball, with a
<br>
Redhat 5 machine, with a similar Nehalem-based machine running Debian.
<br>
<p>Can you try to debug this? I'd like to know if EINVAL is returned by the
<br>
kernel or by hwloc. You'd have to open src/topology-linux.c, go in
<br>
function hwloc_linux_get_thisthread_membind() and add some printf there
<br>
to check where EINVAL comes from.
<br>
<p>thanks,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1463.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1461.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1461.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1463.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1463.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
