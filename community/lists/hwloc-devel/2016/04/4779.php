<?
$subject_val = "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 05:15:47 2016" -->
<!-- isoreceived="20160405091547" -->
<!-- sent="Tue, 5 Apr 2016 11:15:45 +0200" -->
<!-- isosent="20160405091545" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows." -->
<!-- id="20160405091545.GC4052_at_var.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="570379C1.2080002_at_inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-05 05:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4780.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4778.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4778.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4780.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, on Tue 05 Apr 2016 10:39:29 +0200, wrote:
<br>
<span class="quotelev1">&gt; Le 05/04/2016 10:26, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; The bug here is that that HWLOC_CHECK_DECL assumed that availability
</span><br>
<span class="quotelev2">&gt; &gt; of the function was tested before, i.e.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; conftest.c(96) : fatal error C1083: Cannot open include file: 'sched.h': No
</span><br>
<span class="quotelev3">&gt; &gt;&gt; such file or directory
</span><br>
<span class="quotelev2">&gt; &gt; was unexpected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding a check for sched.h availability before CHECK_DECL() might be
</span><br>
<span class="quotelev1">&gt; enough for Jonathan's case. I am  not sure I want to change this m4 code
</span><br>
<span class="quotelev1">&gt; in v1.11.3 since it has been working fine for years.
</span><br>
<p>Well, we can as well just use AC_CHECK_DECL in v1.11.3, it'll just get
<br>
the same result as what the code currently expects, and not the bug.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4780.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>Previous message:</strong> <a href="4778.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<li><strong>In reply to:</strong> <a href="4778.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4780.php">Brice Goglin: "Re: [hwloc-devel] Three patches for MSVC/ICL builds on Windows."</a>
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
