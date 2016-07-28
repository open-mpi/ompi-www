<?
$subject_val = "[OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 03:44:22 2015" -->
<!-- isoreceived="20151007074422" -->
<!-- sent="Wed, 7 Oct 2015 09:42:59 +0200" -->
<!-- isosent="20151007074259" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07" -->
<!-- id="5614CD03.1010306_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-07 03:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27827.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27825.php">Hector E Barrios Molano: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27866.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Reply:</strong> <a href="27866.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Maybe reply:</strong> <a href="27869.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to build openmpi-v2.x-dev-415-g5c9b192 and
<br>
openmpi-dev-2696-gd579a07 on my machines (Solaris 10 Sparc, Solaris 10
<br>
x86_64, and openSUSE Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13.
<br>
I got the following error on all platforms with gcc and with Sun C only
<br>
on my Linux machine. I've already reported the problem September 8th
<br>
for the master trunk (at that time I didn't have the problem for the
<br>
v2.x trunk. I use the following configure command.
<br>
<p>../openmpi-dev-2696-gd579a07/configure \
<br>
&nbsp;&nbsp;&nbsp;--prefix=/usr/local/openmpi-master_64_gcc \
<br>
&nbsp;&nbsp;&nbsp;--libdir=/usr/local/openmpi-master_64_gcc/lib64 \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin \
<br>
&nbsp;&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include \
<br>
&nbsp;&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0 \
<br>
&nbsp;&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
<br>
&nbsp;&nbsp;&nbsp;CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-cxx \
<br>
&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-java \
<br>
&nbsp;&nbsp;&nbsp;--enable-heterogeneous \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-thread-multiple \
<br>
&nbsp;&nbsp;&nbsp;--with-hwloc=internal \
<br>
&nbsp;&nbsp;&nbsp;--without-verbs \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-cxxflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p>openmpi-v2.x-dev-415-g5c9b192:
<br>
==============================
<br>
<p>linpc1 openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc 135 tail -15 
<br>
log.make.Linux.x86_64.64_gcc
<br>
&nbsp;&nbsp;&nbsp;CC       src/class/pmix_pointer_array.lo
<br>
&nbsp;&nbsp;&nbsp;CC       src/class/pmix_hash_table.lo
<br>
&nbsp;&nbsp;&nbsp;CC       src/include/pmix_globals.lo
<br>
In file included from 
<br>
../../../../../../openmpi-v2.x-dev-415-g5c9b192/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
<br>
/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27: 
<br>
fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or 
<br>
directory
<br>
compilation terminated.
<br>
make[4]: *** [src/include/pmix_globals.lo] Error 1
<br>
make[4]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc 135
<br>
<p><p>openmpi-dev-2696-gd579a07:
<br>
==========================
<br>
<p>linpc1 openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc 158 tail -15 
<br>
log.make.Linux.x86_64.64_gcc
<br>
&nbsp;&nbsp;&nbsp;CC       src/class/pmix_pointer_array.lo
<br>
&nbsp;&nbsp;&nbsp;CC       src/class/pmix_hash_table.lo
<br>
&nbsp;&nbsp;&nbsp;CC       src/include/pmix_globals.lo
<br>
In file included from 
<br>
../../../../../../openmpi-dev-2696-gd579a07/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
<br>
/export2/src/openmpi-master/openmpi-dev-2696-gd579a07/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27: 
<br>
fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or 
<br>
directory
<br>
compilation terminated.
<br>
make[4]: *** [src/include/pmix_globals.lo] Error 1
<br>
make[4]: Leaving directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory 
<br>
`/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1 openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc 159
<br>
<p><p>I would be grateful if somebody can fix the problem. Thank you very much
<br>
for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27826/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27827.php">Gilles Gouaillardet: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27825.php">Hector E Barrios Molano: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27866.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Reply:</strong> <a href="27866.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Maybe reply:</strong> <a href="27869.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
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
