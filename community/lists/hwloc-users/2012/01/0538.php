<?
$subject_val = "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 30 18:38:15 2012" -->
<!-- isoreceived="20120130233815" -->
<!-- sent="Tue, 31 Jan 2012 10:38:07 +1100" -->
<!-- isosent="20120130233807" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'" -->
<!-- id="4F2729DF.9050208_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120130180037.GA4025_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-30 18:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0539.php">Christopher Samuel: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Previous message:</strong> <a href="0537.php">Devendar Bureddy: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>In reply to:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0539.php">Christopher Samuel: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Reply:</strong> <a href="0539.php">Christopher Samuel: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 31/01/12 05:00, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Could you check in the config.log that the test for buildability of
</span><br>
<span class="quotelev1">&gt; cpuid.h includes your -mcmodel option and (would be surprising) doesn't
</span><br>
<span class="quotelev1">&gt; fail?
</span><br>
<p>I can replicate that failure, and I can confirm that cpuid seems to
<br>
pass the configure test (assuming I'm looking in the right place):
<br>
<p>configure:11701: checking for cpuid
<br>
configure:11727: gcc -o conftest -mcmodel=medium -I/tmp/hwloc-1.4/include  -mcmodel=medium conftest.c  &gt;&amp;5
<br>
configure:11727: $? = 0
<br>
configure:11728: result: yes
<br>
<p>Diffing config.log between a plain ./configure and one with CFLAGS
<br>
and LDFLAGS set doesn't appear to show any real differences.
<br>
<p>This is on 64-bit Ubuntu 11.04.
<br>
<p>samuel_at_eris:/tmp/hwloc-1.4$ gcc -v
<br>
Using built-in specs.
<br>
COLLECT_GCC=gcc
<br>
COLLECT_LTO_WRAPPER=/usr/lib/x86_64-linux-gnu/gcc/x86_64-linux-gnu/4.5.2/lto-wrapper
<br>
Target: x86_64-linux-gnu
<br>
Configured with: ../src/configure -v --with-pkgversion='Ubuntu/Linaro 4.5.2-8ubuntu4' --with-bugurl=file:///usr/share/doc/gcc-4.5/README.Bugs --enable-languages=c,c++,fortran,objc,obj-c++ --prefix=/usr --program-suffix=-4.5 --enable-shared --enable-multiarch --with-multiarch-defaults=x86_64-linux-gnu --enable-linker-build-id --with-system-zlib --libexecdir=/usr/lib/x86_64-linux-gnu --without-included-gettext --enable-threads=posix --with-gxx-include-dir=/usr/include/c++/4.5 --libdir=/usr/lib/x86_64-linux-gnu --enable-nls --with-sysroot=/ --enable-clocale=gnu --enable-libstdcxx-debug --enable-libstdcxx-time=yes --enable-plugin --enable-gold --enable-ld=default --with-plugin-ld=ld.gold --enable-objc-gc --disable-werror --with-arch-32=i686 --with-tune=generic --enable-checking=release --build=x86_64-linux-gnu --host=x86_64-linux-gnu --target=x86_64-linux-gnu
<br>
Thread model: posix
<br>
gcc version 4.5.2 (Ubuntu/Linaro 4.5.2-8ubuntu4) 
<br>
<p><p>cheers,
<br>
Chris
<br>
- -- 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Christopher Samuel - Senior Systems Administrator
<br>
&nbsp;VLSCI - Victorian Life Sciences Computation Initiative
<br>
&nbsp;Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1.4.11 (GNU/Linux)
<br>
Comment: Using GnuPG with Mozilla - <a href="http://enigmail.mozdev.org/">http://enigmail.mozdev.org/</a>
<br>
<p>iEYEARECAAYFAk8nKd8ACgkQO2KABBYQAh/K6ACcDv1EHPyZ1dRPmP1LhM7oexRx
<br>
tzQAnRAeksg+BS0BHHRV6Rmw1XjJE19W
<br>
=bo+c
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0539.php">Christopher Samuel: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Previous message:</strong> <a href="0537.php">Devendar Bureddy: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>In reply to:</strong> <a href="0535.php">Samuel Thibault: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0539.php">Christopher Samuel: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
<li><strong>Reply:</strong> <a href="0539.php">Christopher Samuel: "Re: [hwloc-users] build issue with CFLAGS='-mcmodel=medium'"</a>
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
