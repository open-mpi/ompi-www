<?
$subject_val = "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 02:09:13 2015" -->
<!-- isoreceived="20150610060913" -->
<!-- sent="Wed, 10 Jun 2015 08:08:51 +0200 (CEST)" -->
<!-- isosent="20150610060851" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks" -->
<!-- id="201506100608.t5A68pM0023221_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Date:</strong> 2015-06-10 02:08:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27073.php">Cian Davis: "[OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Previous message:</strong> <a href="27071.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Maybe in reply to:</strong> <a href="27057.php">Siegmar Gross: "[OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p><span class="quotelev1">&gt; then i cannot figure out how this can happen ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i see you remove the install dir (/usr/local/...)
</span><br>
<span class="quotelev1">&gt; but i do not see you removing the build directory :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i see
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mkdir openmpi-1.8.6-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.8.6-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but i do not see
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rm -rf openmpi-1.8.6-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt; mkdir openmpi-1.8.6-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt; cd openmpi-1.8.6-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<p>Ouch! I was obviously blind when I replaced names after building
<br>
openmpi-1.8.6rc1. Now I use the correct directories once more.
<br>
<p>mkdir openmpi-v1.8.5-46-g9f5f498-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
<br>
cd openmpi-v1.8.5-46-g9f5f498-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
<br>
<p>Thank you very much for identifying this problem!
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; On 6/10/2015 2:42 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a simple workaround is you always run configure in an empty directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in this example, please recreate
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rm -rf /export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mkdir /export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; before invoking configure and make
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I always start with an empty directory and I always remove an old
</span><br>
<span class="quotelev2">&gt; &gt; package before installing a new one.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mkdir openmpi-1.8.6-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt; cd openmpi-1.8.6-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ../openmpi-v1.8.5-46-g9f5f498/configure \
</span><br>
<span class="quotelev2">&gt; &gt;    --prefix=/usr/local/openmpi-1.8.6_64_gcc \
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt; rm -r /usr/local/openmpi-1.8.6_64_gcc.old
</span><br>
<span class="quotelev2">&gt; &gt; mv /usr/local/openmpi-1.8.6_64_gcc /usr/local/openmpi-1.8.6_64_gcc.old
</span><br>
<span class="quotelev2">&gt; &gt; make install |&amp; tee log.make-install.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt; make check |&amp; tee log.make-check.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for your answer and kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that can happen indeed, in a complex but legitimate environment :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mkdir ~/src
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cd ~/src
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tar xvfj openmpi-1.8.tar.bz2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mkdir ~/build/openmpi-v1.8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cd ~/build/openmpi-v1.8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ~/src/openmpi-1.8/configure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; then a few days later
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cd ~/src
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tar xvfj openmpi-v1.8.5-46-g9f5f498.tar.bz2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # use the *same* build directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; cd ~/build/openmpi-v1.8
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
(~/src/openmpi-v1.8.5-46-g95f5f498/opal/include/opal/opal_portable_platform.h
<br>
<span class="quotelev3">&gt; &gt;&gt; # must be more recent than
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ~/src/openmpi-1.8/ompi/include/mpi_portable_platform.h
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # just touch
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
~/src/openmpi-v1.8.5-46-g95f5f498/opal/include/opal/opal_portable_platform.h
<br>
<span class="quotelev3">&gt; &gt;&gt; # to force the issue
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ~/src/openmpi-v1.8.5-46-g9f5f498/configure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make =&gt; BOUM
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; i just found an other issue with this scenario :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; symlinks in the profile directories (ompi/mpi/c/profile,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ompi/mpi/fortran/mpif-h/profile, oshmem/shmem/c/profile) are not
</span><br>
<span class="quotelev3">&gt; &gt;&gt; recreated and points to the previous source tree.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (that caused one crash at least, and likely silently compiles old
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sources most of the time)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 6/10/2015 10:01 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Siegmar --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I don't see any reason why this should be happening to you only sometimes;
</span><br>
<span class="quotelev2">&gt; &gt; this code has been unchanged in *forever*.  :-(
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Did your NFS server drift out of time sync with your build machine,
</span><br>
<span class="quotelev2">&gt; &gt; perchance?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regardless, I just pushed what should be a workaround to master and I'll 
</span><br>
PR
<br>
<span class="quotelev2">&gt; &gt; it over to v1.8 and v1.10 (it'll take a day or so for these to show up in 
</span><br>
the
<br>
<span class="quotelev2">&gt; &gt; nightly tarballs) -- it should avoid the issue altogether.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Jun 9, 2015, at 6:44 AM, Siegmar Gross
</span><br>
<span class="quotelev2">&gt; &gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; today I tried to build openmpi-v1.8.5-46-g9f5f498 on my machines
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the same error
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; on all three platforms with both compilers. I have already
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; reported the problem a few days ago. I used the following command
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; to configure the package.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ../openmpi-v1.8.5-46-g9f5f498/configure \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --prefix=/usr/local/openmpi-1.8.6_64_gcc \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --libdir=/usr/local/openmpi-1.8.6_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --with-threads=posix \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --without-verbs \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    --enable-debug \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[3]: Entering directory
</span><br>
<span class="quotelev2">&gt; &gt; `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
../../../openmpi-v1.8.5-46-g9f5f498/ompi/mpi/fortran/base/gen-mpi-sizeof.pl
<br>
<span class="quotelev2">&gt; &gt; \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;      --header=mpif-sizeof.h --ierror=mandatory \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;      --maxrank=7 \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;      --generate=1 \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;      --real16=1 \
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;      --complex32=1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ln -s
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
../../../openmpi-v1.8.5-46-g9f5f498/opal/include/opal/opal_portable_platform.h
<br>
<span class="quotelev2">&gt; &gt; mpi_portable_platform.h
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ln: failed to create symbolic link `mpi_portable_platform.h': File exists
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[3]: *** [mpi_portable_platform.h] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev2">&gt; &gt; `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; linpc1 openmpi-1.8.6-Linux.x86_64.64_gcc 261
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I would be grateful, if somebody could fix the problem. Thank
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27057.php">http://www.open-mpi.org/community/lists/users/2015/06/27057.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27068.php">http://www.open-mpi.org/community/lists/users/2015/06/27068.php</a>
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
<a href="http://www.open-mpi.org/community/lists/users/2015/06/27070.php">http://www.open-mpi.org/community/lists/users/2015/06/27070.php</a>
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27073.php">Cian Davis: "[OMPI users] Looking for LAM-MPI sources to create a mirror"</a>
<li><strong>Previous message:</strong> <a href="27071.php">Gilles Gouaillardet: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Maybe in reply to:</strong> <a href="27057.php">Siegmar Gross: "[OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
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
