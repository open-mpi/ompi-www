<?
$subject_val = "Re: [hwloc-users] hwloc varning flag";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 13 09:07:11 2011" -->
<!-- isoreceived="20110813130711" -->
<!-- sent="Sat, 13 Aug 2011 15:07:02 +0200" -->
<!-- isosent="20110813130702" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc varning flag" -->
<!-- id="4E4676F6.50501_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUUbhV9DyjMm6Sw=pZv0Mij7t93Ew0pA+g_jFiCfJ33nVw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc varning flag<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-13 09:07:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0400.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<li><strong>Previous message:</strong> <a href="0398.php">Gabriele Fatigati: "[hwloc-users] hwloc varning flag"</a>
<li><strong>In reply to:</strong> <a href="0398.php">Gabriele Fatigati: "[hwloc-users] hwloc varning flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0400.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<li><strong>Reply:</strong> <a href="0400.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I am seeing this too on a custom program, so probably not your
<br>
application's fault.
<br>
Brice
<br>
<p><p><p>Le 13/08/2011 10:37, Gabriele Fatigati a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dearhwloc users and developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using hwloc 1.2 stable version Intel 11 compiled and checking my
</span><br>
<span class="quotelev1">&gt; little application with valgrind 3.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My app calls hwloc_set_area_membind_nodeset() function from a OpenMP
</span><br>
<span class="quotelev1">&gt; thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_set_area_membind_nodeset(topology, mem, 10000, nodeset,
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_BIND, HWLOC_MEMBIND_THREAD | HWLOC_MEMBIND_STRICT |
</span><br>
<span class="quotelev1">&gt; HWLOC_MEMBIND_NOCPUBIND ) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; membind seems to work well, but valgrind give me a follow warning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==2904== Syscall param mbind(nodemask) points to unaddressable byte(s)
</span><br>
<span class="quotelev1">&gt; ==2904==    at 0x4FF33C1: syscall6 (in /usr/lib64/libnuma.so.1)
</span><br>
<span class="quotelev1">&gt; ==2904==    by 0x4FF3436: mbind (in /usr/lib64/libnuma.so.1)
</span><br>
<span class="quotelev1">&gt; ==2904==    by 0x4C208AC: hwloc_linux_set_area_membind
</span><br>
<span class="quotelev1">&gt; (topology-linux.c:1071)
</span><br>
<span class="quotelev1">&gt; ==2904==    by 0x4C1AC3E: hwloc_set_area_membind_nodeset (bind.c:396)
</span><br>
<span class="quotelev1">&gt; ==2904==    by 0x402165: bind_memory_tonode (main.c:97)
</span><br>
<span class="quotelev1">&gt; ==2904==  Address 0x5a64978 is 0 bytes after a block of size 8 alloc'd
</span><br>
<span class="quotelev1">&gt; ==2904==    at 0x4A05140: calloc (vg_replace_malloc.c:418)
</span><br>
<span class="quotelev1">&gt; ==2904==    by 0x4C20646: hwloc_linux_membind_mask_from_nodeset
</span><br>
<span class="quotelev1">&gt; (topology-linux.c:996)
</span><br>
<span class="quotelev1">&gt; ==2904==    by 0x4C2083E: hwloc_linux_set_area_membind
</span><br>
<span class="quotelev1">&gt; (topology-linux.c:1054)
</span><br>
<span class="quotelev1">&gt; ==2904==    by 0x4C1AC3E: hwloc_set_area_membind_nodeset (bind.c:396)
</span><br>
<span class="quotelev1">&gt; ==2904==    by 0x401CBB: bind_memory_tonode (main.c:97)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valgrind has  --tool=memcheck --leak-check=full  exec flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It give me the same warning also with just one byte memory bound.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it a hwloc warning or my applications warning?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in forward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it &lt;<a href="http://www.cineca.it">http://www.cineca.it</a>&gt;                    Tel:   +39 051
</span><br>
<span class="quotelev1">&gt; 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it &lt;<a href="http://cineca.it">http://cineca.it</a>&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0399/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0400.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<li><strong>Previous message:</strong> <a href="0398.php">Gabriele Fatigati: "[hwloc-users] hwloc varning flag"</a>
<li><strong>In reply to:</strong> <a href="0398.php">Gabriele Fatigati: "[hwloc-users] hwloc varning flag"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0400.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
<li><strong>Reply:</strong> <a href="0400.php">Brice Goglin: "Re: [hwloc-users] hwloc varning flag"</a>
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
