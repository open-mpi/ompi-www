<?
$subject_val = "Re: [hwloc-devel] nvcc on windows visual studio and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 04:59:01 2011" -->
<!-- isoreceived="20110308095901" -->
<!-- sent="Tue, 8 Mar 2011 10:58:53 +0100" -->
<!-- isosent="20110308095853" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] nvcc on windows visual studio and hwloc" -->
<!-- id="20110308095853.GL4962_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1551020350.473443.1299577094169.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 04:58:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2048.php">Nathalie Furmento: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Previous message:</strong> <a href="2046.php">Brice Goglin: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Maybe in reply to:</strong> <a href="2044.php">Nathalie Furmento: "[hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2048.php">Nathalie Furmento: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Reply:</strong> <a href="2048.php">Nathalie Furmento: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathalie Furmento, le Tue 08 Mar 2011 10:38:14 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; On 08/03/2011 10:31, Nathalie Furmento wrote:
</span><br>
<span class="quotelev2">&gt; &gt;I need to compile some CUDA applications on windows, these 
</span><br>
<span class="quotelev2">&gt; &gt;applications include (indirectly) hwloc.h.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The nvcc compiler which uses windows visual studio complains it does 
</span><br>
<span class="quotelev2">&gt; &gt;not find the file unistd.h
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;.../hwloc-win32-build-1.1.1/include\hwloc/config.h (104): fatal error 
</span><br>
<span class="quotelev2">&gt; &gt;C1083: Cannot open include file: 'unistd.h': No such file or directory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; I just tried to comment out the include &lt;unistd.h&gt;, it gives another error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .../hwloc-win32-build-1.1.1/include\hwloc.h (25): fatal error C1083: 
</span><br>
<span class="quotelev1">&gt; Cannot open include file: 'stdint.h': No such file or directory
</span><br>
<p>Could you try the attached patch?
<br>
<p>Samuel
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2047/patch">patch</a>
</ul>
<!-- attachment="patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2048.php">Nathalie Furmento: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Previous message:</strong> <a href="2046.php">Brice Goglin: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Maybe in reply to:</strong> <a href="2044.php">Nathalie Furmento: "[hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2048.php">Nathalie Furmento: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>Reply:</strong> <a href="2048.php">Nathalie Furmento: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
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
