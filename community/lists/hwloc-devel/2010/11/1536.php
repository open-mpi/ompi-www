<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 17:30:06 2010" -->
<!-- isoreceived="20101121223006" -->
<!-- sent="Mon, 22 Nov 2010 09:29:57 +1100" -->
<!-- isosent="20101121222957" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE99D65.7090509_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE99A78.60201_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2010-11-21 17:29:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1537.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1535.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1535.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1537.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1537.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 22/11/10 09:17, Christopher Samuel wrote:
<br>
<p><span class="quotelev1">&gt; OK, tried that (and did --disable-debug so I could see what
</span><br>
<span class="quotelev1">&gt; was happening) but I'm still seeing that same failure
</span><br>
<p>Here's the gdb backtrace for it:
<br>
<p>Program received signal SIGABRT, Aborted.
<br>
0x0fb8d460 in raise () from /lib/power6x/libc.so.6
<br>
(gdb) bt full
<br>
#0  0x0fb8d460 in raise () from /lib/power6x/libc.so.6
<br>
No symbol table info available.
<br>
#1  0x0fb8eed4 in abort () from /lib/power6x/libc.so.6
<br>
No symbol table info available.
<br>
#2  0x0fbcaa14 in __libc_message () from /lib/power6x/libc.so.6
<br>
No symbol table info available.
<br>
#3  0x0fbd2304 in malloc_printerr () from /lib/power6x/libc.so.6
<br>
No symbol table info available.
<br>
#4  0x0fbd3f98 in free () from /lib/power6x/libc.so.6
<br>
No symbol table info available.
<br>
#5  0x1001673c in hwloc_linux_set_thisthread_membind (topology=0x10030018,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nodeset=0x10031030, policy=HWLOC_MEMBIND_BIND, flags=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-linux.c:1009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fullmask = 0x10038240
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_os_index = 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linuxmask = 0x10036af0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linuxpolicy = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = -1
<br>
#6  0x1000dbb4 in hwloc_set_membind_nodeset (topology=0x10030018,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nodeset=0x10031030, policy=HWLOC_MEMBIND_BIND, flags=8) at bind.c:242
<br>
No locals.
<br>
#7  0x1000dc64 in hwloc_set_membind (topology=0x10030018, set=0x10035e80,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;policy=HWLOC_MEMBIND_BIND, flags=8) at bind.c:258
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nodeset = 0x100381e0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = 268656928
<br>
#8  0x10002e30 in testmem (nodeset=0x10035e80,
<br>
policy=HWLOC_MEMBIND_BIND, flags=8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;expected=1) at hwloc_bind.c:79
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_nodeset = 0x10036120
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newpolicy = HWLOC_MEMBIND_FIRSTTOUCH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;area = 0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;area_size = 1024
<br>
#9  0x1000361c in testmem2 (set=0x10035e80, flags=8) at hwloc_bind.c:113
<br>
No locals.
<br>
#10 0x10003724 in testmem3 (set=0x10035e80) at hwloc_bind.c:128
<br>
No locals.
<br>
#11 0x100039d0 in main () at hwloc_bind.c:187
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set = 0x10035e80
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj = 0x10031178
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;str = 0x100365b8 &quot;0x000000ff&quot;
<br>
<p><p>- -- 
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
<p>iEYEARECAAYFAkzpnWUACgkQO2KABBYQAh89mwCgglxgycsR6OzkIyqSdDAArrXn
<br>
P+4An1Pr5F5jVwTFybcTMRhxLzdrvb5n
<br>
=jAqL
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1537.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1535.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1535.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1537.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1537.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
