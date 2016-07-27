<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 01:51:20 2010" -->
<!-- isoreceived="20101124065120" -->
<!-- sent="Wed, 24 Nov 2010 17:51:12 +1100" -->
<!-- isosent="20101124065112" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CECB5E0.8070007_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CECB50F.7080403_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 01:51:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1588.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1586.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1586.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1588.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 24/11/10 17:47, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; I can get the free(fullmask); to not fail if I comment out
</span><br>
<span class="quotelev1">&gt; the memset() and migrate_pages() calls.  If I just comment
</span><br>
<span class="quotelev1">&gt; out the migrate_pages() then it still fails so there's
</span><br>
<span class="quotelev1">&gt; something wrong in that calculation from the look of it.
</span><br>
<p>Turns out that is correlated with a Valgrind error:
<br>
<p>==6259== Invalid write of size 4
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
<p>- -- 
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
<p>iEYEARECAAYFAkzsteAACgkQO2KABBYQAh9z6gCfUrJ0IM/WZRNr58Qtlgt9YhBO
<br>
Kv0AnAyaAGfH6Y2HRqaZ8E8CHrEMMtYS
<br>
=p1lq
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1588.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1586.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1586.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1588.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
