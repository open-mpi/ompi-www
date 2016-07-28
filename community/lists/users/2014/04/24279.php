<?
$subject_val = "Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 30 11:43:17 2014" -->
<!-- isoreceived="20140430154317" -->
<!-- sent="Wed, 30 Apr 2014 08:43:06 -0700" -->
<!-- isosent="20140430154306" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc" -->
<!-- id="E160DF8A-1CBD-4A40-B41C-8ACB7C2D258A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201404301511.s3UFBYUU012794_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-30 11:43:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24280.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12"</a>
<li><strong>Previous message:</strong> <a href="24278.php">Siegmar Gross: "[OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<li><strong>In reply to:</strong> <a href="24278.php">Siegmar Gross: "[OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My bad - forgot to remove a stale line of code exposed by the --enable-heterogeneous option. Fixed in r31567
<br>
<p>Sorry about that...
<br>
<p>On Apr 30, 2014, at 8:11 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to install openmpi-1.9a1r31561 on my machines (openSUSE
</span><br>
<span class="quotelev1">&gt; Linux 12.1 x86_64, Solaris 10 x86_64, and Solaris 10 Sparc) with
</span><br>
<span class="quotelev1">&gt; &quot;Sun C 5.12&quot; and gcc-4.9.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got the following error on all platforms using gcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r31561-Linux.x86_64.64_gcc 146 tail -15 log.make.Linux.x86_64.64_gcc 
</span><br>
<span class="quotelev1">&gt;  CC       group/group_bitmap.lo
</span><br>
<span class="quotelev1">&gt;  CC       info/info.lo
</span><br>
<span class="quotelev1">&gt;  CC       message/message.lo
</span><br>
<span class="quotelev1">&gt;  CC       op/op.lo
</span><br>
<span class="quotelev1">&gt;  CC       proc/proc.lo
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r31561/ompi/proc/proc.c: In function 'ompi_proc_unpack':
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r31561/ompi/proc/proc.c:797:66: error: expected ';' before ')' token
</span><br>
<span class="quotelev1">&gt;                                    (void**)&amp;new_arch, OPAL_UINT32);
</span><br>
<span class="quotelev1">&gt;                                                                  ^
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.9a1r31561/ompi/proc/proc.c:797:66: error:
</span><br>
<span class="quotelev1">&gt;  expected statement before ')' token
</span><br>
<span class="quotelev1">&gt; make[2]: *** [proc/proc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r31561-Linux.x86_64.64_gcc 147 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got the following error on all platforms using cc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r31561-Linux.x86_64.64_cc 154 tail -8 log.make.Linux.x86_64.64_cc
</span><br>
<span class="quotelev1">&gt; &quot;../../openmpi-1.9a1r31561/opal/include/opal/sys/atomic_impl.h&quot;,
</span><br>
<span class="quotelev1">&gt;  line 217: warning: statement not reached
</span><br>
<span class="quotelev1">&gt; &quot;../../openmpi-1.9a1r31561/ompi/proc/proc.c&quot;, line 797:
</span><br>
<span class="quotelev1">&gt;  syntax error before or at: )
</span><br>
<span class="quotelev1">&gt; cc: acomp failed for ../../openmpi-1.9a1r31561/ompi/proc/proc.c
</span><br>
<span class="quotelev1">&gt; make[2]: *** [proc/proc.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `.../ompi'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `.../ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r31561-Linux.x86_64.64_cc 155 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured with the following commands.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.9a1r31561/configure --prefix=/usr/local/openmpi-1.9_64_gcc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.9_64_gcc/lib64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64 -L/usr/local/gcc-4.9.0/lib64&quot; \
</span><br>
<span class="quotelev1">&gt;  CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;  --without-verbs \
</span><br>
<span class="quotelev1">&gt;  --without-sctp \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.9a1r31561/configure --prefix=/usr/local/openmpi-1.9_64_cc \
</span><br>
<span class="quotelev1">&gt;  --libdir=/usr/local/openmpi-1.9_64_cc/lib64 \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev1">&gt;  --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev1">&gt;  JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev1">&gt;  LDFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CC=&quot;cc&quot; CXX=&quot;CC&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64 -library=stlport4&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev1">&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;  CPPFLAGS=&quot;&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-cxx \
</span><br>
<span class="quotelev1">&gt;  --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-java \
</span><br>
<span class="quotelev1">&gt;  --enable-heterogeneous \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev1">&gt;  --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;  --with-hwloc=internal \
</span><br>
<span class="quotelev1">&gt;  --without-verbs \
</span><br>
<span class="quotelev1">&gt;  --without-sctp \
</span><br>
<span class="quotelev1">&gt;  --with-wrapper-cflags=-m64 \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody could solve the problems. Thank
</span><br>
<span class="quotelev1">&gt; you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got the following warnings using Sun C and no warnings with gcc,
</span><br>
<span class="quotelev1">&gt; if somebody is interested in warnings. By the way, I get the same
</span><br>
<span class="quotelev1">&gt; warnings with openmpi-1.8.2a1r31556.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.9a1r31561-Linux.x86_64.64_cc 159 grep warning log.make.Linux.x86_64.64_cc | sort | uniq
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../openmpi-1.9a1r31561/opal/mca/hwloc/hwloc172/hwloc/src/topology-custom.c&quot;, line 85: warning: 
</span><br>
<span class="quotelev1">&gt; initializer will be sign-extended: -1
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../openmpi-1.9a1r31561/opal/mca/hwloc/hwloc172/hwloc/src/topology-linux.c&quot;, line 2505: warning: 
</span><br>
<span class="quotelev1">&gt; initializer will be sign-extended: -1
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../openmpi-1.9a1r31561/opal/mca/hwloc/hwloc172/hwloc/src/topology-synthetic.c&quot;, line 433: 
</span><br>
<span class="quotelev1">&gt; warning: initializer will be sign-extended: -1
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../../../openmpi-1.9a1r31561/opal/mca/hwloc/hwloc172/hwloc/src/topology-xml.c&quot;, line 1152: warning: 
</span><br>
<span class="quotelev1">&gt; initializer will be sign-extended: -1
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/amd64/atomic.h&quot;, line 136: warning: parameter in inline 
</span><br>
<span class="quotelev1">&gt; asm statement unused: %3
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/amd64/atomic.h&quot;, line 182: warning: parameter in inline 
</span><br>
<span class="quotelev1">&gt; asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/amd64/atomic.h&quot;, line 203: warning: parameter in inline 
</span><br>
<span class="quotelev1">&gt; asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/amd64/atomic.h&quot;, line 224: warning: parameter in inline 
</span><br>
<span class="quotelev1">&gt; asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/amd64/atomic.h&quot;, line 245: warning: parameter in inline 
</span><br>
<span class="quotelev1">&gt; asm statement unused: %2
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/atomic_impl.h&quot;, line 167: warning: statement not reached
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/atomic_impl.h&quot;, line 192: warning: statement not reached
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r31561/opal/include/opal/sys/atomic_impl.h&quot;, line 217: warning: statement not reached
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.9a1r31561/orte/mca/odls/default/odls_default_module.c&quot;, line 564: warning: statement not 
</span><br>
<span class="quotelev1">&gt; reached
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;gcc&quot; reports the following warning for openmpi-1.8.2a1r31556.
</span><br>
<span class="quotelev1">&gt; I don't see this warning in openmpi-1.9a1r31561.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.8.2a1r31556-Linux.x86_64.64_gcc 176 grep warning \
</span><br>
<span class="quotelev1">&gt; log.make.Linux.x86_64.64_gcc | sort | uniq
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.2a1r31556/ompi/mpi/java/java/CartComm.java:100:
</span><br>
<span class="quotelev1">&gt;  warning: no description for @throws
</span><br>
<span class="quotelev1">&gt; ...
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24280.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error in openmpi-1.8.2a1r31556 with Sun C 5.12"</a>
<li><strong>Previous message:</strong> <a href="24278.php">Siegmar Gross: "[OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
<li><strong>In reply to:</strong> <a href="24278.php">Siegmar Gross: "[OMPI users] Error in openmpi-1.9a1r31561 using gcc or cc"</a>
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
