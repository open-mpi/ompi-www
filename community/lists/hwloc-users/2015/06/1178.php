<?
$subject_val = "Re: [hwloc-users] linking libcudart and libnvml only to the plugins";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 19:37:03 2015" -->
<!-- isoreceived="20150603233703" -->
<!-- sent="Wed, 03 Jun 2015 20:37:01 -0300" -->
<!-- isosent="20150603233701" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] linking libcudart and libnvml only to the plugins" -->
<!-- id="556F8F9D.7030903_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="556F8E28.3020402_at_inria.fr" -->
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
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-03 19:37:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1179.php">Imre Kerr: "[hwloc-users] Only one CUDA device showing up"</a>
<li><strong>Previous message:</strong> <a href="1177.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>In reply to:</strong> <a href="1177.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03-06-2015 20:30, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 04/06/2015 01:17, Fabricio Cannini a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 03-06-2015 20:10, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 04/06/2015 01:02, Fabricio Cannini a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LDFLAGS = -L/usr/local/cuda-6.5/lib64 -lcudart -L/usr/lib64/nvidia
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lnvidia-ml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does this line come from your environment? hwloc isn't supposed to set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LDFLAGS unless it comes from the environment. I guess that's where your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems comes from.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I did set LDFLAGS and CPPFLAGS because otherwise './configure'
</span><br>
<span class="quotelev2">&gt;&gt; does not finds cuda headers and libraries. Is there another way that
</span><br>
<span class="quotelev2">&gt;&gt; I'm not aware of ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you try putting -L/usr/local/cuda-6.5/lib64 -L/usr/lib64/nvidia in
</span><br>
<span class="quotelev1">&gt; LDFLAGS without -lcudart -lnvidia-ml ?
</span><br>
<p><p>YES! It worked!
<br>
<p>Thank you so much Brice, and sorry for the false alarm. ;)
<br>
<p>[ ]'s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1179.php">Imre Kerr: "[hwloc-users] Only one CUDA device showing up"</a>
<li><strong>Previous message:</strong> <a href="1177.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
<li><strong>In reply to:</strong> <a href="1177.php">Brice Goglin: "Re: [hwloc-users] linking libcudart and libnvml only to the plugins"</a>
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
