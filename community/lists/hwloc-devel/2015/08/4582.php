<?
$subject_val = "Re: [hwloc-devel] Add support for PCIe drives";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 28 16:05:04 2015" -->
<!-- isoreceived="20150828200504" -->
<!-- sent="Fri, 28 Aug 2015 22:05:02 +0200" -->
<!-- isosent="20150828200502" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Add support for PCIe drives" -->
<!-- id="55E0BEEE.3030500_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="6B86B7F2A4026246AA81BA1ABF9756906A7B93D3_at_fmsmsx107.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Add support for PCIe drives<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-28 16:05:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4583.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-710-g003753c)"</a>
<li><strong>Previous message:</strong> <a href="4581.php">Tannenbaum, Barry M: "[hwloc-devel] Add support for PCIe drives"</a>
<li><strong>In reply to:</strong> <a href="4581.php">Tannenbaum, Barry M: "[hwloc-devel] Add support for PCIe drives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4589.php">Brice Goglin: "Re: [hwloc-devel] Add support for PCIe drives"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/08/2015 21:53, Tannenbaum, Barry M a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PCIe drives (like the Intel DC P3500/P3600/P3700) do not have a
</span><br>
<span class="quotelev1">&gt; controller &#150; they appear directly on the PCIe bus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah nice, I needed access to a machine with such a disk before adding
<br>
this support.
<br>
<p>Unfortunately, the I/O device discovery code was totally reworked in
<br>
master. Can you try git master to see if it works? Or better, run
<br>
&quot;hwloc-gather-topology foo&quot; (from master) and send the resulting
<br>
foo.tar.bz2 ? (send it to me in private, it will be large).
<br>
<p>thanks
<br>
Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4583.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-710-g003753c)"</a>
<li><strong>Previous message:</strong> <a href="4581.php">Tannenbaum, Barry M: "[hwloc-devel] Add support for PCIe drives"</a>
<li><strong>In reply to:</strong> <a href="4581.php">Tannenbaum, Barry M: "[hwloc-devel] Add support for PCIe drives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4589.php">Brice Goglin: "Re: [hwloc-devel] Add support for PCIe drives"</a>
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
