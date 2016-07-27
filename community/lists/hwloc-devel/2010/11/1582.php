<?
$subject_val = "Re: [hwloc-devel] Next 1.0/1.1 RC's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 00:15:53 2010" -->
<!-- isoreceived="20101124051553" -->
<!-- sent="Wed, 24 Nov 2010 16:15:45 +1100" -->
<!-- isosent="20101124051545" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Next 1.0/1.1 RC's" -->
<!-- id="4CEC9F81.9050203_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20101123083109.GM5401_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Next 1.0/1.1 RC's<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 00:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1583.php">Christopher Samuel: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1581.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3rc3r2826)"</a>
<li><strong>In reply to:</strong> <a href="1577.php">Samuel Thibault: "Re: [hwloc-devel] Next 1.0/1.1 RC's"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 23/11/10 19:31, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Could you try the latest 1.1rc snapshot?  There's an
</span><br>
<span class="quotelev1">&gt; additional free fixup.
</span><br>
<p>Still fails with 1.1rc4r2825 I'm afraid. :-(
<br>
<p>(gdb) bt full
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
#5  0x1001689c in hwloc_linux_set_thisthread_membind (topology=0x10030018,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nodeset=0x10031038, policy=HWLOC_MEMBIND_BIND, flags=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-linux.c:1003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fullmask = 0x10038248
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_os_index = 32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linuxmask = 0x10036af8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linuxpolicy = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err = -1
<br>
#6  0x1000dbcc in hwloc_set_membind_nodeset (topology=0x10030018,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nodeset=0x10031038, policy=HWLOC_MEMBIND_BIND, flags=8) at bind.c:243
<br>
No locals.
<br>
#7  0x1000dc7c in hwloc_set_membind (topology=0x10030018, set=0x10035e88,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;policy=HWLOC_MEMBIND_BIND, flags=8) at bind.c:259
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nodeset = 0x100381e8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = 268656936
<br>
#8  0x10002e30 in testmem (nodeset=0x10035e88,
<br>
policy=HWLOC_MEMBIND_BIND, flags=8,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;expected=1) at hwloc_bind.c:79
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new_nodeset = 0x10036128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;newpolicy = HWLOC_MEMBIND_FIRSTTOUCH
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;area = 0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;area_size = 1024
<br>
#9  0x1000361c in testmem2 (set=0x10035e88, flags=8) at hwloc_bind.c:113
<br>
No locals.
<br>
#10 0x10003724 in testmem3 (set=0x10035e88) at hwloc_bind.c:128
<br>
No locals.
<br>
#11 0x100039d0 in main () at hwloc_bind.c:187
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set = 0x10035e88
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj = 0x10031180
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;str = 0x100365c0 &quot;0x000000ff&quot;
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
<p>iEYEARECAAYFAkzsn4EACgkQO2KABBYQAh+74QCdEQ/KtODfCoIHFkVFrKHhAaNY
<br>
WxsAniGEi62T2uZ6gjyyxue0c+hr+QZo
<br>
=MjIg
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1583.php">Christopher Samuel: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1581.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.3rc3r2826)"</a>
<li><strong>In reply to:</strong> <a href="1577.php">Samuel Thibault: "Re: [hwloc-devel] Next 1.0/1.1 RC's"</a>
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
