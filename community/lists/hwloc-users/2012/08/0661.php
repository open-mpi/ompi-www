<?
$subject_val = "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  6 18:47:08 2012" -->
<!-- isoreceived="20120806224708" -->
<!-- sent="Tue, 07 Aug 2012 00:46:46 +0200" -->
<!-- isosent="20120806224646" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion" -->
<!-- id="50204956.4070009_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="2367E49CF1319C4FAF0E51EC778BD33126805F28_at_EXMB03.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-06 18:46:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0662.php">Kenneth A. Lloyd: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0660.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0660.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0662.php">Kenneth A. Lloyd: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Reply:</strong> <a href="0662.php">Kenneth A. Lloyd: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/08/2012 00:36, Wheeler, Kyle Bruce a &#233;crit :
<br>
<span class="quotelev1">&gt; Ahhhh, that's key! The documentation currently says &quot;Look at ancestor
</span><br>
<span class="quotelev1">&gt; objects from the bottom to the top until one of them contains a
</span><br>
<span class="quotelev1">&gt; distance matrix that matches the objects exactly&quot;, which suggests to
</span><br>
<span class="quotelev1">&gt; me that it will traverse the object hierarchy looking for the
</span><br>
<span class="quotelev1">&gt; NUMANodes *for* me.
</span><br>
<p>Ahh, this one is exactly what's really confusing. There are two things here:
<br>
1) the object that contains the distance matrix
<br>
2) the object that are covered by the matrix
<br>
<p>When the matrix covers the entire machine (usual case), (1) is the root
<br>
object and (2) are NUMA nodes.
<br>
If you ever have a distance matrix between all cores of the first socket
<br>
(and not any other core in the machine), the first socket object would
<br>
contain a matrix with distance-&gt;relative_depth = depth(socket)-depth(core)
<br>
<p>So when you're looking for Core latencies, you check whether the
<br>
ancestor immediately above Core contain a matrix for Core distances,
<br>
then its parent, ... up to the root object. So it's about (1) moving up
<br>
but (2) remains the same type (but (2) gets wider when (1) goes up).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0662.php">Kenneth A. Lloyd: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0660.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>In reply to:</strong> <a href="0660.php">Wheeler, Kyle Bruce: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0662.php">Kenneth A. Lloyd: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
<li><strong>Reply:</strong> <a href="0662.php">Kenneth A. Lloyd: "Re: [hwloc-users] [EXTERNAL] Re: hwloc_get_latency() failures and confusion"</a>
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
