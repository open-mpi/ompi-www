<?
$subject_val = "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 04:39:40 2016" -->
<!-- isoreceived="20160405083940" -->
<!-- sent="Tue, 5 Apr 2016 10:39:29 +0200" -->
<!-- isosent="20160405083929" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows." -->
<!-- id="570379C1.2080002_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20160405082631.GA4052_at_var.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-05 04:39:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4779.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4777.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4777.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4779.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4779.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/04/2016 10:26, Samuel Thibault a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; The bug here is that that HWLOC_CHECK_DECL assumed that availability
</span><br>
<span class="quotelev1">&gt; of the function was tested before, i.e.
</span><br>
<span class="quotelev2">&gt;&gt; conftest.c(96) : fatal error C1083: Cannot open include file: 'sched.h': No
</span><br>
<span class="quotelev2">&gt;&gt; such file or directory
</span><br>
<span class="quotelev1">&gt; was unexpected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Adding a check for sched.h availability before CHECK_DECL() might be
<br>
enough for Jonathan's case. I am  not sure I want to change this m4 code
<br>
in v1.11.3 since it has been working fine for years.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4779.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4777.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4777.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4779.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Reply:</strong> <a href="4779.php">Samuel Thibault: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
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
