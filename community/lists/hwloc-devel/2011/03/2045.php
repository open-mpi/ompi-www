<?
$subject_val = "Re: [hwloc-devel] nvcc on windows visual studio and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 04:36:31 2011" -->
<!-- isoreceived="20110308093631" -->
<!-- sent="Tue, 08 Mar 2011 10:36:27 +0100" -->
<!-- isosent="20110308093627" -->
<!-- name="Nathalie Furmento" -->
<!-- email="nathalie.furmento_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] nvcc on windows visual studio and hwloc" -->
<!-- id="4D75F89B.6030103_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D75F77D.1070608_at_labri.fr" -->
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
<strong>From:</strong> Nathalie Furmento (<em>nathalie.furmento_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 04:36:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2046.php">Brice Goglin: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Previous message:</strong> <a href="2044.php">Nathalie Furmento: "[hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>In reply to:</strong> <a href="2044.php">Nathalie Furmento: "[hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2046.php">Brice Goglin: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Reply:</strong> <a href="2046.php">Brice Goglin: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/03/2011 10:31, Nathalie Furmento wrote:
<br>
<span class="quotelev1">&gt; Dear hwloc-team,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to compile some CUDA applications on windows, these 
</span><br>
<span class="quotelev1">&gt; applications include (indirectly) hwloc.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The nvcc compiler which uses windows visual studio complains it does 
</span><br>
<span class="quotelev1">&gt; not find the file unistd.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .../hwloc-win32-build-1.1.1/include\hwloc/config.h (104): fatal error 
</span><br>
<span class="quotelev1">&gt; C1083: Cannot open include file: 'unistd.h': No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nathalie
</span><br>
<span class="quotelev1">&gt;
</span><br>
I just tried to comment out the include &lt;unistd.h&gt;, it gives another error:
<br>
<p>.../hwloc-win32-build-1.1.1/include\hwloc.h (25): fatal error C1083: 
<br>
Cannot open include file: 'stdint.h': No such file or directory
<br>
<p>Thanks,
<br>
<p>Nathalie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2046.php">Brice Goglin: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Previous message:</strong> <a href="2044.php">Nathalie Furmento: "[hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>In reply to:</strong> <a href="2044.php">Nathalie Furmento: "[hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2046.php">Brice Goglin: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Reply:</strong> <a href="2046.php">Brice Goglin: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
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
