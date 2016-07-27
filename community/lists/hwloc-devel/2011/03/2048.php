<?
$subject_val = "Re: [hwloc-devel] nvcc on windows visual studio and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 10:25:09 2011" -->
<!-- isoreceived="20110308152509" -->
<!-- sent="Tue, 08 Mar 2011 16:25:04 +0100" -->
<!-- isosent="20110308152504" -->
<!-- name="Nathalie Furmento" -->
<!-- email="nathalie.furmento_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] nvcc on windows visual studio and hwloc" -->
<!-- id="4D764A50.8010009_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110308095853.GL4962_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2011-03-08 10:25:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2049.php">Jeff Squyres: "[hwloc-devel] Coverity Scan"</a>
<li><strong>Previous message:</strong> <a href="2047.php">Samuel Thibault: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>In reply to:</strong> <a href="2047.php">Samuel Thibault: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 08/03/2011 10:58, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Nathalie Furmento, le Tue 08 Mar 2011 10:38:14 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; On 08/03/2011 10:31, Nathalie Furmento wrote:
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to compile some CUDA applications on windows, these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; applications include (indirectly) hwloc.h.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The nvcc compiler which uses windows visual studio complains it does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not find the file unistd.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .../hwloc-win32-build-1.1.1/include\hwloc/config.h (104): fatal error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C1083: Cannot open include file: 'unistd.h': No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; I just tried to comment out the include&lt;unistd.h&gt;, it gives another error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; .../hwloc-win32-build-1.1.1/include\hwloc.h (25): fatal error C1083:
</span><br>
<span class="quotelev2">&gt;&gt; Cannot open include file: 'stdint.h': No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Could you try the attached patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt;    
</span><br>
I tried the patch, it is solving the problem.
<br>
<p>Thanks,
<br>
<p>Nathalie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2049.php">Jeff Squyres: "[hwloc-devel] Coverity Scan"</a>
<li><strong>Previous message:</strong> <a href="2047.php">Samuel Thibault: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
<li><strong>In reply to:</strong> <a href="2047.php">Samuel Thibault: "Re: [hwloc-devel] nvcc on windows visual studio and hwloc"</a>
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
