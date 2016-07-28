<?
$subject_val = "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 10:26:40 2012" -->
<!-- isoreceived="20120703142640" -->
<!-- sent="Tue, 03 Jul 2012 09:26:35 -0500" -->
<!-- isosent="20120703142635" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?" -->
<!-- id="4FF3011B.6060406_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6644.1341272926_at_kanawha.pbspro.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 10:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0656.php">Carl Smith: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Previous message:</strong> <a href="0654.php">Brice Goglin: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>In reply to:</strong> <a href="0652.php">Carl Smith: "[hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0656.php">Carl Smith: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/02/2012 06:48 PM, Carl Smith wrote:
<br>
<span class="quotelev1">&gt; 	I happened to run &quot;lstopo --of xml&quot; as root on a RHEL6.1 system
</span><br>
<span class="quotelev1">&gt; and was surprised with a core dump:
</span><br>
<p>This is almost certainly Red Hat bug 740630,
<br>
<a href="https://bugzilla.redhat.com/show_bug.cgi?id=740630">https://bugzilla.redhat.com/show_bug.cgi?id=740630</a>
<br>
<p>I reported it to the hwloc-devel list last November. It has been fixed in Red
<br>
Hat Enterprise Linux 6.2. The libpci package version containing the fix is
<br>
pciutils-3.1.4-11.el6
<br>
I don't see an indication that the fix is scheduled for a back-port to RHEL
<br>
6.1. If you need a 6.1 fix, please contact your support or sales
<br>
representative and make a request.
<br>
<p>--Guy
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Looking for PCI devices
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scanning PCI buses...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;   0000:00:01.0 0604 8086:3408 Intel Corporation 5520/5500/X58 I/O Hub PCI Express Root Port 1
</span><br>
<span class="quotelev1">&gt;   0000:00:00.0 0600 8086:3405 Intel Corporation 5520/5500/X58 I/O Hub to ESI Port
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** /tmp/hwloc-1.4.2/bin/lstopo: double free or corruption (!prev): 0x0000000001bfed50 ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which gdb reported as occurring here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x0000003905e32905 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x0000003905e340e5 in abort () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x0000003905e6f827 in __libc_message () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x0000003905e75146 in malloc_printerr () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x00000035ace06bdf in ?? () from /lib64/libpci.so.3
</span><br>
<span class="quotelev1">&gt; #5  0x00000035ace02c9e in pci_free_dev () from /lib64/libpci.so.3
</span><br>
<span class="quotelev1">&gt; #6  0x00000035ace029e0 in pci_cleanup () from /lib64/libpci.so.3
</span><br>
<span class="quotelev1">&gt; #7  0x00007f14fe211e5f in hwloc_look_libpci (topology=0x156c130)
</span><br>
<span class="quotelev1">&gt;     at topology-libpci.c:751
</span><br>
<span class="quotelev1">&gt; #8  0x00007f14fe1fccbd in hwloc_discover (topology=0x156c130)
</span><br>
<span class="quotelev1">&gt;     at topology.c:2299
</span><br>
<span class="quotelev1">&gt; #9  0x00007f14fe1fdde2 in hwloc_topology_load (topology=0x156c130)
</span><br>
<span class="quotelev1">&gt;     at topology.c:2831
</span><br>
<span class="quotelev1">&gt; #10 0x0000000000405112 in main (argc=1, argv=0x7fffac612d38) at lstopo.c:530
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sure enough, when I fed the same command to valgrind, it told me
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # valgrind --tool=memcheck /tmp/hwloc-1.4.2/bin/lstopo --of xml
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;   0000:00:01.0 0604 8086:3408 Intel Corporation 5520/5500/X58 I/O Hub PCI Express Root Port 1
</span><br>
<span class="quotelev1">&gt;   0000:00:00.0 0600 8086:3405 Intel Corporation 5520/5500/X58 I/O Hub to ESI Port
</span><br>
<span class="quotelev1">&gt; ==6531== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==6531==    at 0x35ACE06BDF: ??? (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x405111: main (lstopo.c:530)
</span><br>
<span class="quotelev1">&gt; ==6531==  Address 0x4eec440 is 144 bytes inside a block of size 200 free'd
</span><br>
<span class="quotelev1">&gt; ==6531==    at 0x4A0595D: free (vg_replace_malloc.c:366)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE06BDE: ??? (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x405111: main (lstopo.c:530)
</span><br>
<span class="quotelev1">&gt; ==6531== 
</span><br>
<span class="quotelev1">&gt; ==6531== Invalid write of size 8
</span><br>
<span class="quotelev1">&gt; ==6531==    at 0x35ACE06BD0: ??? (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x405111: main (lstopo.c:530)
</span><br>
<span class="quotelev1">&gt; ==6531==  Address 0x4eec440 is 144 bytes inside a block of size 200 free'd
</span><br>
<span class="quotelev1">&gt; ==6531==    at 0x4A0595D: free (vg_replace_malloc.c:366)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE06BDE: ??? (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x405111: main (lstopo.c:530)
</span><br>
<span class="quotelev1">&gt; ==6531== 
</span><br>
<span class="quotelev1">&gt; ==6531== Invalid free() / delete / delete[]
</span><br>
<span class="quotelev1">&gt; ==6531==    at 0x4A0595D: free (vg_replace_malloc.c:366)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE06BDE: ??? (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x405111: main (lstopo.c:530)
</span><br>
<span class="quotelev1">&gt; ==6531==  Address 0x4eec3b0 is 0 bytes inside a block of size 200 free'd
</span><br>
<span class="quotelev1">&gt; ==6531==    at 0x4A0595D: free (vg_replace_malloc.c:366)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE06BDE: ??? (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
</span><br>
<span class="quotelev1">&gt; ==6531==    by 0x405111: main (lstopo.c:530)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	This seems much more like a libpci problem than an hwloc one
</span><br>
<span class="quotelev1">&gt; but I don't recall seeing it mentioned before, nor did I see anything
</span><br>
<span class="quotelev1">&gt; obvious looking for &quot;pci core&quot; in the report tracking system.  Did I
</span><br>
<span class="quotelev1">&gt; miss it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 			Carl
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0656.php">Carl Smith: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Previous message:</strong> <a href="0654.php">Brice Goglin: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>In reply to:</strong> <a href="0652.php">Carl Smith: "[hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0656.php">Carl Smith: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
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
