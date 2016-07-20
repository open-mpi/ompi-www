<?
$subject_val = "Re: [hwloc-users] linking libcudart and libnvml only to the plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 19:31:00 2015" -->
<!-- isoreceived="20150603233100" -->
<!-- sent="Thu, 04 Jun 2015 01:30:48 +0200" -->
<!-- isosent="20150603233048" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] linking libcudart and libnvml only to the plugins" -->
<!-- id="556F8E28.3020402_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="556F8B0F.5010705_at_gmail.com" -->
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
<strong>Date:</strong> 2015-06-03 19:30:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1178.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="1176.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>In reply to:</strong> <a href="1176.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1178.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1178.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/06/2015 01:17, Fabricio Cannini a &#233;crit :
<br>
<span class="quotelev1">&gt; On 03-06-2015 20:10, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 04/06/2015 01:02, Fabricio Cannini a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LDFLAGS = -L/usr/local/cuda-6.5/lib64 -lcudart -L/usr/lib64/nvidia
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lnvidia-ml
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does this line come from your environment? hwloc isn't supposed to set
</span><br>
<span class="quotelev2">&gt;&gt; LDFLAGS unless it comes from the environment. I guess that's where your
</span><br>
<span class="quotelev2">&gt;&gt; problems comes from.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, I did set LDFLAGS and CPPFLAGS because otherwise './configure'
</span><br>
<span class="quotelev1">&gt; does not finds cuda headers and libraries. Is there another way that
</span><br>
<span class="quotelev1">&gt; I'm not aware of ?
</span><br>
<p>Did you try putting -L/usr/local/cuda-6.5/lib64 -L/usr/lib64/nvidia in
<br>
LDFLAGS without -lcudart -lnvidia-ml ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1178.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Previous message:</strong> <a href="1176.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>In reply to:</strong> <a href="1176.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1178.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>Reply:</strong> <a href="1178.php">Fabricio Cannini: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
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
