<?
$subject_val = "Re: [OMPI users] fatalerror:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 09:53:10 2015" -->
<!-- isoreceived="20151015135310" -->
<!-- sent="Thu, 15 Oct 2015 15:52:35 +0200" -->
<!-- isosent="20151015135235" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fatalerror:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07" -->
<!-- id="561FAFA3.1030608_at_informatik.hs-fulda.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAAbhqc7kA4aDOU-c+T3RMkRZk3ANoFmAzdN=d+01ug=GtaM8Pw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] fatalerror:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 09:52:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27871.php">Zhi Zhang: "[OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Previous message:</strong> <a href="27869.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>In reply to:</strong> <a href="27868.php">Nick Papior: "Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27869.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nick, hi Gilles,
<br>
<p>thank you very much! Now I can compile the package. CPPFLAGS
<br>
didn't break the built procecss in the past and still doesn't
<br>
break it for openmpi-1.10.1rc2. Nevertheless I've removed it
<br>
from my configure commands.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; 2015-10-15 13:51 GMT+02:00 Siegmar Gross
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     thank you very much for your help to locate the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         in the mean time, and as a work around, you can make sure
</span><br>
<span class="quotelev1">&gt;         CPPFLAGS is not set in your environment( or set it to &quot;&quot;), and
</span><br>
<span class="quotelev1">&gt;         then invoke configure
</span><br>
<span class="quotelev1">&gt;         without CPPFLAGS=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         assuming you are using a bash shell, you can simply do
</span><br>
<span class="quotelev1">&gt;         CPPFLAGS=&quot;&quot; configure ...
</span><br>
<span class="quotelev1">&gt;         instead of
</span><br>
<span class="quotelev1">&gt;         configure ... CPPFLAGS=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Unfortunately it doesn't work. First I used &quot;unsetenv CPPFLAGS&quot;,
</span><br>
<span class="quotelev1">&gt;     &quot;unsetenv CFLAGS&quot;, and &quot;unsetenv CXXFLAGS&quot; in my tcsh environment.
</span><br>
<span class="quotelev1">&gt;     I got the some error with &quot;make&quot; after &quot;configure&quot;. Next I tried
</span><br>
<span class="quotelev1">&gt;     bash and your suggestion (CPPFLAGS wasn't defined but nevertheless
</span><br>
<span class="quotelev1">&gt;     I tried exactly your command sequence).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     linpc1 openmpi-2.0.0 164 bash
</span><br>
<span class="quotelev1">&gt;     linpc1:/export2/src/openmpi-2.0.0 # mkdir
</span><br>
<span class="quotelev1">&gt;     openmpi-v2.x-dev-456-g2b744c2-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt;     linpc1:/export2/src/openmpi-2.0.0 # cd
</span><br>
<span class="quotelev1">&gt;     openmpi-v2.x-dev-456-g2b744c2-${SYSTEM_ENV}.${MACHINE_ENV}.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     linpc1:/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc
</span><br>
<span class="quotelev1">&gt;     # CPPFLAGS=&quot;&quot; ../openmpi-v2.x-dev-456-g2b744c2/configure
</span><br>
<span class="quotelev1">&gt;       --prefix=/usr/loc
</span><br>
<span class="quotelev1">&gt;     al/openmpi-2.0.0_64_gcc
</span><br>
<span class="quotelev1">&gt;       --libdir=/usr/local/openmpi-2.0.0_64_gcc/lib64
</span><br>
<span class="quotelev1">&gt;       --with-jdk-bindir=/usr/local/jdk1.8.0/bin
</span><br>
<span class="quotelev1">&gt;       --with-jdk-headers=/usr/local/jdk1.8.0/include
</span><br>
<span class="quotelev1">&gt;       JAVA_HOME=/usr/local/jdk1.8.0   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot;
</span><br>
<span class="quotelev1">&gt;     FC=&quot;gfortran&quot;   CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt;       CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot;   CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;       --enable-mpi-cxx   --enable-cxx-exceptions   --enable-mpi-java
</span><br>
<span class="quotelev1">&gt;     --enable-heterogeneous   --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;       --with-hwloc=internal   --without-verbs
</span><br>
<span class="quotelev1">&gt;       --with-wrapper-cflags=&quot;-std=c11 -m64&quot;
</span><br>
<span class="quotelev1">&gt;       --with-wrapper-cxxflags=&quot;-m64&quot;   --with-wrapper-fcflags=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt;       --enable-debug |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have CPPFLAGS twice, one the correct place, the other exactly where
</span><br>
<span class="quotelev1">&gt; Gilles said you shouldn't have it. (right after CXXCPP).
</span><br>
<span class="quotelev1">&gt; Besides it would probably be better to do:
</span><br>
<span class="quotelev1">&gt; $&gt; unsetenv CPPFLAGS
</span><br>
<span class="quotelev1">&gt; $&gt; ./configure ...
</span><br>
<span class="quotelev1">&gt; without CPPFLAGS anywhere in the configure step.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     linpc1:/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc
</span><br>
<span class="quotelev1">&gt;     # make |&amp; tee log.make.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     linpc1:/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc
</span><br>
<span class="quotelev1">&gt;     # tail -15 log.make.Linux.x86_64.64_gcc
</span><br>
<span class="quotelev1">&gt;        CC       src/class/pmix_pointer_array.lo
</span><br>
<span class="quotelev1">&gt;        CC       src/class/pmix_hash_table.lo
</span><br>
<span class="quotelev1">&gt;        CC       src/include/pmix_globals.lo
</span><br>
<span class="quotelev1">&gt;     In file included from
</span><br>
<span class="quotelev1">&gt;     ../../../../../../openmpi-v2.x-dev-456-g2b744c2/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
</span><br>
<span class="quotelev1">&gt;     /export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27:
</span><br>
<span class="quotelev1">&gt;     fatal error: opal/mca/event/libevent2022/libevent2022.h: No such
</span><br>
<span class="quotelev1">&gt;     file or directory
</span><br>
<span class="quotelev1">&gt;     compilation terminated.
</span><br>
<span class="quotelev1">&gt;     make[4]: *** [src/include/pmix_globals.lo] Error 1
</span><br>
<span class="quotelev1">&gt;     make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt;     `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev1">&gt;     make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;     make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt;     `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev1">&gt;     make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;     make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;     `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx'
</span><br>
<span class="quotelev1">&gt;     make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;     make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;     `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc/opal'
</span><br>
<span class="quotelev1">&gt;     make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;     linpc1:/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-456-g2b744c2-Linux.x86_64.64_gcc
</span><br>
<span class="quotelev1">&gt;     # exit
</span><br>
<span class="quotelev1">&gt;     exit
</span><br>
<span class="quotelev1">&gt;     linpc1 openmpi-2.0.0 164
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 10/7/2015 4:42 PM, Siegmar Gross wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I tried to build openmpi-v2.x-dev-415-g5c9b192 and
</span><br>
<span class="quotelev1">&gt;             openmpi-dev-2696-gd579a07 on my machines (Solaris 10 Sparc,
</span><br>
<span class="quotelev1">&gt;             Solaris 10
</span><br>
<span class="quotelev1">&gt;             x86_64, and openSUSE Linux 12.1 x86_64) with gcc-5.1.0 and
</span><br>
<span class="quotelev1">&gt;             Sun C 5.13.
</span><br>
<span class="quotelev1">&gt;             I got the following error on all platforms with gcc and with
</span><br>
<span class="quotelev1">&gt;             Sun C only
</span><br>
<span class="quotelev1">&gt;             on my Linux machine. I've already reported the problem
</span><br>
<span class="quotelev1">&gt;             September 8th
</span><br>
<span class="quotelev1">&gt;             for the master trunk (at that time I didn't have the problem
</span><br>
<span class="quotelev1">&gt;             for the
</span><br>
<span class="quotelev1">&gt;             v2.x trunk. I use the following configure command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ../openmpi-dev-2696-gd579a07/configure \
</span><br>
<span class="quotelev1">&gt;                --prefix=/usr/local/openmpi-master_64_gcc \
</span><br>
<span class="quotelev1">&gt;                --libdir=/usr/local/openmpi-master_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;                --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;                --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;                JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;                LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;                CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;                CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;                CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;                --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;                --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;                --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;                --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;                --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;                --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;                --without-verbs \
</span><br>
<span class="quotelev1">&gt;                --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;                --with-wrapper-cxxflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;                --with-wrapper-fcflags=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;                --enable-debug \
</span><br>
<span class="quotelev1">&gt;                |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             openmpi-v2.x-dev-415-g5c9b192:
</span><br>
<span class="quotelev1">&gt;             ==============================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             linpc1 openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc 135
</span><br>
<span class="quotelev1">&gt;             tail -15 log.make.Linux.x86_64.64_gcc
</span><br>
<span class="quotelev1">&gt;                CC       src/class/pmix_pointer_array.lo
</span><br>
<span class="quotelev1">&gt;                CC       src/class/pmix_hash_table.lo
</span><br>
<span class="quotelev1">&gt;                CC       src/include/pmix_globals.lo
</span><br>
<span class="quotelev1">&gt;             In file included from
</span><br>
<span class="quotelev1">&gt;             ../../../../../../openmpi-v2.x-dev-415-g5c9b192/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
</span><br>
<span class="quotelev1">&gt;             /export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27:
</span><br>
<span class="quotelev1">&gt;             fatal error: opal/mca/event/libevent2022/libevent2022.h: No
</span><br>
<span class="quotelev1">&gt;             such file or directory
</span><br>
<span class="quotelev1">&gt;             compilation terminated.
</span><br>
<span class="quotelev1">&gt;             make[4]: *** [src/include/pmix_globals.lo] Error 1
</span><br>
<span class="quotelev1">&gt;             make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev1">&gt;             make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;             make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev1">&gt;             make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;             make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx'
</span><br>
<span class="quotelev1">&gt;             make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;             make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/export2/src/openmpi-2.0.0/openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc/opal'
</span><br>
<span class="quotelev1">&gt;             make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;             linpc1 openmpi-v2.x-dev-415-g5c9b192-Linux.x86_64.64_gcc 135
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             openmpi-dev-2696-gd579a07:
</span><br>
<span class="quotelev1">&gt;             ==========================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             linpc1 openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc 158
</span><br>
<span class="quotelev1">&gt;             tail -15 log.make.Linux.x86_64.64_gcc
</span><br>
<span class="quotelev1">&gt;                CC       src/class/pmix_pointer_array.lo
</span><br>
<span class="quotelev1">&gt;                CC       src/class/pmix_hash_table.lo
</span><br>
<span class="quotelev1">&gt;                CC       src/include/pmix_globals.lo
</span><br>
<span class="quotelev1">&gt;             In file included from
</span><br>
<span class="quotelev1">&gt;             ../../../../../../openmpi-dev-2696-gd579a07/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
</span><br>
<span class="quotelev1">&gt;             /export2/src/openmpi-master/openmpi-dev-2696-gd579a07/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27:
</span><br>
<span class="quotelev1">&gt;             fatal error: opal/mca/event/libevent2022/libevent2022.h: No
</span><br>
<span class="quotelev1">&gt;             such file or directory
</span><br>
<span class="quotelev1">&gt;             compilation terminated.
</span><br>
<span class="quotelev1">&gt;             make[4]: *** [src/include/pmix_globals.lo] Error 1
</span><br>
<span class="quotelev1">&gt;             make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev1">&gt;             make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;             make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev1">&gt;             make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;             make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal/mca/pmix/pmix1xx'
</span><br>
<span class="quotelev1">&gt;             make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;             make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt;             `/export2/src/openmpi-master/openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc/opal'
</span><br>
<span class="quotelev1">&gt;             make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;             linpc1 openmpi-dev-2696-gd579a07-Linux.x86_64.64_gcc 159
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I would be grateful if somebody can fix the problem. Thank
</span><br>
<span class="quotelev1">&gt;             you very much
</span><br>
<span class="quotelev1">&gt;             for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             Link to this
</span><br>
<span class="quotelev1">&gt;             post:<a href="http://www.open-mpi.org/community/lists/users/2015/10/27826.php">http://www.open-mpi.org/community/lists/users/2015/10/27826.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/10/27866.php">http://www.open-mpi.org/community/lists/users/2015/10/27866.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/10/27867.php">http://www.open-mpi.org/community/lists/users/2015/10/27867.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27868.php">http://www.open-mpi.org/community/lists/users/2015/10/27868.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27870/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27871.php">Zhi Zhang: "[OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Previous message:</strong> <a href="27869.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>In reply to:</strong> <a href="27868.php">Nick Papior: "Re: [OMPI users] fatal error:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27869.php">Gilles Gouaillardet: "Re: [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
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
