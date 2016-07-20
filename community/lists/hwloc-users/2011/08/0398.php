<?
$subject_val = "[hwloc-users] hwloc varning flag";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 13 04:38:03 2011" -->
<!-- isoreceived="20110813083803" -->
<!-- sent="Sat, 13 Aug 2011 10:37:57 +0200" -->
<!-- isosent="20110813083757" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc varning flag" -->
<!-- id="CAJNPZUUbhV9DyjMm6Sw=pZv0Mij7t93Ew0pA+g_jFiCfJ33nVw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc varning flag<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-13 04:37:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0399.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<li><strong>Previous message:</strong> <a href="0397.php">Samuel Thibault: "Re: [hwloc-users] Get CPU associated to a thread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0399.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<li><strong>Reply:</strong> <a href="0399.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<li><strong>Maybe reply:</strong> <a href="0404.php">Samuel Thibault: "Re: [hwloc-users] hwloc varning flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dearhwloc users and developers,
<br>
<p>I'm using hwloc 1.2 stable version Intel 11 compiled and checking my little
<br>
application with valgrind 3.5.
<br>
<p>My app calls hwloc_set_area_membind_nodeset() function from a OpenMP thread:
<br>
<p>hwloc_set_area_membind_nodeset(topology, mem, 10000, nodeset,
<br>
HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD | HWLOC_MEMBIND_STRICT |
<br>
HWLOC_MEMBIND_NOCPUBIND )
<br>
<p>membind seems to work well, but valgrind give me a follow warning:
<br>
<p>==2904== Syscall param mbind(nodemask) points to unaddressable byte(s)
<br>
==2904==    at 0x4FF33C1: syscall6 (in /usr/lib64/libnuma.so.1)
<br>
==2904==    by 0x4FF3436: mbind (in /usr/lib64/libnuma.so.1)
<br>
==2904==    by 0x4C208AC: hwloc_linux_set_area_membind
<br>
(topology-linux.c:1071)
<br>
==2904==    by 0x4C1AC3E: hwloc_set_area_membind_nodeset (bind.c:396)
<br>
==2904==    by 0x402165: bind_memory_tonode (main.c:97)
<br>
==2904==  Address 0x5a64978 is 0 bytes after a block of size 8 alloc'd
<br>
==2904==    at 0x4A05140: calloc (vg_replace_malloc.c:418)
<br>
==2904==    by 0x4C20646: hwloc_linux_membind_mask_from_nodeset
<br>
(topology-linux.c:996)
<br>
==2904==    by 0x4C2083E: hwloc_linux_set_area_membind
<br>
(topology-linux.c:1054)
<br>
==2904==    by 0x4C1AC3E: hwloc_set_area_membind_nodeset (bind.c:396)
<br>
==2904==    by 0x401CBB: bind_memory_tonode (main.c:97)
<br>
<p>valgrind has  --tool=memcheck --leak-check=full  exec flags.
<br>
<p>It give me the same warning also with just one byte memory bound.
<br>
<p>Is it a hwloc warning or my applications warning?
<br>
<p>Thanks in forward.
<br>
<p><p><p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0398/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0399.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<li><strong>Previous message:</strong> <a href="0397.php">Samuel Thibault: "Re: [hwloc-users] Get CPU associated to a thread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0399.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<li><strong>Reply:</strong> <a href="0399.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<li><strong>Maybe reply:</strong> <a href="0404.php">Samuel Thibault: "Re: [hwloc-users] hwloc varning flag"</a>
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
