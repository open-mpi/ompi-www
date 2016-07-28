<?
$subject_val = "Re: [hwloc-devel] PCI device location in hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 19 01:01:32 2010" -->
<!-- isoreceived="20101119060132" -->
<!-- sent="Fri, 19 Nov 2010 17:01:26 +1100" -->
<!-- isosent="20101119060126" -->
<!-- name="Christopher Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device location in hwloc" -->
<!-- id="4CE612B6.6040606_at_unimelb.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE53B42.50500_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PCI device location in hwloc<br>
<strong>From:</strong> Christopher Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-19 01:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1506.php">Guy Streeter: "[hwloc-devel] python bindings for libhwloc?"</a>
<li><strong>Previous message:</strong> <a href="1504.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>In reply to:</strong> <a href="1493.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1511.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Reply:</strong> <a href="1511.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 19/11/10 01:42, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; It's not in trunk yet. Try this branch instead:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/svn/hwloc/branches/libpci">https://svn.open-mpi.org/svn/hwloc/branches/libpci</a>
</span><br>
<p>Just tried this on our BlueGene/P management node
<br>
(Power6 with SLES10 SP1) and it fails to configure
<br>
with:
<br>
<p>configure:10657: checking for cpuid
<br>
configure:10682: gcc -c  -I/tmp/hwloc/libpci/include  conftest.c &gt;&amp;5
<br>
/tmp/hwloc/libpci/include/private/cpuid.h: In function 'hwloc_cpuid':
<br>
/tmp/hwloc/libpci/include/private/cpuid.h:54: error: impossible
<br>
constraint in 'asm'
<br>
<p>tambo-m:/tmp/libpci # gcc -v
<br>
Using built-in specs.
<br>
Target: powerpc64-suse-linux
<br>
Configured with: ../configure --enable-threads=posix --prefix=/usr
<br>
- --with-local-prefix=/usr/local --infodir=/usr/share/info
<br>
- --mandir=/usr/share/man --libdir=/usr/lib --libexecdir=/usr/lib
<br>
- --enable-languages=c,c++,objc,fortran,obj-c++,java,ada
<br>
- --enable-checking=release --with-gxx-include-dir=/usr/include/c++/4.1.2
<br>
- --enable-ssp --disable-libssp --disable-libgcj --with-slibdir=/lib
<br>
- --with-system-zlib --enable-shared --enable-__cxa_atexit
<br>
- --enable-libstdcxx-allocator=new --program-suffix=
<br>
- --enable-version-specific-runtime-libs --without-system-libunwind
<br>
- --with-cpu=default32 --enable-secureplt --with-long-double-128
<br>
- --host=powerpc64-suse-linux
<br>
Thread model: posix
<br>
gcc version 4.1.2 20070115 (SUSE Linux)
<br>
<p>Any ideas ?
<br>
<p>cheers!
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
<p>iEYEARECAAYFAkzmErYACgkQO2KABBYQAh/F5ACbB3aeo8omt61QtgMihKL1L0Jz
<br>
CuwAnja+xiKjY01h6QOUhOuYuh7E+9dv
<br>
=mX4Y
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1506.php">Guy Streeter: "[hwloc-devel] python bindings for libhwloc?"</a>
<li><strong>Previous message:</strong> <a href="1504.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>In reply to:</strong> <a href="1493.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1511.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Reply:</strong> <a href="1511.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
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
