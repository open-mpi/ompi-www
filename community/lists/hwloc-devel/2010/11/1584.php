<?
$subject_val = "[hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 01:21:44 2010" -->
<!-- isoreceived="20101124062144" -->
<!-- sent="Wed, 24 Nov 2010 17:21:35 +1100" -->
<!-- isosent="20101124062135" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825" -->
<!-- id="4CECAEEF.6050408_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 01:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1585.php">Christopher Samuel: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<li><strong>Previous message:</strong> <a href="1583.php">Christopher Samuel: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1585.php">Christopher Samuel: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<li><strong>Reply:</strong> <a href="1585.php">Christopher Samuel: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<li><strong>Reply:</strong> <a href="1594.php">Brice Goglin: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>Hi folks,
<br>
<p>Whilst trying to work out this &quot;make check&quot; error I'm seeing
<br>
on SLES10/PPC I ran the failing hwloc_bind test under Valgrind.
<br>
<p>The first time around I missed the errors due to the number of
<br>
warnings about unsupported syscalls. :-(
<br>
<p>There are 18 different error contexts reported, a lot more on
<br>
PPC than on this Intel x86-64 laptop.
<br>
<p>This is the error on x86-64:
<br>
<p>==13648== 6 errors in context 1 of 1:
<br>
==13648== Conditional jump or move depends on uninitialised value(s)
<br>
==13648==    at 0x40B678: hwloc_alloc (bind.c:451)
<br>
==13648==    by 0x40B81A: hwloc_alloc_membind_nodeset (bind.c:490)
<br>
==13648==    by 0x40B88B: hwloc_alloc_membind (bind.c:502)
<br>
==13648==    by 0x402D20: testmem (hwloc_bind.c:95)
<br>
==13648==    by 0x402E6E: testmem2 (hwloc_bind.c:109)
<br>
==13648==    by 0x402F7D: testmem3 (hwloc_bind.c:124)
<br>
==13648==    by 0x40325A: main (hwloc_bind.c:187)
<br>
<p><p>This is valgrind's summary of errors on PPC:
<br>
<p>==6259== 1 errors in context 1 of 18:
<br>
==6259== Syscall param get_mempolicy(nodemask) points to unaddressable
<br>
byte(s)
<br>
==6259==    at 0xFBE6FE0: syscall (in /lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC9BDCB: get_mempolicy (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x10016A7B: hwloc_linux_get_thisthread_membind
<br>
(topology-linux.c:1064)
<br>
==6259==    by 0x1000DDD7: hwloc_get_membind_nodeset (bind.c:278)
<br>
==6259==    by 0x1000DE5F: hwloc_get_membind (bind.c:292)
<br>
==6259==    by 0x10002ECB: testmem (hwloc_bind.c:80)
<br>
==6259==    by 0x100035B3: testmem2 (hwloc_bind.c:109)
<br>
==6259==    by 0x100036F3: testmem3 (hwloc_bind.c:124)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69f5034 is 0 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x100169A7: hwloc_linux_find_kernel_max_numnodes
<br>
(topology-linux.c:1046)
<br>
==6259==    by 0x10016A7B: hwloc_linux_get_thisthread_membind
<br>
(topology-linux.c:1064)
<br>
==6259==    by 0x1000DDD7: hwloc_get_membind_nodeset (bind.c:278)
<br>
==6259==    by 0x1000DE5F: hwloc_get_membind (bind.c:292)
<br>
==6259==    by 0x10002ECB: testmem (hwloc_bind.c:80)
<br>
==6259==    by 0x100035B3: testmem2 (hwloc_bind.c:109)
<br>
==6259==    by 0x100036F3: testmem3 (hwloc_bind.c:124)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 1 errors in context 2 of 18:
<br>
==6259== Invalid write of size 1
<br>
==6259==    at 0xFC005F4: __vsnprintf_chk@@GLIBC_2.4 (in
<br>
/lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC004F3: __snprintf_chk@@GLIBC_2.4 (in
<br>
/lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC9B4D3: numa_init (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x440E4DB: call_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x440E65F: _dl_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x4415AF3: _start (in /lib/ld-2.4.so)
<br>
==6259==  Address 0x697e0cc is 2 bytes after a block of size 2 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0xFC9B413: numa_init (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x440E4DB: call_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x440E65F: _dl_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x4415AF3: _start (in /lib/ld-2.4.so)
<br>
==6259==
<br>
==6259== 1 errors in context 3 of 18:
<br>
==6259== Invalid write of size 1
<br>
==6259==    at 0xFB58CA0: vfprintf@@GLIBC_2.4 (in /lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC005E3: __vsnprintf_chk@@GLIBC_2.4 (in
<br>
/lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC004F3: __snprintf_chk@@GLIBC_2.4 (in
<br>
/lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC9B4D3: numa_init (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x440E4DB: call_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x440E65F: _dl_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x4415AF3: _start (in /lib/ld-2.4.so)
<br>
==6259==  Address 0x697e0cb is 1 bytes after a block of size 2 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0xFC9B413: numa_init (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x440E4DB: call_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x440E65F: _dl_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x4415AF3: _start (in /lib/ld-2.4.so)
<br>
==6259==
<br>
==6259==
<br>
==6259== 1 errors in context 4 of 18:
<br>
==6259== Invalid write of size 1
<br>
==6259==    at 0xFC005AC: __vsnprintf_chk@@GLIBC_2.4 (in
<br>
/lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC004F3: __snprintf_chk@@GLIBC_2.4 (in
<br>
/lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC9B4D3: numa_init (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x440E4DB: call_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x440E65F: _dl_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x4415AF3: _start (in /lib/ld-2.4.so)
<br>
==6259==  Address 0x697e0cb is 1 bytes after a block of size 2 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0xFC9B413: numa_init (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x440E4DB: call_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x440E65F: _dl_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x4415AF3: _start (in /lib/ld-2.4.so)
<br>
==6259==
<br>
==6259==
<br>
==6259== 1 errors in context 5 of 18:
<br>
==6259== Invalid write of size 1
<br>
==6259==    at 0xFC005F4: __vsnprintf_chk@@GLIBC_2.4 (in
<br>
/lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC004F3: __snprintf_chk@@GLIBC_2.4 (in
<br>
/lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC9B543: numa_init (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x440E4DB: call_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x440E65F: _dl_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x4415AF3: _start (in /lib/ld-2.4.so)
<br>
==6259==  Address 0x697e0cb is 1 bytes after a block of size 2 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0xFC9B413: numa_init (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x440E4DB: call_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x440E65F: _dl_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x4415AF3: _start (in /lib/ld-2.4.so)
<br>
==6259==
<br>
==6259==
<br>
==6259== 1 errors in context 6 of 18:
<br>
==6259== Invalid write of size 1
<br>
==6259==    at 0xFB84428: _IO_default_xsputn (in /lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFB58347: vfprintf@@GLIBC_2.4 (in /lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC005E3: __vsnprintf_chk@@GLIBC_2.4 (in
<br>
/lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC004F3: __snprintf_chk@@GLIBC_2.4 (in
<br>
/lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC9B543: numa_init (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x440E4DB: call_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x440E65F: _dl_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x4415AF3: _start (in /lib/ld-2.4.so)
<br>
==6259==  Address 0x697e0ca is 0 bytes after a block of size 2 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0xFC9B413: numa_init (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x440E4DB: call_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x440E65F: _dl_init (in /lib/ld-2.4.so)
<br>
==6259==    by 0x4415AF3: _start (in /lib/ld-2.4.so)
<br>
==6259==
<br>
==6259==
<br>
==6259== 12 errors in context 7 of 18:
<br>
==6259== Invalid write of size 1
<br>
==6259==    at 0xFFBA678: memset (mc_replace_strmem.c:626)
<br>
==6259==    by 0x10016867: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:1001)
<br>
==6259==    by 0x1000DB53: hwloc_set_membind_nodeset (bind.c:238)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002F67: testmem (hwloc_bind.c:81)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69fd676 is 10 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x10016837: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:999)
<br>
==6259==    by 0x1000DB53: hwloc_set_membind_nodeset (bind.c:238)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002F67: testmem (hwloc_bind.c:81)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 12 errors in context 8 of 18:
<br>
==6259== Invalid write of size 4
<br>
==6259==    at 0xFFBA65C: memset (mc_replace_strmem.c:626)
<br>
==6259==    by 0x10016867: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:1001)
<br>
==6259==    by 0x1000DB53: hwloc_set_membind_nodeset (bind.c:238)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002F67: testmem (hwloc_bind.c:81)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69fd670 is 4 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x10016837: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:999)
<br>
==6259==    by 0x1000DB53: hwloc_set_membind_nodeset (bind.c:238)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002F67: testmem (hwloc_bind.c:81)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 12 errors in context 9 of 18:
<br>
==6259== Invalid write of size 4
<br>
==6259==    at 0xFFBA650: memset (mc_replace_strmem.c:626)
<br>
==6259==    by 0x10016867: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:1001)
<br>
==6259==    by 0x1000DB53: hwloc_set_membind_nodeset (bind.c:238)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002F67: testmem (hwloc_bind.c:81)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69fd66c is 0 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x10016837: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:999)
<br>
==6259==    by 0x1000DB53: hwloc_set_membind_nodeset (bind.c:238)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002F67: testmem (hwloc_bind.c:81)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 12 errors in context 10 of 18:
<br>
==6259== Invalid write of size 1
<br>
==6259==    at 0xFFBA678: memset (mc_replace_strmem.c:626)
<br>
==6259==    by 0x10016867: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:1001)
<br>
==6259==    by 0x1000DBCB: hwloc_set_membind_nodeset (bind.c:243)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002E2F: testmem (hwloc_bind.c:79)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69fd35e is 10 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x10016837: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:999)
<br>
==6259==    by 0x1000DBCB: hwloc_set_membind_nodeset (bind.c:243)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002E2F: testmem (hwloc_bind.c:79)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 12 errors in context 11 of 18:
<br>
==6259== Invalid write of size 4
<br>
==6259==    at 0xFFBA65C: memset (mc_replace_strmem.c:626)
<br>
==6259==    by 0x10016867: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:1001)
<br>
==6259==    by 0x1000DBCB: hwloc_set_membind_nodeset (bind.c:243)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002E2F: testmem (hwloc_bind.c:79)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69fd358 is 4 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x10016837: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:999)
<br>
==6259==    by 0x1000DBCB: hwloc_set_membind_nodeset (bind.c:243)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002E2F: testmem (hwloc_bind.c:79)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 12 errors in context 12 of 18:
<br>
==6259== Invalid write of size 4
<br>
==6259==    at 0xFFBA650: memset (mc_replace_strmem.c:626)
<br>
==6259==    by 0x10016867: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:1001)
<br>
==6259==    by 0x1000DBCB: hwloc_set_membind_nodeset (bind.c:243)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002E2F: testmem (hwloc_bind.c:79)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69fd354 is 0 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x10016837: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:999)
<br>
==6259==    by 0x1000DBCB: hwloc_set_membind_nodeset (bind.c:243)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002E2F: testmem (hwloc_bind.c:79)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 18 errors in context 13 of 18:
<br>
==6259== Syscall param set_mempolicy(nodemask) points to unaddressable
<br>
byte(s)
<br>
==6259==    at 0xFBE6FE0: syscall (in /lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC9BCFB: set_mempolicy (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x1000DB53: hwloc_set_membind_nodeset (bind.c:238)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002F67: testmem (hwloc_bind.c:81)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x100036F3: testmem3 (hwloc_bind.c:124)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69f655c is 0 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB747C: calloc (vg_replace_malloc.c:467)
<br>
==6259==    by 0x10016347: hwloc_linux_membind_mask_from_nodeset
<br>
(topology-linux.c:871)
<br>
==6259==    by 0x100167FF: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:993)
<br>
==6259==    by 0x1000DB53: hwloc_set_membind_nodeset (bind.c:238)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002F67: testmem (hwloc_bind.c:81)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x100036F3: testmem3 (hwloc_bind.c:124)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 18 errors in context 14 of 18:
<br>
==6259== Syscall param set_mempolicy(nodemask) points to unaddressable
<br>
byte(s)
<br>
==6259==    at 0xFBE6FE0: syscall (in /lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC9BCFB: set_mempolicy (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x1000DBCB: hwloc_set_membind_nodeset (bind.c:243)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002E2F: testmem (hwloc_bind.c:79)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x100036F3: testmem3 (hwloc_bind.c:124)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69f627c is 0 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB747C: calloc (vg_replace_malloc.c:467)
<br>
==6259==    by 0x10016347: hwloc_linux_membind_mask_from_nodeset
<br>
(topology-linux.c:871)
<br>
==6259==    by 0x100167FF: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:993)
<br>
==6259==    by 0x1000DBCB: hwloc_set_membind_nodeset (bind.c:243)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002E2F: testmem (hwloc_bind.c:79)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x100036F3: testmem3 (hwloc_bind.c:124)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 24 errors in context 15 of 18:
<br>
==6259== Invalid write of size 1
<br>
==6259==    at 0xFFBA670: memset (mc_replace_strmem.c:626)
<br>
==6259==    by 0x10016867: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:1001)
<br>
==6259==    by 0x1000DB53: hwloc_set_membind_nodeset (bind.c:238)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002F67: testmem (hwloc_bind.c:81)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69fd674 is 8 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x10016837: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:999)
<br>
==6259==    by 0x1000DB53: hwloc_set_membind_nodeset (bind.c:238)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002F67: testmem (hwloc_bind.c:81)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 24 errors in context 16 of 18:
<br>
==6259== Invalid write of size 1
<br>
==6259==    at 0xFFBA670: memset (mc_replace_strmem.c:626)
<br>
==6259==    by 0x10016867: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:1001)
<br>
==6259==    by 0x1000DBCB: hwloc_set_membind_nodeset (bind.c:243)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002E2F: testmem (hwloc_bind.c:79)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69fd35c is 8 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x10016837: hwloc_linux_set_thisthread_membind
<br>
(topology-linux.c:999)
<br>
==6259==    by 0x1000DBCB: hwloc_set_membind_nodeset (bind.c:243)
<br>
==6259==    by 0x1000DC7B: hwloc_set_membind (bind.c:259)
<br>
==6259==    by 0x10002E2F: testmem (hwloc_bind.c:79)
<br>
==6259==    by 0x1000361B: testmem2 (hwloc_bind.c:113)
<br>
==6259==    by 0x10003723: testmem3 (hwloc_bind.c:128)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 72 errors in context 17 of 18:
<br>
==6259== Syscall param get_mempolicy(nodemask) points to unaddressable
<br>
byte(s)
<br>
==6259==    at 0xFBE6FE0: syscall (in /lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC9BDCB: get_mempolicy (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x1000DD5F: hwloc_get_membind_nodeset (bind.c:273)
<br>
==6259==    by 0x1000DE5F: hwloc_get_membind (bind.c:292)
<br>
==6259==    by 0x10002FEF: testmem (hwloc_bind.c:82)
<br>
==6259==    by 0x100035B3: testmem2 (hwloc_bind.c:109)
<br>
==6259==    by 0x100036F3: testmem3 (hwloc_bind.c:124)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69f5204 is 0 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x10016A97: hwloc_linux_get_thisthread_membind
<br>
(topology-linux.c:1066)
<br>
==6259==    by 0x1000DD5F: hwloc_get_membind_nodeset (bind.c:273)
<br>
==6259==    by 0x1000DE5F: hwloc_get_membind (bind.c:292)
<br>
==6259==    by 0x10002FEF: testmem (hwloc_bind.c:82)
<br>
==6259==    by 0x100035B3: testmem2 (hwloc_bind.c:109)
<br>
==6259==    by 0x100036F3: testmem3 (hwloc_bind.c:124)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==
<br>
==6259==
<br>
==6259== 72 errors in context 18 of 18:
<br>
==6259== Syscall param get_mempolicy(nodemask) points to unaddressable
<br>
byte(s)
<br>
==6259==    at 0xFBE6FE0: syscall (in /lib/power6x/libc-2.4.so)
<br>
==6259==    by 0xFC9BDCB: get_mempolicy (in /usr/lib/libnuma.so.1)
<br>
==6259==    by 0x1000DDD7: hwloc_get_membind_nodeset (bind.c:278)
<br>
==6259==    by 0x1000DE5F: hwloc_get_membind (bind.c:292)
<br>
==6259==    by 0x10002ECB: testmem (hwloc_bind.c:80)
<br>
==6259==    by 0x100035B3: testmem2 (hwloc_bind.c:109)
<br>
==6259==    by 0x100036F3: testmem3 (hwloc_bind.c:124)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
==6259==  Address 0x69f506c is 0 bytes after a block of size 4 alloc'd
<br>
==6259==    at 0xFFB86C8: malloc (vg_replace_malloc.c:236)
<br>
==6259==    by 0x10016A97: hwloc_linux_get_thisthread_membind
<br>
(topology-linux.c:1066)
<br>
==6259==    by 0x1000DDD7: hwloc_get_membind_nodeset (bind.c:278)
<br>
==6259==    by 0x1000DE5F: hwloc_get_membind (bind.c:292)
<br>
==6259==    by 0x10002ECB: testmem (hwloc_bind.c:80)
<br>
==6259==    by 0x100035B3: testmem2 (hwloc_bind.c:109)
<br>
==6259==    by 0x100036F3: testmem3 (hwloc_bind.c:124)
<br>
==6259==    by 0x100039CF: main (hwloc_bind.c:187)
<br>
<p><p>Hope this is useful!
<br>
<p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computational Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.10 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAkzsru8ACgkQO2KABBYQAh/JFQCffBIy/oVBC5xUr0R60oagEUhL
<br>
hhYAoJLOpbYRa9V6HQmLIqobyudOY1lc
<br>
=qwGD
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1585.php">Christopher Samuel: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<li><strong>Previous message:</strong> <a href="1583.php">Christopher Samuel: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1585.php">Christopher Samuel: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<li><strong>Reply:</strong> <a href="1585.php">Christopher Samuel: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<li><strong>Reply:</strong> <a href="1594.php">Brice Goglin: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
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
