<?
$subject_val = "Re: [hwloc-users] linking libcudart and libnvml only to the plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 19:10:37 2015" -->
<!-- isoreceived="20150603231037" -->
<!-- sent="Thu, 04 Jun 2015 01:10:35 +0200" -->
<!-- isosent="20150603231035" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] linking libcudart and libnvml only to the plugins" -->
<!-- id="556F896B.9090306_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="556F8769.7080506_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] linking libcudart and libnvml only to the plugins<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-03 19:10:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1176.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="1174.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>In reply to:</strong> <a href="1174.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1176.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1176.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/06/2015 01:02, Fabricio Cannini a &#233;crit :
<br>
<span class="quotelev1">&gt; LDFLAGS = -L/usr/local/cuda-6.5/lib64 -lcudart -L/usr/lib64/nvidia -lnvidia-ml
</span><br>
<p>Does this line come from your environment? hwloc isn't supposed to set
<br>
LDFLAGS unless it comes from the environment. I guess that's where your
<br>
problems comes from.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1176.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="1174.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>In reply to:</strong> <a href="1174.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1176.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1176.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
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
