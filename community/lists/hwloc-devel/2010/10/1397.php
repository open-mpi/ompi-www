<?
$subject_val = "Re: [hwloc-devel] gather-topology.sh and rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 31 03:43:01 2010" -->
<!-- isoreceived="20101031074301" -->
<!-- sent="Sun, 31 Oct 2010 08:42:54 +0100" -->
<!-- isosent="20101031074254" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] gather-topology.sh and rpm" -->
<!-- id="4CCD1DFE.3070002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201010310144.31161.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] gather-topology.sh and rpm<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-31 03:42:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1398.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1396.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2670)"</a>
<li><strong>In reply to:</strong> <a href="1395.php">Jirka Hladky: "[hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1400.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="1400.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 31/10/2010 01:44, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; since gather-topology.sh is nice script to help debug problems I was thinking 
</span><br>
<span class="quotelev1">&gt; to add it to the rpm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, path to the lstopo is set to the absolute build path:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; abs_top_builddir=&quot;/home/jhladky/tests/performance/hwloc/hwloc-1.0.2&quot;
</span><br>
<span class="quotelev1">&gt; lstopo=&quot;$abs_top_builddir/utils/lstopo&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so it will no work after installation from rpm package (lstopo is in 
</span><br>
<span class="quotelev1">&gt; /usr/bin/lstopo)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would propose to modify the script to look first for installed lstopo using 
</span><br>
<span class="quotelev1">&gt; &quot;which&quot; command.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>What about we first try the one in $abs_top_builddir/utils/lstopo and
<br>
then revert back to $prefix/bin/lstopo ?
<br>
<p>By the way, should we rename gather-topology.sh into
<br>
hwloc-gather-topology.sh during install ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1398.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1396.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2670)"</a>
<li><strong>In reply to:</strong> <a href="1395.php">Jirka Hladky: "[hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1400.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="1400.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
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
