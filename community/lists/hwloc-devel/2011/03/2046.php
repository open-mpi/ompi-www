<?
$subject_val = "Re: [hwloc-devel] nvcc on windows visual studio and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 04:49:04 2011" -->
<!-- isoreceived="20110308094904" -->
<!-- sent="Tue, 08 Mar 2011 10:49:00 +0100" -->
<!-- isosent="20110308094900" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] nvcc on windows visual studio and hwloc" -->
<!-- id="4D75FB8C.4050906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D75F89B.6030103_at_labri.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] nvcc on windows visual studio and hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 04:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2047.php">Samuel Thibault: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Previous message:</strong> <a href="2045.php">Nathalie Furmento: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>In reply to:</strong> <a href="2045.php">Nathalie Furmento: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2047.php">Samuel Thibault: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/03/2011 10:36, Nathalie Furmento a &#233;crit :
<br>
<span class="quotelev1">&gt; On 08/03/2011 10:31, Nathalie Furmento wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear hwloc-team,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need to compile some CUDA applications on windows, these
</span><br>
<span class="quotelev2">&gt;&gt; applications include (indirectly) hwloc.h.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The nvcc compiler which uses windows visual studio complains it does
</span><br>
<span class="quotelev2">&gt;&gt; not find the file unistd.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .../hwloc-win32-build-1.1.1/include\hwloc/config.h (104): fatal error
</span><br>
<span class="quotelev2">&gt;&gt; C1083: Cannot open include file: 'unistd.h': No such file or directory
</span><br>
<p>unistd.h seems to only be needed because hwloc_pid_t may be pid_t. But
<br>
windows doesn't use pid_t, so we can probably move unistd.h under
<br>
#ifndef windows
<br>
<p><span class="quotelev1">&gt; I just tried to comment out the include &lt;unistd.h&gt;, it gives another
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .../hwloc-win32-build-1.1.1/include\hwloc.h (25): fatal error C1083:
</span><br>
<span class="quotelev1">&gt; Cannot open include file: 'stdint.h': No such file or directory
</span><br>
<p>stdint.h is needed at least for uint64_t in memory attributes. I don't
<br>
know what to do here.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2047.php">Samuel Thibault: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Previous message:</strong> <a href="2045.php">Nathalie Furmento: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>In reply to:</strong> <a href="2045.php">Nathalie Furmento: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2047.php">Samuel Thibault: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
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
