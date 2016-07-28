<?
$subject_val = "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 21 17:17:37 2010" -->
<!-- isoreceived="20101121221737" -->
<!-- sent="Mon, 22 Nov 2010 09:17:28 +1100" -->
<!-- isosent="20101121221728" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64" -->
<!-- id="4CE99A78.60201_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE98B17.10507_at_inria.fr" -->
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
<strong>Date:</strong> 2010-11-21 17:17:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1536.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1534.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1534.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1536.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1536.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 22/11/10 08:11, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; You should try checkouting from svn branch v1.1, there
</span><br>
<span class="quotelev1">&gt; are several other fixes in there anyway, maybe I am just
</span><br>
<span class="quotelev1">&gt; confusing some bug reports.
</span><br>
<p>OK, tried that (and did --disable-debug so I could see what
<br>
was happening) but I'm still seeing that same failure:
<br>
<p>&nbsp;&nbsp;bound
<br>
*** glibc detected *** /tmp/hwloc/v1.1/tests/.libs/hwloc_bind: free():
<br>
invalid next size (fast): 0x1001c240 ***
<br>
======= Backtrace: =========
<br>
/lib/power6x/libc.so.6[0xfe73304]
<br>
/lib/power6x/libc.so.6(__libc_free+0xc8)[0xfe74f98]
<br>
/tmp/hwloc/v1.1/src/.libs/libhwloc.so.1[0xff9cd38]
<br>
/tmp/hwloc/v1.1/src/.libs/libhwloc.so.1(hwloc_set_membind_nodeset+0x16c)[0xff93908]
<br>
/tmp/hwloc/v1.1/src/.libs/libhwloc.so.1(hwloc_set_membind+0x80)[0xff939d0]
<br>
/tmp/hwloc/v1.1/tests/.libs/hwloc_bind[0x10002490]
<br>
/tmp/hwloc/v1.1/tests/.libs/hwloc_bind[0x10002c7c]
<br>
/tmp/hwloc/v1.1/tests/.libs/hwloc_bind[0x10002d84]
<br>
/tmp/hwloc/v1.1/tests/.libs/hwloc_bind[0x10003030]
<br>
/lib/power6x/libc.so.6[0xfe1690c]
<br>
/lib/power6x/libc.so.6[0xfe16c44]
<br>
======= Memory map: ========
<br>
00100000-00103000 r-xp 00100000 00:00 0
<br>
0fb14000-0fb17000 r-xp 00000000 fd:03 6772
<br>
&nbsp;/lib/libdl-2.4.so
<br>
0fb17000-0fb26000 ---p 00003000 fd:03 6772
<br>
&nbsp;/lib/libdl-2.4.so
<br>
0fb26000-0fb27000 r--p 00002000 fd:03 6772
<br>
&nbsp;/lib/libdl-2.4.so
<br>
0fb27000-0fb28000 rw-p 00003000 fd:03 6772
<br>
&nbsp;/lib/libdl-2.4.so
<br>
0fb38000-0fb3e000 r-xp 00000000 fd:06 41707
<br>
&nbsp;/usr/lib/libnuma.so.1
<br>
0fb3e000-0fb4d000 ---p 00006000 fd:06 41707
<br>
&nbsp;/usr/lib/libnuma.so.1
<br>
0fb4d000-0fb4e000 rw-p 00005000 fd:06 41707
<br>
&nbsp;/usr/lib/libnuma.so.1
<br>
0fb4e000-0fb50000 rw-p 0fb4e000 00:00 0
<br>
0fb60000-0fc0b000 r-xp 00000000 fd:03 6876
<br>
&nbsp;/lib/power6x/libm-2.4.so
<br>
0fc0b000-0fc1a000 ---p 000ab000 fd:03 6876
<br>
&nbsp;/lib/power6x/libm-2.4.so
<br>
0fc1a000-0fc1e000 r--p 000aa000 fd:03 6876
<br>
&nbsp;/lib/power6x/libm-2.4.so
<br>
0fc1e000-0fc1f000 rw-p 000ae000 fd:03 6876
<br>
&nbsp;/lib/power6x/libm-2.4.so
<br>
0fc2f000-0fc43000 r-xp 00000000 fd:03 431
<br>
&nbsp;/lib/libz.so.1.2.3
<br>
0fc43000-0fc52000 ---p 00014000 fd:03 431
<br>
&nbsp;/lib/libz.so.1.2.3
<br>
0fc52000-0fc53000 rw-p 00013000 fd:03 431
<br>
&nbsp;/lib/libz.so.1.2.3
<br>
0fc63000-0fdcb000 r-xp 00000000 fd:06 28900
<br>
&nbsp;/usr/lib/libxml2.so.2.6.23
<br>
0fdcb000-0fdda000 ---p 00168000 fd:06 28900
<br>
&nbsp;/usr/lib/libxml2.so.2.6.23
<br>
0fdda000-0fde7000 rw-p 00167000 fd:06 28900
<br>
&nbsp;/usr/lib/libxml2.so.2.6.23
<br>
0fde7000-0fde8000 rw-p 0fde7000 00:00 0
<br>
0fdf8000-0ff5c000 r-xp 00000000 fd:03 6877
<br>
&nbsp;/lib/power6x/libc-2.4.so
<br>
0ff5c000-0ff6b000 ---p 00164000 fd:03 6877
<br>
&nbsp;/lib/power6x/libc-2.4.so
<br>
0ff6b000-0ff6d000 r--p 00163000 fd:03 6877
<br>
&nbsp;/lib/power6x/libc-2.4.so
<br>
0ff6d000-0ff71000 rw-p 00165000 fd:03 6877
<br>
&nbsp;/lib/power6x/libc-2.4.so
<br>
0ff71000-0ff74000 rw-p 0ff71000 00:00 0
<br>
0ff84000-0ffa6000 r-xp 00000000 fd:05 12424
<br>
&nbsp;/tmp/hwloc/v1.1/src/.libs/libhwloc.so.1.0.1
<br>
0ffa6000-0ffb6000 ---p 00022000 fd:05 12424
<br>
&nbsp;/tmp/hwloc/v1.1/src/.libs/libhwloc.so.1.0.1
<br>
0ffb6000-0ffb7000 rw-p 00022000 fd:05 12424
<br>
&nbsp;/tmp/hwloc/v1.1/src/.libs/libhwloc.so.1.0.1
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
10000000-10004000 r-xp 00000000 fd:05 13553
<br>
&nbsp;/tmp/hwloc/v1.1/tests/.libs/hwloc_bind
<br>
10013000-10014000 rw-p 00003000 fd:05 13553
<br>
&nbsp;/tmp/hwloc/v1.1/tests/.libs/hwloc_bind
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
ff8c6000-ff8da000 rw-p ff8c6000 00:00 0
<br>
ff8da000-ff8db000 rw-p ff8da000 00:00 0
<br>
&nbsp;[stack]
<br>
ff8db000-ff8dc000 rw-p ff8db000 00:00 0
<br>
/bin/sh: line 1: 19260 Aborted                 ${dir}$tst
<br>
FAIL: hwloc_bind
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
<p>iEYEARECAAYFAkzpmngACgkQO2KABBYQAh+DMQCfbuniwf93NgSAXmhl9Wrwq9HE
<br>
BN8An06sVC8UMOaBcSk/b/mGONd/J38J
<br>
=1UIM
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1536.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Previous message:</strong> <a href="1534.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1534.php">Brice Goglin: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1536.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>Reply:</strong> <a href="1536.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
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
