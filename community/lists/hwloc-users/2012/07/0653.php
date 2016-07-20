<?
$subject_val = "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 20:21:51 2012" -->
<!-- isoreceived="20120703002151" -->
<!-- sent="Mon, 02 Jul 2012 18:21:44 -0600" -->
<!-- isosent="20120703002144" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?" -->
<!-- id="1341274904.30068.1.camel_at_devhost.localdomain" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 20:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0654.php">Brice Goglin: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Previous message:</strong> <a href="0652.php">Carl Smith: "[hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>In reply to:</strong> <a href="0652.php">Carl Smith: "[hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0654.php">Brice Goglin: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just ran lstopo (1.4a1) --of xml on Scientific Linux 6.2 without a
<br>
problem.
<br>
<p>On Mon, 2012-07-02 at 16:48 -0700, Carl Smith wrote:
<br>
<p><span class="quotelev1">&gt; 	I happened to run &quot;lstopo --of xml&quot; as root on a RHEL6.1 system
</span><br>
<span class="quotelev1">&gt; and was surprised with a core dump:
</span><br>
<span class="quotelev1">&gt; 
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
<p><p>==============
<br>
Kenneth A. Lloyd, Jr.
<br>
CEO - Director of Systems Science
<br>
Watt Systems Technologies Inc.
<br>
Albuquerque, NM US
<br>
<p>This e-mail is covered by the Electronic Communications Privacy Act, 18
<br>
U.S.C. 2510-2521 and is intended only for the addressee named above. It
<br>
may contain privileged or confidential information. If you are not the
<br>
addressee you must not copy, distribute, disclose or use any of the
<br>
information in it. If you have received it in error please delete it and
<br>
immediately notify the sender.
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0653/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0654.php">Brice Goglin: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Previous message:</strong> <a href="0652.php">Carl Smith: "[hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>In reply to:</strong> <a href="0652.php">Carl Smith: "[hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0654.php">Brice Goglin: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
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
