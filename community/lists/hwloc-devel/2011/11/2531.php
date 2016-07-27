<?
$subject_val = "[hwloc-devel] memory corruption problem with libpci";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  3 13:52:02 2011" -->
<!-- isoreceived="20111103175202" -->
<!-- sent="Thu, 03 Nov 2011 12:51:56 -0500" -->
<!-- isosent="20111103175156" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] memory corruption problem with libpci" -->
<!-- id="4EB2D4BC.7010402_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] memory corruption problem with libpci<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-03 13:51:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2532.php">Samuel Thibault: "Re: [hwloc-devel] memory corruption problem with libpci"</a>
<li><strong>Previous message:</strong> <a href="2530.php">Samuel Thibault: "Re: [hwloc-devel] Re :  hwloc 1.3.1 needed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2532.php">Samuel Thibault: "Re: [hwloc-devel] memory corruption problem with libpci"</a>
<li><strong>Maybe reply:</strong> <a href="2532.php">Samuel Thibault: "Re: [hwloc-devel] memory corruption problem with libpci"</a>
<li><strong>Reply:</strong> <a href="2533.php">Guy Streeter: "Re: [hwloc-devel] memory corruption problem with libpci"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a RHEL6.1 system on which I get a glibc error report:
<br>
<p>*** glibc detected *** hwloc-1.3/bin/lstopo: double free or corruption
<br>
(!prev): 0x0000000001945630 ***
<br>
======= Backtrace: =========
<br>
/lib64/libc.so.6[0x3d1a275716]
<br>
/lib64/libpci.so.3[0x3d1aa06bdf]
<br>
/lib64/libpci.so.3(pci_free_dev+0x1e)[0x3d1aa02c9e]
<br>
/lib64/libpci.so.3(pci_cleanup+0x20)[0x3d1aa029e0]
<br>
/root/hwloc-1.3/src/.libs/libhwloc.so.4(+0x1e8e2)[0x7f3ef14908e2]
<br>
/root/hwloc-1.3/src/.libs/libhwloc.so.4(+0xa1fe)[0x7f3ef147c1fe]
<br>
/root/hwloc-1.3/src/.libs/libhwloc.so.4(hwloc_topology_load+0x1a2)[0x7f3ef147d136]
<br>
hwloc-1.3/bin/lstopo[0x405050]
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x3d1a21ec9d]
<br>
hwloc-1.3/bin/lstopo[0x402d49]
<br>
<p>I tried writing a test program that does the same kinds of things with libpci
<br>
that I think hwloc does, but I cannot reproduce this outside of hwloc.
<br>
Does it look familiar? How can I help debug this?
<br>
<p>thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2532.php">Samuel Thibault: "Re: [hwloc-devel] memory corruption problem with libpci"</a>
<li><strong>Previous message:</strong> <a href="2530.php">Samuel Thibault: "Re: [hwloc-devel] Re :  hwloc 1.3.1 needed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2532.php">Samuel Thibault: "Re: [hwloc-devel] memory corruption problem with libpci"</a>
<li><strong>Maybe reply:</strong> <a href="2532.php">Samuel Thibault: "Re: [hwloc-devel] memory corruption problem with libpci"</a>
<li><strong>Reply:</strong> <a href="2533.php">Guy Streeter: "Re: [hwloc-devel] memory corruption problem with libpci"</a>
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
