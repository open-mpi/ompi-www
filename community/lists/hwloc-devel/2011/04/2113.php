<?
$subject_val = "[hwloc-devel] segv's in nightly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 08:48:01 2011" -->
<!-- isoreceived="20110407124801" -->
<!-- sent="Thu, 7 Apr 2011 08:47:55 -0400" -->
<!-- isosent="20110407124755" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] segv's in nightly" -->
<!-- id="762EC176-84EA-46ED-BA91-252114E75BB4_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] segv's in nightly<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-07 08:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2114.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="2112.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's the bt on RHEL4:
<br>
<p>hwloc_iodevs
<br>
<p>(gdb) bt
<br>
#0  0x00bc63f3 in _IO_vfscanf_internal () from /lib/tls/libc.so.6
<br>
#1  0x00bcb7f1 in vfscanf () from /lib/tls/libc.so.6
<br>
#2  0x00bcfd7f in fscanf () from /lib/tls/libc.so.6
<br>
#3  0x00fa24ca in hwloc_linux_parse_cpumap_file (file=0x0, set=0x8de7050)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-linux.c:1321
<br>
#4  0x00fa068c in hwloc_pci_find_hostbridge_parent (topology=0x8de3008, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hostbridge=0x8de6f90, created=0xbff13c38) at topology-libpci.c:456
<br>
#5  0x00fa0fd8 in hwloc_look_libpci (topology=0x8de3008)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-libpci.c:720
<br>
#6  0x00f920fa in hwloc_discover (topology=0x8de3008) at topology.c:1980
<br>
#7  0x00f92ecc in hwloc_topology_load (topology=0x8de3008) at topology.c:2463
<br>
#8  0x080488b7 in main () at hwloc_iodevs.c:25
<br>
(gdb) up
<br>
#1  0x00bcb7f1 in vfscanf () from /lib/tls/libc.so.6
<br>
(gdb) 
<br>
#2  0x00bcfd7f in fscanf () from /lib/tls/libc.so.6
<br>
(gdb) 
<br>
#3  0x00fa24ca in hwloc_linux_parse_cpumap_file (file=0x0, set=0x8de7050)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-linux.c:1321
<br>
1321	  while (fscanf(file, &quot;%lx,&quot;, &amp;map) == 1) /* read one kernel cpu mask and the ending comma */
<br>
(gdb) print file
<br>
$1 = (FILE *) 0x0
<br>
(gdb) 
<br>
<p>xmlbuffer looks identical:
<br>
<p>(gdb) bt
<br>
#0  0x00bc63f3 in _IO_vfscanf_internal () from /lib/tls/libc.so.6
<br>
#1  0x00bcb7f1 in vfscanf () from /lib/tls/libc.so.6
<br>
#2  0x00bcfd7f in fscanf () from /lib/tls/libc.so.6
<br>
#3  0x00fed4ca in hwloc_linux_parse_cpumap_file (file=0x0, set=0x9ca4050)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-linux.c:1321
<br>
#4  0x00feb68c in hwloc_pci_find_hostbridge_parent (topology=0x9ca0008, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hostbridge=0x9ca3f90, created=0xbff02528) at topology-libpci.c:456
<br>
#5  0x00febfd8 in hwloc_look_libpci (topology=0x9ca0008)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-libpci.c:720
<br>
#6  0x00fdd0fa in hwloc_discover (topology=0x9ca0008) at topology.c:1980
<br>
#7  0x00fddecc in hwloc_topology_load (topology=0x9ca0008) at topology.c:2463
<br>
#8  0x080487d1 in main () at xmlbuffer.c:24
<br>
(gdb) up
<br>
#1  0x00bcb7f1 in vfscanf () from /lib/tls/libc.so.6
<br>
(gdb) 
<br>
#2  0x00bcfd7f in fscanf () from /lib/tls/libc.so.6
<br>
(gdb) 
<br>
#3  0x00fed4ca in hwloc_linux_parse_cpumap_file (file=0x0, set=0x9ca4050)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-linux.c:1321
<br>
1321	  while (fscanf(file, &quot;%lx,&quot;, &amp;map) == 1) /* read one kernel cpu mask and the ending comma */
<br>
(gdb) print file
<br>
$1 = (FILE *) 0x0
<br>
(gdb) 
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2114.php">Brice Goglin: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="2112.php">Jeff Squyres: "Re: [hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
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
