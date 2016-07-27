<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 10:23:19 2015" -->
<!-- isoreceived="20150728142319" -->
<!-- sent="Tue, 28 Jul 2015 16:23:15 +0200" -->
<!-- isosent="20150728142315" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="20150728142315.GS3090_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="55B78E1D.7050104_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 10:23:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4519.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4517.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4517.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4519.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4519.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4521.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 28 Jul 2015 16:13:49 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; and your commit is slightly different: (s/xchg/mov/ and removed last line).
</span><br>
<p>xchg is spurious here, mov is enough.  I didn't remove the last line, I
<br>
just kept the original source, which uses +a instead of =a and a.
<br>
<p><span class="quotelev1">&gt; FWIW, in master we don't have multiple inlining anymore (there's a
</span><br>
<span class="quotelev1">&gt; wrapper function calling this inline asm).
</span><br>
<p>You mean the cpuid_or_from_dump function?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4519.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4517.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4517.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4519.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4519.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4521.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
