<?
$subject_val = "[hwloc-users] anyone seen problems with PCI on RHEL 6?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 19:48:56 2012" -->
<!-- isoreceived="20120702234856" -->
<!-- sent="Mon, 02 Jul 2012 16:48:46 -0700" -->
<!-- isosent="20120702234846" -->
<!-- name="Carl Smith" -->
<!-- email="cs_at_[hidden]" -->
<!-- subject="[hwloc-users] anyone seen problems with PCI on RHEL 6?" -->
<!-- id="6644.1341272926_at_kanawha.pbspro.com" -->
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
<strong>Subject:</strong> [hwloc-users] anyone seen problems with PCI on RHEL 6?<br>
<strong>From:</strong> Carl Smith (<em>cs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 19:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0653.php">Kenneth Lloyd: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/05/0651.php">John Hanks: "Re: [hwloc-users] Hwloc error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0653.php">Kenneth Lloyd: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Reply:</strong> <a href="0653.php">Kenneth Lloyd: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Reply:</strong> <a href="0654.php">Brice Goglin: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Reply:</strong> <a href="0655.php">Guy Streeter: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Maybe reply:</strong> <a href="0656.php">Carl Smith: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I happened to run &quot;lstopo --of xml&quot; as root on a RHEL6.1 system
<br>
and was surprised with a core dump:
<br>
<p><p>...
<br>
Looking for PCI devices
<br>
<p>Scanning PCI buses...
<br>
...
<br>
&nbsp;&nbsp;0000:00:01.0 0604 8086:3408 Intel Corporation 5520/5500/X58 I/O Hub PCI Express Root Port 1
<br>
&nbsp;&nbsp;0000:00:00.0 0600 8086:3405 Intel Corporation 5520/5500/X58 I/O Hub to ESI Port
<br>
*** glibc detected *** /tmp/hwloc-1.4.2/bin/lstopo: double free or corruption (!prev): 0x0000000001bfed50 ***
<br>
<p><p>which gdb reported as occurring here:
<br>
<p><p>(gdb) bt
<br>
#0  0x0000003905e32905 in raise () from /lib64/libc.so.6
<br>
#1  0x0000003905e340e5 in abort () from /lib64/libc.so.6
<br>
#2  0x0000003905e6f827 in __libc_message () from /lib64/libc.so.6
<br>
#3  0x0000003905e75146 in malloc_printerr () from /lib64/libc.so.6
<br>
#4  0x00000035ace06bdf in ?? () from /lib64/libpci.so.3
<br>
#5  0x00000035ace02c9e in pci_free_dev () from /lib64/libpci.so.3
<br>
#6  0x00000035ace029e0 in pci_cleanup () from /lib64/libpci.so.3
<br>
#7  0x00007f14fe211e5f in hwloc_look_libpci (topology=0x156c130)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-libpci.c:751
<br>
#8  0x00007f14fe1fccbd in hwloc_discover (topology=0x156c130)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology.c:2299
<br>
#9  0x00007f14fe1fdde2 in hwloc_topology_load (topology=0x156c130)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology.c:2831
<br>
#10 0x0000000000405112 in main (argc=1, argv=0x7fffac612d38) at lstopo.c:530
<br>
<p><p>Sure enough, when I fed the same command to valgrind, it told me
<br>
<p><p># valgrind --tool=memcheck /tmp/hwloc-1.4.2/bin/lstopo --of xml
<br>
...
<br>
&nbsp;&nbsp;0000:00:01.0 0604 8086:3408 Intel Corporation 5520/5500/X58 I/O Hub PCI Express Root Port 1
<br>
&nbsp;&nbsp;0000:00:00.0 0600 8086:3405 Intel Corporation 5520/5500/X58 I/O Hub to ESI Port
<br>
==6531== Invalid read of size 8
<br>
==6531==    at 0x35ACE06BDF: ??? (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
<br>
==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
<br>
==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
<br>
==6531==    by 0x405111: main (lstopo.c:530)
<br>
==6531==  Address 0x4eec440 is 144 bytes inside a block of size 200 free'd
<br>
==6531==    at 0x4A0595D: free (vg_replace_malloc.c:366)
<br>
==6531==    by 0x35ACE06BDE: ??? (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
<br>
==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
<br>
==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
<br>
==6531==    by 0x405111: main (lstopo.c:530)
<br>
==6531== 
<br>
==6531== Invalid write of size 8
<br>
==6531==    at 0x35ACE06BD0: ??? (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
<br>
==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
<br>
==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
<br>
==6531==    by 0x405111: main (lstopo.c:530)
<br>
==6531==  Address 0x4eec440 is 144 bytes inside a block of size 200 free'd
<br>
==6531==    at 0x4A0595D: free (vg_replace_malloc.c:366)
<br>
==6531==    by 0x35ACE06BDE: ??? (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
<br>
==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
<br>
==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
<br>
==6531==    by 0x405111: main (lstopo.c:530)
<br>
==6531== 
<br>
==6531== Invalid free() / delete / delete[]
<br>
==6531==    at 0x4A0595D: free (vg_replace_malloc.c:366)
<br>
==6531==    by 0x35ACE06BDE: ??? (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
<br>
==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
<br>
==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
<br>
==6531==    by 0x405111: main (lstopo.c:530)
<br>
==6531==  Address 0x4eec3b0 is 0 bytes inside a block of size 200 free'd
<br>
==6531==    at 0x4A0595D: free (vg_replace_malloc.c:366)
<br>
==6531==    by 0x35ACE06BDE: ??? (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE02C9D: pci_free_dev (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x35ACE029DF: pci_cleanup (in /lib64/libpci.so.3.1.4)
<br>
==6531==    by 0x4C2BE5E: hwloc_look_libpci (topology-libpci.c:751)
<br>
==6531==    by 0x4C16CBC: hwloc_discover (topology.c:2299)
<br>
==6531==    by 0x4C17DE1: hwloc_topology_load (topology.c:2831)
<br>
==6531==    by 0x405111: main (lstopo.c:530)
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This seems much more like a libpci problem than an hwloc one
<br>
but I don't recall seeing it mentioned before, nor did I see anything
<br>
obvious looking for &quot;pci core&quot; in the report tracking system.  Did I
<br>
miss it?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0653.php">Kenneth Lloyd: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/05/0651.php">John Hanks: "Re: [hwloc-users] Hwloc error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0653.php">Kenneth Lloyd: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Reply:</strong> <a href="0653.php">Kenneth Lloyd: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Reply:</strong> <a href="0654.php">Brice Goglin: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Reply:</strong> <a href="0655.php">Guy Streeter: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Maybe reply:</strong> <a href="0656.php">Carl Smith: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
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
