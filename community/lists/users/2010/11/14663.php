<?
$subject_val = "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 13:21:54 2010" -->
<!-- isoreceived="20101101172154" -->
<!-- sent="Mon, 01 Nov 2010 13:21:30 -0400" -->
<!-- isosent="20101101172130" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11" -->
<!-- id="4CCEF71A.6090809_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011010958.oA19wmpQ027688_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 13:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14664.php">Jack Bryan: "Re: [OMPI users] message truncated error"</a>
<li><strong>Previous message:</strong> <a href="14662.php">Tim Prince: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>In reply to:</strong> <a href="14659.php">Siegmar Gross: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;I am able to build on Linux systems with Sun C 5.11 using gcc-4.1.2.  
<br>
Still trying to get a version of gcc 4.3.4 compiled on our systems so I 
<br>
can use it with Sun C 5.11 to build OMPI.
<br>
<p>--td
<br>
<p>On 11/01/2010 05:58 AM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Sorry, but can you give us the config line, the config.log and the
</span><br>
<span class="quotelev2">&gt;&gt; full output of make preferrably with make V=1?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; On 10/29/2010 04:30 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to build Open MPI 1.5 on Solaris X86 and x86_64 with Oracle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Studio 12.2. I can compile Open MPI with thread support, but I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only partly install it because &quot;libtool&quot; will not find &quot;f95&quot; although
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is available. &quot;make check&quot; shows no failures.
</span><br>
<span class="quotelev1">&gt; I made a mistake the first time. I'm sorry for that. This weekend I
</span><br>
<span class="quotelev1">&gt; rebuild everything and now the following installations work. &quot;ok&quot;
</span><br>
<span class="quotelev1">&gt; means I could install the package and successfully run two small
</span><br>
<span class="quotelev1">&gt; programs (one is a simple matrix multiplication with MPI and OpenMP,
</span><br>
<span class="quotelev1">&gt; 2 processes and 8 threads on a dual processor eight core SPARC64 VII
</span><br>
<span class="quotelev1">&gt; system). I used gcc-4.2.0 and Oracle/Sun C 5.11.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SunOS sparc,  32-bit, cc: ok
</span><br>
<span class="quotelev1">&gt; SunOS sparc,  64-bit, cc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86,    32-bit, cc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86_64, 32-bit, cc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86_64, 64-bit, cc: ok
</span><br>
<span class="quotelev1">&gt; Linux x86,    32-bit, cc: &quot;make&quot; still breaks
</span><br>
<span class="quotelev1">&gt; Linux x86_64, 32-bit, cc: &quot;make&quot; still breaks
</span><br>
<span class="quotelev1">&gt; Linux x86_64, 64-bit, cc: &quot;make&quot; still breaks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SunOS sparc,  32-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; SunOS sparc,  64-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86,    32-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86_64, 32-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; SunOS x86_64, 64-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; Linux x86,    32-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; Linux x86_64, 32-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt; Linux x86_64, 64-bit, gcc: ok
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problems on Solaris x86 and Solaris x86_64 could be solved using
</span><br>
<span class="quotelev1">&gt; Sun C 5.11 instead of Sun C 5.9. Unfortuantely I have still the same
</span><br>
<span class="quotelev1">&gt; problem on Linux x86 and Linux x86_64 with Sun C 5.11.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-Linux.x86_64.32_cc 417 tail -15
</span><br>
<span class="quotelev1">&gt;    log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `.../opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../opal/libltdl'
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `.../opal/asm'
</span><br>
<span class="quotelev1">&gt;    CC     asm.lo
</span><br>
<span class="quotelev1">&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../../../openmpi-1.5/opal/asm/generated/atomic-ia32-linux-nongas.s&quot;
</span><br>
<span class="quotelev1">&gt;    atomic-asm.S
</span><br>
<span class="quotelev1">&gt;    CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev1">&gt; cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
</span><br>
<span class="quotelev1">&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev1">&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../opal/asm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.5-Linux.x86_64.32_cc 418
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can switch back to Sun C 5.9 on Solaris x86(_64) systems if somebody
</span><br>
<span class="quotelev1">&gt; is interested to solve the problem for the older compiler. I used the
</span><br>
<span class="quotelev1">&gt; following options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_64_gcc \
</span><br>
<span class="quotelev1">&gt;    --libdir=/usr/local/openmpi-1.5_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;    LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.2.0/lib/sparcv9&quot; \
</span><br>
<span class="quotelev1">&gt;    CC=&quot;gcc&quot; CPP=&quot;cpp&quot; CXX=&quot;g++&quot; CXXCPP=&quot;cpp&quot; F77=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;    CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;    CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    --without-udapl --without-openib \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev1">&gt;    --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;    --enable-shared --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;    --with-threads=posix --enable-mpi-threads --disable-progress-threads \
</span><br>
<span class="quotelev1">&gt;    |&amp;  tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For x86_64 I changed one line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.2.0/lib/amd64&quot; \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_64_cc \
</span><br>
<span class="quotelev1">&gt;    --libdir=/usr/local/openmpi-1.5_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;    LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;    CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;    CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;    CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    OBJC_INCLUDE_PATH=&quot;&quot; MPICHHOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    --without-udapl --without-openib \
</span><br>
<span class="quotelev1">&gt;    --enable-mpi-f90 --with-mpi-f90-size=small \
</span><br>
<span class="quotelev1">&gt;    --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;    --enable-shared --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;    --with-threads=posix --enable-mpi-threads --disable-progress-threads \
</span><br>
<span class="quotelev1">&gt;    |&amp;  tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For 32-bit systems I changed &quot;-m64&quot; to &quot;-m32&quot;, didn't specify &quot;-L...&quot;
</span><br>
<span class="quotelev1">&gt; in LDFLAGS, and didn't use &quot;--libdir=...&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="../../att-14663/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="../../att-14663/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14664.php">Jack Bryan: "Re: [OMPI users] message truncated error"</a>
<li><strong>Previous message:</strong> <a href="14662.php">Tim Prince: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>In reply to:</strong> <a href="14659.php">Siegmar Gross: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
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
