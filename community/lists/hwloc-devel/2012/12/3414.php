<?
$subject_val = "Re: [hwloc-devel] hwloc 1.6 rc2 llvm-gcc warning";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  2 05:47:52 2012" -->
<!-- isoreceived="20121202104752" -->
<!-- sent="Sun, 02 Dec 2012 11:47:39 +0100" -->
<!-- isosent="20121202104739" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.6 rc2 llvm-gcc warning" -->
<!-- id="50BB31CB.5060402_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="50BAEFDF.5090103_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.6 rc2 llvm-gcc warning<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-02 05:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3415.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5072)"</a>
<li><strong>Previous message:</strong> <a href="3413.php">Christopher Samuel: "[hwloc-devel] hwloc 1.6 rc2 llvm-gcc warning"</a>
<li><strong>In reply to:</strong> <a href="3413.php">Christopher Samuel: "[hwloc-devel] hwloc 1.6 rc2 llvm-gcc warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 02/12/2012 07:06, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; Compiling 1.6-rc2 with llvm-gcc under Kubuntu 12.10 gives:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-ps.c: In function &#145;main&#146;:
</span><br>
<span class="quotelev1">&gt; hwloc-ps.c:280:7: warning: ignoring return value of &#145;fgets&#146;, declared
</span><br>
<span class="quotelev1">&gt; with attribute warn_unused_result [-Wunused-result]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<p>Thanks, fixed.
<br>
<p>By the way, I haven't released the final 1.6 yet because I found some
<br>
doxygen bugs that cause buggy links in our PDF doc. But I didn't get any
<br>
feedback from the doxygen devs yet, so I'll likely release the final 1.6
<br>
tomorrow anyway (I have some workarounds for doxygen bugs but they won't
<br>
fix everything).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3415.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5072)"</a>
<li><strong>Previous message:</strong> <a href="3413.php">Christopher Samuel: "[hwloc-devel] hwloc 1.6 rc2 llvm-gcc warning"</a>
<li><strong>In reply to:</strong> <a href="3413.php">Christopher Samuel: "[hwloc-devel] hwloc 1.6 rc2 llvm-gcc warning"</a>
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
