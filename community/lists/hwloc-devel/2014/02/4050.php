<?
$subject_val = "Re: [hwloc-devel] hwloc with Xen system support - v2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  1 05:24:05 2014" -->
<!-- isoreceived="20140201102405" -->
<!-- sent="Sat, 01 Feb 2014 11:24:00 +0100" -->
<!-- isosent="20140201102400" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc with Xen system support - v2" -->
<!-- id="52ECCB40.5020208_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52E93EA3.3060703_at_citrix.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc with Xen system support - v2<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-01 05:24:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4051.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-68-gb1d497b)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4049.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-65-gbb80f0f)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4047.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4056.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4056.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/01/2014 18:47, Andrew Cooper a &#233;crit :
<br>
<span class="quotelev1">&gt; This would be nice, although it would involve some more selection on the
</span><br>
<span class="quotelev1">&gt; exclusions.  Currently, running Xen excludes all other cpu detection
</span><br>
<span class="quotelev1">&gt; methods as they are more likely than not to be wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One solution to this would be to have a &quot;generic&quot; x86 cpuid topology
</span><br>
<span class="quotelev1">&gt; generator which must be parametrised with a structure, at which point
</span><br>
<span class="quotelev1">&gt; both Xen and the fallback x86 methods can supply appropriate function
</span><br>
<span class="quotelev1">&gt; pointers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would allow Xen to use the generic topology code while still
</span><br>
<span class="quotelev1">&gt; preventing fallback to the x86 topology detection method.
</span><br>
<p>Right, that'd work better, and the code would be nicer.
<br>
I'll look at this.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4051.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-68-gb1d497b)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4049.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-65-gbb80f0f)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/01/4047.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4056.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Reply:</strong> <a href="4056.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
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
