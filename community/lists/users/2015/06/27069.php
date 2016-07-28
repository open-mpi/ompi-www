<?
$subject_val = "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 01:35:41 2015" -->
<!-- isoreceived="20150610053541" -->
<!-- sent="Wed, 10 Jun 2015 07:35:09 +0200 (CEST)" -->
<!-- isosent="20150610053509" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks" -->
<!-- id="201506100535.t5A5Z9lf028081_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks" -->
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
<strong>Subject:</strong> Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 01:35:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27070.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27068.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Maybe in reply to:</strong> <a href="27057.php">Siegmar Gross: "[OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27077.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Reply:</strong> <a href="27077.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1">&gt; I don't see any reason why this should be happening to you only
</span><br>
<span class="quotelev1">&gt; sometimes; this code has been unchanged in *forever*.  :-(
</span><br>
<p>It only happens since openmpi-v1.8.5-40-g7b9e672 which I tried to
<br>
build June 1th and on all versions following-up which I tried
<br>
(openmpi-v1.8.5-43-g0dd996b, openmpi-v1.8.5-44-g4ec7b80, and
<br>
openmpi-v1.8.5-46-g9f5f498) It didn't happen with openmpi-1.8.6rc1
<br>
and before.
<br>
<p><p><span class="quotelev1">&gt; Did your NFS server drift out of time sync with your build machine,
</span><br>
<span class="quotelev1">&gt; perchance?
</span><br>
<p>No. I build everything on my local machine on local disks (gcc and
<br>
openmpi-v1.8.5-46-g9f5f498). Only cc comes via NFS. My machine is
<br>
a kind of server for Open Source. Every night our real server
<br>
synchronizes its Open Source packages with my machine so that
<br>
changes are available the next day for all machines. By the way,
<br>
I didn't have the problem with the master. I could build
<br>
openmpi-dev-1857-gbcdb2d1 without problems.
<br>
<p><p><span class="quotelev1">&gt; Regardless, I just pushed what should be a workaround to master
</span><br>
<span class="quotelev1">&gt; and I'll PR it over to v1.8 and v1.10 (it'll take a day or so
</span><br>
<span class="quotelev1">&gt; for these to show up in the nightly tarballs) -- it should avoid
</span><br>
<span class="quotelev1">&gt; the issue altogether.
</span><br>
<p>Thank you very much for your help. I'll try to build the next
<br>
versions and let you know the results.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev2">&gt; &gt; On Jun 9, 2015, at 6:44 AM, Siegmar Gross 
</span><br>
&lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; today I tried to build openmpi-v1.8.5-46-g9f5f498 on my machines
</span><br>
<span class="quotelev2">&gt; &gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev2">&gt; &gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the same error
</span><br>
<span class="quotelev2">&gt; &gt; on all three platforms with both compilers. I have already
</span><br>
<span class="quotelev2">&gt; &gt; reported the problem a few days ago. I used the following command
</span><br>
<span class="quotelev2">&gt; &gt; to configure the package.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ../openmpi-v1.8.5-46-g9f5f498/configure \
</span><br>
<span class="quotelev2">&gt; &gt;  --prefix=/usr/local/openmpi-1.8.6_64_gcc \
</span><br>
<span class="quotelev2">&gt; &gt;  --libdir=/usr/local/openmpi-1.8.6_64_gcc/lib64 \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev2">&gt; &gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev2">&gt; &gt;  LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-threads=posix \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt; &gt;  --without-verbs \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-debug \
</span><br>
<span class="quotelev2">&gt; &gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Entering directory 
</span><br>
`/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
<br>
<span class="quotelev2">&gt; &gt; ../../../openmpi-v1.8.5-46-g9f5f498/ompi/mpi/fortran/base/gen-mpi-sizeof.pl 
</span><br>
\
<br>
<span class="quotelev2">&gt; &gt;    --header=mpif-sizeof.h --ierror=mandatory \
</span><br>
<span class="quotelev2">&gt; &gt;    --maxrank=7 \
</span><br>
<span class="quotelev2">&gt; &gt;    --generate=1 \
</span><br>
<span class="quotelev2">&gt; &gt;    --real16=1 \
</span><br>
<span class="quotelev2">&gt; &gt;    --complex32=1
</span><br>
<span class="quotelev2">&gt; &gt; ln -s 
</span><br>
../../../openmpi-v1.8.5-46-g9f5f498/opal/include/opal/opal_portable_platform.h 
<br>
mpi_portable_platform.h
<br>
<span class="quotelev2">&gt; &gt; ln: failed to create symbolic link `mpi_portable_platform.h': File exists
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [mpi_portable_platform.h] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Leaving directory 
</span><br>
`/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
<br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory 
</span><br>
`/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
<br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory 
</span><br>
`/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi'
<br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; linpc1 openmpi-1.8.6-Linux.x86_64.64_gcc 261 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I would be grateful, if somebody could fix the problem. Thank
</span><br>
<span class="quotelev2">&gt; &gt; you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: 
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2015/06/27057.php">http://www.open-mpi.org/community/lists/users/2015/06/27057.php</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: 
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27070.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27068.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Maybe in reply to:</strong> <a href="27057.php">Siegmar Gross: "[OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27077.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Reply:</strong> <a href="27077.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
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
