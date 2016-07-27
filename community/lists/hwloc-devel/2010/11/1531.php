<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 15:48:37 2010" -->
<!-- isoreceived="20101121204837" -->
<!-- sent="Mon, 22 Nov 2010 07:48:32 +1100" -->
<!-- isosent="20101121204832" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE985A0.7040902_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE98211.5020300_at_inria.fr" -->
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
<strong>Date:</strong> 2010-11-21 15:48:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1532.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1530.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1530.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1532.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1532.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1574.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1586.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 22/11/10 07:33, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; This patch (on top of the previous patch) should make
</span><br>
<span class="quotelev1">&gt; hwloc-gather-topology.sh work again (and make check too,
</span><br>
<span class="quotelev1">&gt; hopefully).
</span><br>
<p>Well that fixed that part, &quot;patch&quot; whinged that it was
<br>
reversed but -R made it happy.
<br>
<p>However, I've now got another failure later on:
<br>
<p>Bind area                               : OK
<br>
Get  area                               : FAILED (38, Function not
<br>
implemented) (expected)
<br>
<p>&nbsp;&nbsp;bound
<br>
*** glibc detected *** /tmp/hwloc/hwloc-1.1rc2/tests/.libs/hwloc_bind:
<br>
free(): invalid next size (fast): 0x1001c240 ***
<br>
======= Backtrace: =========
<br>
/lib/power6x/libc.so.6[0xfb8f304]
<br>
/lib/power6x/libc.so.6(__libc_free+0xc8)[0xfb90f98]
<br>
/tmp/hwloc/hwloc-1.1rc2/src/.libs/libhwloc.so.1[0xff9cd2c]
<br>
/tmp/hwloc/hwloc-1.1rc2/src/.libs/libhwloc.so.1(hwloc_set_membind_nodeset+0x16c)[0xff938d8]
<br>
/tmp/hwloc/hwloc-1.1rc2/src/.libs/libhwloc.so.1(hwloc_set_membind+0x80)[0xff939a0]
<br>
/tmp/hwloc/hwloc-1.1rc2/tests/.libs/hwloc_bind[0x100024d0]
<br>
/tmp/hwloc/hwloc-1.1rc2/tests/.libs/hwloc_bind[0x10002cbc]
<br>
/tmp/hwloc/hwloc-1.1rc2/tests/.libs/hwloc_bind[0x10002dc4]
<br>
/tmp/hwloc/hwloc-1.1rc2/tests/.libs/hwloc_bind[0x10003070]
<br>
/lib/power6x/libc.so.6[0xfb3290c]
<br>
/lib/power6x/libc.so.6[0xfb32c44]
<br>
======= Memory map: ========
<br>
00100000-00103000 r-xp 00100000 00:00 0
<br>
0fb14000-0fc78000 r-xp 00000000 fd:03 6877
<br>
&nbsp;/lib/power6x/libc-2.4.so
<br>
0fc78000-0fc87000 ---p 00164000 fd:03 6877
<br>
&nbsp;/lib/power6x/libc-2.4.so
<br>
0fc87000-0fc89000 r--p 00163000 fd:03 6877
<br>
&nbsp;/lib/power6x/libc-2.4.so
<br>
0fc89000-0fc8d000 rw-p 00165000 fd:03 6877
<br>
&nbsp;/lib/power6x/libc-2.4.so
<br>
0fc8d000-0fc90000 rw-p 0fc8d000 00:00 0
<br>
0fca0000-0fca6000 r-xp 00000000 fd:06 41707
<br>
&nbsp;/usr/lib/libnuma.so.1
<br>
0fca6000-0fcb5000 ---p 00006000 fd:06 41707
<br>
&nbsp;/usr/lib/libnuma.so.1
<br>
0fcb5000-0fcb6000 rw-p 00005000 fd:06 41707
<br>
&nbsp;/usr/lib/libnuma.so.1
<br>
0fcb6000-0fcb8000 rw-p 0fcb6000 00:00 0
<br>
0fcc8000-0fd73000 r-xp 00000000 fd:03 6876
<br>
&nbsp;/lib/power6x/libm-2.4.so
<br>
0fd73000-0fd82000 ---p 000ab000 fd:03 6876
<br>
&nbsp;/lib/power6x/libm-2.4.so
<br>
0fd82000-0fd86000 r--p 000aa000 fd:03 6876
<br>
&nbsp;/lib/power6x/libm-2.4.so
<br>
0fd86000-0fd87000 rw-p 000ae000 fd:03 6876
<br>
&nbsp;/lib/power6x/libm-2.4.so
<br>
0fd97000-0fdab000 r-xp 00000000 fd:03 431
<br>
&nbsp;/lib/libz.so.1.2.3
<br>
0fdab000-0fdba000 ---p 00014000 fd:03 431
<br>
&nbsp;/lib/libz.so.1.2.3
<br>
0fdba000-0fdbb000 rw-p 00013000 fd:03 431
<br>
&nbsp;/lib/libz.so.1.2.3
<br>
0fdcb000-0fdce000 r-xp 00000000 fd:03 6772
<br>
&nbsp;/lib/libdl-2.4.so
<br>
0fdce000-0fddd000 ---p 00003000 fd:03 6772
<br>
&nbsp;/lib/libdl-2.4.so
<br>
0fddd000-0fdde000 r--p 00002000 fd:03 6772
<br>
&nbsp;/lib/libdl-2.4.so
<br>
0fdde000-0fddf000 rw-p 00003000 fd:03 6772
<br>
&nbsp;/lib/libdl-2.4.so
<br>
0fdef000-0ff57000 r-xp 00000000 fd:06 28900
<br>
&nbsp;/usr/lib/libxml2.so.2.6.23
<br>
0ff57000-0ff66000 ---p 00168000 fd:06 28900
<br>
&nbsp;/usr/lib/libxml2.so.2.6.23
<br>
0ff66000-0ff73000 rw-p 00167000 fd:06 28900
<br>
&nbsp;/usr/lib/libxml2.so.2.6.23
<br>
0ff73000-0ff74000 rw-p 0ff73000 00:00 0
<br>
0ff84000-0ffa6000 r-xp 00000000 fd:05 908
<br>
&nbsp;/tmp/hwloc/hwloc-1.1rc2/src/.libs/libhwloc.so.1.0.0
<br>
0ffa6000-0ffb6000 ---p 00022000 fd:05 908
<br>
&nbsp;/tmp/hwloc/hwloc-1.1rc2/src/.libs/libhwloc.so.1.0.0
<br>
0ffb6000-0ffb7000 rw-p 00022000 fd:05 908
<br>
&nbsp;/tmp/hwloc/hwloc-1.1rc2/src/.libs/libhwloc.so.1.0.0
<br>
0ffc7000-0ffdd000 r-xp 00000000 fd:03 6875
<br>
&nbsp;/lib/power6x/libpthread-2.4.so
<br>
0ffdd000-0ffec000 ---p 00016000 fd:03 6875
<br>
&nbsp;/lib/power6x/libpthread-2.4.so
<br>
0ffec000-0ffed000 r--p 00015000 fd:03 6875
<br>
&nbsp;/lib/power6x/libpthread-2.4.so
<br>
0ffed000-0ffee000 rw-p 00016000 fd:03 6875
<br>
&nbsp;/lib/power6x/libpthread-2.4.so
<br>
0ffee000-0fff0000 rw-p 0ffee000 00:00 0
<br>
10000000-10004000 r-xp 00000000 fd:05 1492
<br>
&nbsp;/tmp/hwloc/hwloc-1.1rc2/tests/.libs/hwloc_bind
<br>
10013000-10014000 rw-p 00003000 fd:05 1492
<br>
&nbsp;/tmp/hwloc/hwloc-1.1rc2/tests/.libs/hwloc_bind
<br>
10014000-10035000 rwxp 10014000 00:00 0
<br>
&nbsp;[heap]
<br>
f7fb3000-f7fb6000 rw-p f7fb3000 00:00 0
<br>
f7fdd000-f7fdf000 rw-p f7fdd000 00:00 0
<br>
f7fdf000-f7fff000 r-xp 00000000 fd:03 175
<br>
&nbsp;/lib/ld-2.4.so
<br>
f800e000-f800f000 r--p 0001f000 fd:03 175
<br>
&nbsp;/lib/ld-2.4.so
<br>
f800f000-f8010000 rw-p 00020000 fd:03 175
<br>
&nbsp;/lib/ld-2.4.so
<br>
ffe50000-ffe63000 rw-p ffe50000 00:00 0
<br>
ffe63000-ffe64000 rw-p ffe63000 00:00 0
<br>
ffe64000-ffe65000 rw-p ffe64000 00:00 0
<br>
&nbsp;[stack]
<br>
/bin/sh: line 1:   453 Aborted                 ${dir}$tst
<br>
FAIL: hwloc_bind
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
<p>iEYEARECAAYFAkzphZ8ACgkQO2KABBYQAh+0JQCbBWQXf1S5jPwwtgsNme97TfJo
<br>
mgcAoIz/D3AGho2tiMkXoagBySPBqh8R
<br>
=W92O
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1532.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1530.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1530.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1532.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1532.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1574.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1586.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
