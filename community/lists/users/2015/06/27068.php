<?
$subject_val = "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 10 00:00:49 2015" -->
<!-- isoreceived="20150610040049" -->
<!-- sent="Wed, 10 Jun 2015 13:00:44 +0900" -->
<!-- isosent="20150610040044" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks" -->
<!-- id="5577B66C.40802_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7A0E2AF9-2121-4ABB-9056-F0B67D6BD33F_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-10 00:00:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27069.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27067.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27067.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Reply:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar,
<br>
<p>a simple workaround is you always run configure in an empty directory
<br>
in this example, please recreate
<br>
<p>rm -rf /export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc
<br>
mkdir /export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc
<br>
<p>before invoking configure and make
<br>
<p><p>Jeff,
<br>
<p>that can happen indeed, in a complex but legitimate environment :
<br>
<p>mkdir ~/src
<br>
cd ~/src
<br>
tar xvfj openmpi-1.8.tar.bz2
<br>
mkdir ~/build/openmpi-v1.8
<br>
cd ~/build/openmpi-v1.8
<br>
~/src/openmpi-1.8/configure
<br>
make
<br>
<p>then a few days later
<br>
<p>cd ~/src
<br>
tar xvfj openmpi-v1.8.5-46-g9f5f498.tar.bz2
<br>
# use the *same* build directory
<br>
cd ~/build/openmpi-v1.8
<br>
# 
<br>
(~/src/openmpi-v1.8.5-46-g95f5f498/opal/include/opal/opal_portable_platform.h
<br>
# must be more recent than 
<br>
~/src/openmpi-1.8/ompi/include/mpi_portable_platform.h
<br>
# just touch 
<br>
~/src/openmpi-v1.8.5-46-g95f5f498/opal/include/opal/opal_portable_platform.h
<br>
# to force the issue
<br>
~/src/openmpi-v1.8.5-46-g9f5f498/configure
<br>
make =&gt; BOUM
<br>
<p>i just found an other issue with this scenario :
<br>
symlinks in the profile directories (ompi/mpi/c/profile, 
<br>
ompi/mpi/fortran/mpif-h/profile, oshmem/shmem/c/profile) are not 
<br>
recreated and points to the previous source tree.
<br>
(that caused one crash at least, and likely silently compiles old 
<br>
sources most of the time)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 6/10/2015 10:01 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Siegmar --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see any reason why this should be happening to you only sometimes; this code has been unchanged in *forever*.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did your NFS server drift out of time sync with your build machine, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regardless, I just pushed what should be a workaround to master and I'll PR it over to v1.8 and v1.10 (it'll take a day or so for these to show up in the nightly tarballs) -- it should avoid the issue altogether.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 9, 2015, at 6:44 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; today I tried to build openmpi-v1.8.5-46-g9f5f498 on my machines
</span><br>
<span class="quotelev2">&gt;&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev2">&gt;&gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the same error
</span><br>
<span class="quotelev2">&gt;&gt; on all three platforms with both compilers. I have already
</span><br>
<span class="quotelev2">&gt;&gt; reported the problem a few days ago. I used the following command
</span><br>
<span class="quotelev2">&gt;&gt; to configure the package.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-v1.8.5-46-g9f5f498/configure \
</span><br>
<span class="quotelev2">&gt;&gt;   --prefix=/usr/local/openmpi-1.8.6_64_gcc \
</span><br>
<span class="quotelev2">&gt;&gt;   --libdir=/usr/local/openmpi-1.8.6_64_gcc/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev2">&gt;&gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev2">&gt;&gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-java \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-threads=posix \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev2">&gt;&gt;   --without-verbs \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;   --enable-debug \
</span><br>
<span class="quotelev2">&gt;&gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../openmpi-v1.8.5-46-g9f5f498/ompi/mpi/fortran/base/gen-mpi-sizeof.pl \
</span><br>
<span class="quotelev2">&gt;&gt;     --header=mpif-sizeof.h --ierror=mandatory \
</span><br>
<span class="quotelev2">&gt;&gt;     --maxrank=7 \
</span><br>
<span class="quotelev2">&gt;&gt;     --generate=1 \
</span><br>
<span class="quotelev2">&gt;&gt;     --real16=1 \
</span><br>
<span class="quotelev2">&gt;&gt;     --complex32=1
</span><br>
<span class="quotelev2">&gt;&gt; ln -s ../../../openmpi-v1.8.5-46-g9f5f498/opal/include/opal/opal_portable_platform.h mpi_portable_platform.h
</span><br>
<span class="quotelev2">&gt;&gt; ln: failed to create symbolic link `mpi_portable_platform.h': File exists
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [mpi_portable_platform.h] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi-1.8.6-Linux.x86_64.64_gcc 261
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful, if somebody could fix the problem. Thank
</span><br>
<span class="quotelev2">&gt;&gt; you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27057.php">http://www.open-mpi.org/community/lists/users/2015/06/27057.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27069.php">Siegmar Gross: "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Previous message:</strong> <a href="27067.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>In reply to:</strong> <a href="27067.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
<li><strong>Reply:</strong> <a href="27078.php">Jeff Squyres (jsquyres): "Re: [OMPI users] building openmpi-v1.8.5-46-g9f5f498 still breaks"</a>
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
