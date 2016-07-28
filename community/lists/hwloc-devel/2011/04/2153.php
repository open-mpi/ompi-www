<?
$subject_val = "Re: [hwloc-devel] specifying I/O devices on the command-line";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 05:30:01 2011" -->
<!-- isoreceived="20110418093001" -->
<!-- sent="Mon, 18 Apr 2011 11:29:55 +0200" -->
<!-- isosent="20110418092955" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] specifying I/O devices on the command-line" -->
<!-- id="4DAC0493.1040701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110412153149.GA5750_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] specifying I/O devices on the command-line<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-18 05:29:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2154.php">Rayson Ho: "[hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in Grid Engine / Grid Scheduler)"</a>
<li><strong>Previous message:</strong> <a href="2152.php">Brice Goglin: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>In reply to:</strong> <a href="2133.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/05/2178.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/05/2178.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/04/2011 17:31, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Tue 12 Apr 2011 14:10:33 +0200, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; * pci:0000:00:00.0 or pci:00:00.0 for a given PCI device
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; I believe we can make the function number optional too.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The device number is useless too (all devices on the same bus are
<br>
connected to the same hostbridge). But this kind of flexibility easily
<br>
creates parsing conflicts between 0000:00[:00[.0]] above and
<br>
0000:0000[:0] below. That's also why I initially though about keeping
<br>
the above syntax as is, and putting attributes between [...] below.
<br>
<p><span class="quotelev2">&gt;&gt; * pci:aaaa:bbbb:c for the c-th PCI device with vendor ID aaaa and device
</span><br>
<span class="quotelev2">&gt;&gt; ID bbbb
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; :c being optional if there is only one of those.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2154.php">Rayson Ho: "[hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in Grid Engine / Grid Scheduler)"</a>
<li><strong>Previous message:</strong> <a href="2152.php">Brice Goglin: "Re: [hwloc-devel] asymmetric trees"</a>
<li><strong>In reply to:</strong> <a href="2133.php">Samuel Thibault: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/05/2178.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/05/2178.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
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
