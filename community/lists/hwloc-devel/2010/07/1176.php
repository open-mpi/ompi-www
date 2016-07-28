<?
$subject_val = "Re: [hwloc-devel] === CREATE FAILURE (trunk) ===";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 01:02:02 2010" -->
<!-- isoreceived="20100716050202" -->
<!-- sent="Fri, 16 Jul 2010 06:59:37 +0200" -->
<!-- isosent="20100716045937" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] === CREATE FAILURE (trunk) ===" -->
<!-- id="4C3FE739.6000801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201007160102.o6G12nTt001199_at_eddie.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] === CREATE FAILURE (trunk) ===<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 00:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1177.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="1175.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.2rc1r2329)"</a>
<li><strong>In reply to:</strong> <a href="1174.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1177.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="1177.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16/07/2010 03:02, MPI Team a &#233;crit :
<br>
<span class="quotelev1">&gt; /bin/sh: line 1:  1024 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_bind
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  1048 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_object_userdata
</span><br>
<span class="quotelev1">&gt; PASS: hwloc_synthetic
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  1094 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_is_thissystem
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  1118 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_insert_misc
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  1142 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: glibc-sched
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I can't reproduce this on my machines. Can somebody send the
<br>
corresponding gdb backtrace? Take trunk, ./configure, make, make check,
<br>
and it fails
<br>
&nbsp;&nbsp;&nbsp;libtool --mode=execute gdb &lt;test program&gt;
<br>
<p>thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1177.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="1175.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.2rc1r2329)"</a>
<li><strong>In reply to:</strong> <a href="1174.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1177.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Reply:</strong> <a href="1177.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
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
