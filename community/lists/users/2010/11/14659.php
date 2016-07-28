<?
$subject_val = "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 06:06:35 2010" -->
<!-- isoreceived="20101101100635" -->
<!-- sent="Mon, 1 Nov 2010 10:58:48 +0100 (CET)" -->
<!-- isosent="20101101095848" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11" -->
<!-- id="201011010958.oA19wmpQ027688_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 05:58:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14660.php">Trent Creekmore: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Previous message:</strong> <a href="14658.php">jody: "[OMPI users] link problem on 64bit platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14663.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
<li><strong>Reply:</strong> <a href="14663.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt;   Sorry, but can you give us the config line, the config.log and the 
</span><br>
<span class="quotelev1">&gt; full output of make preferrably with make V=1?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; On 10/29/2010 04:30 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to build Open MPI 1.5 on Solaris X86 and x86_64 with Oracle
</span><br>
<span class="quotelev2">&gt; &gt; Studio 12.2. I can compile Open MPI with thread support, but I can
</span><br>
<span class="quotelev2">&gt; &gt; only partly install it because &quot;libtool&quot; will not find &quot;f95&quot; although
</span><br>
<span class="quotelev2">&gt; &gt; it is available. &quot;make check&quot; shows no failures.
</span><br>
<p>I made a mistake the first time. I'm sorry for that. This weekend I
<br>
rebuild everything and now the following installations work. &quot;ok&quot;
<br>
means I could install the package and successfully run two small
<br>
programs (one is a simple matrix multiplication with MPI and OpenMP,
<br>
2 processes and 8 threads on a dual processor eight core SPARC64 VII
<br>
system). I used gcc-4.2.0 and Oracle/Sun C 5.11.
<br>
<p>SunOS sparc,  32-bit, cc: ok
<br>
SunOS sparc,  64-bit, cc: ok
<br>
SunOS x86,    32-bit, cc: ok
<br>
SunOS x86_64, 32-bit, cc: ok
<br>
SunOS x86_64, 64-bit, cc: ok
<br>
Linux x86,    32-bit, cc: &quot;make&quot; still breaks
<br>
Linux x86_64, 32-bit, cc: &quot;make&quot; still breaks
<br>
Linux x86_64, 64-bit, cc: &quot;make&quot; still breaks
<br>
<p>SunOS sparc,  32-bit, gcc: ok
<br>
SunOS sparc,  64-bit, gcc: ok
<br>
SunOS x86,    32-bit, gcc: ok
<br>
SunOS x86_64, 32-bit, gcc: ok
<br>
SunOS x86_64, 64-bit, gcc: ok
<br>
Linux x86,    32-bit, gcc: ok
<br>
Linux x86_64, 32-bit, gcc: ok
<br>
Linux x86_64, 64-bit, gcc: ok
<br>
<p>The problems on Solaris x86 and Solaris x86_64 could be solved using
<br>
Sun C 5.11 instead of Sun C 5.9. Unfortuantely I have still the same
<br>
problem on Linux x86 and Linux x86_64 with Sun C 5.11.
<br>
<p>tyr openmpi-1.5-Linux.x86_64.32_cc 417 tail -15
<br>
&nbsp;&nbsp;log.make.Linux.x86_64.32_cc
<br>
make[3]: Leaving directory `.../opal/libltdl'
<br>
make[2]: Leaving directory `.../opal/libltdl'
<br>
Making all in asm
<br>
make[2]: Entering directory `.../opal/asm'
<br>
&nbsp;&nbsp;CC     asm.lo
<br>
rm -f atomic-asm.S
<br>
ln -s &quot;../../../openmpi-1.5/opal/asm/generated/atomic-ia32-linux-nongas.s&quot;
<br>
&nbsp;&nbsp;atomic-asm.S
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
<br>
cc: cpp failed for atomic-asm.S
<br>
make[2]: *** [atomic-asm.lo] Error 1
<br>
make[2]: Leaving directory `.../opal/asm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../opal'
<br>
make: *** [all-recursive] Error 1
<br>
tyr openmpi-1.5-Linux.x86_64.32_cc 418 
<br>
<p>I can switch back to Sun C 5.9 on Solaris x86(_64) systems if somebody
<br>
is interested to solve the problem for the older compiler. I used the
<br>
following options:
<br>
<p>../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_64_gcc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.5_64_gcc/lib64 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.2.0/lib/sparcv9&quot; \
<br>
&nbsp;&nbsp;CC=&quot;gcc&quot; CPP=&quot;cpp&quot; CXX=&quot;g++&quot; CXXCPP=&quot;cpp&quot; F77=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
<br>
&nbsp;&nbsp;--without-udapl --without-openib \
<br>
&nbsp;&nbsp;--enable-mpi-f90 --with-mpi-f90-size=small \
<br>
&nbsp;&nbsp;--enable-heterogeneous --enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-shared --enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;--with-threads=posix --enable-mpi-threads --disable-progress-threads \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
<br>
<p>For x86_64 I changed one line:
<br>
<p>&nbsp;&nbsp;LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.2.0/lib/amd64&quot; \
<br>
<p><p>../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.5_64_cc/lib64 \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f77&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; MPICHHOME=&quot;&quot; \
<br>
&nbsp;&nbsp;--without-udapl --without-openib \
<br>
&nbsp;&nbsp;--enable-mpi-f90 --with-mpi-f90-size=small \
<br>
&nbsp;&nbsp;--enable-heterogeneous --enable-cxx-exceptions \
<br>
&nbsp;&nbsp;--enable-shared --enable-orterun-prefix-by-default \
<br>
&nbsp;&nbsp;--with-threads=posix --enable-mpi-threads --disable-progress-threads \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p>For 32-bit systems I changed &quot;-m64&quot; to &quot;-m32&quot;, didn't specify &quot;-L...&quot;
<br>
in LDFLAGS, and didn't use &quot;--libdir=...&quot;.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14660.php">Trent Creekmore: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Previous message:</strong> <a href="14658.php">jody: "[OMPI users] link problem on 64bit platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14663.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
<li><strong>Reply:</strong> <a href="14663.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
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
