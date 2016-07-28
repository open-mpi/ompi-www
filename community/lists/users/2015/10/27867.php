<?
$subject_val = "Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 07:52:03 2015" -->
<!-- isoreceived="20151015115203" -->
<!-- sent="Thu, 15 Oct 2015 13:51:41 +0200" -->
<!-- isosent="20151015115141" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07" -->
<!-- id="561F934D.90003_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="561F0391.1080502_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 07:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27868.php">Nick Papior: "Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Previous message:</strong> <a href="27866.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>In reply to:</strong> <a href="27866.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27868.php">Nick Papior: "Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Reply:</strong> <a href="27868.php">Nick Papior: "Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>thank you very much for your help to locate the problem.
<br>
<p><span class="quotelev1">&gt; in the mean time, and as a work around, you can make sure
</span><br>
<span class="quotelev1">&gt; CPPFLAGS is not set in your environment( or set it to &quot;&quot;), and then invoke configure
</span><br>
<span class="quotelev1">&gt; without CPPFLAGS=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; assuming you are using a bash shell, you can simply do
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=&quot;&quot; configure ...
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev1">&gt; configure ... CPPFLAGS=&quot;&quot;
</span><br>
<p>Unfortunately it doesn't work. First I used &quot;unsetenv CPPFLAGS&quot;,
<br>
&quot;unsetenv CFLAGS&quot;, and &quot;unsetenv CXXFLAGS&quot; in my tcsh environment.
<br>
I got the some error with &quot;make&quot; after &quot;configure&quot;. Next I tried
<br>
bash and your suggestion (CPPFLAGS wasn't defined but nevertheless
<br>
I tried exactly your command sequence).
<br>
<p><p>linpc1 openmpi-2.0.0 164 bash
<br>
linpc1:/export2/src/openmpi-2.0.0 # mkdir openmpi-v2.x-dev-456-g2b744c2-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
<br>
linpc1:/export2/src/openmpi-2.0.0 # cd openmpi-v2.x-dev-456-g2b744c2-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
<br>
<p>linpc1:/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc # CPPFLAGS=&quot;&quot; ../openmpi-v2.x-dev-456-g2b744c2/configure   --prefix=/usr/loc
<br>
al/openmpi-2.0.0_64_gcc   --libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64   --with-jdk-bindir=/usr/local/jdk1.8.0/bin   --with-jdk-headers=/usr/local/jdk1.8.0/include   JAVA_HOME=/usr/local/jdk1.8.0   LDFLAGS=&quot;-m64&quot; 
<br>
CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot;   --enable-mpi-cxx   --enable-cxx-exceptions   --enable-mpi-java 
<br>
--enable-heterogeneous   --enable-mpi-thread-multiple   --with-hwloc=internal   --without-verbs   --with-wrapper-cflags=&quot;-std=c11 -m64&quot;   --with-wrapper-cxxflags=&quot;-m64&quot;   --with-wrapper-fcflags=&quot;-m64&quot;   --enable-debug 
<br>
|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p>linpc1:/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc # make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p><p>linpc1:/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc # tail -15 log.make.Linux.x86_64.64_gcc
<br>
&nbsp;&nbsp;&nbsp;CC       src/class/pmix_pointer_array.lo
<br>
&nbsp;&nbsp;&nbsp;CC       src/class/pmix_hash_table.lo
<br>
&nbsp;&nbsp;&nbsp;CC       src/include/pmix_globals.lo
<br>
In file included from ../../../../../../openmpi-v2.x-dev-456-g2b744c2/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
<br>
/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27: fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or directory
<br>
compilation terminated.
<br>
make[4]: *** [src/include/pmix_globals.lo] Error 1
<br>
make[4]: Leaving directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[3]: Leaving directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc/opal'
<br>
make: *** [all-recursive] Error 1
<br>
linpc1:/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc # exit
<br>
exit
<br>
linpc1 openmpi-2.0.0 164
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/7/2015 4:42 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to build openmpi-v2.x-dev-415-g5c9b192 and
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-dev-2696-gd579a07 on my machines (Solaris 10 Sparc, Solaris 10
</span><br>
<span class="quotelev2">&gt;&gt; x86_64, and openSUSE Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13.
</span><br>
<span class="quotelev2">&gt;&gt; I got the following error on all platforms with gcc and with Sun C only
</span><br>
<span class="quotelev2">&gt;&gt; on my Linux machine. I've already reported the problem September 8th
</span><br>
<span class="quotelev2">&gt;&gt; for the master trunk (at that time I didn't have the problem for the
</span><br>
<span class="quotelev2">&gt;&gt; v2.x trunk. I use the following configure command.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../openmpi-dev-2696-gd579a07/configure \
</span><br>
<span class="quotelev2">&gt;&gt;   --prefix=/usr/local/openmpi-master_64_gcc \
</span><br>
<span class="quotelev2">&gt;&gt;   --libdir=/usr/local/openmpi-master_64_gcc/lib64 \
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
<span class="quotelev2">&gt;&gt; openmpi-v2.x-dev-415-g5c9b192:
</span><br>
<span class="quotelev2">&gt;&gt; ==============================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc 135 tail -15 log.make.Linux.x86_64.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/class/pmix_pointer_array.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/class/pmix_hash_table.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/include/pmix_globals.lo
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ../../../../../../openmpi-v2.x-dev-415-g5c9b192/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
</span><br>
<span class="quotelev2">&gt;&gt; /export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27: fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [src/include/pmix_globals.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc 135
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-dev-2696-gd579a07:
</span><br>
<span class="quotelev2">&gt;&gt; ==========================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc 158 tail -15 log.make.Linux.x86_64.64_gcc
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/class/pmix_pointer_array.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/class/pmix_hash_table.lo
</span><br>
<span class="quotelev2">&gt;&gt;   CC       src/include/pmix_globals.lo
</span><br>
<span class="quotelev2">&gt;&gt; In file included from ../../../../../../openmpi-dev-2696-gd579a07/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
</span><br>
<span class="quotelev2">&gt;&gt; /export2/src/openmpi-master/openmpi-dev-2696-gd579a07/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27: fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; compilation terminated.
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [src/include/pmix_globals.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; linpc1 openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc 159
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would be grateful if somebody can fix the problem. Thank you very much
</span><br>
<span class="quotelev2">&gt;&gt; for any help in advance.
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27826.php">http://www.open-mpi.org/community/lists/users/2015/10/27826.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27866.php">http://www.open-mpi.org/community/lists/users/2015/10/27866.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27867/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27868.php">Nick Papior: "Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Previous message:</strong> <a href="27866.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>In reply to:</strong> <a href="27866.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27868.php">Nick Papior: "Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Reply:</strong> <a href="27868.php">Nick Papior: "Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07"</a>
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
