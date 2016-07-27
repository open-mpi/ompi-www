<?
$subject_val = "Re: [hwloc-devel] memory corruption problem with libpci";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 17:11:30 2011" -->
<!-- isoreceived="20111103211130" -->
<!-- sent="Thu, 03 Nov 2011 16:11:24 -0500" -->
<!-- isosent="20111103211124" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory corruption problem with libpci" -->
<!-- id="4EB3037C.7030204_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EB2D4BC.7010402_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] memory corruption problem with libpci<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 17:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2534.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3955)"</a>
<li><strong>Previous message:</strong> <a href="2532.php">Samuel Thibault: "Re: [hwloc-devel] memory corruption problem with libpci"</a>
<li><strong>In reply to:</strong> <a href="2531.php">Guy Streeter: "[hwloc-devel] memory corruption problem with libpci"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/03/2011 12:51 PM, Guy Streeter wrote:
<br>
<span class="quotelev1">&gt; I have a RHEL6.1 system on which I get a glibc error report:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** hwloc-1.3/bin/lstopo: double free or corruption
</span><br>
<span class="quotelev1">&gt; (!prev): 0x0000000001945630 ***
</span><br>
<span class="quotelev1">&gt; ======= Backtrace: =========
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6[0x3d1a275716]
</span><br>
<span class="quotelev1">&gt; /lib64/libpci.so.3[0x3d1aa06bdf]
</span><br>
<span class="quotelev1">&gt; /lib64/libpci.so.3(pci_free_dev+0x1e)[0x3d1aa02c9e]
</span><br>
<span class="quotelev1">&gt; /lib64/libpci.so.3(pci_cleanup+0x20)[0x3d1aa029e0]
</span><br>
<span class="quotelev1">&gt; /root/hwloc-1.3/src/.libs/libhwloc.so.4(+0x1e8e2)[0x7f3ef14908e2]
</span><br>
<span class="quotelev1">&gt; /root/hwloc-1.3/src/.libs/libhwloc.so.4(+0xa1fe)[0x7f3ef147c1fe]
</span><br>
<span class="quotelev1">&gt; /root/hwloc-1.3/src/.libs/libhwloc.so.4(hwloc_topology_load+0x1a2)[0x7f3ef147d136]
</span><br>
<span class="quotelev1">&gt; hwloc-1.3/bin/lstopo[0x405050]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x3d1a21ec9d]
</span><br>
<span class="quotelev1">&gt; hwloc-1.3/bin/lstopo[0x402d49]
</span><br>
<p>It appears to be a libpci bug:
<br>
<p><a href="https://bugzilla.redhat.com/show_bug.cgi?id=740630">https://bugzilla.redhat.com/show_bug.cgi?id=740630</a>
<br>
<p>fix is expected to ship in RHEL6.2
<br>
<p>thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2534.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3955)"</a>
<li><strong>Previous message:</strong> <a href="2532.php">Samuel Thibault: "Re: [hwloc-devel] memory corruption problem with libpci"</a>
<li><strong>In reply to:</strong> <a href="2531.php">Guy Streeter: "[hwloc-devel] memory corruption problem with libpci"</a>
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
