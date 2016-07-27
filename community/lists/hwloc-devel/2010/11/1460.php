<?
$subject_val = "Re: [hwloc-devel] hwloc-1.1rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 08:32:11 2010" -->
<!-- isoreceived="20101110133211" -->
<!-- sent="Wed, 10 Nov 2010 14:32:05 +0100" -->
<!-- isosent="20101110133205" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.1rc2" -->
<!-- id="4CDA9ED5.4070801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011101421.57167.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.1rc2<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 08:32:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1461.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1459.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1458.php">Jirka Hladky: "[hwloc-devel] hwloc-1.1rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 10/11/2010 14:21, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have problems with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make check
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on RHEL 6.0 for hwloc-1.1rc2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please see attached log file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed numactl-devel package before compiling hwloc. Anything else 
</span><br>
<span class="quotelev1">&gt; is needed with respect to NUMA?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Jirka
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Well make check looks happy here. Are you wondering if those &quot;function
<br>
not implemented&quot; are normal? Many of them are expected. The hwloc API is
<br>
very wide since we try to be portable and many OSes have very different
<br>
functionalities. So among the tons of possible membind cases, some
<br>
cannot be supported on Linux.
<br>
<p>Note that numactl-devel doesn't help hwloc itself (we don't use libnuma
<br>
since it's not portable and they severely broke their ABI in the past).
<br>
numactl-devel only helps make check if you want to make sure that hwloc
<br>
can interoperate with libnuma properly.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1461.php">Jirka Hladky: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1459.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1458.php">Jirka Hladky: "[hwloc-devel] hwloc-1.1rc2"</a>
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
